<?php

namespace App\View\Components;

use App\Models\BeforeAfter as ModelsBeforeAfter;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class BeforeAfter extends Component
{
    public $images;
    /**
     * Create a new component instance.
     */
    public function __construct($beforeAfterKey)
    {
        $this->images = ModelsBeforeAfter::where('unique_key', $beforeAfterKey )->first();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.before-after', ['images' => $this->images]);
    }
}
