<?php

namespace App\Repositories;

use App\Models\CaseShare;

class CaseShareRepository
{
    public function findAll($request)
    {
        $query = CaseShare::query();

        if (!empty($request['started_at'])) {
            $query->whereDate('created_at', '>=', $request['started_at']);
        }

        if (!empty($request['ended_at'])) {
            $query->whereDate('created_at', '<=', $request['ended_at']);
        }

        if (!empty($request['publisher'])) {
            $query->where('publisher', 'like', '%' . $request['publisher'] . '%');
        }


        return $query->orderByDesc('created_at')->paginate(10);
    }

    public function create($EvaluationForm)
    {
        try {
            return CaseShare::create($EvaluationForm);
        } catch (\Exception $e) {
            return $e;
        }
    }

    public function update($id, $request)
    {
        try {
            return CaseShare::where('id', $id)->update($request);
        } catch (\Exception $e) {
            return false;
        }
    }

    public function delete($id)
    {
        try {
            CaseShare::destroy($id);

            return true;
        } catch (\Exception $e) {
            return false;
        }
    }
}

