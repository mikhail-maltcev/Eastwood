<?php
lmb_require('limb/tree/src/lmbMPTree.class.php');
lmb_require('limb/dbal/src/lmbSimpleDb.class.php');

class Tree
{
    const NODE_TABLE = 'Tree';
    private $db;
    private $conn;
    private $mpTree;


    function __construct()
    {
        $toolkit = lmbToolkit :: instance();
        $this->conn = $toolkit->getDefaultDbConnection();
        $this->db = new lmbSimpleDb($this->conn);
        $this->mpTree = new lmbMPTree(self::NODE_TABLE, $this->conn);
    }

    function addNodeTo($node_id, $identifier)
    {
        $node = $this->mpTree->getNode($node_id);
        $this->mpTree->createNode($node, array('identifier' => $identifier));
    }

    function deleteNode($node_id)
    {
        $node = $this->mpTree->getNode($node_id);
        $this->mpTree->deleteNode($node);
    }

    function getData()
    {
        $root_tree = $this->mpTree->getRootNode();
        $rs = $this->mpTree->getChildrenAll($root_tree)->getArray();
        return $rs;
    }

    function getRootNode()
    {
        return $this->mpTree->getRootNode();
    }


    function checkChildren($node_id)
    {
        $rs = $this->mpTree->getChildrenAll($node_id)->getArray();
        return $rs;
    }

    function getFoliage()
    {
        $ids_foliage=self::GetArrayIdsFoliageTree();
        return $this->mpTree->getNodesByIds($ids_foliage);
    }

    function GetArrayIdsFoliageTree()
    {
        $root_tree = $this->mpTree->getRootNode();
        $rs = $this->mpTree->getChildrenAll($root_tree);
        $ids_foliage=array();
        foreach ($rs as $key)
        {
            foreach ($key as $value)
            {
                if(!self::checkChildren($value)){
                    array_push($ids_foliage, $value);
                };
                break;
            }
        }
        return $ids_foliage;
    }

    function getIdsBranch($root_branch_id)
    {
        $rs = $this->mpTree->getChildrenAll($root_branch_id);
        $ids_branch=array($root_branch_id);
        foreach ($rs as $key)
        {
            foreach ($key as $value)
            {
                if(!self::checkChildren($value)){
                    array_push($ids_branch, $value);
                };
                break;
            }
        }
        return $ids_branch;

    }

}

