<?php

namespace Kb\UserBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Kb\CarBundle\Entity\Engine;

class LoadEngineData extends AbstractFixture implements OrderedFixtureInterface {

    public $engines = array(
        array(
            'name' => 'Essence',
        ),
        array(
            'name' => 'Diesel',
        )
    );

    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager) {


        foreach ($this->engines as $value) {
            $engine = new Engine();
            $engine->setName($value['name']);
            $manager->persist($engine);
            $this->addReference('engine_' . $value['name'], $engine);
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
