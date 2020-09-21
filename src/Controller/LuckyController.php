<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LuckyController extends AbstractController
{
    /**
     * @Route("/lucky/number/{maxNumber<\d+>?100}", methods={"GET"})
     */
    public function number($maxNumber): Response
    {
        $number = random_int(0, $maxNumber);

        return $this->render('lucky/number.html.twig', [
            'number' => $number
        ]);
    }

    /**
     * @Route("/api/lucky/number/{maxNumber<\d+>?100}", methods={"GET"})
     */
    public function numberApi($maxNumber): Response
    {
        $number = random_int(0, $maxNumber);

        $result = [
            'number' => $number
        ];

        return new JsonResponse($result);
    }
}
