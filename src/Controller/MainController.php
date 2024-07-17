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

    /**
     *@Route("/aboutUs", name="aboutus")
     */

    public function aboutUs() {

        $contenuJson = file_get_contents('../data/team.json');
        $contenu = json_decode($contenuJson);

        return $this->render('main/about_us.html.twig',  array('content'=>$contenu, ));
    }


}

