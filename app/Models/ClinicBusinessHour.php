<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClinicBusinessHour extends Model
{
    use HasFactory;

    protected $fillable = [
        'clinic_id',
        'day',
        'time'
    ];

    public function clinic()
    {
        return $this->belongsTo(Clinic::class, 'clinic_id');
    }
}
