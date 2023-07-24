<?php

namespace App\DataFixtures;

use App\Entity\Students;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;
use Faker\Generator;


class AppFixtures extends Fixture
{
    private Generator $faker;
    public function __construct(){
        $this->faker = Factory::create('fr_FR');
    }
    public function load(ObjectManager $manager): void
    {
        for ($i=1; $i < 19; $i++) { 
            $students=new Students();
            $students->setNom($this->faker->word())
            ->setAddress('Carama') 
            ->setPhone('785878')
            ->setMatricule(mt_rand(0, 100));
            
            $manager->persist($students);

            }
            $manager->flush();
    }
}
