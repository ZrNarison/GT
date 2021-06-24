<?php 
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
class releve extends AbstractController
{
    /**
     * @Route("/Rélèvé", name="rel_circuit.index")
     * @return Response;
     */
    public function index():Response
    {
        // return new Response ('Mes box');
        return $this->render("pages/releve.html.twig");
    }
}