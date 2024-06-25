@if ($label)
    <label for="{{ $name }}" class="form-label mt-2">{{ $label }}</label>
@endif
<input type="{{ $type }}" class="form-control form-control-sm @error($name) is-invalid @enderror " id="{{ $id }}" name="{{ $name }}" value="{{ old($name, $value) }}" 
    placeholder="{{ $placeholder }}"  @if ($required) required @endif />
@error($name)
    <div class="invalid-feedback">
        {{ $message }}
    </div>
@enderror
