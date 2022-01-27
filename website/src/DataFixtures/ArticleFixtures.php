<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

use  App\Entity\Article;

use Faker\Factory;

class ArticleFixtures extends Fixture 
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);

        $faker = Factory::create("fr_FR");

        for ($i = 0; $i < 10; $i++) {
            $manager->persist(
                (new Article())
                    ->setTitle('Titre')
                    ->setDate($faker->DateTime('NOW'))
                    ->setImageUrl('https://picsum.photos/id/' . rand(0, 100) . '/500/300')
                    ->setContent($faker->text())
            );
        }

        $manager->flush();
    }
}
