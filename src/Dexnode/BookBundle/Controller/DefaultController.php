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

    public function showAction($slug)
    {
        $m = $this->getDoctrine()->getManager();
        $book = $m->getRepository('DexnodeBookBundle:Book')->findOneBySlug($slug);

        if(empty($book) || $book->getIsActive() == FALSE)
        {
            $url = $this->generateUrl('dexnode_book_homepage');
            return $this->redirect($url);
        }

        return $this->render('DexnodeBookBundle:Book:view.html.haml', array('book'=>$book));
    }

    public function categoryAction($slug)
    {
        $m = $this->getDoctrine()->getManager();
        $category = $m->getRepository('DexnodeBookBundle:Category')->findOneBySlug($slug);

        if(empty($category) || $category->getIsActive() == FALSE)
        {
            $url = $this->generateUrl('dexnode_book_homepage');
            return $this->redirect($url);
        }        

        $books = $category->getBooks();
        return $this->render('DexnodeBookBundle:Default:index.html.haml', array('books'=>$books, 'category'=>$category));        
    }
}
