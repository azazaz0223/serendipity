<?php

namespace App\Services\Backend;
use Illuminate\Support\Facades\File;

class VideoService
{

    public function findVideo()
    {
        $videoPath = public_path('upload/video');
        $videos = [];

        if (File::exists($videoPath)) {
            $files = File::files($videoPath);
            foreach ($files as $file) {
                $videos[] = asset('upload/video/' . $file->getFilename());
            }
        }

        return $videos;
    }

    public function saveVideo($file)
    {
        try {
            $destinationPath = public_path("/upload/video");

            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0777, true);
            }

            $this->deleteVideo($destinationPath);

            $extension = $file->getClientOriginalExtension();
            $fileName = "video." . $extension;

            $file->move($destinationPath, $fileName);

            return true;
        } catch (\Exception $e) {
            return false;
        }
    }

    public function deleteVideo($path)
    {
        $files = glob($path);

        if (File::exists($path)) {
            $files = File::files($path);
            foreach ($files as $file) {
                File::delete($file);
            }
        }
    }
}