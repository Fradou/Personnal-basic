<?php

namespace MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BackController extends Controller
{
    public function indexAction()
    {
        return $this->render('MainBundle:Back:index.html.twig', array(
            // ...
        ));
    }

}
