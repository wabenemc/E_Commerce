<?php

namespace App\DataFixtures;

use App\DataFixtures\AbstractFixtures;
use APP\Entity\Orders;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;
class OrdersFixtures extends AbstractFixtures implements DependentFixtureInterface

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
 $order = new Orders();

 $order->setDate($this->faker->dateTimeBetween('-1 years', 'now'));
 $order->setNumber($this->faker->number());
 $order->setUser($this->getReference("user_" . $this->faker->numberBetween(0,9)));

 $manager->persist($order);
 }
 $manager->flush();
 }
}