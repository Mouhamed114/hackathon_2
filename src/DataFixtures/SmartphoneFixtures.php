<?php

namespace App\DataFixtures;

use App\Entity\Smartphone;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;


class SmartphoneFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        
        

        $manager->flush();
    }
}
