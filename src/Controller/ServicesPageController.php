<?php

namespace App\Controller;

use App\Repository\ServicesPageRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ServicesPageController extends AbstractController
{
    #[Route('/servicesPage', name: 'app_services_page')]
    public function index(ServicesPageRepository $servicesPageRepository): Response
    {
        return $this->render('services_page/index.html.twig', [
            'servicesPage' => $servicesPageRepository->findAll(),
        ]);
    }
}
