<?php

namespace App\Services\Backend;

use App\Repositories\EvaluationFormRepository;

class EvaluationFormService
{
    public function __construct(
        private EvaluationFormRepository $evaluationFormRepository
    ) {
    }

    public function findAll()
    {
        return $this->evaluationFormRepository->findAll();
    }

    public function create($request)
    {
        $carousel = [
            'name' => $request['name'],
            'link' => $request['link'],
            'status' => $request['status'],
            'sort' => $request['sort'],
        ];

        return $this->evaluationFormRepository->create($carousel);
    }

    public function update($id, $request)
    {
        return $this->evaluationFormRepository->update($id, $request);
    }

    public function delete($id)
    {
        return $this->evaluationFormRepository->delete($id);
    }
}