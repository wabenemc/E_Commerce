<?php

namespace App\DataFixtures;

use App\DataFixtures\AbstractFixtures;
use App\Entity\User;
use Doctrine\Persistence\ObjectManager;
class UserFixtures extends AbstractFixtures
{
 public function load(ObjectManager $manager)
 {
 for ($i = 0; $i < 5; $i ++) {
 $user = new User();

 $user->setName($this->faker->name());
 $user->setPassword($this->faker->password());
 $user->setEmail($this->faker->email());
 $this->setReference('User_' . $i, $user);

 $manager->persist($user);
 }
 $manager->flush();
 }
}