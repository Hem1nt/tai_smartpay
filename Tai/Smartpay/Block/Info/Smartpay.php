<?php
class Tai_Smartpay_Block_Info_Smartpay extends Mage_Payment_Block_Info
{
  protected function _prepareSpecificInformation($transport = null)
  {
    if (null !== $this->_paymentSpecificInformation) 
    {
      return $this->_paymentSpecificInformation;
    }
    
    $data = array();
    if ($this->getInfo()->getCustomFieldThree()) 
    {
        $data[Mage::helper('payment')->__('Custom Field Three')] = $this->getInfo()->getCustomFieldThree();
    }
    
    if ($this->getInfo()->getCustomFieldFour()) 
    {
        $data[Mage::helper('payment')->__('Custom Field Four')] = $this->getInfo()->getCustomFieldFour();
    }

    $transport = parent::_prepareSpecificInformation($transport);
    
    return $transport->setData(array_merge($data, $transport->getData()));
  }
}
