<?php

namespace App\Controller\Admin;

use App\Entity\HomePage;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class HomePageCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return HomePage::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('Page d\'accueil')
            ->setPageTitle('index', 'Page d\'accueil');
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')
                ->hideOnForm(),
            TextField::new('pageTitle', 'Titre de la page'),
            TextField::new('aboutSectionTitle', 'Titre de la section "À propos"'),
            TextareaField::new('aboutSectionText', 'Texte de la section "À propos"'),
            TextField::new('servicesSectionTitle', 'Titre de la section "Services"'),
            TextareaField::new('servicesSectionText', 'Texte de la section "Services"'),
            TextField::new('projectsSectionTitle', 'Titre de la section "Réalisations"'),
            TextareaField::new('projectsSectionText', 'Texte de la section "Réalisations"'),
            TextField::new('contactSectionTitle', 'Titre de la section "Contact"'),
            TextareaField::new('contactSectionText', 'Texte de la section "Contact"'),
        ];
    }
}
