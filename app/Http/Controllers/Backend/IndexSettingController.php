<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\UpdateIndexSettingRequest;
use App\Models\IndexSetting;
use App\Services\Backend\IndexSettingService;

class IndexSettingController extends Controller
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
        return view("backend.indexSetting.index", compact('indexSetting'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateIndexSettingRequest $request, IndexSetting $indexSetting)
    {
        $this->indexSettingService->update($indexSetting->id, $request);

        return $this->successResponse(null, 200);
    }
}
