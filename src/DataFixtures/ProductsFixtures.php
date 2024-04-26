<?php

namespace App\DataFixtures;

use App\DataFixtures\AbstractFixtures;

use APP\Entity\Orders;
use App\Entity\Products;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;
class ProductsFixtures extends AbstractFixtures  implements DependentFixtureInterface
{

    public function getDependencies()
 {
 return [
CategoryFixtures::class,
];
 }

 public function load(ObjectManager $manager)
 {
 for ($i = 0; $i < 10; $i ++) {
 $product = new  Products();

 $product->setAvailable($this->faker->boolean());
 $product->setDescription($this->faker->text());
 $product->setTaille($this->faker->numberBetween(0,50));
 $product->setPrice($this->faker->numberBetween(1,10));
 $product->setStock($this->faker->numberBetween(0,10));
 $product->setUpdatedAt($this->faker->dateTime());
 $product->setCategory($this->getReference("category_" . $this->faker->numberBetween(0,9)));

 $manager->persist($product);
 }
 $manager->flush();
 }
}