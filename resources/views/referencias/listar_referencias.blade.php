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
                    <div class="col-md-12 col-md-4 col-lg-4">
                        <div class="input-group input-group-sm mb-1">
                            <input type="text" class="form-control" placeholder="Buscar..." />
                            <button class="btn btn-primary btn-sm" type="button" id="btn-linea">
                                <span class="material-icons-outlined">
                                    <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="M9.5,3A6.5,6.5 0 0,1 16,9.5C16,11.11 15.41,12.59 14.44,13.73L14.71,14H15.5L20.5,19L19,20.5L14,15.5V14.71L13.73,14.44C12.59,15.41 11.11,16 9.5,16A6.5,6.5 0 0,1 3,9.5A6.5,6.5 0 0,1 9.5,3M9.5,5C7,5 5,7 5,9.5C5,12 7,14 9.5,14C12,14 14,12 14,9.5C14,7 12,5 9.5,5Z" />
                                    </svg>
                                </span> Buscar
                            </button>
                        </div>
                    </div>
                    <div class="col-md-12 col-md-4 col-lg-4">
                        <div class="input-group input-group-sm mb-1">
                            <button class="btn btn-primary btn-sm" type="button" id="btn-linea">
                                <span class="material-icons-outlined">
                                    <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="M12,22L16,18H13V12H11V18H8M19,4H18V2H16V4H8V2H6V4H5A2,2 0 0,0 3,6V20A2,2 0 0,0 5,22H8V20H5V9H19V20H16V22H19A2,2 0 0,0 21,20V6A2,2 0 0,0 19,4Z" />
                                    </svg>
                                </span> Exportar Referencias
                            </button>
                        </div>
                    </div>
                    <div class="col-md-12 col-md-4 col-lg-4">
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
                            <table class="table table-bordered table-sm">
                                <thead class="table-dark text-center">
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
                                            <td>{{ $item->CODIGOREF }}</td>
                                            <td>{{ $item->REFER }}</td>
                                            <td>{{ $item->NOMREF }}</td>
                                            <td>{{ $item->PRECOS }}</td>
                                            <td>{{ $item->PREVEN }}</td>
                                            <td>{{ $item->PREVEN1 }}</td>
                                            <td>{{ $item->PREVEN2 }}</td>
                                            <td>{{ $item->PORIVAREF }}</td>
                                            <td>{{ $item->MAXIMO }}</td>
                                            <td>{{ $item->REFER }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <nav aria-label="...">
                                <ul class="pagination">
                                    {{-- <li class="page-item disabled">
                                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    
                                    <li class="page-item">
                                        <a class="page-link" href="#">Next</a>
                                    </li> --}}

                                </ul>
                            </nav>
                            <div class="d-flex justify-content-end">
                                {!! $refencias->links() !!}
                            </div>

                            <!-- end table -->
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>


@endsection
