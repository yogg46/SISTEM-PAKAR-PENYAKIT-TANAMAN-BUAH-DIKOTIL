<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <title>SIPAKAR BUAH DIKOTIL</title>

    <meta name="description" content="SIPAKAR DIKOTIL &amp; BUAH DIKOTIL">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Open Graph Meta -->
    <meta property="og:title" content="SIPAKAR DIKOTIL &amp; BUAH DIKOTIL">
    <meta property="og:site_name" content="SISTEM PAKAR">


    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="/assets/logosipaktil.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/assets/logosipaktil.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/logosipaktil.png">

    <!-- Stylesheets -->
    <!-- OneUI framework -->
    <link rel="stylesheet" id="css-main" href="/assets/css/oneui.css">
    <link rel="stylesheet" href="/assets/js/plugins/datatables-bs5/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="/assets/js/plugins/datatables-buttons-bs5/css/buttons.bootstrap5.min.css">
    <link rel="stylesheet" href="/assets/js/plugins/datatables-responsive-bs5/css/responsive.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.min.css">
    <link rel="stylesheet" href="{{ asset('assets/js/plugins/raty-js/jquery.raty.css') }}">
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script> --}}

    <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
    <!-- <link rel="stylesheet" id="css-theme" href="/assets/css/themes/amethyst.min.css"> -->
    <!-- END Stylesheets -->
    @livewireStyles

    <style>
        .example {
            /* background-color: #eee; */
            /* width: 200px; */
            height: 500px;
            /* border: 1px dotted black; */
            overflow-y: scroll;
            /* Add the ability to scroll */
        }

        /* Hide scrollbar for Chrome, Safari and Opera */
        .example::-webkit-scrollbar {
            display: none;
        }

        /* Hide scrollbar for IE, Edge and Firefox */
        .example {
            -ms-overflow-style: none;
            /* IE and Edge */
            scrollbar-width: none;
            /* Firefox */
        }
    </style>
</head>

