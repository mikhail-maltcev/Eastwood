<?php /* This file is generated from /usr/share/nginx/www/eastwood/template/admin_order/details.phtml*/?><?php
if(!class_exists('MacroTemplateExecutor9b0982806ebd104b30ece811bd998774', false)){
require_once('limb/macro/src/compiler/lmbMacroTemplateExecutor.class.php');
require_once('limb/macro/src/tags/form/lmbMacroFormWidget.class.php');
require_once('limb/macro/src/tags/form/lmbMacroSingleSelectWidget.class.php');
require_once('limb/macro/src/tags/form/lmbMacroInputWidget.class.php');
class MacroTemplateExecutor9b0982806ebd104b30ece811bd998774 extends lmbMacroTemplateExecutor {

function _init() {
$this->form_status_form = new lmbMacroFormWidget('status_form');
$this->form_status_form->setAttributes(array (
  'id' => 'status_form',
  'name' => 'status_form',
  'method' => 'post',
));
$this->select_id001 = new lmbMacroSingleSelectWidget('status');
$this->select_id001->setAttributes(array (
  'id' => 'status',
  'name' => 'status',
));
$this->select_id001->setForm($this->form_status_form);
$this->form_status_form->addChild($this->select_id001);
$this->input_id002 = new lmbMacroFormElementWidget('create');
$this->input_id002->setAttributes(array (
  'id' => 'create',
  'type' => 'submit',
));
$this->input_id002->setForm($this->form_status_form);
$this->form_status_form->addChild($this->input_id002);
$this->input_id003 = new lmbMacroInputWidget('cancel');
$this->input_id003->setAttributes(array (
  'id' => 'cancel',
  'type' => 'button',
  'onclick' => 'self.parent.tb_remove();',
  'runat' => 'client',
));
$this->input_id003->setForm($this->form_status_form);
$this->form_status_form->addChild($this->input_id003);

}
function render($args = array()) {
if($args) extract($args);
$this->_init();
 ?><?php  $this->title ='Order #'.$this->order->getId(); ?>
<?php $this->__staticInclude1('admin_modal_page_layout.phtml', 'content_zone', 'content_zone', 'admin_modal_page_layout.phtml');
}

function __staticInclude1($file,$in,$into,$file) {
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
  <?php if(isset($this->__slot_handlers_header_zone)) {foreach($this->__slot_handlers_header_zone as $__slot_handler_header_zone) {call_user_func_array($__slot_handler_header_zone, array(array()));}}$this->__slotHandler4bc72895a7bd5b09aa5defb80a974d28(array()); ?>

  <style type="text/css">
    <?php if(isset($this->__slot_handlers_css_zone)) {foreach($this->__slot_handlers_css_zone as $__slot_handler_css_zone) {call_user_func_array($__slot_handler_css_zone, array(array()));}}$this->__slotHandlerdde67f59cb29764f2ed461f900bf25cc(array()); ?>

  </style>
</head>
<body>
  <div id="popup_wrapper">
    <?php $this->__staticInclude2('_admin/notify_zone.phtml'); ?>

    <?php if(isset($this->__slot_handlers_icon)) {foreach($this->__slot_handlers_icon as $__slot_handler_icon) {call_user_func_array($__slot_handler_icon, array(array()));}}$this->__slotHandlerb859cf89f670df501c5a9b89ccca1234(array()); ?>

    <?php if(isset($this->__slot_handlers_title)) {foreach($this->__slot_handlers_title as $__slot_handler_title) {call_user_func_array($__slot_handler_title, array(array()));}}$this->__slotHandlera339bc84042001072adb6908a4dbd7b4(array()); ?>

    <?php if(isset($this->__slot_handlers_content_zone)) {foreach($this->__slot_handlers_content_zone as $__slot_handler_content_zone) {call_user_func_array($__slot_handler_content_zone, array(array()));}}$this->__slotHandler7bfb71b58708894cc9496d7f3048ef22(array()); ?>

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
<?php if(isset($this->__slot_handlers_js_include)) {foreach($this->__slot_handlers_js_include as $__slot_handler_js_include) {call_user_func_array($__slot_handler_js_include, array(array()));}}$this->__slotHandleree18d6af11e0864438ee2dbb7f88f2d8(array()); ?>


<script type="text/javascript">
  <?php if(isset($this->__slot_handlers_js)) {foreach($this->__slot_handlers_js as $__slot_handler_js) {call_user_func_array($__slot_handler_js, array(array()));}}$this->__slotHandler7066d5d0287afbef18ddfa8681bdf752(array()); ?>


  jQuery(window).ready(function()
  {
    <?php if(isset($this->__slot_handlers_js_ready)) {foreach($this->__slot_handlers_js_ready as $__slot_handler_js_ready) {call_user_func_array($__slot_handler_js_ready, array(array()));}}$this->__slotHandlerf0fc86b4070e0963a8549f2875a4350c(array()); ?>

  });
</script>
</html>
<?php 
}

function __slotHandler4bc72895a7bd5b09aa5defb80a974d28($G= array()) {
if($G) extract($G);
}

function __slotHandlerdde67f59cb29764f2ed461f900bf25cc($H= array()) {
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
$this->_template35aeee34ec1e5185ee1cf5f8eafe9a13(array('template' => 'flashbox','messages' => $I,'box_class' => 'error',)); ?>

        <?php $T='';
$U = $flashbox;
$T = $U->getMessages();
$this->_template5bb6df300fc2dd03a134435828b1e7a7(array('template' => 'flashbox','messages' => $T,'box_class' => 'message',)); ?>

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

function _template35aeee34ec1e5185ee1cf5f8eafe9a13($K= array()) {
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

function _template5bb6df300fc2dd03a134435828b1e7a7($V= array()) {
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

function __slotHandlerb859cf89f670df501c5a9b89ccca1234($BF= array()) {
if($BF) extract($BF);
}

function __slotHandlera339bc84042001072adb6908a4dbd7b4($BG= array()) {
if($BG) extract($BG);
}

function __slotHandler7bfb71b58708894cc9496d7f3048ef22($BH= array()) {
if($BH) extract($BH); ?>


<?php if(isset($this->form_status_form_datasource))$this->form_status_form->setDatasource($this->form_status_form_datasource);
if(isset($this->form_status_form_error_list))$this->form_status_form->setErrorList($this->form_status_form_error_list);
 ?><form<?php $this->form_status_form->renderAttributes(); ?>>
<h1>Order #<?php $BI='';
$BJ = $this->order;
if((is_array($BJ) || ($BJ instanceof ArrayAccess)) && isset($BJ['id'])) { $BI = $BJ['id'];
}else{ $BI = '';}
echo htmlspecialchars($BI,3); ?></h1>

<dl class="field">
    <dt>Items:</dt>
    <dd>
        <?php $BK='';
$BL = $this->order;
if((is_array($BL) || ($BL instanceof ArrayAccess)) && isset($BL['lines'])) { $BK = $BL['lines'];
}else{ $BK = '';}
$BQ = 0;$BS = $BK;

if(!is_array($BS) && !($BS instanceof Iterator) && !($BS instanceof IteratorAggregate)) {
$BS = array();}
$BR = $BS;
foreach($BR as $line) {$parity = (( ($BQ + 1) % 2) ? "odd" : "even");if($BQ == 0) { ?>

        <table cellpadding="0" cellspacing="0" class='list'>
            <thead>
            <tr>
                <th>Title</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Summ</th>
            </tr>
            </thead>
            <?php } ?>

            <tr class='<?php echo htmlspecialchars($parity,3); ?>'>
                <td><?php $BW='';
$BX = $line;
if((is_array($BX) || ($BX instanceof ArrayAccess)) && isset($BX['product'])) { $BW = $BX['product'];
if((is_array($BW) || ($BW instanceof ArrayAccess)) && isset($BW['title'])) { $BW = $BW['title'];
}else{ $BW = '';}
}else{ $BW = '';}
echo htmlspecialchars($BW,3); ?></td>
                <td>$<?php $BY='';
$BZ = $line;
if((is_array($BZ) || ($BZ instanceof ArrayAccess)) && isset($BZ['price'])) { $BY = $BZ['price'];
}else{ $BY = '';}
echo number_format($BY,2, '.', ' '); ?></td>
                <td><?php $CA='';
$CB = $line;
if((is_array($CB) || ($CB instanceof ArrayAccess)) && isset($CB['quantity'])) { $CA = $CB['quantity'];
}else{ $CA = '';}
echo htmlspecialchars($CA,3); ?></td>
                <td>$<?php $CC='';
$CD = $line;
if((is_array($CD) || ($CD instanceof ArrayAccess)) && isset($CD['summ'])) { $CC = $CD['summ'];
}else{ $CC = '';}
echo number_format($CC,2, '.', ' '); ?></td>
            </tr>
            <?php $BQ++;}if($BQ > 0) { ?>

        </table>
        <?php } ?>

    </dd>
</dl>

<dl class="field">
    <dt>Customer:</dt>
    <dd><a href='mailto:<?php $CE='';
$CF = $this->order;
if((is_array($CF) || ($CF instanceof ArrayAccess)) && isset($CF['user'])) { $CE = $CF['user'];
if((is_array($CE) || ($CE instanceof ArrayAccess)) && isset($CE['email'])) { $CE = $CE['email'];
}else{ $CE = '';}
}else{ $CE = '';}
echo htmlspecialchars($CE,3); ?>'><?php $CG='';
$CH = $this->order;
if((is_array($CH) || ($CH instanceof ArrayAccess)) && isset($CH['user'])) { $CG = $CH['user'];
if((is_array($CG) || ($CG instanceof ArrayAccess)) && isset($CG['name'])) { $CG = $CG['name'];
}else{ $CG = '';}
}else{ $CG = '';}
echo htmlspecialchars($CG,3); ?> (<?php $CI='';
$CJ = $this->order;
if((is_array($CJ) || ($CJ instanceof ArrayAccess)) && isset($CJ['user'])) { $CI = $CJ['user'];
if((is_array($CI) || ($CI instanceof ArrayAccess)) && isset($CI['login'])) { $CI = $CI['login'];
}else{ $CI = '';}
}else{ $CI = '';}
echo htmlspecialchars($CI,3); ?>)</a></dd>
</dl>

<dl class="field">
    <dt>Address :</dt>
    <dd><?php $CK='';
$CL = $this->order;
if((is_array($CL) || ($CL instanceof ArrayAccess)) && isset($CL['address'])) { $CK = $CL['address'];
}else{ $CK = '';}
echo htmlspecialchars($CK,3); ?></dd>
</dl>

<dl class="field">
    <dt>Status :</dt>
    <dd><?php $statuses = Order :: getStatusOptions(); ?>
        <?php $this->select_id001->setOptions($statuses);
 ?><select<?php $this->select_id001->renderAttributes(); ?>><?php $this->select_id001->renderOptions();
 ?></select>
    </dd>
</dl>

<?php $this->__staticInclude3('_admin/form_buttons.phtml'); ?>


</form>
<?php 
}

function __staticInclude3($file) {
 ?><?php if(!isset($save_button_name)) $save_button_name = lmb_i18n('Save', 'cms'); ?>
<?php $cancel_button_name = lmb_i18n('Cancel', 'cms'); ?>
<div class='list_actions'>
  <?php if(isset($this->__slot_handlers_extra_buttons)) {foreach($this->__slot_handlers_extra_buttons as $__slot_handler_extra_buttons) {call_user_func_array($__slot_handler_extra_buttons, array(array()));}}$this->__slotHandler92fd522fb0a8e650c7c4c46d969a70db(array()); ?>

  <?php $this->input_id002->setAttribute('value',$save_button_name);
 ?><input<?php $this->input_id002->renderAttributes(); ?> />
  <?php $this->input_id003->setAttribute('value',$cancel_button_name);
 ?><input<?php $this->input_id003->renderAttributes(); ?> />
</div>

<?php 
}

function __slotHandler92fd522fb0a8e650c7c4c46d969a70db($CO= array()) {
if($CO) extract($CO);
}

function __slotHandleree18d6af11e0864438ee2dbb7f88f2d8($DP= array()) {
if($DP) extract($DP);
}

function __slotHandler7066d5d0287afbef18ddfa8681bdf752($DQ= array()) {
if($DQ) extract($DQ);
}

function __slotHandlerf0fc86b4070e0963a8549f2875a4350c($DR= array()) {
if($DR) extract($DR);
}

}
}
$macro_executor_class='MacroTemplateExecutor9b0982806ebd104b30ece811bd998774';