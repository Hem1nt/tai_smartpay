<?php
class Tai_Smartpay_Block_Form_Smartpay extends Mage_Payment_Block_Form
{
protected function _construct()
{
parent::_construct();
$this->setTemplate('tai_smartpay/form/smartpay.phtml');
}
}
