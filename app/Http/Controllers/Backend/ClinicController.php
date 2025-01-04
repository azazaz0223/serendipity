<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\CreateClinicRequest;
use App\Http\Requests\Backend\UpdateClinicRequest;
use App\Models\Clinic;
use App\Services\Backend\ClinicService;
use Illuminate\Http\Request;

class ClinicController extends Controller
{
    public function __construct(
        private ClinicService $clinicService,
    ) {
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clinics = $this->clinicService->findAll();
        return view("backend.clinic.list", compact('clinics'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateClinicRequest $request)
    {
        $this->clinicService->create($request->all());

        return $this->successResponse(null, 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(Clinic $clinic)
    {
        $clinic->load('businessHours');

        return $this->successResponse($clinic, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateClinicRequest $request, Clinic $clinic)
    {
        $this->clinicService->update($clinic, $request->all());

        return $this->successResponse(null, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Clinic $clinic)
    {
        $this->clinicService->delete($clinic->id);

        return $this->successResponse(null, 200);
    }
}
