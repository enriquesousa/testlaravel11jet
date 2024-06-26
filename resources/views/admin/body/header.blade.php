{{-- Header Menu --}}
<header id="page-topbar">
    <div class="navbar-header">

        <div class="d-flex">

            <!-- LOGO -->
            <div class="navbar-brand-box">

                <a href="{{ route('home') }}" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="{{ asset('logo/logo.png') }}" alt="logo-sm" height="32">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ asset('logo/TJWeb2-white.png') }}" alt="logo-dark" height="22">
                    </span>
                </a>

                <a href="{{ route('home') }}" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="{{ asset('logo/logo.png') }}" alt="logo-sm-light" height="32">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ asset('logo/TJWeb2-white.png') }}" alt="logo-light" height="52">
                    </span>
                </a>

            </div>

            <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect" id="vertical-menu-btn">
                <i class="ri-menu-2-line align-middle"></i>
            </button>

            <!-- App Search-->
            {{-- <form class="app-search d-none d-lg-block">
                <div class="position-relative">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="ri-search-line"></span>
                </div>
            </form> --}}

           

            {{-- Mega Menu --}}
            <div class="dropdown dropdown-mega d-none d-lg-block ms-2">
                <button type="button" class="btn header-item waves-effect" data-bs-toggle="dropdown"
                    aria-haspopup="false" aria-expanded="false">
                    Mega Menu
                    <i class="mdi mdi-chevron-down"></i>
                </button>
                <div class="dropdown-menu dropdown-megamenu">
                    <div class="row">
                        <div class="col-sm-8">
                            <div class="row">

                                <div class="col-md-4">

                                    <h5 class="font-size-14">PANELES</h5>
                                    <ul class="list-unstyled megamenu-list">
                                        <li>
                                            {{-- {{ route('inicio') }} --}}
                                            <a href="">
                                                <i class="ri-dashboard-line"></i>
                                                <span>Panel Inicio</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('dashboard') }}">
                                                <i class="ri-dashboard-line"></i>
                                                <span>Panel Control</span>
                                            </a>
                                        </li>
                                    </ul>

                                    <h5 class="font-size-14">PROVEEDORES</h5>
                                    <ul class="list-unstyled megamenu-list">
                                        <li>
                                            {{-- {{ route('list.supplier') }} --}}
                                            <a href="">
                                                <i class="ri-file-list-3-line"></i>
                                                <span>Lista</span>
                                            </a>
                                        </li>
                                        <li>
                                            {{-- {{ route('add.supplier') }} --}}
                                            <a href="">
                                                <i class="ri-file-add-line"></i>
                                                <span>Agregar</span>
                                            </a>
                                        </li>
                                    </ul>

                                    <h5 class="font-size-14">UNIDADES</h5>
                                    <ul class="list-unstyled megamenu-list">
                                        <li>
                                            {{-- {{ route('list.unit') }} --}}
                                            <a href="">
                                                <i class="ri-file-list-3-line"></i>
                                                <span>Lista</span>
                                            </a>
                                        </li>
                                        <li>
                                            {{-- {{ route('add.unit') }} --}}
                                            <a href="">
                                                <i class="ri-file-add-line"></i>
                                                <span>Agregar</span>
                                            </a>
                                        </li>
                                    </ul>

                                    <h5 class="font-size-14">CATEGORÍAS</h5>
                                    <ul class="list-unstyled megamenu-list">
                                        <li>
                                            {{-- {{ route('list.category') }} --}}
                                            <a href="">
                                                <i class="ri-file-list-3-line"></i>
                                                <span>Lista</span>
                                            </a>
                                        </li>
                                        <li>
                                            {{-- {{ route('add.category') }} --}}
                                            <a href="">
                                                <i class="ri-file-add-line"></i>
                                                <span>Agregar</span>
                                            </a>
                                        </li>
                                    </ul>

                                </div>

                                <div class="col-md-4">

                                    <h5 class="font-size-14">CLIENTES</h5>
                                    <ul class="list-unstyled megamenu-list">
                                        <li>
                                            {{-- {{ route('list.customer') }} --}}
                                            <a href="">
                                                <i class="ri-file-list-3-line"></i>
                                                <span>Lista</span>
                                            </a>
                                        </li>
                                        <li>
                                            {{-- {{ route('add.customer') }} --}}
                                            <a href="">
                                                <i class="ri-file-add-line"></i>
                                                <span>Agregar</span>
                                            </a>
                                        </li>
                                    </ul>

                                    <h5 class="font-size-14">PRODUCTOS</h5>
                                    <ul class="list-unstyled megamenu-list">
                                        <li>
                                            {{-- {{ route('list.product') }} --}}
                                            <a href="">
                                                <i class="ri-file-list-3-line"></i>
                                                <span>Lista</span>
                                            </a>
                                        </li>
                                        <li>
                                            {{-- {{ route('add.product') }} --}}
                                            <a href="">
                                                <i class="ri-file-add-line"></i>
                                                <span>Agregar</span>
                                            </a>
                                        </li>
                                    </ul>

                                </div>

                                <div class="col-md-4">

                                    <h5 class="font-size-14">COMPRAS</h5>
                                    <ul class="list-unstyled megamenu-list">
                                        <li>
                                            {{-- {{ route('list.purchase') }} --}}
                                            <a href="">
                                                <i class="ri-file-list-3-line"></i>
                                                <span>Lista</span>
                                            </a>
                                        </li>
                                        <li>
                                            {{-- {{ route('add.purchase') }} --}}
                                            <a href="">
                                                <i class="ri-file-add-line"></i>
                                                <span>Agregar</span>
                                            </a>
                                        </li>
                                    </ul>

                                    <h5 class="font-size-14">FACTURAS</h5>
                                    <ul class="list-unstyled megamenu-list">
                                        <li>
                                            {{-- {{ route('todas.invoice') }} --}}
                                            <a href="">
                                                <i class="ri-file-list-3-line"></i>
                                                <span>Lista Todas</span>
                                            </a>
                                        </li>
                                        <li>
                                            {{-- {{ route('list.invoice') }} --}}
                                            <a href="">
                                                <i class="ri-file-list-3-line"></i>
                                                <span>Lista Aprobadas</span>
                                            </a>
                                        </li>
                                    </ul>

                                </div>

                            </div>
                        </div>


                    </div>
                </div>
            </div>

            <!-- Menu de blocks -->
            <div class="dropdown d-none d-lg-inline-block ms-1">
                <button type="button" class="btn header-item noti-icon waves-effect" data-bs-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <i class="ri-apps-2-line"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                    <div class="px-lg-2">
                        <div class="row g-0">
                            <div class="col">
                                <a class="dropdown-icon-item" href="#">
                                    <img src="{{ asset('backend/assets/images/brands/github.png') }}" alt="Github">
                                    <span>GitHub</span>
                                </a>
                            </div>
                            <div class="col">
                                <a class="dropdown-icon-item" href="#">
                                    <img src="{{ asset('backend/assets/images/brands/bitbucket.png') }}"
                                        alt="bitbucket">
                                    <span>Bitbucket</span>
                                </a>
                            </div>
                            <div class="col">
                                <a class="dropdown-icon-item" href="#">
                                    <img src="{{ asset('backend/assets/images/brands/dribbble.png') }}"
                                        alt="dribbble">
                                    <span>Dribbble</span>
                                </a>
                            </div>
                        </div>

                        <div class="row g-0">
                            <div class="col">
                                <a class="dropdown-icon-item" href="#">
                                    <img src="{{ asset('backend/assets/images/brands/dropbox.png') }}"
                                        alt="dropbox">
                                    <span>Dropbox</span>
                                </a>
                            </div>
                            <div class="col">
                                <a class="dropdown-icon-item" href="#">
                                    <img src="{{ asset('backend/assets/images/brands/mail_chimp.png') }}"
                                        alt="mail_chimp">
                                    <span>Mail Chimp</span>
                                </a>
                            </div>
                            <div class="col">
                                <a class="dropdown-icon-item" href="#">
                                    <img src="{{ asset('backend/assets/images/brands/slack.png') }}" alt="slack">
                                    <span>Slack</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="d-flex">

            <!-- SEARCH para ventana móvil -->
            {{-- <div class="dropdown d-inline-block d-lg-none ms-2">
                <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="ri-search-line"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                    aria-labelledby="page-header-search-dropdown">

                    <form class="p-3">
                        <div class="mb-3 m-0">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search ...">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="submit"><i
                                            class="ri-search-line"></i></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div> --}}

            <!-- Banderas para idiomas -->
            <div class="dropdown d-none d-sm-inline-block">
                <button type="button" class="btn header-item waves-effect" data-bs-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    
                    @if (App::getLocale() == 'en')
                        <img class="" src="{{ asset('backend/assets/images/flags/us.jpg') }}" alt="Header Language" height="16">    
                    @else
                        <img class="" src="{{ asset('backend/assets/images/flags/mexico.png') }}" alt="Header Language" height="16">    
                    @endif
                    
                </button>
                <div class="dropdown-menu dropdown-menu-end">

                    <!-- item-->
                    <a href="{{ route('admin.change.locale.us') }}" class="dropdown-item notify-item">
                        <img src="{{ asset('backend/assets/images/flags/us.jpg') }}" alt="user-image"
                            class="me-1" height="12"> <span class="align-middle">English</span>
                    </a>

                    <!-- item-->
                    {{-- <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <img src="{{ asset('backend/assets/images/flags/spain.jpg') }}" alt="user-image"
                            class="me-1" height="12"> <span class="align-middle">Spanish</span>
                    </a> --}}

                    <!-- item-->
                    <a href="{{ route('admin.change.locale.es') }}" class="dropdown-item notify-item">
                        <img src="{{ asset('backend/assets/images/flags/mexico.png') }}" alt="user-image"
                            class="me-1" height="12"> <span class="align-middle">Español</span>
                    </a>

                    <!-- item-->
                    {{-- <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <img src="{{ asset('backend/assets/images/flags/germany.jpg') }}" alt="user-image"
                            class="me-1" height="12"> <span class="align-middle">German</span>
                    </a> --}}

                    <!-- item-->
                    {{-- <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <img src="{{ asset('backend/assets/images/flags/italy.jpg') }}" alt="user-image"
                            class="me-1" height="12"> <span class="align-middle">Italian</span>
                    </a> --}}

                    <!-- item-->
                    {{-- <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <img src="{{ asset('backend/assets/images/flags/russia.jpg') }}" alt="user-image"
                            class="me-1" height="12"> <span class="align-middle">Russian</span>
                    </a> --}}

                </div>
            </div>

            

            <!-- Icono de Pantalla Completa -->
            <div class="dropdown d-none d-lg-inline-block ms-1">
                <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
                    <i class="ri-fullscreen-line"></i>
                </button>
            </div>

            <!-- Campana de Notificaciones -->
            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item noti-icon waves-effect"
                    id="page-header-notifications-dropdown" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="ri-notification-3-line"></i>
                    <span class="noti-dot"></span>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                    aria-labelledby="page-header-notifications-dropdown">
                    <div class="p-3">
                        <div class="row align-items-center">
                            <div class="col">
                                <h6 class="m-0"> Notifications </h6>
                            </div>
                            <div class="col-auto">
                                <a href="#!" class="small"> View All</a>
                            </div>
                        </div>
                    </div>
                    <div data-simplebar style="max-height: 230px;">
                        <a href="" class="text-reset notification-item">
                            <div class="d-flex">
                                <div class="avatar-xs me-3">
                                    <span class="avatar-title bg-primary rounded-circle font-size-16">
                                        <i class="ri-shopping-cart-line"></i>
                                    </span>
                                </div>
                                <div class="flex-1">
                                    <h6 class="mb-1">Your order is placed</h6>
                                    <div class="font-size-12 text-muted">
                                        <p class="mb-1">If several languages coalesce the grammar</p>
                                        <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 3 min ago</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="" class="text-reset notification-item">
                            <div class="d-flex">
                                <img src="{{ asset('backend/assets/images/users/avatar-3.jpg') }}"
                                    class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                <div class="flex-1">
                                    <h6 class="mb-1">James Lemire</h6>
                                    <div class="font-size-12 text-muted">
                                        <p class="mb-1">It will seem like simplified English.</p>
                                        <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 1 hours ago</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="" class="text-reset notification-item">
                            <div class="d-flex">
                                <div class="avatar-xs me-3">
                                    <span class="avatar-title bg-success rounded-circle font-size-16">
                                        <i class="ri-checkbox-circle-line"></i>
                                    </span>
                                </div>
                                <div class="flex-1">
                                    <h6 class="mb-1">Your item is shipped</h6>
                                    <div class="font-size-12 text-muted">
                                        <p class="mb-1">If several languages coalesce the grammar</p>
                                        <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 3 min ago</p>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="" class="text-reset notification-item">
                            <div class="d-flex">
                                <img src="{{ asset('backend/assets/images/users/avatar-4.jpg') }}"
                                    class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                <div class="flex-1">
                                    <h6 class="mb-1">Salena Layfield</h6>
                                    <div class="font-size-12 text-muted">
                                        <p class="mb-1">As a skeptical Cambridge friend of mine occidental.</p>
                                        <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 1 hours ago</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="p-2 border-top">
                        <div class="d-grid">
                            <a class="btn btn-sm btn-link font-size-14 text-center" href="javascript:void(0)">
                                <i class="mdi mdi-arrow-right-circle me-1"></i> View More..
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            {{-- PERFIL - Código para poder traer datos del usuario para desplegar foto de perfil y nombre de usuario --}}
            @php
                if (Auth::check()){
                    $id = Auth::user()->id;
                    $adminData = App\Models\User::find($id);
                }
                else{
                    return redirect('/');
                }
            @endphp
            
            <!-- Perfil de usuario -->
            <div class="dropdown d-inline-block user-dropdown">

                <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                    {{-- <img class="rounded-circle header-profile-user"
                        src="{{ (!empty($adminData->profile_photo_path) ? url($adminData->profile_photo_path) : url('upload/no_image.jpg')) }}" alt="Header Avatar"> --}}

                    <img class="rounded-circle header-profile-user"
                    src="{{ (!empty($adminData->profile_image) ? url('upload/admin_images/'.$adminData->profile_image) : url('upload/no_image.jpg')) }}" alt="Header Avatar">                        

                    <span class="d-none d-xl-inline-block ms-1">{{ $adminData->username }}</span>
                    <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                </button>

                <div class="dropdown-menu dropdown-menu-end">
                    
                    {{-- Perfil --}}
                    <a href="{{ route('admin.view.profile') }}" class="dropdown-item">
                        <i class="ri-user-line align-middle me-1"></i>
                        {{ __('Profile') }}
                    </a>

                    {{-- Editar Perfil --}}
                    <a href="{{ route('admin.edit.profile') }}" class="dropdown-item">
                        <i class="ri-profile-line align-middle me-1"></i>
                        {{ __('Edit Profile') }}
                    </a>

                    {{-- Editar Foto --}}
                    <a href="{{ route('admin.edit.photo') }}" class="dropdown-item">
                        <i class="ri-user-5-line align-middle me-1"></i>
                        {{ __('Edit Photo') }}
                    </a>

                    {{-- Cambiar contraseña --}}
                    <a href="{{ route('admin.change.password') }}" class="dropdown-item">
                        <i class="ri-lock-unlock-line align-middle me-1"></i>
                        {{ __('Change Password') }}
                    </a>

                    {{-- Editar Perfil Jet --}}
                    {{-- <a href="{{ route('admin.edit.jet.profile') }}" class="dropdown-item">
                        <i class="ri-user-line align-middle me-1"></i>
                        {{ __('Edit Profile Jet') }}
                    </a> --}}

                    {{-- Cambiar contraseña con JET --}}
                    {{-- <a href="{{ route('admin.change.password.jet') }}" class="dropdown-item">
                        <i class="ri-lock-unlock-line align-middle me-1"></i>
                        {{ __('Change Password Jet') }}
                    </a> --}}

                    {{-- Perfil Admin Todo con ayuda de x blade Jetstream, {{ route('profile.show') }} --}}
                    <a href="{{ route('admin.view.profile.jet') }}" class="dropdown-item">
                        <i class="ri-settings-2-line align-middle me-1"></i>
                        {{ __('Profile Settings Jet') }} 
                    </a>

                    {{-- Perfil Jet 2FA --}}
                    <a href="{{ route('admin.auth2fa.jet') }}" class="dropdown-item">
                        <i class="ri-lock-unlock-line align-middle me-1"></i>
                        {{ __('Two Factor Authentication') }} 
                    </a>

                    {{-- Browser Session Jet --}}
                    <a href="{{ route('admin.browser.session.jet') }}" class="dropdown-item">
                        <i class="ri-global-line align-middle me-1"></i>
                        {{ __('Browser Sessions') }} 
                    </a>

                    {{-- Delete Account Jet --}}
                    <a href="{{ route('admin.delete.account.jet') }}" class="dropdown-item">
                        <i class="ri-delete-bin-5-line align-middle me-1"></i>
                        {{ __('Delete Account') }} 
                    </a>

                    

                    {{-- Settings --}}
                    {{-- <a href="#" class="dropdown-item d-block">
                            <span class="badge bg-success float-end mt-1">11</span>
                            <i class="ri-settings-2-line align-middle me-1"></i>
                            {{ __('Settings') }}
                    </a> --}}

                    {{-- About --}}
                    <a href="{{ route('dashboard') }}" class="dropdown-item d-block">
                        <i class="ri-information-line"></i>
                        {{ __('About') }}
                </a>

                    {{-- Lock Screen --}}
                    {{-- <a class="dropdown-item" href="#">
                        <i class="ri-lock-unlock-line align-middle me-1"></i>
                        Lock screen
                    </a> --}}

                    <div class="dropdown-divider"></div>

                    {{-- Logout --}}
                    <a href="{{ route('admin.logout') }}" class="dropdown-item text-danger">
                        <i class="ri-shut-down-line align-middle me-1 text-danger"></i>
                        {{-- Salir --}}
                        {{ __('Logout') }}
                    </a>

                </div>
            </div>

            <!-- Gear Icon para ajustes right-bar-toggle -->
            {{-- <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect">
                    <i class="ri-settings-2-line"></i>
                </button>
            </div> --}}

        </div>

    </div>
</header>
