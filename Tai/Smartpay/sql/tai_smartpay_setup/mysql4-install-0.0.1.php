<?php
/**
* Created by PhpStorm.
* User: tai
* Date: 10/15/15
* Time: 12:07 PM
*/
/* @var $installer Mage_Core_Model_Resource_Setup */
$installer = $this;
$installer->startSetup();
$installer->run("
ALTER TABLE `{$installer->getTable('sales/quote_payment')}`
ADD `custom_field_three` VARCHAR( 255 ) NOT NULL,
ADD `custom_field_four` VARCHAR( 255 ) NOT NULL;
ALTER TABLE `{$installer->getTable('sales/order_payment')}`
ADD `custom_field_three` VARCHAR( 255 ) NOT NULL,
ADD `custom_field_four` VARCHAR( 255 ) NOT NULL;
");
$installer->endSetup();
