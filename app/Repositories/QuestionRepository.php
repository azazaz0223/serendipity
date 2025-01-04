<?php

namespace App\Repositories;

use App\Models\Question;
use Illuminate\Support\Facades\DB;

class QuestionRepository
{
    public function findAll()
    {
        return Question::orderBy('sort', 'asc')->paginate(6);
    }

    public function create($request)
    {
        try {
            return Question::create($request);
        } catch (\Exception $e) {
            return false;
        }
    }

    public function update($id, $request)
    {
        try {
            return Question::where('id', $id)->update($request);
        } catch (\Exception $e) {
            return false;
        }
    }

    public function delete($id)
    {
        try {
            Question::destroy($id);

            return true;
        } catch (\Exception $e) {
            return false;
        }
    }
}

