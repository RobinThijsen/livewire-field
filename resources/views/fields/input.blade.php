<fieldset>
    @if ($label)
        <label for="{{ $id }}"></label>
    @endif

    <input type="{{ $type }}"
           id="{{ $id }}"
           name="{{ $id }}"
           wire:model.{{ $mode }}="{{ $field }}"
           @if ($required)required @endif
           @if($disabled)disabled @endif
           @if($placeholder)placeholder="{{ $placeholder }}" @endif />

    @error($field)
        <span>{{ $message }}</span>
    @enderror

</fieldset>
