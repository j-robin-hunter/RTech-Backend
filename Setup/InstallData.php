<?php
/**
* Copyright © 2019 Roma Technology Limited. All rights reserved.
* See COPYING.txt for license details.
*/
namespace RTech\Backend\Setup;

use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface;

class InstallData implements InstallDataInterface {

  private $eavSetupFactory;

  public function __construct(
  \Magento\Eav\Setup\EavSetupFactory $eavSetupFactory
  ) {
    $this->eavSetupFactory = $eavSetupFactory;
  }

  public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context) {
    $eavSetup = $this->eavSetupFactory->create();
    $eavSetup->addAttribute(
      \Magento\Catalog\Model\Product::ENTITY,
      'installation',
      [
        'type' => 'text',
        'label' => 'Installation',
        'input' => 'textarea',
        'required' => false,
        'global' => ScopedAttributeInterface::SCOPE_STORE,
        'wysiwyg_enabled' => true,
        'is_html_allowed_on_front' => true,
        'group' => 'Content'
      ]
    );
  }
}