<?php

namespace App\DataFixtures;

use App\Entity\Movie;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class MovieFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $movie = new Movie();
        $movie->setTitle('The Dark Knight');
        $movie->setReleaseYear(2008);
        $movie->setDescription('This is the description of the Dark Knight');
        $movie->setImagePath('https://cdn.pixabay.com/photo/2024/01/15/11/36/batman-8510022_960_720.png');
        $manager->persist($movie);

        $movie2 = new Movie();
        $movie2->setTitle('Avengers: Endgame');
        $movie2->setReleaseYear(2019);
        $movie2->setDescription('This is the description of the Avengers: Endgame');
        $movie2->setImagePath('https://cdn.pixabay.com/photo/2022/06/05/11/06/action-figures-7243788_1280.jpg');
        $manager->persist($movie2);

        $manager->flush();
    }
}
