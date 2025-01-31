<?php

namespace App\Services\Frontend;

use App\Repositories\EvaluationFormRepository;
use App\Services\Backend\UploadImageService;
use Illuminate\Support\Facades\File;

class EvaluationFormService
{
    public function __construct(
        private UploadImageService $uploadImageService,
        private EvaluationFormRepository $evaluationFormRepository,
    ) {
    }

    public function create($request)
    {
        $data = [
            'name' => $request['name'],
            'phone' => $request['phone'],
            'email' => $request['email'],
            'question' => $request['question'],
            'improvements' => $request['improvements'],
        ];

        return $this->evaluationFormRepository->create($data);
    }

    public function update($id, $request)
    {
        $data['status'] = 1;

        foreach ($request->all() as $key => $value) {
            if (preg_match('/^intraoral_image_\d+$/', $key) && !empty($value)) {
                $imageBase64 = explode(',', $value)[1];
                $image = base64_decode($imageBase64);
                $fileName = $id . "_" . $key . ".jpg";

                $uploadPath = public_path('upload/evaluationForm');
                if (!File::exists($uploadPath)) {
                    File::makeDirectory($uploadPath, 0777, true);
                }

                $filePath = $uploadPath . '/' . $fileName;
                file_put_contents($filePath, $image);

                $data[$key] = $fileName;
            }
        }

        return $this->evaluationFormRepository->update($id, $data);
    }
}