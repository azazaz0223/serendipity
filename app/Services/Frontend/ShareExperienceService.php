<?php

namespace App\Services\Frontend;

use App\Repositories\ShareExperienceRepository;

class ShareExperienceService
{
    public function __construct(
        private ShareExperienceRepository $shareExperienceRepository
    ) {
    }

    public function findAll()
    {
        return $this->shareExperienceRepository->findAllForFrontend();
    }
}