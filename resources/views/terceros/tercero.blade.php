@extends('layout.app')
@section('content')
    <!-- Modal Terceros -->
    <div class="title-wrapper pt-10 mb-10">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="title">
                    <h2>Tercero</h2>
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
                                Tercero
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
    </div>

    <div class="tab-style-3 card-style  ">
        <ul class="nav nav-tabs mb-30" id="tabs-general" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#tabContent-3-1"
                    type="button" role="tab" aria-controls="home" aria-selected="true">
                    <i class="lni lni-layout mr-10"></i>
                    General
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#tabContent-3-2"
                    type="button" role="tab" aria-controls="profile" aria-selected="false">
                    <i class="lni lni-users"></i>
                    Prov. & Vend.
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="config-tab" data-bs-toggle="tab" data-bs-target="#tabContent-3-3"
                    type="button" role="tab" aria-controls="config" aria-selected="false">
                    <i class="lni lni-database"></i>
                    Datos Adicionales
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#tabContent-3-4"
                    type="button" role="tab" aria-controls="contact" aria-selected="false">
                    <i class="lni lni-add-files"></i>
                    Doc. Adicionales
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#tabContent-3-5"
                    type="button" role="tab" aria-controls="contact" aria-selected="false">
                    <i class="lni lni-postcard"></i>
                    Datos Emplados
                </button>
            </li>
        </ul>
        <div class="tab-content" style="width: auto; height: 550px; overflow: auto;" id="nav-tabContent3">
            <div class="tab-pane fade active show" id="tabContent-3-1">
                <!-- Row 1 -->
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-3">
                                <!-- <div class="card" style="height: 98%;">
                                        <div class="card-body"> -->
                                <h6>FOTO</h6>
                                <!-- </div>
                                    </div> -->
                            </div>
                            <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-9">
                                <div class="row">
                                    <div class="col-8 col-xs-8 col-sm-8 col-md-8 col-lg-3">
                                        <h6>Clasificación</h6>
                                        <input class="form-check-input" type="radio" name="checkboxCedula"
                                            id="checkboxCedula">
                                        <label class="form-check-label" for="checkboxCedula">
                                            Cedula
                                        </label>

                                        <input class="form-check-input" type="radio" name="flexRadioDefault"
                                            id="checkboxNit">
                                        <label class="form-check-label" for="checkboxNit">
                                            Nit
                                        </label>

                                        <input class="form-check-input" type="radio" name="flexRadioDefault"
                                            id="checkboxOtors">
                                        <label class="form-check-label" for="checkboxOtors">
                                            Otros
                                        </label>
                                    </div>

                                    <div class="col-4 col-xs-4 col-sm-4 col-md-4 col-lg-1">
                                        <h6>Tipo</h6>
                                        <!-- <input type="text" value="13" style="width: 40px;"> -->
                                        <div class="input-group input-group-sm mb-2" style="margin: auto;">
                                            <input type="text" class="form-control bold" id="" value="13">
                                        </div>
                                    </div>

                                    <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-4"><br>
                                        <!-- <input type="text" value="13" style="width: 40px;"> -->
                                        <div class="input-group input-group-sm mb-2" style="margin: auto;">
                                            <span class="input-group-text btn-secondary bold">NIT/Cédula</span>
                                            <input type="text" class="form-control bold" id="">
                                        </div>
                                    </div>

                                    <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-4"><br>
                                        <!-- <input type="text" value="13" style="width: 40px;"> -->
                                        <div class="input-group input-group-sm mb-2" style="margin: auto;">
                                            <span class="input-group-text btn-secondary bold">Digito de verificación</span>
                                            <input type="text" class="form-control bold" id="">

                                        </div>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <!-- <input type="text" value="13" style="width: 40px;"> -->
                                        <div class="input-group input-group-sm mb-2" style="margin: auto;">
                                            <span class="input-group-text btn-secondary bold">Razon Social</span>
                                            <input type="text" class="form-control bold" id="">
                                        </div>
                                    </div>

                                    <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-6">
                                        <!-- <input type="text" value="13" style="width: 40px;"> -->
                                        <div class="input-group input-group-sm mb-2" style="margin: auto;">
                                            <span class="input-group-text btn-secondary bold">Primer apellido</span>
                                            <input type="text" class="form-control bold" id="">
                                        </div>
                                    </div>

                                    <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-6">
                                        <!-- <input type="text" value="13" style="width: 40px;"> -->
                                        <div class="input-group input-group-sm mb-2" style="margin: auto;">
                                            <span class="input-group-text btn-secondary bold">Segundo apellido</span>
                                            <input type="text" class="form-control bold" id="">
                                        </div>
                                    </div>

                                    <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-6">
                                        <!-- <input type="text" value="13" style="width: 40px;"> -->
                                        <div class="input-group input-group-sm mb-2" style="margin: auto;">
                                            <span class="input-group-text btn-secondary bold">Primer nombre</span>
                                            <input type="text" class="form-control bold" id="">
                                        </div>
                                    </div>

                                    <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-6">
                                        <!-- <input type="text" value="13" style="width: 40px;"> -->
                                        <div class="input-group input-group-sm mb-2" style="margin: auto;">
                                            <span class="input-group-text btn-secondary bold">Segundo nombre</span>
                                            <input type="text" class="form-control bold" id="">
                                        </div>
                                    </div>

                                    <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-8">
                                        <!-- <input type="text" value="13" style="width: 40px;"> -->
                                        <div class="input-group input-group-sm mb-2" style="margin: auto;">
                                            <span class="input-group-text btn-secondary bold">Direccion</span>
                                            <input type="text" class="form-control bold" id="">
                                        </div>
                                    </div>

                                    <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-4">
                                        <!-- <input type="text" value="13" style="width: 40px;"> -->
                                        <div class="input-group input-group-sm mb-2" style="margin: auto;">
                                            <span class="input-group-text btn-secondary bold">Telefonos</span>
                                            <input type="text" class="form-control bold" id="">
                                        </div>
                                    </div>

                                    <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-6">
                                        <!-- <input type="text" value="13" style="width: 40px;"> -->
                                        <div class="input-group input-group-sm mb-2" style="margin: auto;">
                                            <span class="input-group-text btn-secondary bold">Departamento</span>
                                            <select class="form-select" id="inputGroupSelect01">
                                                <option selected="">Choose...</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-6">
                                        <!-- <input type="text" value="13" style="width: 40px;"> -->
                                        <div class="input-group input-group-sm mb-2" style="margin: auto;">
                                            <span class="input-group-text btn-secondary bold">Municipios</span>
                                            <select class="form-select" id="inputGroupSelect01">
                                                <option selected="">Choose...</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-7">
                                        <!-- <input type="text" value="13" style="width: 40px;"> -->
                                        <div class="input-group input-group-sm mb-2" style="margin: auto;">
                                            <span class="input-group-text btn-secondary bold">E-mail</span>
                                            <input type="text" class="form-control bold" id="">
                                        </div>
                                    </div>

                                    <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-5">
                                        <!-- <input type="text" value="13" style="width: 40px;"> -->
                                        <div class="input-group input-group-sm mb-2" style="margin: auto;">
                                            <span class="input-group-text btn-secondary bold">Fecha Nacimiento</span>
                                            <input type="date" class="form-control bold" id="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Row end -->
                <div class="row  mt-30">
                    <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-5">
                        <div class="card">
                            <div class="card-body">
                                <h6>Clase</h6>
                                <hr>
                                <!-- Normal -->
                                <input class="form-check-input" type="radio" name="checkboxNormal" id="checkboxNormal">
                                <label class="form-check-label" for="checkboxNormal">
                                    Normal
                                </label><br><br>
                                <!-- Gran contribuyente -->
                                <input class="form-check-input" type="radio" name="checkboxContribuyente"
                                    id="checkboxContribuyente">
                                <label class="form-check-label" for="checkboxContribuyente">
                                    Gran Contribuyente
                                </label><br><br>
                                <!-- Comercializadora -->
                                <input class="form-check-input" type="radio" name="checkboxComercializadora"
                                    id="checkboxComercializadora">
                                <label class="form-check-label" for="checkboxComercializadora">
                                    Comercializadora internacional <br> y/o Fundación
                                </label><br><br>
                                <!-- Tienda virtual -->
                                <input class="form-check-input" type="checkbox" value="" id="checkboxTVirtual"
                                    name="checkboxTVirtual">
                                <label class="form-check-label" for="checkboxTVirtual">
                                    Habi. Tienda Virtual
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-7">
                        <input class="form-check-input" type="checkbox" value="" id="checkboxAVencimiento"
                            name="checkboxAVencimiento">
                        <label class="form-check-label" for="checkboxAVencimiento">
                            Ampliar Vencimiento
                        </label>
                        <div class="card" style="margin-top: 20px;">
                            <div class="card-body">
                                <h6>Configuracion De Impuestos</h6>
                                <hr>
                                <div class="row">
                                    <div class="col">
                                        <!-- <div class="card">
                                        <div class="card-body"> -->
                                        <h6>Naturaleza</h6>
                                        <input class="form-check-input" type="radio" name="checkboxNatural"
                                            id="checkboxNatural">
                                        <label class="form-check-label" for="checkboxNatural">
                                            Natural
                                        </label><br><br>
                                        <input class="form-check-input" type="radio" name="checkboxJuridico"
                                            id="checkboxJuridico">
                                        <label class="form-check-label" for="checkboxJuridico">
                                            Juridico
                                        </label><br><br><br>
                                        <!-- </div>
                                      </div> -->
                                    </div>

                                    <div class="col">
                                        <!-- <div class="card">
                                        <div class="card-body"> -->
                                        <h6>Regimen</h6>
                                        <!-- <div class="row"> -->
                                        <div class="col">
                                            <input class="form-check-input" type="radio" name="checkboxComun"
                                                id="checkboxComun">
                                            <label class="form-check-label" for="checkboxComun">
                                                Común
                                            </label>
                                        </div><br>
                                        <div class="col">
                                            <input class="form-check-input" type="radio" name="checkboxSimplificado"
                                                id="checkboxSimplificado">
                                            <label class="form-check-label" for="checkboxSimplificado">
                                                Simplificado
                                            </label>
                                        </div>
                                        <!-- </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-5"><br>
                        <div class="card" style="height: 92%;">
                            <div class="card-body">
                                <h6>Empresa de Afiliación</h6>
                                <hr>
                                <div class="row">
                                    <div class="col-3">
                                        <input type="text" class="form-control" disabled="">
                                    </div>
                                    <div class="col-9" style="margin-bottom: 20px;">
                                        <input type="text" class="form-control" disabled="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-7"><br>
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-4">
                                        <!-- <div class="card">
                                      <div class="card-body"> -->
                                        <h6>Reteción</h6>
                                        <hr>
                                        <div class="row">
                                            <div class="col-6 col-xs-12 col-sm-12 col-md-12 col-lg-6">
                                                <input class="form-check-input" type="checkbox" value="" id="checkboxIVA">
                                                <label class="form-check-label" for="checkboxIVA">
                                                    IVA
                                                </label>
                                            </div>
                                            <div class="col-6 col-xs-12 col-sm-12 col-md-12 col-lg-6">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="checkboxFuente">
                                                <label class="form-check-label" for="checkboxFuente">
                                                    Fuente
                                                </label>
                                            </div>
                                            <div class="col-6 col-xs-12 col-sm-12 col-md-12 col-lg-6">
                                                <div class="input-group input-group-sm mb-2" style="margin: auto;">
                                                    <span class="input-group-text btn-secondary bold">%</span>
                                                    <input type="text" class="form-control bold" id="">
                                                </div>
                                            </div>
                                            <div class="col-6 col-xs-12 col-sm-12 col-md-12 col-lg-6">
                                                <div class="input-group input-group-sm mb-2" style="margin: auto;">
                                                    <span class="input-group-text btn-secondary bold">ICA</span>
                                                    <input type="text" class="form-control bold" id="">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- </div>
                                    </div> -->
                                    </div>

                                    <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-4">
                                        <!-- <div class="card">
                                      <div class="card-body"> -->
                                        <h6>Cre</h6>
                                        <hr>
                                        <div class="row">
                                            <div class="col-6">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                    id="flexRadioDefault2">
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                    Si
                                                </label>
                                            </div>
                                            <div class="col-6">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                    id="flexRadioDefault">
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                    No
                                                </label>
                                            </div><br>
                                            <div class="col">
                                                <div class="input-group input-group-sm mb-2" style="margin: auto;">
                                                    <span class="input-group-text btn-secondary bold">Porcentaje (%)</span>
                                                    <input type="text" class="form-control bold" id="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-4">
                                        <!-- <div class="card">
                                      <div class="card-body"> -->
                                        <h6>SMTP Local</h6>
                                        <hr>
                                        <div class="row">
                                            <div class="col">
                                                <input class="form-check-input" type="radio" name="radioSi" id="radioSi">
                                                <label class="form-check-label" for="radioSi">
                                                    Si
                                                </label>
                                            </div>
                                            <div class="col">
                                                <input class="form-check-input" type="radio" name="radioNo" id="radioNo">
                                                <label class="form-check-label" for="radioNo">
                                                    No
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-5"><br>
                        <div class="card" style="height: 90%;">
                            <div class="card-body">
                                <h6>Configuracion Creditos</h6>
                                <hr>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-7"><br>
                        <div class="card">
                            <div class="card-body">
                                <h6>Fidelización</h6>
                                <hr>
                                <div class="row">
                                    <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-6">
                                        <di class="row">
                                            <div class="col">
                                                <div class="input-group input-group-sm mb-2" style="margin: auto;">
                                                    <span class="input-group-text btn-secondary bold">Vendedor</span>
                                                    <input type="text" class="form-control bold" id="" value="0">
                                                </div>
                                            </div>
                                            <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-6">
                                                <div class="input-group input-group-sm mb-2" style="margin: auto;">
                                                    <input type="text" class="form-control bold" id="">
                                                </div>
                                            </div>
                                        </di>
                                        <!--  -->
                                        <di class="row">
                                            <div class="col">
                                                <div class="input-group input-group-sm mb-2" style="margin: auto;">
                                                    <span class="input-group-text btn-secondary bold">Zona</span>
                                                    <input type="text" class="form-control bold" id="" value="0">
                                                </div>
                                            </div>

                                            <div class="col">
                                                <div class="input-group input-group-sm mb-2" style="margin: auto;">
                                                    <span class="input-group-text btn-secondary bold"><i
                                                            class="lni lni-keyword-research"></i></span>
                                                    <input type="text" class="form-control bold" id="">
                                                </div>
                                            </div>
                                        </di><br>

                                    </div>
                                    <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-6">
                                        <di class="row">
                                            <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                <div class="input-group input-group-sm mb-2" style="margin: auto;">
                                                    <span class="input-group-text btn-secondary bold">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="flexCheckDefault4" style="margin-right: 8px;">Lista de
                                                        precios</span>
                                                    <input type="text" class="form-control bold" id="" value="0">
                                                </div>
                                            </div>
                                        </di>
                                        <!--  -->
                                        <di class="row">
                                            <div class="col">
                                                <div class="input-group input-group-sm mb-2" style="margin: auto;">
                                                    <input type="number" class="form-control bold text-center" id=""
                                                        value="0">
                                                </div>
                                            </div>
                                        </di><br>
                                        <!--  -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><br>

                    <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-5"><br>
                        <div class="row">
                            <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-6">
                                <div class="input-group input-group-sm mb-2" style="margin: auto;">
                                    <span class="input-group-text btn-secondary bold">Cupo cartera</span>
                                    <input type="number" class="form-control bold" id="" value="0">
                                </div>
                            </div>
                            <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-6">
                                <div class="input-group input-group-sm mb-2" style="margin: auto;">
                                    <span class="input-group-text btn-secondary bold">Plazo(días)</span>
                                    <input type="number" class="form-control bold" id="" value="0000">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-7"><br>
                        <div class="row">
                            <div class="col-6 col-xs-12 col-sm-12 col-md-12 col-lg-6">
                                <button type="button" class="btn btn-primary form-control" data-bs-dismiss="modal">
                                    Asignar Lista de Precio Por Linea
                                </button>
                            </div><br>
                            <div class="col-6 col-xs-12 col-sm-12 col-md-12 col-lg-6">
                                <button type="button" class="btn btn-primary form-control" data-bs-dismiss="modal">
                                    Asignar Tarjeta
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="tabContent-3-2">
                <!-- Reemplazar -->
                <div class="card mb-30">
                    <div class="card-body">
                        <div class="row mt-30">
                            <div class="col-6 col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <input class="form-check-input" type="checkbox" value="" id="checkboxActivaPro">
                                <label class="form-check-label" for="checkboxActivaPro">
                                    Activar Proveedor
                                </label><br>
                            </div>
                            <div class="row">
                                <!-- Input Codigo -->
                                <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-2">
                                    <div class="input-group input-group-sm mb-2" style="margin: auto;">
                                        <span class="input-group-text btn-secondary bold">Codigo</span>
                                        <input type="text" class="form-control bold" id="">
                                    </div>
                                </div>
                                <!-- Input Banco -->
                                <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-5">
                                    <div class="input-group input-group-sm mb-2" style="margin: auto;">
                                        <span class="input-group-text btn-secondary bold">Banco</span>
                                        <input type="text" class="form-control bold" id="">
                                    </div>
                                </div>
                                <!-- Input Numero de cuenta -->
                                <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-5">
                                    <div class="input-group input-group-sm mb-2" style="margin: auto;">
                                        <span class="input-group-text btn-secondary bold">Numero de Cuenta</span>
                                        <input type="number" class="form-control bold" id="">
                                    </div>
                                </div>
                                <!-- Tipo de cuenta -->
                                <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-3 pt-10">
                                    <h6>Tipo de Cuenta</h6>
                                    <!--  -->
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="radioAhorros">
                                    <label class="form-check-label" for="radioAhorros">
                                        Ahorros
                                    </label>
                                    <!--  -->
                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                        id="radioCorriente">
                                    <label class="form-check-label" for="radioCorriente">
                                        Corriente
                                    </label>
                                </div>
                                <!-- Imput representacion Legal -->
                                <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-9"><br>
                                    <div class="input-group input-group-sm mb-2" style="margin: auto;">
                                        <span class="input-group-text btn-secondary bold">Numero de Cuenta</span>
                                        <input type="number" class="form-control bold" id="">
                                    </div>
                                </div>
                                <!-- Imput nombre del Vendedor -->
                                <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-9">
                                    <div class="input-group input-group-sm mb-2" style="margin: auto;">
                                        <span class="input-group-text btn-secondary bold">Nombre del vendedor</span>
                                        <input type="text" class="form-control bold" id="">
                                    </div>
                                </div>
                                <!-- Porcentaje de retencion -->
                                <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-3">
                                    <div class="input-group input-group-sm mb-2" style="margin: auto;">
                                        <span class="input-group-text btn-secondary bold">Porcentaje de Retencion</span>
                                        <input type="text" class="form-control bold" id="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--  -->
                <div class="card">
                    <div class="card-body">
                        <div class="row mt-30">
                            <div class="col-6 col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <input class="form-check-input" type="checkbox" value="" id="checkboxActivaVen">
                                <label class="form-check-label" for="checkboxActivaVen">
                                    Activar Vendedor
                                </label><br>
                            </div>
                            <div class="row">
                                <!-- Input Codigo -->
                                <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-4">
                                    <div class="input-group input-group-sm mb-2" style="margin: auto;">
                                        <span class="input-group-text btn-secondary bold">Codigo del Vendedor</span>
                                        <input type="text" class="form-control bold" id="">
                                    </div>
                                </div>
                                <!-- Input Banco -->
                                <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-4">
                                    <div class="input-group input-group-sm mb-2" style="margin: auto;">
                                        <span class="input-group-text btn-secondary bold">Porcentaje</span>
                                        <input type="number" class="form-control bold" id="">
                                    </div>
                                </div>
                                <!-- Input Numero de cuenta -->
                                <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-4">
                                    <div class="input-group input-group-sm mb-2" style="margin: auto;">
                                        <span class="input-group-text btn-secondary bold">Clave</span>
                                        <input type="password" class="form-control bold" id="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="tabContent-3-3">
                <!-- Reemplazar -->
                <div class="card mb-30">
                    <div class="card-body">
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-lg-6 pt-10">
                                    <div class="input-group input-group-sm mb-2" style="margin: auto;">
                                        <span class="input-group-text btn-secondary bold">Proteccion u Oficio</span>
                                        <input type="text" class="form-control bold" id="">
                                    </div>
                                </div>
                                <!--  -->
                                <div class="col-lg-3 pt-10">
                                    <div class="input-group input-group-sm mb-2" style="margin: auto;">
                                        <span class="input-group-text btn-secondary bold">Ingresos</span>
                                        <input type="text" class="form-control bold" id="">
                                    </div>
                                </div>
                                <!--  -->
                                <div class="col-lg-3">
                                    <h6>Sexo</h6>
                                    <input class="form-check-input" type="radio" name="checkboxMasculino"
                                        id="checkboxMasculino">
                                    <label class="form-check-label" for="checkboxMasculino">
                                        Masculino
                                    </label>
                                    <input class="form-check-input" type="radio" name="checkboxFemenino"
                                        id="checkboxFemenino">
                                    <label class="form-check-label" for="checkboxFemenino">
                                        Femenino
                                    </label>
                                </div>
                                <!--  -->
                                <div class="col-lg-5">
                                    <div class="input-group input-group-sm mb-2" style="margin: auto;">
                                        <span class="input-group-text btn-secondary bold">Empresa</span>
                                        <input type="text" class="form-control bold" id="">
                                    </div>
                                </div>
                                <!--  -->
                                <div class="col-lg-4">
                                    <div class="input-group input-group-sm mb-2" style="margin: auto;">
                                        <span class="input-group-text btn-secondary bold">Tel. Oficina</span>
                                        <input type="text" class="form-control bold" id="">
                                    </div>
                                </div>
                                <div class="col-lg-3"></div>
                                <!--  -->
                                <div class="col-lg-8 mt-10">
                                    <div class="input-group input-group-sm mb-2" style="margin: auto;">
                                        <span class="input-group-text btn-secondary bold">Departamento</span>
                                        <input type="text" class="form-control bold" id="">
                                    </div>
                                </div>
                                <!--  -->
                                <div class="col-lg-3" style="width: auto;">
                                    <h6>Estado Civil</h6>
                                    <input class="form-check-input" type="radio" name="checkboxCasado" id="checkboxCasado">
                                    <label class="form-check-label" for="checkboxCasado">
                                        Casado
                                    </label>
                                    <!--  -->
                                    <input class="form-check-input" type="radio" name="checkboxSoltero"
                                        id="checkboxSoltero">
                                    <label class="form-check-label" for="checkboxSoltero">
                                        Soltero
                                    </label>
                                    <!--  -->
                                    <input class="form-check-input" type="radio" name="checkboxViudo" id="checkboxViudo">
                                    <label class="form-check-label" for="checkboxViudo">
                                        Viudo
                                    </label>
                                    <!--  -->
                                    <input class="form-check-input" type="radio" name="checkboxUnionLibre"
                                        id="checkboxUnionLibre">
                                    <label class="form-check-label" for="checkboxUnionLibre">
                                        Union libre
                                    </label>
                                </div>
                                <!--  -->
                            </div>
                            <!--  -->

                        </div>
                    </div>
                </div>
                <!--  -->
                <div class="card mb-30">
                    <div class="card-body">
                        <h5>Datos del concluyente</h5>
                        <hr>
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-lg-9 pt-10">
                                    <div class="input-group input-group-sm mb-2" style="margin: auto;">
                                        <span class="input-group-text btn-secondary bold">Nombres</span>
                                        <input type="text" class="form-control bold" id="">
                                    </div>
                                </div>
                                <!--  -->
                                <div class="col-lg-3">
                                    <h6>Sexo</h6>
                                    <input class="form-check-input" type="radio" name="checkboxMasculinoConcluyente"
                                        id="checkboxMasculinoConcluyente">
                                    <label class="form-check-label" for="checkboxMasculinoConcluyente">
                                        Masculino
                                    </label>
                                    <input class="form-check-input" type="radio" name="checkboxFemeninoConcluyente"
                                        id="checkboxFemeninoConcluyente">
                                    <label class="form-check-label" for="checkboxFemeninoConcluyente">
                                        Femenino
                                    </label>
                                </div>
                                <!--  -->
                                <div class="col-lg-6 pt-10">
                                    <div class="input-group input-group-sm mb-2" style="margin: auto;">
                                        <span class="input-group-text btn-secondary bold">Fecha de Nacimineto</span>
                                        <input type="date" class="form-control bold" id="">
                                    </div>
                                </div>
                                <!--  -->
                                <div class="col-lg-6 pt-10">
                                    <div class="input-group input-group-sm mb-2" style="margin: auto;">
                                        <span class="input-group-text btn-secondary bold">Protección</span>
                                        <input type="text" class="form-control bold" id="">
                                    </div>
                                </div>
                                <!--  -->
                                <div class="col-lg-6 pt-10">
                                    <div class="input-group input-group-sm mb-2" style="margin: auto;">
                                        <span class="input-group-text btn-secondary bold">Empresa</span>
                                        <input type="text" class="form-control bold" id="">
                                    </div>
                                </div>
                                <!--  -->
                                <div class="col-lg-6 pt-10">
                                    <div class="input-group input-group-sm mb-2" style="margin: auto;">
                                        <span class="input-group-text btn-secondary bold">Telefono de Oficina</span>
                                        <input type="text" class="form-control bold" id="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--  -->
                <div class="card">
                    <div class="card-body">
                        <h5>Hijos</h5>
                        <hr>
                        <div class="col-lg-12">
                            <div class="row">
                                <!--  -->
                                <div class="col-lg-9 pt-10">
                                    <div class="input-group input-group-sm mb-2" style="margin: auto;">
                                        <span class="input-group-text btn-secondary bold">Nombres</span>
                                        <input type="text" class="form-control bold" id="">
                                    </div>
                                </div>
                                <!--  -->
                                <div class="col-lg-3">
                                    <h6>Sexo</h6>
                                    <input class="form-check-input" type="radio" name="checkboxMasculinoHijo"
                                        id="checkboxMasculinoHijo">
                                    <label class="form-check-label" for="checkboxMasculinoHijo">
                                        Masculino
                                    </label>
                                    <input class="form-check-input" type="radio" name="checkboxFemeninoHijo"
                                        id="checkboxFemeninoHijo">
                                    <label class="form-check-label" for="checkboxFemeninoHijo">
                                        Femenino
                                    </label>
                                </div>
                                <!--  -->
                                <div class="col-lg-9 pt-10">
                                    <div class="input-group input-group-sm mb-2" style="margin: auto;">
                                        <span class="input-group-text btn-secondary bold">Fecha de Nacimiento</span>
                                        <input type="text" class="form-control bold" id="">
                                    </div>
                                </div>
                                <!--  -->
                                <div class="col-lg-3 pt-10">
                                    <button type="button" class="btn btn-secondary form-control">Agregar</button>
                                </div>
                            </div>
                        </div>
                        <div class="table-wrapper table-responsive">
                            <table class="table table-hover">
                                <!-- <thead class="table-dark"> -->
                                <thead class="">
                                    <tr id="cabeza">
                                        <th scope="col">Nombre</th>
                                        <th scope="col">Sexso.</th>
                                        <th scope="col">Fecha de Nacimiento</th>
                                    </tr>
                                    <!-- end table row-->
                                </thead>
                                <tbody id="cuerpo">
                                    <tr>
                                        <td>1</td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                            <!-- end table -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="tabContent-3-4">
                <!-- Reemplazar -->
                <div class="card mb-30">
                    <div class="card-body">
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-lg-3 pt-10">
                                </div>
                                <div class="col-lg-6 pt-10">
                                    <div class="card">
                                        <div class="card-body" style="height: 400px;">

                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 pt-10">
                                </div>
                                <!--  -->
                                <div class="col-lg-6 pt-10">
                                    <h5>Documentos Fisicos</h5><br>
                                    <div class="input-group input-group-sm mb-2" style="margin: auto;">
                                        <input type="file" class="form-control bold" placeholder="Cargar un archivo" id="">
                                        <span class="input-group-text primary-btn bold"><i
                                                class="lni lni-keyword-research"></i></span>
                                    </div>
                                </div>
                                <!--  -->
                                <div class="col-lg-6 pt-10">
                                    <h5>Scanner Documental</h5><br>
                                    <div class="input-group input-group-sm mb-2" style="margin: auto;">
                                        <input type="file" class="form-control bold" placeholder="Cargar un archivo" id="">
                                        <span class="input-group-text primary-btn bold"><i
                                                class="lni lni-image"></i></span>
                                    </div>
                                </div>
                                <!--  -->
                            </div>
                            <!--  -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="tabContent-3-5">
                <!-- Reemplazar -->
                <div class="card mb-30">
                    <div class="card-body">
                        <div class="col-lg-12">
                            <div class="row">
                                <!--  -->
                                <div class="col-lg-4 pt-10">
                                    <div class="card">
                                        <div class="card-body">
                                            <!-- <h5>EPS</h5>
                                                <hr> -->
                                            <div class="input-group input-group-sm mb-2" style="margin: auto;">
                                                <span class="input-group-text btn-secondary bold">EPS</span>
                                                <select class="form-select" id=""></select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--  -->
                                <div class="col-lg-4 pt-10">
                                    <div class="card">
                                        <div class="card-body">
                                            <!-- <h5>EPS</h5>
                                                <hr> -->
                                            <div class="input-group input-group-sm mb-2" style="margin: auto;">
                                                <span class="input-group-text btn-secondary bold">ARL</span>
                                                <select class="form-select" id=""></select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--  -->
                                <div class="col-lg-4 pt-10">
                                    <div class="card">
                                        <div class="card-body">
                                            <!-- <h5>EPS</h5>
                                                <hr> -->
                                            <div class="input-group input-group-sm mb-2" style="margin: auto;">
                                                <span class="input-group-text btn-secondary bold">PENSION</span>
                                                <select class="form-select" id=""></select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--  -->
                                <div class="col-lg-12 pt-10">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5>Otros Datos</h5>
                                            <hr>
                                            <!--  -->
                                            <div class="row">
                                                <!--  -->
                                                <div class="col-lg-6 pt-10">
                                                    <div class="input-group input-group-sm mb-2" style="margin: auto;">
                                                        <span class="input-group-text btn-secondary bold">Cargo que
                                                            Ocupa</span>
                                                        <input type="text" class="form-control bold" id="">
                                                    </div>
                                                </div>
                                                <!--  -->
                                                <div class="col-lg-3 pt-10">
                                                    <div class="input-group input-group-sm mb-2" style="margin: auto;">
                                                        <span class="input-group-text btn-secondary bold">Numero de
                                                            Hijos</span>
                                                        <input type="number" class="form-control bold" id="">
                                                    </div>
                                                </div>
                                                <!--  -->
                                                <div class="col-lg-3 pt-10">
                                                    <div class="input-group input-group-sm mb-2" style="margin: auto;">
                                                        <span class="input-group-text btn-secondary bold">Tipo de
                                                            Sangre</span>
                                                        <select class="form-select" id=""></select>
                                                    </div>
                                                </div>
                                                <!--  -->
                                                <div class="col-lg-4 pt-10">
                                                    <div class="input-group input-group-sm mb-2" style="margin: auto;">
                                                        <span class="input-group-text btn-secondary bold">Numero de
                                                            Contacto</span>
                                                        <input type="text" class="form-control bold" id="">
                                                    </div>
                                                </div>
                                                <!--  -->
                                                <div class="col-lg-4 pt-10">
                                                    <div class="input-group input-group-sm mb-2" style="margin: auto;">
                                                        <span class="input-group-text btn-secondary bold">Numero de
                                                            Contacto E.</span>
                                                        <input type="number" class="form-control bold" id="">
                                                    </div>
                                                </div>
                                                <!--  -->
                                                <div class="col-lg-4 pt-10">
                                                    <div class="input-group input-group-sm mb-2" style="margin: auto;">
                                                        <span class="input-group-text btn-secondary bold">Tiempo
                                                            Ven.</span>
                                                        <input type="number" class="form-control bold" id="">
                                                    </div>
                                                </div>
                                            </div>
                                            <!--  -->
                                        </div>
                                    </div>
                                </div>
                                <!--  -->
                            </div>
                            <!--  -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-info">Adicionar</button>
            <button type="button" class="btn btn-success">Modificar</button>
            <button type="button" class="btn btn-danger">Retirar</button>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Salir</button>
        </div>
    </div>
    <!-- footer -->

    <!-- ----------------------------------------------------------------------------- -->

    <div class="tab-content" id="nav-tabContent" role="tabpanel">
        <!-- <div class="tab-pane fade" id="general" role="tabpanel"> -->
        <div class="tab-pane fade active show" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
            <div class="container">
                <!-- Fila 1 -->


                <!-- Fila 2 -->

            </div><br>
        </div>
        <!-- Proveedores & Vendedores -->
        <div class="tab-pane fade" id="pro_ven" role="tabpanel" aria-labelledby="user-tab">
            <br>
            <div class="container">
                <div class="row">
                    <div class="col-6 col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <input class="form-check-input" type="checkbox" value="" id="checkboxActivaPro">
                        <label class="form-check-label" for="checkboxActivaPro">
                            Activar Proveedor
                        </label><br>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <!-- Input Codigo -->
                                <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-2">
                                    <div class="input-group input-group-sm mb-2" style="margin: auto;">
                                        <span class="input-group-text btn-secondary bold">Codigo</span>
                                        <input type="text" class="form-control bold" id="">
                                    </div>
                                </div>
                                <!-- Input Banco -->
                                <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-5">
                                    <div class="input-group input-group-sm mb-2" style="margin: auto;">
                                        <span class="input-group-text btn-secondary bold">Banco</span>
                                        <input type="text" class="form-control bold" id="">
                                    </div>
                                </div>
                                <!-- Input Numero de cuenta -->
                                <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-5">
                                    <div class="input-group input-group-sm mb-2" style="margin: auto;">
                                        <span class="input-group-text btn-secondary bold">Numero de Cuenta</span>
                                        <input type="number" class="form-control bold" id="">
                                    </div>
                                </div>
                                <!-- Tipo de cuenta -->
                                <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-3">
                                    <h6>Tipo de Cuenta</h6>
                                    <!--  -->
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="radioAhorros">
                                    <label class="form-check-label" for="radioAhorros">
                                        Ahorros
                                    </label>
                                    <!--  -->
                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                        id="radioCorriente">
                                    <label class="form-check-label" for="radioCorriente">
                                        Corriente
                                    </label>
                                </div>
                                <!-- Imput representacion Legal -->
                                <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-9"><br>
                                    <div class="input-group input-group-sm mb-2" style="margin: auto;">
                                        <span class="input-group-text btn-secondary bold">Numero de Cuenta</span>
                                        <input type="number" class="form-control bold" id="">
                                    </div>
                                </div>
                                <!-- Imput nombre del Vendedor -->
                                <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-9">
                                    <div class="input-group input-group-sm mb-2" style="margin: auto;">
                                        <span class="input-group-text btn-secondary bold"> de Cuenta</span>
                                        <input type="text" class="form-control bold" id="">
                                    </div>
                                </div>
                                <!-- Porcentaje de retencion -->
                                <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-3">
                                    <div class="input-group input-group-sm mb-2" style="margin: auto;">
                                        <span class="input-group-text btn-secondary bold">Porcentaje de Retencion</span>
                                        <input type="text" class="form-control bold" id="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Activar vendedor -->
                <div class="row">
                    <div class="col-6 col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <input class="form-check-input" type="checkbox" value="" id="checkboxActivaVen">
                        <label class="form-check-label" for="checkboxActivaVen">
                            Activar Vendedor
                        </label><br>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <!-- Input Codigo -->
                                <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-4">
                                    <div class="input-group input-group-sm mb-2" style="margin: auto;">
                                        <span class="input-group-text btn-secondary bold">Codigo del Vendedor</span>
                                        <input type="text" class="form-control bold" id="">
                                    </div>
                                </div>
                                <!-- Input Banco -->
                                <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-4">
                                    <div class="input-group input-group-sm mb-2" style="margin: auto;">
                                        <span class="input-group-text btn-secondary bold">Porcentaje</span>
                                        <input type="number" class="form-control bold" id="">
                                    </div>
                                </div>
                                <!-- Input Numero de cuenta -->
                                <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-4">
                                    <div class="input-group input-group-sm mb-2" style="margin: auto;">
                                        <span class="input-group-text btn-secondary bold">Clave</span>
                                        <input type="password" class="form-control bold" id="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ---------------------------------------------------------------------------------- -->
        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
            <br>
            <div class="input-group input-group-sm mb-2">
                <span class="input-group-text btn-secondary bold">DEPOSITO</span>
                <input type="text" class="form-control bold" id="coddep" disabled="">
                <input type="text" class="form-control bold" id="nomdep" disabled="">
                <input type="text" class="form-control bold" id="dep-cuedep" disabled="">
            </div>
        </div>
        <!-- ---------------------------------------------------------------------------------- -->
        <div class="tab-pane fade" id="config" role="tabpanel" aria-labelledby="config-tab">
            <br>
            <!-- CHECKBOX GESTION -->
            <div class="input-group input-group-sm mb-2">
                <div class="container-fluid">
                    <table class="checkbox-gestion" style="font-size: xx-small;">
                        <tbody>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input input_checkbox" type="checkbox" value=""
                                            id="val_bruto">
                                        <label class="form-check-label" for="flexCheckChecked">
                                            Val. Bruto
                                        </label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input input_checkbox" type="checkbox" value=""
                                            id="ret_fue">
                                        <label class="form-check-label" for="flexCheckChecked">
                                            RetFue
                                        </label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input input_checkbox" type="checkbox" value=""
                                            id="desc_desc">
                                        <label class="form-check-label" for="flexCheckChecked">
                                            Desc.
                                        </label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input input_checkbox" type="checkbox" value=""
                                            id="ret_iva">
                                        <label class="form-check-label" for="flexCheckChecked">
                                            RetIva
                                        </label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input input_checkbox" type="checkbox" value=""
                                            id="desc_adi">
                                        <label class="form-check-label" for="flexCheckChecked">
                                            Desc. Adi
                                        </label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input input_checkbox" type="checkbox" value=""
                                            id="ret_ica">
                                        <label class="form-check-label" for="flexCheckChecked">
                                            RetIca
                                        </label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input input_checkbox" type="checkbox" value=""
                                            id="inc_inc">
                                        <label class="form-check-label" for="flexCheckChecked">
                                            INC
                                        </label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input input_checkbox" type="checkbox" value=""
                                            id="comis_comis">
                                        <label class="form-check-label" for="flexCheckChecked">
                                            Comis
                                        </label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input input_checkbox" type="checkbox" value=""
                                            id="cree_cree">
                                        <label class="form-check-label" for="flexCheckChecked">
                                            Cree
                                        </label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input input_checkbox" type="checkbox" value=""
                                            id="propina_propina">
                                        <label class="form-check-label" for="flexCheckChecked">
                                            Propina
                                        </label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input input_checkbox" type="checkbox" value=""
                                            id="sald_favor">
                                        <label class="form-check-label" for="flexCheckChecked">
                                            Sald. Favor
                                        </label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input input_checkbox" type="checkbox" value=""
                                            id="neto_neto">
                                        <label class="form-check-label" for="flexCheckChecked">
                                            NETO
                                        </label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input input_checkbox" type="checkbox" value=""
                                            id="base_base">
                                        <label class="form-check-label" for="flexCheckChecked">
                                            Base
                                        </label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input input_checkbox" type="checkbox" value=""
                                            id="efectivo_efectivo">
                                        <label class="form-check-label" for="flexCheckChecked">
                                            Efectivo
                                        </label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input input_checkbox" type="checkbox" value=""
                                            id="iva_iva">
                                        <label class="form-check-label" for="flexCheckChecked">
                                            I.V.A
                                        </label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input input_checkbox" type="checkbox" value=""
                                            id="cambio_cambio">
                                        <label class="form-check-label" for="flexCheckChecked">
                                            Cambio
                                        </label>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer text-end" style="width: max-content;">
                <button type="button" class="btn btn-info">Adicionar</button>
                <button type="button" class="btn btn-success">Modificar</button>
                <button type="button" class="btn btn-danger">Retirar</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Salir</button>
            </div>
        </div>
    </div>

@endsection
