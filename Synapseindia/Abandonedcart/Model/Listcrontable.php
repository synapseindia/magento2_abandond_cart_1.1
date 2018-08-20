<?php

//Author  : Synapseindia  
  
namespace Synapseindia\Abandonedcart\Model;
  
use Magento\Framework\Model\AbstractModel;
  
class Listcrontable extends AbstractModel
{
    /**
     * Define resource model
     */
    protected function _construct()
    {
        $this->_init('Synapseindia\Abandonedcart\Model\ResourceModel\Listcrontable');
    }
}