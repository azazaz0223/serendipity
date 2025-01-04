<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clinic extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'county',
        'district',
        'address',
        'phone',
        'line_id',
        'facebook',
        'google_map',
        'status',
        'sort',
    ];

    public function businessHours()
    {
        return $this->hasMany(ClinicBusinessHour::class, 'clinic_id');
    }
}
