<?php

namespace Myapp\GestionProjetBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('GestionProjetBundle:Default:index.html.twig');
    }
    
     public function acceuilAction()
    {
        return $this->render('GestionProjetBundle:templates:acceuil.html.twig');
    }
    
         public function aboutAction()
    {
        return $this->render('GestionProjetBundle:templates:about.html.twig');
    }
    
         public function batimentAction()
    {
        return $this->render('GestionProjetBundle:templates:batiment.html.twig');
    }
    
          public function electriciteAction()
    {
        return $this->render('GestionProjetBundle:templates:electricite.html.twig');
    }
}
