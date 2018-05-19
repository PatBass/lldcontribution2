<?php
/**
 * Created by PhpStorm.
 * User: mac
 * Date: 07/12/16
 * Time: 21:33
 */
namespace MainBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Bundle\FixturesBundle;
use Doctrine\Bundle\FixturesBundle\DoctrineFixturesBundle;
use Doctrine\Common\Persistence\ObjectManager;
use MainBundle\Entity\Title;

class LoadTitle implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $names = array('Monsieur', 'Madame', 'Mademoiselle');

        foreach ($names as $name)
        {
            $title = new Title();
            $title->setName($name);

            $manager->persist($title);
        }

        $manager->flush();
    }
}