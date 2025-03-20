<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id(); // Tạo trường id tự động
            $table->string('slug')->unique(); // Tạo trường slug, phải duy nhất
            $table->string('title'); // Tạo trường title kiểu chuỗi
            $table->text('short_desc'); // Tạo trường short_desc kiểu text
            $table->longText('content'); // Tạo trường content kiểu longText
            $table->string('banner'); // Tạo trường banner kiểu chuỗi
            $table->unsignedInteger('views')->default(0); // Tạo trường views kiểu số nguyên không dấu, mặc định là 0
            $table->foreignId('category_id')->constrained()->onDelete('cascade'); // Tạo trường category_id, liên kết với bảng categories

            $table->timestamps(); // Tạo các trường created_at và updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blogs'); // Xóa bảng blogs nếu có
    }
}