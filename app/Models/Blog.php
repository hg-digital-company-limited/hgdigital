<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    // Chỉ định các trường có thể gán hàng loạt
    protected $fillable = [
        'slug',
        'title',
        'short_desc',
        'content',
        'banner',
        'views',
        'category_id',
    ];

    // Định nghĩa quan hệ với Category (nếu cần)
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}