<body>
    <!-- Page Container -->
    <!--
        Available classes for #page-container:

    GENERIC

      'remember-theme'                            Remembers active color theme and dark mode between pages using localStorage when set through
                                                  - Theme helper buttons [data-toggle="theme"],
                                                  - Layout helper buttons [data-toggle="layout" data-action="dark_mode_[on/off/toggle]"]
                                                  - ..and/or One.layout('dark_mode_[on/off/toggle]')

    SIDEBAR & SIDE OVERLAY

      'sidebar-r'                                 Right Sidebar and left Side Overlay (default is left Sidebar and right Side Overlay)
      'sidebar-mini'                              Mini hoverable Sidebar (screen width > 991px)
      'sidebar-o'                                 Visible Sidebar by default (screen width > 991px)
      'sidebar-o-xs'                              Visible Sidebar by default (screen width < 992px)
      'sidebar-dark'                              Dark themed sidebar

      'side-overlay-hover'                        Hoverable Side Overlay (screen width > 991px)
      'side-overlay-o'                            Visible Side Overlay by default

      'enable-page-overlay'                       Enables a visible clickable Page Overlay (closes Side Overlay on click) when Side Overlay opens

      'side-scroll'                               Enables custom scrolling on Sidebar and Side Overlay instead of native scrolling (screen width > 991px)

    HEADER

      ''                                          Static Header if no class is added
      'page-header-fixed'                         Fixed Header

    HEADER STYLE

      ''                                          Light themed Header
      'page-header-dark'                          Dark themed Header

    MAIN CONTENT LAYOUT

      ''                                          Full width Main Content if no class is added
      'main-content-boxed'                        Full width Main Content with a specific maximum width (screen width > 1200px)
      'main-content-narrow'                       Full width Main Content with a percentage width (screen width > 1200px)

    DARK MODE

      'sidebar-dark page-header-dark dark-mode'   Enable dark mode (light sidebar/header is not supported with dark mode)
    -->
    <div id="page-container" class="sidebar-o   enable-page-overlay side-scroll page-header-fixed main-content-narrow">
        <!-- Side Overlay-->

        <!-- END Side Overlay -->

        <!-- Sidebar -->
        <!--
          Sidebar Mini Mode - Display Helper classes

          Adding 'smini-hide' class to an element will make it invisible (opacity: 0) when the sidebar is in mini mode
          Adding 'smini-show' class to an element will make it visible (opacity: 1) when the sidebar is in mini mode
              If you would like to disable the transition animation, make sure to also add the 'no-transition' class to your element

          Adding 'smini-hidden' to an element will hide it when the sidebar is in mini mode
          Adding 'smini-visible' to an element will show it (display: inline-block) only when the sidebar is in mini mode
          Adding 'smini-visible-block' to an element will show it (display: block) only when the sidebar is in mini mode
      -->
        <nav id="sidebar" aria-label="Main Navigation">
            <!-- Side Header -->
            <div class="content-header" style="background-color: #06d47b">
                <!-- Logo -->
                <a class="fw-semibold text-dual" href="index.html">
                    <span class="smini-visible">
                        <i class="fa fa-leaf text-primary"></i>
                    </span>
                    <span class="smini-hide fs-5 tracking-wider text-black">Sistem Pakar</span>
                </a>
                <!-- END Logo -->
                <div>
                    <img src="/homepage/assets/img/logosipaktil.png" style="width: 40px;" alt="">
                </div>
                <!-- Extra -->

                <!-- END Extra -->
            </div>
            <!-- END Side Header -->

            <!-- Sidebar Scrolling -->
            <div class="js-sidebar-scroll" style="background-image: linear-gradient(50deg, #AAFFA9, #11FFBD);">
                <!-- Side Navigation -->
                <div class="content-side">
                    <ul class="nav-main">

                        <li class="nav-main-item">
                            <a class="nav-main-link  {{ request()->is('admin') || request()->is('dashbord/pemilik') || request()->is('dashbord') ? ' active' : '' }}"
                                href="/home">
                                <i class="nav-main-link-icon si si-speedometer"></i>
                                <span class="nav-main-link-name">Dashboard</span>
                            </a>
                        </li>
                        @if (Auth::user()->userRole == 'admin')
                            <li class="nav-main-item{{ request()->is('dataMaster/*') ? ' open' : '' }}">
                                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu"
                                    aria-haspopup="true" aria-expanded="true" href="#">
                                    <i class="nav-main-link-icon fa fa-user-group"></i>
                                    <span class="nav-main-link-name">Master Data</span>
                                </a>
                                <ul class="nav-main-submenu">
                                    <li class="nav-main-item">
                                        <a class="nav-main-link{{ request()->is('dataMaster/dataadmin') || request()->is('dataMaster/dataadmin/*') ? ' active' : '' }}"
                                            href="/dataMaster/dataadmin">
                                            <span class="nav-main-link-name">Data Admin</span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link {{ request()->is('dataMaster/datapetani') || request()->is('dataMaster/datapetani/*') ? ' active' : '' }}"
                                            href="/dataMaster/datapetani">
                                            <span class="nav-main-link-name">Data Petani</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-main-item {{ request()->is('dataPakar/*') ? ' open' : '' }}">
                                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu"
                                    aria-haspopup="true" aria-expanded="false" href="#">
                                    <i class="nav-main-link-icon fa fa-file-signature"></i>
                                    <span class="nav-main-link-name">Data Pakar</span>
                                </a>
                                <ul class="nav-main-submenu">
                                    <li class="nav-main-item">
                                        <a class="nav-main-link{{ request()->is('dataPakar/datagejala') || request()->is('dataPakar/datagejala/*') ? ' active' : '' }}"
                                            href="/dataPakar/datagejala">
                                            <span class="nav-main-link-name">Data
                                                Gejala</span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link{{ request()->is('dataPakar/datapenyakit') || request()->is('dataPakar/datapenyakit/*') ? ' active' : '' }}"
                                            href="/dataPakar/datapenyakit">
                                            <span class="nav-main-link-name">Data Penyakit</span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link {{ request()->is('dataPakar/dataobat') || request()->is('dataPakar/dataobat/*') ? ' active' : '' }}"
                                            href="/dataPakar/dataobat">
                                            <span class="nav-main-link-name">Data Obat</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-main-item {{ request()->is('dataAturan/*') ? ' open' : '' }}">
                                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu"
                                    aria-haspopup="true" aria-expanded="false" href="#">
                                    <i class="nav-main-link-icon fa fa-arrows-spin"></i>
                                    <span class="nav-main-link-name">Data Aturan</span>
                                </a>
                                <ul class="nav-main-submenu">
                                    <li class="nav-main-item">
                                        <a class="nav-main-link{{ request()->is('dataAturan/detailpenyakit') || request()->is('dataAturan/detailpenyakit/*') ? ' active' : '' }}"
                                            href="/dataAturan/detailpenyakit">
                                            <span class="nav-main-link-name">Detail Penyakit</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li
                                class="nav-main-item {{ request()->is('laporan/*') || request()->is('laporan') ? ' open' : '' }}">
                                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu"
                                    aria-haspopup="true" aria-expanded="false" href="#">
                                    <i class="nav-main-link-icon fa fa-folder-open"></i>
                                    <span class="nav-main-link-name">Laporan</span>
                                </a>
                                <ul class="nav-main-submenu">
                                    <li
                                        class="nav-main-item {{ request()->is('laporan/*') || request()->is('laporan') ? ' open' : '' }}">
                                        <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu"
                                            aria-haspopup="true" aria-expanded="false" href="#">
                                            <span class="nav-main-link-name">Data Laporan</span>
                                        </a>
                                        <ul class="nav-main-submenu">
                                            <li class="nav-main-item">
                                                <a class="nav-main-link {{ request()->is('laporan') || request()->is('laporan/*') ? ' active' : '' }}"
                                                    href="/laporan">
                                                    <span class="nav-main-link-name">Laporan</span>
                                                </a>
                                            </li>
                                            <li class="nav-main-item">
                                                <a class="nav-main-link {{ request()->is('laporan/gejala') || request()->is('laporan/gejala/*') ? ' active' : '' }}"
                                                    href="/laporan/gejala">
                                                    <span class="nav-main-link-name">Laporan Gejala</span>
                                                </a>
                                            </li>
                                            <li class="nav-main-item">
                                                <a class="nav-main-link {{ request()->is('laporan/penyakit') || request()->is('laporan/penyakit/*') ? ' active' : '' }}"
                                                    href="/laporan/penyakit">
                                                    <span class="nav-main-link-name">Laporan Penyakit</span>
                                                </a>
                                            </li>
                                            <li class="nav-main-item">
                                                <a class="nav-main-link {{ request()->is('laporan/obat') || request()->is('laporan/obat/*') ? ' active' : '' }}"
                                                    href="/laporan/obat">
                                                    <span class="nav-main-link-name">Laporan Obat</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link {{ request()->is('laporan/chat') || request()->is('laporan/chat/*') ? ' active' : '' }}"
                                            href="/laporan/chat">
                                            <span class="nav-main-link-name">Chat</span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link {{ request()->is('laporan/komentar') || request()->is('laporan/komentar/*') ? ' active' : '' }}"
                                            href="/laporan/komentar">
                                            <span class="nav-main-link-name">Komentar</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        @endif
                        @if (Auth::user()->userRole == 'pemilik')
                            <li class="nav-main-item">
                                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu"
                                    aria-haspopup="true" aria-expanded="false" href="#">
                                    <i class="nav-main-link-icon fa fa-folder-open"></i>
                                    <span class="nav-main-link-name">Laporan</span>
                                </a>
                                <ul class="nav-main-submenu">
                                    <li class="nav-main-item">
                                        <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu"
                                            aria-haspopup="true" aria-expanded="false" href="#">
                                            <span class="nav-main-link-name">Data Laporan</span>
                                        </a>
                                        <ul class="nav-main-submenu">
                                            <li class="nav-main-item">
                                                <a class="nav-main-link" href="/laporan">
                                                    <span class="nav-main-link-name">Laporan</span>
                                                </a>
                                            </li>
                                            <li class="nav-main-item">
                                                <a class="nav-main-link" href="/laporangejala">
                                                    <span class="nav-main-link-name">Laporan Gejala</span>
                                                </a>
                                            </li>
                                            <li class="nav-main-item">
                                                <a class="nav-main-link" href="/laporanpenyakit">
                                                    <span class="nav-main-link-name">Laporan Penyakit</span>
                                                </a>
                                            </li>
                                            <li class="nav-main-item">
                                                <a class="nav-main-link" href="/laporanobat">
                                                    <span class="nav-main-link-name">Laporan Obat</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="/chat">
                                            <span class="nav-main-link-name">Chat</span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="/komentar">
                                            <span class="nav-main-link-name">Komentar</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        @endif
                        @if (Auth::user()->userRole == 'user')
                            <li class="nav-main-item {{ request()->is('petani/*') ? ' open' : '' }}">
                                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu"
                                    aria-haspopup="true" aria-expanded="false" href="#">
                                    <i class="nav-main-link-icon fa fa-magnifying-glass-chart"></i>
                                    <span class="nav-main-link-name">Menu</span>
                                </a>
                                <ul class="nav-main-submenu">
                                    <li class="nav-main-item">
                                        <a class="nav-main-link{{ request()->is('petani/diagnosa') || request()->is('petani/diagnosa/*') ? ' active' : '' }}"
                                            href="/petani/diagnosa">
                                            <span class="nav-main-link-name">Mulai Diagnosa</span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link{{ request()->is('petani/chatadmin') || request()->is('petani/chatadmin/*') ? ' active' : '' }}"
                                            href="/petani/chatadmin">
                                            <span class="nav-main-link-name">Chat</span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link {{ request()->is('petani/komentaradmin') || request()->is('petani/komentaradmin/*') ? ' active' : '' }}"
                                            href="/petani/komentaradmin">
                                            <span class="nav-main-link-name">Komentar</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-main-item {{ request()->is('petani/*') ? ' open' : '' }}">
                                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu"
                                    aria-haspopup="true" aria-expanded="false" href="#">
                                    <i class="nav-main-link-icon fa fa-group-arrows-rotate"></i>
                                    <span class="nav-main-link-name">Riwayat</span>
                                </a>
                                <ul class="nav-main-submenu">
                                    <li class="nav-main-item">
                                        <a class="nav-main-link{{ request()->is('petani/riwayatDiagnosa') || request()->is('petani/riwayatDiagnosa/*') ? ' active' : '' }}"
                                            href="/petani/riwayatDiagnosa">
                                            <span class="nav-main-link-name">Riwayat Diagnosa</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        @endif

                        {{-- <li class="nav-main-heading">User Interface</li> --}}
                    </ul>
                </div>
                <!-- END Side Navigation -->
            </div>
            <!-- END Sidebar Scrolling -->
        </nav>
        <!-- END Sidebar -->

        <!-- Header -->
        <header id="page-header">
            <!-- Header Content -->
            <div class="content-header">
                <!-- Left Section -->
                <div class="d-flex align-items-center">
                    <!-- Toggle Sidebar -->
                    <!-- Layout API, functionality initialized in Template._uiApiLayout()-->
                    <button type="button" class="btn btn-sm btn-alt-secondary me-2 d-lg-none" data-toggle="layout"
                        data-action="sidebar_toggle">
                        <i class="fa fa-fw fa-bars"></i>
                    </button>
                    <!-- END Toggle Sidebar -->

                    <!-- Toggle Mini Sidebar -->
                    <!-- Layout API, functionality initialized in Template._uiApiLayout()-->
                    <button type="button" class="btn btn-sm btn-alt-secondary me-2 d-none d-lg-inline-block"
                        data-toggle="layout" data-action="sidebar_mini_toggle">
                        <i class="fa fa-fw fa-ellipsis-v"></i>
                    </button>
                    <!-- END Toggle Mini Sidebar -->

                    <!-- Open Search Section (visible on smaller screens) -->
                    <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                    {{-- <button type="button" class="btn btn-sm btn-alt-secondary d-md-none" data-toggle="layout"
                        data-action="header_search_on">
                        <i class="fa fa-fw fa-search"></i>
                    </button> --}}
                    <!-- END Open Search Section -->

                    <!-- Search Form (visible on larger screens) -->
                    {{-- <form class="d-none d-md-inline-block" action="be_pages_generic_search.html" method="POST">
                        <div class="input-group input-group-sm">
                            <input type="text" class="form-control form-control-alt" placeholder="Search.."
                                id="page-header-search-input2" name="page-header-search-input2">
                            <span class="input-group-text border-0">
                                <i class="fa fa-fw fa-search"></i>
                            </span>
                        </div>
                    </form> --}}
                    <!-- END Search Form -->
                </div>
                <!-- END Left Section -->

                <!-- Right Section -->
                <div class="d-flex align-items-center">
                    <!-- User Dropdown -->
                    <div class="dropdown d-inline-block ms-2">
                        <button type="button" class="btn btn-sm btn-alt-secondary d-flex align-items-center"
                            id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            @if (!is_null(Auth::user()->gambar))
                                <img class="rounded-circle" src="{{ asset('storage/' . Auth::user()->gambar) }}"
                                    alt="Header Avatar" style="width: 21px;">
                            @else
                                <img class="rounded-circle" src="/assets/media/avatars/avatar10.jpg"
                                    alt="Header Avatar" style="width: 21px;">
                            @endif
                            <span class="d-none d-sm-inline-block ms-2">
                                @if (Auth::user()->namaPengguna)
                                    {{ Auth::user()->namaPengguna }}
                                @else
                                    <script>
                                        window.location = "/";
                                    </script>
                                @endif
                            </span>
                            <i class="fa fa-fw fa-angle-down d-none d-sm-inline-block opacity-50 ms-1 mt-1"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-md dropdown-menu-end p-0 border-0"
                            aria-labelledby="page-header-user-dropdown">
                            <div class="p-3 text-center bg-body-light border-bottom rounded-top">
                                @if (Auth::user()->gambar)
                                    <img class="img-avatar img-avatar48 img-avatar-thumb"
                                        src="{{ asset('storage/' . Auth::user()->gambar) }}" alt="">
                                @else
                                    <img class="img-avatar img-avatar48 img-avatar-thumb"
                                        src="/assets/media/avatars/avatar10.jpg" alt="">
                                @endif

                                <p class="mt-2 mb-0 fw-medium">{{ Auth::user()->namaPengguna }}</p>
                                <p class="mb-0 text-muted fs-sm fw-medium">{{ Auth::user()->userRole }}</p>
                            </div>
                            <div class="p-2">
                                <a class="dropdown-item d-flex align-items-center justify-content-between"
                                    href="be_pages_generic_profile.html">
                                    <span class="fs-sm fw-medium">Profile</span>
                                    <span class="badge rounded-pill bg-primary ms-2">1</span>
                                </a>
                            </div>
                            <div role="separator" class="dropdown-divider m-0"></div>
                            <div class="p-2">

                                <a class="dropdown-item d-flex align-items-center justify-content-between"href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                    <span class="fs-sm fw-medium">Log Out</span>
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- END User Dropdown -->

                    <!-- Notifications Dropdown -->
                    <div class="dropdown d-inline-block ms-2">
                        <button type="button" class="btn btn-sm btn-alt-secondary"
                            id="page-header-notifications-dropdown" data-bs-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <i class="fa fa-fw fa-bell"></i>
                            @if (Auth::user()->userRole == 'admin')
