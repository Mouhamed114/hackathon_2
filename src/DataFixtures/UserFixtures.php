<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\User;

class UserFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $user = new User();
        $user->setEmail('toto@gmail.com');
        $user->setRoles(['ROLE_USER']);
        $user->setPassword('toto');

       

        $manager->persist($user);
        $manager->flush();
    }
}
