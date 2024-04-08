<?php

namespace App\Controller\Admin;

use App\Entity\Enterprise;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class EnterpriseCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Enterprise::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('Entreprise')
            ->setPageTitle('index', 'Entreprise');
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')
                ->hideOnForm(),
            TextField::new('phoneNumber', 'Numéro de téléphone'),
            TextField::new('mail', 'Adresse email'),
        ];
    }
}
