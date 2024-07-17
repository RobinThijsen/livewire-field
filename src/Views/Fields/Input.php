<?php
namespace RobinThijsen\LivewireFields\Views\Fields;

use Illuminate\Support\Str;
use Illuminate\View\Component;

class Input extends Component
{
    protected string $id;
    public string $field;
    public string $type;
    public string|bool $label;
    public string|bool $placeholder;
    public string $mode;
    public bool $required;
    public bool $disabled;

    public function __construct(
        $field,
        $type = 'text',
        $label = false,
        $placeholder = false,
        $mode = "blur",
        $required = false,
        $disabled = false
    ){
        $this->id = $field . "_" . Str::uuid();
        $this->field = $field;
        $this->type = $type;
        $this->label = $label;
        $this->placeholder = $placeholder;
        $this->mode = $mode;
        $this->required = $required;
        $this->disabled = $disabled;
    }

    public function render()
    {
        return view('livewire-fields::fields.input');
    }
}
