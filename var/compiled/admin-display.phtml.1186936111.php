<?php /* This file is generated from /usr/share/nginx/www/eastwood/lib//limb/cms/template/admin/display.phtml*/?><?php
if(!class_exists('MacroTemplateExecutorc90ec63beb6b542e3a4be60d58c058cf', false)){
require_once('limb/macro/src/compiler/lmbMacroTemplateExecutor.class.php');
class MacroTemplateExecutorc90ec63beb6b542e3a4be60d58c058cf extends lmbMacroTemplateExecutor {
function render($args = array()) {
if($args) extract($args);
$this->_init();
$this->__staticInclude1('admin_page_layout.phtml', 'content_zone', 'admin_page_layout.phtml'); ?>

<?php 
}

function __staticInclude1($file,$into,$file) {
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
  <?php if(isset($this->__slot_handlers_header_zone)) {foreach($this->__slot_handlers_header_zone as $__slot_handler_header_zone) {call_user_func_array($__slot_handler_header_zone, array(array()));}}$this->__slotHandlere93acdf8694b3fd18a4249670955a396(array()); ?>

  <style type="text/css">
    <?php if(isset($this->__slot_handlers_css_zone)) {foreach($this->__slot_handlers_css_zone as $__slot_handler_css_zone) {call_user_func_array($__slot_handler_css_zone, array(array()));}}$this->__slotHandlerf6c5009efe23ef3ba72d2b26f53f7984(array()); ?>

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
        <?php if(isset($this->__slot_handlers_content_zone)) {foreach($this->__slot_handlers_content_zone as $__slot_handler_content_zone) {call_user_func_array($__slot_handler_content_zone, array(array()));}}$this->__slotHandler99419ce55f1a62bd662fca13451e16e4(array()); ?>

      </div>
    </div>

    <div id='sidebar'>
      <?php
        lmb_require('limb/cms/src/fetcher/lmbCmsAdminNavigationFetcher.class.php');
        $this->navigation=new lmbCmsAdminNavigationFetcher();
        $this->navigation=$this->navigation->fetch();
      ?>
      <dl id='main_menu'>
      <?php $BO = 0;$BQ = $this->navigation;

if(!is_array($BQ) && !($BQ instanceof Iterator) && !($BQ instanceof IteratorAggregate)) {
$BQ = array();}
$BP = $BQ;
foreach($BP as $item) {if($BO == 0) { ?>

        <?php } ?>

        <dt class='<?php $BS='';
$BT = $item;
if((is_array($BT) || ($BT instanceof ArrayAccess)) && isset($BT['id'])) { $BS = $BT['id'];
}else{ $BS = '';}
echo htmlspecialchars($BS,3); ?>'><img src='<?php $BU='';
$BV = $item;
if((is_array($BV) || ($BV instanceof ArrayAccess)) && isset($BV['icon'])) { $BU = $BV['icon'];
}else{ $BU = '';}
echo htmlspecialchars($BU,3); ?>'/> <?php $BW='';
$BX = $item;
if((is_array($BX) || ($BX instanceof ArrayAccess)) && isset($BX['title'])) { $BW = $BX['title'];
}else{ $BW = '';}
echo htmlspecialchars($BW,3); ?> </dt>
        <dd>
          <?php $BY='';
$BZ = $item;
if((is_array($BZ) || ($BZ instanceof ArrayAccess)) && isset($BZ['children'])) { $BY = $BZ['children'];
}else{ $BY = '';}
$CC = 0;$CE = $BY;

if(!is_array($CE) && !($CE instanceof Iterator) && !($CE instanceof IteratorAggregate)) {
$CE = array();}
$CD = $CE;
foreach($CD as $sub_item) {if($CC == 0) { ?>

            <ul>
              <?php } ?>

              <li>
                <img src='<?php $CG='';
$CH = $sub_item;
if((is_array($CH) || ($CH instanceof ArrayAccess)) && isset($CH['icon'])) { $CG = $CH['icon'];
}else{ $CG = '';}
echo htmlspecialchars($CG,3); ?>'/> <a href='<?php $CI='';
$CJ = $sub_item;
if((is_array($CJ) || ($CJ instanceof ArrayAccess)) && isset($CJ['url'])) { $CI = $CJ['url'];
}else{ $CI = '';}
echo htmlspecialchars($CI,3); ?>'><?php $CK='';
$CL = $sub_item;
if((is_array($CL) || ($CL instanceof ArrayAccess)) && isset($CL['title'])) { $CK = $CL['title'];
}else{ $CK = '';}
echo htmlspecialchars($CK,3); ?></a>
              </li><?php $CC++;}if($CC > 0) { ?>

            </ul>
          <?php } ?>

        </dd>
        <?php $BO++;}if($BO > 0) { ?>

      <?php } ?>

      </dl>
      <?php if(isset($this->__slot_handlers_context_help)) {foreach($this->__slot_handlers_context_help as $__slot_handler_context_help) {call_user_func_array($__slot_handler_context_help, array(array()));}}$this->__slotHandler76e2c7deaf5da76687d719b3192d0cb2(array()); ?>

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
  <?php if(isset($this->__slot_handlers_js_include)) {foreach($this->__slot_handlers_js_include as $__slot_handler_js_include) {call_user_func_array($__slot_handler_js_include, array(array()));}}$this->__slotHandlerd7d7fa0c801c9e016010f6155a854dd0(array()); ?>


  <script type="text/javascript">
    <?php if(isset($this->__slot_handlers_js)) {foreach($this->__slot_handlers_js as $__slot_handler_js) {call_user_func_array($__slot_handler_js, array(array()));}}$this->__slotHandler6f3f04d1222715b46b1fe7ca2112f23f(array()); ?>


    jQuery(window).ready(function()
    {
      <?php if(isset($this->__slot_handlers_js_ready)) {foreach($this->__slot_handlers_js_ready as $__slot_handler_js_ready) {call_user_func_array($__slot_handler_js_ready, array(array()));}}$this->__slotHandler3951851e781a0be09fd5461ace561ddb(array()); ?>


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

function __slotHandlere93acdf8694b3fd18a4249670955a396($I= array()) {
if($I) extract($I);
}

function __slotHandlerf6c5009efe23ef3ba72d2b26f53f7984($J= array()) {
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
$this->_template30ae9d3f656d4c3f0732d02e8ec427ab(array('template' => 'flashbox','messages' => $K,'box_class' => 'error',)); ?>

        <?php $V='';
$W = $flashbox;
$V = $W->getMessages();
$this->_template0b4deb8d3bdd110f059456e535383167(array('template' => 'flashbox','messages' => $V,'box_class' => 'message',)); ?>

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

function _template30ae9d3f656d4c3f0732d02e8ec427ab($M= array()) {
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

function _template0b4deb8d3bdd110f059456e535383167($X= array()) {
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

function __slotHandler99419ce55f1a62bd662fca13451e16e4($BL= array()) {
if($BL) extract($BL); ?>

<div id="dashboard">
  <h1>Панель управления</h1>

  <p><b>Добро пожаловать в панель управления</b></p>

  <p><b>Выберите модуль с которым хотите работать в меню слева</b></p>
</div>
<?php 
}

function __slotHandler76e2c7deaf5da76687d719b3192d0cb2($CM= array()) {
if($CM) extract($CM);
}

function __slotHandlerd7d7fa0c801c9e016010f6155a854dd0($DJ= array()) {
if($DJ) extract($DJ);
}

function __slotHandler6f3f04d1222715b46b1fe7ca2112f23f($DK= array()) {
if($DK) extract($DK);
}

function __slotHandler3951851e781a0be09fd5461ace561ddb($DL= array()) {
if($DL) extract($DL);
}

}
}
$macro_executor_class='MacroTemplateExecutorc90ec63beb6b542e3a4be60d58c058cf';