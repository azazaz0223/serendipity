<?php

namespace App\Services\Backend;

use App\Repositories\ClinicRepository;

class ClinicService
{
    public function __construct(
        private ClinicRepository $clinicRepository
    ) {
    }

    public function findAll()
    {
        return $this->clinicRepository->findAll();
    }

    public function create($request)
    {
        $clinic = [
            'name' => $request['name'],
            'county' => $request['county'],
            'district' => $request['district'],
            'address' => $request['address'],
            'phone' => $request['phone'],
            'line_id' => $request['line_id'],
            'facebook' => $request['facebook'],
            'google_map' => $request['google_map'],
            'status' => $request['status'],
            'sort' => $request['sort'],
        ];

        $business_hours = $request['business_hours'];

        return $this->clinicRepository->create($clinic, $business_hours);
    }

    public function update($clinic, $request)
    {
        $update_clinic = [
            'name' => $request['name'],
            'county' => $request['county'],
            'district' => $request['district'],
            'address' => $request['address'],
            'phone' => $request['phone'],
            'line_id' => $request['line_id'],
            'facebook' => $request['facebook'],
            'google_map' => $request['google_map'],
            'status' => $request['status'],
            'sort' => $request['sort'],
        ];

        $business_hours = $request['business_hours'];
        return $this->clinicRepository->update($clinic, $update_clinic, $business_hours);
    }

    public function delete($id)
    {
        return $this->clinicRepository->delete($id);
    }
}