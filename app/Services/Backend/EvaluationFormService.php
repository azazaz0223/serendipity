<?php

namespace App\Services\Backend;

use App\Repositories\EvaluationFormRepository;

class EvaluationFormService
{
    public function __construct(
        private UploadImageService $uploadImageService,
        private EvaluationFormRepository $evaluationFormRepository,
    ) {
    }

    public function findAll($request)
    {
        return $this->evaluationFormRepository->findAll($request);
    }

    public function create($request)
    {
        $data = [
            'name' => $request['name'],
            'gender' => $request['gender'],
            'phone' => $request['phone'],
            'email' => $request['email'],
            'question' => $request['question'],
            'improvements' => $request['improvements'],
            'status' => $request['status'],
            'notes' => $request['notes'],
        ];

        $evaluationForm = $this->evaluationFormRepository->create($data);

        for ($i = 1; $i <= 4; $i++) {
            $fileKey = "intraoral_image_{$i}";
            if ($request->hasFile($fileKey) && $request->file($fileKey)->isValid()) {
                $data[$fileKey] = $this->uploadImageService->uploadImage($evaluationForm->id . "_" . $fileKey, 'evaluationForm', $request->file($fileKey));
            }
        }

        return $this->evaluationFormRepository->update($evaluationForm->id, $data);
    }

    public function update($id, $request)
    {
        $data = [
            'name' => $request['name'],
            'gender' => $request['gender'],
            'phone' => $request['phone'],
            'email' => $request['email'],
            'question' => $request['question'],
            'improvements' => $request['improvements'],
            'status' => $request['status'],
            'notes' => $request['notes'],
        ];

        for ($i = 1; $i <= 4; $i++) {
            $fileKey = "intraoral_image_{$i}";
            if ($request->hasFile($fileKey) && $request->file($fileKey)->isValid()) {
                $data[$fileKey] = $this->uploadImageService->uploadImage($id . "_" . $fileKey, 'evaluationForm', $request->file($fileKey));
            }
        }

        return $this->evaluationFormRepository->update($id, $data);
    }

    public function delete($id)
    {
        $is_deleted = $this->evaluationFormRepository->delete($id);

        if ($is_deleted) {

            for ($i = 1; $i <= 4; $i++) {
                $fileKey = "{$id}_intraoral_image_{$i}";
                $this->uploadImageService->deleteImage($fileKey, "evaluationForm");
            }
        }

        return $is_deleted;
    }
}