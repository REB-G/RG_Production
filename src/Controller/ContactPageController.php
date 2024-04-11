<?php

namespace App\Controller;

use App\Repository\ContactPageRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ContactPageController extends AbstractController
{
    #[Route('/contactPage', name: 'app_contact_page')]
    public function index(ContactPageRepository $contactPageRepository): Response
    {
        return $this->render('contact_page/index.html.twig', [
            'contact_pages' => $contactPageRepository->findAll(),
        ]);
    }
}
