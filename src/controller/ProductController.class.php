<?php
lmb_require('limb/cms/src/controller/lmbObjectController.class.php');
lmb_require('src/model/Product.class.php');
lmb_require('src/model/Tree.class.php');
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



}
