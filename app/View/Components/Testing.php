<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Testing extends Component
{
    /**
     * Create a new component instance.
     */
    public $type;

    public function __construct($type = 'info')
    {
        $this->type = $type;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.testing');
    }
}
