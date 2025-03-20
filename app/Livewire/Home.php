<?php

namespace App\Livewire;

use App\Models\Service;
use Livewire\Component;

class Home extends Component
{
    public $services; // Khai báo thuộc tính để lưu danh sách dịch vụ

    public function mount() // Phương thức mount sẽ tự động được gọi khi component được khởi tạo
    {
        $this->services = Service::all(); // Lấy tất cả dịch vụ
    }

    public function render()
    {
        return view('livewire.home');
    }
}
