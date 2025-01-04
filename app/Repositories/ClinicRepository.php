<?php

namespace App\Repositories;

use App\Models\Clinic;
use Illuminate\Support\Facades\DB;

class ClinicRepository
{
    public function findAll()
    {
        return Clinic::orderBy('sort', 'asc')->paginate(10);
    }

    public function create($clinic, $business_hours)
    {
        try {
            $clinic = Clinic::create($clinic);

            foreach ($business_hours as $hour) {
                $clinic->businessHours()->create([
                    'day' => $hour['day'],
                    'time' => $hour['time'],
                ]);
            }

            return true;
        } catch (\Exception $e) {
            return $e;
        }
    }

    public function update($clinic, $update_clinic, $business_hours)
    {
        try {
            Clinic::where('id', $clinic->id)->update($update_clinic);
            $clinic->businessHours()->delete();

            foreach ($business_hours as $hour) {
                $clinic->businessHours()->create([
                    'day' => $hour['day'],
                    'time' => $hour['time'],
                ]);
            }

        } catch (\Exception $e) {
            return false;
        }
    }

    public function delete($id)
    {
        try {
            Clinic::destroy($id);

            return true;
        } catch (\Exception $e) {
            return false;
        }
    }
}

