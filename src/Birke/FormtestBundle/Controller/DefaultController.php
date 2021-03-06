<?php

namespace Birke\FormtestBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use Birke\FormtestBundle\Entity\TestData;
use Birke\FormtestBundle\Form\TestDataType;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     * @Template()
     */
    public function indexAction(Request $request)
    {
    	$data = new TestData();
    	$form = $this->createForm(new TestDataType(), $data, array(
 		   'action' => $this->generateUrl('birke_formtest_default_index'),
		   'method' => 'POST',
		));

    	$form->handleRequest($request);

        return array('form' => $form->createView());
    }
}
