<?php
lmb_require('limb/active_record/src/lmbActiveRecord.class.php');

class PropertyValue extends lmbActiveRecord
{

    protected $_many_belongs_to = array('property' => array('field' => 'property_id','class' => 'Property'));

    function createEmptyProperty()
    {
        $this->PropertyValue = new PropertyValue();
    }

}