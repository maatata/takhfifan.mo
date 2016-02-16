<?php
/*
This is the block created for this module to analyze and pass 
featured products to the template file to show to the user

Created By: Mohammad Bagheri
Email: m.bagheri1987@gmail.com
*/

class Takhfifan_Featuredproducts_Block_Featuredproducts extends Mage_Core_Block_Template {
  
  public function getFeaturedProducts() 
  {
    $arr_products = array();
    $products = Mage::getModel("featuredproducts/featuredproducts")   // Get Products by calling featuredproducts Model
                      ->getFeaturedProducts();

    foreach ($products as $product):    // Loop through all grabbed products and assign them to array
      $arr_products[] = array(          // to use in template
          'prduct_id' => $product->getId(),
          'product_name' => $product->getName(),
          'product_url' => $product->getProductUrl(),
          'is_featured' => $product->getFeatured()      // 0- No  1- Yes
        );
    endforeach;
  
    return $arr_products;
  }

}