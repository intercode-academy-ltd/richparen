<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="{{('/admin/dashboard')}}" class="brand-link">
        <img src="{{asset('admin/dist/img/AdminLTELogo.png')}}" alt="WB" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">WIKIBLOGGER</span>
    </a>
    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex"></div>
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>{{-- Search--}}
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                    @if(Session::get('admin_page') == 'dashboard')
                        @php $active = "active" @endphp
                    @else
                        @php $active = "" @endphp
                    @endif
                <li class="nav-item menu-open" class="{{ $active }}">
                    <a href="{{('/admin/dashboard')}}" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>{{-- Dashboard --}}

                    @if(Session::get('admin_page') == 'editor')
                        @php $active = "active" @endphp
                    @else
                        @php $active = "" @endphp
                    @endif
                <li class="nav-item" class="{{ $active }}">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-columns"></i>
                        <p>
                            Editors
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{('editor.add')}}" class="nav-link">
                                <i class="nav-icon far fa-circle text-danger"></i>
                                <p>Add New Editor</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{('editor.index')}}" class="nav-link">
                                <i class="nav-icon far fa-circle text-info"></i>
                                <p>Editor List</p>
                            </a>
                        </li>
                    </ul>
                </li>{{-- Editor --}}

                    @if(Session::get('admin_page') == 'category')
                        @php $active = "active" @endphp
                    @else
                        @php $active = "" @endphp
                    @endif
                <li class="nav-item" class="{{ $active }}">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tree"></i>
                        <p>
                            Category
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{(route('category.add'))}}" class="nav-link">
                                <i class="nav-icon far fa-circle text-danger"></i>
                                <p>Add Category</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{(route('category.index'))}}" class="nav-link">
                                <i class="nav-icon far fa-circle text-info"></i>
                                <p>Manage Category</p>
                            </a>
                        </li>
                    </ul>
               </li> {{--Category--}}

                    @if(Session::get('admin_page') == 'news')
                        @php $active = "active" @endphp
                    @else
                        @php $active = "" @endphp
                    @endif
                <li class="nav-item" class="{{ $active }}">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            Posts
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('news.add')}}" class="nav-link">
                                <i class="nav-icon far fa-circle text-danger"></i>
                                <p>Add Posts</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('news.index')}}" class="nav-link">
                                <i class="nav-icon far fa-circle text-info"></i>
                                <p>Manage Posts</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{('/admin/posts/trash')}}" class="nav-link">
                                <i class="nav-icon far fa-circle text-warning"></i>
                                <p>Trash Posts</p>
                            </a>
                        </li>
                    </ul>
                </li> {{--Posts--}}

                    @if(Session::get('admin_page') == 'pages')
                        @php $active = "active" @endphp
                    @else
                        @php $active = "" @endphp
                    @endif
{{--                <li class="nav-item" class="{{ $active }}">--}}
{{--                    <a href="#" class="nav-link">--}}
{{--                        <i class="nav-icon fas fa-book"></i>--}}
{{--                        <p>--}}
{{--                            Pages--}}
{{--                            <i class="fas fa-angle-left right"></i>--}}
{{--                        </p>--}}
{{--                    </a>--}}
{{--                    <ul class="nav nav-treeview">--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="{{('/admin/pages/contact')}}" class="nav-link">--}}
{{--                                <i class="far fa-circle nav-icon"></i>--}}
{{--                                <p>Contact us</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="{{('/admin/pages/about')}}" class="nav-link">--}}
{{--                                <i class="far fa-circle nav-icon"></i>--}}
{{--                                <p>About us</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </li>--}}{{-- Pages--}}

                        @if(Session::get('admin_page') == 'theme')
                            @php $active = "active" @endphp
                        @else
                            @php $active = "" @endphp
                        @endif
                        <li class="nav-item" class="{{ $active }}">
                            <a href="{{route('theme')}}" class="nav-link">
                                <i class="nav-icon fas fa-book"></i>
                                <p>
                                    Theme
                                </p>
                            </a>
                      </li> {{-- Theme--}}



                        @if(Session::get('admin_page') == 'social')
                            @php $active = "active" @endphp
                        @else
                            @php $active = "" @endphp
                        @endif
                        <li class="nav-item" class="{{ $active }}">
                            <a href="{{route('social')}}" class="nav-link">
                                <i class="nav-icon fas fa-book"></i>
                                <p>
                                    Social
                                </p>
                            </a>
                        </li> {{--Social--}}


                        @if(Session::get('admin_page') == 'newsletter')
                            @php $active = "active" @endphp
                        @else
                            @php $active = "" @endphp
                        @endif
                        <li class="nav-item" class="{{ $active }}">
                            <a href="{{route('newsletter')}}" class="nav-link">
                                <i class="nav-icon fas fa-book"></i>
                                <p>
                                    News Letter
                                </p>
                            </a>
                        </li> {{--Newsletter--}}





                    @if(Session::get('admin_page') == 'comments')
                        @php $active = "active" @endphp
                    @else
                        @php $active = "" @endphp
                    @endif
{{--                <li class="nav-item" class="{{ $active }}">--}}
{{--                    <a href="#" class="nav-link">--}}
{{--                        <i class="nav-icon far fa-envelope"></i>--}}
{{--                        <p>--}}
{{--                            Comments--}}
{{--                            <i class="fas fa-angle-left right"></i>--}}
{{--                        </p>--}}
{{--                    </a>--}}
{{--                    <ul class="nav nav-treeview">--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="{{('/admin/comments/unapprove-comments')}}" class="nav-link">--}}
{{--                                <i class="nav-icon far fa-circle text-danger"></i>--}}
{{--                                <p>Unapprove Comments</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="{{('/admin/comments/manage-comments')}}" class="nav-link">--}}
{{--                                <i class="nav-icon far fa-circle text-warning"></i>--}}
{{--                                <p>Manage Comments</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </li>--}}{{-- Comments--}}
            </ul>
        </nav>
    </div>
</aside>
<!--/ sidebar  -->
