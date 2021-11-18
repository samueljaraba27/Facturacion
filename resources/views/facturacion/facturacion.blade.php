@extends('layout.app')
@section('content')
    <div class="title-wrapper pt-30">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="title mb-30">
                    <h2>Facturación Electronica</h2>
                </div>
            </div>
            <!-- end col -->
            <div class="col-md-6">
                <div class="breadcrumb-wrapper mb-30">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="#0">Escritorio</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Facturación Electronica
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
            <div class="card-style mb-30">
                <!-- Row 1 -->
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-6">
                        <div class="input-group mb-6">
                            <span class="btn btn-outline-secondary fs-5" id=""> Tercero/Cliente </span>
                            <input type="number" class="form-control fs-5" value="1000" data-bs-toggle="tooltip"
                                data-bs-placement="top" title="Nit/código" id="nitTercero" list="list-terceros"
                                accesskey="t" required />
                            <button class="btn btn-outline-secondary" type="button" id="searchTercero"
                                data-bs-toggle="modal" data-bs-target="#modalTerceros">
                                <span class="material-icons-outlined"> search </span>
                            </button>
                        </div>
                    </div>
                    <div class="col-sm-12col-md-12 col-lg-6">
                        <div class="input-group mb-6">
                            <input type="text" class="form-control bold" placeholder="VENTAS DE CONTADO"
                                aria-label="Nombre del tercero" id="terceroName" disabled />
                            <button class="btn btn-outline-secondary" type="button" id="button-addon2" disabled>
                                <span class="material-icons-outlined"> search </span>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Row 2 -->
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-6">
                        <div class="form-floating">
                            <select class="form-select fs-5" id="selectForpag" style="padding-top: 0"></select>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-6">
                        <div class="input-group mb-6">
                            <div class="form-floating">
                                <select class="form-select fs-5" id="selectVend" style="padding-top: 0"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Vendedor">
                                    <option value="0">VEND: Seleccionar</option>
                                </select>
                                <!-- </div> -->
                            </div>
                            <span class="input-group-text" type="button" id="button-addon1">
                                % Desc
                            </span>
                            <input type="text" class="form-control fs-4" id="dctoVend" placeholder="0" disabled />
                        </div>
                    </div>
                </div>
                <!-- Row 3 -->
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-6">
                        <div class="input-group mb-6">
                            <input type="text" class="form-control fs-5" data-bs-toggle="tooltip" data-bs-placement="top"
                                data-refer-code="" title="" list="list-refer" placeholder="Referencia" id="refer" />
                            <button class="btn btn-outline-secondary" data-bs-toggle="modal"
                                data-bs-target="#modalReferencia" type="submit" id="search-reference">
                                <span class="material-icons-outlined"> search </span>
                            </button>
                            <span class="input-group-text bold" type="button"> Cant. </span>
                            <input type="number" class="form-control fs-4" id="cant" data-bs-toggle="tooltip"
                                data-bs-placement="top" title="Cantidad" value="0" min="0" />
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-6">
                        <div class="input-group mb-6">
                            <span class="input-group-text" type="button">
                                <span class="material-icons-outlined"> attach_money </span>
                            </span>

                            <input type="text" class="form-control fs-4" id="precioUnit" data-bs-toggle="tooltip"
                                data-bs-placement="top" title="Precio unitario" value="0" />
                            <span class="input-group-text bold" type="button">% Dto</span>
                            <input type="number" min="0" max="100" class="form-control fs-4" id="dctoRefer"
                                data-bs-toggle="tooltip" data-bs-placement="top" title="Descuento" placeholder=""
                                value="0" />
                            <button id="btnAddReferencia" class="btn btn-success form-control" data-bs-toggle="tooltip"
                                data-bs-placement="top" title="Agregar referencia">
                                <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                        d="M11,9H13V6H16V4H13V1H11V4H8V6H11M7,18A2,2 0 0,0 5,20A2,2 0 0,0 7,22A2,2 0 0,0 9,20A2,2 0 0,0 7,18M17,18A2,2 0 0,0 15,20A2,2 0 0,0 17,22A2,2 0 0,0 19,20A2,2 0 0,0 17,18M7.17,14.75L7.2,14.63L8.1,13H15.55C16.3,13 16.96,12.59 17.3,11.97L21.16,4.96L19.42,4H19.41L18.31,6L15.55,11H8.53L8.4,10.73L6.16,6L5.21,4L4.27,2H1V4H3L6.6,11.59L5.25,14.04C5.09,14.32 5,14.65 5,15A2,2 0 0,0 7,17H19V15H7.42C7.29,15 7.17,14.89 7.17,14.75Z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                <br />
                <!-- Row 4 -->
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-8 col-xl col-xxl">
                        <div class="table-responsive">
                            <div class="table-wrapper" style="width: 100%">
                                <table id="tableProductos" class="table table-hover border" style="overflow-y: scroll">
                                    <thead class="table-dark">
                                        <tr id="cabeza">
                                            <th scope="col">#</th>
                                            <th scope="col">DESCRIPCIÓN ART.</th>
                                            <th scope="col">CODIGO</th>
                                            <th scope="col">CANT</th>
                                            <th scope="col">P. UNIT</th>
                                            <th scope="col">TOTAL</th>
                                            <th scope="col">%D</th>
                                            <th scope="col">CODDEP</th>
                                        </tr>
                                    </thead>
                                    <tbody id="cuerpo"></tbody>
                                </table>
                            </div>
                        </div>
                        <div class="container-fluid bg-dark" style="height: auto">
                            <h2 id="lblTotal" class="text-center text-light display-2">$ 0</h2>
                        </div>
                    </div>
                    <!-- Campos de valor -->
                    <div class="col-6 col-sm-6 col-md-6 col-xl-2 col-xxl-2 col-lg-2">
                        <div class="form-floating">
                            <input type="text" class="form-control fs-4 val_bruto campos-factura" id="valBruto"
                                placeholder="" value="0" disabled />
                            <label for="valbruto">Val. Bruto</label>
                        </div>
                        <div class="form-floating">
                            <input type="text" class="form-control fs-4 campos-factura desc_desc" id="totalDesc"
                                placeholder="" value="0" disabled />
                            <label for="desc">Desc.</label>
                        </div>
                        <div class="form-floating">
                            <input type="text" class="form-control fs-4 campos-factura desc_adi" id="desc-adi"
                                placeholder="" value="0" disabled />
                            <label for="descA">Desc. Adi</label>
                        </div>
                        <div class="form-floating">
                            <input type="number" class="form-control fs-4 campos-factura inc_inc" id="inc" placeholder=""
                                value="0" disabled />
                            <label for="inc">INC</label>
                        </div>
                        <div class="form-floating">
                            <input type="text" class="form-control fs-4 campos-factura cree_cree" id="cree" placeholder=""
                                value="0" disabled />
                            <label for="cree">Cree</label>
                        </div>
                        <div class="form-floating">
                            <input type="text" class="form-control fs-4 campos-factura sald_favor" id="saldFavor"
                                placeholder="" value="0" disabled />
                            <label for="salfavor">Sal. Favor</label>
                        </div>
                        <div class="form-floating">
                            <input type="text" class="form-control fs-4 campos-factura base_base" id="base" placeholder=""
                                value="0" disabled />
                            <label for="base">Base</label>
                        </div>
                        <div class="form-floating">
                            <input type="text" class="form-control fs-4 campos-factura iva_iva" id="iva" placeholder=""
                                value="0" disabled />
                            <label for="iva">I.V.A</label>
                        </div>
                    </div>
                    <!-- Campos 2 -->
                    <div class="col-6 col-sm-6 col-md-6 col-xl-2 col-xxl-2 col-lg-2">
                        <div class="form-floating">
                            <input type="text" class="form-control fs-4 campos-factura ret_fue" id="retFue" placeholder=""
                                value="0" disabled />
                            <label for="retFue">RetFue</label>
                        </div>
                        <div class="form-floating">
                            <input type="text" class="form-control fs-4 campos-factura ret_iva" id="retIva" placeholder=""
                                value="0" disabled />
                            <label for="retIva">RetIva</label>
                        </div>
                        <div class="form-floating">
                            <input type="text" class="form-control fs-4 campos-factura ret_ica" id="retIca" placeholder=""
                                value="0" disabled />
                            <label for="retIca">RetIca</label>
                        </div>
                        <div class="form-floating">
                            <input type="text" class="form-control fs-4 campos-factura comis_comis" id="comis"
                                placeholder="" value="0" disabled />
                            <label for="comis">Comis.</label>
                        </div>
                        <div class="form-floating">
                            <input type="text" class="form-control fs-4 campos-factura propina_propina" id="propina"
                                placeholder="" value="0" disabled />
                            <label for="propina">Propina</label>
                        </div>
                        <div class="form-floating">
                            <input type="text" class="cleave form-control fs-4 campos-factura neto_neto" id="neto"
                                placeholder="" value="0" disabled />
                            <label for="neto">NETO</label>
                        </div>
                        <div class="form-floating">
                            <input type="text" class="cleave form-control fs-4 campos-factura efectivo_efectivo"
                                id="efectivo" placeholder="" value="0" disabled />
                            <label for="efectivo">Efectivo</label>
                        </div>
                        <div class="form-floating">
                            <input type="text" class="form-control fs-4 campos-factura cambio_cambio" id="cambio"
                                placeholder="" value="0" readonly />
                            <label for="cambio">Cambio</label>
                        </div>
                    </div>
                </div>
                <br />
                <!-- Row 5 -->
                <div class="row" style="margin: auto">
                    <div class="col-sm-12 col-md-4 col-xl-4">
                        <div class="input-group mb-6" style="margin-bottom: 6px; margin-top: 6px">
                            <span class="input-group-text" id="basic-addon1">Pedido terminal movil</span>
                            <input type="text" class="form-control" placeholder="" aria-label="PTM"
                                aria-describedby="basic-addon1" disabled />
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4" style="margin-bottom: 6px; margin-top: 6px">
                        <button type="button" id="btn-totales" class="btn btn-outline-primary form control fs-5"
                            style="width: 100%">
                            Totales
                        </button>
                    </div>
                    <div class="col-sm-12 col-md-4 col-xl-4 col-xxl-4 col-lg-4" style="margin-bottom: 6px; margin-top: 6px">
                        <div class="row">
                            <div class="col-6 col-sm-6 col-md-6 col-xl-6 col-xxl-6 col-lg-6">

                                <span data-bs-toggle="modal" data-bs-target="#modalPedido">
                                    <button type="button" id="btnPedido" class="btn btn-success form-control fs-5"
                                        data-bs-toggle="tooltip" data-bs-placement="top" title="Guardar como Pedido"
                                        accesskey="p">
                                        <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                                            <path fill="currentColor"
                                                d="M17,7V3H7V7H17M14,17A3,3 0 0,0 17,14A3,3 0 0,0 14,11A3,3 0 0,0 11,14A3,3 0 0,0 14,17M19,1L23,5V17A2,2 0 0,1 21,19H7C5.89,19 5,18.1 5,17V3A2,2 0 0,1 7,1H19M1,7H3V21H17V23H3A2,2 0 0,1 1,21V7Z" />
                                        </svg>
                                    </button>
                                </span>
                            </div>
                            <div class="col-6 col-sm-6 col-md-6 col-xl-6 col-xxl-6 col-lg-6">
                                <button type="button" id="btnReset" class="btn form-control fs-5 btn-danger">
                                    Cancelar
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- End Col -->
    </div>
    <!-- End Row -->
@endsection
