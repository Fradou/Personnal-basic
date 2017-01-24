<?php

namespace MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use ChasseBundle\Repository\JobRepository;

class BackController extends Controller
{
    public function indexAction()
    {
        $entity = $this->getDoctrine()->getRepository('MainBundle:User')->findAll();

        $colnb = count($entity[0]);
        $collab = [];
        foreach($entity[0] as $key => $value){
            $collab[]=$key;
        }


        return $this->render('back/template.html.twig', array(
            'colnb' => $colnb,
            'collab' => $collab,
            'entity' => $entity,
            // ...
        ));
    }

}
