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
        $smartphones = [
            [
                'name' => 'Samsung Galaxy S20',
                'etat' => 'Neuf',
                'systeme' => 'Android',
                'stockage' => '128 Go',
                'ram' => '12 Go',
                'taille_ecran' => '6.7 pouces',
                'reseau' => '5G',
                'prix' => '999 €',
                'marque' => 'Samsung',
                'photo' => 'https://images.samsung.com/is/image/samsung/in-galaxy-s20-plus-sm-g985-sm-g985fzpdinu-frontbpurple-261486035?',
            ],
            [
                'name' => 'Samsung Galaxy Note 20 Ultra',
                'etat' => 'Neuf',
                'systeme' => 'Android',
                'stockage' => '512 Go',
                'ram' => '16 Go',
                'taille_ecran' => '6.9 pouces',
                'reseau' => '5G',
                'prix' => '1299 €',
                'marque' => 'Samsung',
                'photo' => 'https://ocs-pl.oktawave.com/v1/AUTH_2887234e-384a-4873-8bc5-405211db13a2/spidersweb/2020/01/samsung-galaxy-s20-ultra.jpeg',
            ],

            [
                'name' => 'Samsung Galaxy A72',
                'etat' => 'Neuf',
                'systeme' => 'Android',
                'stockage' => '256 Go',
                'ram' => '6 Go',
                'taille_ecran' => '6.7 pouces',
                'reseau' => '4G',
                'prix' => '499 €',
                'marque' => 'Samsung',
                'photo' => 'https://www.kjell.com/globalassets/productimages/808107_55206.tif?ref=A53AF5E418&format=jpg',
            ],

            [
                'name' => 'Samsung Galaxy A52',
                'etat' => 'Neuf',
                'systeme' => 'Android',
                'stockage' => '128 Go',
                'ram' => '6 Go',
                'taille_ecran' => '6.5 pouces',
                'reseau' => '4G',
                'prix' => '399 €',
                'marque' => 'Samsung',
                'photo' => 'https://www.theindianwire.com/wp-content/uploads/2021/05/Galaxy-A52-5G.jpg',
            ],
            [
                'name' => 'Samsung Galaxy S10',
                'etat' => 'Neuf',
                'systeme' => 'Android',
                'stockage' => '128 Go',
                'ram' => '8 Go',
                'taille_ecran' => '6.1 pouces',
                'reseau' => '4G',
                'prix' => '899 €',
                'marque' => 'Samsung',
                'photo' => 'https://dekhnews.com/wp-content/uploads/2019/02/samsung-galaxy-s10-hoyle-17.jpg',
            ],
            [
                'name' => 'Samsung Galaxy Z Flip',
                'etat' => 'Neuf',
                'systeme' => 'Android',
                'stockage' => '256 Go',
                'ram' => '8 Go',
                'taille_ecran' => '6.7 pouces',
                'reseau' => '5G',
                'prix' => '1299 €',
                'marque' => 'Samsung',
                'photo' => 'https://cdn1.expertreviews.co.uk/sites/expertreviews/files/2020/02/samsung_galaxy_z_flip_008.jpg',
            ],
            [
                'name' => 'Samsung Galaxy Note 10',
                'etat' => 'Neuf',
                'systeme' => 'Android',
                'stockage' => '256 Go',
                'ram' => '8 Go',
                'taille_ecran' => '6.3 pouces',
                'reseau' => '4G',
                'prix' => '949 €',
                'marque' => 'Samsung',
                'photo' => 'https://priceinsouthafrica.com/wp-content/uploads/2020/03/Samsung-Galaxy-Note-10-1536x1536.jpg',
            ],
            [
                'name' => 'Samsung Galaxy A32',
                'etat' => 'Neuf',
                'systeme' => 'Android',
                'stockage' => '64 Go',
                'ram' => '4 Go',
                'taille_ecran' => '6.4 pouces',
                'reseau' => '4G',
                'prix' => '249 €',
                'marque' => 'Samsung',
                'photo' => 'https://i.expansys.net/img/b/330138/samsung-galaxy-a32-5g-dual-sim-sm-a326b-ds.jpg',
            ],
            [
                'name' => 'Samsung Galaxy S21',
                'etat' => 'Neuf',
                'systeme' => 'Android',
                'stockage' => '256 Go',
                'ram' => '8 Go',
                'taille_ecran' => '6.2 pouces',
                'reseau' => '5G',
                'prix' => '1099 €',
                'marque' => 'Samsung',
                'photo' => 'https://dekhnews.com/wp-content/uploads/2019/02/samsung-galaxy-s10-hoyle-17.jpg',
            ],
            [
                'name' => 'Samsung Galaxy S20',
                'etat' => 'Occasion',
                'systeme' => 'Android',
                'stockage' => '128 Go',
                'ram' => '6 Go',
                'taille_ecran' => '6.1 pouces',
                'reseau' => '4G',
                'prix' => '699 €',
                'marque' => 'Samsung',
                'photo' => 'https://ocs-pl.oktawave.com/v1/AUTH_2887234e-384a-4873-8bc5-405211db13a2/spidersweb/2020/03/samsung-galaxy-s20-ultra-10-of-12.jpg',
            ],
            [
                'name' => 'Samsung Galaxy Note 20',
                'etat' => 'Reconditionné',
                'systeme' => 'Android',
                'stockage' => '256 Go',
                'ram' => '8 Go',
                'taille_ecran' => '6.7 pouces',
                'reseau' => '5G',
                'prix' => '849 €',
                'marque' => 'Samsung',
                'photo' => 'https://dekhnews.com/wp-content/uploads/2019/02/samsung-galaxy-s10-hoyle-17.jpg',
            ],
        ];

        foreach ($smartphones as $smartphoneData) {
            $smartphone = new Smartphone();
            $smartphone->setName($smartphoneData['name'])
                ->setEtat($smartphoneData['etat'])
                ->setSysteme($smartphoneData['systeme'])
                ->setRam($smartphoneData['ram'])
                ->setStockage($smartphoneData['stockage'])
                ->setReseau($smartphoneData['reseau'])
                ->setPrix($smartphoneData['prix'])
                ->setMark($this->getReference($smartphoneData['marque']))
                ->setTailleEcran($smartphoneData['taille_ecran'])
                ->setPhoto($smartphoneData['photo']);
                
            $manager->persist($smartphone);
        }

        $manager->flush();
    }
    public function getDependencies()
    {
        return [
            MarkFixtures::class,
        ];
    }
}

