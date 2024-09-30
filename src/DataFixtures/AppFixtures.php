<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class AppFixtures extends Fixture
{
    protected $encoder;
    public function __construct(UserPasswordHasherInterface $encoder) {
        $this->encoder = $encoder;
    }
    public function load(ObjectManager $manager): void
    {
        $user = new User();
        $user->setNom('Joffrey')->setPrenom('Halland');
        $user->setEmail('user@gmail.com');
        $encoded = $this->encoder->hashPassword($user,'123');
        $user->setPassword($encoded);
        $user->setRoles(['ROLE_USER']);
        

        $employee = new User();
        $encoded = $this->encoder->hashPassword($employee,'123');
        $employee->setNom('Fabre')->setPrenom('Tom')->setPassword($encoded)->setRoles(['ROLE_EMPLOYEE'])->setEmail('employee@gmail.com');

        $admin = new User(); 
        $encoded = $this->encoder->hashPassword($admin,'123');
        $admin->setNom('Damiennus')->setPrenom('BenoitSaintDenis')->setEmail('admin@gmail.com')->setPassword($encoded)->setRoles(['ROLE_ADMIN']);



        $manager->persist($user);
        $manager->persist($employee);
        $manager->persist($admin);
        $manager->flush();
    }
}
