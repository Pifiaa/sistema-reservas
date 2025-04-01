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
                            <h5 class="text-primary">{{__('Bienvenido !')}}</h5>
                            <p class="text-muted">{{__('inicie sesión para continuar.')}}</p>
                        </div>
                        <div class="p-2 mt-4">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <!-- Campo de email -->
                                <div class="mb-3">
                                    <label for="email" class="form-label">{{__('Correo Electrónico')}}</label>
                                    <input type="email"
                                           class="form-control pe-5 @error('email') is-invalid @enderror"
                                           name="email"
                                           id="email"
                                           required
                                           autofocus
                                           autocomplete="email"
                                           value="{{ old('email') }}"
                                           placeholder="Ingrese Correo Electrónico">
                                    @error('email')
                                        <div class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </div>
                                    @enderror
                                </div>

                                <!-- Campo de contraseña -->
                                <div class="mb-3">
                                    <div class="float-end">
                                        <a href="auth-pass-reset-basic.html" class="text-muted">Olvido la contraseña?</a>
                                    </div>
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

                                <!-- Recordar sesión -->
                                <div class="form-check">
                                    <input class="form-check-input"
                                           type="checkbox"
                                           id="auth-remember-check"
                                           name="remember"
                                           {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="auth-remember-check">{{__('Recuerdame')}}</label>
                                </div>

                                <!-- Botón submit -->
                                <div class="mt-4">
                                    <button class="btn btn-success w-100" type="submit">{{__('iniciar sesión')}}</button>
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
                    <p class="mb-0">{{ __('No tienes cuenta?') }}
                        <a href="{{ route('register') }}" class="fw-semibold text-primary text-decoration-underline">{{ __('Registrate') }}</a>
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
