<?php

namespace App\Services\Frontend;

use App\Repositories\CarouselRepository;

class CarouselService
{
    public function __construct(
        private CarouselRepository $carouselRepository
    ) {
    }

    public function findAll()
    {
        return $this->carouselRepository->findAllForFrontend();
    }
}