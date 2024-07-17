<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/wish", name="app_wish")
 */
class WishController extends AbstractController
{

    public function index(): Response
    {
        return $this->render('wish/index.html.twig', [
            'controller_name' => 'WishController',
        ]);
    }


    /**
     *@Route("/list" , name ="_list")
     */

    public function List()
    {
        return $this->render('wish/list.html.twig', []);
    }

    /**
     *@Route("/detail" , name ="_wish")
     */
    public function Detail()
    {
        return $this->render('wish/detail.html.twig', []);
    }

}
