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
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/admin/css/admin.css') }}">
    <style>
        .ck-editor__editable_inline {
            min-height: 300px;
        }
    </style>
</head>
<body>
<div class="app">
    @include('admin.layouts.sidebar')
    <!-- Content Header (Page header) -->
    <div class="app-content">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Статьи</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Blank Page</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Список статей</h3>
                            </div>
                            @include('layouts.alerts')
                            <!-- /.card-header -->
                            <div class="card-body">
                                <a href="{{ route('categories.create') }}" class="btn btn-primary mb-3">Добавить
                                    Категорию</a>
                                @if (count($categories))
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover text-nowrap">
                                            <thead>
                                            <tr>
                                                <th style="width: 30px">#</th>
                                                <th>Наименование</th>
                                                <th>Слуг</th>
                                                <th>Дата</th>
                                                <th>Actions</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($categories as $category)
                                                <tr>
                                                    <td>{{ $category->id }}</td>
                                                    <td>{{ $category->title }}</td>
                                                    <td>{{ $category->slug }}</td>
                                                    <!-- Выводим категорию которой принадлежит данная статья -->
                                                    <td>{{ $category->created_at }}</td>
                                                    <td>
                                                        <a href="{{ route('categories.edit', ['category' => $category->id]) }}"
                                                           class="btn btn-info btn-sm float-left mr-1">
                                                            <i class="fas fa-pencil-alt">Edit</i>
                                                        </a>

                                                        <form
                                                            action="{{ route('categories.destroy', ['category' => $category->id]) }}"
                                                            method="post" class="float-left">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger btn-sm"
                                                                    onclick="return confirm('Подтвердите удаление')">
                                                                <i
                                                                    class="fas fa-trash-alt">Delete</i>
                                                            </button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                @else
                                    <p>Статей пока нет...</p>
                                @endif
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer clearfix">
                                {{ $categories->links() }}
                            </div>
                        </div>
                        <!-- /.card -->

                    </div>
                    <!-- /.col -->
                </div>

                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
    </div>
</div>
<!-- /.content -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.1/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/highlight.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.bundle.min.js"></script>
<script src="/public/assets/Admin%204B/dist/admin4b.min.js?v=2.1.0"></script>
<script src="/public/assets/Admin%204B/docs/assets/js/docs.js"></script>
</body>
</html>

