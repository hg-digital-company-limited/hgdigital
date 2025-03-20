<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Service as ServiceModel; // Đảm bảo import mô hình Service

class Service extends Component
{
    public $slug; // Thêm thuộc tính slug
    public $service; // Thêm thuộc tính để lưu dịch vụ

    public function mount($slug) // Sử dụng mount để lấy slug từ route
    {
        $this->slug = $slug;
        $this->service = ServiceModel::where('slug', $this->slug)->first(); // Tìm dịch vụ theo slug
    }

    public function render()
    {
        return view('livewire.service', [
            'service' => $this->service, // Truyền dịch vụ vào view
        ]);
    }
}