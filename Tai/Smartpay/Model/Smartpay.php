<?php
class Tai_Smartpay_Model_Smartpay extends Mage_Payment_Model_Method_Abstract
{
  protected $_code = 'tai_smartpay';
  protected $_formBlockType = 'tai_smartpay/form_smartpay';
  protected $_infoBlockType = 'tai_smartpay/info_smartpay';
  public function assignData($data)
  {
    if (!($data instanceof Varien_Object)) {
    $data = new Varien_Object($data);
    }
    $info = $this->getInfoInstance();
    
    $info->setCustomFieldThree($data->getCustomFieldThree())
    ->setCustomFieldFour($data->getCustomFieldFour())
    ;
    return $this;
  }

  public function validate()
  {
  parent::validate();
  $info = $this->getInfoInstance();
  $errorMsg = false;
  if (!$info->getCustomFieldThree())
  {
  $errorCode = 'invalid_data';
  $errorMsg = $this->_getHelper()->__("CustomFieldThree is a required field.\n");
  }
  if (!$info->getCustomFieldFour())
  {
  $errorCode = 'invalid_data';
  $errorMsg .= $this->_getHelper()->__('CustomFieldFour is a required field.');
  }
  if ($errorMsg)
  {
  Mage::throwException($errorMsg);
  }
  return $this;
}
// public function getOrderPlaceRedirectUrl()
// {
// return Mage::getUrl('tai_smartpay/payment/redirect', array('_secure' => false));
// }
}
