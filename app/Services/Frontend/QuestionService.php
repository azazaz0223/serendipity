<?php

namespace App\Services\Frontend;

use App\Repositories\QuestionRepository;

class QuestionService
{
    public function __construct(
        private QuestionRepository $questionRepository
    ) {
    }

    public function findAll()
    {
        return $this->questionRepository->findAllForFrontend();
    }
}