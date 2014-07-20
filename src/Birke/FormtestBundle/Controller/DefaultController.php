<?php

namespace Birke\FormtestBundle\Controller;

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
    public function indexAction()
    {
    	$data = new TestData();
    	$form = $this->createForm(new TestDataType(), $data);
        return array('form' => $form->createView());
    }
}
