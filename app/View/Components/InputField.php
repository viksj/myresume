<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class InputField extends Component
{
    public $label;
    public $type;
    public $name;
    public $id;
    public $value;
    public $placeholder;
    public $required;
    /**
     * Create a new component instance.
     */
    public function __construct($label='', $type = 'text', $name='', $id='', $value='', $placeholder = '', $required = false )
    {
        $this->label = $label;
        $this->type = $type;
        $this->name = $name;
        $this->id = $id;
        $this->value = $value;
        $this->placeholder = $placeholder;
        $this->required = $required;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.input-field');
    }
}
