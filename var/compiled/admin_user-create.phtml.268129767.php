<?php /* This file is generated from /usr/share/nginx/www/eastwood/template/admin_user/create.phtml*/?><?php
if(!class_exists('MacroTemplateExecutor1ecb2f5e852e4f518a508e47161219af', false)){
require_once('limb/macro/src/compiler/lmbMacroTemplateExecutor.class.php');
require_once('limb/macro/src/tags/form/lmbMacroFormWidget.class.php');
require_once('limb/macro/src/tags/form/lmbMacroInputWidget.class.php');
require_once('limb/macro/src/tags/form/lmbMacroTextAreaWidget.class.php');
require_once('limb/macro/src/tags/form/lmbMacroFormLabelWidget.class.php');
class MacroTemplateExecutor1ecb2f5e852e4f518a508e47161219af extends lmbMacroTemplateExecutor {

function _init() {
$this->form_object_form = new lmbMacroFormWidget('object_form');
$this->form_object_form->setAttributes(array (
  'id' => 'object_form',
  'name' => 'user_form',
  'method' => 'post',
  'enctype' => 'multipart/form-data',
));
$this->input_id001 = new lmbMacroInputWidget('login');
$this->input_id001->setAttributes(array (
  'name' => 'login',
  'type' => 'text',
  'title' => 'Login',
));
$this->input_id001->setForm($this->form_object_form);
$this->form_object_form->addChild($this->input_id001);
$this->input_id002 = new lmbMacroInputWidget('name');
$this->input_id002->setAttributes(array (
  'name' => 'name',
  'type' => 'text',
  'title' => 'Name',
));
$this->input_id002->setForm($this->form_object_form);
$this->form_object_form->addChild($this->input_id002);
$this->input_id003 = new lmbMacroInputWidget('email');
$this->input_id003->setAttributes(array (
  'name' => 'email',
  'type' => 'text',
  'title' => 'Email',
  'error_class' => 'error',
));
$this->input_id003->setForm($this->form_object_form);
$this->form_object_form->addChild($this->input_id003);
$this->textarea_id004 = new lmbMacroTextAreaWidget('address');
$this->textarea_id004->setAttributes(array (
  'name' => 'address',
  'id' => 'address',
  'type' => 'text',
  'title' => 'Delivery address',
));
$this->textarea_id004->setForm($this->form_object_form);
$this->form_object_form->addChild($this->textarea_id004);
$this->label_id005 = new lmbMacroFormLabelWidget('id001');
$this->label_id005->setAttributes(array (
  'for' => 'name',
  'runtime_id' => 'id001',
));
$this->label_id005->setForm($this->form_object_form);
$this->form_object_form->addChild($this->label_id005);
$this->input_id006 = new lmbMacroInputWidget('password');
$this->input_id006->setAttributes(array (
  'name' => 'password',
  'type' => 'text',
  'title' => 'Password',
));
$this->input_id006->setForm($this->form_object_form);
$this->form_object_form->addChild($this->input_id006);
$this->input_id007 = new lmbMacroFormElementWidget('create');
$this->input_id007->setAttributes(array (
  'id' => 'create',
  'type' => 'submit',
));
$this->input_id007->setForm($this->form_object_form);
$this->form_object_form->addChild($this->input_id007);
$this->input_id008 = new lmbMacroInputWidget('cancel');
$this->input_id008->setAttributes(array (
  'id' => 'cancel',
  'type' => 'button',
  'onclick' => 'self.parent.tb_remove();',
  'runat' => 'client',
));
$this->input_id008->setForm($this->form_object_form);
$this->form_object_form->addChild($this->input_id008);

}
function render($args = array()) {
if($args) extract($args);
$this->_init();
$this->__staticInclude1('admin_modal_page_layout.phtml', 'content_zone', 'admin_modal_page_layout.phtml');
}

function __staticInclude1($file,$into,$file) {
 ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!-- Powered by LIMB | http://www.limb-project.com/ -->
<!-- Designed by BIT | http://www.bit-creative.com/ -->
<?php  $this->static_files_version = lmb_env_get('CMS_STATIC_FILES_VERSION'); ?>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <link rel="stylesheet" type="text/css" href="/shared/cms/styles/cp.css?<?php echo htmlspecialchars($this->static_files_version,3); ?>" />
  <!--[if IE]><link rel="stylesheet" type="text/css" href="/shared/cms/styles/cp_ie.css?<?php echo htmlspecialchars($this->static_files_version,3); ?>" /><![endif]-->
  <!--[if lt IE 7]><link rel="stylesheet" type="text/css" href="/shared/cms/styles/cp_ie6.css?<?php echo htmlspecialchars($this->static_files_version,3); ?>" /><![endif]-->
  <?php if(isset($this->__slot_handlers_header_zone)) {foreach($this->__slot_handlers_header_zone as $__slot_handler_header_zone) {call_user_func_array($__slot_handler_header_zone, array(array()));}}$this->__slotHandlerfd2a119fbfe5fbfd75bcb086403be308(array()); ?>

  <style type="text/css">
    <?php if(isset($this->__slot_handlers_css_zone)) {foreach($this->__slot_handlers_css_zone as $__slot_handler_css_zone) {call_user_func_array($__slot_handler_css_zone, array(array()));}}$this->__slotHandlerb2b1d4e666a69da49279b3c62247f532(array()); ?>

  </style>
</head>
<body>
  <div id="popup_wrapper">
    <?php $this->__staticInclude2('_admin/notify_zone.phtml'); ?>

    <?php if(isset($this->__slot_handlers_icon)) {foreach($this->__slot_handlers_icon as $__slot_handler_icon) {call_user_func_array($__slot_handler_icon, array(array()));}}$this->__slotHandler195ece63aa99c127dcf627dbb1998edd(array()); ?>

    <?php if(isset($this->__slot_handlers_title)) {foreach($this->__slot_handlers_title as $__slot_handler_title) {call_user_func_array($__slot_handler_title, array(array()));}}$this->__slotHandler11bf9db11106616b96069980a0e51db8(array()); ?>

    <?php if(isset($this->__slot_handlers_content_zone)) {foreach($this->__slot_handlers_content_zone as $__slot_handler_content_zone) {call_user_func_array($__slot_handler_content_zone, array(array()));}}$this->__slotHandlerbe5b10359ff7eeda814817516dbbabc1(array()); ?>

  </div>
</body>
<script src="<?php  echo lmb_env_get('JQUERY_FILE_URL'); ?>?<?php echo htmlspecialchars($this->static_files_version,3); ?>"></script>
<script src="/shared/js/js/limb.js?<?php echo htmlspecialchars($this->static_files_version,3); ?>"></script>
<script src="/shared/js/js/limb/url.js?<?php echo htmlspecialchars($this->static_files_version,3); ?>"></script>
<script src="/shared/js/js/limb/flash.js?<?php echo htmlspecialchars($this->static_files_version,3); ?>"></script>
<script src="/shared/js/js/limb/window.js?<?php echo htmlspecialchars($this->static_files_version,3); ?>"></script>
<script src="/shared/js/js/limb/forms.js?<?php echo htmlspecialchars($this->static_files_version,3); ?>"></script>
<script src="/shared/js/js/limb/form_elements.js?<?php echo htmlspecialchars($this->static_files_version,3); ?>"></script>
<script src="/shared/cms/js/tabs.js?<?php echo htmlspecialchars($this->static_files_version,3); ?>"></script>
<script src="/shared/cms/js/auto_tabs.js?<?php echo htmlspecialchars($this->static_files_version,3); ?>"></script>
<script src="/shared/cms/js/thickbox.js?<?php echo htmlspecialchars($this->static_files_version,3); ?>"></script>
<script src="/shared/cms/js/cp.js?<?php echo htmlspecialchars($this->static_files_version,3); ?>"></script>
<?php if(isset($this->__slot_handlers_js_include)) {foreach($this->__slot_handlers_js_include as $__slot_handler_js_include) {call_user_func_array($__slot_handler_js_include, array(array()));}}$this->__slotHandler3522cb453ca969bcfc73b11961f634f5(array()); ?>


<script type="text/javascript">
  <?php if(isset($this->__slot_handlers_js)) {foreach($this->__slot_handlers_js as $__slot_handler_js) {call_user_func_array($__slot_handler_js, array(array()));}}$this->__slotHandlereaef49bdea983eacccf188747bc88977(array()); ?>


  jQuery(window).ready(function()
  {
    <?php if(isset($this->__slot_handlers_js_ready)) {foreach($this->__slot_handlers_js_ready as $__slot_handler_js_ready) {call_user_func_array($__slot_handler_js_ready, array(array()));}}$this->__slotHandlercbba6c5da39066ee6417f08865daf52a(array()); ?>

  });
</script>
</html>
<?php 
}

function __slotHandlerfd2a119fbfe5fbfd75bcb086403be308($G= array()) {
if($G) extract($G);
}

function __slotHandlerb2b1d4e666a69da49279b3c62247f532($H= array()) {
if($H) extract($H);
}

function __staticInclude2($file) {
 ?>


<?php 
  $flashbox = $this->toolkit->getFlashBox();
  if($flashbox->hasErrors() || $flashbox->hasMessages()){ ?>
    <div id="flashbox" class="flashbox">
      <ul>
        <?php $I='';
$J = $flashbox;
$I = $J->getErrors();
$this->_template7aaf459b8197a3d5e716a1ef42526672(array('template' => 'flashbox','messages' => $I,'box_class' => 'error',)); ?>

        <?php $T='';
$U = $flashbox;
$T = $U->getMessages();
$this->_templateb1d71811380403fd4160d77cb5c9be75(array('template' => 'flashbox','messages' => $T,'box_class' => 'message',)); ?>

      </ul>
      <a href="javascipt:void(0)" href="javascript:void(0)" class='close' onclick="this.parentNode.style.display = 'none'; return false;">
        <?php 
    echo lmb_i18n('Close','cms');
         ?>

      </a>
    </div>
    <?php 
    $flashbox->reset();
   }
?><?php 
}

function _template7aaf459b8197a3d5e716a1ef42526672($K= array()) {
if($K) extract($K); ?>

  <?php $N = 0;$P = $messages;

if(!is_array($P) && !($P instanceof Iterator) && !($P instanceof IteratorAggregate)) {
$P = array();}
$O = $P;
foreach($O as $item) {if($N == 0) { ?>

    <?php } ?>

      <li><?php echo htmlspecialchars($item,3); ?></li>
    <?php $N++;}if($N > 0) { ?>

  <?php } ?>

<?php 
}

function _templateb1d71811380403fd4160d77cb5c9be75($V= array()) {
if($V) extract($V); ?>

  <?php $Y = 0;$BB = $messages;

if(!is_array($BB) && !($BB instanceof Iterator) && !($BB instanceof IteratorAggregate)) {
$BB = array();}
$Z = $BB;
foreach($Z as $item) {if($Y == 0) { ?>

    <?php } ?>

      <li><?php echo htmlspecialchars($item,3); ?></li>
    <?php $Y++;}if($Y > 0) { ?>

  <?php } ?>

<?php 
}

function __slotHandler195ece63aa99c127dcf627dbb1998edd($BF= array()) {
if($BF) extract($BF);
}

function __slotHandler11bf9db11106616b96069980a0e51db8($BG= array()) {
if($BG) extract($BG);
}

function __slotHandlerbe5b10359ff7eeda814817516dbbabc1($BH= array()) {
if($BH) extract($BH); ?>

  <?php if(isset($this->form_object_form_datasource))$this->form_object_form->setDatasource($this->form_object_form_datasource);
if(isset($this->form_object_form_error_list))$this->form_object_form->setErrorList($this->form_object_form_error_list);
 ?><form<?php $this->form_object_form->renderAttributes(); ?>>

    <h1>Create user</h1>

    <?php $this->__staticInclude3('_admin/form_errors.phtml'); ?>

    <?php $this->__staticInclude4('admin_user/include/form_fields.phtml'); ?>

    <?php $this->__staticInclude7('_admin/form_buttons.phtml'); ?>


  </form>
<?php 
}

function __staticInclude3($file) {
$fields_errors = $this->form_object_form->getErrorList();
 ?>

<?php $BO = 0;$BQ = $fields_errors;

if(!is_array($BQ) && !($BQ instanceof Iterator) && !($BQ instanceof IteratorAggregate)) {
$BQ = array();}
$BP = $BQ;
foreach($BP as $error) {if($BO == 0) { ?>
  <div class="message_error">
    <b class='title'><?php 
    echo lmb_i18n('Fields with errors','cms');
         ?></b>
    <ol>
      <?php } ?>
        <li><font color="red"><?php $BS='';
$BT = $error;
if((is_array($BT) || ($BT instanceof ArrayAccess)) && isset($BT['message'])) { $BS = $BT['message'];
}else{ $BS = '';}
echo htmlspecialchars($BS,3); ?></font></li>
      <?php $BO++;}if($BO > 0) { ?>
    </ol>
  </div>
<?php }
}

function __staticInclude4($file) {
 ?><div class='tabs'>

  <ul>
    <li id='properties'><a>Properties</a></li>
  </ul>

  <div id="tab_properties">

    <?php $this->__staticInclude5('user/include/form_fields.phtml'); ?>


    <dl class="field">
      <dt><label<?php $this->label_id005->renderAttributes(); ?>>Password:</label></dt>
      <dd><input<?php $this->input_id006->renderAttributes(); ?> /></dd>
    </dl>

  </div>

</div><?php 
}

function __staticInclude5($file) {
$this->__staticInclude6('_admin/form_errors.phtml'); ?>


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

function __staticInclude6($file) {
$fields_errors = $this->form_object_form->getErrorList();
 ?>

<?php $CA = 0;$CC = $fields_errors;

if(!is_array($CC) && !($CC instanceof Iterator) && !($CC instanceof IteratorAggregate)) {
$CC = array();}
$CB = $CC;
foreach($CB as $error) {if($CA == 0) { ?>
  <div class="message_error">
    <b class='title'><?php 
    echo lmb_i18n('Fields with errors','cms');
         ?></b>
    <ol>
      <?php } ?>
        <li><font color="red"><?php $CE='';
$CF = $error;
if((is_array($CF) || ($CF instanceof ArrayAccess)) && isset($CF['message'])) { $CE = $CF['message'];
}else{ $CE = '';}
echo htmlspecialchars($CE,3); ?></font></li>
      <?php $CA++;}if($CA > 0) { ?>
    </ol>
  </div>
<?php }
}

function __staticInclude7($file) {
 ?><?php if(!isset($save_button_name)) $save_button_name = lmb_i18n('Save', 'cms'); ?>
<?php $cancel_button_name = lmb_i18n('Cancel', 'cms'); ?>
<div class='list_actions'>
  <?php if(isset($this->__slot_handlers_extra_buttons)) {foreach($this->__slot_handlers_extra_buttons as $__slot_handler_extra_buttons) {call_user_func_array($__slot_handler_extra_buttons, array(array()));}}$this->__slotHandler8651b1df5ff055a0153f8ad95936ee40(array()); ?>

  <?php $this->input_id007->setAttribute('value',$save_button_name);
 ?><input<?php $this->input_id007->renderAttributes(); ?> />
  <?php $this->input_id008->setAttribute('value',$cancel_button_name);
 ?><input<?php $this->input_id008->renderAttributes(); ?> />
</div>

<?php 
}

function __slotHandler8651b1df5ff055a0153f8ad95936ee40($CG= array()) {
if($CG) extract($CG);
}

function __slotHandler3522cb453ca969bcfc73b11961f634f5($DH= array()) {
if($DH) extract($DH);
}

function __slotHandlereaef49bdea983eacccf188747bc88977($DI= array()) {
if($DI) extract($DI);
}

function __slotHandlercbba6c5da39066ee6417f08865daf52a($DJ= array()) {
if($DJ) extract($DJ);
}

}
}
$macro_executor_class='MacroTemplateExecutor1ecb2f5e852e4f518a508e47161219af';