@if ($notif->count())
<span class="text-primary">•</span>
@endif

@else

@if (Auth::user()->notif->count())
<span class="text-primary">•</span>
@endif
                            @endif
                        </button>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0 border-0 fs-sm"
                            aria-labelledby="page-header-notifications-dropdown">
                            <div class="p-2 bg-body-light border-bottom text-center rounded-top">
                                <h5 class="dropdown-header text-uppercase">Notifications  </h5>
                            </div>
                            <ul class="nav-items mb-0">
                                <li>
                                    @if (Auth::user()->userRole == 'admin')
{{-- @json($notif) --}}
                                            @foreach ( $notif as $key )

                                                <a class="text-dark d-flex py-2" href="{{ route('notifications.destroy', $key->id) }}"
                                                    onclick="event.preventDefault(); document.getElementById('notification-{{ $key->id }}-form').submit();">
                                                    <div class="flex-shrink-0 me-2 ms-3">
                                                        <i class="fa fa-fw fa-check-circle text-success"></i>
                                                    </div>

                                                    <div class="flex-grow-1 pe-2">
                                                        <div class="fw-semibold">You have a new chat from {{ $key->userNotif->namaPengguna }}</div>
                                                        <span class="fw-medium text-muted">{{ $key->created_at->diffForHumans() }}</span>
                                                    </div>
                                                </a>
                                                <form id="notification-{{ $key->id }}-form" action="{{ route('notifications.destroy', $key->id) }}" method="POST" style="display: none;">
                                                    @csrf

                                                </form>
                                            @endforeach

                                    @else
                                        @if (isset(Auth::user()->notif))
                                            @foreach ( Auth::user()->notif as $key )

                                                <a class="text-dark d-flex py-2"
                                                href="{{ route('notifications.destroy', $key->id) }}"
                                                onclick="event.preventDefault(); document.getElementById('notification-{{ $key->id }}-form').submit();">
                                                    <div class="flex-shrink-0 me-2 ms-3">
                                                        <i class="fa fa-fw fa-check-circle text-success"></i>
                                                    </div>

                                                    <div class="flex-grow-1 pe-2">
                                                        <div class="fw-semibold">You have a new chat</div>
                                                        <span class="fw-medium text-muted">{{ $key->created_at->diffForHumans() }}</span>
                                                    </div>
                                                </a>
                                                <form id="notification-{{ $key->id }}-form" action="{{ route('notifications.destroy', $key->id) }}" method="POST" style="display: none;">
                                                    @csrf

                                                </form>
                                            @endforeach
                                        @endif
                                    @endif
                                </li>


                            </ul>
                            {{-- <div class="p-2 border-top text-center">
                                <a class="d-inline-block fw-medium" href="javascript:void(0)">
                                    <i class="fa fa-fw fa-arrow-down me-1 opacity-50"></i> Load More..
                                </a>
                            </div> --}}
                        </div>
                    </div>
                    <!-- END Notifications Dropdown -->

                    <!-- Toggle Side Overlay -->
                    <!-- Layout API, functionality initialized in Template._uiApiLayout() -->

                    <!-- END Toggle Side Overlay -->
                </div>
                <!-- END Right Section -->
            </div>

            <!-- END Header Loader -->
        </header>
        <!-- END Header -->

        <!-- Main Container -->
        <main id="main-container">


            <!-- Page Content -->
            <div class="content">
                @yield('page')
            </div>
            <!-- END Page Content -->
        </main>
        <!-- END Main Container -->

        <!-- Footer -->
        <footer id="page-footer" class="bg-body-light">
            <div class="content py-3">
                <div class="row fs-sm">
                    {{-- <div class="col-sm-6 order-sm-2 py-1 text-center text-sm-end">
              Crafted with <i class="fa fa-heart text-danger"></i> by <a class="fw-semibold" href="https://1.envato.market/ydb" target="_blank">pixelcave</a>
            </div> --}}
                    <div class="col-sm-6 order-sm-1 py-1 text-center text-sm-start">
                        <a class="fw-semibold" target="_blank">SIPAKAR BUAH DIKOTIL</a> &copy; <span
                            data-toggle="year-copy"></span>
                    </div>
                </div>
            </div>
        </footer>
        <!-- END Footer -->
    </div>
    <script>
        // get the div element
        var div = document.getElementById('messages-container');
        // automatically scroll to the bottom of the div when its content changes
        div.addEventListener('DOMSubtreeModified', function() {
            div.scrollTop = div.scrollHeight;
        });
    </script>
    <!-- END Page Container -->

    <!--
        OneUI JS

        Core libraries and functionality
        webpack is putting everything together at /assets/_js/main/app.js
    -->
    <script src="/assets/js/oneui.app.min.js"></script>
    @include('sweetalert::alert')
    <script type="text/javascript">
        function deleteConfirmation(id) {
            swal({
                title: "Delete?",
                text: "Please ensure and then confirm!",
                type: "warning",
                showCancelButton: !0,
                confirmButtonText: "Yes, delete it!",
                cancelButtonText: "No, cancel!",
                reverseButtons: !0
            }).then(function(e) {

                if (e.value === true) {
                    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

                    $.ajax({
                        type: 'POST',
                        url: "{{ url('/detailpenyakit/delete') }}/" + id,
                        data: {
                            _token: CSRF_TOKEN
                        },
                        dataType: 'JSON',
                        success: function(results) {

                            if (results.success === true) {
                                swal("Done!", results.message, "success");
                            } else {
                                swal("Error!", results.message, "error");
                            }
                        }
                    });

                } else {
                    e.dismiss;
                }

            }, function(dismiss) {
                return false;
            })
        }
    </script>
    @stack('js')
    <!-- Page JS Plugins -->
    <script src="/assets/js/plugins/chart.js/chart.min.js"></script>
    <script src="/assets/js/lib/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.min.js"></script>
    @stack('chart')
    <!-- Page JS Code -->
    <script src="/assets/js/pages/be_pages_dashboard.min.js"></script>
    <script src="/assets/js/plugins/easy-pie-chart/jquery.easypiechart.min.js"></script>
    <script src="/assets/js/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>
    <script src="/assets/js/plugins/chart.js/chart.min.js"></script>
    <!-- Page JS Plugins -->
    <script src="/assets/js/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="/assets/js/plugins/datatables-bs5/js/dataTables.bootstrap5.min.js"></script>
    <script src="/assets/js/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="/assets/js/plugins/datatables-responsive-bs5/js/responsive.bootstrap5.min.js"></script>
    <script src="/assets/js/plugins/datatables-buttons/dataTables.buttons.min.js"></script>
    <script src="/assets/js/plugins/datatables-buttons-bs5/js/buttons.bootstrap5.min.js"></script>
    <script src="/assets/js/plugins/datatables-buttons-jszip/jszip.min.js"></script>
    <script src="/assets/js/plugins/datatables-buttons-pdfmake/pdfmake.min.js"></script>
    <script src="/assets/js/plugins/datatables-buttons-pdfmake/vfs_fonts.js"></script>
    <script src="/assets/js/plugins/datatables-buttons/buttons.print.min.js"></script>
    <script src="/assets/js/plugins/datatables-buttons/buttons.html5.min.js"></script>


    <!-- Page JS Code -->
    <script src="/assets/js/pages/be_comp_charts.min.js"></script>
    <script src="/assets/js/pages/be_tables_datatables.min.js"></script>
    <script src="{{ asset('assets/js/plugins/raty-js/jquery.raty.js') }}"></script>

    <!-- Page JS Code -->
    <script src="{{ asset('assets/js/pages/be_comp_rating.min.js') }}"></script>

    <!-- Page JS Helpers (Easy Pie Chart + jQuery Sparkline Plugins) -->
    <script>
        One.helpersOnLoad(['jq-easy-pie-chart', 'jq-sparkline']);
    </script>
    @livewireScripts

</body>

</html>
