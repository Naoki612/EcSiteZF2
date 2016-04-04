<?php

// namespace Ec\Model;

// use Ec\Model\Data\OrderHeader;
// use Ec\Model\Data\OrderDetail;

// class Order
// {
// 	public function add($data)
// 	{
// 		$adapter = GlobalAdapterFeature::getStaticAdapter();
// 		$connection = $adapter->getDrive()->getConnection();

// 		$header = new OrderHeader();
// 		$detail = new OrderDetail();

// 		$connection->beginTransaction();
// 		try{
// 			$header->insertNewOrder($data['user_id'], $data['pay_type']);
// 			$detail->insertOrderItems($data['items']);
// 			$connection->commit();
// 		} catch(\Exception $e) {
// 			$connection->rollback();
// 			return false;
// 		}
// 		return true;
// 	}
// }