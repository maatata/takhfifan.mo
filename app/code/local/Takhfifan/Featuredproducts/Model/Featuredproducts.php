<?php
/*
This is the model created for this module to get all featured products
from database using Magento catalog/product core model

Created By: Mohammad Bagheri
Email: m.bagheri1987@gmail.com
*/
class Takhfifan_Featuredproducts_Model_Featuredproducts extends Mage_Core_Model_Abstract {
  	public function getFeaturedProducts() {
  		$products = Mage::getModel("catalog/product")	
  						->getCollection()
  						->addAttributeToSelect(array(		// this identified what attributes we need
					        'name',							// to have from this ouptup
					        'featured'						// here we need product name and is featured
					    ))
					    ->addFieldToFilter(array(					// limit the result to just featured products
						    array('attribute'=>'featured','eq'=>1)        
						))
						->setOrder('entity_id', 'DESC')		// order it by lastadded product
						->setPageSize(5);					// return 5 product
    	return $products;
  	}
}