<?php

namespace App\Services\Backend;

use App\Repositories\IndexSettingRepository;

class IndexSettingService
{
    public function __construct(
        private UploadImageService $uploadImageService,
        private IndexSettingRepository $indexSettingRepository,
    ) {
    }

    public function findOne()
    {
        return $this->indexSettingRepository->findOne();
    }

    public function update($id, $request)
    {
        $data = [];
        switch ($request['param']) {
            case 'subtitle_suitable_plan':
                $data['subtitle_suitable_plan'] = $request['subtitle_suitable_plan'];
                break;

            case 'steps':
                $data['subtitle_four_steps'] = $request['subtitle_four_steps'];
                for ($i = 1; $i <= 4; $i++) {
                    $data["step_{$i}_phase"] = $request["step_{$i}_phase"];
                    $data["step_{$i}_price"] = $request["step_{$i}_price"];
                    $data["step_{$i}_description"] = $request["step_{$i}_description"];
                    $fileKey = "step_{$i}_button";
                    if ($request->hasFile($fileKey) && $request->file($fileKey)->isValid()) {
                        $data[$fileKey] = $this->uploadImageService->uploadSvg($fileKey, 'indexSetting', $request->file($fileKey));
                    }
                }

                break;

            case 'plan':
                $data['subtitle_suitable_aligners'] = $request['subtitle_suitable_aligners'];
                for ($i = 1; $i <= 3; $i++) {
                    $data["plan_{$i}_name"] = $request["plan_{$i}_name"];
                    $data["plan_{$i}_price"] = $request["plan_{$i}_price"];
                    $data["plan_{$i}_severity"] = $request["plan_{$i}_severity"];
                    $data["plan_{$i}_region"] = $request["plan_{$i}_region"];
                    $data["plan_{$i}_treatment"] = $request["plan_{$i}_treatment"];
                    $data["plan_{$i}_description"] = $request["plan_{$i}_description"];
                }
                break;

            case 'payment':
                $data['subtitle_payment_methods'] = $request['subtitle_payment_methods'];
                $data['payment_full_amount'] = $request['payment_full_amount'];
                for ($i = 1; $i <= 3; $i++) {
                    $data["payment_{$i}_name"] = $request["payment_{$i}_name"];
                    $data["payment_{$i}_price"] = $request["payment_{$i}_price"];
                    $data["payment_{$i}_description"] = $request["payment_{$i}_description"];
                }
                break;
        }

        return $this->indexSettingRepository->update($id, $data);
    }
}