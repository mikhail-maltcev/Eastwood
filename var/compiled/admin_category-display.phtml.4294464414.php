<?php /* This file is generated from /usr/share/nginx/www/eastwood/template/admin_category/display.phtml*/?><?php
if(!class_exists('MacroTemplateExecutorcdb122be75b5c7f39efb62b06b74a6db', false)){
require_once('limb/macro/src/compiler/lmbMacroTemplateExecutor.class.php');
require_once('limb/core/src/lmbArrayHelper.class.php');
class MacroTemplateExecutorcdb122be75b5c7f39efb62b06b74a6db extends lmbMacroTemplateExecutor {
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
  <?php if(isset($this->__slot_handlers_header_zone)) {foreach($this->__slot_handlers_header_zone as $__slot_handler_header_zone) {call_user_func_array($__slot_handler_header_zone, array(array()));}}$this->__slotHandler16b5105dff18e13832cdbf7b4631535c(array()); ?>

  <style type="text/css">
    <?php if(isset($this->__slot_handlers_css_zone)) {foreach($this->__slot_handlers_css_zone as $__slot_handler_css_zone) {call_user_func_array($__slot_handler_css_zone, array(array()));}}$this->__slotHandlere013ca6e521582b26c883294b50af7e1(array()); ?>

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
        <?php if(isset($this->__slot_handlers_content_zone)) {foreach($this->__slot_handlers_content_zone as $__slot_handler_content_zone) {call_user_func_array($__slot_handler_content_zone, array(array()));}}$this->__slotHandler7fe0b6af41066a26a42eee04c20d369d(array()); ?>

      </div>
    </div>

    <div id='sidebar'>
      <?php
        lmb_require('limb/cms/src/fetcher/lmbCmsAdminNavigationFetcher.class.php');
        $this->navigation=new lmbCmsAdminNavigationFetcher();
        $this->navigation=$this->navigation->fetch();
      ?>
      <dl id='main_menu'>
      <?php $CU = 0;$CW = $this->navigation;

if(!is_array($CW) && !($CW instanceof Iterator) && !($CW instanceof IteratorAggregate)) {
$CW = array();}
$CV = $CW;
foreach($CV as $item) {if($CU == 0) { ?>

        <?php } ?>

        <dt class='<?php $CY='';
$CZ = $item;
if((is_array($CZ) || ($CZ instanceof ArrayAccess)) && isset($CZ['id'])) { $CY = $CZ['id'];
}else{ $CY = '';}
echo htmlspecialchars($CY,3); ?>'><img src='<?php $DA='';
$DB = $item;
if((is_array($DB) || ($DB instanceof ArrayAccess)) && isset($DB['icon'])) { $DA = $DB['icon'];
}else{ $DA = '';}
echo htmlspecialchars($DA,3); ?>'/> <?php $DC='';
$DD = $item;
if((is_array($DD) || ($DD instanceof ArrayAccess)) && isset($DD['title'])) { $DC = $DD['title'];
}else{ $DC = '';}
echo htmlspecialchars($DC,3); ?> </dt>
        <dd>
          <?php $DE='';
$DF = $item;
if((is_array($DF) || ($DF instanceof ArrayAccess)) && isset($DF['children'])) { $DE = $DF['children'];
}else{ $DE = '';}
$DI = 0;$DK = $DE;

if(!is_array($DK) && !($DK instanceof Iterator) && !($DK instanceof IteratorAggregate)) {
$DK = array();}
$DJ = $DK;
foreach($DJ as $sub_item) {if($DI == 0) { ?>

            <ul>
              <?php } ?>

              <li>
                <img src='<?php $DM='';
$DN = $sub_item;
if((is_array($DN) || ($DN instanceof ArrayAccess)) && isset($DN['icon'])) { $DM = $DN['icon'];
}else{ $DM = '';}
echo htmlspecialchars($DM,3); ?>'/> <a href='<?php $DO='';
$DP = $sub_item;
if((is_array($DP) || ($DP instanceof ArrayAccess)) && isset($DP['url'])) { $DO = $DP['url'];
}else{ $DO = '';}
echo htmlspecialchars($DO,3); ?>'><?php $DQ='';
$DR = $sub_item;
if((is_array($DR) || ($DR instanceof ArrayAccess)) && isset($DR['title'])) { $DQ = $DR['title'];
}else{ $DQ = '';}
echo htmlspecialchars($DQ,3); ?></a>
              </li><?php $DI++;}if($DI > 0) { ?>

            </ul>
          <?php } ?>

        </dd>
        <?php $CU++;}if($CU > 0) { ?>

      <?php } ?>

      </dl>
      <?php if(isset($this->__slot_handlers_context_help)) {foreach($this->__slot_handlers_context_help as $__slot_handler_context_help) {call_user_func_array($__slot_handler_context_help, array(array()));}}$this->__slotHandler2f46d66fe9fae3af78da1b3e6c8ffcf3(array()); ?>

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
  <?php if(isset($this->__slot_handlers_js_include)) {foreach($this->__slot_handlers_js_include as $__slot_handler_js_include) {call_user_func_array($__slot_handler_js_include, array(array()));}}$this->__slotHandleraa96606f0a4771f07c4a6e59d4d5df00(array()); ?>


  <script type="text/javascript">
    <?php if(isset($this->__slot_handlers_js)) {foreach($this->__slot_handlers_js as $__slot_handler_js) {call_user_func_array($__slot_handler_js, array(array()));}}$this->__slotHandlerbad49853a17fd401aedee425403f28d7(array()); ?>


    jQuery(window).ready(function()
    {
      <?php if(isset($this->__slot_handlers_js_ready)) {foreach($this->__slot_handlers_js_ready as $__slot_handler_js_ready) {call_user_func_array($__slot_handler_js_ready, array(array()));}}$this->__slotHandler1fc535a52b12228410172af19794e553(array()); ?>


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

function __slotHandler16b5105dff18e13832cdbf7b4631535c($I= array()) {
if($I) extract($I);
}

function __slotHandlere013ca6e521582b26c883294b50af7e1($J= array()) {
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
$this->_template16bcf01b709b2859bef5574853d16777(array('template' => 'flashbox','messages' => $K,'box_class' => 'error',)); ?>

        <?php $V='';
$W = $flashbox;
$V = $W->getMessages();
$this->_template6c9ae76365d618594b97415141fb8e13(array('template' => 'flashbox','messages' => $V,'box_class' => 'message',)); ?>

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

function _template16bcf01b709b2859bef5574853d16777($M= array()) {
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

function _template6c9ae76365d618594b97415141fb8e13($X= array()) {
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

function __slotHandler7fe0b6af41066a26a42eee04c20d369d($BL= array()) {
if($BL) extract($BL); ?>



    <h1>Category admin</h1>

    <?php $this->_render_tree55e805d4825723aeabce4439c6110c25($this->Tree, 0,array('kids_prop' => 'childs','prefix' => '1',));
 ?>

<?php 
}

function _render_tree55e805d4825723aeabce4439c6110c25($BS,$level,$BU= array()) {
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

            <?php $new_prefix = $prefix . "." . $counter; ?><?php if(isset($item["childs"])) {$this->_render_tree55e805d4825723aeabce4439c6110c25($item["childs"], $level + 1, array('prefix' => $new_prefix,));
} ?>


            <a href='<?php $CD='';
$CE = $item;
if((is_array($CE) || ($CE instanceof ArrayAccess)) && isset($CE['id'])) { $CD = $CE['id'];
}else{ $CD = '';}
$CG = array();
$CF = lmbArrayHelper :: explode(',',':', sprintf('action:create,id:%s',$CD));
foreach($CF as $key => $value) $CG[trim($key)] = trim($value);
$CH = false;
echo lmbToolkit :: instance()->getRoutesUrl($CG, '', $CH);
 ?>'>Add to</a>&nbsp;&nbsp;

            <a href='<?php $CI='';
$CJ = $item;
if((is_array($CJ) || ($CJ instanceof ArrayAccess)) && isset($CJ['id'])) { $CI = $CJ['id'];
}else{ $CI = '';}
$CL = array();
$CK = lmbArrayHelper :: explode(',',':', sprintf('action:delete,id:%s',$CI));
foreach($CK as $key => $value) $CL[trim($key)] = trim($value);
$CM = false;
echo lmbToolkit :: instance()->getRoutesUrl($CL, '', $CM);
 ?>'>Delete</a>
            <a href='<?php $CN='';
$CO = $item;
if((is_array($CO) || ($CO instanceof ArrayAccess)) && isset($CO['id'])) { $CN = $CO['id'];
}else{ $CN = '';}
$CQ = array();
$CP = lmbArrayHelper :: explode(',',':', sprintf('action:create_property,id:%s',$CN));
foreach($CP as $key => $value) $CQ[trim($key)] = trim($value);
$CR = false;
echo lmbToolkit :: instance()->getRoutesUrl($CQ, '', $CR);
 ?>'>Add Property</a>

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

function __slotHandler2f46d66fe9fae3af78da1b3e6c8ffcf3($DS= array()) {
if($DS) extract($DS);
}

function __slotHandleraa96606f0a4771f07c4a6e59d4d5df00($EP= array()) {
if($EP) extract($EP);
}

function __slotHandlerbad49853a17fd401aedee425403f28d7($EQ= array()) {
if($EQ) extract($EQ);
}

function __slotHandler1fc535a52b12228410172af19794e553($ER= array()) {
if($ER) extract($ER);
}

}
}
$macro_executor_class='MacroTemplateExecutorcdb122be75b5c7f39efb62b06b74a6db';