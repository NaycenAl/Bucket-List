<?php

namespace App\Controller;



use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController {


    /**
     *@Route("/home", name= "home")
     */
    public function home() {
        $userName= "Dominique";
      return  $this->render('/base.html.twig', array("userName" => $userName));

    }


}

