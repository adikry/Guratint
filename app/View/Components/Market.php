<?php

namespace App\View\Components;

use App\Models\Market as ModelsMarket;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Market extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {

        $market = ModelsMarket::all();

        return view('components.market', compact('market'));
    }
}
