<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\FindMoreCaseShareRequest;
use App\Models\CaseShare;
use App\Services\Frontend\CaseShareService;

class CaseShareController extends Controller
{
    public function __construct(
        private CaseShareService $caseShareService,
    ) {
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $caseShares = $this->caseShareService->findAll();
        return view('frontend.caseShare.index', compact('caseShares'));
    }

    public function more(FindMoreCaseShareRequest $request)
    {
        $data = $this->caseShareService->findMore($request['page']);
        return $this->successResponse($data, 200);
    }

    public function show(CaseShare $caseShare)
    {
        return view('frontend.caseShare.detail', compact('caseShare'));
    }
}
