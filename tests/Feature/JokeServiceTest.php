<?php

namespace Tests\Unit\Services;

use Tests\TestCase;
use App\Services\JokeService;
use Illuminate\Support\Facades\Http;

class JokeServiceTest extends TestCase
{
    public function test_get_returns_array_with_three_items(): void
    {
        Http::fake([
            '*' => Http::response([
                [
                    "type" => "programming",
                    "setup" => "Why do programmers prefer dark chocolate?",
                    "punchline" => "Because it's bitter like their code.",
                    "id" => 416
                ],
                [
                    "type" => "programming",
                    "setup" => "Why did the developer break up with their keyboard?",
                    "punchline" => "It just wasn't their type anymore.",
                    "id" => 447
                ],
                [
                    "type" => "programming",
                    "setup" => "Why did the developer go broke?",
                    "punchline" => "They kept spending all their cache.",
                    "id" => 438
                ],
                [
                    "type" => "programming",
                    "setup" => "An IPv6 packet is walking out of the house.",
                    "punchline" => "He goes nowhere.",
                    "id" => 367
                ],
                [
                    "type" => "programming",
                    "setup" => "Why did the developer go to therapy?",
                    "punchline" => "They had too many unresolved issues.",
                    "id" => 444
                ],
                [
                    "type" => "programming",
                    "setup" => "3 SQL statements walk into a NoSQL bar. Soon, they walk out",
                    "punchline" => "They couldn't find a table.",
                    "id" => 369
                ],
                [
                    "type" => "programming",
                    "setup" => "Why did the functions stop calling each other?",
                    "punchline" => "Because they had constant arguments.",
                    "id" => 406
                ],
                [
                    "type" => "programming",
                    "setup" => "If you put a million monkeys at a million keyboards, one of them will eventually write a Java program",
                    "punchline" => "The rest of them will write Perl",
                    "id" => 25
                ],
                [
                    "type" => "programming",
                    "setup" => "Which song would an exception sing?",
                    "punchline" => "Can't catch me - Avicii",
                    "id" => 32
                ],
                [
                    "type" => "programming",
                    "setup" => "What did the router say to the doctor?",
                    "punchline" => "It hurts when IP.",
                    "id" => 366
                ]
            ], 200),
        ]);

        $result = (new JokeService())->get();

        $this->assertCount(3, $result);
    }
}
