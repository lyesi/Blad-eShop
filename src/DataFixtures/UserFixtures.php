<?php

namespace App\DataFixtures;

use App\Entity\User;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class UserFixtures extends Fixture
{
    private $passwordEncoder;

    public function __construct(UserPasswordEncoderInterface $passwordEncoder)
     {
         $this->passwordEncoder = $passwordEncoder;
     }

    public function load(ObjectManager $manager)
    {
        // Création d’un utilisateur de type “contributeur” (= auteur)
        $hugo = new User();
        $hugo->setEmail('hugo@gmail.com');
        $hugo->setRoles(['ROLE_CONTRIBUTOR']);
        $hugo->setPassword($this->passwordEncoder->encodePassword(
            $hugo,
            '123456'
        ));

        $manager->persist($hugo);

        // Création d’un utilisateur de type “administrateur”
        $ilyes = new User();
        $ilyes->setEmail('ilyes@gmail.com');
        $ilyes->setRoles(['ROLE_ADMIN']);
        $ilyes->setPassword($this->passwordEncoder->encodePassword(
            $ilyes,
            '123456'
        ));

        $manager->persist($ilyes);

        // Sauvegarde des 2 nouveaux utilisateurs :
        $manager->flush();
    }
}