<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\CreateContactRequest;

class IndexController extends Controller
{
    public function __construct(
    ) {
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    }

    public function storeContact(CreateContactRequest $request)
    {
    }
}
