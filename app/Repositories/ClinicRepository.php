<?php

namespace App\Repositories;

use App\Models\Clinic;

class ClinicRepository
{
    public function findAll()
    {
        return Clinic::orderBy('sort', 'asc')->paginate(10);
    }

    public function findAllForFrontend()
    {
        return Clinic::with('businessHours')->where('status', 1)->orderBy('sort', 'asc')->get();
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

            return $clinic;
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

    public function updateImage($id, $image)
    {
        try {
            Clinic::where('id', $id)->update($image);

            return true;
        } catch (\Exception $e) {
            return $e;
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

