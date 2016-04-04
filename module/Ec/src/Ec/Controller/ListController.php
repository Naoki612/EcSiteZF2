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
use Ec\Model\Item;

class ListController extends ActionController
{
    public function indexAction()
    {
		$item = new Item();
		$itemList = $item->getItemList();
        return new ViewModel(array(
        		'itemList' => $itemList,
        ));

    }
}
