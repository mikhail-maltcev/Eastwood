<?php /* This file is generated from /usr/share/nginx/www/eastwood/lib/limb/constructor/template/front_for_model/display.phtml*/?><?php
if(!class_exists('MacroTemplateExecutor3f17b7f2607f8e591ce65affb396c877', false)){
require_once('limb/macro/src/compiler/lmbMacroTemplateExecutor.class.php');
class MacroTemplateExecutor3f17b7f2607f8e591ce65affb396c877 extends lmbMacroTemplateExecutor {
function render($args = array()) {
if($args) extract($args);
$this->_init();
 ?>[[wrap with="front_page_layout.phtml" in="content_zone"]]
  <h1><?php echo htmlspecialchars($this->model_name,3); ?></h1>  
  [[list:list using="$this->items" as="$item"]]
  <ul>
    [[list:item]]
      <?php $model_url_name = lmb_under_scores($this->model_name); ?>
      <li><a href="/<?php echo htmlspecialchars($model_url_name,3); ?>/item/[$item.id]">[$item.id]</a></li>
    [[/list:item]]
  </ul>
  [[/list:list]]
[[/wrap]]
<?php 
}

}
}
$macro_executor_class='MacroTemplateExecutor3f17b7f2607f8e591ce65affb396c877';