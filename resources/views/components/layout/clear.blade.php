<x-html class="layout-clear no-margin">

    <main {{ $attributes->merge([
        'role' => 'main',
        'aria-label' => 'Main content',
    ]) }}>
        {{ $slot }}
    </main>

</x-html>