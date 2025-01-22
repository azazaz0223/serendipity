<?php

namespace App\Services\Backend;

use App\Repositories\CaseShareRepository;

class CaseShareService
{
    public function __construct(
        private UploadImageService $uploadImageService,
        private CaseShareRepository $caseShareRepository,
    ) {
    }

    public function findAll($request)
    {
        return $this->caseShareRepository->findAll($request);
    }

    public function create($request)
    {
        $data = [
            'title' => $request['title'],
            'publisher' => $request['publisher'],
            'summary' => $request['summary'],
            'sort' => $request['sort'],
            'status' => $request['status'],
            'content' => $request['content'],
        ];

        return $this->caseShareRepository->create($data);
    }

    public function update($id, $request)
    {
        $data = [
            'title' => $request['title'],
            'publisher' => $request['publisher'],
            'summary' => $request['summary'],
            'sort' => $request['sort'],
            'status' => $request['status'],
            'content' => $request['content'],
        ];

        return $this->caseShareRepository->update($id, $data);
    }

    public function delete($id)
    {
        return $this->caseShareRepository->delete($id);
    }
}