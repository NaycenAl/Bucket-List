<?php

namespace App\Controller;

use App\Entity\Wish;
use App\Form\AddWishType;
use Doctrine\ORM\EntityManagerInterface;
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

    public function showListWishes(EntityManagerInterface $entityManager): Response
    {

        $wishes = $entityManager->getRepository(Wish::class)->findAll();

        return $this->render('wish/list.html.twig', [
            'wishes' => $wishes,
        ]);
    }



    /**
     *@Route("/detail/{id}" , name ="_detail_id")
     */
    public function Detail(EntityManagerInterface $entityManager, int $id)
    {
        $wish = $entityManager->getRepository(Wish::class)->find($id);
        return $this->render('wish/detail.html.twig',['wish' => $wish] );
    }

    /**
     *@Route("/newWish" , name ="app_wish_newwish")
     */

    public function newWish() : Response
    {
        $wish = new Wish();
        $wish->setDateCreated((new \DateTimeImmutable('now')));
        $wish->setIsPublished(true);

        $form = $this->createForm(AddWishType::class, $wish);

        return $this->render('wish/newWish.html.twig', ['form' => $form->createView()]);

    }
}
