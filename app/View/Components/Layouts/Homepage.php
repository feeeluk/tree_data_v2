<?php

namespace App\View\Components\Layouts;

use Illuminate\View\Component;

class Homepage extends Component
{
    public string $title;

    public function __construct()
    {
        $env = app()->environment();

        if ($env === 'live') {
            $this->title = 'Tree Data';
        } elseif ($env === 'test') {
            $this->title = 'TEST - Tree Data V2';
        } else {
            $this->title = 'LOCAL - Tree Data V2';
        }
    }

    public function render()
    {
        return view('components.layouts.homepage');
    }
}
