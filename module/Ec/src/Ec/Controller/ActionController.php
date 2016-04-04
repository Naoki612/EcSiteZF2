<?php
namespace Ec\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Ec\Model\Brand;

class ActionController extends AbstractActionController
{
    public function setLayout()
    {
    	$brand = new Brand();
    	$brands = $brand->getBrand();
    	$this->layout()->setVariables(array('brands' => $brands));

    }
}
