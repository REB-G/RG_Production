<?php

namespace App\Controller\Admin;

use App\Entity\FormContact;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\EmailField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class FormContactCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return FormContact::class;
    }

    public function configureActions(Actions $actions): Actions
    {
        return $actions
            ->remove(Crud::PAGE_INDEX, Action::NEW)
            ->remove(Crud::PAGE_INDEX, Action::EDIT);
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('Formulaire de contact')
            ->setEntityLabelInPlural('Formulaires de contact')
            ->setPageTitle('index', '%entity_label_singular%')
            ->setPaginatorPageSize(10)
            ->setDefaultSort(['id' => 'DESC']);
    }
    
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')
                ->hideOnForm(),
            TextField::new('name', 'Nom'),
            EmailField::new('email', 'E-mail'),
            TextField::new('phonenumber', 'Numéro de téléphone'),
            TextField::new('subject', 'Sujet'),
            TextareaField::new('message', 'Message'),
            DateTimeField::new('createdAt', 'Créé le')
                ->setFormTypeOption('disabled', true)
        ];
    }
}
