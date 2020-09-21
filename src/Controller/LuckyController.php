<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class LuckyController
{
    public function number($maxNumber): Response
    {
        $number = random_int(0, $maxNumber);

        return new Response(
            '<html><body>Lucky number: '.$number.'</body></html>'
        );
    }

    public function numberApi($maxNumber): Response
    {
        $number = random_int(0, $maxNumber);

        $result = [
            'number' => $number
        ];

        return new JsonResponse($result);
    }
}
