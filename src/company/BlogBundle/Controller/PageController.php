<?php

namespace company\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class PageController extends Controller
{
    
    public function indexAction()
    {
        return $this->render('companyBlogBundle:Page:index.html.twig');
    }
}
