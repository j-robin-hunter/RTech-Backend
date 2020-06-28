<?php
/**
* Copyright © 2019 Roma Technology Limited. All rights reserved.
* See COPYING.txt for license details.
*/
namespace RTech\Backend\Plugin\Order\Create\Billing;

class Address {

  public function aroundGetTemplate(
    \Magento\Sales\Block\Adminhtml\Order\Create\Billing\Address $subject,
    \Closure $proceed
  ) {
    return 'RTech_Backend::order/create/form/address.phtml';
  }
}