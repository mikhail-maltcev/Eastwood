<?php /* This file is generated from /usr/share/nginx/www/eastwood/lib//limb/cms/template/admin/display.phtml*/?><?php
if(!class_exists('MacroTemplateExecutor6d28d1ef2e645f5a2f40300c5c2656f4', false)){
require_once('limb/macro/src/compiler/lmbMacroTemplateExecutor.class.php');
class MacroTemplateExecutor6d28d1ef2e645f5a2f40300c5c2656f4 extends lmbMacroTemplateExecutor {
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
  <?php if(isset($this->__slot_handlers_header_zone)) {foreach($this->__slot_handlers_header_zone as $__slot_handler_header_zone) {call_user_func_array($__slot_handler_header_zone, array(array()));}}$this->__slotHandlere2e97f6d8910750b30a9a67ba2a32290(array()); ?>

  <style type="text/css">
    <?php if(isset($this->__slot_handlers_css_zone)) {foreach($this->__slot_handlers_css_zone as $__slot_handler_css_zone) {call_user_func_array($__slot_handler_css_zone, array(array()));}}$this->__slotHandler320f2886b27b7ced5f71fc036acc4243(array()); ?>

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
        <?php if(isset($this->__slot_handlers_content_zone)) {foreach($this->__slot_handlers_content_zone as $__slot_handler_content_zone) {call_user_func_array($__slot_handler_content_zone, array(array()));}}$this->__slotHandler09105abe96e9624150242e7ad471f5fb(array()); ?>

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
      <?php if(isset($this->__slot_handlers_context_help)) {foreach($this->__slot_handlers_context_help as $__slot_handler_context_help) {call_user_func_array($__slot_handler_context_help, array(array()));}}$this->__slotHandlera616a4b046f4cd33b824cc6baea73859(array()); ?>

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
  <?php if(isset($this->__slot_handlers_js_include)) {foreach($this->__slot_handlers_js_include as $__slot_handler_js_include) {call_user_func_array($__slot_handler_js_include, array(array()));}}$this->__slotHandler02f8bb8ae18a480a7bf3c70ec17ec83a(array()); ?>


  <script type="text/javascript">
    <?php if(isset($this->__slot_handlers_js)) {foreach($this->__slot_handlers_js as $__slot_handler_js) {call_user_func_array($__slot_handler_js, array(array()));}}$this->__slotHandler5e3fe1a222f0a95a19f75c607770482e(array()); ?>


    jQuery(window).ready(function()
    {
      <?php if(isset($this->__slot_handlers_js_ready)) {foreach($this->__slot_handlers_js_ready as $__slot_handler_js_ready) {call_user_func_array($__slot_handler_js_ready, array(array()));}}$this->__slotHandler7a13b1a51242772fbbba3eea9650df1e(array()); ?>


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

function __slotHandlere2e97f6d8910750b30a9a67ba2a32290($I= array()) {
if($I) extract($I);
}

function __slotHandler320f2886b27b7ced5f71fc036acc4243($J= array()) {
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
$this->_template061dd4ba01e6f75356da1252e6f3737e(array('template' => 'flashbox','messages' => $K,'box_class' => 'error',)); ?>

        <?php $V='';
$W = $flashbox;
$V = $W->getMessages();
$this->_template6c5f014a5836f75500960e5514fc0bab(array('template' => 'flashbox','messages' => $V,'box_class' => 'message',)); ?>

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

function _template061dd4ba01e6f75356da1252e6f3737e($M= array()) {
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

function _template6c5f014a5836f75500960e5514fc0bab($X= array()) {
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

function __slotHandler09105abe96e9624150242e7ad471f5fb($BL= array()) {
if($BL) extract($BL); ?>

<div id="dashboard">
  <h1>Панель управления</h1>

  <p><b>Добро пожаловать в панель управления</b></p>

  <p><b>Выберите модуль с которым хотите работать в меню слева</b></p>
</div>
<?php 
}

function __slotHandlera616a4b046f4cd33b824cc6baea73859($CM= array()) {
if($CM) extract($CM);
}

function __slotHandler02f8bb8ae18a480a7bf3c70ec17ec83a($DJ= array()) {
if($DJ) extract($DJ);
}

function __slotHandler5e3fe1a222f0a95a19f75c607770482e($DK= array()) {
if($DK) extract($DK);
}

function __slotHandler7a13b1a51242772fbbba3eea9650df1e($DL= array()) {
if($DL) extract($DL);
}

}
}
$macro_executor_class='MacroTemplateExecutor6d28d1ef2e645f5a2f40300c5c2656f4';