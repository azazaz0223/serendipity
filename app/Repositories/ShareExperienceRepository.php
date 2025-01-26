<?php

namespace App\Repositories;

use App\Models\Carousel;
use App\Models\ShareExperience;

class ShareExperienceRepository
{
    public function findAll()
    {
        return ShareExperience::orderBy('sort', 'asc')->paginate(6);
    }
    public function findAllForFrontend()
    {
        return ShareExperience::where('status', 1)->orderBy('sort', 'asc')->limit(6)->get();
    }

    public function create($shareExperience)
    {
        try {
            return ShareExperience::create($shareExperience);
        } catch (\Exception $e) {
            return $e;
        }
    }

    public function update($id, $request)
    {
        try {
            return ShareExperience::where('id', $id)->update($request);
        } catch (\Exception $e) {
            return false;
        }
    }

    public function delete($id)
    {
        try {
            ShareExperience::destroy($id);

            return true;
        } catch (\Exception $e) {
            return false;
        }
    }
}

