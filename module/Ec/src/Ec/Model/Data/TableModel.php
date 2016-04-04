<?php

namespace Ec\Model\Data;


use Zend\Db\TableGateway\TableGateway;
use Zend\Db\TableGateway\Feature\GlobalAdapterFeature;
use Zend\Db\Sql\Sql;

class TableModel extends TableGateway
{
    protected $name;

    public function __construct($adapter = null)
    {
        if ($adapter == null) {
            $adapter = GlobalAdapterFeature::getStaticAdapter();
        }
        if ($sql == null) {
        	$sql = new Sql($adapter);
        }
        $connection = $adapter->getDriver()->getConnection();
        parent::__construct($this->name, $adapter);
    }
}