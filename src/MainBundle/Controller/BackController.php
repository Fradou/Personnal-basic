<?php

namespace MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use MainBundle\Repository\UserRepository;

class BackController extends Controller
{
    public function indexAction()
    {
        /* Get all datas */
        $entity = $this->getDoctrine()->getRepository('MainBundle:User')->findAll();

        /* Get entity labels */
        $em = $this->getDoctrine()->getManager();
        $labels = $em->getClassMetadata('MainBundle:User')->getColumnNames();
        $colnb = count($labels);

        return $this->render('back/template.html.twig', array(
            'colnb' => $colnb,
            'collab' => $labels,
            'entries' => $entity,
            // ...
        ));
    }

}
