<?php /* This file is generated from /usr/share/nginx/www/eastwood/lib/limb/constructor/template/model/model.phtml*/?><?php
if(!class_exists('MacroTemplateExecutorc93703f7d70c1a0da8587706fb500d6a', false)){
require_once('limb/macro/src/compiler/lmbMacroTemplateExecutor.class.php');
class MacroTemplateExecutorc93703f7d70c1a0da8587706fb500d6a extends lmbMacroTemplateExecutor {
function render($args = array()) {
if($args) extract($args);
$this->_init();
 ?>

class <?php echo htmlspecialchars($this->model_name,3); ?> extends lmbActiveRecord
{
  protected $_db_table_name = '<?php echo htmlspecialchars($this->table_name,3); ?>';

  protected $_default_sort_params = array('id'=>'asc');

<?php  if(count($this->lazy_attributes)) { ?>  protected $_lazy_attributes = array('<?php  echo implode("', '", $this->lazy_attributes); ?>');<?php  echo "\n\r"; } ?>

<?php  if($this->relations_exist) { ?>  protected function _defineRelations()
  {
<?php  if($this->has_many) { ?>    $this->_has_many = <?php echo $this->has_many; ?>;<?php  echo "\n\r"; } ?>
<?php  if($this->many_belongs_to) { ?>    $this->_many_belongs_to = <?php echo $this->many_belongs_to; ?>;<?php  echo "\n\r"; } ?>
<?php  if($this->has_one) { ?>    $this->_has_one = <?php echo $this->has_one; ?>;<?php  echo "\n\r"; } ?>
<?php  if($this->belongs_to) { ?>    $this->_belongs_to = <?php echo $this->belongs_to; ?>;<?php  echo "\n\r"; } ?>
<?php  if($this->has_many_to_many) { ?>    $this->_has_many_to_many = <?php echo $this->has_many_to_many; ?>;<?php  echo "\n\r"; } ?>
  }

<?php  } ?>
}<?php 
}

}
}
$macro_executor_class='MacroTemplateExecutorc93703f7d70c1a0da8587706fb500d6a';