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
        Schema::create('clinics', function (Blueprint $table) {
            $table->id();
            $table->string('name')->comment('名稱');
            $table->string('county')->comment('縣市');
            $table->string('district')->comment('行政區');
            $table->string('address')->comment('地址');
            $table->string('phone', 15)->nullable()->comment('電話');
            $table->string('line_id')->nullable()->comment('Line ID');
            $table->string('facebook')->nullable()->comment('Facebook 連結');
            $table->string('google_map')->nullable()->comment('Google Map 連結');
            $table->boolean('status')->default(0)->comment('狀態');
            $table->integer('sort')->default(0)->comment('排序');
            $table->timestamps();
        });

        Schema::create('clinic_business_hours', function (Blueprint $table) {
            $table->id(); // 主鍵
            $table->unsignedBigInteger('clinic_id');
            $table->string('day')->comment('週幾');
            $table->string('time')->comment('時間範圍');
            $table->timestamps();

            // 外鍵約束
            $table->foreign('clinic_id')->references('id')->on('clinics')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clinic_business_hours');
        Schema::dropIfExists('clinics');
    }
};
