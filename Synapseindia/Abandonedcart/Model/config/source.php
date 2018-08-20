<?php

//Author  : Synapseindia

namespace Synapseindia\Abandonedcart\Model\Config;

class source implements \Magento\Framework\Option\ArrayInterface
{
    /**
     * @return array
     */
    public function toOptionArray()
    {

        return [
            ['value' => 1, 'label' => __('1')],
            ['value' => 2, 'label' => __('2')], ['value' => 3, 'label' => __('3')]
          
				   
        ];
    }
}
?>