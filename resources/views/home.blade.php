<x-layout.clear>

<form
    action="{{ route('logout') }}"
    method="POST">

    @csrf

    <button type="submit">
        {{ __('Logout') }}
    </button>

</form>

</x-layout.clear>
