<?php

namespace App\Controller;

use App\Repository\ProjectsPageRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ProjectsPageController extends AbstractController
{
    #[Route('/projectsPage', name: 'app_projects_page')]
    public function index(ProjectsPageRepository $projectsPageRepository): Response
    {
        return $this->render('projects_page/index.html.twig', [
            'projectsPages' => $projectsPageRepository->findAll(),
        ]);
    }
}
