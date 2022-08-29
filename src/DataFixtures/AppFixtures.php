<?php

namespace App\DataFixtures;

use App\Entity\Utilisateur;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Generator;
use Faker\Factory;

class AppFixtures extends Fixture
{


    // :
    private Generator $faker;

    public function __construct()
    {
        $this->faker = Factory::create('fr_FR');
    }






    // LoadManager - Commit pour ajouter les éléments tests en BDD :
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);

        // On créé plusieurs utilisateurs en boucle enregistré dans la BDD :
        for ($i=0;$i<9;$i++){
            $user = new Utilisateur();
            $user ->setIdentifiant($this->faker->word());
            $user ->setPassword($this->faker->word());
            $user ->setEmail("SydneyJezequel.pro@gmail.com");
            $manager -> persist($user);  // commit les changements
        }

        $manager->flush();      // Execute le commit;
    }
}
