<?php

namespace App\Repositories;

use App\Models\EvaluationForm;

class EvaluationFormRepository
{
    public function findAll()
    {
        return EvaluationForm::orderByDesc('created_at')->paginate(10);
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

