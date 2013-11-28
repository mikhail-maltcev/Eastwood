<?php /* This file is generated from /usr/share/nginx/www/eastwood/template/admin_category/display.phtml*/?><?php
if(!class_exists('MacroTemplateExecutord8ef72e1f28fb064d84a2f934881a31f', false)){
require_once('limb/macro/src/compiler/lmbMacroTemplateExecutor.class.php');
require_once('limb/core/src/lmbArrayHelper.class.php');
class MacroTemplateExecutord8ef72e1f28fb064d84a2f934881a31f extends lmbMacroTemplateExecutor {
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
  <?php if(isset($this->__slot_handlers_header_zone)) {foreach($this->__slot_handlers_header_zone as $__slot_handler_header_zone) {call_user_func_array($__slot_handler_header_zone, array(array()));}}$this->__slotHandlerbd619f865f115f74e36fba705db0a15c(array()); ?>

  <style type="text/css">
    <?php if(isset($this->__slot_handlers_css_zone)) {foreach($this->__slot_handlers_css_zone as $__slot_handler_css_zone) {call_user_func_array($__slot_handler_css_zone, array(array()));}}$this->__slotHandlerc7e4af883f47895305f9f3809bf45b28(array()); ?>

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
        <?php if(isset($this->__slot_handlers_content_zone)) {foreach($this->__slot_handlers_content_zone as $__slot_handler_content_zone) {call_user_func_array($__slot_handler_content_zone, array(array()));}}$this->__slotHandlerd3895430478a712f84b07309f35fdffc(array()); ?>

      </div>
    </div>

    <div id='sidebar'>
      <?php
        lmb_require('limb/cms/src/fetcher/lmbCmsAdminNavigationFetcher.class.php');
        $this->navigation=new lmbCmsAdminNavigationFetcher();
        $this->navigation=$this->navigation->fetch();
      ?>
      <dl id='main_menu'>
      <?php $CV = 0;$CX = $this->navigation;

if(!is_array($CX) && !($CX instanceof Iterator) && !($CX instanceof IteratorAggregate)) {
$CX = array();}
$CW = $CX;
foreach($CW as $item) {if($CV == 0) { ?>

        <?php } ?>

        <dt class='<?php $CZ='';
$DA = $item;
if((is_array($DA) || ($DA instanceof ArrayAccess)) && isset($DA['id'])) { $CZ = $DA['id'];
}else{ $CZ = '';}
echo htmlspecialchars($CZ,3); ?>'><img src='<?php $DB='';
$DC = $item;
if((is_array($DC) || ($DC instanceof ArrayAccess)) && isset($DC['icon'])) { $DB = $DC['icon'];
}else{ $DB = '';}
echo htmlspecialchars($DB,3); ?>'/> <?php $DD='';
$DE = $item;
if((is_array($DE) || ($DE instanceof ArrayAccess)) && isset($DE['title'])) { $DD = $DE['title'];
}else{ $DD = '';}
echo htmlspecialchars($DD,3); ?> </dt>
        <dd>
          <?php $DF='';
$DG = $item;
if((is_array($DG) || ($DG instanceof ArrayAccess)) && isset($DG['children'])) { $DF = $DG['children'];
}else{ $DF = '';}
$DJ = 0;$DL = $DF;

if(!is_array($DL) && !($DL instanceof Iterator) && !($DL instanceof IteratorAggregate)) {
$DL = array();}
$DK = $DL;
foreach($DK as $sub_item) {if($DJ == 0) { ?>

            <ul>
              <?php } ?>

              <li>
                <img src='<?php $DN='';
$DO = $sub_item;
if((is_array($DO) || ($DO instanceof ArrayAccess)) && isset($DO['icon'])) { $DN = $DO['icon'];
}else{ $DN = '';}
echo htmlspecialchars($DN,3); ?>'/> <a href='<?php $DP='';
$DQ = $sub_item;
if((is_array($DQ) || ($DQ instanceof ArrayAccess)) && isset($DQ['url'])) { $DP = $DQ['url'];
}else{ $DP = '';}
echo htmlspecialchars($DP,3); ?>'><?php $DR='';
$DS = $sub_item;
if((is_array($DS) || ($DS instanceof ArrayAccess)) && isset($DS['title'])) { $DR = $DS['title'];
}else{ $DR = '';}
echo htmlspecialchars($DR,3); ?></a>
              </li><?php $DJ++;}if($DJ > 0) { ?>

            </ul>
          <?php } ?>

        </dd>
        <?php $CV++;}if($CV > 0) { ?>

      <?php } ?>

      </dl>
      <?php if(isset($this->__slot_handlers_context_help)) {foreach($this->__slot_handlers_context_help as $__slot_handler_context_help) {call_user_func_array($__slot_handler_context_help, array(array()));}}$this->__slotHandler0c91bdd41f93910d5c4cbdfaea58b929(array()); ?>

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
  <?php if(isset($this->__slot_handlers_js_include)) {foreach($this->__slot_handlers_js_include as $__slot_handler_js_include) {call_user_func_array($__slot_handler_js_include, array(array()));}}$this->__slotHandler5dbac903d787c1a5a5512c1104491399(array()); ?>


  <script type="text/javascript">
    <?php if(isset($this->__slot_handlers_js)) {foreach($this->__slot_handlers_js as $__slot_handler_js) {call_user_func_array($__slot_handler_js, array(array()));}}$this->__slotHandler071acb791f0388f127953298e562bad5(array()); ?>


    jQuery(window).ready(function()
    {
      <?php if(isset($this->__slot_handlers_js_ready)) {foreach($this->__slot_handlers_js_ready as $__slot_handler_js_ready) {call_user_func_array($__slot_handler_js_ready, array(array()));}}$this->__slotHandlerb323fb44e249fff544b1df6ce96bbbdd(array()); ?>


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

function __slotHandlerbd619f865f115f74e36fba705db0a15c($I= array()) {
if($I) extract($I);
}

function __slotHandlerc7e4af883f47895305f9f3809bf45b28($J= array()) {
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
$this->_templatee8b1d754cc68bed2ff6f71e880e535e6(array('template' => 'flashbox','messages' => $K,'box_class' => 'error',)); ?>

        <?php $V='';
$W = $flashbox;
$V = $W->getMessages();
$this->_template9df91a47958c63ef52bc0d6dd17668ad(array('template' => 'flashbox','messages' => $V,'box_class' => 'message',)); ?>

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

function _templatee8b1d754cc68bed2ff6f71e880e535e6($M= array()) {
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

function _template9df91a47958c63ef52bc0d6dd17668ad($X= array()) {
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

function __slotHandlerd3895430478a712f84b07309f35fdffc($BL= array()) {
if($BL) extract($BL); ?>


<h1>Category admin</h1>

<a href='<?php $BN = array();
$BM = lmbArrayHelper :: explode(',',':', 'action:create,id:1');
foreach($BM as $key => $value) $BN[trim($key)] = trim($value);
$BO = false;
echo lmbToolkit :: instance()->getRoutesUrl($BN, '', $BO);
 ?>'>Добавить Новую категорию (в корень)</a>
<?php $this->_render_treed3b7b8b6c50b6d2a1e91bc2075552c3f($this->Tree, 0,array('kids_prop' => 'childs','prefix' => '1',));
 ?>

<?php 
}

function _render_treed3b7b8b6c50b6d2a1e91bc2075552c3f($BV,$level,$BX= array()) {
if($BX) extract($BX);$BW=0;
foreach($BV as $item) {
$counter = $BW+1;
if(!$BW) {
 ?>

<ul>
    <?php }
 ?>

    <li class="category_level<?php $BY='';
$BZ = $item;
if((is_array($BZ) || ($BZ instanceof ArrayAccess)) && isset($BZ['level'])) { $BY = $BZ['level'];
}else{ $BY = '';}
echo htmlspecialchars($BY,3); ?>">
        <?php $CA='';
$CB = $item;
if((is_array($CB) || ($CB instanceof ArrayAccess)) && isset($CB['identifier'])) { $CA = $CB['identifier'];
}else{ $CA = '';}
echo htmlspecialchars($CA,3); ?>

        <?php $new_prefix = $prefix . "." . $counter; ?><?php if(isset($item["childs"])) {$this->_render_treed3b7b8b6c50b6d2a1e91bc2075552c3f($item["childs"], $level + 1, array('prefix' => $new_prefix,));
} ?>


        <a href='<?php $CE='';
$CF = $item;
if((is_array($CF) || ($CF instanceof ArrayAccess)) && isset($CF['id'])) { $CE = $CF['id'];
}else{ $CE = '';}
$CH = array();
$CG = lmbArrayHelper :: explode(',',':', sprintf('action:create,id:%s',$CE));
foreach($CG as $key => $value) $CH[trim($key)] = trim($value);
$CI = false;
echo lmbToolkit :: instance()->getRoutesUrl($CH, '', $CI);
 ?>'>Add to</a>
        <a href='<?php $CJ='';
$CK = $item;
if((is_array($CK) || ($CK instanceof ArrayAccess)) && isset($CK['id'])) { $CJ = $CK['id'];
}else{ $CJ = '';}
$CM = array();
$CL = lmbArrayHelper :: explode(',',':', sprintf('action:delete,id:%s',$CJ));
foreach($CL as $key => $value) $CM[trim($key)] = trim($value);
$CN = false;
echo lmbToolkit :: instance()->getRoutesUrl($CM, '', $CN);
 ?>'>Delete</a>
        <a href='<?php $CO='';
$CP = $item;
if((is_array($CP) || ($CP instanceof ArrayAccess)) && isset($CP['id'])) { $CO = $CP['id'];
}else{ $CO = '';}
$CR = array();
$CQ = lmbArrayHelper :: explode(',',':', sprintf('action:create_property,id:%s',$CO));
foreach($CQ as $key => $value) $CR[trim($key)] = trim($value);
$CS = false;
echo lmbToolkit :: instance()->getRoutesUrl($CR, '', $CS);
 ?>'>Add Property</a>

    </li>
    <?php $BW++;
}
if(count($BV) == 0) { ?>

    Категории отсуствуют
    <?php }if($BW) {
 ?>


    
</ul>
<?php }

}

function __slotHandler0c91bdd41f93910d5c4cbdfaea58b929($DT= array()) {
if($DT) extract($DT);
}

function __slotHandler5dbac903d787c1a5a5512c1104491399($EQ= array()) {
if($EQ) extract($EQ);
}

function __slotHandler071acb791f0388f127953298e562bad5($ER= array()) {
if($ER) extract($ER);
}

function __slotHandlerb323fb44e249fff544b1df6ce96bbbdd($ES= array()) {
if($ES) extract($ES);
}

}
}
$macro_executor_class='MacroTemplateExecutord8ef72e1f28fb064d84a2f934881a31f';