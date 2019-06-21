<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserFixtures extends Fixture
{
    /**
     * @var UserPasswordEncoderInterface
     */
    private $userPasswordEncoder;

    /**
     * @var EntityManagerInterface
     */
    private $manager;

    /**
     * UserFixtures constructor.
     * @param UserPasswordEncoderInterface $userPasswordEncoder
     * @param EntityManagerInterface $manager
     */
    public function __construct(UserPasswordEncoderInterface $userPasswordEncoder, EntityManagerInterface $manager)
    {
        $this->userPasswordEncoder = $userPasswordEncoder;
        $this->manager = $manager;
    }

    /**
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);

        $users = [
            ['admin@tft.fr', ['ROLE_ADMIN'], 'tamtam'],
            ['user@tft.fr', ['ROLE_USER'], 'tamtam'],
        ];

        $this->createUsers($users);

    }

    /**
     * @param array $users
     */
    private function createUsers(array $users) : void
    {
        foreach ($users as $data) {
            $user = new User();
            $user->setEmail($data[0])
                ->setRoles($data[1])
                ->setPassword($this->userPasswordEncoder->encodePassword($user, $data[2]));

            $this->manager->persist($user);
        }

        $this->manager->flush();
    }

}
