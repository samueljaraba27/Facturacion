@extends('layout.app')
@section('content')
    <div class="title-wrapper pt-10">
        <div class="row align-items-center">
            <div class="col-md-2">
                <div class="title">
                    <h2>Nueva Referencias</h2>
                </div>
            </div>
            <div class="col-md-4">
                <span class="badge bg-warning"> <svg style="width:20px;height:20px" viewBox="0 0 24 24">
                        <path fill="currentColor"
                            d="M13,9H11V7H13M13,17H11V11H13M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z" />
                    </svg> Solo los campos con Franja Roja son obligatorios.</span>
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
                                Nueva Referencia
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
                <div class="row">
                    <div class="col-md-12 col-md-6 col-lg-2">
                        <div class="input-group input-group-sm mb-1">
                            <span class="border-start border-danger border-4"></span>
                            <span class="input-group-text" id="basic-addon1">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
                                </div>
                                Código:
                            </span>
                            <input type="number" class="form-control" name="refer-create-code" id="refer-create-code"
                                required />
                        </div>
                    </div>
                    <div class="col-md-12 col-md-6 col-lg-10">
                        <div class="input-group input-group-sm mb-1">
                            <span class="border-start border-danger border-4"></span>
                            <span class="input-group-text" id="basic-addon1">Referencia:</span>
                            <input type="text" class="form-control" name="refer-create-name" id="refer-create-name"
                                required />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-md-6 col-lg-8">
                        <div class="input-group input-group-sm mb-1">
                            <span class="border-start border-danger border-4"></span>
                            <span class="input-group-text" id="basic-addon1">Descripción:</span>
                            <input type="number" class="form-control" name="refer-create-desc" id="refer-create-desc"
                                required />
                        </div>
                    </div>
                    <div class="col-md-12 col-md-3 col-lg-2">
                        <div class="input-group mb-1">
                            <div class="form-check form-check-inline">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
                                    <label class="form-check-label" for="flexSwitchCheckChecked">Act. Refer</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-md-3 col-lg-2">
                        <div class="input-group input-group-sm mb-1">
                            <span class="input-group-text" id="basic-addon1">Estandar:</span>
                            <input type="text" class="form-control text-right" name="refer-create-desc"
                                id="refer-create-desc" value="0" required />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <p><b>Linea</b></p>
                    <div class="col-md-12 col-md-12 col-lg-2">
                        <div class="input-group input-group-sm mb-1">
                            <span class="border-start border-danger border-4"></span>
                            <input type="number" class="form-control" value="000" />
                            <button class="btn btn-primary btn-sm" type="button" id="btn-linea">
                                <span class="material-icons-outlined">
                                    <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="M15.5,12C18,12 20,14 20,16.5C20,17.38 19.75,18.21 19.31,18.9L22.39,22L21,23.39L17.88,20.32C17.19,20.75 16.37,21 15.5,21C13,21 11,19 11,16.5C11,14 13,12 15.5,12M15.5,14A2.5,2.5 0 0,0 13,16.5A2.5,2.5 0 0,0 15.5,19A2.5,2.5 0 0,0 18,16.5A2.5,2.5 0 0,0 15.5,14M5,3H19C20.11,3 21,3.89 21,5V13.03C20.5,12.23 19.81,11.54 19,11V5H5V19H9.5C9.81,19.75 10.26,20.42 10.81,21H5C3.89,21 3,20.11 3,19V5C3,3.89 3.89,3 5,3M7,7H17V9H7V7M7,11H12.03C11.23,11.5 10.54,12.19 10,13H7V11M7,15H9.17C9.06,15.5 9,16 9,16.5V17H7V15Z" />
                                    </svg>
                                </span>
                            </button>
                        </div>
                    </div>
                    <div class="col-md-12 col-md-12 col-lg-10">
                        <div class="input-group input-group-sm mb-1">
                            <span class="border-start border-danger border-4"></span>
                            <input type="text" class="form-control" disabled />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <p><b>Region</b></p>
                    <div class="col-md-12 col-md-12 col-lg-2">
                        <div class="input-group input-group-sm mb-1">
                            <input type="number" class="form-control" value="000" />
                        </div>
                    </div>
                    <div class="col-md-12 col-md-12 col-lg-10">
                        <div class="input-group input-group-sm mb-1">
                            <input type="text" class="form-control" disabled />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <p><b>Datos Basicos</b></p>
                    <div class="col-md-12 col-md-12 col-lg-4">
                        <div class="input-group input-group-sm mb-1">
                            <span class="border-start border-danger border-4"></span>
                            <span class="input-group-text" id="basic-addon1">Costo + IVA</span>
                            <input type="text" class="form-control text-right" name="refer-create-desc"
                                id="refer-create-desc" value="0.00" required />
                        </div>
                    </div>
                    <div class="col-md-12 col-md-12 col-lg-4">
                        <div class="input-group input-group-sm mb-1">
                            <span class="border-start border-danger border-4"></span>
                            <span class="input-group-text" id="basic-addon1">Costo</span>
                            <input type="text" class="form-control text-right" name="refer-create-desc"
                                id="refer-create-desc" value="0.00" required />
                        </div>
                    </div>
                    <div class="col-md-12 col-md-12 col-lg-2">
                        <div class="input-group input-group-sm mb-1">
                            <span class="input-group-text" id="basic-addon1">Maximo</span>
                            <input type="text" class="form-control text-right" name="refer-create-desc"
                                id="refer-create-desc" value="0.00" required />
                            <button class="btn btn-primary btn-sm" type="button" id="btn-linea">
                                <span class="material-icons-outlined">
                                    <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="M15.5,12C18,12 20,14 20,16.5C20,17.38 19.75,18.21 19.31,18.9L22.39,22L21,23.39L17.88,20.32C17.19,20.75 16.37,21 15.5,21C13,21 11,19 11,16.5C11,14 13,12 15.5,12M15.5,14A2.5,2.5 0 0,0 13,16.5A2.5,2.5 0 0,0 15.5,19A2.5,2.5 0 0,0 18,16.5A2.5,2.5 0 0,0 15.5,14M5,3H19C20.11,3 21,3.89 21,5V13.03C20.5,12.23 19.81,11.54 19,11V5H5V19H9.5C9.81,19.75 10.26,20.42 10.81,21H5C3.89,21 3,20.11 3,19V5C3,3.89 3.89,3 5,3M7,7H17V9H7V7M7,11H12.03C11.23,11.5 10.54,12.19 10,13H7V11M7,15H9.17C9.06,15.5 9,16 9,16.5V17H7V15Z" />
                                    </svg>
                                </span>
                            </button>
                        </div>
                    </div>
                    <div class="col-md-12 col-md-12 col-lg-2">
                        <div class="input-group input-group-sm mb-1">
                            <span class="input-group-text" id="basic-addon1">Minimo</span>
                            <input type="text" class="form-control text-right" name="refer-create-desc"
                                id="refer-create-desc" value="0.00" required />
                            <button class="btn btn-primary btn-sm" type="button" id="btn-linea">
                                <span class="material-icons-outlined">
                                    <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="M15.5,12C18,12 20,14 20,16.5C20,17.38 19.75,18.21 19.31,18.9L22.39,22L21,23.39L17.88,20.32C17.19,20.75 16.37,21 15.5,21C13,21 11,19 11,16.5C11,14 13,12 15.5,12M15.5,14A2.5,2.5 0 0,0 13,16.5A2.5,2.5 0 0,0 15.5,19A2.5,2.5 0 0,0 18,16.5A2.5,2.5 0 0,0 15.5,14M5,3H19C20.11,3 21,3.89 21,5V13.03C20.5,12.23 19.81,11.54 19,11V5H5V19H9.5C9.81,19.75 10.26,20.42 10.81,21H5C3.89,21 3,20.11 3,19V5C3,3.89 3.89,3 5,3M7,7H17V9H7V7M7,11H12.03C11.23,11.5 10.54,12.19 10,13H7V11M7,15H9.17C9.06,15.5 9,16 9,16.5V17H7V15Z" />
                                    </svg>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 col-md-12 col-lg-2">
                        <div class="input-group input-group-sm mb-1">
                            <span class="input-group-text" id="basic-addon1">Contenido</span>
                            <input type="text" class="form-control text-right" name="refer-create-desc"
                                id="refer-create-desc" value="0.00" required />
                        </div>
                    </div>
                    <div class="col-md-12 col-md-12 col-lg-2">
                        <div class="input-group input-group-sm mb-1">
                            <span class="input-group-text" id="basic-addon1">%Desc</span>
                            <input type="text" class="form-control text-right" name="refer-create-desc"
                                id="refer-create-desc" value="0.00" required />
                        </div>
                    </div>
                    <div class="col-md-12 col-md-12 col-lg-2">
                        <div class="input-group input-group-sm mb-1">
                            <span class="input-group-text" id="basic-addon1">Impo.</span>
                            <input type="text" class="form-control text-right" name="refer-create-desc"
                                id="refer-create-desc" value="0.00" required />
                        </div>
                    </div>
                    <div class="col-md-12 col-md-12 col-lg-2">
                        <div class="input-group input-group-sm mb-1">
                            <span class="input-group-text" id="basic-addon1">Ref:</span>
                            <input type="text" class="form-control text-right" name="refer-create-desc"
                                id="refer-create-desc" value="0.00" required />
                        </div>
                    </div>
                    <div class="col-md-12 col-md-12 col-lg-2">
                        <div class="input-group input-group-sm mb-1">
                            <span class="border-start border-danger border-4"></span>
                            <label class="input-group-text" for="inputGroupSelect01">IVA</label>
                            <select class="form-select" id="inputGroupSelect01">
                                <option selected></option>
                                <option value="1">5</option>
                                <option value="2">15</option>
                                <option value="3">20</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 col-md-12 col-lg-2">
                        <div class="input-group input-group-sm mb-1">
                            <span class="input-group-text" id="basic-addon1">$Ut:</span>
                            <input type="text" class="form-control text-right" name="refer-create-desc"
                                id="refer-create-desc" value="00" required />
                        </div>
                    </div>
                    <div class="col-md-12 col-md-12 col-lg-2">
                        <div class="input-group input-group-sm mb-1">
                            <span class="input-group-text" id="basic-addon1">P/Venta</span>
                            <input type="text" class="form-control text-right" name="refer-create-desc"
                                id="refer-create-desc" value="0.00" required />
                        </div>
                    </div>
                    <div class="col-md-12 col-md-12 col-lg-2">
                        <div class="input-group input-group-sm mb-1">
                            <span class="input-group-text" id="basic-addon1">$Ut1:</span>
                            <input type="text" class="form-control text-right" name="refer-create-desc"
                                id="refer-create-desc" value="00" required />
                        </div>
                    </div>
                    <div class="col-md-12 col-md-12 col-lg-2">
                        <div class="input-group input-group-sm mb-1">
                            <span class="input-group-text" id="basic-addon1">P/Venta1</span>
                            <input type="text" class="form-control text-right" name="refer-create-desc"
                                id="refer-create-desc" value="0.00" required />
                        </div>
                    </div>
                    <div class="col-md-12 col-md-12 col-lg-2">
                        <div class="input-group input-group-sm mb-1">
                            <span class="input-group-text" id="basic-addon1">$Ut2:</span>
                            <input type="text" class="form-control text-right" name="refer-create-desc"
                                id="refer-create-desc" value="00" required />
                        </div>
                    </div>
                    <div class="col-md-12 col-md-12 col-lg-2">
                        <div class="input-group input-group-sm mb-1">
                            <span class="input-group-text" id="basic-addon1">P/Venta2</span>
                            <input type="text" class="form-control text-right" name="refer-create-desc"
                                id="refer-create-desc" value="0.00" required />
                        </div>
                    </div>
                    <div class="col-md-12 col-md-12 col-lg-2">
                        <div class="input-group input-group-sm mb-1">
                            <span class="input-group-text" id="basic-addon1">$Ut3:</span>
                            <input type="text" class="form-control text-right" name="refer-create-desc"
                                id="refer-create-desc" value="00" required />
                        </div>
                    </div>
                    <div class="col-md-12 col-md-12 col-lg-2">
                        <div class="input-group input-group-sm mb-1">
                            <span class="input-group-text" id="basic-addon1">P/Venta3</span>
                            <input type="text" class="form-control text-right" name="refer-create-desc"
                                id="refer-create-desc" value="0.00" required />
                        </div>
                    </div>
                    <div class="col-md-12 col-md-12 col-lg-2">
                        <div class="input-group input-group-sm mb-1">
                            <span class="input-group-text" id="basic-addon1">$Ut4:</span>
                            <input type="text" class="form-control text-right" name="refer-create-desc"
                                id="refer-create-desc" value="00" required />
                        </div>
                    </div>
                    <div class="col-md-12 col-md-12 col-lg-2">
                        <div class="input-group input-group-sm mb-1">
                            <span class="input-group-text" id="basic-addon1">P/Venta4</span>
                            <input type="text" class="form-control text-right" name="refer-create-desc"
                                id="refer-create-desc" value="0.00" required />
                        </div>
                    </div>
                    <div class="col-md-12 col-md-12 col-lg-2">
                        <div class="input-group input-group-sm mb-1">
                            <span class="input-group-text" id="basic-addon1">$Ut5:</span>
                            <input type="text" class="form-control text-right" name="refer-create-desc"
                                id="refer-create-desc" value="00" required />
                        </div>
                    </div>
                    <div class="col-md-12 col-md-12 col-lg-2">
                        <div class="input-group input-group-sm mb-1">
                            <span class="input-group-text" id="basic-addon1">P/Venta5</span>
                            <input type="text" class="form-control text-right" name="refer-create-desc"
                                id="refer-create-desc" value="0.00" required />
                        </div>
                    </div>
                    <div class="col-md-12 col-md-12 col-lg-2">
                        <div class="input-group input-group-sm mb-1">
                            <span class="input-group-text" id="basic-addon1">$Ut6:</span>
                            <input type="text" class="form-control text-right" name="refer-create-desc"
                                id="refer-create-desc" value="00" required />
                        </div>
                    </div>
                    <div class="col-md-12 col-md-12 col-lg-2">
                        <div class="input-group input-group-sm mb-1">
                            <span class="input-group-text" id="basic-addon1">P/Venta6</span>
                            <input type="text" class="form-control text-right" name="refer-create-desc"
                                id="refer-create-desc" value="0.00" required />
                        </div>
                    </div>
                    <div class="col-md-12 col-md-12 col-lg-2">
                        <div class="input-group input-group-sm mb-1">
                            <span class="input-group-text" id="basic-addon1">$Ut7:</span>
                            <input type="text" class="form-control text-right" name="refer-create-desc"
                                id="refer-create-desc" value="00" required />
                        </div>
                    </div>
                    <div class="col-md-12 col-md-12 col-lg-2">
                        <div class="input-group input-group-sm mb-1">
                            <span class="input-group-text" id="basic-addon1">P/Venta7</span>
                            <input type="text" class="form-control text-right" name="refer-create-desc"
                                id="refer-create-desc" value="0.00" required />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <p><b>Proveedor</b></p>
                    <div class="col-md-12 col-md-12 col-lg-2">
                        <div class="input-group input-group-sm mb-1">
                            <input type="number" class="form-control" value="000" />
                            <button class="btn btn-primary btn-sm" type="button" id="btn-linea">
                                <span class="material-icons-outlined">
                                    <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="M15.5,12C18,12 20,14 20,16.5C20,17.38 19.75,18.21 19.31,18.9L22.39,22L21,23.39L17.88,20.32C17.19,20.75 16.37,21 15.5,21C13,21 11,19 11,16.5C11,14 13,12 15.5,12M15.5,14A2.5,2.5 0 0,0 13,16.5A2.5,2.5 0 0,0 15.5,19A2.5,2.5 0 0,0 18,16.5A2.5,2.5 0 0,0 15.5,14M5,3H19C20.11,3 21,3.89 21,5V13.03C20.5,12.23 19.81,11.54 19,11V5H5V19H9.5C9.81,19.75 10.26,20.42 10.81,21H5C3.89,21 3,20.11 3,19V5C3,3.89 3.89,3 5,3M7,7H17V9H7V7M7,11H12.03C11.23,11.5 10.54,12.19 10,13H7V11M7,15H9.17C9.06,15.5 9,16 9,16.5V17H7V15Z" />
                                    </svg>
                                </span>
                            </button>
                        </div>
                    </div>
                    <div class="col-md-12 col-md-12 col-lg-10">
                        <div class="input-group input-group-sm mb-1">
                            <input type="text" class="form-control" disabled />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <p><b>Parametros de Confeccion</b></p>
                    <div class="col-md-12 col-md-12 col-lg-2">
                        <div class="input-group input-group-sm mb-1">
                            <span class="input-group-text" id="basic-addon1">Generó</span>
                            <input type="text" class="form-control text-right" name="refer-create-desc"
                                id="refer-create-desc" value="0.00" required />
                        </div>
                    </div>
                    <div class="col-md-12 col-md-12 col-lg-3">
                        <div class="input-group input-group-sm mb-1">
                            <input type="text" class="form-control" disabled />
                        </div>
                    </div>
                    <div class="col-md-12 col-md-12 col-lg-2">
                        <div class="input-group input-group-sm mb-1">
                            <span class="input-group-text" id="basic-addon1">Talla</span>
                            <input type="text" class="form-control text-right" name="refer-create-desc"
                                id="refer-create-desc" value="0.00" required />
                        </div>
                    </div>
                    <div class="col-md-12 col-md-12 col-lg-3">
                        <div class="input-group input-group-sm mb-1">
                            <input type="text" class="form-control" disabled />
                        </div>
                    </div>
                    <div class="col-md-12 col-md-12 col-lg-2">
                        <div class="input-group input-group-sm mb-1">
                            <span class="input-group-text" id="basic-addon1">Ref Prov:</span>
                            <input type="text" class="form-control text-right" name="refer-create-desc"
                                id="refer-create-desc" value="0.00" required />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <p><b>Otras Configuraciones</b></p>
                    <div class="col-md-12 col-md-12 col-lg-1">
                        <div class="input-group input-group-sm mb-1">
                            <span class="input-group-text" id="basic-addon1">Paquete</span>
                        </div>
                    </div>
                    <div class="col-md-12 col-md-12 col-lg-2">
                        <div class="input-group input-group-sm mb-1">
                            <span class="input-group-text" id="basic-addon1">Hubicación</span>
                            <input type="text" class="form-control" />
                        </div>
                    </div>
                    <div class="col-md-12 col-md-12 col-lg-1">
                        <div class="input-group input-group-sm mb-1">
                            <span class="input-group-text" id="basic-addon1">Color</span>
                            <input type="text" class="form-control text-right" name="refer-create-desc"
                                id="refer-create-desc" value="0" required />
                        </div>
                    </div>
                    <div class="col-md-12 col-md-12 col-lg-2">
                        <div class="input-group input-group-sm mb-1">
                            <button class="btn btn-primary btn-sm" type="button" id="btn-linea">
                                <span class="material-icons-outlined">
                                    <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="M15.5,12C18,12 20,14 20,16.5C20,17.38 19.75,18.21 19.31,18.9L22.39,22L21,23.39L17.88,20.32C17.19,20.75 16.37,21 15.5,21C13,21 11,19 11,16.5C11,14 13,12 15.5,12M15.5,14A2.5,2.5 0 0,0 13,16.5A2.5,2.5 0 0,0 15.5,19A2.5,2.5 0 0,0 18,16.5A2.5,2.5 0 0,0 15.5,14M5,3H19C20.11,3 21,3.89 21,5V13.03C20.5,12.23 19.81,11.54 19,11V5H5V19H9.5C9.81,19.75 10.26,20.42 10.81,21H5C3.89,21 3,20.11 3,19V5C3,3.89 3.89,3 5,3M7,7H17V9H7V7M7,11H12.03C11.23,11.5 10.54,12.19 10,13H7V11M7,15H9.17C9.06,15.5 9,16 9,16.5V17H7V15Z" />
                                    </svg>
                                </span>
                            </button>
                            <input type="text" class="form-control text-right" name="refer-create-desc"
                                id="refer-create-desc" required disabled />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-md-12 col-lg-2">
                        <div class="input-group input-group-sm mb-1">
                            <span class="input-group-text" id="basic-addon1">Marca:</span>
                            <input type="text" class="form-control" value="0" />
                        </div>
                    </div>
                    <div class="col-md-12 col-md-12 col-lg-4">
                        <div class="input-group input-group-sm mb-1">
                            <button class="btn btn-primary btn-sm" type="button" id="btn-linea">
                                <span class="material-icons-outlined">
                                    <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="M15.5,12C18,12 20,14 20,16.5C20,17.38 19.75,18.21 19.31,18.9L22.39,22L21,23.39L17.88,20.32C17.19,20.75 16.37,21 15.5,21C13,21 11,19 11,16.5C11,14 13,12 15.5,12M15.5,14A2.5,2.5 0 0,0 13,16.5A2.5,2.5 0 0,0 15.5,19A2.5,2.5 0 0,0 18,16.5A2.5,2.5 0 0,0 15.5,14M5,3H19C20.11,3 21,3.89 21,5V13.03C20.5,12.23 19.81,11.54 19,11V5H5V19H9.5C9.81,19.75 10.26,20.42 10.81,21H5C3.89,21 3,20.11 3,19V5C3,3.89 3.89,3 5,3M7,7H17V9H7V7M7,11H12.03C11.23,11.5 10.54,12.19 10,13H7V11M7,15H9.17C9.06,15.5 9,16 9,16.5V17H7V15Z" />
                                    </svg>
                                </span>
                            </button>
                            <input type="text" class="form-control text-right" name="refer-create-desc"
                                id="refer-create-desc" required disabled />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <p><b>Otras Parametros</b></p>
                    <div class="col-md-12 col-md-12 col-lg-2">
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                            <label class="form-check-label" for="flexSwitchCheckDefault">Maneja Pesa</label>
                        </div>
                    </div>
                    <div class="col-md-12 col-md-12 col-lg-2">
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                            <label class="form-check-label" for="flexSwitchCheckDefault">Vender en Linea</label>
                        </div>
                    </div>
                    <div class="col-md-12 col-md-12 col-lg-2">
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                            <label class="form-check-label" for="flexSwitchCheckDefault">Vender en 0</label>
                        </div>
                    </div>
                    <div class="col-md-12 col-md-12 col-lg-2">
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                            <label class="form-check-label" for="flexSwitchCheckDefault">Cantidad Entera</label>
                        </div>
                    </div>
                    <div class="col-md-12 col-md-12 col-lg-2">
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                            <label class="form-check-label" for="flexSwitchCheckDefault">Activo Fijo</label>
                        </div>
                    </div>
                    <div class="col-md-12 col-md-12 col-lg-2">
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                            <label class="form-check-label" for="flexSwitchCheckDefault">Maneja Licencia</label>
                        </div>
                    </div>
                    <div class="col-md-12 col-md-12 col-lg-2">
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                            <label class="form-check-label" for="flexSwitchCheckDefault">Maneja Serial</label>
                        </div>
                    </div>
                    <div class="col-md-12 col-md-12 col-lg-4">
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                            <label class="form-check-label" for="flexSwitchCheckDefault">No vender Bono Sodexo</label>
                        </div>
                    </div>
                    <div class="col-md-12 col-md-12 col-lg-2">
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                            <label class="form-check-label" for="flexSwitchCheckDefault">Favorito</label>
                        </div>
                    </div>
                    <div class="col-md-12 col-md-12 col-lg-2">
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                            <label class="form-check-label" for="flexSwitchCheckDefault">Mostrar en Tirilla</label>
                        </div>
                    </div>
                    <div class="col-md-12 col-md-12 col-lg-2">
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                            <label class="form-check-label" for="flexSwitchCheckDefault">Valor Fijo</label>
                        </div>
                    </div>
                    <div class="col-md-12 col-md-12 col-lg-3">
                        <div class="input-group input-group-sm mb-1">
                            <span class="input-group-text" id="basic-addon1">Retencion:</span>
                            <input type="text" class="form-control" value="2.5" />
                        </div>
                    </div>
                    <div class="col-md-12 col-md-12 col-lg-3">
                        <div class="input-group input-group-sm mb-1">
                            <span class="input-group-text" id="basic-addon1">Peso(Kg):</span>
                            <input type="text" class="form-control" value="2.5" />
                        </div>
                    </div>
                    <div class="col-md-12 col-md-12 col-lg-4">
                        <div class="input-group input-group-sm mb-1">
                            <span class="input-group-text" id="basic-addon1">Metodo Entrega:</span>
                            <select class="form-select" id="inputGroupSelect01">
                                <option selected>Ninguno</option>
                                <option value="1">Domicilio</option>
                                <option value="2">Inmediata</option>
                                <option value="3">Plazo</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12 col-md-12 col-lg-2 ">
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                            <label class="form-check-label" for="flexSwitchCheckDefault">Vender en $0</label>
                        </div>
                    </div>
                </div>

                <div class="row mb-1">
                    <div class="col-md-12 col-md-12 col-lg-2">
                        <div class="input-group input-group-sm mb-1">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                                <label class="form-check-label" for="flexSwitchCheckDefault">Agregar a Balanza</label>
                            </div>
                            <span class="input-group-text" id="basic-addon1">Tecla Directa:</span>
                            <input type="number" class="form-control" value="0" />
                        </div>
                    </div>

                    <div class="col-md-12 col-md-12 col-lg-2">
                        <div class="input-group input-group-sm mb-1">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                                <label class="form-check-label" for="flexSwitchCheckDefault">Crear Contenido</label>
                            </div>
                            <span class="input-group-text" id="basic-addon1">codigo</span>
                            <input type="number" class="form-control" value="0" />
                        </div>
                    </div>

                    <div class="col-md-12 col-md-12 col-lg-8">
                        <br>
                        <div class="input-group input-group-sm mb-1">
                            <button class="btn btn-primary btn-sm" type="button" id="btn-linea">
                                <span class="material-icons-outlined">
                                    <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="M15.5,12C18,12 20,14 20,16.5C20,17.38 19.75,18.21 19.31,18.9L22.39,22L21,23.39L17.88,20.32C17.19,20.75 16.37,21 15.5,21C13,21 11,19 11,16.5C11,14 13,12 15.5,12M15.5,14A2.5,2.5 0 0,0 13,16.5A2.5,2.5 0 0,0 15.5,19A2.5,2.5 0 0,0 18,16.5A2.5,2.5 0 0,0 15.5,14M5,3H19C20.11,3 21,3.89 21,5V13.03C20.5,12.23 19.81,11.54 19,11V5H5V19H9.5C9.81,19.75 10.26,20.42 10.81,21H5C3.89,21 3,20.11 3,19V5C3,3.89 3.89,3 5,3M7,7H17V9H7V7M7,11H12.03C11.23,11.5 10.54,12.19 10,13H7V11M7,15H9.17C9.06,15.5 9,16 9,16.5V17H7V15Z" />
                                    </svg>
                                </span>
                            </button>
                            <input type="text" class="form-control text-right" name="refer-create-desc"
                                id="refer-create-desc" required disabled />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 col-md-12 col-lg-4">
                        <div class="input-group input-group-sm mb-1">
                            <span class="input-group-text" id="basic-addon1">Ultima Modif.</span>
                            <input type="date" class="form-control" />
                        </div>
                    </div>
                    <div class="col-md-12 col-md-12 col-lg-4">
                        <div class="input-group input-group-sm mb-1">
                            <span class="input-group-text" id="basic-addon1">Usuario</span>
                            <input type="text" class="form-control" />
                        </div>
                    </div>
                    <div class="col-md-12 col-md-12 col-lg-4">
                        <div class="input-group input-group-sm mb-1">
                            <span class="input-group-text" id="basic-addon1">Ultima Compra</span>
                            <input type="date" class="form-control text-right" name="refer-create-desc"
                                id="refer-create-desc" value="0" required />
                        </div>
                    </div>
                </div>
                <div class="row pt-2">
                    <div class="col-md-12 col-md-12 col-lg-12 d-flex justify-content-center">
                        <ul class="buttons-group">
                            <li>
                                <button type="button" class="main btn-primary btn-sm">Adicionar</button>
                            </li>
                            <li>
                                <button type="button" class="main btn-success btn-sm">Modificar</button>
                            </li>
                            <li>
                                <button type="button" class="main btn-danger btn-sm">Retirar</button>
                            </li>
                            <li>
                                <button type="button" class="main btn-dark btn-sm">Salir</button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
