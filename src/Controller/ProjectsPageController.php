<?php

namespace App\Controller;

use App\Repository\ProjectsPageRepository;
use App\Repository\ProjectsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ProjectsPageController extends AbstractController
{
    #[Route('/realisations', name: 'app_projects_page', options: ['sitemap' => ['section' => 'realisations']])]
    public function index(ProjectsPageRepository $projectsPageRepository, ProjectsRepository $projectsRepository): Response
    {
        return $this->render('projects_page/index.html.twig', [
            'projectsPages' => $projectsPageRepository->findAll(),
            'projects' => $projectsRepository->findAll(),
        ]);
    }
}
