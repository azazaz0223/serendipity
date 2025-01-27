<?php

namespace App\Services\Frontend;

use App\Repositories\ClinicRepository;

class ClinicService
{
    public function __construct(
        private ClinicRepository $clinicRepository
    ) {
    }

    public function findAll()
    {
        return $this->clinicRepository->findAllForFrontend();
    }
}