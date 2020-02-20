<?php

namespace App\DataFixtures;

use App\Entity\User;
use Faker;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class AppFixtures extends Fixture
{
    //Propriété
    private $encoder;
    //Constructeur pour le password encoder
    public function __construct(UserPasswordEncoderInterface $encoder)
    {
        $this->encoder = $encoder;
    }
    //Fixtures
    public function load(ObjectManager $manager)
    {
        //Initialisation de faker
        $faker = Faker\FakerFactory::create('fr_FR');
        //Je boucle pour crée 10 Users
        for ($i = 0; $i < 10; $i++){
            $user = new User();



        }

        $manager->flush();
    }
}
