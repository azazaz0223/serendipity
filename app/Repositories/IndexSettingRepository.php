<?php

namespace App\Repositories;

use App\Models\IndexSetting;

class IndexSettingRepository
{
    public function findAll()
    {
        return IndexSetting::orderBy('sort', 'asc')->paginate(6);
    }

    public function update($id, $request)
    {
        try {
            return IndexSetting::where('id', $id)->update($request);
        } catch (\Exception $e) {
            return false;
        }
    }
}

