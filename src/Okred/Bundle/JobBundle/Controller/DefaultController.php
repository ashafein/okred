<?php

namespace Okred\Bundle\JobBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('OkredJobBundle:Default:index.html.twig');
    }

    public function aboutAction()
    {
        return $this->render('OkredJobBundle:Default:about.html.twig');
    }
}
