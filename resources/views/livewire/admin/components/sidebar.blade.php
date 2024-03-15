<div>
    <nav id="sidebar" class="sidebar js-sidebar">
        <div class="sidebar-content js-simplebar">
            <a class="sidebar-brand" href="index.html">
                <span class="align-middle">AdminKit</span>
            </a>
    
            <ul class="sidebar-nav">
                <li class="sidebar-header">
                    Dashborad
                </li>
    
                <li class="sidebar-item {{Route::currentRouteNamed('admin.dashboard') ? 'active' : ''}}">
                    <a class="sidebar-link" href="/admin/dashboard">
                        <i class="align-middle" data-feather="sliders"></i> <span
                            class="align-middle">Dashboard</span>
                    </a>
                </li>
    
                <li class="sidebar-item {{Route::currentRouteNamed('admin.profile') ? 'active' : ''}}">
                    <a class="sidebar-link" href="/admin/profile">
                        <i class="align-middle" data-feather="user"></i> <span
                            class="align-middle">Profile</span>
                    </a>
                </li>
    
                <li class="sidebar-item {{Route::currentRouteNamed('admin.users') ? 'active' : ''}}">
                    <a class="sidebar-link" href="/admin/users">
                        <i class="align-middle" data-feather="user"></i> <span
                            class="align-middle">Users</span>
                    </a>
                </li>
    
                <li class="sidebar-item {{Route::currentRouteNamed('admin.products') ? 'active' : ''}}">
                    <a class="sidebar-link" href="/admin/products">
                        <i class="align-middle" data-feather="user"></i> <span
                            class="align-middle">Products</span>
                    </a>
                </li>
    
                <li class="sidebar-item {{Route::currentRouteNamed('admin.blank') ? 'active' : ''}}">
                    <a class="sidebar-link" href="/admin/blank">
                        <i class="align-middle" data-feather="book"></i> <span
                            class="align-middle">Blank</span>
                    </a>
                </li>
    
                <li class="sidebar-header">
                    Blog
                </li>
    
                <li class="sidebar-item {{Route::currentRouteNamed('admin.categories') ? 'active' : ''}}">
                    <a class="sidebar-link" href="/admin/categories">
                        <i class="align-middle" data-feather="square"></i> <span
                            class="align-middle">Categories</span>
                    </a>
                </li>
    
                <li class="sidebar-item {{Route::currentRouteNamed('admin.posts') ? 'active' : ''}}">
                    <a class="sidebar-link" href="/admin/posts">
                        <i class="align-middle" data-feather="check-square"></i> <span
                            class="align-middle">Posts</span>
                    </a>
                </li>
    
                <li class="sidebar-item {{Route::currentRouteNamed('admin.comments') ? 'active' : ''}}">
                    <a class="sidebar-link" href="/admin/comments">
                        <i class="align-middle" data-feather="grid"></i> <span
                            class="align-middle">Comments</span>
                    </a>
                </li>
    
            </ul>
        </div>
    </nav>
</div>
