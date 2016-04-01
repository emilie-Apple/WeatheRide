<?php

namespace WeatherideBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\User\UserInterface;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('WeatherideBundle:Default:index.html.twig');
    }

    public function isEqualTo (UserInterface $Activities)
    {
        return $this->activity===$Activities->getactivity();
    }
}