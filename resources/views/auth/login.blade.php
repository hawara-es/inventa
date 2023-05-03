<x-layout.clear class="auth-login">

    <h1 class="title">{{ __('Login') }}</h1>

    <form
        class="flex-column"
        action="{{ route('login') }}"
        method="POST">

        @csrf

        <x-form.errors :errors="$errors" />

        <x-form.input
            required autofocus
            label="What's your username?"
            name="username"
            type="text">
        </x-form.input>

        <x-form.input
            required
            label="Type your password"
            type="password"
            name="password">
        </x-form.input>

        <button type="submit">
            {{ __('Login') }}
        </button>

    </form>

</x-layout.clear>
