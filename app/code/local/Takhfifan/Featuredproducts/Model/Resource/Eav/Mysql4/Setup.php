<?php
class Takhfifan_Featuredproducts_Model_Resource_Eav_Mysql4_Setup extends Mage_Eav_Model_Entity_Setup
{
	public function getDefaultEntities()
    {
        return array(
            'catalog_product' => array(
                'entity_model'      => 'catalog/product',
                'attribute_model'   => 'catalog/resource_eav_attribute',
                'table'             => 'catalog/product',
                'additional_attribute_table' => 'catalog/eav_attribute',
				'entity_attribute_collection' => 'catalog/product_attribute_collection',
                'attributes'        => array(
                    'test2' => array(
                        'group'             => 'Promotions',
                        'label'             => 'Is Featured?',
                        'type'              => 'int',
                        'input'             => 'boolean',
                        'default'           => '0',
                        'class'             => '',
                        'backend'           => '',
                        'frontend'          => '',
                        'source'            => '',
                        'global'            => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
                        'visible'           => true,
                        'required'          => false,
                        'user_defined'      => false,
                        'searchable'        => false,
                        'filterable'        => false,
                        'comparable'        => false,
                        'visible_on_front'  => false,
                        'visible_in_advanced_search' => false,
                        'unique'            => false
                    ),
               	)
           	),
      	); 
	}

	public function createNewAttributeSet($name) {
        Mage::app('default');
        $modelSet = Mage::getModel('eav/entity_attribute_set')
            ->setEntityTypeId(4) // 4 == "catalog/product"
            ->setAttributeSetName($name);
        $modelSet->save();        
        $modelSet->initFromSkeleton(4)->save(); // same thing
    }

}