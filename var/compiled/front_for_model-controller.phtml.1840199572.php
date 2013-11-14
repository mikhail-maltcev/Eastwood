<?php /* This file is generated from /usr/share/nginx/www/eastwood/lib/limb/constructor/template/front_for_model/controller.phtml*/?><?php
if(!class_exists('MacroTemplateExecutor97081e328def80db0ea9feb4b574c561', false)){
require_once('limb/macro/src/compiler/lmbMacroTemplateExecutor.class.php');
class MacroTemplateExecutor97081e328def80db0ea9feb4b574c561 extends lmbMacroTemplateExecutor {
function render($args = array()) {
if($args) extract($args);
$this->_init();
 ?>lmb_require('limb/cms/src/controller/lmbObjectController.class.php');
lmb_require('src/model/<?php echo htmlspecialchars($this->model_name,3); ?>.class.php');
class <?php echo htmlspecialchars($this->model_name,3); ?>Controller extends lmbObjectController
{
  protected $_object_class_name = '<?php echo htmlspecialchars($this->model_name,3); ?>';
}
<?php 
}

}
}
$macro_executor_class='MacroTemplateExecutor97081e328def80db0ea9feb4b574c561';