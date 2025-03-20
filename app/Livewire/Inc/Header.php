<?php

namespace App\Livewire\Inc;

use Livewire\Component;
use App\Models\Service;

class Header extends Component
{
    public $services;

    public function mount()
    {
        // Lấy tất cả dịch vụ
        $this->services = Service::all();
    }

    public function render()
    {
        return view('livewire.inc.header', [
            'services' => $this->services,
        ]);
    }
}