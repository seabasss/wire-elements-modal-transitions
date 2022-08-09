<?php

namespace App\Http\Livewire;

use WireElements\Pro\Components\Modal\Modal;

class SmallModal extends Modal
{
    public function render()
    {
        return view('livewire.small-modal');
    }
}
