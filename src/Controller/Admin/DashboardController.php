<?php

namespace App\Controller\Admin;

use App\Entity\User;
use App\Entity\Posts;
use App\Entity\HomePage;
use App\Entity\Projects;
use App\Entity\Services;
use App\Entity\Enterprise;
use App\Entity\ContactPage;
use App\Entity\FormContact;
use App\Entity\ProjectsPage;
use App\Entity\ServicesPage;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;

class DashboardController extends AbstractDashboardController
{
    #[Route('/admin', name: 'admin')]
    public function index(): Response
    {
        return $this->render('admin/dashboard.html.twig');
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('RG Production')
            ->setFaviconPath("{{asset('build/images/logo_icon.ico')}}")
            ->renderContentMaximized();
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToDashboard('Dashboard', 'fa fa-home');
        yield MenuItem::linkToCrud('Entreprise', 'fas fa-list', Enterprise::class);
        yield MenuItem::linkToCrud('Administrateur', 'fas fa-users', User::class);
        yield MenuItem::linkToCrud('Page d\'accueil', 'fas fa-home', HomePage::class);
        yield MenuItem::linkToCrud('Page contact', 'fas fa-envelope', ContactPage::class);
        yield MenuItem::linkToCrud('Page réalisations', 'fas fa-images', ProjectsPage::class);
        yield MenuItem::linkToCrud('Page prestations', 'fas fa-cogs', ServicesPage::class);
        yield MenuItem::linkToCrud('Formulaires de contact', 'fas fa-envelope-open-text', FormContact::class);
        yield MenuItem::linkToCrud('Posts', 'fas fa-newspaper', Posts::class);
        yield MenuItem::linkToCrud('Réalisations', 'fas fa-images', Projects::class);
        yield MenuItem::linkToCrud('Prestations', 'fas fa-cogs', Services::class);
        yield MenuItem::linkToRoute('Site', 'fas fa-eye', 'app_home_page');
        yield MenuItem::linkToLogout('Se déconnecter', 'fa fa-sign-out');
    }
}
