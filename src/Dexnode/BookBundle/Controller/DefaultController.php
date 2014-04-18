<?php

namespace Dexnode\BookBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('DexnodeBookBundle:Default:index.html.haml', array());
    }
}
