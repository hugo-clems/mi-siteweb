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

    protected $serializer;

    /**
     * Instancie le normalizer
     */
    public function __construct()
    {
        $encoders = [new JsonEncoder()];
        $normalizers = [new ObjectNormalizer()];
        $this->serializer = new Serializer($normalizers, $encoders);
    }

    public function exampleAction()
    {
<<<<<<< HEAD
=======
        return new Response("coucou");
    }

    public function coucouAction(){
>>>>>>> origin/clear_project
        $em = $this->getDoctrine()->getManager();
        $users = $em->getRepository('NIBundle:Utilisateur')->findAll();
        return $this->formatJsonResponse($users);
    }

    /**
     * Ajoute les headers qu'il faut pour la réponse
     * @param $resultats
     * @return mixed
     */
    public final function formatJsonResponse($resultats)
    {
        $resultatsSerialized = $this->serializer->serialize($resultats, 'json');
        $rep = new Response($resultatsSerialized);
        $rep->headers->set('Content-Type', 'application/json');
        $rep->setCharset('utf-8');
        return $rep;
    }
}
