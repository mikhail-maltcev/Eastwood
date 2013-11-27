<?php
class Order extends lmbActiveRecord
{
    protected $_has_many = array('lines' => array('field' => 'order_id',
        'class' => 'OrderLine'));

}