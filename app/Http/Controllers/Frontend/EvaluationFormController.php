<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\CreateEvaluationFormRequest;
use App\Http\Requests\Frontend\UpdateEvaluationFormRequest;
use App\Models\EvaluationForm;
use App\Services\Frontend\EvaluationFormService;

class EvaluationFormController extends Controller
{
    public function __construct(
        private EvaluationFormService $evaluationFormService,
    ) {
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('frontend.evaluationForm.index');
    }

    public function variety()
    {
        return view('frontend.evaluationForm.variety');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateEvaluationFormRequest $request)
    {
        $evaluationForm = $this->evaluationFormService->create($request);

        return $this->successResponse($evaluationForm, 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(EvaluationForm $evaluationForm)
    {
        if ($evaluationForm->status > 0) {
            return redirect(route('frontend.index'));
        }
        return view("frontend.evaluationForm.detail", compact('evaluationForm'));
    }

    /**
     * Display the specified resource.
     */
    public function camera(EvaluationForm $evaluationForm)
    {
        if ($evaluationForm->status > 0) {
            return redirect(route('frontend.index'));
        }
        return view("frontend.evaluationForm.camera", compact('evaluationForm'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEvaluationFormRequest $request, EvaluationForm $evaluationForm)
    {
        $this->evaluationFormService->update($evaluationForm->id, $request);

        return $this->successResponse(null, 200);
    }
}
