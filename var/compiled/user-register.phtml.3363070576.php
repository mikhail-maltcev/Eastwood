<?php /* This file is generated from /usr/share/nginx/www/eastwood/template/user/register.phtml*/?><?php
if(!class_exists('MacroTemplateExecutorbc5d5cd67448a04de71ace4eeb207ea8', false)){
require_once('limb/macro/src/compiler/lmbMacroTemplateExecutor.class.php');
require_once('limb/macro/src/tags/form/lmbMacroFormWidget.class.php');
require_once('limb/macro/src/tags/form/lmbMacroInputWidget.class.php');
require_once('limb/macro/src/tags/form/lmbMacroTextAreaWidget.class.php');
class MacroTemplateExecutorbc5d5cd67448a04de71ace4eeb207ea8 extends lmbMacroTemplateExecutor {

function _init() {
$this->form_register_form = new lmbMacroFormWidget('register_form');
$this->form_register_form->setAttributes(array (
  'id' => 'register_form',
  'name' => 'register_form',
  'method' => 'post',
));
$this->input_id001 = new lmbMacroInputWidget('login');
$this->input_id001->setAttributes(array (
  'name' => 'login',
  'type' => 'text',
  'title' => 'Login',
));
$this->input_id001->setForm($this->form_register_form);
$this->form_register_form->addChild($this->input_id001);
$this->input_id002 = new lmbMacroInputWidget('name');
$this->input_id002->setAttributes(array (
  'name' => 'name',
  'type' => 'text',
  'title' => 'Name',
));
$this->input_id002->setForm($this->form_register_form);
$this->form_register_form->addChild($this->input_id002);
$this->input_id003 = new lmbMacroInputWidget('email');
$this->input_id003->setAttributes(array (
  'name' => 'email',
  'type' => 'text',
  'title' => 'Email',
  'error_class' => 'error',
));
$this->input_id003->setForm($this->form_register_form);
$this->form_register_form->addChild($this->input_id003);
$this->input_id004 = new lmbMacroInputWidget('password');
$this->input_id004->setAttributes(array (
  'name' => 'password',
  'type' => 'text',
  'title' => 'Password',
  'error_class' => 'error',
));
$this->input_id004->setForm($this->form_register_form);
$this->form_register_form->addChild($this->input_id004);
$this->input_id005 = new lmbMacroInputWidget('repeat_password');
$this->input_id005->setAttributes(array (
  'name' => 'repeat_password',
  'type' => 'text',
  'title' => 'Repeat password',
  'error_class' => 'error',
));
$this->input_id005->setForm($this->form_register_form);
$this->form_register_form->addChild($this->input_id005);
$this->textarea_id006 = new lmbMacroTextAreaWidget('address');
$this->textarea_id006->setAttributes(array (
  'name' => 'address',
  'id' => 'address',
  'type' => 'text',
  'title' => 'Delivery address',
));
$this->textarea_id006->setForm($this->form_register_form);
$this->form_register_form->addChild($this->textarea_id006);

}
function render($args = array()) {
if($args) extract($args);
$this->_init();
 ?><?php  $this->title = 'Registration'; ?>
<?php $this->__staticInclude1('front_page_layout.phtml', 'content_zone', 'content_zone', 'front_page_layout.phtml'); ?>

<?php 
}

function __staticInclude1($file,$in,$into,$file) {
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


        <?php if(isset($this->__slot_handlers_content_zone)) {foreach($this->__slot_handlers_content_zone as $__slot_handler_content_zone) {call_user_func_array($__slot_handler_content_zone, array(array()));}}$this->__slotHandlerbbf3c5b25c83d9baebf231f2d092363d(array()); ?>

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

function __slotHandlerbbf3c5b25c83d9baebf231f2d092363d($O= array()) {
if($O) extract($O); ?>


<?php if(isset($this->form_register_form_datasource))$this->form_register_form->setDatasource($this->form_register_form_datasource);
if(isset($this->form_register_form_error_list))$this->form_register_form->setErrorList($this->form_register_form_error_list);
 ?><form<?php $this->form_register_form->renderAttributes(); ?>>

  <?php $this->__staticInclude3('_admin/form_errors.phtml'); ?>


  <dl class="required field">
    <dt><label for="title">Login:</label></dt>
    <dd><input<?php $this->input_id001->renderAttributes(); ?> /></dd>
  </dl>

  <dl class="required field">
    <dt><label for="name">Name:</label></dt>
    <dd><input<?php $this->input_id002->renderAttributes(); ?> /></dd>
  </dl>

  <dl class="required field">
    <dt><label for="email">Email:</label></dt>
    <dd><input<?php $this->input_id003->renderAttributes(); ?> /></dd>
  </dl>

  <dl class="required field">
    <dt><label for="password">Password:</label></dt>
    <dd><input<?php $this->input_id004->renderAttributes(); ?> /></dd>
  </dl>

  <dl class="required field">
    <dt><label for="repeat_password">Repeat password:</label></dt>
    <dd><input<?php $this->input_id005->renderAttributes(); ?> /></dd>
  </dl>

  <dl class="field">
    <dt><label for="address">Delivery address:</label></dt>
    <dd>
      <textarea<?php $this->textarea_id006->renderAttributes(); ?>><?php echo htmlspecialchars($this->textarea_id006->getValue(), ENT_QUOTES);
 ?></textarea>
    </dd>
  </dl>

  <hr/>
   <input id='register' type='submit' value='Register'/>
</form>
<?php 
}

function __staticInclude3($file) {
$fields_errors = $this->form_register_form->getErrorList();
 ?>

<?php $V = 0;$X = $fields_errors;

if(!is_array($X) && !($X instanceof Iterator) && !($X instanceof IteratorAggregate)) {
$X = array();}
$W = $X;
foreach($W as $error) {if($V == 0) { ?>
  <div class="message_error">
    <b class='title'><?php 
    echo lmb_i18n('Fields with errors','cms');
         ?></b>
    <ol>
      <?php } ?>
        <li><font color="red"><?php $Z='';
$BB = $error;
if((is_array($BB) || ($BB instanceof ArrayAccess)) && isset($BB['message'])) { $Z = $BB['message'];
}else{ $Z = '';}
echo htmlspecialchars($Z,3); ?></font></li>
      <?php $V++;}if($V > 0) { ?>
    </ol>
  </div>
<?php }
}

}
}
$macro_executor_class='MacroTemplateExecutorbc5d5cd67448a04de71ace4eeb207ea8';