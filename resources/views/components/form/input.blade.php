<label class="labelled-input flex-column">
    {{ __($label) }}

    <input
        {{ $attributes->except("label") }}
        type="{{ $type }}"
        name="{{ $name }}"
        class="@error($name) is-invalid @enderror"
        value="{{ old($name) }}" />

    @if (config('inventa.forms.show_errors_next_to_fields') && $errors->has($name))
        <section class="form-errors">
            <ul>
                @foreach ($errors->get($name) as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </section>
    @endif
</label>