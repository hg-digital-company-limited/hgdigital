<?php

namespace App\Livewire;

use App\Models\Service;
use App\Models\Blog; // Import model Blog
use Livewire\Component;

class Home extends Component
{
    public $services; // Khai báo thuộc tính để lưu danh sách dịch vụ
    public $latestBlogs; // Khai báo thuộc tính để lưu danh sách blog mới nhất

    public function mount() // Phương thức mount sẽ tự động được gọi khi component được khởi tạo
    {
        $this->services = Service::all(); // Lấy tất cả dịch vụ
        $this->latestBlogs = Blog::orderBy('created_at', 'desc')->take(5)->get(); // Lấy 5 blog mới nhất
    }

    public function render()
    {
        return view('livewire.home', [
            'latestBlogs' => $this->latestBlogs, // Truyền danh sách blog mới nhất vào view
        ]);
    }
}