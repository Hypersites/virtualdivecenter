<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    /**
     * @Route("/bla", name="homepage")
     */
    public function indexAction()
    {
        $repository = $this->getDoctrine()->getManager()->getRepository('HypersitesClienteBundle:Client');
        $clients = $repository->findAll();
        $numberOfClients = count($clients);
        $leads = $repository->findLead();


        return $this->render('default/index.html.twig', array('breadcrumbs'=>array('Home'),
        'info' => array(
                '0'=>array('count'=>$numberOfClients,
                   'description'=>'Clients on the System',
                    'icon' => 'users',
                    'color' => 'red',
                    'fullDescription' => 'This is the number of Clients on the System',
                    'fullCount' => $numberOfClients,
                    'notifications' => 'Clients',
                ),
                '1'=>array('count'=>count($leads),
                    'description'=>'Leads on the system',
                    'icon' => 'mail',
                    'color' => 'blue',
                    'fullDescription' => 'Number of Leads on the System',
                    'fullCount' => count($leads),
                    'notifications' => 'Leads',)
                ),
        ));
    }
}
