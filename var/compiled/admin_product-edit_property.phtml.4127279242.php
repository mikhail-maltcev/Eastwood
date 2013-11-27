<?php /* This file is generated from /usr/share/nginx/www/eastwood/template/admin_product/edit_property.phtml*/?><?php
if(!class_exists('MacroTemplateExecutor50befcb9560e850f5b9633e02c587bf4', false)){
require_once('limb/macro/src/compiler/lmbMacroTemplateExecutor.class.php');
require_once('limb/macro/src/tags/form/lmbMacroFormWidget.class.php');
require_once('limb/macro/src/tags/form/lmbMacroFormLabelWidget.class.php');
require_once('limb/macro/src/tags/form/lmbMacroInputWidget.class.php');
class MacroTemplateExecutor50befcb9560e850f5b9633e02c587bf4 extends lmbMacroTemplateExecutor {

function _init() {
$this->form_news_form = new lmbMacroFormWidget('news_form');
$this->form_news_form->setAttributes(array (
  'id' => 'news_form',
  'name' => 'news_form',
  'method' => 'post',
));
$this->label_id001 = new lmbMacroFormLabelWidget('id001');
$this->label_id001->setAttributes(array (
  'for' => 'value',
  'runtime_id' => 'id001',
));
$this->label_id001->setForm($this->form_news_form);
$this->form_news_form->addChild($this->label_id001);
$this->input_id002 = new lmbMacroInputWidget('value');
$this->input_id002->setAttributes(array (
  'name' => 'value',
  'type' => 'text',
  'size' => '60',
  'title' => 'value',
));
$this->input_id002->setForm($this->form_news_form);
$this->form_news_form->addChild($this->input_id002);
$this->input_id003 = new lmbMacroInputWidget('property_id');
$this->input_id003->setAttributes(array (
  'name' => 'property_id',
  'type' => 'hidden',
  'title' => 'property_id',
));
$this->input_id003->setForm($this->form_news_form);
$this->form_news_form->addChild($this->input_id003);
$this->input_id004 = new lmbMacroFormElementWidget('id002');
$this->input_id004->setAttributes(array (
  'type' => 'submit',
  'value' => 'Save',
  'runtime_id' => 'id002',
));
$this->input_id004->setForm($this->form_news_form);
$this->form_news_form->addChild($this->input_id004);

}
function render($args = array()) {
if($args) extract($args);
$this->_init();
$this->__staticInclude1('admin_page_layout.phtml', 'content_zone', 'content_zone', 'admin_page_layout.phtml'); ?>

<?php 
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
  <?php if(isset($this->__slot_handlers_header_zone)) {foreach($this->__slot_handlers_header_zone as $__slot_handler_header_zone) {call_user_func_array($__slot_handler_header_zone, array(array()));}}$this->__slotHandlera93e690d65f42bb58a2d22baf52fa9d7(array()); ?>

  <style type="text/css">
    <?php if(isset($this->__slot_handlers_css_zone)) {foreach($this->__slot_handlers_css_zone as $__slot_handler_css_zone) {call_user_func_array($__slot_handler_css_zone, array(array()));}}$this->__slotHandlerbbb190f9bac10566d56d2b6405f5854f(array()); ?>

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
        <?php if(isset($this->__slot_handlers_content_zone)) {foreach($this->__slot_handlers_content_zone as $__slot_handler_content_zone) {call_user_func_array($__slot_handler_content_zone, array(array()));}}$this->__slotHandler804c765760b40393d08352432fc9312a(array()); ?>

      </div>
    </div>

    <div id='sidebar'>
      <?php
        lmb_require('limb/cms/src/fetcher/lmbCmsAdminNavigationFetcher.class.php');
        $this->navigation=new lmbCmsAdminNavigationFetcher();
        $this->navigation=$this->navigation->fetch();
      ?>
      <dl id='main_menu'>
      <?php $CO = 0;$CQ = $this->navigation;

if(!is_array($CQ) && !($CQ instanceof Iterator) && !($CQ instanceof IteratorAggregate)) {
$CQ = array();}
$CP = $CQ;
foreach($CP as $item) {if($CO == 0) { ?>

        <?php } ?>

        <dt class='<?php $CS='';
$CT = $item;
if((is_array($CT) || ($CT instanceof ArrayAccess)) && isset($CT['id'])) { $CS = $CT['id'];
}else{ $CS = '';}
echo htmlspecialchars($CS,3); ?>'><img src='<?php $CU='';
$CV = $item;
if((is_array($CV) || ($CV instanceof ArrayAccess)) && isset($CV['icon'])) { $CU = $CV['icon'];
}else{ $CU = '';}
echo htmlspecialchars($CU,3); ?>'/> <?php $CW='';
$CX = $item;
if((is_array($CX) || ($CX instanceof ArrayAccess)) && isset($CX['title'])) { $CW = $CX['title'];
}else{ $CW = '';}
echo htmlspecialchars($CW,3); ?> </dt>
        <dd>
          <?php $CY='';
$CZ = $item;
if((is_array($CZ) || ($CZ instanceof ArrayAccess)) && isset($CZ['children'])) { $CY = $CZ['children'];
}else{ $CY = '';}
$DC = 0;$DE = $CY;

if(!is_array($DE) && !($DE instanceof Iterator) && !($DE instanceof IteratorAggregate)) {
$DE = array();}
$DD = $DE;
foreach($DD as $sub_item) {if($DC == 0) { ?>

            <ul>
              <?php } ?>

              <li>
                <img src='<?php $DG='';
$DH = $sub_item;
if((is_array($DH) || ($DH instanceof ArrayAccess)) && isset($DH['icon'])) { $DG = $DH['icon'];
}else{ $DG = '';}
echo htmlspecialchars($DG,3); ?>'/> <a href='<?php $DI='';
$DJ = $sub_item;
if((is_array($DJ) || ($DJ instanceof ArrayAccess)) && isset($DJ['url'])) { $DI = $DJ['url'];
}else{ $DI = '';}
echo htmlspecialchars($DI,3); ?>'><?php $DK='';
$DL = $sub_item;
if((is_array($DL) || ($DL instanceof ArrayAccess)) && isset($DL['title'])) { $DK = $DL['title'];
}else{ $DK = '';}
echo htmlspecialchars($DK,3); ?></a>
              </li><?php $DC++;}if($DC > 0) { ?>

            </ul>
          <?php } ?>

        </dd>
        <?php $CO++;}if($CO > 0) { ?>

      <?php } ?>

      </dl>
      <?php if(isset($this->__slot_handlers_context_help)) {foreach($this->__slot_handlers_context_help as $__slot_handler_context_help) {call_user_func_array($__slot_handler_context_help, array(array()));}}$this->__slotHandlera4c381247d61283c0ae5b33b0d8db342(array()); ?>

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
  <?php if(isset($this->__slot_handlers_js_include)) {foreach($this->__slot_handlers_js_include as $__slot_handler_js_include) {call_user_func_array($__slot_handler_js_include, array(array()));}}$this->__slotHandlerfe64392b8f9b0d184ea5451c2dd22e74(array()); ?>


  <script type="text/javascript">
    <?php if(isset($this->__slot_handlers_js)) {foreach($this->__slot_handlers_js as $__slot_handler_js) {call_user_func_array($__slot_handler_js, array(array()));}}$this->__slotHandler1ff935f2158e9bda732774034a7fbdd9(array()); ?>


    jQuery(window).ready(function()
    {
      <?php if(isset($this->__slot_handlers_js_ready)) {foreach($this->__slot_handlers_js_ready as $__slot_handler_js_ready) {call_user_func_array($__slot_handler_js_ready, array(array()));}}$this->__slotHandler8f40990c1e2480bd924ecd67f0d2913c(array()); ?>


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

function __slotHandlera93e690d65f42bb58a2d22baf52fa9d7($I= array()) {
if($I) extract($I);
}

function __slotHandlerbbb190f9bac10566d56d2b6405f5854f($J= array()) {
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
$this->_template61e1e73c7e46d2c101ea41cc95780c67(array('template' => 'flashbox','messages' => $K,'box_class' => 'error',)); ?>

        <?php $V='';
$W = $flashbox;
$V = $W->getMessages();
$this->_template80fbe4a5bff1d0b971f2d177868cb576(array('template' => 'flashbox','messages' => $V,'box_class' => 'message',)); ?>

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

function _template61e1e73c7e46d2c101ea41cc95780c67($M= array()) {
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

function _template80fbe4a5bff1d0b971f2d177868cb576($X= array()) {
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

function __slotHandler804c765760b40393d08352432fc9312a($BL= array()) {
if($BL) extract($BL); ?>


  <?php $this->__staticInclude3('_admin/selectors.phtml'); ?>

  <?php $this->__staticInclude4('_admin_object/actions.phtml'); ?>


  <div id="header">
    <h1>Property product</h1>
  </div>


<?php $BQ = 0;$BS = $this->items;

if(!is_array($BS) && !($BS instanceof Iterator) && !($BS instanceof IteratorAggregate)) {
$BS = array();}
$BR = $BS;
foreach($BR as $item) {if($BQ == 0) { ?>


    <?php } ?>


        <?php if(isset($this->form_news_form_datasource))$this->form_news_form->setDatasource($this->form_news_form_datasource);
if(isset($this->form_news_form_error_list))$this->form_news_form->setErrorList($this->form_news_form_error_list);
 ?><form<?php $this->form_news_form->renderAttributes(); ?>>

        <?php $fields_errors = $this->form_news_form->getErrorList();
 ?>


        <?php $CA = 0;$CC = $fields_errors;

if(!is_array($CC) && !($CC instanceof Iterator) && !($CC instanceof IteratorAggregate)) {
$CC = array();}
$CB = $CC;
foreach($CB as $error) {if($CA == 0) { ?>

        <div class="message_error">
            <b class='title'>These fields contained errors</b>
            <ol>
                <?php } ?>

                <li><span style="color:red;"><?php $CE='';
$CF = $error;
if((is_array($CF) || ($CF instanceof ArrayAccess)) && isset($CF['message'])) { $CE = $CF['message'];
}else{ $CE = '';}
echo htmlspecialchars($CE,3); ?></span></li>
                <?php $CA++;}if($CA > 0) { ?>

            </ol>
        </div>
        <?php } ?>



        <label<?php $this->label_id001->renderAttributes(); ?>><?php $CG='';
$CH = $item;
$CG = $CH->getProperty();
$CG = $CG->getPropertyName();
echo htmlspecialchars($CG,3); ?></label> : <?php $CI='';
$CJ = $item;
$CI = $CJ->getValue();
$this->input_id002->setAttribute('value',$CI);
 ?><input<?php $this->input_id002->renderAttributes(); ?> />

        <?php $CK='';
$CL = $item;
$CK = $CL->getId();
$this->input_id003->setAttribute('value',$CK);
 ?><input<?php $this->input_id003->renderAttributes(); ?> />


        <input<?php $this->input_id004->renderAttributes(); ?> /><br/>

        </form>

    <?php $BQ++;}if($BQ > 0) { ?>


<?php } ?>



<?php 
}

function __staticInclude3($file) {
 ?>











<?php 
}

function __staticInclude4($file) {
 ?>








<?php 
}

function __slotHandlera4c381247d61283c0ae5b33b0d8db342($DM= array()) {
if($DM) extract($DM);
}

function __slotHandlerfe64392b8f9b0d184ea5451c2dd22e74($EJ= array()) {
if($EJ) extract($EJ);
}

function __slotHandler1ff935f2158e9bda732774034a7fbdd9($EK= array()) {
if($EK) extract($EK); ?>

  function openWindowForSelectors(title, url, obj)
  {
    var params = '&';
    jQuery(obj).parents('.list').find('input[checked][name="ids[]"][type="checkbox"]').each(function(){ params += this.name + '=' + this.value + '&';});
    tb_show(title, url + params + 'TB_iframe=true&width=640&height=480');
  }

  function openWindowForSavePriority(title, url, obj)
  {
    var params = '&';
    jQuery(obj).parent().parent().parent().find('.priority').each(function(){params += this.name + '=' + this.value + '&';});
    tb_show(title, url + params + 'TB_iframe=true&width=640&height=480');
  }
<?php 
}

function __slotHandler8f40990c1e2480bd924ecd67f0d2913c($EL= array()) {
if($EL) extract($EL);
}

}
}
$macro_executor_class='MacroTemplateExecutor50befcb9560e850f5b9633e02c587bf4';