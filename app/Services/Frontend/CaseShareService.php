<?php

namespace App\Services\Frontend;

use App\Repositories\CaseShareRepository;

class CaseShareService
{
    public function __construct(
        private CaseShareRepository $caseShareRepository,
    ) {
    }

    public function findAll($filter)
    {
        return $this->caseShareRepository->findAllForFrontend($filter);
    }

    public function findMore($page, $filter)
    {
        return $this->caseShareRepository->findMoreForFrontend($page, 10, $filter);
    }
}