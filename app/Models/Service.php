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
    ];

    // Nếu bạn cần thêm các phương thức tùy chỉnh, có thể thêm ở đây
}