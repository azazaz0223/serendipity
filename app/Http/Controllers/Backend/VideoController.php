<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\SaveVideoRequest;
use App\Services\Backend\VideoService;

class VideoController extends Controller
{
    public function __construct(
        private VideoService $videoService,
    ) {
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $videos = $this->videoService->findVideo();

        return view("backend.video.index", compact("videos"));
    }

    /**
     * Save the video from storage.
     */
    public function save(SaveVideoRequest $request)
    {
        $this->videoService->saveVideo($request->file('video'));

        return $this->successResponse(null, 200);
    }
}
