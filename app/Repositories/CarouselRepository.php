<?php

namespace App\Repositories;

use App\Models\Carousel;

class CarouselRepository
{
    public function findAll()
    {
        return Carousel::orderBy('sort', 'asc')->paginate(6);
    }

    public function create($carousel)
    {
        try {
            return Carousel::create($carousel);
        } catch (\Exception $e) {
            return $e;
        }
    }

    public function update($id, $request)
    {
        try {
            return Carousel::where('id', $id)->update($request);
        } catch (\Exception $e) {
            return false;
        }
    }

    public function delete($id)
    {
        try {
            Carousel::destroy($id);

            return true;
        } catch (\Exception $e) {
            return false;
        }
    }
}

