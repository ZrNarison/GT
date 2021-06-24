<?php 
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
class protection extends AbstractController
{
    /**
     * @Route("/Sécurité", name="protection.index")
     * @return Response;
     */
    public function index():Response
    {
        // return new Response ('Mes box');
        return $this->render("pages/protection.html.twig");
    }
}