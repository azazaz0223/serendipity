<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\EvaluationForm;
use App\Services\Backend\EvaluationFormService;
use App\Services\Backend\UploadImageService;
use Illuminate\Http\Request;

class EvaluationFormController extends Controller
{
    public function __construct(
        private EvaluationFormService $evaluationFormService,
        private UploadImageService $uploadImageService,
    ) {
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $evaluationForms = $this->evaluationFormService->findAll();
        return view("backend.evaluationForm.list", compact('evaluationForms'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("backend.evaluationForm.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $carousel = $this->evaluationFormService->create($request->all());

        $image_url = $this->uploadImageService->uploadImage($carousel->id, 'carousel', $request->file('image'));
        $this->evaluationFormService->update($carousel->id, ["image" => $image_url]);

        return $this->successResponse(null, 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(EvaluationForm $evaluationForm)
    {
        return $this->successResponse($evaluationForm, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, EvaluationForm $evaluationForm)
    {
        $data = [
            'name' => $request['name'],
            'link' => $request['link'],
            'status' => $request['status'],
            'sort' => $request['sort'],
        ];

        $this->evaluationFormService->update($evaluationForm->id, $data);

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $this->uploadImageService->uploadImage($evaluationForm->id, 'carousel', $request->file('image'));
        }
        return $this->successResponse(null, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(EvaluationForm $evaluationForm)
    {
        $is_deleted = $this->evaluationFormService->delete($evaluationForm->id);

        if ($is_deleted) {
            $this->uploadImageService->deleteImage($evaluationForm->id, "carousel");
        }

        return $this->successResponse(null, 200);
    }
}
