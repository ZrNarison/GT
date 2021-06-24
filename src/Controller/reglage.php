<?php 
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
class reglage extends AbstractController
{
    /**
     * @Route("/Réglage", name="reglage.index")
     * @return Response;
     */
    public function index():Response
    {
        // return new Response ('Mes box');
        return $this->render("pages/parameter.html.twig");
    }
}