@extends('layout.app')
@section('content')
    <div class="title-wrapper pt-10">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="title">
                    <h2>Facturación Electronica</h2>
                </div>
            </div>
            <!-- end col -->
            <div class="col-md-6">
                <div class="breadcrumb-wrapper">
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
        <div class="col-lg-8">
            <div class="card-style">
                <!-- Row 1 -->
                <div class="row">
                    <!-- Tercero/Cliante -->
                    <div class="col-sm-12 col-md-12 col-lg-6 mb-10 ">
                        <div class="input-group mb-6 input-group-sm">
                            <span class="input-group-text bold no-borderer-white" type="button">
                                <h5>Tercero/Cliente:</h5>
                            </span>
                            <input type="number" class="form-control fs-5 borderer-buttom-white" value="1000"
                                data-bs-toggle="tooltip" data-bs-placement="top" title="Nit/código" id="nitTercero"
                                list="list-terceros" accesskey="t" required />
                            <button style="border: 0;" class="btn primary-btn" type="button" id="searchTercero"
                                data-bs-toggle="modal" data-bs-target="#modalTerceros">
                                <i class="lni lni-keyword-research"></i>
                            </button>
                        </div>
                    </div>
                    <!-- Ventas de Contado -->
                    <div class="col-sm-12col-md-12 col-lg-6 mb-10 ">
                        <div class="input-group mb-6 input-group-sm">
                            <span class="input-group-text bold no-borderer-white" type="button">
                                <h5>Ventas de Contado:</h5>
                            </span>
                            <input type="text borderer-buttom-white" class="form-control fs-5 borderer-buttom-white"
                                aria-label="Nombre del tercero" id="terceroName" value="" />
                            <button class="btn primary-btn" style="border: 0;" type="button" id="">
                                <i class="lni lni-keyword-research"></i>
                            </button>
                        </div>
                    </div>
                    <!-- Forma de Pago -->
                    <div class="col-sm-12col-md-12 col-lg-5 ">
                        <div class="input-group mb-3">
                            <label class="input-group-text no-borderer-white" for="inputGroupSelect01">
                                <h5>Forma de Pago:</h5>
                            </label>
                            <select class="form-select fs-5 borderer-buttom" id="selectForpag">
                                <option value="0">Seleccionar</option>
                            </select>
                            <!-- <input class="form-control" style="border-top: 0; border-left: 0; border-right: 0;" list="selectForpag" id="exampleDataList" placeholder="">
                                                                                                                                        <datalist id="selectForpag"></datalist> -->
                        </div>
                    </div>
                    <!-- Vendedor -->
                    <div class="col-12 col-md-10 col-lg-5 ">
                        <div class="input-group mb-3">
                            <label class="input-group-text no-borderer-white" for="inputGroupSelect01">
                                <h5>Vendedor:</h5>
                            </label>
                            <select class="form-select fs-5" style="border-top: 0; border-left: 0; border-right: 0;"
                                id="selectVend" style="padding-top: 0" data-bs-toggle="tooltip" data-bs-placement="top"
                                title="Vendedor">
                                <option value="0">Seleccionar</option>
                            </select>
                            <!-- <input class="form-control" style="border-top: 0; border-left: 0; border-right: 0;" list="selectVend" id="exampleDataList" placeholder="Seleccionar...">
                                                                                                                                        <datalist id="selectVend">
                                                                                                                                            <option value="0">Selecionar..</option>
                                                                                                                                        </datalist> -->
                        </div>
                    </div>
                    <!-- Descuento -->
                    <div class="col-8 col-sm-1 col-md-1 col-lg-1 ">
                        <span class="input-group-text" style="border: 0; background: white; height: 100%;" type="button"
                            id="button-addon1">
                            % Desc
                        </span>
                    </div>
                    <div class="col-4 col-sm-1 col-md-1 col-lg-1 ">
                        <input type="text" class="form-control fs-4 text-end no-borderer-white" style="background: white;"
                            id="dctoVend" placeholder="0" disabled />
                    </div>
                    <!-- Referencia -->
                    <div class="col-sm-12 col-md-12 col-lg-4">
                        <div class="input-group mb-6 input-group-sm" style="padding-top: 7px;">
                            <span class="input-group-text bold no-borderer-white" type="button">
                                <h5>Referencia:</h5>
                            </span>
                            <input type="text" class="form-control fs-5"
                                style="border-top: 0; border-left: 0; border-right: 0;" data-bs-toggle="tooltip"
                                data-bs-placement="top" data-refer-code="" title="" list="list-refer"
                                placeholder="Referencia" id="refer" />
                            <button class="btn primary-btn" style="border: 0;" data-bs-toggle="modal"
                                data-bs-target="#modalReferencia" type="submit" id="search-reference">
                                <i class="lni lni-keyword-research"></i>
                            </button>
                        </div>
                    </div>
                    <!-- Cantidad -->
                    <div class="col-sm-12 col-md-12 col-lg-3">
                        <div class="input-group mb-6 input-group-sm">
                            <span class="input-group-text bold no-borderer-white" type="button">
                                <h5>Cantidad:</h5>
                            </span>
                            <input type="number" class="form-control fs-4 text-end"
                                style="border-top: 0; border-left: 0; border-right: 0;" id="cant" data-bs-toggle="tooltip"
                                data-bs-placement="top" title="Cantidad" value="0" min="0" />
                        </div>
                    </div>
                    <!-- $ -->
                    <div class="col-6 col-sm-2 col-md-2 col-lg-2 ">
                        <div class="input-group mb-6 input-group-sm">
                            <span class="input-group-text borderer-buttom-white" type="button">
                                <i class="lni lni-dollar"></i>
                            </span>
                            <input type="text" class="form-control fs-4 text-end"
                                style="border-top: 0; border-left: 0; border-right: 0;" id="precioUnit"
                                data-bs-toggle="tooltip" data-bs-placement="top" title="Precio unitario" value="0" />
                        </div>
                    </div>
                    <!-- % Desc -->
                    <div class="col-6 col-sm-5 col-md-5 col-lg-3">
                        <div class="input-group mb-6 input-group-sm">
                            <span class="input-group-text borderer-buttom-white" type="button">
                                % Desc
                            </span>
                            <input type="number" min="0" max="100" class="form-control fs-4 text-end"
                                style="border-top: 0; border-left: 0; border-right: 0;" id="dctoRefer"
                                data-bs-toggle="tooltip" data-bs-placement="top" title="Descuento" placeholder=""
                                value="0" />
                            <button class="btn primary-btn" style="border: 0;" data-bs-toggle="modal"
                                data-bs-target="#modalReferencia" type="submit" id="search-reference">
                                <i class="lni lni-cart-full"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <br />
            <!-- Row 4 -->
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="card-style ">
                        <div class="table-wrapper table-responsive">
                            <table class="table table-hover">
                                <!-- <thead class="table-dark"> -->
                                <thead class="">
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
                                    <!-- end table row-->
                                </thead>
                                <tbody id="cuerpo">
                                    <tr>
                                        <td>1</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                            <!-- end table -->
                        </div>
                        <div class="container-fluid bg-dark"
                            style="height: auto; border-bottom-left-radius: 30px; border-bottom-right-radius: 30px;">
                            <h2 id="lblTotal" class="text-center text-light display-2">$ 0</h2>
                        </div>
                        <!-- <div class="container-fluid bg-dark" style="height: auto">
                                                                                                                                        <h2 id="lblTotal" class="text-center text-light display-2">$ 0</h2>
                                                                                                                                    </div> -->
                    </div>
                </div>

            </div>
            <!-- Row 5 -->

        </div>
        <!-- Campos de Valor -->
        <div class="col-lg-4">
            <!-- <div class="card-style "> -->
            <div class="row">
                <!--  -->
                <div class="col-6 col-md-6 col-lg-6 mb-10 mb-2">
                    <div class="icon-card" style=" padding: 0; border: 0;">
                        <!-- Valor Bruto -->
                        <div class="form-floating">
                            <input type="text" class="form-control fs-4 val_bruto campos-factura" id="valBruto"
                                placeholder="" value="0" style="background: white; border: 0" disabled />
                            <label for="valbruto">Val. Bruto</label>
                        </div>
                    </div>
                </div>
                <!--  -->
                <div class="col-6 col-md-6 col-lg-6 mb-10 mb-2">
                    <div class="icon-card" style=" padding: 0; border: 0;">
                        <!-- RetFue -->
                        <div class="form-floating">
                            <input type="text" class="form-control fs-4 campos-factura ret_fue" id="retFue" placeholder=""
                                value="0" style="background: white; border: 0" disabled />
                            <label for="retFue">RetFue</label>
                        </div>
                    </div>
                </div>
                <!--  -->
                <div class="col-6 col-md-6 col-lg-6 mb-10 mb-2">
                    <div class="icon-card" style=" padding: 0; border: 0;">
                        <!-- Desc -->
                        <div class="form-floating">
                            <input type="text" class="form-control fs-4 campos-factura desc_desc" id="totalDesc"
                                placeholder="" value="0" style="background: white; border: 0" disabled />
                            <label for="desc">Desc.</label>
                        </div>
                    </div>
                </div>
                <!--  -->
                <div class="col-6 col-md-6 col-lg-6 mb-10 mb-2">
                    <div class="icon-card" style=" padding: 0; border: 0;">
                        <!-- RetIva -->
                        <div class="form-floating">
                            <input type="text" class="form-control fs-4 campos-factura ret_iva" id="retIva" placeholder=""
                                value="0" style="background: white; border: 0" disabled />
                            <label for="retIva">RetIva</label>
                        </div>
                    </div>
                </div>
                <!--  -->
                <div class="col-6 col-md-6 col-lg-6 mb-10 mb-2">
                    <div class="icon-card" style=" padding: 0; border: 0;">
                        <!-- Desc. Adi -->
                        <div class="form-floating">
                            <input type="text" class="form-control fs-4 campos-factura desc_adi" id="desc-adi"
                                placeholder="" value="0" style="background: white; border: 0" disabled />
                            <label for="descA">Desc. Adi</label>
                        </div>
                    </div>
                </div>
                <!--  -->
                <div class="col-6 col-md-6 col-lg-6 mb-10 mb-2">
                    <div class="icon-card" style=" padding: 0; border: 0;">
                        <!-- RetIca -->
                        <div class="form-floating">
                            <input type="text" class="form-control fs-4 campos-factura ret_ica" id="retIca" placeholder=""
                                value="0" style="background: white; border: 0" disabled />
                            <label for="retIca">RetIca</label>
                        </div>
                    </div>
                </div>
                <!--  -->
                <div class="col-6 col-md-6 col-lg-6 mb-10 mb-2">
                    <div class="icon-card" style=" padding: 0; border: 0;">
                        <!-- INC -->
                        <div class="form-floating">
                            <input type="number" class="form-control fs-4 campos-factura inc_inc" id="inc" placeholder=""
                                value="0" style="background: white; border: 0" disabled />
                            <label for="inc">INC</label>
                        </div>
                    </div>
                </div>
                <!--  -->
                <div class="col-6 col-md-6 col-lg-6 mb-10 mb-2">
                    <div class="icon-card" style=" padding: 0; border: 0;">
                        <!-- Comis -->
                        <div class="form-floating">
                            <input type="text" class="form-control fs-4 campos-factura comis_comis" id="comis"
                                placeholder="" value="0" style="background: white; border: 0" disabled />
                            <label for="comis">Comis.</label>
                        </div>
                    </div>
                </div>
                <!--  -->
                <div class="col-6 col-md-6 col-lg-6 mb-10 mb-2">
                    <div class="icon-card" style=" padding: 0; border: 0;">
                        <!-- Cree -->
                        <div class="form-floating">
                            <input type="text" class="form-control fs-4 campos-factura cree_cree" id="cree" placeholder=""
                                value="0" style="background: white; border: 0" disabled />
                            <label for="cree">Cree</label>
                        </div>
                    </div>
                </div>
                <!--  -->
                <div class="col-6 col-md-6 col-lg-6 mb-10 mb-2">
                    <div class="icon-card" style=" padding: 0; border: 0;">
                        <!-- Propina -->
                        <div class="form-floating">
                            <input type="text" class="form-control fs-4 campos-factura propina_propina" id="propina"
                                placeholder="" value="0" style="background: white; border: 0" disabled />
                            <label for="propina">Propina</label>
                        </div>
                    </div>
                </div>
                <!--  -->
                <div class="col-6 col-md-6 col-lg-6 mb-10 mb-2">
                    <div class="icon-card" style=" padding: 0; border: 0;">
                        <!-- Saldo -->
                        <div class="form-floating">
                            <input type="text" class="form-control fs-4 campos-factura sald_favor" id="saldFavor"
                                placeholder="" value="0" style="background: white; border: 0" disabled />
                            <label for="salfavor">Sal. Favor</label>
                        </div>
                    </div>
                </div>
                <!--  -->
                <div class="col-6 col-md-6 col-lg-6 mb-10 mb-2">
                    <div class="icon-card" style=" padding: 0; border: 0;">
                        <!-- NETO -->
                        <div class="form-floating">
                            <input type="text" class="cleave form-control fs-4 campos-factura neto_neto" id="neto"
                                placeholder="" value="0" style="background: white; border: 0" disabled />
                            <label for="neto">NETO</label>
                        </div>
                    </div>
                </div>
                <!--  -->
                <div class="col-6 col-md-6 col-lg-6 mb-10 mb-2">
                    <div class="icon-card" style=" padding: 0; border: 0;">
                        <!-- Base -->
                        <div class="form-floating">
                            <input type="text" class="form-control fs-4 campos-factura base_base" id="base" placeholder=""
                                value="0" style="background: white; border: 0" disabled />
                            <label for="base">Base</label>
                        </div>
                    </div>
                </div>
                <!--  -->
                <div class="col-6 col-md-6 col-lg-6 mb-10 mb-2">
                    <div class="icon-card" style=" padding: 0; border: 0;">
                        <!-- Efectivo -->
                        <div class="form-floating">
                            <input type="text" class="cleave form-control fs-4 campos-factura efectivo_efectivo"
                                id="efectivo" placeholder="" value="0" style="background: white; border: 0" disabled />
                            <label for="efectivo">Efectivo</label>
                        </div>
                    </div>
                </div>
                <!--  -->
                <div class="col-6 col-md-6 col-lg-6 mb-10 mb-2">
                    <div class="icon-card" style=" padding: 0; border: 0;">
                        <!-- I.V.A -->
                        <div class="form-floating">
                            <input type="text" class="form-control fs-4 campos-factura iva_iva" id="iva" placeholder=""
                                value="0" style="background: white; border: 0" disabled />
                            <label for="iva">I.V.A</label>
                        </div>
                    </div>
                </div>
                <!--  -->
                <div class="col-6 col-md-6 col-lg-6 mb-10 mb-2">
                    <div class="icon-card" style=" padding: 0; border: 0;">
                        <!-- Cambio -->
                        <div class="form-floating">
                            <input type="text" class="form-control fs-4 campos-factura cambio_cambio" id="cambio"
                                placeholder="" value="0" style="background: white; border: 0" readonly />
                            <label for="cambio">Cambio</label>
                        </div>
                    </div>
                </div>


                <div class="col-sm-12 col-md-4 col-lg-12 mb-20">
                    <div class="input-group mt-10">
                        <span class="input-group-text" id="basic-addon1 no-borderer-white">
                            <h5>Pedido terminal movil:</h5>
                        </span>
                        <input type="text" class="form-control" placeholder="" aria-label="PTM"
                            aria-describedby="basic-addon1" disabled />
                    </div>
                </div>
                <!--  -->
                <div class="col-sm-12 col-md-4 col-lg-8" style="margin-bottom: 6px; margin-top: 6px">
                    <button type="button" id="btn-totales" class="btn dark-btn-outline form-control fs-5">
                        Totales
                    </button>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4" style="margin-bottom: 6px; margin-top: 6px">
                    <div class="row">
                        <div class="col-6 col-sm-6 col-md-6col-lg-6 mb-10 mb-20">
                            <button type="button" id="btnPedido" class="btn primary-btn form-control fs-5"
                                data-bs-toggle="tooltip" data-bs-placement="top" title="Guardar como Pedido" accesskey="p">
                                <i class="lni lni-save"></i>
                            </button>
                            <!-- <span data-bs-toggle="modal" data-bs-target="#modalPedido" class="form-control">
                                                                                                                                                </span> -->
                        </div>
                        <div class="col-6 col-sm-6 col-md-6 col-lg-6 mb-10 mb-20">
                            <button type="button" id="btnReset" class="btn form-control fs-5 btn-danger">
                                <i class="lni lni-trash-can"></i>
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

@section('scripts')
    <script src="{{ asset('js/facturacion/index.js') }}" type="module"></script>
@endsection
