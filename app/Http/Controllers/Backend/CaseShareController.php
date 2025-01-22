<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\CreateCaseShareRequest;
use App\Http\Requests\Backend\FindCaseShareRequest;
use App\Http\Requests\Backend\UpdateCaseShareRequest;
use App\Models\CaseShare;
use App\Services\Backend\CaseShareService;

class CaseShareController extends Controller
{
    public function __construct(
        private CaseShareService $caseShareService,
    ) {
    }

    /**
     * Display a listing of the resource.
     */
    public function index(FindCaseShareRequest $request)
    {
        $caseShares = $this->caseShareService->findAll($request);
        return view("backend.caseShare.list", compact('caseShares'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("backend.caseShare.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateCaseShareRequest $request)
    {
        $this->caseShareService->create($request->all());

        return $this->successResponse(null, 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(CaseShare $caseShare)
    {
        return view("backend.caseShare.edit", compact('caseShare'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCaseShareRequest $request, CaseShare $caseShare)
    {
        $this->caseShareService->update($caseShare->id, $request->all());

        return $this->successResponse(null, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CaseShare $caseShare)
    {
        $this->caseShareService->delete($caseShare->id);

        return $this->successResponse(null, 200);
    }
}
