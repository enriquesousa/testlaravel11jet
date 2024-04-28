{{-- Left Sidebar Start --}}
<div class="vertical-menu">
    <div data-simplebar class="h-100">

        {{-- Código para poder traer datos del usuario para desplegar foto de perfil y nombre de usuario --}}
        @php
            if (Auth::check()){
                $id = Auth::user()->id;
                $adminData = App\Models\User::find($id);
            }
            else{
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
                <li class="menu-title">Menu</li>

                <!-- Dashboard Panel de Inicio -->
                <li>
                    <a href="{{ route('dashboard') }}" class="waves-effect">
                        <i class="ri-dashboard-line"></i>
                        {{-- <span class="badge rounded-pill bg-success float-end">3</span> --}}
                        <span>Panel de Inicio</span>
                    </a>
                </li>

                <!-- Dashboard de Control para Admin -->
                <li>
                    <a href="{{ route('dashboard_admin') }}" class="waves-effect">
                        <i class="ri-dashboard-line"></i>
                        {{-- <span class="badge rounded-pill bg-success float-end">3</span> --}}
                        <span>Panel de Admin</span>
                    </a>
                </li>

                

                <!-- Proveedores -->
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-factory"></i>
                        <span>Proveedores</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        {{-- {{ route('list.supplier') }} --}}
                        <li><a href="">Lista</a></li>
                        {{-- {{ route('add.supplier') }} --}}
                        <li><a href="">Agregar</a></li>
                    </ul>
                </li>

                <!-- Clientes -->
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-user-3-line"></i>
                        <span>Clientes</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        {{-- {{ route('list.customer') }} --}}
                        <li><a href="">Lista</a></li>
                        {{-- {{ route('add.customer') }} --}}
                        <li><a href="">Agregar</a></li>
                        {{-- {{ route('credit.customer') }} --}}
                        <li><a href="">Con Adeudo</a></li>
                        {{-- {{ route('paid.customer') }} --}}
                        <li><a href="">Entradas</a></li>
                        {{-- {{ route('customer.wise.report') }} --}}
                        <li><a href="">Por Deudor/Acreedor</a></li>
                    </ul>
                </li>

                <!-- Unidades -->
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-tape-measure"></i>
                        <span>Unidades</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        {{-- {{ route('list.unit') }} --}}
                        <li><a href="">Lista</a></li>
                        {{-- {{ route('add.unit') }} --}}
                        <li><a href="">Agregar</a></li>
                    </ul>
                </li>

                <!-- Categorías -->
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-function-line"></i>
                        <span>Categorías</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        {{-- {{ route('list.category') }} --}}
                        <li><a href="">Lista</a></li>
                        {{--  --}}
                        <li><a href="">Agregar</a></li>
                    </ul>
                </li>

                <!-- Productos -->
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-shopping-basket-2-line"></i>
                        <span>Productos</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        {{-- {{ route('list.product') }} --}}
                        <li><a href="">Lista</a></li>
                        {{-- {{ route('add.product') }} --}}
                        <li><a href="">Agregar</a></li>
                        {{-- {{ route('list.product.category') }} --}}
                        <li><a href="">Por Categoría</a></li>
                        {{-- {{ route('list.product.supplier') }} --}}
                        <li><a href="">Por Proveedor</a></li>
                    </ul>
                </li>

                <!-- Compras -->
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-shopping-bag-line"></i>
                        <span>Compras</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        {{-- {{ route('list.purchase') }} --}}
                        <li><a href="">Lista</a></li>
                        {{-- {{ route('add.purchase') }} --}}
                        <li><a href="">Agregar</a></li>
                        {{-- {{ route('pending.purchase') }} --}}
                        <li><a href="">Aprobar</a></li>
                        {{-- {{ route('daily.purchase.report') }} --}}
                        <li><a href="">Reporte por Fechas</a></li>
                    </ul>
                </li>

                <!-- Facturas - Invoices -->
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-article-line"></i>
                        <span>Facturas</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        {{-- {{ route('todas.invoice') }} --}}
                        <li><a href="">Lista Todas</a></li>
                        {{-- {{ route('list.invoice') }} --}}
                        <li><a href="">Lista Aprobadas</a></li>
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
                
                 <!-- Roles y Permisos -->
                 <li>
                     <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <img src="{{ asset('backend/assets/icons/lock.svg') }}" alt="" height="20">
                        <span>Roles y Permisos</span>
                     </a>
                     <ul class="sub-menu" aria-expanded="false">
                        {{-- {{ route('all.permission') }} --}}
                        <li><a href="">Lista Permisos</a></li>
                     </ul>
                 </li>

            </ul>

        </div>
        <!-- Sidebar -->

    </div>
</div>
<!-- Left Sidebar End -->
