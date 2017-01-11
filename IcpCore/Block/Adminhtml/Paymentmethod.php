<?php

namespace Icepay\IcpCore\Block\Adminhtml;

class Paymentmethod extends \Magento\Backend\Block\Widget\Grid\Container
{
    protected function _construct()
    {
        $this->_blockGroup = 'Icepay_IcpCore';
        $this->_controller = 'adminhtml';
        parent::_construct();

        $this->removeButton('add');

        $this->addButton(
            'sync',
            [
                'label' => 'Sync',
                'onclick' => 'setLocation(\'' . $this->getSyncUrl() . '\')',
                'class' => 'add primary'
            ]
        );

    }


    /**
     * @return string
     */
    public function getSyncUrl()
    {
        return $this->getUrl('*/*/sync');
    }



}