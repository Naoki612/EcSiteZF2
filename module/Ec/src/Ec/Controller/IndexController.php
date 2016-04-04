<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Ec\Controller;

use Ec\Controller\ActionController;
use Zend\View\Model\ViewModel;
use Ec\Model\Brand;

class IndexController extends ActionController
{
    public function indexAction()
    {
    	$this->setLayout();
    	$brand = new Brand();
    	$brands = $brand->getBrand();

        return new ViewModel(array(
        		'brands' => $brands,
        ));
    }
    public function testAction()
    {
    	$this->setLayout();
    	return new ViewModel(array(
    			'brands' => $brands,
    	));
    }
}
