<?php

namespace Ec\Model;

use Ec\Model\Data\BrandNo;

class Brand
{
	//ブランドリストの取得
	public function getBrand()
	{
		$brandNo = new BrandNo();
		$result = $brandNo->getBrandNo();
		foreach ($result as $brand) {
			$brands[] = $brand;
		}

		return $brands;
	}
}