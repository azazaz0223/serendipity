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

    public function findAllForFrontend($filter)
    {
        $query = CaseShare::query()->where('status', 1);

        if ($filter == 'latest') {
            $query->orderBy('sort', 'asc');
        } else {
            $query->orderBy('views', 'desc');
        }

        return $query->limit(5)->get();
    }

    public function findMoreForFrontend($page, $perPage, $filter)
    {
        $query = CaseShare::query()->where('status', 1);

        if ($filter == 'latest') {
            $query->orderBy('sort', 'asc');
        } else {
            $query->orderBy('views', 'desc');
        }

        return $query->skip(($page - 1) * $perPage)
            ->take($perPage)
            ->get();
    }

    public function create($caseShare)
    {
        try {
            return CaseShare::create($caseShare);
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

