<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    // Chỉ định các trường có thể gán hàng loạt
    protected $fillable = [
        'name',
    ];

    // Định nghĩa mối quan hệ với Blog
    public function blogs()
    {
        return $this->hasMany(Blog::class);
    }
}