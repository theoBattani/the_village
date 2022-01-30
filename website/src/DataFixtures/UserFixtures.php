<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use  App\Entity\User;

use Faker\Factory;

class UserFixtures extends Fixture
{

    private $encoder;

    public function __construct(UserPasswordEncoderInterface $passwordEncoder)
    {
        $this->encoder = $passwordEncoder;
    }

    public function load(ObjectManager $manager): void
    {   
        $user = new User();
        $manager->persist(
            $user->setEmail("foo@bar.dev")
                 ->setPassword($this->encoder->encodePassword($user, "motdepasse"))
                 ->setRoles(["ADMIN"])
        );
        $manager->flush();
    }
}
