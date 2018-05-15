<?php

namespace AppBundle\Controller;

use AppBundle\Entity\PlaneModel;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Planemodel controller.
 *
 * @Route("planemodel")
 */
class PlaneModelController extends Controller
{
    /**
     * Lists all planeModel entities.
     *
     * @Route("/", name="planemodel_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $planeModels = $em->getRepository('AppBundle:PlaneModel')->findAll();

        return $this->render('planemodel/index.html.twig', array(
            'planeModels' => $planeModels,
        ));
    }
}