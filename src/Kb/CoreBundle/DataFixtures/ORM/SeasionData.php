<?php

namespace Kb\UserBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Kb\CoreBundle\Entity\Seasion;

class LoadSeasionData extends AbstractFixture implements OrderedFixtureInterface {

    public $seasions = array(
        array(
            'name' => 'Tarif haute saison',
            'date_start' => '2013-12-16',
            'date_end' => '2014-05-05',
        ),
        array(
            'name' => 'Tarif haute saison',
            'date_start' => '2014-07-01',
            'date_end' => '2014-09-06'
            ),
         array(
            'name' => 'Tarif basse saison',
            'date_start' => '2014-09-07',
            'date_end' => '2014-12-15',
        ),
         array(
            'name' => 'Tarif basse saison',
            'date_start' => '2014-05-06',
            'date_end' => '2014-06-30',
        ),
    );

    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager) {


        foreach ($this->seasions  as $key => $value) {
            $object = new Seasion();
            $object->setName($value['name'])
                    ->setDateStart(new \DateTime($value['date_start']))
                    ->setDateEnd(new \DateTime($value['date_end']));
            $manager->persist($object);
            $this->addReference('seasion_' . $value['name'].'_'.$key, $object);
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
