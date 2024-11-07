<?php

namespace App\View\Components;

use App\Models\frontend\HeroSlider as FrontendHeroSlider;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class HeroSlider extends Component
{
    public $slides;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->slides = [
            [
                "description" => '',
                "image" => '',
                "title" => '',
            ],
             [
                "description" => '',
                "image" => '',
                "title" => '',
            ],
             [
                "description" => '',
                "image" => '',
                "title" => '',
            ],
            
        ];
        // $this->slides = FrontendHeroSlider::all();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.hero-slider', ['slides' => $this->slides]);
    }
}
