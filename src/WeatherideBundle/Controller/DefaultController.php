<?php

namespace WeatherideBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('WeatherideBundle:Default:index.html.twig');
    }
}
