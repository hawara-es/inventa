<label class="labelled-input flex-column">
    {{ $label }}

    <input
        {{ $attributes->except("label") }}
        type="{{ $type }}"
        name="{{ $name }}"
        class="@error($name) is-invalid @enderror"
        value="{{ old($name) }}" />
</label>