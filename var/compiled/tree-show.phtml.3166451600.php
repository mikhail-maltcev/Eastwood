<?php /* This file is generated from /usr/share/nginx/www/eastwood/template/tree/show.phtml*/?><?php
if(!class_exists('MacroTemplateExecutor641077654df7c9890c80717c6c60323b', false)){
require_once('limb/macro/src/compiler/lmbMacroTemplateExecutor.class.php');
class MacroTemplateExecutor641077654df7c9890c80717c6c60323b extends lmbMacroTemplateExecutor {
function render($args = array()) {
if($args) extract($args);
$this->_init();
 ?><h1>Main page t</h1>




<?php $this->_render_tree2c9a1388183d9dd2a33fc25755f130d8($this->Tree, 0,array('kids_prop' => 'childs','prefix' => '1',));
 ?>


<?php 
}

function _render_tree2c9a1388183d9dd2a33fc25755f130d8($G,$level,$I= array()) {
if($I) extract($I);$H=0;
foreach($G as $comment) {
$counter = $H+1;
if(!$H) {
 ?>

<ul>
    <?php }
 ?>

    <li>
        <?php echo htmlspecialchars($prefix,3); ?>.<?php echo htmlspecialchars($counter,3); ?>)<?php $N='';
$O = $comment;
if((is_array($O) || ($O instanceof ArrayAccess)) && isset($O['identifier'])) { $N = $O['identifier'];
}else{ $N = '';}
echo htmlspecialchars($N,3); ?>

        <?php $new_prefix = $prefix . "." . $counter; ?><?php if(isset($comment["childs"])) {$this->_render_tree2c9a1388183d9dd2a33fc25755f130d8($comment["childs"], $level + 1, array('prefix' => $new_prefix,));
} ?>

    </li>
    <?php $H++;
}
if(count($G) == 0) { ?>

    Комментарии отсуствуют
    <?php }if($H) {
 ?>

    
</ul>
<?php }

}

}
}
$macro_executor_class='MacroTemplateExecutor641077654df7c9890c80717c6c60323b';