<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Services\Frontend\CarouselService;
use App\Services\Frontend\IndexSettingService;
use App\Services\Frontend\QuestionService;
use App\Services\Frontend\ShareExperienceService;
use App\Services\VideoService;

class IndexController extends Controller
{
    public function __construct(
        private IndexSettingService $indexSettingService,
        private VideoService $videoService,
        private CarouselService $carouselService,
        private ShareExperienceService $shareExperienceService,
        private QuestionService $questionService,
    ) {
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $indexSetting = $this->indexSettingService->findOne();
        $videos = $this->videoService->findVideo();
        $carousels = $this->carouselService->findAll();
        $share_experiences = $this->shareExperienceService->findAll()->chunk(2);
        $questions = $this->questionService->findAll();
        return view('frontend.index.index', compact('indexSetting', 'videos', 'carousels', 'questions', 'share_experiences'));
    }
}
