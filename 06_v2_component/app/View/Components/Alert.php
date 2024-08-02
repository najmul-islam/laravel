<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Alert extends Component
{
    public $description;
    public function __construct($description)
    {
        $this->description  = $description;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.alert');
    }
}