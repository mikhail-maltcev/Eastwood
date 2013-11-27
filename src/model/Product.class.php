<?php

class Product extends lmbActiveRecord
{
    protected $_default_sort_params = array('title' => 'ASC');

    protected function _createValidator()
    {
        $validator = new lmbValidator();
        $validator->addRequiredRule('title');
        $validator->addRequiredRule('description');
        $validator->addRequiredRule('price');
        return $validator;
    }

    function getImagePath()
    {
        if (($image_name = $this->getImageName()) && file_exists(lmb_env_get('PRODUCT_IMAGES_DIR') . $image_name))
            return lmb_env_get('LIMB_HTTP_BASE_PATH') . 'product_images/' . $image_name;
        else
            return lmb_env_get('LIMB_HTTP_BASE_PATH') . '/shared/cms/images/icons/cancel.png';
    }

    static function findLastProduct()
    {
        $last_product = lmbActiveRecord::find('Product', array('limit' => 5, 'sort' => array('id' => 'DESC')));
        return $last_product;
    }

    static function findProductsCategories($categories)
    {
        $string_categories=self::idsCategoriesToString($categories);

        $products = lmbActiveRecord::find('Product', $string_categories);

        return $products;
    }

    static function idsCategoriesToString($categories)
    {
        $index=0;
        foreach($categories as $category ){
            if(!$index==0){
                $string_categories= $string_categories.' or node_id = '.$category;
            }else{
                $string_categories= 'node_id = '.$category;
            }
            $index++;
        }
        return $string_categories;
    }




}