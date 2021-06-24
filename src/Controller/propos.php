<?php 
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
class propos extends AbstractController
{
    /**
     * @Route("/A_propos", name="a_propos.index")
     * @return Response;
     */
    public function index():Response
    {
        // return new Response ('Mes box');
        return $this->render("pages/information.html.twig");
    }
}