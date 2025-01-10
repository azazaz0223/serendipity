<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\CreateShareExperienceRequest;
use App\Http\Requests\Backend\UpdateShareExperienceRequest;
use App\Models\ShareExperience;
use App\Services\Backend\ShareExperienceService;
use App\Services\Backend\UploadImageService;

class ShareExperienceController extends Controller
{
    public function __construct(
        private ShareExperienceService $shareExperienceService,
        private UploadImageService $uploadImageService,
    ) {
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $shareExperiences = $this->shareExperienceService->findAll();
        return view("backend.shareExperience.list", compact('shareExperiences'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateShareExperienceRequest $request)
    {
        $shareExperience = $this->shareExperienceService->create($request->all());

        $image_url = $this->uploadImageService->uploadImage($shareExperience->id, 'shareExperience', $request->file('avatar'));
        $this->shareExperienceService->update($shareExperience->id, ["avatar" => $image_url]);

        return $this->successResponse(null, 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(ShareExperience $shareExperience)
    {
        return $this->successResponse($shareExperience, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateShareExperienceRequest $request, ShareExperience $shareExperience)
    {
        $data = [
            'title' => $request['title'],
            'type' => $request['type'],
            'treatment_duration' => $request['treatment_duration'],
            'experience' => $request['experience'],
            'status' => $request['status'],
            'sort' => $request['sort'],
        ];

        $this->shareExperienceService->update($shareExperience->id, $data);

        if ($request->hasFile('avatar') && $request->file('avatar')->isValid()) {
            $this->uploadImageService->uploadImage($shareExperience->id, 'shareExperience', $request->file('avatar'));
        }
        return $this->successResponse(null, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ShareExperience $shareExperience)
    {
        $is_deleted = $this->shareExperienceService->delete($shareExperience->id);

        if ($is_deleted) {
            $this->uploadImageService->deleteImage($shareExperience->id, "shareExperience");
        }

        return $this->successResponse(null, 200);
    }
}
