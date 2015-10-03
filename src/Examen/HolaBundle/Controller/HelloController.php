<?php

namespace Examen\HolaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HolaController extends Controller
{
    public function indexAction($name)
    {
        //return $this->render('ExamenHolaBundle:Default:index.html.twig', array('name' => $name));
	return  new Response('<html><body>Hola.$name</body></html>');
    }
}
