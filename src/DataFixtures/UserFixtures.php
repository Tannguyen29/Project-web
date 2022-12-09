<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserFixtures extends Fixture
{
    private $hasher;

    //khai báo thư viện để mã hóa password
    public function __construct(UserPasswordHasherInterface $userPasswordHasherInterface)
    {
        $this->hasher = $userPasswordHasherInterface;
    }

    public function load(ObjectManager $manager): void
    {
        //tạo tài khoản test cho role "ADMIN"
        $user1 = new User;
        $user1->setEmail("admin@gmail.com")
              ->setRoles(["ROLE_ADMIN"])
              ->setPassword($this->hasher->hashPassword($user1,"123456"));
        $manager->persist($user1);

        //tạo tài khoản test cho role "USER"
        $user2 = new User;
        $user2->setEmail("user@gmail.com")
              ->setRoles(["ROLE_USER"])
              ->setPassword($this->hasher->hashPassword($user2, "123456"));
        $manager->persist($user2);

        //tạo tài khoản test cho role "Teacher"
        $user3 = new User;
        $user3->setEmail("teacher@gmail.com")
              ->setRoles(["ROLE_TEACHER"])
              ->setPassword($this->hasher->hashPassword($user3, "123456"));
        $manager->persist($user3);

        $manager->flush();
    }
}
