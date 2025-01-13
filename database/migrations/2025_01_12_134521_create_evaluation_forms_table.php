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
        Schema::create('evaluation_forms', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100)->comment('姓名');
            $table->enum('gender', ['male', 'female'])->nullable()->comment('性別');
            $table->string('phone', 10)->comment('手機');
            $table->string('email')->nullable()->comment('Email');
            $table->text('question')->comment('問題');
            $table->text('improvements')->nullable()->comment('想改善處');
            $table->string('intraoral_image_1')->nullable()->comment('口內圖1');
            $table->string('intraoral_image_2')->nullable()->comment('口內圖2');
            $table->string('intraoral_image_3')->nullable()->comment('口內圖3');
            $table->string('intraoral_image_4')->nullable()->comment('口內圖4');
            $table->tinyInteger('status')->default(0)->comment('狀態');
            $table->text('notes')->nullable()->comment('諮詢備註');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evaluation_forms');
    }
};
