<?php

namespace App\DataFixtures;

use App\Entity\Utilisateurs;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class UtilisateursFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $this->createUser("RODRIGUES", "Marceau", "marceaurodrigues@adrar-formation.com", "1234", ["ROLE_DEV", "ROLE_ADMIN"], $manager);
        $this->createUser("NAVONE", "RUBEN", "rubennavone@adrar-formation.com", "1234", ["ROLE_DEV", "ROLE_ADMIN"], $manager);
        $this->createUser("Les", "Stagiaires", "stagiaires@adrar-formation.com", "1234", [], $manager);

        $manager->flush();
    }

    public function createUser(string $sNom, string $sPrenom, string $sEmail, string $sPassword, array $arrRoles, ObjectManager $manager): Utilisateurs 
    {
        $counter = 1;
        $user = new Utilisateurs();
        $user->setNom($sNom);
        $user->setPrenom($sPrenom);
        $user->setEmail($sEmail);
        $user->setMotDePasse(password_hash($sPassword, PASSWORD_BCRYPT));
        $user->setImage("default_woman.png");
        $user->setRoles($arrRoles);
       
        $manager->persist($user);
        // Cette méthode héritée va permettre de mémoriser les utilisateurs pour nous en resservir dans d'autres Fixtures
        $this->setReference('utilisateurs-' . $counter, $user);
        $counter++;

        return $user;
    }

}
