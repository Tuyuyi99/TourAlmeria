<x-guest-layout>
    <container-mg class="animate__animated animate__rotateIn" style="width: 35%;">
 
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->


        <form method="POST" action="{{ route('login') }}" class="form-signin inicio mx-auto" id="Inicio_Sesion">
            @csrf

            <div class="text-center mb-4">
                <img class="mb-4 w-100" src="{{ asset('assets/img/login/login.svg') }}" alt="">
                <x-auth-validation-errors class="mb-4" :errors="$errors" />
                <h1 class="h3 mb-3 font-weight-normal">Iniciar sesión</h1>
            </div>
            <div class="form-label-group">
                <x-input id="name" class="form-control" type="text" name="name" :value="old('name')" placeholder="Usuario" required autofocus />
                <label for="name">Usuario</label>
            </div>

            <div class="form-label-group">
                <x-input id="password" class="form-control" type="password" name="password" required autocomplete="current-password" placeholder="Contraseña" />
                <label for="password">Contraseña</label>
            </div>
            <x-button class="btn btn-lg btn-block w-100" style="background: #EB3349;  /* fallback for old browsers /
                background: -webkit-linear-gradient(to right, #F45C43, #EB3349);  / Chrome 10-25, Safari 5.1-6 /
                background: linear-gradient(to right, #F45C43, #EB3349); / W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            ">{{ __('Login') }}</x-button>

        </form>

    </container-mg>
</x-guest-layout>