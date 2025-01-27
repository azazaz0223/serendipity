<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Services\Frontend\ClinicService;

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
        return view('frontend.clinic.index', compact('clinics'));
    }
}
