<?php

namespace App\Controller\Admin;

use App\Entity\ContactPage;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class ContactPageCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return ContactPage::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('Page contact')
            ->setPageTitle('index', 'Page contact');
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
