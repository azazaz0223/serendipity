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

        $caseShare = $this->caseShareRepository->create($data);

        $image_url = $this->uploadImageService->uploadImage($caseShare->id, 'caseShare', $request->file('image'));
        return $this->caseShareRepository->update($caseShare->id, ["image" => $image_url]);
    }

    public function update($caseShare, $request)
    {
        $data = [
            'title' => $request['title'],
            'publisher' => $request['publisher'],
            'summary' => $request['summary'],
            'sort' => $request['sort'],
            'status' => $request['status'],
            'content' => $request['content'],
        ];


        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $this->uploadImageService->uploadImage($caseShare->id, 'caseShare', $request->file('image'));
        }

        return $this->caseShareRepository->update($caseShare->id, $data);
    }

    public function delete($id)
    {
        return $this->caseShareRepository->delete($id);
    }
}