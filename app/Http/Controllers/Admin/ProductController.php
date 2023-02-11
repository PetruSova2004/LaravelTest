<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::with('category')->paginate(20);
        return view('admin.products.product', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::pluck('title', 'id')->all();
        return view('admin.products.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'category_id' => 'required|integer',
            'title' => 'required',
            'slug' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'cont' => 'required',
            'image' => 'required',
        ]);

        $path = $request->file('image')->store('img', 'public'); // получим путь к картинке

//        $request['slug'] = Str::lower($request['slug']);
        $request['slug'] = Str::slug($request['slug']);
        Product::create([
            'category_id' => $request->category_id,
            'slug' => $request->slug,
            'title' => $request->title,
            'description' => $request->description,
            'content' => $request->cont,
            'price' => $request->price,
            'img' => $path
        ]);

//        return dd($request->all());
        return redirect()->back()->with('success', 'Product has been added');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        $categories = Category::pluck('title', 'id')->all();

        return view('admin.products.edit', compact('product', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'category_id' => 'required|integer',
            'title' => 'required',
            'slug' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'cont' => 'required',
            'image' => 'required',
        ]);
        $path = $request->file('image')->store('img', 'public'); // получим путь к картинке
        $request['slug'] = Str::slug($request['slug']);

        $product = Product::find($id);
        $updated_product = $product->update([
            'category_id' => $request->category_id,
            'slug' => $request->slug,
            'title' => $request->title,
            'description' => $request->description,
            'content' => $request->cont,
            'price' => $request->price,
            'img' => $path
        ]);

        return redirect()->route('products.create')->with('success', 'Successfully update');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::destroy($id);
        return redirect()->route('products.index')->with('success', 'Product has been successfully delete');
    }
}
