<?php /* This file is generated from /usr/share/nginx/www/eastwood/lib//limb/web_app/template/not_found.phtml*/?><?php
if(!class_exists('MacroTemplateExecutor63bf53c1dac9a71ec5b3cd46445c0c7c', false)){
require_once('limb/macro/src/compiler/lmbMacroTemplateExecutor.class.php');
class MacroTemplateExecutor63bf53c1dac9a71ec5b3cd46445c0c7c extends lmbMacroTemplateExecutor {
function render($args = array()) {
if($args) extract($args);
$this->_init();
 ?><html>
<head><title>404 Page Not Found Error.</title></head>
<body>

<h3>404 Page Not Found Error.</h3>
<p>Check if such a controller and template exist, and action is valid.</p>

</body>
</html>
<?php 
}

}
}
$macro_executor_class='MacroTemplateExecutor63bf53c1dac9a71ec5b3cd46445c0c7c';