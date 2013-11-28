<?php
lmb_require('limb/cms/src/controller/lmbAdminObjectController.class.php');
lmb_require('limb/util/system/lmbFs.class.php');
lmb_require('src/model/Tree.class.php');
lmb_require('src/model/Property.class.php');

class AdminCategoryController extends lmbAdminObjectController
{
    protected $_object_class_name = 'Category';

    function doDisplay()
    {
        $tree = new Tree();
        $this->Tree = $tree->getData();
    }


    function doCreate()
    {
        if ($this->request->hasPost()) {
            $category_id = $this->request->getInteger('id');
            $category_name = $this->request->getRequest('name');

            $tree = new Tree();
            $this->Tree = $tree->addNodeTo($category_id, $category_name);
            $this->redirect();
        }
    }

    function doDelete()
    {
        $category_id = $this->request->getInteger('id');

        $tree = new Tree();
        $this->Tree = $tree->deleteNode($category_id);
        $this->redirect();
    }

    function doCreateProperty()
    {
        $category_id = $this->request->getInteger('id');
        if ($this->request->hasPost())
        {
            $tree = new Tree();
            if(!$tree->checkChildren($category_id))
            {
                $property = new Property();
                $property->import($this->request);
                $property->remove('id');
                $property->save();
            }else
            {
                echo 'you cant add property to this category!';
            }
        }
        $this->node_id = $category_id;
        $this->property = lmbActiveRecord::find('Property', 'node_id = '.$category_id);
    }

    function doDeleteProperty()
    {
        $property = new Property();
        $property->import($this->request);
        $property->destroy();
        $this->redirect();
    }

}