<?php

namespace App\Controller\Admin;

use App\Entity\Products;
use DateTime;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\MoneyField;
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use Faker\Core\Number;
use PhpParser\Node\Stmt\Label;
use Vich\UploaderBundle\Form\Type\VichImageType;

class ProductsCrudController extends AbstractCrudController 
{
    public static function getEntityFqcn(): string
    {
        return Products::class;
    }

    
    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('Produit')
            ->setEntityLabelInPlural('Produits')
            ;
    }

    public function configureFields(string $pageName): iterable
{
    return [
      
        TextField::new('name')->setLabel('Name')->setHelp('Nom de votre produit'),
        TextEditorField::new('description')->setLabel('Description')->setHelp('Description de votre produit'),
        // ImageField::new('imageFile')->setLabel('image')->setHelp('image du prduit en 600x600px')->setUploadDir('Public/Asset'),
        // NumberField::new('price')->setLabel('Prix')->setHelp('Prix H.T du produit sans le label sgle £'),
        // ChoiceField::new('tva')->setLabel('Tau de TVA')->setChoices([
        //     '10'=>'10',
        //     '20'=>'20',
        //     '50'=>'50',
        // ]),
        AssociationField::new('category', label:'Categorie associée'),
        DateField::new('updatedat', label:'Date'),
        TextField::new('available')->setLabel('Available'),
        TextField::new('description')->setLabel('Description')->setHelp('Description de votre produit'),
        NumberField::new('taille', label: 'Taille'),
        NumberField::new('stock', label:'Stocks'),
        TextField::new('slug')
        ->setLabel('URL')
        ->setHelp('URL de votre catégorie générée automatiquement'),
        TextField::new('imageFile')->setFormType(VichImageType::class)->onlyOnForms(),
        ImageField::new('imageName')->setBasePath('/assets/images/products')->setUploadDir('public')->onlyOnIndex(),
        MoneyField::new('price', label : 'Prix')->setCurrency('EUR')
        // TextField::new('slug')
        // ->setLabel('URL')
        // ->setHelp('URL de votre categorie générée automatiquement'),
];
        
}
   
}
   



