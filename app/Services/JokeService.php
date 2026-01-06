<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Collection;

class JokeService
{
    protected string $apiUrl;

    public function __construct()
    {
        $this->apiUrl = config('api.jokes_api');
    }

    public function get(): array
    {
        $response = Http::get($this->apiUrl);

        if ($response->successful()) {
            return Collect($response->json())->random(3)->values()->all();
        }

        return[];
    }
}
