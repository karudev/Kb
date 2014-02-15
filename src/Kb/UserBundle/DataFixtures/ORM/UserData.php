<?php

namespace Kb\UserBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class LoadUserData extends AbstractFixture implements OrderedFixtureInterface, ContainerAwareInterface {

    public $users = array(
        array(
            'firstName' => 'Dolyveen',
            'lastName' => 'Renault',
            'username' => 'drenault',
            'email' => 'renault@karudev.fr'
        ),
        array(
            'firstName' => 'Harold',
            'lastName' => 'Gene',
            'username' => 'hgene',
            'email' => 'dolyveen_renault@hotmail.com')
    );

    /**
     * @var ContainerInterface
     */
    private $container;

    /**
     * {@inheritDoc}
     */
    public function setContainer(ContainerInterface $container = null) {
        $this->container = $container;
    }

    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager) {

        $userManager = $this->container->get('fos_user.user_manager');
        foreach ($this->users as $value) {
            $user = $userManager->createUser();
            $user->setUsername($value['username'])
                    ->setEmail($value['email'])
                    ->setFirstName($value['firstName'])
                    ->setLastName($value['lastName'])
                    ->setLocked(false)
                    ->setExpired(false)
                    ->setEnabled(true)
                    ->setRoles(array('ROLE_ADMIN'))
                    ->setPlainPassword('test');

            $userManager->updateUser($user);
            $this->addReference('user_'.$value['username'],$user);
        }
    }

    /**
     * {@inheritDoc}
     */
    public function getOrder() {
        return 1; // the order in which fixtures will be loaded
    }

}
