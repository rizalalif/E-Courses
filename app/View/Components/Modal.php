<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Modal extends Component
{
    public string $id;
    public string $modalType;
    public ?string $type;
    public ?string $formAction;
    public ?string $message;
    public string $colors;

    /**
     * Create a new component instance.
     */
    public function __construct(
        string $id,
        string $modalType,
        ?string $type = null,
        ?string $formAction = null,
        ?string $message = null
    ) {
        $this->id = $id;
        $this->modalType = $modalType;
        $this->type = $type;
        $this->formAction = $formAction;
        $this->message = $message ?? 'Are you sure?';

        switch ($type) {
            case 'edit':
                $this->colors = "px-3 py-2 text-sm font-medium text-center text-white bg-yellow-400 rounded-lg hover:bg-yellow-500 focus:ring-4 focus:outline-none focus:ring-yellow-300 dark:bg-yellow-500 dark:hover:bg-yellow-600 dark:focus:ring-yellow-900";
                break;
            case 'delete':
                $this->colors = "px-3 py-2 text-sm font-medium text-center text-white bg-red-600 rounded-lg hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-500 dark:hover:bg-red-600 dark:focus:ring-red-900";
                break;
            default:
                $this->colors = "px-3 py-2 text-sm text-white inline-flex justify-center items-center bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 rounded-lg text-sm text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800";
                break;
        }
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.modal');
    }
}
