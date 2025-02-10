<?php

namespace App\DataFixtures;

use App\Entity\Movie;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // Création de quelques exemples de films
        $movie1 = new Movie();
        $movie1->setTitle('Inception')
            ->setDuration(148)
            ->setDescription('Un voleur s\'introduit dans les rêves des gens pour voler des secrets.')
            ->setReleaseYear(2010);

        $movie2 = new Movie();
        $movie2->setTitle('The Matrix')
            ->setDuration(136)
            ->setDescription('Un programmeur découvre que sa réalité est une simulation.')
            ->setReleaseYear(1999);

        $movie3 = new Movie();
        $movie3->setTitle('Interstellar')
            ->setDuration(169)
            ->setDescription('Un groupe d\'explorateurs voyage à travers un trou de ver à la recherche d\'une nouvelle maison pour l\'humanité.')
            ->setReleaseYear(2014);

        // Persistance des films dans la base de données
        $manager->persist($movie1);
        $manager->persist($movie2);
        $manager->persist($movie3);

        $manager->flush();
    }
}
