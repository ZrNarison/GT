<?php 
namespace App\Controller;

use App\Entity\NBox;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
class Piece extends AbstractController
{
    /**
     * @Route("Mes Box", name="box.index")
     * @return Response;
     */
    public function index():Response
    {
        $box = new NBox();
        $box ->setNBox('1')
            ->setHofa('300000')
            ->setSecurite('12000')
            ->setEmplacement('Rez de chausse');
        $ebox = $this -> getDoctrine()->getManager();
        // $ebox -> $entityManager->persist($box);
        // $entityManager->flush();
        $ebox -> persist($box);
        $ebox->flush();
        // return new Response ('Mes box');
        return $this->render("pages/box.html.twig");
    }
}