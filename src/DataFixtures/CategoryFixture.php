<?php

namespace App\DataFixtures;

use App\DataFixtures\AbstractFixtures;
use App\Entity\Category;
use Doctrine\Persistence\ObjectManager;
class ProductFixtures extends AbstractFixtures
{
// La méthode "load" est imposé par la classe Fixture que la classe AbstractFixt
// C'est cette méthode qui permet de créer des fixtures
 public function load(ObjectManager $manager)
 {
// Une boucle de 10 pour générer 10 produits
 for ($i = 0; $i < 10; $i ++) {
// Instancie un objet Product avec un nom
 $category = new Category();
 $category->settitle($this->faker->word());
// Enregistre le produit fraîchement créé, à faire à chaque tour 
 $manager->persist($category);
 }
// Une fois la boucle terminée je persiste les produits fraîchement créé
 $manager->flush();
 }
}