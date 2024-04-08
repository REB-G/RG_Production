<?php

namespace App\Controller\Admin;

use App\Entity\Services;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use Vich\UploaderBundle\Form\Type\VichImageType;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class ServicesCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Services::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('Prestation')
            ->setEntityLabelInPlural('Prestations')
            ->setPageTitle('index', '%entity_label_singular%')
            ->setPaginatorPageSize(10)
            ->setDefaultSort(['id' => 'ASC']);
    }
    
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')
                ->hideOnForm(),
            TextField::new('title', 'Titre'),
            TextareaField::new('description', 'Texte'),
            TextField::new('imageFile')
                ->setFormType(VichImageType::class),
            ImageField::new('imageName', 'Image du post')
                ->setBasePath('/uploads/enterprise')
                ->onlyOnIndex(),
            IntegerField::new('price', 'Prix'),
        ];
    }
}
