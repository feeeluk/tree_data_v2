<?php

namespace App\View\Components\Layouts;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class App extends Component
{
    public string $title;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $env = app()->environment();

        if ($env === 'live') {
            $this->title = 'Treedata';
        } elseif ($env === 'test') {
            $this->title = 'TEST - Treedata';
        } else {
            $this->title = 'LOCAL - Treedata';
        }
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.layouts.app');
    }
}
