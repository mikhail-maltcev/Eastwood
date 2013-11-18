<?php /* This file is generated from /usr/share/nginx/www/eastwood/template/admin_product/create.phtml*/?><?php
if(!class_exists('MacroTemplateExecutor7f6696e6dc8314e16351c9ce65158dc4', false)){
require_once('limb/macro/src/compiler/lmbMacroTemplateExecutor.class.php');
require_once('limb/macro/src/tags/form/lmbMacroFormWidget.class.php');
require_once('limb/macro/src/tags/form/lmbMacroInputWidget.class.php');
require_once('limb/macro/src/tags/form/lmbMacroJSCheckboxWidget.class.php');
require_once('limb/macro/src/tags/form/lmbMacroTextAreaWidget.class.php');
class MacroTemplateExecutor7f6696e6dc8314e16351c9ce65158dc4 extends lmbMacroTemplateExecutor {

function _init() {
$this->form_object_form = new lmbMacroFormWidget('object_form');
$this->form_object_form->setAttributes(array (
  'id' => 'object_form',
  'name' => 'user_form',
  'method' => 'post',
  'enctype' => 'multipart/form-data',
));
$this->input_id001 = new lmbMacroInputWidget('title');
$this->input_id001->setAttributes(array (
  'name' => 'title',
  'type' => 'text',
  'title' => 'Название',
));
$this->input_id001->setForm($this->form_object_form);
$this->form_object_form->addChild($this->input_id001);
$this->input_id002 = new lmbMacroInputWidget('price');
$this->input_id002->setAttributes(array (
  'name' => 'price',
  'type' => 'text',
  'title' => 'Цена',
));
$this->input_id002->setForm($this->form_object_form);
$this->form_object_form->addChild($this->input_id002);
$this->js_checkbox_id003 = new lmbMacroJSCheckboxWidget('is_available');
$this->js_checkbox_id003->setAttributes(array (
  'name' => 'is_available',
  'type' => 'checkbox',
));
$this->js_checkbox_id003->setForm($this->form_object_form);
$this->form_object_form->addChild($this->js_checkbox_id003);
$this->textarea_id004 = new lmbMacroTextAreaWidget('description');
$this->textarea_id004->setAttributes(array (
  'name' => 'description',
  'title' => 'Описание',
));
$this->textarea_id004->setForm($this->form_object_form);
$this->form_object_form->addChild($this->textarea_id004);
$this->input_id005 = new lmbMacroFormElementWidget('image');
$this->input_id005->setAttributes(array (
  'name' => 'image',
  'type' => 'file',
));
$this->input_id005->setForm($this->form_object_form);
$this->form_object_form->addChild($this->input_id005);
$this->input_id006 = new lmbMacroFormElementWidget('create');
$this->input_id006->setAttributes(array (
  'id' => 'create',
  'type' => 'submit',
));
$this->input_id006->setForm($this->form_object_form);
$this->form_object_form->addChild($this->input_id006);
$this->input_id007 = new lmbMacroInputWidget('cancel');
$this->input_id007->setAttributes(array (
  'id' => 'cancel',
  'type' => 'button',
  'onclick' => 'self.parent.tb_remove();',
  'runat' => 'client',
));
$this->input_id007->setForm($this->form_object_form);
$this->form_object_form->addChild($this->input_id007);

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
  <?php if(isset($this->__slot_handlers_header_zone)) {foreach($this->__slot_handlers_header_zone as $__slot_handler_header_zone) {call_user_func_array($__slot_handler_header_zone, array(array()));}}$this->__slotHandler3e87635aee68593daef0a04f192be980(array()); ?>

  <style type="text/css">
    <?php if(isset($this->__slot_handlers_css_zone)) {foreach($this->__slot_handlers_css_zone as $__slot_handler_css_zone) {call_user_func_array($__slot_handler_css_zone, array(array()));}}$this->__slotHandler9978d927af1aa733b03d75cbe46df5a9(array()); ?>

  </style>
</head>
<body>
  <div id="popup_wrapper">
    <?php $this->__staticInclude2('_admin/notify_zone.phtml'); ?>

    <?php if(isset($this->__slot_handlers_icon)) {foreach($this->__slot_handlers_icon as $__slot_handler_icon) {call_user_func_array($__slot_handler_icon, array(array()));}}$this->__slotHandler957c44028a7e1c024d85dd0451378535(array()); ?>

    <?php if(isset($this->__slot_handlers_title)) {foreach($this->__slot_handlers_title as $__slot_handler_title) {call_user_func_array($__slot_handler_title, array(array()));}}$this->__slotHandler3e23efc79344a1d9c4feb89ca818cf86(array()); ?>

    <?php if(isset($this->__slot_handlers_content_zone)) {foreach($this->__slot_handlers_content_zone as $__slot_handler_content_zone) {call_user_func_array($__slot_handler_content_zone, array(array()));}}$this->__slotHandleree62f58eae63210790688e731bdbb0c6(array()); ?>

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
<?php if(isset($this->__slot_handlers_js_include)) {foreach($this->__slot_handlers_js_include as $__slot_handler_js_include) {call_user_func_array($__slot_handler_js_include, array(array()));}}$this->__slotHandlerff1f70ef1e4ea353d282117a085ce904(array()); ?>


<script type="text/javascript">
  <?php if(isset($this->__slot_handlers_js)) {foreach($this->__slot_handlers_js as $__slot_handler_js) {call_user_func_array($__slot_handler_js, array(array()));}}$this->__slotHandlerd70fe106be06b1576586bc7592f68b18(array()); ?>


  jQuery(window).ready(function()
  {
    <?php if(isset($this->__slot_handlers_js_ready)) {foreach($this->__slot_handlers_js_ready as $__slot_handler_js_ready) {call_user_func_array($__slot_handler_js_ready, array(array()));}}$this->__slotHandler1d36014afffb0973fb2000fca1ff23ff(array()); ?>

  });
</script>
</html>
<?php 
}

function __slotHandler3e87635aee68593daef0a04f192be980($G= array()) {
if($G) extract($G);
}

function __slotHandler9978d927af1aa733b03d75cbe46df5a9($H= array()) {
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
$this->_template5d1fe9dceaf02fa6c8bf6ffc820f730b(array('template' => 'flashbox','messages' => $I,'box_class' => 'error',)); ?>

        <?php $T='';
$U = $flashbox;
$T = $U->getMessages();
$this->_templatee06b7285e530f94316bf666c29e32062(array('template' => 'flashbox','messages' => $T,'box_class' => 'message',)); ?>

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

function _template5d1fe9dceaf02fa6c8bf6ffc820f730b($K= array()) {
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

function _templatee06b7285e530f94316bf666c29e32062($V= array()) {
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

function __slotHandler957c44028a7e1c024d85dd0451378535($BF= array()) {
if($BF) extract($BF);
}

function __slotHandler3e23efc79344a1d9c4feb89ca818cf86($BG= array()) {
if($BG) extract($BG);
}

function __slotHandleree62f58eae63210790688e731bdbb0c6($BH= array()) {
if($BH) extract($BH); ?>

  <?php if(isset($this->form_object_form_datasource))$this->form_object_form->setDatasource($this->form_object_form_datasource);
if(isset($this->form_object_form_error_list))$this->form_object_form->setErrorList($this->form_object_form_error_list);
 ?><form<?php $this->form_object_form->renderAttributes(); ?>>

    <h1>Создать product</h1>


    <?php $this->__staticInclude3('admin_product/include/form_fields.phtml'); ?>



  </form>
<?php 
}

function __staticInclude3($file) {
$this->__staticInclude4('_admin/form_errors.phtml'); ?>


<dl class="required field">
  <dt><label for="title">Название:</label></dt>
  <dd><input<?php $this->input_id001->renderAttributes(); ?> /></dd>
</dl>

<dl class="required field">
  <dt><label for="price">Цена:</label></dt>
  <dd><input<?php $this->input_id002->renderAttributes(); ?> /></dd>
</dl>

<dl class="field">
  <dt><label for="is_available">Наличие:</label>
  <dd><input<?php $this->js_checkbox_id003->renderAttributes(); ?> /><?php $this->js_checkbox_id003->renderHidden();
 ?></dd>
</dl>

<dl class="required field">
  <dt><label for="description">Описание:</label>
  <dd><textarea<?php $this->textarea_id004->renderAttributes(); ?>><?php echo htmlspecialchars($this->textarea_id004->getValue(), ENT_QUOTES);
 ?></textarea></dd>
</dl>

<dl class="field">
  <dt><label for="image">Изображение:</label>
  <dd>
  <input<?php $this->input_id005->renderAttributes(); ?> />
  <img src='<?php $BU='';
$BV = $this->item;
if((is_array($BV) || ($BV instanceof ArrayAccess)) && isset($BV['image_path'])) { $BU = $BV['image_path'];
}else{ $BU = '';}
echo htmlspecialchars($BU,3); ?>' class='img' />
  </dd>
</dl>

<?php $this->__staticInclude5('_admin/form_buttons.phtml');
}

function __staticInclude4($file) {
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

function __staticInclude5($file) {
 ?><?php if(!isset($save_button_name)) $save_button_name = lmb_i18n('Save', 'cms'); ?>
<?php $cancel_button_name = lmb_i18n('Cancel', 'cms'); ?>
<div class='list_actions'>
  <?php if(isset($this->__slot_handlers_extra_buttons)) {foreach($this->__slot_handlers_extra_buttons as $__slot_handler_extra_buttons) {call_user_func_array($__slot_handler_extra_buttons, array(array()));}}$this->__slotHandler30f309fdf67d13bd9b5e6bf3e8cd2986(array()); ?>

  <?php $this->input_id006->setAttribute('value',$save_button_name);
 ?><input<?php $this->input_id006->renderAttributes(); ?> />
  <?php $this->input_id007->setAttribute('value',$cancel_button_name);
 ?><input<?php $this->input_id007->renderAttributes(); ?> />
</div>

<?php 
}

function __slotHandler30f309fdf67d13bd9b5e6bf3e8cd2986($BW= array()) {
if($BW) extract($BW);
}

function __slotHandlerff1f70ef1e4ea353d282117a085ce904($CX= array()) {
if($CX) extract($CX);
}

function __slotHandlerd70fe106be06b1576586bc7592f68b18($CY= array()) {
if($CY) extract($CY);
}

function __slotHandler1d36014afffb0973fb2000fca1ff23ff($CZ= array()) {
if($CZ) extract($CZ);
}

}
}
$macro_executor_class='MacroTemplateExecutor7f6696e6dc8314e16351c9ce65158dc4';