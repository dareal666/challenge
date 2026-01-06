<?php

namespace App\Http\Controllers;

use App\Services\JokeService;
use Illuminate\View\View;

class JokesController extends Controller
{
    public function __construct(private JokeService $jokeService)
    {}

    public function index(): View
    {
        return view('index', ['randomJokes' => $this->jokeService->get()]);
    }
}
