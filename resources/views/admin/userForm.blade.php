<x-guest-layout>
    <container-mg style="width: 25%;">
        <x-auth-card>
            <x-slot name="logo">
            </x-slot>

            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4" :errors="$errors" />

            <form method="POST" action="{{ route('register') }}" class="form-signin inicio mx-auto">
                @csrf

                <div class="text-center mb-4">
                    <img class="mb-4 w-100" src="{{ asset('assets/img/register/register.jpg') }}" alt="">
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />
                    <h1 class="h3 mb-3 font-weight-normal">New User</h1>
                </div>

                <!-- Name -->
                <div class="mt-4">
                    <x-input id="name" class="form-control" placeholder="User" type="text" name="name" :value="old('name')" required autofocus />
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <x-input id="password" placeholder="Password" class="form-control"
                                    type="password"
                                    name="password"
                                    required autocomplete="new-password" />
                </div>

                <!-- Confirm Password -->
                <div class="mt-4">

                    <x-input id="password_confirmation" placeholder="Confirm Password" class="form-control"
                                    type="password"
                                    name="password_confirmation" required />
                </div>

                <div class="flex items-center justify-end mt-4">
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                        {{ __('Already registered?') }}
                    </a>

                    <x-button class="btn btn-lg btn-block w-100" style="background: #EB3349;  /* fallback for old browsers /
                    background: -webkit-linear-gradient(to right, #F45C43, #EB3349);  / Chrome 10-25, Safari 5.1-6 /
                    background: linear-gradient(to right, #F45C43, #EB3349); / W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
                ">
                        {{ __('Register') }}
                    </x-button>
                </div>
            </form>
        </x-auth-card>
    </container-mg>
</x-guest-layout>