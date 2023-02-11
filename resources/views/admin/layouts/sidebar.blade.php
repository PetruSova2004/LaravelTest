<div class="app-sidebar">
    <div class="sidebar-header">
        <svg class="avatar">
            <use href="/docs/assets/img/faces.svg#john"/>
        </svg>
        <div class="username"><span>{{\Illuminate\Support\Facades\Auth::user()->name}}</span>
            <small>{{\Illuminate\Support\Facades\Auth::user()->email}}</small></div>
    </div>
    <div id="sidebar-nav" class="sidebar-nav">
        <ul>
            <li><a href={{route('index')}}><span
                        class="sidebar-nav-icon fa fa-rocket"></span> <span
                        class="sidebar-nav-text">Home</span></a></li>
        </ul>
        <hr>
        <span class="sidebar-nav-header">Guideline</span>
        <ul>
            <li><a href={{route('products.index')}}><span
                        class="sidebar-nav-icon fa fa-laptop"></span> <span
                        class="sidebar-nav-text">Products</span></a>
            </li>
            <li><a href={{route('categories.index')}}><span
                        class="sidebar-nav-icon fa fa-laptop"></span> <span
                        class="sidebar-nav-text">Categories</span></a>
            </li>
            <li><a href={{route('users.index')}}><span
                        class="sidebar-nav-icon fa fa-laptop"></span> <span
                        class="sidebar-nav-text">Users</span></a>
            </li>
        </ul>
        <hr>
        <ul>
            <li><a href={{route('logout')}}><span
                        class="sidebar-nav-icon fa fa-power-off"></span> <span
                        class="sidebar-nav-text">Log out</span></a></li>
        </ul>
    </div>
</div>

