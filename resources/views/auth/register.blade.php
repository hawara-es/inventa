<x-layout.clear class="auth-register">

    <h1>{{ __('Register') }}</h1>

    <form
        class="flex-column"
        action="{{ route('register') }}"
        method="POST">

        @csrf

        <x-form.errors :errors="$errors" />

        <label class="labelled-input flex-column">
            {{ __('Please, enter a username.') }}

            <input
                required
                autofocus
                autocomplete="username"
                type="text"
                name="username"
                class="@error('username') is-invalid @enderror"
                value="{{ old('username') }}" />
        </label>

        <label class="labelled-input flex-column">
            {{ __('What\'s your email address?') }}

            <input
                required
                autocomplete="email"
                type="email"
                name="email"
                class="@error('email') is-invalid @enderror"
                value="{{ old('email') }}" />
        </label>

        <label class="labelled-input flex-column">
            {{ __('Choose a strong password.') }}

            <input
                required
                type="password"
                name="password"
                class="@error('password') is-invalid @enderror"
                value="" />
        </label>

        @if (config('fortify.use_password_confirmation'))
            <label class="labelled-input flex-column">
                {{ __('Confirm your new password.') }}

                <input
                    required
                    type="password"
                    name="password_confirmation"
                    class="@error('password_confirmation') is-invalid @enderror"
                    value="" />
            </label>
        @endif

        <button type="submit">
            {{ __('Register') }}
        </button>

    </form>

</x-layout.clear>
