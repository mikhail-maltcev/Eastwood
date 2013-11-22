<?php /* This file is generated from /usr/share/nginx/www/eastwood/template/admin_category/create.phtml*/?><?php
if(!class_exists('MacroTemplateExecutor91c94f0ea220ca402f394f9fb524e0fc', false)){
require_once('limb/macro/src/compiler/lmbMacroTemplateExecutor.class.php');
class MacroTemplateExecutor91c94f0ea220ca402f394f9fb524e0fc extends lmbMacroTemplateExecutor {
function render($args = array()) {
if($args) extract($args);
$this->_init();
 ?><html>
<head>
    <title><?php echo htmlspecialchars($this->title,3); ?> :: Limb3 shop example application on &#123;&#123;macro&#125;&#125;</title>
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
    <link rel=stylesheet type="text/css" href="/styles/main.css"/>
</head>
<body>



<form id='category_form' name='category_form' method='post' runat='server'>

        <core:wrap in='title_zone'>Create category</core:wrap>
        <core:wrap in='form_zone'>

            <div class="field">
                <label for="name" runat="server">Name category</label>
                <input type="text" name="name" size="40" title='Title' class='req'/>
            </div>

            <div class='form-buttons'>
                    <input id='edit' type='submit' class='action'  value='Add' runat='client'/>
            </div>

        </core:wrap>

</form>





</body>
</html><?php 
}

}
}
$macro_executor_class='MacroTemplateExecutor91c94f0ea220ca402f394f9fb524e0fc';