<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="{{ route('dashboard.index') }}" class="logo logo-dark">
                    <span class="logo-sm mt-2">
                        <img src="/assets/images/logo_project.png" alt="" height="70">

                    </span>
                    <span class="logo-lg mt-2">
                        <img src="/assets/images/logo_project.png" alt="" height="210">

                    </span>
                </a>

                <a href="{{ route('dashboard.index') }}" class="logo logo-light">
                    <span class="logo-sm mt-2">
                        <img src="/assets/images/logo_project.png" alt="" height="70">

                    </span>
                    <span class="logo-lg mt-2">
                        <img src="/assets/images/logo_project.png" alt="" height="210">

                    </span>
                </a>
            </div>

            <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect" id="vertical-menu-btn">
                <i class="fa fa-fw fa-bars"></i>
            </button>

            <!-- App Search-->
            <form class="app-search d-none d-lg-block">
                <div class="position-relative">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="bx bx-search-alt"></span>
                </div>
            </form>
        </div>

        <div class="d-flex">

            <div class="dropdown d-inline-block d-lg-none ms-2">
                <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="mdi mdi-magnify"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-search-dropdown">

                    <form class="p-3">
                        <div class="form-group m-0">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item waves-effect" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img id="header-lang-img" src="/assets/images/flags/us.jpg" alt="Header Language" height="16">
                </button>
                <div class="dropdown-menu dropdown-menu-end">

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="en">
                        <img src="/assets/images/flags/us.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">English</span>
                    </a>
                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="sp">
                        <img src="/assets/images/flags/spain.jpg" alt="user-image" class="me-1" height="12">
                        <span class="align-middle">Spanish</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="gr">
                        <img src="/assets/images/flags/germany.jpg" alt="user-image" class="me-1" height="12">
                        <span class="align-middle">German</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="it">
                        <img src="/assets/images/flags/italy.jpg" alt="user-image" class="me-1" height="12">
                        <span class="align-middle">Italian</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="ru">
                        <img src="/assets/images/flags/russia.jpg" alt="user-image" class="me-1" height="12">
                        <span class="align-middle">Russian</span>
                    </a>
                </div>
            </div>

            <div class="dropdown d-none d-lg-inline-block ms-1">
                <button type="button" class="btn header-item noti-icon waves-effect" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="bx bx-customize"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                    <div class="px-lg-2">
                        <div class="row g-0">
                            <div class="col">
                                <a class="dropdown-icon-item" href="#">
                                    <img src="/assets/images/brands/github.png" alt="Github">
                                    <span>GitHub</span>
                                </a>
                            </div>
                            <div class="col">
                                <a class="dropdown-icon-item" href="#">
                                    <img src="/assets/images/brands/bitbucket.png" alt="bitbucket">
                                    <span>Bitbucket</span>
                                </a>
                            </div>
                            <div class="col">
                                <a class="dropdown-icon-item" href="#">
                                    <img src="/assets/images/brands/dribbble.png" alt="dribbble">
                                    <span>Dribbble</span>
                                </a>
                            </div>
                        </div>

                        <div class="row g-0">
                            <div class="col">
                                <a class="dropdown-icon-item" href="#">
                                    <img src="/assets/images/brands/dropbox.png" alt="dropbox">
                                    <span>Dropbox</span>
                                </a>
                            </div>
                            <div class="col">
                                <a class="dropdown-icon-item" href="#">
                                    <img src="/assets/images/brands/mail_chimp.png" alt="mail_chimp">
                                    <span>Mail Chimp</span>
                                </a>
                            </div>
                            <div class="col">
                                <a class="dropdown-icon-item" href="#">
                                    <img src="/assets/images/brands/slack.png" alt="slack">
                                    <span>Slack</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="dropdown d-none d-lg-inline-block ms-1">
                <button type="button" class="btn header-item noti-icon waves-effect" data-bs-toggle="fullscreen">
                    <i class="bx bx-fullscreen"></i>
                </button>
            </div>

            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-notifications-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="bx bx-bell bx-tada"></i>
                    @if($notivications->count())
                    <span class="badge bg-danger rounded-pill">{{ $notivications->count() }}</span>
                    @endif
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-notifications-dropdown">
                    <div class="p-3">
                        <div class="row align-items-center">
                            <div class="col">
                                <h6 class="m-0" key="t-notifications"> Notifications </h6>
                            </div>
                        </div>
                    </div>
                    <div data-simplebar style="max-height: 230px;">
                        @foreach($notivications as $notivication)
                        <a href="{{ route('notivication.show', $notivication->id) }}" class="text-reset notification-item">
                            <div class="d-flex">
                                <div class="avatar-xs me-3">
                                    <span class="avatar-title bg-primary rounded-circle font-size-16">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                            <path d="M12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22ZM12 20C16.4183 20 20 16.4183 20 12C20 7.58172 16.4183 4 12 4C7.58172 4 4 7.58172 4 12C4 16.4183 7.58172 20 12 20ZM11 15H13V17H11V15ZM11 7H13V13H11V7Z" fill="rgba(255,255,255,1)"></path>
                                        </svg>
                                    </span>
                                </div>
                                <div class="flex-grow-1">
                                    <h6 class="mb-1" key="t-your-order">New {{ $notivication->model }} from {{ $notivication->user->name }}</h6>
                                    <div class="font-size-12 text-muted">
                                        <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span key="t-min-ago">{{ $notivication->created_at->diffForHumans() }}</span></p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        @endforeach
                    </div>
                    <div class="p-2 border-top d-grid">
                        <a class="btn btn-sm btn-link font-size-14 text-center" href="javascript:void(0)">
                            <i class="mdi mdi-arrow-right-circle me-1"></i> <span key="t-view-more">View
                                More..</span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="rounded-circle header-profile-user" src="/assets/images/users/avatar-1.jpg" alt="Header Avatar">
                    <span class="d-none d-xl-inline-block ms-1" key="t-henry">{{ $user->name }}</span>
                    <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                    <!-- item-->
                    <a class="dropdown-item" href="{{ route('user.profile.index') }}">
                        <i class="bx bx-user font-size-16 align-middle me-1"></i>
                        <span key="t-profile">Profile</span>
                    </a>
                    <a class="dropdown-item" href="#"><i class="bx bx-wallet font-size-16 align-middle me-1"></i> <span key="t-my-wallet">My Wallet</span></a>
                    <a class="dropdown-item d-block" href="#"><span class="badge bg-success float-end">11</span><i class="bx bx-wrench font-size-16 align-middle me-1"></i> <span key="t-settings">Settings</span></a>
                    <a class="dropdown-item" href="#"><i class="bx bx-lock-open font-size-16 align-middle me-1"></i> <span key="t-lock-screen">Lock screen</span></a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item text-danger" href="#" onclick="event.preventDefault(); document.getElementById('form-logout').submit()">
                        <i class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i>
                        <span key="t-logout">Logout</span>
                    </a>
                    <form action="{{ route('logout') }}" method="POST" id="form-logout">
                        @csrf
                    </form>
                </div>
            </div>

            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect">
                    <i class="bx bx-cog bx-spin"></i>
                </button>
            </div>

        </div>
    </div>
