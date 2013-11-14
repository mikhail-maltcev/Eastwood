<?php /* This file is generated from /usr/share/nginx/www/eastwood/template/user/edit.phtml*/?><?php
if(!class_exists('MacroTemplateExecutorb5348a6a501460f83037427a855628fa', false)){
require_once('limb/macro/src/compiler/lmbMacroTemplateExecutor.class.php');
require_once('limb/macro/src/tags/form/lmbMacroFormWidget.class.php');
require_once('limb/macro/src/tags/form/lmbMacroInputWidget.class.php');
require_once('limb/macro/src/tags/form/lmbMacroTextAreaWidget.class.php');
class MacroTemplateExecutorb5348a6a501460f83037427a855628fa extends lmbMacroTemplateExecutor {

function _init() {
$this->form_profile_form = new lmbMacroFormWidget('profile_form');
$this->form_profile_form->setAttributes(array (
  'id' => 'profile_form',
  'name' => 'profile_form',
  'method' => 'post',
));
$this->input_id001 = new lmbMacroInputWidget('login');
$this->input_id001->setAttributes(array (
  'name' => 'login',
  'type' => 'text',
  'title' => 'Login',
));
$this->input_id001->setForm($this->form_profile_form);
$this->form_profile_form->addChild($this->input_id001);
$this->input_id002 = new lmbMacroInputWidget('name');
$this->input_id002->setAttributes(array (
  'name' => 'name',
  'type' => 'text',
  'title' => 'Name',
));
$this->input_id002->setForm($this->form_profile_form);
$this->form_profile_form->addChild($this->input_id002);
$this->input_id003 = new lmbMacroInputWidget('email');
$this->input_id003->setAttributes(array (
  'name' => 'email',
  'type' => 'text',
  'title' => 'Email',
  'error_class' => 'error',
));
$this->input_id003->setForm($this->form_profile_form);
$this->form_profile_form->addChild($this->input_id003);
$this->textarea_id004 = new lmbMacroTextAreaWidget('address');
$this->textarea_id004->setAttributes(array (
  'name' => 'address',
  'id' => 'address',
  'type' => 'text',
  'title' => 'Delivery address',
));
$this->textarea_id004->setForm($this->form_profile_form);
$this->form_profile_form->addChild($this->textarea_id004);
$this->form_change_password_form = new lmbMacroFormWidget('change_password_form');
$this->form_change_password_form->setAttributes(array (
  'id' => 'change_password_form',
  'name' => 'change_password_form',
  'method' => 'post',
));
$this->input_id005 = new lmbMacroInputWidget('old_password');
$this->input_id005->setAttributes(array (
  'name' => 'old_password',
  'type' => 'text',
  'title' => 'Old password',
));
$this->input_id005->setForm($this->form_change_password_form);
$this->form_change_password_form->addChild($this->input_id005);
$this->input_id006 = new lmbMacroInputWidget('password');
$this->input_id006->setAttributes(array (
  'name' => 'password',
  'type' => 'text',
  'title' => 'Password',
));
$this->input_id006->setForm($this->form_change_password_form);
$this->form_change_password_form->addChild($this->input_id006);
$this->input_id007 = new lmbMacroInputWidget('repeat_password');
$this->input_id007->setAttributes(array (
  'name' => 'repeat_password',
  'type' => 'text',
  'title' => 'Repeat password',
));
$this->input_id007->setForm($this->form_change_password_form);
$this->form_change_password_form->addChild($this->input_id007);

}
function render($args = array()) {
if($args) extract($args);
$this->_init();
 ?><?php  $this->title = 'Your profile'; ?>
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


          <?php if(isset($this->__slot_handlers_content_zone)) {foreach($this->__slot_handlers_content_zone as $__slot_handler_content_zone) {call_user_func_array($__slot_handler_content_zone, array(array()));}}$this->__slotHandler439cbd7fbac9ea0d3874492c4a8ea370(array()); ?>

        </div>
      </div>

    <div id="sidebar">
      <div id="navigation">
        <ul>
          <li><a href="product">Products</a></li>
          <li><a href="cart">Your Cart</a></li>
          <?php  if($this->toolkit->getUser()->is_logged_in) { ?>
            <li><a href="/user/orders/">Your Orders</a></li>
          <?php  } ?>
        </ul>
      </div>

      <dl id="profile">
        <dt>Profile</dt>
        <?php $BO='';
$BP = $this->toolkit;
if((is_array($BP) || ($BP instanceof ArrayAccess)) && isset($BP['user'])) { $BO = $BP['user'];
}else{ $BO = '';}
$this->__staticInclude6('user/include/profile_box.phtml', $BO); ?>

      </dl>

    </div>


        
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

function __slotHandler439cbd7fbac9ea0d3874492c4a8ea370($O= array()) {
if($O) extract($O); ?>


This is your profile page. You can change some of your profile fields as well as your password<br/>

<h2>Profile</h2>
<?php if(isset($this->form_profile_form_datasource))$this->form_profile_form->setDatasource($this->form_profile_form_datasource);
if(isset($this->form_profile_form_error_list))$this->form_profile_form->setErrorList($this->form_profile_form_error_list);
 ?><form<?php $this->form_profile_form->renderAttributes(); ?>>

  <?php $this->__staticInclude3('user/include/form_fields.phtml'); ?>

  <hr/>
  <input id='edit' name='edit' type='submit' value='Update profile'/>

</form>

<h2>Password change form</h2>

<?php if(isset($this->form_change_password_form_datasource))$this->form_change_password_form->setDatasource($this->form_change_password_form_datasource);
if(isset($this->form_change_password_form_error_list))$this->form_change_password_form->setErrorList($this->form_change_password_form_error_list);
 ?><form<?php $this->form_change_password_form->renderAttributes(); ?>>

  <?php $this->__staticInclude5('_admin/form_errors.phtml'); ?>


  <dl class="required field">
    <dt><label for="name">Old password:</label></dt>
    <dd><input<?php $this->input_id005->renderAttributes(); ?> /></dd>
  </dl>

  <dl class="required field">
    <dt><label for="name">Password:</label></dt>
    <dd><input<?php $this->input_id006->renderAttributes(); ?> /></dd>
  </dl>

  <dl class="required field">
    <dt><label for="name">Repeat password:</label></dt>
    <dd><input<?php $this->input_id007->renderAttributes(); ?> /></dd>
  </dl>

  <hr/>
  <input id='change_password' name='change_password' type='submit' value='Change password'/>

</form>
<?php 
}

function __staticInclude3($file) {
$this->__staticInclude4('_admin/form_errors.phtml'); ?>


<dl class="required field">
  <dt><label for="title">Login<span class="star">*</span> :</label></dt>
  <dd><input<?php $this->input_id001->renderAttributes(); ?> /></dd>
</dl>

<dl class="required field">
  <dt><label for="name">Name<span class="star">*</span> :</label></dt>
  <dd><input<?php $this->input_id002->renderAttributes(); ?> /></dd>
</dl>

<dl class="required field">
  <dt><label for="email">Email<span class="star">*</span> :</label></dt>
  <dd><input<?php $this->input_id003->renderAttributes(); ?> /></dd>
</dl>

<dl class="field">
  <dt><label for="address">Delivery address:</label></dt>
  <dd>
    <textarea<?php $this->textarea_id004->renderAttributes(); ?>><?php echo htmlspecialchars($this->textarea_id004->getValue(), ENT_QUOTES);
 ?></textarea>
  </dd>
</dl><?php 
}

function __staticInclude4($file) {
$fields_errors = $this->form_profile_form->getErrorList();
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

function __staticInclude5($file) {
$fields_errors = $this->form_change_password_form->getErrorList();
 ?>

<?php $BI = 0;$BK = $fields_errors;

if(!is_array($BK) && !($BK instanceof Iterator) && !($BK instanceof IteratorAggregate)) {
$BK = array();}
$BJ = $BK;
foreach($BJ as $error) {if($BI == 0) { ?>
  <div class="message_error">
    <b class='title'><?php 
    echo lmb_i18n('Fields with errors','cms');
         ?></b>
    <ol>
      <?php } ?>
        <li><font color="red"><?php $BM='';
$BN = $error;
if((is_array($BN) || ($BN instanceof ArrayAccess)) && isset($BN['message'])) { $BM = $BN['message'];
}else{ $BM = '';}
echo htmlspecialchars($BM,3); ?></font></li>
      <?php $BI++;}if($BI > 0) { ?>
    </ol>
  </div>
<?php }
}

function __staticInclude6($file,$user) {
 ?><?php  if($user->is_logged_in) { ?>
<dd>
  User: <?php $BQ='';
$BR = $user;
if((is_array($BR) || ($BR instanceof ArrayAccess)) && isset($BR['name'])) { $BQ = $BR['name'];
}else{ $BQ = '';}
echo htmlspecialchars($BQ,3); ?><br/>
  Login: <?php $BS='';
$BT = $user;
if((is_array($BT) || ($BT instanceof ArrayAccess)) && isset($BT['login'])) { $BS = $BT['login'];
}else{ $BS = '';}
echo htmlspecialchars($BS,3); ?><br/>
  Email: <?php $BU='';
$BV = $user;
if((is_array($BV) || ($BV instanceof ArrayAccess)) && isset($BV['email'])) { $BU = $BV['email'];
}else{ $BU = '';}
echo htmlspecialchars($BU,3); ?><br/>
  <a href="/user/edit/">edit</a>
  <a href="/user/logout/">logout</a>
</dd>
<?php  } else {?>
<dd>
  <form method="POST" id='login_form' action='/user/login/'>

    <label for='login'>Login:</label><br/>
    <input type="text" name="login" id="login" title="Login" class='input'/><br/>

    <label for='passwd'>Password:</label><br/>
    <input type="text" name="password" id="password" type="password" title="Password" class='input'/><br/>

    <p>Use <b>admin</b>/<b>secret</b> to enter in <a href="/admin/">administration panel</a>.</p>

    <input type='submit' name='submitted' value="Submit"/><br/>
  </form>
  <a href="/user/register/">Register</a>
</dd>
<?php  } ?>
included<?php 
}

}
}
$macro_executor_class='MacroTemplateExecutorb5348a6a501460f83037427a855628fa';