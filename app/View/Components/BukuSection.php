<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class BukuSection extends Component
{
    // public $books;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        // $this->books=$books;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.buku-section');
    }
}
