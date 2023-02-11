<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="theme-color" content="#2e8cc2">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <meta name="author" content="Marx JMoura">
    <meta name="copyright" content="Marx J. Moura">
    <meta name="description" content="Blank page is a startup point for creating your content.">
    <title>Admin 4B · Blank page</title>
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
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown"><a href="#" class="nav-link dropdown-toggle" role="button"
                                                     data-toggle="dropdown" aria-haspopup="true"
                                                     aria-expanded="false"><span
                                class="badge badge-pill badge-primary">3</span> <i class="fa fa-bell-o"></i></a>
                        <div class="dropdown-menu dropdown-menu-right"><a
                                href="/public/assets/Admin%204B/docs/pages/content/notification.html"
                                class="dropdown-item"><small class="dropdown-item-title">Lorem
                                    ipsum (today)</small><br>
                                <div>Lorem ipsum dolor sit amet...</div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="/public/assets/Admin%204B/docs/pages/content/notification.html"
                               class="dropdown-item"><small class="text-muted">Lorem
                                    ipsum (yesterday)</small><br>
                                <div>Lorem ipsum dolor sit amet...</div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="/public/assets/Admin%204B/docs/pages/content/notification.html"
                               class="dropdown-item"><small class="text-muted">Lorem
                                    ipsum (12/25/2017)</small><br>
                                <div>Lorem ipsum dolor sit amet...</div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="/public/assets/Admin%204B/docs/pages/content/notifications.html"
                               class="dropdown-item dropdown-link">See all
                                notifications</a></div>
                    </li>
                </ul>
            </nav>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">Pages</li>
                    <li class="breadcrumb-item">Blank page</li>
                </ol>
            </nav>
        </div>
        <div class="content-body">
            <div class="container">Content goes here...</div>
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
