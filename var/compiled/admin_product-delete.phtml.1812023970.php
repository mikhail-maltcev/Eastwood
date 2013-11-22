<?php /* This file is generated from /usr/share/nginx/www/eastwood/template/admin_product/delete.phtml*/?><?php
if(!class_exists('MacroTemplateExecutor7b2e0eab99cbdb253c2a9ba1b6bde656', false)){
require_once('limb/macro/src/compiler/lmbMacroTemplateExecutor.class.php');
require_once('limb/macro/src/tags/form/lmbMacroFormWidget.class.php');
require_once('limb/macro/src/tags/form/lmbMacroInputWidget.class.php');
class MacroTemplateExecutor7b2e0eab99cbdb253c2a9ba1b6bde656 extends lmbMacroTemplateExecutor {

function _init() {
$this->form_id001 = new lmbMacroFormWidget('id001');
$this->form_id001->setAttributes(array (
  'method' => 'post',
  'runtime_id' => 'id001',
));
$this->input_id001 = new lmbMacroFormElementWidget('create');
$this->input_id001->setAttributes(array (
  'id' => 'create',
  'type' => 'submit',
));
$this->input_id001->setForm($this->form_id001);
$this->form_id001->addChild($this->input_id001);
$this->input_id002 = new lmbMacroInputWidget('cancel');
$this->input_id002->setAttributes(array (
  'id' => 'cancel',
  'type' => 'button',
  'onclick' => 'self.parent.tb_remove();',
  'runat' => 'client',
));
$this->input_id002->setForm($this->form_id001);
$this->form_id001->addChild($this->input_id002);

}
function render($args = array()) {
if($args) extract($args);
$this->_init();
$this->__staticInclude1('_admin_object/delete.phtml'); ?>

<?php 
}

function __staticInclude1($file) {
$this->__staticInclude2('admin_modal_page_layout.phtml', 'content_zone', 'admin_modal_page_layout.phtml'); ?>

<?php 
}

function __staticInclude2($file,$into,$file) {
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
  <?php if(isset($this->__slot_handlers_header_zone)) {foreach($this->__slot_handlers_header_zone as $__slot_handler_header_zone) {call_user_func_array($__slot_handler_header_zone, array(array()));}}$this->__slotHandlere025d289fc25f08415bfac3d0352e3c2(array()); ?>

  <style type="text/css">
    <?php if(isset($this->__slot_handlers_css_zone)) {foreach($this->__slot_handlers_css_zone as $__slot_handler_css_zone) {call_user_func_array($__slot_handler_css_zone, array(array()));}}$this->__slotHandler35bb05c38ace681e88560bc3688bccbc(array()); ?>

  </style>
</head>
<body>
  <div id="popup_wrapper">
    <?php $this->__staticInclude3('_admin/notify_zone.phtml'); ?>

    <?php if(isset($this->__slot_handlers_icon)) {foreach($this->__slot_handlers_icon as $__slot_handler_icon) {call_user_func_array($__slot_handler_icon, array(array()));}}$this->__slotHandler00b93c12373a934b9a6c0dbfe7c18197(array()); ?>

    <?php if(isset($this->__slot_handlers_title)) {foreach($this->__slot_handlers_title as $__slot_handler_title) {call_user_func_array($__slot_handler_title, array(array()));}}$this->__slotHandlerb42ed58f73c29de8329daa3b89d9a2a9(array()); ?>

    <?php if(isset($this->__slot_handlers_content_zone)) {foreach($this->__slot_handlers_content_zone as $__slot_handler_content_zone) {call_user_func_array($__slot_handler_content_zone, array(array()));}}$this->__slotHandler77067e7270130648f9377e3d5e991c12(array()); ?>

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
<?php if(isset($this->__slot_handlers_js_include)) {foreach($this->__slot_handlers_js_include as $__slot_handler_js_include) {call_user_func_array($__slot_handler_js_include, array(array()));}}$this->__slotHandlerd3686f74f93f9f784eff6a977a361396(array()); ?>


<script type="text/javascript">
  <?php if(isset($this->__slot_handlers_js)) {foreach($this->__slot_handlers_js as $__slot_handler_js) {call_user_func_array($__slot_handler_js, array(array()));}}$this->__slotHandler1fc2ec41061b2f764b8899dc8a3c5363(array()); ?>


  jQuery(window).ready(function()
  {
    <?php if(isset($this->__slot_handlers_js_ready)) {foreach($this->__slot_handlers_js_ready as $__slot_handler_js_ready) {call_user_func_array($__slot_handler_js_ready, array(array()));}}$this->__slotHandler068dcf037c06e5772f08d089f19727f9(array()); ?>

  });
</script>
</html>
<?php 
}

function __slotHandlere025d289fc25f08415bfac3d0352e3c2($G= array()) {
if($G) extract($G);
}

function __slotHandler35bb05c38ace681e88560bc3688bccbc($H= array()) {
if($H) extract($H);
}

function __staticInclude3($file) {
 ?>


<?php 
  $flashbox = $this->toolkit->getFlashBox();
  if($flashbox->hasErrors() || $flashbox->hasMessages()){ ?>
    <div id="flashbox" class="flashbox">
      <ul>
        <?php $I='';
$J = $flashbox;
$I = $J->getErrors();
$this->_template7d26be6b72086cca7d493d0e589c9250(array('template' => 'flashbox','messages' => $I,'box_class' => 'error',)); ?>

        <?php $T='';
$U = $flashbox;
$T = $U->getMessages();
$this->_template6db96be693896f492437c85a9d65412e(array('template' => 'flashbox','messages' => $T,'box_class' => 'message',)); ?>

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

function _template7d26be6b72086cca7d493d0e589c9250($K= array()) {
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

function _template6db96be693896f492437c85a9d65412e($V= array()) {
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

function __slotHandler00b93c12373a934b9a6c0dbfe7c18197($BF= array()) {
if($BF) extract($BF);
}

function __slotHandlerb42ed58f73c29de8329daa3b89d9a2a9($BG= array()) {
if($BG) extract($BG);
}

function __slotHandler77067e7270130648f9377e3d5e991c12($BH= array()) {
if($BH) extract($BH); ?>


    <h1>Вы действительно хотите удалить следующие объекты?</h1>

      <?php if(isset($this->form_id001_datasource))$this->form_id001->setDatasource($this->form_id001_datasource);
if(isset($this->form_id001_error_list))$this->form_id001->setErrorList($this->form_id001_error_list);
 ?><form<?php $this->form_id001->renderAttributes(); ?>>
        <?php $BK = 0;$BM = $this->items;

if(!is_array($BM) && !($BM instanceof Iterator) && !($BM instanceof IteratorAggregate)) {
$BM = array();}
$BL = $BM;
foreach($BL as $item) {if($BK == 0) { ?>

          <div class="list">
            <table>
              <tr>
                <th class='selector'><input type='checkbox' onclick='toggle_selected(this);' name='mark_all'/></th>
                <th>Название</th>
              </tr>
              <?php } ?>

                <tr>
                  <td class='selector'><input type='checkbox' name="ids[]" value='<?php $BO='';
$BP = $item;
if((is_array($BP) || ($BP instanceof ArrayAccess)) && isset($BP['id'])) { $BO = $BP['id'];
}else{ $BO = '';}
echo htmlspecialchars($BO,3); ?>' checked="checked"/></td>
                  <td><?php $BQ='';
$BR = $item;
if((is_array($BR) || ($BR instanceof ArrayAccess)) && isset($BR['title'])) { $BQ = $BR['title'];
}else{ $BQ = '';}
echo htmlspecialchars($BQ,3); ?></td>
                </tr>
              <?php $BK++;}if($BK > 0) { ?>

              
            </table>
          </div>
        <?php }if($BK == 0) { ?>

                <p>Вы ничего не отметили</p>
              <?php } ?>


        <?php $this->__staticInclude4('_admin/form_buttons.phtml', 'Удалить'); ?>


      </form>

<?php 
}

function __staticInclude4($file,$save_button_name) {
 ?><?php if(!isset($save_button_name)) $save_button_name = lmb_i18n('Save', 'cms'); ?>
<?php $cancel_button_name = lmb_i18n('Cancel', 'cms'); ?>
<div class='list_actions'>
  <?php if(isset($this->__slot_handlers_extra_buttons)) {foreach($this->__slot_handlers_extra_buttons as $__slot_handler_extra_buttons) {call_user_func_array($__slot_handler_extra_buttons, array(array()));}}$this->__slotHandlere627bb5df6512652c25fae1d5290b894(array()); ?>

  <?php $this->input_id001->setAttribute('value',$save_button_name);
 ?><input<?php $this->input_id001->renderAttributes(); ?> />
  <?php $this->input_id002->setAttribute('value',$cancel_button_name);
 ?><input<?php $this->input_id002->renderAttributes(); ?> />
</div>

<?php 
}

function __slotHandlere627bb5df6512652c25fae1d5290b894($BS= array()) {
if($BS) extract($BS);
}

function __slotHandlerd3686f74f93f9f784eff6a977a361396($CT= array()) {
if($CT) extract($CT);
}

function __slotHandler1fc2ec41061b2f764b8899dc8a3c5363($CU= array()) {
if($CU) extract($CU);
}

function __slotHandler068dcf037c06e5772f08d089f19727f9($CV= array()) {
if($CV) extract($CV);
}

}
}
$macro_executor_class='MacroTemplateExecutor7b2e0eab99cbdb253c2a9ba1b6bde656';