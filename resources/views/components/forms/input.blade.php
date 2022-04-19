<div class="{{ $divClass }}">
    @if ($label)
        <label for="{{ $name }}">
            {{ $label }}
        </label>
    @endif
    <input
        class=" {{ $class }} form-control border border-dark {{ $errors->has($name) ? ' is-invalid' : '' }}"
        type="{{ $type }}"
        name="{{ $name }}"
        value="{{ old($name, $value) }}"
        {{ $attributes }}
        >
    @if ($errors->has($name))
        <p class="invalid-feedback">
            {{ $errors->first($name) }}
        </p>
    @endif
</div>
