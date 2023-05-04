<x-layout.clear class="auth-login centered-box">

    <h1 class="title">{{ __('login.title') }}</h1>

    <form
        class="flex-column"
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

        <button type="submit">
            {{ __('login.labels.submit') }}
        </button>

    </form>

</x-layout.clear>
