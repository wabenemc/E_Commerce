<?php

namespace App\Controller\Admin;

use App\Entity\Products;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class ProductsCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Products::class;
    }

    
    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('Produduit')
            ->setEntityLabelInPlural('Produits')
            ;
    }

    public function configureFields(string $pageName): iterable
{
    return [
      
        TextField::new('name')->setLabel('name'),
        TextField::new('taille')->setLabel('taille'),
        TextField::new('price')->setLabel('price'),
        TextField::new('updatedat')->setLabel('updatedat'),
       
    ];
}

    
}
   



