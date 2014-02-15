<?php

namespace Kb\UserBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Kb\CarBundle\Entity\Mark;

class LoadMarkData extends AbstractFixture implements OrderedFixtureInterface {

    public $marks = array(
        array(
            'name' => 'Peugeot',
            'type' => 'car'
        ),
        array(
            'name' => 'Renault',
            'type' => 'car'
        ),
        array(
            'name' => 'Seat',
            'type' => 'car'
        ),
         array(
            'name' => 'Nissan',
            'type' => 'car'
        ),
         array(
            'name' => 'Fiat',
            'type' => 'car'
        )
    );

    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager) {


        foreach ($this->marks as $value) {
            $object = new Mark();
            $object->setName($value['name'])
                    ->setType($value['type']);
            $manager->persist($object);
            $this->addReference('mark_' . $value['name'], $object);
        }
        $manager->flush();
    }

    /**
     * {@inheritDoc}
     */
    public function getOrder() {
        return 1; // the order in which fixtures will be loaded
    }

}
