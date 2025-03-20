<?php
namespace App\Livewire;

use Livewire\Component;
use App\Models\Service; // Đảm bảo import mô hình Service

class Services extends Component
{
    public $services; // Khai báo thuộc tính để lưu danh sách dịch vụ

    public function mount() // Phương thức mount sẽ tự động được gọi khi component được khởi tạo
    {
        $this->services = Service::all(); // Lấy tất cả dịch vụ
    }

    public function render()
    {
        return view('livewire.services', [
            'services' => $this->services, // Truyền danh sách dịch vụ vào view
        ]);
    }
}