@if (!config('inventa.forms.show_errors_next_to_fields') && $errors->any())
    <section class="form-errors">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </section>
@endif