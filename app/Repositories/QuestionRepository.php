<?php

namespace App\Repositories;

use App\Models\Question;
use Illuminate\Support\Facades\Hash;

class QuestionRepository
{
    public function findAll()
    {
        return Question::orderBy('sort', 'asc')->paginate(20);
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