</header>

{{-- <header id="page-topbar">
    <div class="layout-width">
        <div class="navbar-header">
            <div class="d-flex">
                <!-- LOGO -->
                <div class="navbar-brand-box horizontal-logo">
                    <a href="{{ route('dashboard.index') }}" class="logo logo-dark">
<span class="logo-sm">
    <img src="/assets/images/logo/logo-sm.png" alt="" height="22">
</span>
<span class="logo-lg">
    <img src="/assets/images/logo/logo-dark.png" alt="" height="17">
</span>
</a>

<a href="{{ route('dashboard.index') }}" class="logo logo-light">
    <span class="logo-sm">
        <img src="/assets/images/logo/logo-sm.png" alt="" height="22">
    </span>
    <span class="logo-lg">
        <img src="/assets/images/logo/logo-light.png" alt="" height="17">
    </span>
</a>
</div>

<button type="button" class="btn btn-sm px-3 fs-16 header-item vertical-menu-btn topnav-hamburger" id="topnav-hamburger-icon">
    <span class="hamburger-icon">
        <span></span>
        <span></span>
        <span></span>
    </span>
</button>

<!-- App Search-->
<form class="app-search d-none d-md-block" action="" method="get">
    <div class="position-relative">
        <input type="text" class="form-control" placeholder="Search..." autocomplete="off" id="search-options" value="" name="search">
        <span class="mdi mdi-magnify search-widget-icon"></span>
        <span class="mdi mdi-close-circle search-widget-icon search-widget-icon-close d-none" id="search-close-options"></span>
    </div>
    <div class="dropdown-menu dropdown-menu-lg" id="search-dropdown">
        <div data-simplebar style="max-height: 320px;">
            <!-- item-->
            <div class="dropdown-header">
                <h6 class="text-overflow text-muted mb-0 text-uppercase">Recent Searches</h6>
            </div>

            <div class="dropdown-item bg-transparent text-wrap">
                <a href="{{ route('dashboard.index') }}" class="btn btn-soft-secondary btn-sm btn-rounded">how to setup <i class="mdi mdi-magnify ms-1"></i></a>
                <a href="{{ route('dashboard.index') }}" class="btn btn-soft-secondary btn-sm btn-rounded">buttons <i class="mdi mdi-magnify ms-1"></i></a>
            </div>
            <!-- item-->
            <div class="dropdown-header mt-2">
                <h6 class="text-overflow text-muted mb-1 text-uppercase">Pages</h6>
            </div>

            <!-- item-->
            <a href="javascript:void(0);" class="dropdown-item notify-item">
                <i class="ri-bubble-chart-line align-middle fs-18 text-muted me-2"></i>
                <span>Analytics Dashboard</span>
            </a>

            <!-- item-->
            <a href="javascript:void(0);" class="dropdown-item notify-item">
                <i class="ri-lifebuoy-line align-middle fs-18 text-muted me-2"></i>
                <span>Help Center</span>
            </a>

            <!-- item-->
            <a href="javascript:void(0);" class="dropdown-item notify-item">
                <i class="ri-user-settings-line align-middle fs-18 text-muted me-2"></i>
                <span>My account settings</span>
            </a>

            <!-- item-->
            <div class="dropdown-header mt-2">
                <h6 class="text-overflow text-muted mb-2 text-uppercase">Members</h6>
            </div>

            <div class="notification-list">
                <!-- item -->
                <a href="javascript:void(0);" class="dropdown-item notify-item py-2">
                    <div class="d-flex">
                        <img src="/assets/images/users/avatar-2.jpg" class="me-3 rounded-circle avatar-xs" alt="user-pic">
                        <div class="flex-1">
                            <h6 class="m-0">Angela Bernier</h6>
                            <span class="fs-11 mb-0 text-muted">Manager</span>
                        </div>
                    </div>
                </a>
                <!-- item -->
                <a href="javascript:void(0);" class="dropdown-item notify-item py-2">
                    <div class="d-flex">
                        <img src="/assets/images/users/avatar-3.jpg" class="me-3 rounded-circle avatar-xs" alt="user-pic">
                        <div class="flex-1">
                            <h6 class="m-0">David Grasso</h6>
                            <span class="fs-11 mb-0 text-muted">Web Designer</span>
                        </div>
                    </div>
                </a>
                <!-- item -->
                <a href="javascript:void(0);" class="dropdown-item notify-item py-2">
                    <div class="d-flex">
                        <img src="/assets/images/users/avatar-5.jpg" class="me-3 rounded-circle avatar-xs" alt="user-pic">
                        <div class="flex-1">
                            <h6 class="m-0">Mike Bunch</h6>
                            <span class="fs-11 mb-0 text-muted">React Developer</span>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <div class="text-center pt-3 pb-1">
            <a href="pages-search-results.html" class="btn btn-primary btn-sm">View All Results <i class="ri-arrow-right-line ms-1"></i></a>
        </div>
    </div>
</form>
</div>

<div class="d-flex align-items-center">

    <div class="dropdown d-md-none topbar-head-dropdown header-item">
        <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle" id="page-header-search-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="bx bx-search fs-22"></i>
        </button>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-search-dropdown">
            <form class="p-3" action="" method="get">
                <div class="form-group m-0">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username" name="search">
                        <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="dropdown ms-1 topbar-head-dropdown header-item">
        <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <img id="header-lang-img" src="/assets/images/flags/us.svg" alt="Header Language" height="20" class="rounded">
        </button>
        <div class="dropdown-menu dropdown-menu-end">

            <!-- item-->
            <a href="javascript:void(0);" class="dropdown-item notify-item language py-2" data-lang="en" title="English">
                <img src="/assets/images/flags/us.svg" alt="user-image" class="me-2 rounded" height="18">
                <span class="align-middle">English</span>
            </a>

            <!-- item-->
            <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="sp" title="Spanish">
                <img src="/assets/images/flags/spain.svg" alt="user-image" class="me-2 rounded" height="18">
                <span class="align-middle">Española</span>
            </a>

            <!-- item-->
            <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="gr" title="German">
                <img src="/assets/images/flags/germany.svg" alt="user-image" class="me-2 rounded" height="18"> <span class="align-middle">Deutsche</span>
            </a>

            <!-- item-->
            <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="it" title="Italian">
                <img src="/assets/images/flags/italy.svg" alt="user-image" class="me-2 rounded" height="18">
                <span class="align-middle">Italiana</span>
            </a>

            <!-- item-->
            <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="ru" title="Russian">
                <img src="/assets/images/flags/russia.svg" alt="user-image" class="me-2 rounded" height="18">
                <span class="align-middle">русский</span>
            </a>

            <!-- item-->
            <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="ch" title="Chinese">
                <img src="/assets/images/flags/china.svg" alt="user-image" class="me-2 rounded" height="18">
                <span class="align-middle">中国人</span>
            </a>

            <!-- item-->
            <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="fr" title="French">
                <img src="/assets/images/flags/french.svg" alt="user-image" class="me-2 rounded" height="18">
                <span class="align-middle">français</span>
            </a>
        </div>
    </div>

    <div class="dropdown topbar-head-dropdown ms-1 header-item">
        <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class='bx bx-category-alt fs-22'></i>
        </button>
        <div class="dropdown-menu dropdown-menu-lg p-0 dropdown-menu-end">
            <div class="p-3 border-top-0 border-start-0 border-end-0 border-dashed border">
                <div class="row align-items-center">
                    <div class="col">
                        <h6 class="m-0 fw-semibold fs-15"> Web Apps </h6>
                    </div>
                    <div class="col-auto">
                        <a href="#!" class="btn btn-sm btn-soft-info"> View All Apps
                            <i class="ri-arrow-right-s-line align-middle"></i></a>
                    </div>
                </div>
            </div>

            <div class="p-2">
                <div class="row g-0">
                    <div class="col">
                        <a class="dropdown-icon-item" href="#!">
                            <img src="/assets/images/brands/github.png" alt="Github">
                            <span>GitHub</span>
                        </a>
                    </div>
                    <div class="col">
                        <a class="dropdown-icon-item" href="#!">
                            <img src="/assets/images/brands/bitbucket.png" alt="bitbucket">
                            <span>Bitbucket</span>
                        </a>
                    </div>
                    <div class="col">
                        <a class="dropdown-icon-item" href="#!">
                            <img src="/assets/images/brands/dribbble.png" alt="dribbble">
                            <span>Dribbble</span>
                        </a>
                    </div>
                </div>

                <div class="row g-0">
                    <div class="col">
                        <a class="dropdown-icon-item" href="#!">
                            <img src="/assets/images/brands/dropbox.png" alt="dropbox">
                            <span>Dropbox</span>
                        </a>
                    </div>
                    <div class="col">
                        <a class="dropdown-icon-item" href="#!">
                            <img src="/assets/images/brands/mail_chimp.png" alt="mail_chimp">
                            <span>Mail Chimp</span>
                        </a>
                    </div>
                    <div class="col">
                        <a class="dropdown-icon-item" href="#!">
                            <img src="/assets/images/brands/slack.png" alt="slack">
                            <span>Slack</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="dropdown topbar-head-dropdown ms-1 header-item">
        <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle" id="page-header-cart-dropdown" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false">
            <i class='bx bx-shopping-bag fs-22'></i>
            <span class="position-absolute topbar-badge cartitem-badge fs-10 translate-middle badge rounded-pill bg-info">5</span>
        </button>
        <div class="dropdown-menu dropdown-menu-xl dropdown-menu-end p-0 dropdown-menu-cart" aria-labelledby="page-header-cart-dropdown">
            <div class="p-3 border-top-0 border-start-0 border-end-0 border-dashed border">
                <div class="row align-items-center">
                    <div class="col">
                        <h6 class="m-0 fs-16 fw-semibold"> My Cart</h6>
                    </div>
                    <div class="col-auto">
                        <span class="badge badge-soft-warning fs-13"><span class="cartitem-badge">7</span>
                            items</span>
                    </div>
                </div>
            </div>
            <div data-simplebar style="max-height: 300px;">
                <div class="p-2">
                    <div class="text-center empty-cart" id="empty-cart">
                        <div class="avatar-md mx-auto my-3">
                            <div class="avatar-title bg-soft-info text-info fs-36 rounded-circle">
                                <i class='bx bx-cart'></i>
                            </div>
                        </div>
                        <h5 class="mb-3">Your Cart is Empty!</h5>
                        <a href="apps-ecommerce-products.html" class="btn btn-success w-md mb-3">Shop Now</a>
                    </div>
                    <div class="d-block dropdown-item dropdown-item-cart text-wrap px-3 py-2">
                        <div class="d-flex align-items-center">
                            <img src="/assets/images/products/img-1.png" class="me-3 rounded-circle avatar-sm p-2 bg-light" alt="user-pic">
                            <div class="flex-1">
                                <h6 class="mt-0 mb-1 fs-14">
                                    <a href="apps-ecommerce-product-details.html" class="text-reset">Branded
                                        T-Shirts</a>
                                </h6>
                                <p class="mb-0 fs-12 text-muted">
                                    Quantity: <span>10 x $32</span>
                                </p>
                            </div>
                            <div class="px-2">
                                <h5 class="m-0 fw-normal">$<span class="cart-item-price">320</span></h5>
                            </div>
                            <div class="ps-2">
                                <button type="button" class="btn btn-icon btn-sm btn-ghost-secondary remove-item-btn"><i class="ri-close-fill fs-16"></i></button>
                            </div>
                        </div>
                    </div>

                    <div class="d-block dropdown-item dropdown-item-cart text-wrap px-3 py-2">
                        <div class="d-flex align-items-center">
                            <img src="/assets/images/products/img-2.png" class="me-3 rounded-circle avatar-sm p-2 bg-light" alt="user-pic">
                            <div class="flex-1">
                                <h6 class="mt-0 mb-1 fs-14">
                                    <a href="apps-ecommerce-product-details.html" class="text-reset">Bentwood Chair</a>
                                </h6>
                                <p class="mb-0 fs-12 text-muted">
                                    Quantity: <span>5 x $18</span>
                                </p>
                            </div>
                            <div class="px-2">
                                <h5 class="m-0 fw-normal">$<span class="cart-item-price">89</span></h5>
                            </div>
                            <div class="ps-2">
                                <button type="button" class="btn btn-icon btn-sm btn-ghost-secondary remove-item-btn"><i class="ri-close-fill fs-16"></i></button>
                            </div>
                        </div>
                    </div>

                    <div class="d-block dropdown-item dropdown-item-cart text-wrap px-3 py-2">
                        <div class="d-flex align-items-center">
                            <img src="/assets/images/products/img-3.png" class="me-3 rounded-circle avatar-sm p-2 bg-light" alt="user-pic">
                            <div class="flex-1">
                                <h6 class="mt-0 mb-1 fs-14">
                                    <a href="apps-ecommerce-product-details.html" class="text-reset">
                                        Borosil Paper Cup</a>
                                </h6>
                                <p class="mb-0 fs-12 text-muted">
                                    Quantity: <span>3 x $250</span>
                                </p>
                            </div>
                            <div class="px-2">
                                <h5 class="m-0 fw-normal">$<span class="cart-item-price">750</span></h5>
                            </div>
                            <div class="ps-2">
                                <button type="button" class="btn btn-icon btn-sm btn-ghost-secondary remove-item-btn"><i class="ri-close-fill fs-16"></i></button>
                            </div>
                        </div>
                    </div>

                    <div class="d-block dropdown-item dropdown-item-cart text-wrap px-3 py-2">
                        <div class="d-flex align-items-center">
                            <img src="/assets/images/products/img-6.png" class="me-3 rounded-circle avatar-sm p-2 bg-light" alt="user-pic">
                            <div class="flex-1">
                                <h6 class="mt-0 mb-1 fs-14">
                                    <a href="apps-ecommerce-product-details.html" class="text-reset">Gray
                                        Styled T-Shirt</a>
                                </h6>
                                <p class="mb-0 fs-12 text-muted">
                                    Quantity: <span>1 x $1250</span>
                                </p>
                            </div>
                            <div class="px-2">
                                <h5 class="m-0 fw-normal">$ <span class="cart-item-price">1250</span></h5>
                            </div>
                            <div class="ps-2">
                                <button type="button" class="btn btn-icon btn-sm btn-ghost-secondary remove-item-btn"><i class="ri-close-fill fs-16"></i></button>
                            </div>
                        </div>
                    </div>

                    <div class="d-block dropdown-item dropdown-item-cart text-wrap px-3 py-2">
                        <div class="d-flex align-items-center">
                            <img src="/assets/images/products/img-5.png" class="me-3 rounded-circle avatar-sm p-2 bg-light" alt="user-pic">
                            <div class="flex-1">
                                <h6 class="mt-0 mb-1 fs-14">
                                    <a href="apps-ecommerce-product-details.html" class="text-reset">Stillbird Helmet</a>
                                </h6>
                                <p class="mb-0 fs-12 text-muted">
                                    Quantity: <span>2 x $495</span>
                                </p>
                            </div>
                            <div class="px-2">
                                <h5 class="m-0 fw-normal">$<span class="cart-item-price">990</span></h5>
                            </div>
                            <div class="ps-2">
                                <button type="button" class="btn btn-icon btn-sm btn-ghost-secondary remove-item-btn"><i class="ri-close-fill fs-16"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="p-3 border-bottom-0 border-start-0 border-end-0 border-dashed border" id="checkout-elem">
                <div class="d-flex justify-content-between align-items-center pb-3">
                    <h5 class="m-0 text-muted">Total:</h5>
                    <div class="px-2">
                        <h5 class="m-0" id="cart-item-total">$1258.58</h5>
                    </div>
                </div>

                <a href="apps-ecommerce-checkout.html" class="btn btn-success text-center w-100">
                    Checkout
                </a>
            </div>
        </div>
    </div>

    <div class="ms-1 header-item d-none d-sm-flex">
        <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle" data-toggle="fullscreen">
            <i class='bx bx-fullscreen fs-22'></i>
        </button>
    </div>

    <div class="ms-1 header-item d-none d-sm-flex">
        <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle light-dark-mode">
            <i class='bx bx-moon fs-22'></i>
        </button>
    </div>

    <div class="dropdown topbar-head-dropdown ms-1 header-item">
        <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle" id="page-header-notifications-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class='bx bx-bell fs-22'></i>
            <span class="position-absolute topbar-badge fs-10 translate-middle badge rounded-pill bg-danger">3<span class="visually-hidden">unread messages</span></span>
        </button>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-notifications-dropdown">

            <div class="dropdown-head bg-primary bg-pattern rounded-top">
                <div class="p-3">
                    <div class="row align-items-center">
                        <div class="col">
                            <h6 class="m-0 fs-16 fw-semibold text-white"> Notifications </h6>
                        </div>
                        <div class="col-auto dropdown-tabs">
                            <span class="badge badge-soft-light fs-13"> 4 New</span>
                        </div>
                    </div>
                </div>

                <div class="px-2 pt-2">
                    <ul class="nav nav-tabs dropdown-tabs nav-tabs-custom" data-dropdown-tabs="true" id="notificationItemsTab" role="tablist">
                        <li class="nav-item waves-effect waves-light">
                            <a class="nav-link active" data-bs-toggle="tab" href="#all-noti-tab" role="tab" aria-selected="true">
                                All (4)
                            </a>
                        </li>
                        <li class="nav-item waves-effect waves-light">
                            <a class="nav-link" data-bs-toggle="tab" href="#messages-tab" role="tab" aria-selected="false">
                                Messages
                            </a>
                        </li>
                        <li class="nav-item waves-effect waves-light">
                            <a class="nav-link" data-bs-toggle="tab" href="#alerts-tab" role="tab" aria-selected="false">
                                Alerts
                            </a>
                        </li>
                    </ul>
                </div>

            </div>

            <div class="tab-content" id="notificationItemsTabContent">
                <div class="tab-pane fade show active py-2 ps-2" id="all-noti-tab" role="tabpanel">
                    <div data-simplebar style="max-height: 300px;" class="pe-2">
                        <div class="text-reset notification-item d-block dropdown-item position-relative">
                            <div class="d-flex">
                                <div class="avatar-xs me-3">
                                    <span class="avatar-title bg-soft-info text-info rounded-circle fs-16">
                                        <i class="bx bx-badge-check"></i>
                                    </span>
                                </div>
                                <div class="flex-1">
                                    <a href="#!" class="stretched-link">
                                        <h6 class="mt-0 mb-2 lh-base">Your <b>Elite</b> author Graphic
                                            Optimization <span class="text-secondary">reward</span> is
                                            ready!
                                        </h6>
                                    </a>
                                    <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                        <span><i class="mdi mdi-clock-outline"></i> Just 30 sec ago</span>
                                    </p>
                                </div>
                                <div class="px-2 fs-15">
                                    <div class="form-check notification-check">
                                        <input class="form-check-input" type="checkbox" value="" id="all-notification-check01">
                                        <label class="form-check-label" for="all-notification-check01"></label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="text-reset notification-item d-block dropdown-item position-relative active">
                            <div class="d-flex">
                                <img src="/assets/images/users/avatar-2.jpg" class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                <div class="flex-1">
                                    <a href="#!" class="stretched-link">
                                        <h6 class="mt-0 mb-1 fs-13 fw-semibold">Angela Bernier</h6>
                                    </a>
                                    <div class="fs-13 text-muted">
                                        <p class="mb-1">Answered to your comment on the cash flow forecast's
                                            graph 🔔.</p>
                                    </div>
                                    <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                        <span><i class="mdi mdi-clock-outline"></i> 48 min ago</span>
                                    </p>
                                </div>
                                <div class="px-2 fs-15">
                                    <div class="form-check notification-check">
                                        <input class="form-check-input" type="checkbox" value="" id="all-notification-check02" checked>
                                        <label class="form-check-label" for="all-notification-check02"></label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="text-reset notification-item d-block dropdown-item position-relative">
                            <div class="d-flex">
                                <div class="avatar-xs me-3">
                                    <span class="avatar-title bg-soft-danger text-danger rounded-circle fs-16">
                                        <i class='bx bx-message-square-dots'></i>
                                    </span>
                                </div>
                                <div class="flex-1">
                                    <a href="#!" class="stretched-link">
                                        <h6 class="mt-0 mb-2 fs-13 lh-base">You have received <b class="text-success">20</b> new messages in the conversation
                                        </h6>
                                    </a>
                                    <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                        <span><i class="mdi mdi-clock-outline"></i> 2 hrs ago</span>
                                    </p>
                                </div>
                                <div class="px-2 fs-15">
                                    <div class="form-check notification-check">
                                        <input class="form-check-input" type="checkbox" value="" id="all-notification-check03">
                                        <label class="form-check-label" for="all-notification-check03"></label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="text-reset notification-item d-block dropdown-item position-relative">
                            <div class="d-flex">
                                <img src="/assets/images/users/avatar-8.jpg" class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                <div class="flex-1">
                                    <a href="#!" class="stretched-link">
                                        <h6 class="mt-0 mb-1 fs-13 fw-semibold">Maureen Gibson</h6>
                                    </a>
                                    <div class="fs-13 text-muted">
                                        <p class="mb-1">We talked about a project on linkedin.</p>
                                    </div>
                                    <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                        <span><i class="mdi mdi-clock-outline"></i> 4 hrs ago</span>
                                    </p>
                                </div>
                                <div class="px-2 fs-15">
                                    <div class="form-check notification-check">
                                        <input class="form-check-input" type="checkbox" value="" id="all-notification-check04">
                                        <label class="form-check-label" for="all-notification-check04"></label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="my-3 text-center">
                            <button type="button" class="btn btn-soft-success waves-effect waves-light">View
                                All Notifications <i class="ri-arrow-right-line align-middle"></i></button>
                        </div>
                    </div>

                </div>

                <div class="tab-pane fade py-2 ps-2" id="messages-tab" role="tabpanel" aria-labelledby="messages-tab">
                    <div data-simplebar style="max-height: 300px;" class="pe-2">
                        <div class="text-reset notification-item d-block dropdown-item">
                            <div class="d-flex">
                                <img src="/assets/images/users/avatar-3.jpg" class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                <div class="flex-1">
                                    <a href="#!" class="stretched-link">
                                        <h6 class="mt-0 mb-1 fs-13 fw-semibold">James Lemire</h6>
                                    </a>
                                    <div class="fs-13 text-muted">
                                        <p class="mb-1">We talked about a project on linkedin.</p>
                                    </div>
                                    <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                        <span><i class="mdi mdi-clock-outline"></i> 30 min ago</span>
                                    </p>
                                </div>
                                <div class="px-2 fs-15">
                                    <div class="form-check notification-check">
                                        <input class="form-check-input" type="checkbox" value="" id="messages-notification-check01">
                                        <label class="form-check-label" for="messages-notification-check01"></label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="text-reset notification-item d-block dropdown-item">
                            <div class="d-flex">
                                <img src="/assets/images/users/avatar-2.jpg" class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                <div class="flex-1">
                                    <a href="#!" class="stretched-link">
                                        <h6 class="mt-0 mb-1 fs-13 fw-semibold">Angela Bernier</h6>
                                    </a>
                                    <div class="fs-13 text-muted">
                                        <p class="mb-1">Answered to your comment on the cash flow forecast's
                                            graph 🔔.</p>
                                    </div>
                                    <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                        <span><i class="mdi mdi-clock-outline"></i> 2 hrs ago</span>
                                    </p>
                                </div>
                                <div class="px-2 fs-15">
                                    <div class="form-check notification-check">
                                        <input class="form-check-input" type="checkbox" value="" id="messages-notification-check02">
                                        <label class="form-check-label" for="messages-notification-check02"></label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="text-reset notification-item d-block dropdown-item">
                            <div class="d-flex">
                                <img src="/assets/images/users/avatar-6.jpg" class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                <div class="flex-1">
                                    <a href="#!" class="stretched-link">
                                        <h6 class="mt-0 mb-1 fs-13 fw-semibold">Kenneth Brown</h6>
                                    </a>
                                    <div class="fs-13 text-muted">
                                        <p class="mb-1">Mentionned you in his comment on 📃 invoice #12501.
                                        </p>
                                    </div>
                                    <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                        <span><i class="mdi mdi-clock-outline"></i> 10 hrs ago</span>
                                    </p>
                                </div>
                                <div class="px-2 fs-15">
                                    <div class="form-check notification-check">
                                        <input class="form-check-input" type="checkbox" value="" id="messages-notification-check03">
                                        <label class="form-check-label" for="messages-notification-check03"></label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="text-reset notification-item d-block dropdown-item">
                            <div class="d-flex">
                                <img src="/assets/images/users/avatar-8.jpg" class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                <div class="flex-1">
                                    <a href="#!" class="stretched-link">
                                        <h6 class="mt-0 mb-1 fs-13 fw-semibold">Maureen Gibson</h6>
                                    </a>
                                    <div class="fs-13 text-muted">
                                        <p class="mb-1">We talked about a project on linkedin.</p>
                                    </div>
                                    <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                        <span><i class="mdi mdi-clock-outline"></i> 3 days ago</span>
                                    </p>
                                </div>
                                <div class="px-2 fs-15">
                                    <div class="form-check notification-check">
                                        <input class="form-check-input" type="checkbox" value="" id="messages-notification-check04">
                                        <label class="form-check-label" for="messages-notification-check04"></label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="my-3 text-center">
                            <button type="button" class="btn btn-soft-success waves-effect waves-light">View
                                All Messages <i class="ri-arrow-right-line align-middle"></i></button>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade p-4" id="alerts-tab" role="tabpanel" aria-labelledby="alerts-tab">
                    <div class="w-25 w-sm-50 pt-3 mx-auto">
                        <img src="/assets/images/svg/bell.svg" class="img-fluid" alt="user-pic">
                    </div>
                    <div class="text-center pb-5 mt-2">
                        <h6 class="fs-18 fw-semibold lh-base">Hey! You have no any notifications </h6>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="dropdown ms-sm-3 header-item topbar-user">
        <button type="button" class="btn" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="d-flex align-items-center">
                <img class="rounded-circle header-profile-user" src="/assets/images/users/avatar-1.jpg" alt="Header Avatar">
                <span class="text-start ms-xl-2">
                    <span class="d-none d-xl-inline-block ms-1 fw-medium user-name-text">{{ $user->name }}</span>
                    <span class="d-none d-xl-block ms-1 fs-12 text-muted user-name-sub-text">{{ $user->getRoleNames()[0] }}</span>
                </span>
            </span>
        </button>
        <div class="dropdown-menu dropdown-menu-end">
            <!-- item-->
            <h6 class="dropdown-header">Welcome {{ $user->name }}!</h6>
            <a class="dropdown-item" href="{{ route('user.profile.index') }}"><i class="mdi mdi-account-circle text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Profile</span></a>
            <a class="dropdown-item" href="apps-chat.html"><i class="mdi mdi-message-text-outline text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Messages</span></a>
            <a class="dropdown-item" href="apps-tasks-kanban.html"><i class="mdi mdi-calendar-check-outline text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Taskboard</span></a>
            <a class="dropdown-item" href="pages-faqs.html"><i class="mdi mdi-lifebuoy text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Help</span></a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="pages-profile.html"><i class="mdi mdi-wallet text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Balance : <b>$5971.67</b></span></a>
            <a class="dropdown-item" href="pages-profile-settings.html"><span class="badge bg-soft-success text-success mt-1 float-end">New</span><i class="mdi mdi-cog-outline text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Settings</span></a>
            <a class="dropdown-item" href="auth-lockscreen-basic.html"><i class="mdi mdi-lock text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Lock screen</span></a>
            <a class="dropdown-item" href="#" onclick="event.preventDefault(); document.getElementById('form-logout').submit()">
                <i class="mdi mdi-logout text-muted fs-16 align-middle me-1"></i>
                <span class="align-middle" data-key="t-logout">Logout</span>
            </a>
            <form action="{{ route('logout') }}" method="POST" id="form-logout">
                @csrf
            </form>
        </div>
    </div>
</div>
</div>
</div>
</header> --}}
