<?php

namespace Dexnode\BookBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('DexnodeBookBundle:Default:index.html.haml', array());
    }

    public function menuAction()
    {
    	$m = $this->getDoctrine()->getManager();
    	$categories = $m->getRepository('DexnodeBookBundle:Category')->findByIsActive(TRUE);

    	return $this->render('DexnodeBookBundle:Default:menu.html.haml', array('categories'=>$categories));
    }
}
