<?php


namespace Ec\Model;

use Ec\Model\Data\BrandNo;
use Ec\Model\Data\ItemNoTable;


class  Item {

	//アイテムの検索
	public function getItemList($where = null){
		$itemNo = new ItemNoTable();
		$brandNo = new BrandNo();
		$rowset = $itemNo->getItemNo($where);
		foreach ($rowset as $item) {
			$item['brandName'] = $brandNo->getBrandName($item['itemBrandNo']);
			$itemList[] = $item;
		}
		return $itemList;
	}

}