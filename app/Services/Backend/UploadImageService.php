<?php

namespace App\Services\Backend;

use Illuminate\Support\Facades\File;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;


class UploadImageService
{
    public function __construct(
        private $manager = new ImageManager(new Driver()),
    ) {
    }

    public function uploadImage($id, string $folder, $file)
    {
        $destinationPath = public_path("/upload/{$folder}");

        if (!file_exists($destinationPath)) {
            mkdir($destinationPath, 0777, true);
        }

        $image = $this->manager->read($file->getRealPath());

        $filename = $id . '.jpg';

        $image->save($destinationPath . "/" . $filename, 80);

        return "upload/{$folder}/" . $filename;
    }

    public function deleteImage($id, string $folder)
    {
        $fullPath = public_path("/upload/{$folder}/{$id}.*");

        $files = glob($fullPath);

        if ($files) {
            foreach ($files as $file) {
                if (File::exists($file)) {
                    File::delete($file);
                }
            }
        }
    }
}
