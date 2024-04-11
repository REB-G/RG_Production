<?php

namespace App\Controller;

use App\Repository\HomePageRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomePageController extends AbstractController
{
    #[Route('/', name: 'app_home_page')]
    public function index(HomePageRepository $homePageRepository): Response
    {
        return $this->render('home_page/index.html.twig', [
            'home_pages' => $homePageRepository->findAll(),
        ]);
    }
}
