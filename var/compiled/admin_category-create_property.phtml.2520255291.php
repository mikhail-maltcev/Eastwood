<?php /* This file is generated from /usr/share/nginx/www/eastwood/template/admin_category/create_property.phtml*/?><?php
if(!class_exists('MacroTemplateExecutor56b08071a4f6b2356c6c33fb69852539', false)){
require_once('limb/macro/src/compiler/lmbMacroTemplateExecutor.class.php');
require_once('limb/macro/src/tags/form/lmbMacroFormWidget.class.php');
require_once('limb/macro/src/tags/form/lmbMacroFormLabelWidget.class.php');
require_once('limb/macro/src/tags/form/lmbMacroInputWidget.class.php');
require_once('limb/core/src/lmbArrayHelper.class.php');
class MacroTemplateExecutor56b08071a4f6b2356c6c33fb69852539 extends lmbMacroTemplateExecutor {

function _init() {
$this->form_property_form = new lmbMacroFormWidget('property_form');
$this->form_property_form->setAttributes(array (
  'id' => 'property_form',
  'name' => 'property_form',
  'method' => 'post',
));
$this->label_id001 = new lmbMacroFormLabelWidget('id001');
$this->label_id001->setAttributes(array (
  'for' => 'property_name',
  'runtime_id' => 'id001',
));
$this->label_id001->setForm($this->form_property_form);
$this->form_property_form->addChild($this->label_id001);
$this->input_id002 = new lmbMacroInputWidget('property_name');
$this->input_id002->setAttributes(array (
  'name' => 'property_name',
  'type' => 'text',
  'size' => '60',
  'title' => 'Title',
));
$this->input_id002->setForm($this->form_property_form);
$this->form_property_form->addChild($this->input_id002);
$this->input_id003 = new lmbMacroInputWidget('node_id');
$this->input_id003->setAttributes(array (
  'name' => 'node_id',
  'type' => 'hidden',
  'size' => '60',
  'title' => 'node_id',
));
$this->input_id003->setForm($this->form_property_form);
$this->form_property_form->addChild($this->input_id003);
$this->input_id004 = new lmbMacroFormElementWidget('id002');
$this->input_id004->setAttributes(array (
  'type' => 'submit',
  'value' => 'Create',
  'runtime_id' => 'id002',
));
$this->input_id004->setForm($this->form_property_form);
$this->form_property_form->addChild($this->input_id004);

}
function render($args = array()) {
if($args) extract($args);
$this->_init();
$this->__staticInclude1('admin_page_layout.phtml', 'content_zone', 'content_zone', 'admin_page_layout.phtml');
}

function __staticInclude1($file,$in,$into,$file) {
 ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!-- Powered by LIMB | http://www.limb-project.com/ -->
<!-- Designed by BIT | http://www.bit-creative.com/ -->
<?php  $this->static_files_version = lmb_env_get('CMS_STATIC_FILES_VERSION'); ?>
<html>
<head>
  <title><?php 
    echo lmb_i18n('Control panel','cms');
         ?></title>
  <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
  <link rel="stylesheet" type="text/css" href="/shared/cms/styles/cp.css?<?php echo htmlspecialchars($this->static_files_version,3); ?>" />
  <!--[if IE]><link rel="stylesheet" type="text/css" href="/shared/cms/styles/cp_ie.css?<?php echo htmlspecialchars($this->static_files_version,3); ?>" /><![endif]-->
  <!--[if lt IE 7]><link rel="stylesheet" type="text/css" href="/shared/cms/styles/cp_ie6.css?<?php echo htmlspecialchars($this->static_files_version,3); ?>" /><![endif]-->
  <link rel="stylesheet" type="text/css" href="/shared/cms/styles/thickbox.css?<?php echo htmlspecialchars($this->static_files_version,3); ?>" />
  <?php if(isset($this->__slot_handlers_header_zone)) {foreach($this->__slot_handlers_header_zone as $__slot_handler_header_zone) {call_user_func_array($__slot_handler_header_zone, array(array()));}}$this->__slotHandlerf0fc3bece272ab9f27163db00f541cf4(array()); ?>

  <style type="text/css">
    <?php if(isset($this->__slot_handlers_css_zone)) {foreach($this->__slot_handlers_css_zone as $__slot_handler_css_zone) {call_user_func_array($__slot_handler_css_zone, array(array()));}}$this->__slotHandler32af20fc6343f14ee94d226d7932c594(array()); ?>

  </style>
</head>
<body>
  <div id="wrapper">

    <?php $this->__staticInclude2('_admin/notify_zone.phtml'); ?>


    <div id='admin_panel'>
      <a href="/admin"><img src="/shared/cms/images/logo.limb.png"  alt='LIMB' id='logo_project'/></a>
      <ul id='user_data'>
        <li><?php $BH='';
$BI = $this->toolkit;
if((is_array($BI) || ($BI instanceof ArrayAccess)) && isset($BI['cms_user'])) { $BH = $BI['cms_user'];
if((is_array($BH) || ($BH instanceof ArrayAccess)) && isset($BH['login'])) { $BH = $BH['login'];
}else{ $BH = '';}
}else{ $BH = '';}
echo htmlspecialchars($BH,3); ?> [ <?php $BJ='';
$BK = $this->toolkit;
if((is_array($BK) || ($BK instanceof ArrayAccess)) && isset($BK['cms_user'])) { $BJ = $BK['cms_user'];
if((is_array($BJ) || ($BJ instanceof ArrayAccess)) && isset($BJ['name'])) { $BJ = $BJ['name'];
}else{ $BJ = '';}
}else{ $BJ = '';}
echo htmlspecialchars($BJ,3); ?> ]</li>
        <li><a href='/cms_user/logout' class='logout'><?php 
    echo lmb_i18n('Exit','cms');
         ?></a></li>
      </ul>
    </div>

    <div id='main_col'>
      <div id="main_col_content">
        <?php if(isset($this->__slot_handlers_content_zone)) {foreach($this->__slot_handlers_content_zone as $__slot_handler_content_zone) {call_user_func_array($__slot_handler_content_zone, array(array()));}}$this->__slotHandlerab55879e3ccefb48e37451666ac4b528(array()); ?>

      </div>
    </div>

    <div id='sidebar'>
      <?php
        lmb_require('limb/cms/src/fetcher/lmbCmsAdminNavigationFetcher.class.php');
        $this->navigation=new lmbCmsAdminNavigationFetcher();
        $this->navigation=$this->navigation->fetch();
      ?>
      <dl id='main_menu'>
      <?php $CF = 0;$CH = $this->navigation;

if(!is_array($CH) && !($CH instanceof Iterator) && !($CH instanceof IteratorAggregate)) {
$CH = array();}
$CG = $CH;
foreach($CG as $item) {if($CF == 0) { ?>

        <?php } ?>

        <dt class='<?php $CJ='';
$CK = $item;
if((is_array($CK) || ($CK instanceof ArrayAccess)) && isset($CK['id'])) { $CJ = $CK['id'];
}else{ $CJ = '';}
echo htmlspecialchars($CJ,3); ?>'><img src='<?php $CL='';
$CM = $item;
if((is_array($CM) || ($CM instanceof ArrayAccess)) && isset($CM['icon'])) { $CL = $CM['icon'];
}else{ $CL = '';}
echo htmlspecialchars($CL,3); ?>'/> <?php $CN='';
$CO = $item;
if((is_array($CO) || ($CO instanceof ArrayAccess)) && isset($CO['title'])) { $CN = $CO['title'];
}else{ $CN = '';}
echo htmlspecialchars($CN,3); ?> </dt>
        <dd>
          <?php $CP='';
$CQ = $item;
if((is_array($CQ) || ($CQ instanceof ArrayAccess)) && isset($CQ['children'])) { $CP = $CQ['children'];
}else{ $CP = '';}
$CT = 0;$CV = $CP;

if(!is_array($CV) && !($CV instanceof Iterator) && !($CV instanceof IteratorAggregate)) {
$CV = array();}
$CU = $CV;
foreach($CU as $sub_item) {if($CT == 0) { ?>

            <ul>
              <?php } ?>

              <li>
                <img src='<?php $CX='';
$CY = $sub_item;
if((is_array($CY) || ($CY instanceof ArrayAccess)) && isset($CY['icon'])) { $CX = $CY['icon'];
}else{ $CX = '';}
echo htmlspecialchars($CX,3); ?>'/> <a href='<?php $CZ='';
$DA = $sub_item;
if((is_array($DA) || ($DA instanceof ArrayAccess)) && isset($DA['url'])) { $CZ = $DA['url'];
}else{ $CZ = '';}
echo htmlspecialchars($CZ,3); ?>'><?php $DB='';
$DC = $sub_item;
if((is_array($DC) || ($DC instanceof ArrayAccess)) && isset($DC['title'])) { $DB = $DC['title'];
}else{ $DB = '';}
echo htmlspecialchars($DB,3); ?></a>
              </li><?php $CT++;}if($CT > 0) { ?>

            </ul>
          <?php } ?>

        </dd>
        <?php $CF++;}if($CF > 0) { ?>

      <?php } ?>

      </dl>
      <?php if(isset($this->__slot_handlers_context_help)) {foreach($this->__slot_handlers_context_help as $__slot_handler_context_help) {call_user_func_array($__slot_handler_context_help, array(array()));}}$this->__slotHandlerb02787fccf574304eff7e134d3065e12(array()); ?>

    </div>

  </div>

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
  <?php if(isset($this->__slot_handlers_js_include)) {foreach($this->__slot_handlers_js_include as $__slot_handler_js_include) {call_user_func_array($__slot_handler_js_include, array(array()));}}$this->__slotHandler21cdf4bc6c3480d80e372426aaa95015(array()); ?>


  <script type="text/javascript">
    <?php if(isset($this->__slot_handlers_js)) {foreach($this->__slot_handlers_js as $__slot_handler_js) {call_user_func_array($__slot_handler_js, array(array()));}}$this->__slotHandler0e862dfeb1898a82aab769469b114b4f(array()); ?>


    jQuery(window).ready(function()
    {
      <?php if(isset($this->__slot_handlers_js_ready)) {foreach($this->__slot_handlers_js_ready as $__slot_handler_js_ready) {call_user_func_array($__slot_handler_js_ready, array(array()));}}$this->__slotHandlere8a06b35f46a8894e0ff425928c978b8(array()); ?>


      thickboxInit();

      function thickboxInit()
      {
        jQuery("a.thickbox").each(function()
        {
          if(this.href.indexOf('TB_iframe') > 0)
            return;

          var sep = (this.href.indexOf('?') > 0) ? '&' : '?';
          this.href = this.href + sep + 'TB_iframe=true&width=640&height=480';
        });

        tb_init('a.thickbox');                                    //pass where to apply thickbox
        imgLoader = new Image();                                  // preload image
        imgLoader.src = "/shared/cms/images/icons/loading.gif";
      }
    });
  </script>

</body>
</html>

<?php 
}

function __slotHandlerf0fc3bece272ab9f27163db00f541cf4($I= array()) {
if($I) extract($I);
}

function __slotHandler32af20fc6343f14ee94d226d7932c594($J= array()) {
if($J) extract($J);
}

function __staticInclude2($file) {
 ?>


<?php 
  $flashbox = $this->toolkit->getFlashBox();
  if($flashbox->hasErrors() || $flashbox->hasMessages()){ ?>
    <div id="flashbox" class="flashbox">
      <ul>
        <?php $K='';
$L = $flashbox;
$K = $L->getErrors();
$this->_templateaae1ce7d99ae5e41c195364536430fa9(array('template' => 'flashbox','messages' => $K,'box_class' => 'error',)); ?>

        <?php $V='';
$W = $flashbox;
$V = $W->getMessages();
$this->_templatef837a7c1c7f3574ac384c9c2e100b03d(array('template' => 'flashbox','messages' => $V,'box_class' => 'message',)); ?>

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

function _templateaae1ce7d99ae5e41c195364536430fa9($M= array()) {
if($M) extract($M); ?>

  <?php $P = 0;$R = $messages;

if(!is_array($R) && !($R instanceof Iterator) && !($R instanceof IteratorAggregate)) {
$R = array();}
$Q = $R;
foreach($Q as $item) {if($P == 0) { ?>

    <?php } ?>

      <li><?php echo htmlspecialchars($item,3); ?></li>
    <?php $P++;}if($P > 0) { ?>

  <?php } ?>

<?php 
}

function _templatef837a7c1c7f3574ac384c9c2e100b03d($X= array()) {
if($X) extract($X); ?>

  <?php $BB = 0;$BD = $messages;

if(!is_array($BD) && !($BD instanceof Iterator) && !($BD instanceof IteratorAggregate)) {
$BD = array();}
$BC = $BD;
foreach($BC as $item) {if($BB == 0) { ?>

    <?php } ?>

      <li><?php echo htmlspecialchars($item,3); ?></li>
    <?php $BB++;}if($BB > 0) { ?>

  <?php } ?>

<?php 
}

function __slotHandlerab55879e3ccefb48e37451666ac4b528($BL= array()) {
if($BL) extract($BL); ?>


<h1>Create property</h1>

<?php if(isset($this->form_property_form_datasource))$this->form_property_form->setDatasource($this->form_property_form_datasource);
if(isset($this->form_property_form_error_list))$this->form_property_form->setErrorList($this->form_property_form_error_list);
 ?><form<?php $this->form_property_form->renderAttributes(); ?>>

<label<?php $this->label_id001->renderAttributes(); ?>>Title</label> :
<input<?php $this->input_id002->renderAttributes(); ?> /><br/>

<?php $this->input_id003->setAttribute('value',$this->node_id);
 ?><input<?php $this->input_id003->renderAttributes(); ?> /><br/>

<input<?php $this->input_id004->renderAttributes(); ?> />

</form>



<?php $BS = 0;$BU = $this->property;

if(!is_array($BU) && !($BU instanceof Iterator) && !($BU instanceof IteratorAggregate)) {
$BU = array();}
$BT = $BU;
foreach($BT as $item) {if($BS == 0) { ?>

<div class='list'>
    <table>
        <tr>
            <th>Property name</th>
            <th>Action</th>

        </tr>

    <?php } ?>

    <tr>
        <td><?php $BW='';
$BX = $item;
if((is_array($BX) || ($BX instanceof ArrayAccess)) && isset($BX['property_name'])) { $BW = $BX['property_name'];
}else{ $BW = '';}
echo htmlspecialchars($BW,3); ?></td>
        <td><a href='<?php $BY='';
$BZ = $item;
if((is_array($BZ) || ($BZ instanceof ArrayAccess)) && isset($BZ['id'])) { $BY = $BZ['id'];
}else{ $BY = '';}
$CB = array();
$CA = lmbArrayHelper :: explode(',',':', sprintf('action:delete_property,id:%s',$BY));
foreach($CA as $key => $value) $CB[trim($key)] = trim($value);
$CC = false;
echo lmbToolkit :: instance()->getRoutesUrl($CB, '', $CC);
 ?>'>delete</a></td>
    </tr>



    <?php $BS++;}if($BS > 0) { ?>

</table>
    </div>
<?php } ?>



<?php 
}

function __slotHandlerb02787fccf574304eff7e134d3065e12($DD= array()) {
if($DD) extract($DD);
}

function __slotHandler21cdf4bc6c3480d80e372426aaa95015($EA= array()) {
if($EA) extract($EA);
}

function __slotHandler0e862dfeb1898a82aab769469b114b4f($EB= array()) {
if($EB) extract($EB);
}

function __slotHandlere8a06b35f46a8894e0ff425928c978b8($EC= array()) {
if($EC) extract($EC);
}

}
}
$macro_executor_class='MacroTemplateExecutor56b08071a4f6b2356c6c33fb69852539';