<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Card extends Component
{
    public $cardTitle;
    public $subTitle;
    public $description;

    public function __construct($title, $subtitle, $description)

    {
        $this->cardTitle = $title;
        $this->subTitle = $subtitle;
        $this->description = $description;
    }

    public function render()
    {
        return view('components.card');
    }

    public function addNumber($a, $b)
    {
        return $a + $b;
    }
}