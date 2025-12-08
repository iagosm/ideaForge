<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class MainLayout extends Component
{
    public $hideFooter;

    public function __construct($hideFooter = false)
    {
        $this->hideFooter = $hideFooter;
    }

    public function render(): View
    {
        return view('layouts.main');
    }
}

