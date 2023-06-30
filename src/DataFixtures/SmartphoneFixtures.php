<?php

namespace App\DataFixtures;

use App\Entity\Smartphone;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;


class SmartphoneFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {

        


        $manager->flush();
    }
    public function getDependencies()
    {
        return [
            MarkFixtures::class,
        ];
    }
}

