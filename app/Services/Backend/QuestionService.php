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

    public function create($request)
    {
        $data = [
            'title' => $request['title'],
            'answer' => $request['answer'],
            'status' => $request['status'],
            'sort' => $request['sort'],
        ];
        return $this->questionRepository->create($data);
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