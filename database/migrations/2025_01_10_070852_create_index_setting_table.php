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
        Schema::create('index_setting', function (Blueprint $table) {
            $table->id();
            $table->string('subtitle_suitable_plan')->comment('我適合齒列矯正方案副標題');
            $table->string('subtitle_four_steps')->comment('齒列矯正4步驟副標題');

            for ($i = 1; $i <= 4; $i++) {
                $table->string("step_{$i}_phase")->comment("齒列矯正步驟{$i}階段");
                $table->text("step_{$i}_description")->comment("齒列矯正步驟{$i}說明");
                $table->unsignedInteger("step_{$i}_price")->comment("XXX齒列矯正步驟{$i}金額 (新台幣)");
                $table->string("step_{$i}_button")->comment("齒列矯正步驟{$i}按鈕");
            }

            $table->string('subtitle_suitable_aligners')->comment('哪一種隱形牙套矯正方案比較適合副標題');

            for ($i = 1; $i <= 3; $i++) {
                $table->string("plan_{$i}_name")->comment("哪一種隱形牙套矯正方案比較適合方案{$i}名稱");
                $table->unsignedInteger("plan_{$i}_price")->comment("哪一種隱形牙套矯正方案比較適合方案{$i}金額");
                $table->string("plan_{$i}_severity")->comment("哪一種隱形牙套矯正方案比較適合方案{$i}程度");
                $table->string("plan_{$i}_region")->comment("哪一種隱形牙套矯正方案比較適合方案{$i}區域");
                $table->string("plan_{$i}_treatment")->comment("哪一種隱形牙套矯正方案比較適合方案{$i}療程");
                $table->text("plan_{$i}_description")->comment("哪一種隱形牙套矯正方案比較適合方案{$i}說明");
            }

            $table->string('subtitle_payment_methods')->comment('付款方式副標題');

            for ($i = 1; $i <= 3; $i++) {
                $table->string("payment_{$i}_name")->comment("付款方式{$i}方案名稱");
                $table->unsignedInteger("payment_{$i}_price")->comment("付款方式{$i}金額");
                $table->text("payment_{$i}_description")->comment("付款方式{$i}說明");
            }

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('index_setting');
    }
};
