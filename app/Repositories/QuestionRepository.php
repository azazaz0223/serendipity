<?php

namespace App\Repositories;

use App\Models\Question;

class QuestionRepository
{
    public function findAll()
    {
        return Question::orderBy('sort', 'asc')->paginate(8);
    }

    public function findAllForFrontend()
    {
        return Question::where('status', 1)->orderBy('sort', 'asc')->limit(8)->get();
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

