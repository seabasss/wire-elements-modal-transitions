<?php

namespace App\Http\Livewire;

use WireElements\Pro\Components\Modal\Modal;

class BigModal extends Modal
{
    public function render()
    {
        return view('livewire.big-modal');
    }

    public static function attributes(): array
    {
        return [
            'size' => '5xl',
        ];
    }
}
