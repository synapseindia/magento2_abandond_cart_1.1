<?php
  

//Author  : Synapseindia
  
namespace Synapseindia\Abandonedcart\Model\ResourceModel\Listcrontable;
  
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
  
class Collection extends AbstractCollection
{
    /**
     * Define model & resource model
     */
    protected function _construct()
    {
        $this->_init(
            'Synapseindia\Abandonedcart\Model\Listcrontable',
            'Synapseindia\Abandonedcart\Model\ResourceModel\Listcrontable'
        );
    }
}