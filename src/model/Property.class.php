<?php
lmb_require('limb/active_record/src/lmbActiveRecord.class.php');

class Property extends lmbActiveRecord
{
    protected $_has_many = array('PropertyValue' => array('field' => 'property_id','class' => 'PropertyValue'));

    function getPropertiesIdsByNodeId($node_id)
    {
        $this->Property = new Property();
        return $this->Property->find('Property', 'node_id = '.$node_id);
    }
}