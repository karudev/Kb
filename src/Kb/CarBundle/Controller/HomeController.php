<?php

namespace Kb\CarBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class HomeController extends Controller
{
    /**
     * @Template
     */
    public function indexAction()
    {
       $cars = $this->getDoctrine()->getRepository('KbCarBundle:Car')->getCarsBySeasion(new \DateTime(), true);
     
       return array('cars' => $cars);
    }
}
