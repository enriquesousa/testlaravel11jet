{{-- Left Sidebar Start --}}
<div class="vertical-menu">
    <div data-simplebar class="h-100">

        {{-- Código para poder traer datos del usuario para desplegar foto de perfil y nombre de usuario --}}
        @php
            if (Auth::check()) {
                $id = Auth::user()->id;
                $adminData = App\Models\User::find($id);
            } else {
                return redirect('/');
            }
        @endphp

        <!-- User details -->
        <div class="user-profile text-center mt-3">
            <div class="">
                {{-- <img src="{{ !empty($adminData->profile_photo_path) ? url($adminData->profile_photo_path) : url('upload/no_image.jpg') }}" alt="" class="avatar-md rounded-circle"> --}}
                <img src="{{ !empty($adminData->profile_image) ? url('upload/admin_images/' . $adminData->profile_image) : url('upload/no_image.jpg') }}"
                    alt="" class="avatar-md rounded-circle">
            </div>
            <div class="mt-3">
                <h4 class="font-size-16 mb-1">{{ $adminData->name }}</h4>
                <span class="text-muted"><i class="ri-record-circle-line align-middle font-size-14 text-success"></i>
                    En Linea</span>
            </div>
        </div>

        <!--- Sidemenu -->
        <div id="sidebar-menu">

            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">

                <!-- * MENU -->
                <li class="menu-title">{{ __('Panels') }}</li>

                <!-- Dashboard Panel de Inicio -->
                <li>
                    <a href="{{ route('dashboard') }}" class="waves-effect">
                        <i class="ri-dashboard-line"></i>
                        {{-- <span class="badge rounded-pill bg-success float-end">3</span> --}}
                        <span>{{ __('Initial Panel') }}</span>
                    </a>
                </li>

                <!-- Dashboard de Control para Admin -->
                <li>
                    <a href="{{ route('dashboard_admin') }}" class="waves-effect">
                        <i class="ri-dashboard-line"></i>
                        {{-- <span class="badge rounded-pill bg-success float-end">3</span> --}}
                        <span>{{ __('Admin Panel') }}</span>
                    </a>
                </li>


                <!-- * DATA -->
                <li class="menu-title">{{ __('Data') }}</li>

                <!-- Proveedores -->
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-factory"></i>
                        <span>{{ __('Suppliers') }}</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        {{-- {{ route('list.supplier') }} --}}
                        <li><a href="">{{ __('List') }}</a></li>
                        {{-- {{ route('add.supplier') }} --}}
                        <li><a href="">{{ __('Add') }}</a></li>
                    </ul>
                </li>

                <!-- Clientes -->
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-user-3-line"></i>
                        <span>{{ __('Customers') }}</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        {{-- {{ route('list.customer') }} --}}
                        <li><a href="">{{ __('List') }}</a></li>
                        {{-- {{ route('add.customer') }} --}}
                        <li><a href="">{{ __('Add') }}</a></li>
                        {{-- {{ route('credit.customer') }} --}}
                    </ul>
                </li>


                <!-- * REPORTES -->
                <li class="menu-title">Reportes</li>

                <!-- Reporte de Inventario -->
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        {{-- <i class="ri-hotel-line"></i> --}}
                        <img src="{{ asset('backend/assets/icons/inventario.svg') }}" alt="" height="20">
                        <span>Inventario</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        {{-- {{ route('stock.report') }} --}}
                        <li><a href="">Lista Inventario</a></li>
                        {{-- {{ route('stock.supplier.wise') }} --}}
                        <li><a href="">Por Proveedor/Productos</a></li>
                    </ul>
                </li>

                <!-- Reporte de Facturas -->
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <img src="{{ asset('backend/assets/icons/factura.svg') }}" alt="" height="20">
                        <span>Facturas</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        {{-- {{ route('todas.invoice') }} --}}
                        <li><a href="">Todas</a></li>
                        {{-- {{ route('print.list.invoice') }} --}}
                        <li><a href="">Imprimir</a></li>
                        {{-- {{ route('daily.invoice.report') }} --}}
                        <li><a href="">Reporte PDF por Fechas</a></li>
                    </ul>
                </li>

                <!-- * ROLES y PERMISOS -->
                <li class="menu-title">ROLES y PERMISOS</li>
                {{-- <li class="menu-title badge bg-soft-warning">
                    ROLES y PERMISOS&nbsp;&nbsp; 
                    <img src="{{ asset('backend/assets/icons/rolesypermisos.svg') }}" alt="" height="25">
                </li> --}}
                

                <!-- Lista -->
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        {{-- <img src="{{ asset('backend/assets/icons/lock.svg') }}" alt="" height="20"> --}}
                        <span>Lista</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li>
                            <a href="">Lista Roles y Permisos</a>
                        </li>
                        <li>
                            <a href="">Lista de Roles</a>
                        </li>
                        <li>
                            <a href="">Lista de Permisos</a>
                        </li>
                        <li>
                            <a href="">Asignar Roles</a>
                        </li>
                    </ul>
                </li>

                <!-- Asignar Roles -->
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        {{-- <img src="{{ asset('backend/assets/icons/lock.svg') }}" alt="" height="20"> --}}
                        <span>Asignar Roles</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li>
                            <a href="">Asignar</a>
                        </li>
                    </ul>
                </li>

            </ul>

        </div>
        <!-- Sidebar -->

    </div>
</div>
<!-- Left Sidebar End -->
