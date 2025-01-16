<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CaseShare extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'publisher',
        'summary',
        'sort',
        'status',
        'content',
    ];
}
