<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="theme-color" content="#2e8cc2">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <meta name="author" content="Marx JMoura">
    <meta name="copyright" content="Marx J. Moura">
    <meta name="description" content="Create simple forms using basic elements.">
    <title>Admin 4B · Basic form</title>
    <link rel="icon" href="/public/assets/Admin%204B/docs/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="/public/assets/Admin%204B/dist/admin4b.min.css?v=2.1.0" rel="stylesheet">
    <link href="/public/assets/Admin%204B/docs/assets/css/custom.css" rel="stylesheet">
</head>
<body>
<div class="app">
    @include('admin.layouts.sidebar')
    <div class="app-content">
        <div class="content-header">
            <nav class="navbar navbar-expand navbar-light bg-white">
                <div class="navbar-brand">
                    <button type="button" class="btn btn-sidebar" data-toggle="sidebar"><i class="fa fa-bars"></i>
                    </button>
                    <span class="pr-2">Admin 4B</span> <a href="https://github.com/marxjmoura/admin4b"
                                                          class="text-dark decoration-none" data-toggle="tooltip"
                                                          data-placement="right" title="Fork me on GitHub"><i
                            class="fa fa-github"></i></a></div>
            </nav>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">Forms</li>
                    <li class="breadcrumb-item">Basic form</li>
                </ol>
            </nav>
        </div>
        <div class="content-body">
            <div class="container">
                @include('layouts.alerts')
                <div class="card">
                    <form role="form" method="post" action="{{route('categories.update', ['category' => $category->id])}}"
                          enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 col-md-4 col-lg-4">
                                    <div class="form-group"><label>Title</label>
                                        <input type="text" class="form-control" name="title"
                                               value="{{$category->title}}">
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 col-lg-4">
                                    <div class="form-group"><label>Slug</label>
                                        <input type="text" class="form-control" name="slug" value="{{$category->slug}}">
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary mr-1">Save</button>
                            <button type="button" class="btn btn-secondary">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>


            <div class="source-code"><a href="#basic-form" data-toggle="collapse"><i class="fa fa-code"></i> Source
                    code</a>
                <div id="basic-form" class="collapse"><pre><code class="html">&lt;div class&#x3D;&quot;card&quot;&gt;
  &lt;div class&#x3D;&quot;card-body&quot;&gt;
    &lt;div class&#x3D;&quot;row&quot;&gt;
      &lt;div class&#x3D;&quot;col-12 col-md-4 col-lg-4&quot;&gt;
        &lt;div class&#x3D;&quot;form-group has-error&quot;&gt;
          &lt;label&gt;Name&lt;/label&gt;
          &lt;input type&#x3D;&quot;text&quot; class&#x3D;&quot;form-control&quot;&gt;
          &lt;small class&#x3D;&quot;text-danger&quot;&gt;Field name is required.&lt;/small&gt;
        &lt;/div&gt;
      &lt;/div&gt;
      &lt;div class&#x3D;&quot;col-12 col-md-4 col-lg-4&quot;&gt;
        &lt;div class&#x3D;&quot;form-group has-error&quot;&gt;
          &lt;label&gt;Email&lt;/label&gt;
          &lt;input type&#x3D;&quot;text&quot; class&#x3D;&quot;form-control&quot;&gt;
          &lt;small class&#x3D;&quot;text-danger&quot;&gt;Field email is invalid.&lt;/small&gt;
        &lt;/div&gt;
      &lt;/div&gt;
      &lt;div class&#x3D;&quot;col-12 col-md-4 col-lg-4&quot;&gt;
        &lt;div class&#x3D;&quot;form-group&quot;&gt;
          &lt;label&gt;
            Company &lt;small class&#x3D;&quot;text-muted&quot;&gt;(optional)&lt;/small&gt;
          &lt;/label&gt;
          &lt;input type&#x3D;&quot;text&quot; class&#x3D;&quot;form-control&quot;&gt;
        &lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;
    &lt;div&gt;
      &lt;label&gt;
        Notes &lt;small class&#x3D;&quot;text-muted&quot;&gt;(optional)&lt;/small&gt;
      &lt;/label&gt;
      &lt;textarea rows&#x3D;&quot;3&quot; class&#x3D;&quot;form-control&quot;&gt;&lt;/textarea&gt;
      &lt;small class&#x3D;&quot;text-muted&quot;&gt;Maximum 255 characters.&lt;/small&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;div class&#x3D;&quot;form-group&quot;&gt;
  &lt;button type&#x3D;&quot;submit&quot; class&#x3D;&quot;btn btn-success&quot;&gt;
    Save
  &lt;/button&gt;
  &lt;button type&#x3D;&quot;button&quot; class&#x3D;&quot;btn btn-outline-secondary&quot;&gt;
    Cancel
  &lt;/button&gt;
&lt;/div&gt;
</code></pre>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.1/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/highlight.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.bundle.min.js"></script>
<script src="/public/assets/Admin%204B/dist/admin4b.min.js?v=2.1.0"></script>
<script src="/public/assets/Admin%204B/docs/assets/js/docs.js"></script>


</body>
</html>
