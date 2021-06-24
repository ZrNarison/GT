<?php
namespace App\Controller;

use App\Entity\Piece;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
// use Twig\Environment;

class DefaultController extends AbstractController
{   
    /**
     * @var Environment
     */
    // //     private $twig;

    public function __construct($twig)
    {
        $this->twig = $twig;
    }
    /**
     * @Route("Acceuil", name="menu")
     * @return Response
     * @throws Exception
     */
    
    public function index (): Response
    {
        // return new Response("salut tous le monde");
        // return new Response($this->twig->render("pages/menu.html.twig"));
        return $this->render("pages/menu.html.twig");
    }
}