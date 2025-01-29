<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\FindMoreCaseShareRequest;
use App\Models\CaseShare;
use App\Services\Frontend\CaseShareService;
use Illuminate\Http\Request;

class CaseShareController extends Controller
{
    public function __construct(
        private CaseShareService $caseShareService,
    ) {
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $filter = $request->input('filter', 'latest');
        $caseShares = $this->caseShareService->findAll($filter);
        return view('frontend.caseShare.index', compact('caseShares'));
    }

    public function more(FindMoreCaseShareRequest $request)
    {
        $filter = $request->input('filter', 'latest');
        $data = $this->caseShareService->findMore($request['page'], $filter);
        return $this->successResponse($data, 200);
    }


    /**
     * Display the specified resource.
     */
    public function show(CaseShare $caseShare)
    {
        $caseShare->increment('views');
        return view('frontend.caseShare.detail', compact('caseShare'));
    }
}
