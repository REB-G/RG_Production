<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class LegalsPageController extends AbstractController
{
    #[Route('/mentions-legales', name: 'app_legals_page')]
    public function index(): Response
    {
        return $this->render('legals_page/legals.html.twig', [
        ]);
    }
}
