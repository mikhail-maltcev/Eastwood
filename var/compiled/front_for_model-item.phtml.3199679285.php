<?php /* This file is generated from /usr/share/nginx/www/eastwood/lib/limb/constructor/template/front_for_model/item.phtml*/?><?php
if(!class_exists('MacroTemplateExecutor8fa276f6d10121b4f862660b98dda46e', false)){
require_once('limb/macro/src/compiler/lmbMacroTemplateExecutor.class.php');
class MacroTemplateExecutor8fa276f6d10121b4f862660b98dda46e extends lmbMacroTemplateExecutor {
function render($args = array()) {
if($args) extract($args);
$this->_init();
 ?>[[wrap with="front_page_layout.phtml" in="content_zone"]]
  <h1><?php echo htmlspecialchars($this->model_name,3); ?> #[$this->item.id]</h1>
  <p><a href="/<?php echo htmlspecialchars($this->model_url,3); ?>/">к списку</a></p>
  <?php $I = 0;$K = $this->columns;

if(!is_array($K) && !($K instanceof Iterator) && !($K instanceof IteratorAggregate)) {
$K = array();}
$J = $K;
foreach($J as $column) {if($I == 0) { ?><ul><?php } ?>

    <li><?php $M='';
$N = $column;
$M = $N->getName();
echo htmlspecialchars($M,3); ?>: [$this->item.<?php $O='';
$P = $column;
$O = $P->getName();
echo htmlspecialchars($O,3);$Q='';
$R = $column;
$Q = $R->getNativeType() == 'text';
if($Q) {
 ?>|raw<?php }
 ?>]</li>
  <?php $I++;}if($I > 0) { ?></ul><?php } ?>

[[/wrap]]<?php 
}

}
}
$macro_executor_class='MacroTemplateExecutor8fa276f6d10121b4f862660b98dda46e';