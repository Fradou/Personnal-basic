<?php

namespace MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use MainBundle\Repository\UserRepository;

class BackController extends Controller
{
    public function indexAction()
    {
        /* Get all datas */

        /* Get entity labels */
        $em = $this->getDoctrine()->getManager();
        $labels = $em->getClassMetadata('MainBundle:User')->getFieldNames();
        $colnb = count($labels);
        $all = "";
        for ($i=0; $i<$colnb; $i++){
            if($i!=($colnb-1)){
            $all = $all."'u.".$labels[$i]."',";
                }
                else {
                    $all = $all."'u.".$labels[$i]."'";
                }
        }

        $entity = $this->getDoctrine()->getRepository('MainBundle:User')->recup($all);

        return $this->render('back/template.html.twig', array(
            'colnb' => $colnb,
            'collab' => $labels,
            'entries' => $entity,
            // ...
        ));
    }

}
