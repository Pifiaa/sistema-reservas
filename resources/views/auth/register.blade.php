@extends('layouts.guest')

@section('content')
<div class="auth-page-content">
    <div class="container">
        <!-- Logo y título -->
        <div class="row">
            <div class="col-lg-12">
                <div class="text-center mt-sm-5 mb-4 text-white-50">
                    <div>
                        <a href="index.html" class="d-inline-block auth-logo">
                            <img src="assets/images/logo-light.png"
                                 alt="{{ config('app.name') }}"
                                 height="30"
                                 loading="lazy">
                        </a>
                    </div>
                    <p class="mt-3 fs-15 fw-medium">{{ __('Sistema de reservas') }}</p>
                </div>
            </div>
        </div>

        <!-- Formulario de login -->
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 col-xl-5">
                <div class="card mt-4">

                    <div class="card-body p-4">
                        <div class="text-center mt-2">
                            <h5 class="text-primary">{{__('Crear nueva Cuenta !')}}</h5>
                            <p class="text-muted">{{__('Registrese para continuar con la reserva.')}}</p>
                        </div>
                        <div class="p-2 mt-4">
                            <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                                @csrf

                                <!-- Campo nombre -->
                                <div class="mb-3">
                                    <label for="nombres" class="form-label">{{__('Nombre')}}</label>
                                    <input type="text"
                                           class="form-control pe-5 @error('nombres') is-invalid @enderror"
                                           name="nombres"
                                           id="nombres"
                                           required
                                           autofocus
                                           autocomplete="nombres"
                                           value="{{ old('nombres') }}"
                                           placeholder="Ingrese su nombre">
                                    @error('nombre')
                                        <div class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </div>
                                    @enderror
                                </div>

                                <!-- Campo apellidos -->
                                <div class="mb-3">
                                    <label for="apellidos" class="form-label">{{__('Apellido')}}</label>
                                    <input type="text"
                                           class="form-control pe-5 @error('apellidos') is-invalid @enderror"
                                           name="apellidos"
                                           id="apellidos"
                                           required
                                           autocomplete="apellidos"
                                           value="{{ old('apellidos') }}"
                                           placeholder="Ingrese su apellido">
                                    @error('apellidos')
                                        <div class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </div>
                                    @enderror
                                </div>

                                <!-- Campo de email -->
                                <div class="mb-3">
                                    <label for="email" class="form-label">{{__('Correo Electrónico')}}</label>
                                    <input type="email"
                                           class="form-control pe-5 @error('email') is-invalid @enderror"
                                           name="email"
                                           id="email"
                                           required
                                           autocomplete="email"
                                           value="{{ old('email') }}"
                                           placeholder="Ingrese Correo Electrónico">
                                    @error('email')
                                        <div class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </div>
                                    @enderror
                                </div>

                                <!-- Campo telefono -->
                                <div class="mb-3">
                                    <label for="telefono" class="form-label">{{__('Teléfono')}}</label>
                                    <input type="text"
                                           class="form-control pe-5 @error('email') is-invalid @enderror"
                                           name="telefono"
                                           id="telefono"
                                           required
                                           autocomplete="telefono"
                                           value="{{ old('telefono') }}"
                                           placeholder="Ingrese su teléfono">
                                    @error('telefono')
                                        <div class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </div>
                                    @enderror
                                </div>

                                <!-- Campo de contraseña -->
                                <div class="mb-3">
                                    <label class="form-label" for="password">{{__('Contraseña')}}</label>
                                    <div class="position-relative auth-pass-inputgroup mb-3">
                                        <input type="password"
                                               required
                                               id="password"
                                               name="password"
                                               placeholder="Ingrese contraseña"
                                               class="form-control pe-5 @error('password') is-invalid @enderror">
                                        <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted"
                                                type="button"
                                                id="togglePassword">
                                                <i class="ri-eye-fill align-middle"></i>
                                        </button>
                                        @error('password')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Campo de confirmar contraseña -->
                                <div class="mb-3">
                                    <label class="form-label" for="password-confirm">{{__('Confirmar contraseña')}}</label>
                                    <div class="position-relative auth-pass-inputgroup mb-3">
                                        <input type="password"
                                               required
                                               id="password-confirm"
                                               name="password_confirmation"
                                               placeholder="Ingrese contraseña"
                                               class="form-control pe-5 @error('password-confirm') is-invalid @enderror">
                                    </div>
                                </div>

                                <!-- Campo foto -->
                                <div class="mb-3">
                                    <label for="foto" class="form-label">{{__('Foto (OPcional)')}}</label>
                                    <input type="file"
                                           class="form-control pe-5 @error('email') is-invalid @enderror"
                                           name="foto"
                                           id="foto"
                                           value="{{ old('foto') }}"
                                           placeholder="Ingrese su teléfono">
                                    @error('foto')
                                        <div class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </div>
                                    @enderror
                                </div>

                                <!-- Botón submit -->
                                <div class="mt-4">
                                    <button class="btn btn-success w-100" type="submit">{{__('Registar')}}</button>
                                </div>

                                <!-- Login con redes sociales -->
                                <div class="mt-4 text-center">
                                    <div class="signin-other-title">
                                        <h5 class="fs-13 mb-4 title">{{__('iniciar sesión con')}}</h5>
                                    </div>
                                    <div>
                                        <button type="button"
                                            class="btn btn-primary btn-icon waves-effect waves-light">
                                            <i class="ri-facebook-fill fs-16"></i>
                                        </button>
                                        <button type="button"
                                            class="btn btn-danger btn-icon waves-effect waves-light">
                                            <i class="ri-google-fill fs-16"></i>
                                        </button>
                                        <button type="button"
                                            class="btn btn-dark btn-icon waves-effect waves-light">
                                            <i class="ri-github-fill fs-16"></i>
                                        </button>
                                        <button type="button"
                                            class="btn btn-info btn-icon waves-effect waves-light">
                                            <i class="ri-twitter-fill fs-16"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- end card body -->
                </div>
                <!-- end card -->

                <div class="mt-4 text-center">
                    <p class="mb-0">{{ __('Ya tienes una cuenta?') }}
                        <a href="{{ route('login') }}" class="fw-semibold text-primary text-decoration-underline">{{ __('Iniciar sesión') }}</a>
                    </p>
                </div>

            </div>
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</div>

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function(){
            const togglePasswordButton = document.querySelector('#togglePassword');
            const passwordInput = document.querySelector('#password');

            togglePasswordButton.addEventListener('click', function() {
                const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
                passwordInput.setAttribute('type', type);
            });
        })
    </script>
@endpush

@endsection
