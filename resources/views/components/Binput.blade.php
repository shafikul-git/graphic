@props([
    'type',
    'name',
    'inputID' => '',
    'labelText' => '',
    'uploadBTNID' => '',
    'uploadBTNText' => '',
    'placeholder' => '',
])


<div class="mb-3">
    @if ($labelText)
        <label @if ($inputID) for="{{ $inputID }}" @endif
            class="form-label">{{ $labelText }}</label>
    @endif

    <input type="{{ $type }}" name="{{ $name }}" class="form-control"
        @if ($inputID) id="{{ $inputID }}" @endif value="{{ old($name) }}"
        @if ($placeholder) placeholder="{{ $placeholder }}" @endif>

    @if ($uploadBTNText)
        <button type="button" data-bs-toggle="modal" data-bs-target="#{{ $uploadBTNID }}"
            class=" form-control btn-primary">{{ $uploadBTNText }}</button>
    @endif
    {{ $slot }}
</div>
@error($name)
    <p class="text-danger">{{ $message }}</p>
@enderror
