<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination; // Import trait WithPagination
use App\Models\Category;
use App\Models\Blog;

class Blogs extends Component
{
    use WithPagination; // Sử dụng trait WithPagination

    public $categories;
    public $topBlogs;

    public function mount()
    {
        // Lấy tất cả danh mục cùng với số lượng bài viết
        $this->categories = Category::withCount('blogs')->get();

        // Lấy 3 bài viết có views cao nhất
        $this->topBlogs = Blog::orderBy('views', 'desc')->take(3)->get();
    }

    public function render()
    {
        // Lấy 5 bài viết mỗi trang
        $blogs = Blog::paginate(5);

        return view('livewire.blogs', [
            'categories' => $this->categories,
            'blogs' => $blogs,
            'topBlogs' => $this->topBlogs,
        ]);
    }
}