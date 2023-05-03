<label class="labelled-input flex-column">
    {{ $label }}

    <input
        {{ $attributes->except("label") }}
        type="{{ $type }}"
        name="{{ $name }}"
        class="@error($name) is-invalid @enderror"
        value="{{ old($name) }}" />

    @if (config('inventa.forms.show_errors_next_to_fields') && $errors->has($name))
        <div class="field-errors">
            <ul>
                @foreach ($errors->get($name) as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</label>