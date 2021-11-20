@extends('auth.template')
@section('content')
<div class="col-lg-8">
    <div class="auth-cover-wrapper ">
        <div class="auth-cover">
            <div class="title text-center">
                <h1 class="text-primary mb-10">Bienvenido de nuevo</h1>
                <p class="text-medium">
                    Inicie sesión en su cuenta existente para continuar
                </p>
            </div>
            <div class="cover-image">
                <img src="{{ asset('assets/images/banner.png') }}" alt="" />
            </div>
            <div class="shape-image">
                <img src="assets/images/auth/shape.svg" alt="" />
            </div>
        </div>
    </div>
</div>
<!-- end col -->
<div class="col-lg-4">
    <div class="signin-wrapper">
        <div class="form-wrapper">
            <h6 class="mb-15">Facturación Electronica</h6>
            <p class="text-sm mb-25">
                Empiece a crear la mejor experiencia de usuario posible para sus negocios.
            </p>
            @yield('form')
            <form id="frm-login">
                @csrf
                <div class="row">
                    <div class="col-12">
                        <div class="input-style-1">
                            <label>Usuario</label>
                            <input type="text" placeholder="Usuario" id="username" name="username"
                                class="form-control" />
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-12">
                        <div class="input-style-1">
                            <label>Contraseña</label>
                            <input type="password" placeholder="Contraseña" id="password"
                                name="password" class="form-control" />
                        </div>
                    </div>
                    <!-- end col -->

                    <!-- end col -->
                    <div class="col-12">
                        <div class=" button-group  d-flex justify-content-center flex-wrap">
                            <button type="submit"
                                class=" main-btn  primary-btn btn-hover w-100 text-center">
                                Iniciar Sesión
                            </button>
                            {{-- <a href="home/" class=" main-btn  primary-btn btn-hover w-100 text-center">
                                Iniciar Sesión
                            </a> --}}
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </form>

            <p class="text-sm text-medium text-dark text-center pt-50">
                ¿Aún no tienes una cuenta?
                <a href="/registro">Crea una cuenta</a>
            </p>
        </div>
    </div>
</div>
@endsection