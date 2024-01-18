<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController{

    public function index(Request $request)
    {

        $response = new JsonResponse(['salut' => 'ca va']);
        return $response;
    }

    #[
        Route(
            path: '/blog',
            name: 'blog',
            methods: ["GET"],
            schemes: ["HTTPS"],
            )
    ]
    public function blog()
    {
        return new Response('Blog');
    }
}