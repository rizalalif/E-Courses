<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Toast extends Component
{
    public $type;
    public $message;
    public $iconColor;
    public $iconPath;
    public $iconAlt;

    public function __construct($type, $message)
    {
        $this->type = $type;
        $this->message = $message;

        switch ($type) {
            case 'success':
                $this->iconColor = 'green';
                $this->iconPath = 'M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z';
                $this->iconAlt = 'Check icon';
                break;
            case 'error':
                $this->iconColor = 'red';
                $this->iconPath = 'M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm4.207 5.793-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z';
                $this->iconAlt = 'Error icon';
                break;
                // Tambahkan case lain jika diperlukan
        }
    }

    public function render()
    {
        return view('components.toast');
    }
}
