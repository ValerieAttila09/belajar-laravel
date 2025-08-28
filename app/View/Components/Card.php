<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Card extends Component
{
    /**
     * Create a new component instance.
     */

    public $title;
    public $content;
    public $id;
    public $name;

    public function __construct($name = 'name', $title = 'title', $content = 'content', $id = 'id')
    {
        $this->name = $name;
        $this->title = $title;
        $this->content = $content;
        $this->id = $id;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.card');
    }
}
