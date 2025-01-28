<?php

namespace App\Services\Frontend;

use App\Repositories\CaseShareRepository;

class CaseShareService
{
    public function __construct(
        private CaseShareRepository $caseShareRepository,
    ) {
    }

    public function findAll()
    {
        return $this->caseShareRepository->findAllForFrontend();
    }

    public function findMore($page)
    {
        return $this->caseShareRepository->findMoreForFrontend($page, 10);
    }
}