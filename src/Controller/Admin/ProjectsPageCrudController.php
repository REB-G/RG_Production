<?php

namespace App\Controller\Admin;

use App\Entity\ProjectsPage;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class ProjectsPageCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return ProjectsPage::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('Page réalisations')
            ->setPageTitle('index', 'Page réalisations');
    }
    
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')
                ->hideOnForm(),
            TextField::new('pageTitle', 'Titre de la page'),
            TextareaField::new('pageText', 'Texte de la page'),
        ];
    }
}
