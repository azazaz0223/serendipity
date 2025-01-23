<?php

namespace App\Repositories;

use App\Models\IndexSetting;

class IndexSettingRepository
{
    public function findOne()
    {
        return IndexSetting::find('1');
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

