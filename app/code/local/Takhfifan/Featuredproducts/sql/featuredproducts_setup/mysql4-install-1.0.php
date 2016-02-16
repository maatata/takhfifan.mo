<?php

$installer = $this;

// Add new Attribute group
$groupName = "Promotions";
$order = 2;

$entityTypeId = $installer->getEntityTypeId('catalog_product');
$attributeSetId = $installer->getDefaultAttributeSetId($entityTypeId);
$installer->addAttributeGroup($entityTypeId, $attributeSetId, $groupName, $order);

$installer->installEntities();
