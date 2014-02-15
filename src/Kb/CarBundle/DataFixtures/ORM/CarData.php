<?php

namespace Kb\UserBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Kb\CarBundle\Entity\Car;

class LoadCarData extends AbstractFixture implements OrderedFixtureInterface {

    public $cars = array(
        array(
            'name' => 'Nissan NOTE 5 portes climatisée diesel récente',
            'description' => 'Véhicules familials, 5 personnes, coffre spacieux, 90 CV, poste CD, toutes options, climatisés, commande au volant.',
            'color' => 'rouge',
            'engine' => 'Diesel',
            'mark'  => 'Nissan',
            'nbKm' => 65000,
            'nbSpace' => 5,
            'nbDoor' => 5,
            'amount' => 23,
            'unitAmount' => '€/Jrs',
            'user' => 'drenault',
            'isConditioned' => false,
            'gearbox' => 'Manuelle'
        ),
        array(
            'name' => 'Fiat PUNTO EVO 5 portes climatisée diesel récente',
            'description' => 'Véhicules pour 4/5 personnes, 90CV, toutes options, climatisés, commande au volant, système start and stop, poste CD avec port USB.',
            'color' => 'blanche',
            'engine' => 'Diesel',
            'mark'  => 'Fiat',
            'nbKm' => 70000,
            'nbSpace' => 5,
            'nbDoor' => 5,
            'amount' => 25,
            'unitAmount' => '€/Jrs',
            'user' => 'drenault',
            'isConditioned' => true,
            'gearbox' => 'Manuelle'
        ),
         array(
            'name' => 'Fiat PUNTO EVO 5 portes climatisée diesel récente',
            'description' => 'Véhicules pour 4/5 personnes, 90CV, toutes options, climatisés, commande au volant, système start and stop, poste CD avec port USB.',
            'color' => 'blanche',
            'engine' => 'Diesel',
            'mark'  => 'Fiat',
            'nbKm' => 70000,
            'nbSpace' => 5,
            'nbDoor' => 5,
            'amount' => 25,
            'unitAmount' => '€/Jrs',
            'user' => 'drenault',
            'isConditioned' => true,
            'gearbox' => 'Manuelle'
        ),
         array(
            'name' => 'Fiat PUNTO EVO 5 portes climatisée diesel récente',
            'description' => 'Véhicules pour 4/5 personnes, 90CV, toutes options, climatisés, commande au volant, système start and stop, poste CD avec port USB.',
            'color' => 'blanche',
            'engine' => 'Diesel',
            'mark'  => 'Fiat',
            'nbKm' => 70000,
            'nbSpace' => 5,
            'nbDoor' => 5,
            'amount' => 25,
            'unitAmount' => '€/Jrs',
            'user' => 'drenault',
            'isConditioned' => true,
            'gearbox' => 'Manuelle'
        )
    );

    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager) {


        foreach ($this->cars as $key => $value) {
            
            $dateRelease = new \DateTime();
            $dateRelease->modify('-'.(($key + 1) *1000).' days');
            
            $object = new Car();
            $object->setName($value['name'])
                    ->setDescription($value['description'])
                    ->setColor($value['color'])
                    ->setEngine($this->getReference('engine_'.$value['engine']))
                    ->setMark($this->getReference('mark_'.$value['mark']))
                    ->setNbDoor($value['nbDoor'])
                    ->setNbSpace($value['nbSpace'])
                    ->setNbKm($value['nbKm'])
                    ->setAmount($value['amount'])
                    ->setUnitAmount($value['unitAmount'])
                    ->setCreatedAt(new \DateTime)
                    ->setUpdatedAt(new \DateTime)
                    ->setCreatedBy($this->getReference('user_'.$value['user']))
                    ->setUpdatedBy($this->getReference('user_'.$value['user']))
                    ->setIsConditioned($value['isConditioned'])
                    ->setIsActive(true)
                    ->setGearbox($value['gearbox'])
                    ->setDateRelease($dateRelease);
            $manager->persist($object);
            $manager->flush();
            
            $object->setSlug(true);
            $manager->persist($object);
            $manager->flush();
        }
       
    }

    /**
     * {@inheritDoc}
     */
    public function getOrder() {
        return 2; // the order in which fixtures will be loaded
    }

}
