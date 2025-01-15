<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\CreateEvaluationFormRequest;
use App\Http\Requests\Backend\FindEvaluationFormRequest;
use App\Http\Requests\Backend\UpdateEvaluationFormRequest;
use App\Models\EvaluationForm;
use App\Services\Backend\EvaluationFormService;
use App\Services\Backend\UploadImageService;
use Illuminate\Http\Request;

class EvaluationFormController extends Controller
{
    public function __construct(
        private EvaluationFormService $evaluationFormService,
    ) {
    }

    /**
     * Display a listing of the resource.
     */
    public function index(FindEvaluationFormRequest $request)
    {
        $evaluationForms = $this->evaluationFormService->findAll($request);
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
    public function store(CreateEvaluationFormRequest $request)
    {
        $this->evaluationFormService->create($request);

        return $this->successResponse(null, 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(EvaluationForm $evaluationForm)
    {
        return view("backend.evaluationForm.edit", compact('evaluationForm'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEvaluationFormRequest $request, EvaluationForm $evaluationForm)
    {
        $this->evaluationFormService->update($evaluationForm->id, $request);

        return $this->successResponse(null, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(EvaluationForm $evaluationForm)
    {
        $this->evaluationFormService->delete($evaluationForm->id);

        return $this->successResponse(null, 200);
    }
}
