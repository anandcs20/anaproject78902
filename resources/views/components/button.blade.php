<button {{ $attributes->merge([
    'class' => 'btn b-solid btn-primary-solid w-full',
]) }}>
    {{ $slot }}
</button>
