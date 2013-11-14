<?php /* This file is generated from /usr/share/nginx/www/eastwood/lib/limb/constructor/template/admin_controller/controller.phtml*/?><?php
if(!class_exists('MacroTemplateExecutor40d8a0dca20484c8bc720ab1c512d814', false)){
require_once('limb/macro/src/compiler/lmbMacroTemplateExecutor.class.php');
class MacroTemplateExecutor40d8a0dca20484c8bc720ab1c512d814 extends lmbMacroTemplateExecutor {
function render($args = array()) {
if($args) extract($args);
$this->_init();
 ?>lmb_require('limb/cms/src/controller/lmbAdminObjectController.class.php');
lmb_require('src/model/<?php echo htmlspecialchars($this->model_name,3); ?>.class.php');

class Admin<?php echo htmlspecialchars($this->model_name,3); ?>Controller extends lmbAdminObjectController
{
  protected $_object_class_name = '<?php echo htmlspecialchars($this->model_name,3); ?>';

  <?php if($this->datetime_columns) {
 ?>protected function _onBeforeValidate()
  {
    parent :: _onBeforeValidate();<?php $K = 0;$M = $this->datetime_columns;

if(!is_array($M) && !($M instanceof Iterator) && !($M instanceof IteratorAggregate)) {
$M = array();}
$L = $M;
foreach($L as $item) {if($K == 0) {} ?>$this->_validateAndSetDateFormatted($this->item, '<?php $O='';
$P = $item;
$O = $P->getName();
echo htmlspecialchars($O,3); ?>');<?php $K++;}if($K > 0) {} ?>}<?php }
 ?>
}<?php 
}

}
}
$macro_executor_class='MacroTemplateExecutor40d8a0dca20484c8bc720ab1c512d814';