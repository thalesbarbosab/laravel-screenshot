<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Services\ScreenShotService;
use App\Http\Requests\ScreenShotRequest;

class ScreenShotController extends Controller
{
    private readonly ScreenShotService $screen_shot_service;

    public function __construct(ScreenShotService $screen_shot_service)
    {
        $this->screen_shot_service = $screen_shot_service;
    }

    public function index()
    {
        return view('screenshot.index');
    }

    public function store(ScreenShotRequest $request)
    {
        $base_64_image = $this->screen_shot_service->generate($request->url);
        return view('screenshot.created',['base_64_image'=>$base_64_image]);
    }
}
