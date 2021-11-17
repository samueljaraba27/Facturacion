<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elegant Dashboard | Sign In</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/img/svg/logo.svg') }}" type="image/x-icon">
    <!-- Custom styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.min.css') }}">
</head>

<body>
    <div class="layer"></div>
    <main class="page-center">
        <article class="sign-up">
            <h1 class="sign-up__title">¡Bienvenido de nuevo!</h1>
            <img class="mb-4" src="{{ asset('assets/img/isotipo.png') }}" alt="Logo Esys" width="250"
                height="250" />
            <p class="sign-up__subtitle">Inicie sesión con su cuenta para continuar</p>
            <form class="sign-up-form form" action="" method="">
                <label class="form-label-wrapper">
                    <p class="form-label">Usuario</p>
                    <input class="form-input" type="text" placeholder="Introduce tu Usuario" required>
                </label>
                <label class="form-label-wrapper">
                    <p class="form-label">Contrase&ntilde;a</p>
                    <input class="form-input" type="password" placeholder="Ingresa tu contrase&ntilde;a" required>
                </label>
                <a class="link-info forget-link" href="##">¿Olvidaste tu contraseña?</a>
                <label class="form-checkbox-wrapper">
                    <input class="form-checkbox" type="checkbox" required>
                    <span class="form-checkbox-label">Recuerdame la proxima vez</span>
                </label>
                {{-- <button class="form-btn primary-default-btn transparent-btn">Ingresar al Sistema</button> --}}
                <a href="{{route('home')}}" class="form-btn primary-default-btn transparent-btn">Ingresar al Sistema</a>
            </form>
        </article>
    </main>
    <!-- Chart library -->
    <script src="{{ asset('assets/plugins/chart.min.js') }}"></script>
    <!-- Icons library -->
    <script src="{{ asset('assets/plugins/feather.min.js') }}"></script>
    <!-- Custom scripts -->
    <script src="{{ asset('assets/js/script.js') }}"></script>
</body>

</html>
