<?php
lmb_require('limb/cms/src/controller/lmbObjectController.class.php');
lmb_require('src/model/Product.class.php');
lmb_require('src/model/Tree.class.php');
lmb_require('src/model/PropertyValue.class.php');
class ProductController extends lmbObjectController
{
  protected $_object_class_name = 'Product';

    function doDisplay()
    {
        $products= new Product();

        $this->products=$products->findLastProduct();
    }

    function doProductsCategory()
    {
        $node_id = $this->request->getInteger('id');

        $tree=new Tree();
        $categories=$tree->getIdsBranch($node_id);

        $products= new Product();
        $this->products=$products->findProductsCategories($categories);
    }

    function doAboutProduct()
    {
        $product_id = $this->request->getInteger('id');
        $product= new Product($product_id);

        $this->properties = lmbActiveRecord::find('PropertyValue','product_id = ' . $product_id , array( 'join' => 'property'));

        $this->product=$product;
    }

}
