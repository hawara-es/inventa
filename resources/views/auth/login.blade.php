<x-layout.clear class="auth-login">

    <h1>{{ __('Login') }}</h1>

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

        <label class="labelled-input flex-column">
            {{ __('What\'s your username?') }}

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
            {{ __('Type your password') }}

            <input
                required
                type="password"
                name="password"
                class="@error('password') is-invalid @enderror"
                value="" />
        </label>

        <button type="submit">
            {{ __('Login') }}
        </button>

    </form>

</x-layout.clear>
