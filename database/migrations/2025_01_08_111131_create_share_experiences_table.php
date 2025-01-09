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
        Schema::create('share_experiences', function (Blueprint $table) {
            $table->id();
            $table->string('title')->comment('標題');
            $table->enum('type', ['short', 'long'])->comment('類型(短、長)');
            $table->string('treatment_duration')->comment('療程時間');
            $table->text('experience')->comment('心得');
            $table->string('avatar')->nullable()->comment('頭像');
            $table->boolean('status')->default(0)->comment('狀態');
            $table->integer('sort')->default(0)->comment('排序');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('share_experiences');
    }
};
