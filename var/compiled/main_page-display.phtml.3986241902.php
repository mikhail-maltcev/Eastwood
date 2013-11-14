<?php /* This file is generated from /usr/share/nginx/www/eastwood/template/main_page/display.phtml*/?><?php
if(!class_exists('MacroTemplateExecutora8adcbbee0e6afc689671caee7d1ba82', false)){
require_once('limb/macro/src/compiler/lmbMacroTemplateExecutor.class.php');
class MacroTemplateExecutora8adcbbee0e6afc689671caee7d1ba82 extends lmbMacroTemplateExecutor {
function render($args = array()) {
if($args) extract($args);
$this->_init();
 ?><?php  $this->title = 'Main page'; ?>
<?php $this->__staticInclude1('front_page_layout.phtml', 'content_zone', 'front_page_layout.phtml');
}

function __staticInclude1($file,$into,$file) {
 ?><html>
<head>
  <title><?php echo htmlspecialchars($this->title,3); ?> :: Limb3 shop example application on &#123;&#123;macro&#125;&#125;</title>
  <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
  <link rel=stylesheet type="text/css" href="/styles/main.css"/>
</head>
<body>

<div id="header">
  <div class="center">
    <img src="http://bits.limb-project.com/shop/images/logo.limb.gif"  width='384' height='46' alt='logo.limb' id='logo'/>
    <div id="limb_links"><a href="http://limb-project.com">limb-project.com</a>&nbsp;|&nbsp;<a href="http://bits.limb-project.com">bits.limb-project.com</a></div>
  </div>
</div>

 <div id="center">

  <div id="wrapper" >

    <div id="container">
      <div id="content">
        <h1><?php echo htmlspecialchars($this->title,3); ?></h1>

        <?php $this->__staticInclude2('flash_box.phtml'); ?>


        <?php if(isset($this->__slot_handlers_content_zone)) {foreach($this->__slot_handlers_content_zone as $__slot_handler_content_zone) {call_user_func_array($__slot_handler_content_zone, array(array()));}}$this->__slotHandler2020890dc59e2e76760e6a0eb7479d0a(array()); ?>

      </div>
    </div>

    <div id="sidebar">
      <div id="navigation">
        <ul>
          <li><a href="/product/">Products</a></li>
          <li><a href="/cart/">Your Cart</a></li>
          <li><a href="/user/login">Login</a></li>
        </ul>
      </div>

      <dl id="profile">
        <dt>Profile</dt>
        <dd>
          Not yet implemented.
        </dd>
      </dl>
    </div>
  </div>
</div>
</body>
</html><?php 
}

function __staticInclude2($file) {
 ?><?php  $flash_messages = $this->toolkit->getFlashBox()->getUnifiedList(); ?>
<?php $G = 0;$I = $flash_messages;

if(!is_array($I) && !($I instanceof Iterator) && !($I instanceof IteratorAggregate)) {
$I = array();}
$H = $I;
foreach($H as $item) {if($G == 0) { ?>

<?php } ?>

<?php  if($item['is_error']){ ?><div class="error_border"><b><?php $K='';
$L = $item;
if((is_array($L) || ($L instanceof ArrayAccess)) && isset($L['message'])) { $K = $L['message'];
}else{ $K = '';}
echo htmlspecialchars($K,3); ?></b></div><?php  } ?>
<?php  if($item['is_message']){ ?><div class="border"><b><?php $M='';
$N = $item;
if((is_array($N) || ($N instanceof ArrayAccess)) && isset($N['message'])) { $M = $N['message'];
}else{ $M = '';}
echo htmlspecialchars($M,3); ?></b></div><?php  } ?>
<?php $G++;}if($G > 0) { ?>

<?php }
}

function __slotHandler2020890dc59e2e76760e6a0eb7479d0a($O= array()) {
if($O) extract($O); ?>

Welcome to our bookstore!
<?php 
}

}
}
$macro_executor_class='MacroTemplateExecutora8adcbbee0e6afc689671caee7d1ba82';