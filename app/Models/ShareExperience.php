<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShareExperience extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'type',
        'treatment_duration',
        'experience',
        'avatar',
        'status',
        'sort',
    ];

    // 定義 ENUM 選項
    const TYPE_SHORT = 'short';
    const TYPE_LONG = 'long';

    const TYPES = [
        self::TYPE_SHORT => '短',
        self::TYPE_LONG => '長',
    ];
}
