<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;

class DefaultController
{
    public function index(): JsonResponse
    {
        return new JsonResponse([
            [
                'id' => 1,
                'title' => 'test inutile',
                'completed' => false,
            ], [
                'id' => 2,
                'title' => 'test utile',
                'completed' => false,
            ], [
                'id' => 3,
                'title' => 'je m\'ennuie',
                'completed' => false,
            ], [
                'id' => 4,
                'title' => 'c\'est la pôse',
                'completed' => false,
            ],
        ], 200, ['Access-Control-Allow-Origin' => '*']);
    }
}

