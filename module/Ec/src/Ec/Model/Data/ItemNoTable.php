<?php

namespace Ec\Model\Data;

class ItemNoTable extends TableModel
{
	protected $name = 'itemNoTable';

	public function getItemNo($where = null) {
		$select = $this->getSql()->select();
		if ($where !== null) {
			$select->where($where);
		}
		$rowset = $this->selectWith($select);
		return $rowset;
	}
}