<?php

namespace App\Controller;

use App\Service\SomeService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomepageController extends AbstractController
{
    /**
     * @Route("/homepage", name="homepage")
     */
    public function index(SomeService $service): Response
    {
        return $this->render('homepage/index.html.twig', [
            'controller_name' => 'HomepageController',
        ]);
    }
}
