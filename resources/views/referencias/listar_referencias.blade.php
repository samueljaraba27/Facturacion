@extends('layout.app')
@section('content')
    <div class="title-wrapper pt-10">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="title">
                    <h2>Referencias</h2>
                </div>
            </div>
            <!-- end col -->
            <div class="col-md-6">
                <div class="breadcrumb-wrapper">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="/home">Escritorio eSysPOS Plus</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Referencias
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card-style" {{-- style="height:auto; overflow-y: scroll;" --}}>
                <div class="row mb-4">
                    <div class="col-md-12 col-md-4 col-lg-12">
                        <div class="input-group input-group-sm mb-1">
                            <a href="/referencias" class="btn btn-success btn-sm" type="button" id="btn-linea">
                                <span class="material-icons-outlined">
                                    <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="M19,19V5H5V19H19M19,3A2,2 0 0,1 21,5V19A2,2 0 0,1 19,21H5A2,2 0 0,1 3,19V5C3,3.89 3.9,3 5,3H19M11,7H13V11H17V13H13V17H11V13H7V11H11V7Z" />
                                    </svg>
                                </span> Nueva Referencia
                            </a>
                        </div>
                    </div>
                </div>
                {{-- Tabla de Referencias --}}
                <div class="row">
                    <div class="col-md-12 col-md-4 col-lg-12">
                        <div class="table-wrapper table-responsive">
                            <table class="table  table-striped table-sm" id="tabla_referencias">
                                <thead class="bg-primary text-center">
                                    <tr>
                                        <th>
                                            <h6 class="text-white">Codigo</h6>
                                        </th>
                                        <th>
                                            <h6 class="text-white">Nombre</h6>
                                        </th>
                                        <th>
                                            <h6 class="text-white">Descripción</h6>
                                        </th>
                                        <th>
                                            <h6 class="text-white">PreCompra</h6>
                                        </th>
                                        <th>
                                            <h6 class="text-white">Precio</h6>
                                        </th>
                                        <th>
                                            <h6 class="text-white">Precio1</h6>
                                        </th>
                                        <th>
                                            <h6 class="text-white">Precio2</h6>
                                        </th>
                                        <th>
                                            <h6 class="text-white">Iva</h6>
                                        </th>
                                        <th>
                                            <h6 class="text-white">Stock</h6>
                                        </th>
                                        <th>
                                            <h6 class="text-white">Acciones</h6>
                                        </th>
                                    </tr>
                                    <!-- end table row-->
                                </thead>
                                <tbody>
                                    @foreach ($refencias as $item)
                                        <tr>
                                            <td class="min-width">
                                                <div class="lead">
                                                    <div class="lead-text">
                                                        <p>{{ $item->CODIGOREF }}</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="min-width">
                                                <div class="lead">
                                                    <div class="lead-text">
                                                        <p>{{ $item->REFER }}</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="min-width">
                                                <div class="lead">
                                                    <div class="lead-text">
                                                        <p>{{ $item->NOMREF }}</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="min-width">
                                                <div class="lead">
                                                    <div class="lead-text">
                                                        <p>{{ $item->PRECOS }}</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="min-width">
                                                <div class="lead">
                                                    <div class="lead-text">
                                                        <p>{{ $item->PREVEN }}</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="min-width">
                                                <div class="lead">
                                                    <div class="lead-text">
                                                        <p>{{ $item->PREVEN1 }}</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="min-width">
                                                <div class="lead">
                                                    <div class="lead-text">
                                                        <p>{{ $item->PREVEN2 }}</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="min-width">
                                                <div class="lead">
                                                    <div class="lead-text">
                                                        <p>{{ $item->PORIVAREF }}</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="min-width">
                                                <div class="lead">
                                                    <div class="lead-text">
                                                        <p>{{ $item->MAXIMO }}</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="min-width">
                                                <div class="lead">
                                                    <div class="lead-text">
                                                        <p>{{ $item->REFER }}</p>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{-- <div class="d-flex justify-content-end">
                                {!! $refencias->links() !!}
                            </div> --}}

                            <!-- end table -->
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

@section('scripts')
    <script src="{{ asset('/public/js/referencias/index.js') }}"></script>
@endsection
