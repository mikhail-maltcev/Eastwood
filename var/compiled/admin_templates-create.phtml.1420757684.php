<?php /* This file is generated from /usr/share/nginx/www/eastwood/lib/limb/constructor/template/admin_templates/create.phtml*/?><?php
if(!class_exists('MacroTemplateExecutor7354ce5b56c2669e5995c9b9963eb3db', false)){
require_once('limb/macro/src/compiler/lmbMacroTemplateExecutor.class.php');
class MacroTemplateExecutor7354ce5b56c2669e5995c9b9963eb3db extends lmbMacroTemplateExecutor {
function render($args = array()) {
if($args) extract($args);
$this->_init();
 ?>[[wrap with="admin_modal_page_layout.phtml" into="content_zone"]]
  [[form id='object_form' name='user_form' method='post' enctype="multipart/form-data"]]

    <h1>Создать <?php echo htmlspecialchars($this->model_url,3); ?></h1>

    [[include file='_admin/form_errors.phtml'/]]
    [[include file='admin_<?php echo htmlspecialchars($this->model_url,3); ?>/include/form_fields.phtml'/]]
    [[include file='_admin/form_buttons.phtml'/]]

  [[/form]]
[[/wrap]]<?php 
}

}
}
$macro_executor_class='MacroTemplateExecutor7354ce5b56c2669e5995c9b9963eb3db';