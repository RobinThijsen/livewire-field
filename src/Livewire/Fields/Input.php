<?php
namespace RobinThijsen\LivewireFields\Livewire\Fields;

use Illuminate\Support\Str;
use Livewire\Attributes\Locked;
use Livewire\Attributes\Modelable;
use Livewire\Component;

class Input extends Component
{
    #[Modelable]
    public mixed $value = null;

    #[Locked]
    public string $id;

    public string $field;
    public string $type = 'text';
    public string|bool $label = false;
    public string|bool $placeholder = false;
    public string $mode = "blur";
    public bool $required = false;
    public bool $disabled = false;

    public function mount()
    {
        $this->id = $this->field . "_" . Str::uuid();
    }

    public function updated($property, $value)
    {
        if ($property == $this->field) {
            dd($this->field);
        }
    }

    public function render()
    {
        return view('livewire-fields::fields.input');
    }
}
