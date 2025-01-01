<?php

namespace App\Services\Backend;

use App\Repositories\QuestionRepository;

class QuestionService
{
    public function __construct(
        private QuestionRepository $questionRepository
    ) {
    }

    public function findAll()
    {
        return $this->questionRepository->findAll();
    }

    public function update($id, $request)
    {
        return $this->questionRepository->update($id, $request);
    }

    public function delete($id)
    {
        return $this->questionRepository->delete($id);
    }
}