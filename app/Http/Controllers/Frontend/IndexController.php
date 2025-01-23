<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Services\Frontend\IndexSettingService;

class IndexController extends Controller
{
    public function __construct(
        private IndexSettingService $indexSettingService,
    ) {
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $indexSetting = $this->indexSettingService->findOne();
        return view('frontend.index.index', compact('indexSetting'));
    }
}
