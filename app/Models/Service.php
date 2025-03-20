<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    // Danh sách các trường có thể gán hàng loạt
    protected $fillable = [
        'slug',
        'name',
        'title',        // Thêm trường title
        'image',        // Thêm trường image
        'short_desc',   // Thêm trường short_desc
        'content',      // Thêm trường content
        'views',        // Thêm trường views
    ];

    // Nếu bạn cần thêm các phương thức tùy chỉnh, có thể thêm ở đây
}