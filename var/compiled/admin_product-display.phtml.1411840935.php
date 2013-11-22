<?php /* This file is generated from /usr/share/nginx/www/eastwood/template/admin_product/display.phtml*/?><?php
if(!class_exists('MacroTemplateExecutor957fb6a5e4f2aabab6006adcad2d46e1', false)){
require_once('limb/macro/src/compiler/lmbMacroTemplateExecutor.class.php');
require_once('limb/core/src/lmbArrayHelper.class.php');
class MacroTemplateExecutor957fb6a5e4f2aabab6006adcad2d46e1 extends lmbMacroTemplateExecutor {
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
  <?php if(isset($this->__slot_handlers_header_zone)) {foreach($this->__slot_handlers_header_zone as $__slot_handler_header_zone) {call_user_func_array($__slot_handler_header_zone, array(array()));}}$this->__slotHandler36cbb3a64978c606925a984696780d14(array()); ?>

  <style type="text/css">
    <?php if(isset($this->__slot_handlers_css_zone)) {foreach($this->__slot_handlers_css_zone as $__slot_handler_css_zone) {call_user_func_array($__slot_handler_css_zone, array(array()));}}$this->__slotHandlerfe09e8086299f436f03f2aa499d23f2c(array()); ?>

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
        <?php if(isset($this->__slot_handlers_content_zone)) {foreach($this->__slot_handlers_content_zone as $__slot_handler_content_zone) {call_user_func_array($__slot_handler_content_zone, array(array()));}}$this->__slotHandler765db0f888a1f4544b16cec70fbd67b6(array()); ?>

      </div>
    </div>

    <div id='sidebar'>
      <?php
        lmb_require('limb/cms/src/fetcher/lmbCmsAdminNavigationFetcher.class.php');
        $this->navigation=new lmbCmsAdminNavigationFetcher();
        $this->navigation=$this->navigation->fetch();
      ?>
      <dl id='main_menu'>
      <?php $CK = 0;$CM = $this->navigation;

if(!is_array($CM) && !($CM instanceof Iterator) && !($CM instanceof IteratorAggregate)) {
$CM = array();}
$CL = $CM;
foreach($CL as $item) {if($CK == 0) { ?>

        <?php } ?>

        <dt class='<?php $CO='';
$CP = $item;
if((is_array($CP) || ($CP instanceof ArrayAccess)) && isset($CP['id'])) { $CO = $CP['id'];
}else{ $CO = '';}
echo htmlspecialchars($CO,3); ?>'><img src='<?php $CQ='';
$CR = $item;
if((is_array($CR) || ($CR instanceof ArrayAccess)) && isset($CR['icon'])) { $CQ = $CR['icon'];
}else{ $CQ = '';}
echo htmlspecialchars($CQ,3); ?>'/> <?php $CS='';
$CT = $item;
if((is_array($CT) || ($CT instanceof ArrayAccess)) && isset($CT['title'])) { $CS = $CT['title'];
}else{ $CS = '';}
echo htmlspecialchars($CS,3); ?> </dt>
        <dd>
          <?php $CU='';
$CV = $item;
if((is_array($CV) || ($CV instanceof ArrayAccess)) && isset($CV['children'])) { $CU = $CV['children'];
}else{ $CU = '';}
$CY = 0;$DA = $CU;

if(!is_array($DA) && !($DA instanceof Iterator) && !($DA instanceof IteratorAggregate)) {
$DA = array();}
$CZ = $DA;
foreach($CZ as $sub_item) {if($CY == 0) { ?>

            <ul>
              <?php } ?>

              <li>
                <img src='<?php $DC='';
$DD = $sub_item;
if((is_array($DD) || ($DD instanceof ArrayAccess)) && isset($DD['icon'])) { $DC = $DD['icon'];
}else{ $DC = '';}
echo htmlspecialchars($DC,3); ?>'/> <a href='<?php $DE='';
$DF = $sub_item;
if((is_array($DF) || ($DF instanceof ArrayAccess)) && isset($DF['url'])) { $DE = $DF['url'];
}else{ $DE = '';}
echo htmlspecialchars($DE,3); ?>'><?php $DG='';
$DH = $sub_item;
if((is_array($DH) || ($DH instanceof ArrayAccess)) && isset($DH['title'])) { $DG = $DH['title'];
}else{ $DG = '';}
echo htmlspecialchars($DG,3); ?></a>
              </li><?php $CY++;}if($CY > 0) { ?>

            </ul>
          <?php } ?>

        </dd>
        <?php $CK++;}if($CK > 0) { ?>

      <?php } ?>

      </dl>
      <?php if(isset($this->__slot_handlers_context_help)) {foreach($this->__slot_handlers_context_help as $__slot_handler_context_help) {call_user_func_array($__slot_handler_context_help, array(array()));}}$this->__slotHandler5f2d8bb524b5bd77c253f49716ce4f65(array()); ?>

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
  <?php if(isset($this->__slot_handlers_js_include)) {foreach($this->__slot_handlers_js_include as $__slot_handler_js_include) {call_user_func_array($__slot_handler_js_include, array(array()));}}$this->__slotHandler7f1ab62f1d8dece7d094ff7eaa6f077a(array()); ?>


  <script type="text/javascript">
    <?php if(isset($this->__slot_handlers_js)) {foreach($this->__slot_handlers_js as $__slot_handler_js) {call_user_func_array($__slot_handler_js, array(array()));}}$this->__slotHandlerf4c0e1f36e25b8d844b414c06e0cad5c(array()); ?>


    jQuery(window).ready(function()
    {
      <?php if(isset($this->__slot_handlers_js_ready)) {foreach($this->__slot_handlers_js_ready as $__slot_handler_js_ready) {call_user_func_array($__slot_handler_js_ready, array(array()));}}$this->__slotHandlerab70771461c9b658e3134d87b1709585(array()); ?>


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

function __slotHandler36cbb3a64978c606925a984696780d14($I= array()) {
if($I) extract($I);
}

function __slotHandlerfe09e8086299f436f03f2aa499d23f2c($J= array()) {
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
$this->_templated427b979e30aa4dbf1422ecbe91ffc11(array('template' => 'flashbox','messages' => $K,'box_class' => 'error',)); ?>

        <?php $V='';
$W = $flashbox;
$V = $W->getMessages();
$this->_template808667fe1afdf2e877383473ca6fb35d(array('template' => 'flashbox','messages' => $V,'box_class' => 'message',)); ?>

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

function _templated427b979e30aa4dbf1422ecbe91ffc11($M= array()) {
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

function _template808667fe1afdf2e877383473ca6fb35d($X= array()) {
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

function __slotHandler765db0f888a1f4544b16cec70fbd67b6($BL= array()) {
if($BL) extract($BL); ?>


  <?php $this->__staticInclude3('_admin/selectors.phtml'); ?>

  <?php $this->__staticInclude4('_admin_object/actions.phtml'); ?>


  <div id="header">
    <h1>Product</h1>

  </div>

  <div id="body">
      <h1>Select category</h1>

      <?php $this->_render_tree322a193b7dba7d4fb5e4c206f07b2ceb($this->Tree, 0,array('kids_prop' => 'childs','prefix' => '1',));
 ?>



  </div>

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

function _render_tree322a193b7dba7d4fb5e4c206f07b2ceb($BS,$level,$BU= array()) {
if($BU) extract($BU);$BT=0;
foreach($BS as $item) {
$counter = $BT+1;
if(!$BT) {
 ?>

      <ul>
          <?php }
 ?>

          <li>
              <?php echo htmlspecialchars($prefix,3); ?>.<?php echo htmlspecialchars($counter,3); ?>)<?php $BZ='';
$CA = $item;
if((is_array($CA) || ($CA instanceof ArrayAccess)) && isset($CA['identifier'])) { $BZ = $CA['identifier'];
}else{ $BZ = '';}
echo htmlspecialchars($BZ,3); ?>

              <?php $new_prefix = $prefix . "." . $counter; ?><?php if(isset($item["childs"])) {$this->_render_tree322a193b7dba7d4fb5e4c206f07b2ceb($item["childs"], $level + 1, array('prefix' => $new_prefix,));
} ?>


              <a href='<?php $CD='';
$CE = $item;
if((is_array($CE) || ($CE instanceof ArrayAccess)) && isset($CE['id'])) { $CD = $CE['id'];
}else{ $CD = '';}
$CG = array();
$CF = lmbArrayHelper :: explode(',',':', sprintf('action:create_to,id:%s',$CD));
foreach($CF as $key => $value) $CG[trim($key)] = trim($value);
$CH = false;
echo lmbToolkit :: instance()->getRoutesUrl($CG, '', $CH);
 ?>'> Select</a>&nbsp;&nbsp;


          </li>
          <?php $BT++;
}
if(count($BS) == 0) { ?>

          Комментарии отсуствуют
          <?php }if($BT) {
 ?>





          
      </ul>
      <?php }

}

function __slotHandler5f2d8bb524b5bd77c253f49716ce4f65($DI= array()) {
if($DI) extract($DI);
}

function __slotHandler7f1ab62f1d8dece7d094ff7eaa6f077a($EF= array()) {
if($EF) extract($EF);
}

function __slotHandlerf4c0e1f36e25b8d844b414c06e0cad5c($EG= array()) {
if($EG) extract($EG); ?>

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

function __slotHandlerab70771461c9b658e3134d87b1709585($EH= array()) {
if($EH) extract($EH);
}

}
}
$macro_executor_class='MacroTemplateExecutor957fb6a5e4f2aabab6006adcad2d46e1';