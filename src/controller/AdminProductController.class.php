<?php
lmb_require('limb/cms/src/controller/lmbAdminObjectController.class.php');
lmb_require('limb/util/system/lmbFs.class.php');
lmb_require('src/model/PropertyValue.class.php');
lmb_require('src/model/Property.class.php');

class AdminProductController extends lmbAdminObjectController
{
    protected $_object_class_name = 'Product';

    protected function _onBeforeSave()
    {
        if($this->current_action=='create'){

            $category_id = $this->request->getInteger('id');
            $this->item->setNodeId($category_id);
            $this->item->remove('id');
        };

        return $this->_uploadImage($this->item, $this->request->get('image'));
    }

    protected function _onAfterSave()
    {
        $this->_addEmptyPropertiesProduct();
    }

    function _addEmptyPropertiesProduct()
    {
        $category_id = $this->request->getInteger('id');
        $product_id=$this->item->getId();

        $properties= lmbActiveRecord :: find('Property', 'node_id = ' . $category_id);
        foreach ($properties as $property) {
            $property_id=$property->getId();

            $property_value = new PropertyValue();
            $property_value->setPropertyId($property_id);
            $property_value->setProductId($product_id);
            $property_value->remove('id');
            $property_value->save();
        }
    }


    function _uploadImage($item, $uploaded_image)
    {
        if (!$uploaded_image)
            return;

        if (!$uploaded_image['name'] || !$uploaded_image['tmp_name'])
            return;

        $file_name = $uploaded_image['name'];
        $file_path = $uploaded_image['tmp_name'];

        $dest_path = lmb_env_get('PRODUCT_IMAGES_DIR') . $file_name;
        lmbFs :: cp($file_path, $dest_path);

        unlink($file_path);

        $item->setImageName($file_name);
    }

    function doSetAvailable()
    {
        return $this->_changeAvailability(true);
    }

    function doSetUnavailable()
    {
        return $this->_changeAvailability(false);
    }

    protected function _changeAvailability($is_available)
    {
        if (!$ids = $this->request->getArray('ids')) {
            $this->_endDialog();
            return;
        }
        $products = lmbActiveRecord :: findByIds('Product', $ids);
        foreach ($products as $product) {
            $product->setIsAvailable((int)$is_available);
            $product->save();
        }
        $this->_endDialog();
    }

    function doEditProperty()
    {
        $product_id = $this->request->getInteger('id');

        if($this->request->hasPost()){
            $property_value_id = $this->request->getInteger('property_id');
            $value = $this->request->get('value');

            $property_value = new PropertyValue($property_value_id);
            $property_value->setValue($value);

            $property_value->save();
        }
        $this->items = lmbActiveRecord::find('PropertyValue','product_id = ' . $product_id , array( 'join' => 'property'));
    }

    function doCreateTo()
    {
        $category_id = $this->request->getInteger('id');

        $this->items = lmbActiveRecord::find('Product', 'node_id = ' . $category_id);
        $this->category = $category_id;
    }

    function doDisplay()
    {
        $tree = new Tree();
        $this->Tree=$tree->getFoliage();
    }







}