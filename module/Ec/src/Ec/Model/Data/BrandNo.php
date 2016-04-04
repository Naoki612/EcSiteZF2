<?php

namespace Ec\Model\Data;

class BrandNo extends TableModel
{
	protected $name = 'brandNo';

	public function getBrandNo() {
		$select = $this->getSql()->select();
		$rowset = $this->selectWith($select);
		return $rowset;
	}
	//ブランド名の取得
	public function getBrandName($brandNo) {
		$select = $this->getSql()->select();
		$select->columns(array('brandName'));
		$select->where(array(
				'brandNo' => $brandNo
			));
		$select->limit(1);
		$rowset = $this->selectWith($select);
		//ひとまずselectWithからの値の取得方法がわかるまで
		foreach ($rowset as $row){
			$brandName = $row['brandName'];
		}
		return $brandName;
	}
}