<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\CreateQuestionRequest;
use App\Http\Requests\Backend\UpdateQuestionRequest;
use App\Models\Question;
use App\Services\Backend\QuestionService;

class QuestionController extends Controller
{
    public function __construct(
        private QuestionService $questionService,
    ) {
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $questions = $this->questionService->findAll();
        return view("backend.question.list", compact('questions'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateQuestionRequest $request)
    {
        $this->questionService->create($request->all());

        return $this->successResponse(null, 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(Question $question)
    {
        return $this->successResponse($question, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateQuestionRequest $request, Question $question)
    {
        $this->questionService->update($question->id, $request->all());

        return $this->successResponse(null, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Question $question)
    {
        $this->questionService->delete($question->id);

        return $this->successResponse(null, 200);
    }
}
