<?php

namespace App\Services\Backend;

use App\Repositories\CarouselRepository;

class CarouselService
{
    public function __construct(
        private CarouselRepository $carouselRepository
    ) {
    }

    public function findAll()
    {
        return $this->carouselRepository->findAll();
    }

    public function create($request)
    {
        $carousel = [
            'name' => $request['name'],
            'link' => $request['link'],
            'status' => $request['status'],
            'sort' => $request['sort'],
        ];

        return $this->carouselRepository->create($carousel);
    }

    public function update($id, $request)
    {
        return $this->carouselRepository->update($id, $request);
    }

    public function delete($id)
    {
        return $this->carouselRepository->delete($id);
    }
}