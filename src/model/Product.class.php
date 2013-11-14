<?php

class Product extends lmbActiveRecord
{
  protected $_db_table_name = 'product';

  protected $_default_sort_params = array('id'=>'asc');

  protected $_lazy_attributes = array('description');

  protected function _defineRelations()
  {
    $this->_has_many = array (
  'order_lines' => 
  array (
    'field' => 'product_id',
    'class' => 'OrderLine',
    'nullify' => true,
  ),
);
  }

}