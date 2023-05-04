<x-layout.clear class="auth-register centered-box">

    <h1 class="title">{{ __('register.title') }}</h1>

    <form
        class="flex-column"
        action="{{ route('register') }}"
        method="POST">

        @csrf

        <x-form.errors :errors="$errors" />

        <x-form.input
            required autofocus
            autocomplete="username"
            label="register.labels.username"
            name="username"
            type="text">
        </x-form.input>

        <x-form.input
            required
            autocomplete="email"
            label="register.labels.email"
            name="email"
            type="email">
        </x-form.input>

        <x-form.input
            required
            label="register.labels.password"
            type="password"
            name="password">
        </x-form.input>

        @if (config('fortify.use_password_confirmation'))
            <x-form.input
                required
                label="register.labels.password_confirmation"
                type="password"
                name="password_confirmation">
            </x-form.input>
        @endif

        <button type="submit">
            {{ __('register.labels.submit') }}
        </button>

    </form>

</x-layout.clear>
