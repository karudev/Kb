<?php

namespace Kb\UserBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Kb\CoreBundle\Entity\Pricing;

class LoadPricingData extends AbstractFixture implements OrderedFixtureInterface {

    public $pricings = array(
        array(
            'amount' => 34,
            'unit_amount' => '€/J',
            'min_duration' => 6,
            'max_duration' => 14,
            'car' => 'Nissan NOTE 5 portes climatisée diesel récente',
            'seasion' => 'Tarif haute saison_0',
            'priceByDefault' => true
        ),
        array(
            'amount' => 32,
            'unit_amount' => '€/J',
            'min_duration' => 15,
            'max_duration' => 21,
            'car' => 'Nissan NOTE 5 portes climatisée diesel récente',
            'seasion' => 'Tarif haute saison_0',
            'priceByDefault' => false
        ),
        array(
            'amount' => 30,
            'unit_amount' => '€/J',
            'min_duration' => 22,
            'max_duration' => 29,
            'car' => 'Nissan NOTE 5 portes climatisée diesel récente',
            'seasion' => 'Tarif haute saison_0',
            'priceByDefault' => false
        ),
        array(
            'amount' => 28,
            'unit_amount' => '€/J',
            'min_duration' => 30,
            'max_duration' => null,
            'car' => 'Nissan NOTE 5 portes climatisée diesel récente',
            'seasion' => 'Tarif haute saison_0',
            'priceByDefault' => false
        ),
        array(
            'amount' => 34,
            'unit_amount' => '€/J',
            'min_duration' => 6,
            'max_duration' => 14,
            'car' => 'Nissan NOTE 5 portes climatisée diesel récente',
            'seasion' => 'Tarif haute saison_1',
            'priceByDefault' => true
        ),
        array(
            'amount' => 32,
            'unit_amount' => '€/J',
            'min_duration' => 15,
            'max_duration' => 21,
            'car' => 'Nissan NOTE 5 portes climatisée diesel récente',
            'seasion' => 'Tarif haute saison_1',
            'priceByDefault' => false
        ),
        array(
            'amount' => 30,
            'unit_amount' => '€/J',
            'min_duration' => 22,
            'max_duration' => 29,
            'car' => 'Nissan NOTE 5 portes climatisée diesel récente',
            'seasion' => 'Tarif haute saison_1',
            'priceByDefault' => false
        ),
        array(
            'amount' => 28,
            'unit_amount' => '€/J',
            'min_duration' => 30,
            'max_duration' => null,
            'car' => 'Nissan NOTE 5 portes climatisée diesel récente',
            'seasion' => 'Tarif haute saison_1',
            'priceByDefault' => false
        ),
        array(
            'amount' => 25,
            'unit_amount' => '€/J',
            'min_duration' => 6,
            'max_duration' => 14,
            'car' => 'Fiat PUNTO EVO 5 portes climatisée diesel récente',
            'seasion' => 'Tarif haute saison_0',
            'priceByDefault' => true
        ),
        array(
            'amount' => 23,
            'unit_amount' => '€/J',
            'min_duration' => 15,
            'max_duration' => 21,
            'car' => 'Fiat PUNTO EVO 5 portes climatisée diesel récente',
            'seasion' => 'Tarif haute saison_0',
            'priceByDefault' => false
        ),
        array(
            'amount' => 22,
            'unit_amount' => '€/J',
            'min_duration' => 22,
            'max_duration' => 29,
            'car' => 'Fiat PUNTO EVO 5 portes climatisée diesel récente',
            'seasion' => 'Tarif haute saison_0',
            'priceByDefault' => false
        ),
        array(
            'amount' => 20,
            'unit_amount' => '€/J',
            'min_duration' => 30,
            'max_duration' => null,
            'car' => 'Fiat PUNTO EVO 5 portes climatisée diesel récente',
            'seasion' => 'Tarif haute saison_0',
            'priceByDefault' => false
        ),
        array(
            'amount' => 25,
            'unit_amount' => '€/J',
            'min_duration' => 6,
            'max_duration' => 14,
            'car' => 'Fiat PUNTO EVO 5 portes climatisée diesel récente',
            'seasion' => 'Tarif haute saison_1',
            'priceByDefault' => true
        ),
        array(
            'amount' => 23,
            'unit_amount' => '€/J',
            'min_duration' => 15,
            'max_duration' => 21,
            'car' => 'Fiat PUNTO EVO 5 portes climatisée diesel récente',
            'seasion' => 'Tarif haute saison_1',
            'priceByDefault' => false
        ),
        array(
            'amount' => 22,
            'unit_amount' => '€/J',
            'min_duration' => 22,
            'max_duration' => 29,
            'car' => 'Fiat PUNTO EVO 5 portes climatisée diesel récente',
            'seasion' => 'Tarif haute saison_1',
            'priceByDefault' => false
        ),
        array(
            'amount' => 20,
            'unit_amount' => '€/J',
            'min_duration' => 30,
            'max_duration' => null,
            'car' => 'Fiat PUNTO EVO 5 portes climatisée diesel récente',
            'seasion' => 'Tarif haute saison_1',
            'priceByDefault' => false
        ),
        array(
            'amount' => 26,
            'unit_amount' => '€/J',
            'min_duration' => 6,
            'max_duration' => 14,
            'car' => 'Fiat PUNTO EVO 5 portes climatisée diesel récente 2',
            'seasion' => 'Tarif haute saison_0',
            'priceByDefault' => true
        ),
        array(
            'amount' => 24,
            'unit_amount' => '€/J',
            'min_duration' => 15,
            'max_duration' => 21,
            'car' => 'Fiat PUNTO EVO 5 portes climatisée diesel récente 2',
            'seasion' => 'Tarif haute saison_0',
            'priceByDefault' => false
        ),
        array(
            'amount' => 23,
            'unit_amount' => '€/J',
            'min_duration' => 22,
            'max_duration' => 29,
            'car' => 'Fiat PUNTO EVO 5 portes climatisée diesel récente 2',
            'seasion' => 'Tarif haute saison_0',
            'priceByDefault' => false
        ),
        array(
            'amount' => 21,
            'unit_amount' => '€/J',
            'min_duration' => 30,
            'max_duration' => null,
            'car' => 'Fiat PUNTO EVO 5 portes climatisée diesel récente 2',
            'seasion' => 'Tarif haute saison_0',
            'priceByDefault' => false
        ),
        array('amount' => 26,
            'unit_amount' => '€/J',
            'min_duration' => 6,
            'max_duration' => 14,
            'car' => 'Fiat PUNTO EVO 5 portes climatisée diesel récente 2',
            'seasion' => 'Tarif haute saison_1',
            'priceByDefault' => true
        ),
        array(
            'amount' => 24,
            'unit_amount' => '€/J',
            'min_duration' => 15,
            'max_duration' => 21,
            'car' => 'Fiat PUNTO EVO 5 portes climatisée diesel récente 2',
            'seasion' => 'Tarif haute saison_1',
            'priceByDefault' => false
        ),
        array(
            'amount' => 23,
            'unit_amount' => '€/J',
            'min_duration' => 22,
            'max_duration' => 29,
            'car' => 'Fiat PUNTO EVO 5 portes climatisée diesel récente 2',
            'seasion' => 'Tarif haute saison_1',
            'priceByDefault' => false
        ),
        array(
            'amount' => 21,
            'unit_amount' => '€/J',
            'min_duration' => 30,
            'max_duration' => null,
            'car' => 'Fiat PUNTO EVO 5 portes climatisée diesel récente 2',
            'seasion' => 'Tarif haute saison_1',
            'priceByDefault' => false
        ),
        array(
            'amount' => 28,
            'unit_amount' => '€/J',
            'min_duration' => 6,
            'max_duration' => 14,
            'car' => 'Fiat PUNTO EVO 5 portes climatisée diesel récente 3',
            'seasion' => 'Tarif haute saison_0',
            'priceByDefault' => true
        ),
        array(
            'amount' => 26,
            'unit_amount' => '€/J',
            'min_duration' => 15,
            'max_duration' => 21,
            'car' => 'Fiat PUNTO EVO 5 portes climatisée diesel récente 3',
            'seasion' => 'Tarif haute saison_0',
            'priceByDefault' => false
        ),
        array(
            'amount' => 24,
            'unit_amount' => '€/J',
            'min_duration' => 22,
            'max_duration' => 29,
            'car' => 'Fiat PUNTO EVO 5 portes climatisée diesel récente 3',
            'seasion' => 'Tarif haute saison_0',
            'priceByDefault' => false
        ),
        array(
            'amount' => 22,
            'unit_amount' => '€/J',
            'min_duration' => 30,
            'max_duration' => null,
            'car' => 'Fiat PUNTO EVO 5 portes climatisée diesel récente 3',
            'seasion' => 'Tarif haute saison_0',
            'priceByDefault' => false
        ),
        array(
            'amount' => 28,
            'unit_amount' => '€/J',
            'min_duration' => 6,
            'max_duration' => 14,
            'car' => 'Fiat PUNTO EVO 5 portes climatisée diesel récente 3',
            'seasion' => 'Tarif haute saison_1',
            'priceByDefault' => true
        ),
        array(
            'amount' => 26,
            'unit_amount' => '€/J',
            'min_duration' => 15,
            'max_duration' => 21,
            'car' => 'Fiat PUNTO EVO 5 portes climatisée diesel récente 3',
            'seasion' => 'Tarif haute saison_1',
            'priceByDefault' => false
        ),
        array(
            'amount' => 24,
            'unit_amount' => '€/J',
            'min_duration' => 22,
            'max_duration' => 29,
            'car' => 'Fiat PUNTO EVO 5 portes climatisée diesel récente 3',
            'seasion' => 'Tarif haute saison_1',
            'priceByDefault' => false
        ),
        array(
            'amount' => 22,
            'unit_amount' => '€/J',
            'min_duration' => 30,
            'max_duration' => null,
            'car' => 'Fiat PUNTO EVO 5 portes climatisée diesel récente 3',
            'seasion' => 'Tarif haute saison_1',
            'priceByDefault' => false
        ),
        array(
            'amount' => 28,
            'unit_amount' => '€/J',
            'min_duration' => 6,
            'max_duration' => 14,
            'car' => 'Nissan NOTE 5 portes climatisée diesel récente',
            'seasion' => 'Tarif basse saison_2',
            'priceByDefault' => true
        ),
        array(
            'amount' => 27,
            'unit_amount' => '€/J',
            'min_duration' => 15,
            'max_duration' => 21,
            'car' => 'Nissan NOTE 5 portes climatisée diesel récente',
            'seasion' => 'Tarif basse saison_2',
            'priceByDefault' => false
        ),
        array(
            'amount' => 26,
            'unit_amount' => '€/J',
            'min_duration' => 22,
            'max_duration' => 29,
            'car' => 'Nissan NOTE 5 portes climatisée diesel récente',
            'seasion' => 'Tarif basse saison_2',
            'priceByDefault' => false
        ),
        array(
            'amount' => 25,
            'unit_amount' => '€/J',
            'min_duration' => 30,
            'max_duration' => null,
            'car' => 'Nissan NOTE 5 portes climatisée diesel récente',
            'seasion' => 'Tarif basse saison_2',
            'priceByDefault' => false
        ),
        array(
            'amount' => 28,
            'unit_amount' => '€/J',
            'min_duration' => 6,
            'max_duration' => 14,
            'car' => 'Nissan NOTE 5 portes climatisée diesel récente',
            'seasion' => 'Tarif basse saison_3',
            'priceByDefault' => true
        ),
        array(
            'amount' => 27,
            'unit_amount' => '€/J',
            'min_duration' => 15,
            'max_duration' => 21,
            'car' => 'Nissan NOTE 5 portes climatisée diesel récente',
            'seasion' => 'Tarif basse saison_3',
            'priceByDefault' => false
        ),
        array(
            'amount' => 26,
            'unit_amount' => '€/J',
            'min_duration' => 22,
            'max_duration' => 29,
            'car' => 'Nissan NOTE 5 portes climatisée diesel récente',
            'seasion' => 'Tarif basse saison_3',
            'priceByDefault' => false
        ),
        array(
            'amount' => 25,
            'unit_amount' => '€/J',
            'min_duration' => 30,
            'max_duration' => null,
            'car' => 'Nissan NOTE 5 portes climatisée diesel récente',
            'seasion' => 'Tarif basse saison_3',
            'priceByDefault' => false
        ),
        array(
            'amount' => 19,
            'unit_amount' => '€/J',
            'min_duration' => 6,
            'max_duration' => 14,
            'car' => 'Fiat PUNTO EVO 5 portes climatisée diesel récente',
            'seasion' => 'Tarif basse saison_2',
            'priceByDefault' => true
        ),
        array(
            'amount' => 18,
            'unit_amount' => '€/J',
            'min_duration' => 15,
            'max_duration' => 21,
            'car' => 'Fiat PUNTO EVO 5 portes climatisée diesel récente',
            'seasion' => 'Tarif basse saison_2',
            'priceByDefault' => false
        ),
        array(
            'amount' => 17,
            'unit_amount' => '€/J',
            'min_duration' => 22,
            'max_duration' => 29,
            'car' => 'Fiat PUNTO EVO 5 portes climatisée diesel récente',
            'seasion' => 'Tarif basse saison_2',
            'priceByDefault' => false
        ),
        array(
            'amount' => 15,
            'unit_amount' => '€/J',
            'min_duration' => 30,
            'max_duration' => null,
            'car' => 'Fiat PUNTO EVO 5 portes climatisée diesel récente',
            'seasion' => 'Tarif basse saison_2',
            'priceByDefault' => false
        ),
        array(
            'amount' => 19,
            'unit_amount' => '€/J',
            'min_duration' => 6,
            'max_duration' => 14,
            'car' => 'Fiat PUNTO EVO 5 portes climatisée diesel récente',
            'seasion' => 'Tarif basse saison_3',
            'priceByDefault' => true
        ),
        array(
            'amount' => 18,
            'unit_amount' => '€/J',
            'min_duration' => 15,
            'max_duration' => 21,
            'car' => 'Fiat PUNTO EVO 5 portes climatisée diesel récente',
            'seasion' => 'Tarif basse saison_3',
            'priceByDefault' => false
        ),
        array(
            'amount' => 17,
            'unit_amount' => '€/J',
            'min_duration' => 22,
            'max_duration' => 29,
            'car' => 'Fiat PUNTO EVO 5 portes climatisée diesel récente',
            'seasion' => 'Tarif basse saison_3',
            'priceByDefault' => false
        ),
        array(
            'amount' => 15,
            'unit_amount' => '€/J',
            'min_duration' => 30,
            'max_duration' => null,
            'car' => 'Fiat PUNTO EVO 5 portes climatisée diesel récente',
            'seasion' => 'Tarif basse saison_3',
            'priceByDefault' => false
        ),
        array(
            'amount' => 20,
            'unit_amount' => '€/J',
            'min_duration' => 6,
            'max_duration' => 14,
            'car' => 'Fiat PUNTO EVO 5 portes climatisée diesel récente 2',
            'seasion' => 'Tarif basse saison_2',
            'priceByDefault' => true
        ),
        array(
            'amount' => 19,
            'unit_amount' => '€/J',
            'min_duration' => 15,
            'max_duration' => 21,
            'car' => 'Fiat PUNTO EVO 5 portes climatisée diesel récente 2',
            'seasion' => 'Tarif basse saison_2',
            'priceByDefault' => false
        ),
        array(
            'amount' => 18,
            'unit_amount' => '€/J',
            'min_duration' => 22,
            'max_duration' => 29,
            'car' => 'Fiat PUNTO EVO 5 portes climatisée diesel récente 2',
            'seasion' => 'Tarif basse saison_2',
            'priceByDefault' => false
        ),
        array(
            'amount' => 16,
            'unit_amount' => '€/J',
            'min_duration' => 30,
            'max_duration' => null,
            'car' => 'Fiat PUNTO EVO 5 portes climatisée diesel récente 2',
            'seasion' => 'Tarif basse saison_2',
            'priceByDefault' => false
        ),
        array('amount' => 20,
            'unit_amount' => '€/J',
            'min_duration' => 6,
            'max_duration' => 14,
            'car' => 'Fiat PUNTO EVO 5 portes climatisée diesel récente 2',
            'seasion' => 'Tarif basse saison_3',
            'priceByDefault' => true
        ),
        array(
            'amount' => 19,
            'unit_amount' => '€/J',
            'min_duration' => 15,
            'max_duration' => 21,
            'car' => 'Fiat PUNTO EVO 5 portes climatisée diesel récente 2',
            'seasion' => 'Tarif basse saison_3',
            'priceByDefault' => false
        ),
        array(
            'amount' => 18,
            'unit_amount' => '€/J',
            'min_duration' => 22,
            'max_duration' => 29,
            'car' => 'Fiat PUNTO EVO 5 portes climatisée diesel récente 2',
            'seasion' => 'Tarif basse saison_3',
            'priceByDefault' => false
        ),
        array(
            'amount' => 16,
            'unit_amount' => '€/J',
            'min_duration' => 30,
            'max_duration' => null,
            'car' => 'Fiat PUNTO EVO 5 portes climatisée diesel récente 2',
            'seasion' => 'Tarif basse saison_3',
            'priceByDefault' => false
        ),
        array(
            'amount' => 22,
            'unit_amount' => '€/J',
            'min_duration' => 6,
            'max_duration' => 14,
            'car' => 'Fiat PUNTO EVO 5 portes climatisée diesel récente 3',
            'seasion' => 'Tarif basse saison_2',
            'priceByDefault' => true
        ),
        array(
            'amount' => 21,
            'unit_amount' => '€/J',
            'min_duration' => 15,
            'max_duration' => 21,
            'car' => 'Fiat PUNTO EVO 5 portes climatisée diesel récente 3',
            'seasion' => 'Tarif basse saison_2',
            'priceByDefault' => false
        ),
        array(
            'amount' => 20,
            'unit_amount' => '€/J',
            'min_duration' => 22,
            'max_duration' => 29,
            'car' => 'Fiat PUNTO EVO 5 portes climatisée diesel récente 3',
            'seasion' => 'Tarif basse saison_2',
            'priceByDefault' => false
        ),
        array(
            'amount' => 18,
            'unit_amount' => '€/J',
            'min_duration' => 30,
            'max_duration' => null,
            'car' => 'Fiat PUNTO EVO 5 portes climatisée diesel récente 3',
            'seasion' => 'Tarif basse saison_2',
            'priceByDefault' => false
        ),
        array(
            'amount' => 22,
            'unit_amount' => '€/J',
            'min_duration' => 6,
            'max_duration' => 14,
            'car' => 'Fiat PUNTO EVO 5 portes climatisée diesel récente 3',
            'seasion' => 'Tarif basse saison_3',
            'priceByDefault' => true
        ),
        array(
            'amount' => 21,
            'unit_amount' => '€/J',
            'min_duration' => 15,
            'max_duration' => 21,
            'car' => 'Fiat PUNTO EVO 5 portes climatisée diesel récente 3',
            'seasion' => 'Tarif basse saison_3',
            'priceByDefault' => false
        ),
        array(
            'amount' => 20,
            'unit_amount' => '€/J',
            'min_duration' => 22,
            'max_duration' => 29,
            'car' => 'Fiat PUNTO EVO 5 portes climatisée diesel récente 3',
            'seasion' => 'Tarif basse saison_3',
            'priceByDefault' => false
        ),
        array(
            'amount' => 18,
            'unit_amount' => '€/J',
            'min_duration' => 30,
            'max_duration' => null,
            'car' => 'Fiat PUNTO EVO 5 portes climatisée diesel récente 3',
            'seasion' => 'Tarif basse saison_3',
            'priceByDefault' => false
        ),
    );

    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager) {


        foreach ($this->pricings as $value) {
            $object = new Pricing();
            $object->setAmount($value['amount'])
                    ->setUnitAmount($value['unit_amount'])
                    ->setMinDuration($value['min_duration'])
                    ->setMaxDuration($value['max_duration'])
                    ->setPriceByDefault($value['priceByDefault'])
                    ->setCar($this->getReference('car_' . $value['car']))
                    ->setSeasion($this->getReference('seasion_' . $value['seasion']));
            $manager->persist($object);
           
        }
        $manager->flush();
    }

    /**
     * {@inheritDoc}
     */
    public function getOrder() {
        return 2; // the order in which fixtures will be loaded
    }

}
