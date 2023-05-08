<x-layout.clear class="auth-forgot-password centered-box">

    <h1 class="title">{{ __('forgot-password.title') }}</h1>

    <form
        class="flex-column standard-gap"
        action="{{ route('password.email') }}"
        method="POST">

        @csrf

        <x-form.errors :errors="$errors" />

        <x-form.input
            required autofocus
            label="forgot-password.labels.email"
            name="email"
            type="text">
        </x-form.input>

        <button type="submit">
            {{ __('forgot-password.labels.submit') }}
        </button>

    </form>

</x-layout.clear>
