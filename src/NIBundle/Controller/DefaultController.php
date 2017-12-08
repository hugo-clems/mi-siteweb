<?php

namespace NIBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

class DefaultController extends Controller
{

    private $serializer;

    public function __construct()
    {
        $encoders = [new JsonEncoder()];
        $normalizers = [new ObjectNormalizer()];
        $this->serializer = new Serializer($normalizers, $encoders);
    }

    public function indexAction()
    {
        return $this->render('NIBundle:Default:index.html.twig');
    }

    public function coucouAction(){
        $em = $this->getDoctrine()->getManager();

        $users = $em->getRepository("NIBundle:Utilisateur")->findAll();

        $rep = new Response($this->serializer->serialize($users, 'json'));

        $rep->headers->set('Content-Type', 'application/json');
        $rep->setCharset('utf-8');
        return $rep;
    }
}
