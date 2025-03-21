<?php

namespace App\Livewire\Inc;

use Illuminate\Support\Facades\Cookie;

use Livewire\Component;

class Capcha extends Component
{
    protected $listeners = ['CapchaUpdate'];
    public $capcha;
    public function mount()
    {
        $this->capcha = Cookie::get('capcha') ?? 0;
    }
    public function CapchaUpdate()
    {
        Cookie::queue('capcha', true, 5);
    }
    public function render()
    {
        return view('livewire.inc.capcha');
    }
}