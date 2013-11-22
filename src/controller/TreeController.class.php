<?php
lmb_require('src/model/Tree.class.php');

class TreeController extends lmbController
{

    function doInitTree()
    {
        $tree = new Tree();
        $tree->addData();
    }

    function doShow()
    {
        $tree = new Tree();
        $this->Tree=$tree->getData();

    }
}

?>