<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IndexSetting extends Model
{
    use HasFactory;

    protected $fillable = [
        'subtitle_suitable_plan',
        'subtitle_four_steps',
        'step_1_phase',
        'step_1_description',
        'step_1_price',
        'step_1_button',
        'step_2_phase',
        'step_2_description',
        'step_2_price',
        'step_2_button',
        'step_3_phase',
        'step_3_description',
        'step_3_price',
        'step_3_button',
        'step_4_phase',
        'step_4_description',
        'step_4_price',
        'step_4_button',
        'subtitle_suitable_aligners',
        'plan_1_name',
        'plan_1_price',
        'plan_1_severity',
        'plan_1_region',
        'plan_1_treatment',
        'plan_1_description',
        'plan_2_name',
        'plan_2_price',
        'plan_2_severity',
        'plan_2_region',
        'plan_2_treatment',
        'plan_2_description',
        'plan_3_name',
        'plan_3_price',
        'plan_3_severity',
        'plan_3_region',
        'plan_3_treatment',
        'plan_3_description',
        'subtitle_payment_methods',
        'payment_full_amount',
        'payment_1_name',
        'payment_1_price',
        'payment_1_description',
        'payment_2_name',
        'payment_2_price',
        'payment_2_description',
        'payment_3_name',
        'payment_3_price',
        'payment_3_description',
    ];
}
