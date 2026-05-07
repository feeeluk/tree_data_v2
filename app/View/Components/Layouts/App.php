<?php

namespace App\View\Components\Layouts;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class App extends Component
{
    public string $title;
    public string $logoText;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $env = app()->environment();

        if ($env === 'live') {
            $this->title = 'Tree Data';
            $this->logoText = 'Tree Data';
            
        } elseif ($env === 'test') {
            $this->title = 'TEST - Tree Data V2';
            $this->logoText = 'TEST - Tree Data V2';

        } else {
            $this->title = 'LOCAL - Tree Data V2';
            $this->logoText = 'LOCAL - Tree Data V2';
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
