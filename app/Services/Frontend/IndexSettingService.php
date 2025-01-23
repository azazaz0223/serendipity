<?php

namespace App\Services\Frontend;

use App\Repositories\IndexSettingRepository;

class IndexSettingService
{
    public function __construct(
        private IndexSettingRepository $indexSettingRepository,
    ) {
    }

    public function findOne()
    {
        return $this->indexSettingRepository->findOne();
    }
}