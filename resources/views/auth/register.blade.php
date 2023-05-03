<x-layout.clear class="auth-register">

    <h1 class="title">{{ __('Register') }}</h1>

    <form
        class="flex-column"
        action="{{ route('register') }}"
        method="POST">

        @csrf

        @if (!config('inventa.forms.show_errors_next_to_fields'))
            <x-form.errors :errors="$errors" />
        @endif

        <x-form.input
            required autofocus
            autocomplete="username"
            label="Enter your new username"
            name="username"
            type="text">
        </x-form.input>

        <x-form.input
            required
            autocomplete="email"
            label="What's your email address?"
            name="email"
            type="email">
        </x-form.input>

        <x-form.input
            required
            label="Choose a strong password"
            type="password"
            name="password">
        </x-form.input>

        @if (config('fortify.use_password_confirmation'))
            <x-form.input
                required
                label="Confirm your new password"
                type="password"
                name="password_confirmation">
            </x-form.input>
        @endif

        <button type="submit">
            {{ __('Register') }}
        </button>

    </form>

</x-layout.clear>
