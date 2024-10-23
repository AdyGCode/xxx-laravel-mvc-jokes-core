<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Str;
use Illuminate\View\Component;

class FlashMessage extends Component
{

    public $data;
    public $message;
    public $type;
    public $bgColour;
    public $fgColour;
    public $fgText;
    public $bgText;
    public $icon;

    /**
     * Create a new component instance.
     */
    public function __construct($data)
    {
        $types = [
            'error' => [
                'icon' => 'fa-solid fa-triangle-exclamation', 'fgColour' => 'text-white', 'bgColour' => 'bg-red-600',
                'fgText' => 'text-red-900', 'bgText' => 'bg-red-100',
            ],
            'success' => [
                'icon' => 'fa-solid fa-circle-check', 'fgColour' => 'text-white', 'bgColour' => 'bg-green-600',
                'fgText' => 'text-green-900', 'bgText' => 'bg-green-100',
            ],
            'info' => [
                'icon' => 'fa-solid fa-circle-info', 'fgColour' => 'text-white', 'bgColour' => 'bg-sky-600',
                'fgText' => 'text-sky-900', 'bgText' => 'bg-sky-100',
            ],
            'warning' => [
                'icon' => 'fa-solid fa-circle-exclamation', 'fgColour' => 'text-white', 'bgColour' => 'bg-amber-600',
                'fgText' => 'text-amber-900', 'bgText' => 'bg-amber-100',
            ],
        ];

        foreach ($types as $type => $formats) {
            if ($data->has($type)) {
                $this->type = Str::title($type);
                $this->message = Str::title($data->get($type));
                $this->fgColour = $formats['fgColour'];
                $this->bgColour = $formats['bgColour'];
                $this->fgText = $formats['fgText'];
                $this->bgText = $formats['bgText'];
                $this->icon = $formats['icon'];
            }
        }
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.flash-message');
    }
}
