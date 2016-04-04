<?php

/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Ec\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Ec\Model\Brand;

class SingupController extends AbstractActionController
{
	public function indexAction()
	{
    	$brand = new Brand();
    	$brands = $brand->getBrand();
    	$this->layout()->setVariables(array('brands' => $brands));
        return new ViewModel();
	}
}
