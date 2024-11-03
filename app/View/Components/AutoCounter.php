<?php

namespace App\View\Components;

use App\Models\AutoCounter as ModelsAutoCounter;
use App\Models\Setting;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class AutoCounter extends Component
{
    public $data;
    /**
     * Create a new component instance.
     */
    public function __construct($workKey)
    {
       $this->data = ModelsAutoCounter::where('counter_key', $workKey)->first();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.auto-counter', ['data' => $this->data]);
    }
}
