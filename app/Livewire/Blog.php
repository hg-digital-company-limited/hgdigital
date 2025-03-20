<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Blog as BlogModel; // Import model Blog
use App\Models\Category;
class Blog extends Component
{
    public $slug; // Biến để lưu slug
    public $blog; // Biến để lưu bài viết
    public $categories;
    public $topBlogs;
    public function mount($slug) // Nhận slug từ route
    {
        $this->slug = $slug;
        $this->blog = BlogModel::where('slug', $slug)->firstOrFail(); // Lấy bài viết theo slug

        // Tăng lượt xem
        $this->blog->increment('views'); // Tăng trường 'views' lên 1
           // Lấy tất cả danh mục cùng với số lượng bài viết
           $this->categories = Category::withCount('blogs')->get();

           // Lấy 3 bài viết có views cao nhất
           $this->topBlogs = BlogModel::orderBy('views', 'desc')->take(3)->get();
    }

    public function render()
    {
        return view('livewire.blog', [
            'blog' => $this->blog, // Chuyển bài viết đến view
        ]);
    }
}
