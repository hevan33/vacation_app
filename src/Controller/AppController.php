<?php 
namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;



class AppController extends AbstractController{
      /** 
         * @Route("/") 
         * @Method({"GET","POST"})
          */
    public function index() {
      //return new response
        
        return $this->render('index.html.twig');
       
    }
}