<?php

namespace App\Services\Backend;

use App\Repositories\IndexSettingRepository;

class IndexSettingService
{
    public function __construct(
        private IndexSettingRepository $indexSettingRepository
    ) {
    }

    public function findAll()
    {
        return $this->indexSettingRepository->findAll();
    }

    public function update($id, $request)
    {
        return $this->indexSettingRepository->update($id, $request);
    }
}