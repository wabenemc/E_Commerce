<?php

namespace App\DataFixtures;

use App\DataFixtures\AbstractFixtures;
use App\Entity\Category;
use Doctrine\Persistence\ObjectManager;
class CategoryFixtures extends AbstractFixtures
{
 public function load(ObjectManager $manager)
 {

 for ($i = 0; $i < 10; $i ++) {

 $category = new Category();
 
 $category->setTitle($this->faker->word());
 $category->setSlug($this->faker->word());
 $manager->persist($category);
 $this->setReference('category_' . $i, $category);

 }
 $manager->flush();
 }
}