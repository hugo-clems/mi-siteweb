<?php

namespace NIBundle\Controller;

use NIBundle\Entity\Danger;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class DangerController extends DefaultController
{
    public function getAllTypeDangerAction() {
        $em = $this->getDoctrine()->getManager();

        $typeDangerList = $em->getRepository("NIBundle:TypeDanger")->findAll();

        return $this->formatJsonResponse($typeDangerList);
    }

    public function getAllDangerAroundAction(Request $request) {
        $x = $request->get('x');
        $y = $request->get('y');

        $em = $this->getDoctrine()->getManager();

        $res = $em->getRepository("NIBundle:Danger")->findAllByLocation($x,$y);

        return $this->formatJsonResponse($res);
    }

    public function newDangerAction(Request $request) {
        $type = $request->get('type');
        $x = $request->get('x');
        $y = $request->get('y');
        $detail = $request->get('detail');

        $em = $this->getDoctrine()->getManager();

        $type = $em->getRepository("NIBundle:TypeDanger")->find($type);

        $localisation = $em->getRepository("NIBundle:Localisation")->findOneBy(
            array('x' => $x, 'y' => $y)
        );

        if($localisation == null) {

        }

        $danger = Danger::generateDanger(0,$detail, $type, $localisation);

        $em->persist($danger);
        $em->flush();
        return new JsonResponse($danger);
    }
}
