<?php

namespace App\Services\Backend;

use App\Repositories\ShareExperienceRepository;

class ShareExperienceService
{
    public function __construct(
        private ShareExperienceRepository $shareExperienceRepository
    ) {
    }

    public function findAll()
    {
        return $this->shareExperienceRepository->findAll();
    }

    public function create($request)
    {
        $shareExperience = [
            'title' => $request['title'],
            'type' => $request['type'],
            'treatment_duration' => $request['treatment_duration'],
            'experience' => $request['experience'],
            'status' => $request['status'],
            'sort' => $request['sort'],
        ];

        return $this->shareExperienceRepository->create($shareExperience);
    }

    public function update($id, $request)
    {
        return $this->shareExperienceRepository->update($id, $request);
    }

    public function delete($id)
    {
        return $this->shareExperienceRepository->delete($id);
    }
}