<?php

namespace App\Services\Backend;

use App\Repositories\StaffRepository;

class StaffService
{
    public function __construct(
        private StaffRepository $StaffRepository
    ) {
    }

    public function update(string $staffId, $request)
    {
        return $this->StaffRepository->update($staffId, $request);
    }
}