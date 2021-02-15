@props(['errors'])

@if ($errors->any())
    <div {{ $attributes }}>
        <div class="font-small text-red-600" style="color: red">
            {{ __('Usuario o contraseña incorrecta.') }}
        </div>
    </div>
@endif