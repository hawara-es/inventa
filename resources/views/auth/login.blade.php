<x-layout.clear class="auth-login centered-box">

    <h1 class="title">{{ __('login.title') }}</h1>

    <form
        class="flex-column standard-gap"
        action="{{ route('login') }}"
        method="POST">

        @csrf

        <x-form.errors :errors="$errors" />

        <x-form.input
            required autofocus
            label="login.labels.username"
            name="username"
            type="text">
        </x-form.input>

        <x-form.input
            required
            label="login.labels.password"
            type="password"
            name="password">
        </x-form.input>

        <a href="/forgot-password">{{ __('login.navigation.forgot-password') }}</a>

        <button type="submit">
            {{ __('login.labels.submit') }}
        </button>

    </form>

    <hr>

    <h2 class="title">{{ __('login.navigation.register.title') }}</h2>

    <nav class="flex-column standard-gap">
        <a class="button secondary" href="/register">
            {{ __('login.navigation.register.action') }}
        </a>
    </nav>

</x-layout.clear>
