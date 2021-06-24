<?php 
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
class Log extends AbstractController
{
    /**
     * @Route("/Mes Loges", name="logement.index")
     * @return Response;
     */
    public function index():Response
    {
        return $this->render("pages/Log.html.twig");
    }
}