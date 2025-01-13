<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EvaluationForm extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'gender',
        'phone',
        'email',
        'question',
        'improvements',
        'intraoral_image_1',
        'intraoral_image_2',
        'intraoral_image_3',
        'intraoral_image_4',
        'status',
        'notes',
    ];

    public const STATUS_PENDING = 0;
    public const STATUS_NOT_REPLIED = 1;
    public const STATUS_CONTACTED = 2;
    public const STATUS_BOOKED = 3;

    public const STATUS = [
        self::STATUS_PENDING => '申請中',
        self::STATUS_NOT_REPLIED => '未回覆',
        self::STATUS_CONTACTED => '已連繫',
        self::STATUS_BOOKED => '已預約',
    ];
}
