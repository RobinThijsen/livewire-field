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

    @script
        <script>
            let input = document.getElementById('@js($id)');

            if (input) {
                input.addEventListener('change', function (e) {
                    $wire.set('value', e.target.value);
                });
            }
        </script>
    @endscript

</fieldset>
