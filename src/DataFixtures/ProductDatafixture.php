<?php

namespace App\DataFixtures;

use App\Entity\Product;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class ProductDatafixture extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create();

        for ($i = 0; $i < 10; $i++) {
            $entity = new Product();
            $entity->setName($faker->name);
            //$entity->setPrice($faker->price);
            // Set other fields...

            $manager->persist($entity);
        }

        $manager->flush();
    }
}
