<?php

namespace Dexnode\BookBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $m = $this->getDoctrine()->getManager();
        $books = $m->getRepository('DexnodeBookBundle:Book')->findByIsActive(TRUE);

        return $this->render('DexnodeBookBundle:Default:index.html.haml', array('books'=>$books));
    }

    public function menuAction()
    {
    	$m = $this->getDoctrine()->getManager();
    	$categories = $m->getRepository('DexnodeBookBundle:Category')->findByIsActive(TRUE);

    	return $this->render('DexnodeBookBundle:Default:menu.html.haml', array('categories'=>$categories));
    }
}
