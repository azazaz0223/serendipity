<?php

namespace App\Repositories;

use App\Models\EvaluationForm;

class EvaluationFormRepository
{
    public function findAll($request)
    {
        $query = EvaluationForm::query();

        if (!empty($request['started_at'])) {
            $query->whereDate('created_at', '>=', $request['started_at']);
        }

        if (!empty($request['ended_at'])) {
            $query->whereDate('created_at', '<=', $request['ended_at']);
        }

        if ($request['status'] != "") {
            $query->where('status', $request['status']);
        }

        if (!empty($request['name'])) {
            $query->where('name', 'like', '%' . $request['name'] . '%');
        }

        if (!empty($request['email'])) {
            $query->where('email', 'like', '%' . $request['email'] . '%');
        }

        if (!empty($request['phone'])) {
            $query->where('phone', 'like', '%' . $request['phone'] . '%');
        }

        if (!empty($request['is_upload'])) {
            if ($request['is_upload'] == 1) {
                $query->where(function ($query) {
                    $query->whereNotNull('intraoral_image_1')
                        ->orWhereNotNull('intraoral_image_2')
                        ->orWhereNotNull('intraoral_image_3')
                        ->orWhereNotNull('intraoral_image_4');
                });
            } elseif ($request['is_upload'] == 0) {
                $query->whereNull('intraoral_image_1')
                    ->whereNull('intraoral_image_2')
                    ->whereNull('intraoral_image_3')
                    ->whereNull('intraoral_image_4');
            }
        }

        if (!empty($request['question'])) {
            $query->where('question', $request['question']);
        }


        return $query->orderByDesc('created_at')->paginate(10);
    }

    public function create($EvaluationForm)
    {
        try {
            return EvaluationForm::create($EvaluationForm);
        } catch (\Exception $e) {
            return $e;
        }
    }

    public function update($id, $request)
    {
        try {
            return EvaluationForm::where('id', $id)->update($request);
        } catch (\Exception $e) {
            return false;
        }
    }

    public function delete($id)
    {
        try {
            EvaluationForm::destroy($id);

            return true;
        } catch (\Exception $e) {
            return false;
        }
    }
}

