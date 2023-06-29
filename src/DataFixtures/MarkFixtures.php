<?php

namespace App\DataFixtures;

use App\Entity\Mark;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class MarkFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $marks = [
            ['name' => 'Apple', 'url' => 'https://images.cnbctv18.com/wp-content/uploads/2019/09/2019-09-10T170343Z_1_LYNXNPEF891O9_RTROPTP_4_APPLE-IPHONE-1.jpg'],
            ['name' => 'Samsung', 'url' => 'https://www.mobigyaan.com/wp-content/uploads/2020/05/Samsung-Logo.jpg'],
            ['name' => 'Huawei', 'url' => 'https://i1.wp.com/techlomedia.in/wp-content/uploads/2015/01/Huawei-Logo.jpg'],
            ['name' => 'Xiaomi', 'url' => 'https://www.androidpolice.com/wp-content/uploads/2019/03/Xiaomi-Mi-Logo-hero.png'],
            ['name' => 'Google', 'url' => 'https://th.bing.com/th/id/OIP.SAk-tK1S3opQB-2hlu0jZAHaDt?pid=ImgDet&rs=1'],
            ['name' => 'OnePlus', 'url' => 'https://th.bing.com/th/id/OIP.NpbAdXgtDV9Dsz460QKEEAHaEK?pid=ImgDet&rs=1'],
            ['name' => 'Sony', 'url' => 'https://th.bing.com/th/id/OIP.efxRHxjVeX8oXklDDWBqSAAAAA?pid=ImgDet&rs=1'],
            ['name' => 'LG', 'url' => 'https://th.bing.com/th/id/R.3995a320179ce07aa55dbd6541353467?rik=8MOpL0nztr1nuw&pid=ImgRaw&r=0'],
            ['name' => 'Oppo', 'url' => 'https://th.bing.com/th/id/R.fda6d6ec1699e365fb4acb67b084972d?rik=PBytKQZ9B3FN8g&pid=ImgRaw&r=0'],
            ['name' => 'Asus', 'url' => 'https://wallpapercave.com/wp/wp2457198.jpg'],
            ['name' => 'Honor', 'url' => 'https://www.mcknightsseniorliving.com/wp-content/uploads/sites/3/2020/10/HonorLogo-860x454.png'],
            
        ];

        foreach ($marks as $markData) {
            $mark = new Mark();
            $mark->setName($markData['name']);
            $mark->setUrl($markData['url']);

            $manager->persist($mark);
            $this->addReference($markData['name'], $mark);
        }

        $manager->flush();
    }
}