<x-html class="layout-clear standard-gap no-margin">

    <main {{ $attributes->merge([
        'role' => 'main',
        'aria-label' => 'Main content',
    ]) }}>
        {{ $slot }}
    </main>

</x-html>