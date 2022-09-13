<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class SortieController extends AbstractController
{
    /**
     * @Route("/rechercher", name="sortie_rechercher")
     */
    public function rechercher()
    {


        return $this->render('sortie/rechercher.html.twig');


    }




}