<?php

namespace App\View\Components\table;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class DeletedPositions extends Component
{
    /**
     * Create a new component instance.
     */
    public $positions;

    public function __construct($positions)
    {
        $this->positions = $positions;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.table.deleted-positions');
    }
}
