<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('case_shares', function (Blueprint $table) {
            $table->id();
            $table->string('title')->comment('標題');
            $table->string('publisher')->comment('發布者');
            $table->string('summary')->nullable()->comment('摘要');
            $table->string('image')->nullable()->comment('圖片');
            $table->unsignedBigInteger('views')->default(0)->comment('瀏覽次數');
            $table->integer('sort')->default(0)->comment('排序');
            $table->boolean('status')->default(0)->comment('狀態');
            $table->text('content')->comment('內容');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('case_shares');
    }
};
