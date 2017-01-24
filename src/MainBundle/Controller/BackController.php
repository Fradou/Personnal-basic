<?php

namespace MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use MainBundle\Repository\UserRepository;

class BackController extends Controller
{
    public function indexAction()
    {
        $entity = $this->getDoctrine()->getRepository('MainBundle:User')->findAll();
        $entitarray = (array)$entity[0];

        $colnb = count($entitarray);
        $collab = [];
        foreach($entitarray as $key => $value){
            $collab[]=$key;
        }

        foreach($collab as $key => $value){

        }


        return $this->render('back/template.html.twig', array(
            'colnb' => $colnb,
            'collab' => $collab,
            'entity' => $entitarray,
            // ...
        ));
    }

}
