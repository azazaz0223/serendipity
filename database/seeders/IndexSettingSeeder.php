<?php

namespace Database\Seeders;

use App\Models\IndexSetting;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class IndexSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        IndexSetting::truncate();
        IndexSetting::insert([
            [
                'subtitle_suitable_plan' => '適合齒列矯正嗎?',
                'subtitle_four_steps' => 'XXX齒列矯正4步驟',

                'step_1_phase' => '第一階段',
                'step_1_description' => '說明1',
                'step_1_price' => 1000,
                'step_1_button' => '開始',

                'step_2_phase' => '第二階段',
                'step_2_description' => '說明2',
                'step_2_price' => 2000,
                'step_2_button' => '下一步',

                'step_3_phase' => '第三階段',
                'step_3_description' => '說明3',
                'step_3_price' => 3000,
                'step_3_button' => '完成',

                'step_4_phase' => '第四階段',
                'step_4_description' => '說明4',
                'step_4_price' => 4000,
                'step_4_button' => '確認',

                'subtitle_suitable_aligners' => '哪一種隱形牙套矯正方案比較適合',

                'plan_1_name' => '方案一',
                'plan_1_price' => 5000,
                'plan_1_severity' => '輕度',
                'plan_1_region' => '上排',
                'plan_1_treatment' => '3個月',
                'plan_1_description' => '適合輕度矯正',

                'plan_2_name' => '方案二',
                'plan_2_price' => 10000,
                'plan_2_severity' => '中度',
                'plan_2_region' => '上下排',
                'plan_2_treatment' => '6個月',
                'plan_2_description' => '適合中度矯正',

                'plan_3_name' => '方案三',
                'plan_3_price' => 15000,
                'plan_3_severity' => '重度',
                'plan_3_region' => '全口',
                'plan_3_treatment' => '12個月',
                'plan_3_description' => '適合重度矯正',

                'subtitle_payment_methods' => '付款方式',

                'payment_full_amount' => '一次付清',

                'payment_1_name' => '分期付款一',
                'payment_1_price' => 5000,
                'payment_1_description' => '三期付款',

                'payment_2_name' => '分期付款二',
                'payment_2_price' => 10000,
                'payment_2_description' => '六期付款',

                'payment_3_name' => '分期付款三',
                'payment_3_price' => 15000,
                'payment_3_description' => '十二期付款',

                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
        Schema::enableForeignKeyConstraints();
    }
}
