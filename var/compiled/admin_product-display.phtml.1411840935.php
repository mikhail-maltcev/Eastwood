<?php /* This file is generated from /usr/share/nginx/www/eastwood/template/admin_product/display.phtml*/?><?php
if(!class_exists('MacroTemplateExecutor5725743ddd1c6ad60390b3f60f0c5fc8', false)){
require_once('limb/macro/src/compiler/lmbMacroTemplateExecutor.class.php');
require_once('limb/core/src/lmbArrayHelper.class.php');
class MacroTemplateExecutor5725743ddd1c6ad60390b3f60f0c5fc8 extends lmbMacroTemplateExecutor {
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
  <?php if(isset($this->__slot_handlers_header_zone)) {foreach($this->__slot_handlers_header_zone as $__slot_handler_header_zone) {call_user_func_array($__slot_handler_header_zone, array(array()));}}$this->__slotHandler090b258d1a49a01b5c8820defa7c41a5(array()); ?>

  <style type="text/css">
    <?php if(isset($this->__slot_handlers_css_zone)) {foreach($this->__slot_handlers_css_zone as $__slot_handler_css_zone) {call_user_func_array($__slot_handler_css_zone, array(array()));}}$this->__slotHandler4e7147539a2072853ba1f86c38636f6d(array()); ?>

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
        <?php if(isset($this->__slot_handlers_content_zone)) {foreach($this->__slot_handlers_content_zone as $__slot_handler_content_zone) {call_user_func_array($__slot_handler_content_zone, array(array()));}}$this->__slotHandlerf4f70722599397eb1cb549c7650914fe(array()); ?>

      </div>
    </div>

    <div id='sidebar'>
      <?php
        lmb_require('limb/cms/src/fetcher/lmbCmsAdminNavigationFetcher.class.php');
        $this->navigation=new lmbCmsAdminNavigationFetcher();
        $this->navigation=$this->navigation->fetch();
      ?>
      <dl id='main_menu'>
      <?php $CE = 0;$CG = $this->navigation;

if(!is_array($CG) && !($CG instanceof Iterator) && !($CG instanceof IteratorAggregate)) {
$CG = array();}
$CF = $CG;
foreach($CF as $item) {if($CE == 0) { ?>

        <?php } ?>

        <dt class='<?php $CI='';
$CJ = $item;
if((is_array($CJ) || ($CJ instanceof ArrayAccess)) && isset($CJ['id'])) { $CI = $CJ['id'];
}else{ $CI = '';}
echo htmlspecialchars($CI,3); ?>'><img src='<?php $CK='';
$CL = $item;
if((is_array($CL) || ($CL instanceof ArrayAccess)) && isset($CL['icon'])) { $CK = $CL['icon'];
}else{ $CK = '';}
echo htmlspecialchars($CK,3); ?>'/> <?php $CM='';
$CN = $item;
if((is_array($CN) || ($CN instanceof ArrayAccess)) && isset($CN['title'])) { $CM = $CN['title'];
}else{ $CM = '';}
echo htmlspecialchars($CM,3); ?> </dt>
        <dd>
          <?php $CO='';
$CP = $item;
if((is_array($CP) || ($CP instanceof ArrayAccess)) && isset($CP['children'])) { $CO = $CP['children'];
}else{ $CO = '';}
$CS = 0;$CU = $CO;

if(!is_array($CU) && !($CU instanceof Iterator) && !($CU instanceof IteratorAggregate)) {
$CU = array();}
$CT = $CU;
foreach($CT as $sub_item) {if($CS == 0) { ?>

            <ul>
              <?php } ?>

              <li>
                <img src='<?php $CW='';
$CX = $sub_item;
if((is_array($CX) || ($CX instanceof ArrayAccess)) && isset($CX['icon'])) { $CW = $CX['icon'];
}else{ $CW = '';}
echo htmlspecialchars($CW,3); ?>'/> <a href='<?php $CY='';
$CZ = $sub_item;
if((is_array($CZ) || ($CZ instanceof ArrayAccess)) && isset($CZ['url'])) { $CY = $CZ['url'];
}else{ $CY = '';}
echo htmlspecialchars($CY,3); ?>'><?php $DA='';
$DB = $sub_item;
if((is_array($DB) || ($DB instanceof ArrayAccess)) && isset($DB['title'])) { $DA = $DB['title'];
}else{ $DA = '';}
echo htmlspecialchars($DA,3); ?></a>
              </li><?php $CS++;}if($CS > 0) { ?>

            </ul>
          <?php } ?>

        </dd>
        <?php $CE++;}if($CE > 0) { ?>

      <?php } ?>

      </dl>
      <?php if(isset($this->__slot_handlers_context_help)) {foreach($this->__slot_handlers_context_help as $__slot_handler_context_help) {call_user_func_array($__slot_handler_context_help, array(array()));}}$this->__slotHandlerf975323142395ef3f4400bb5a9dd319a(array()); ?>

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
  <?php if(isset($this->__slot_handlers_js_include)) {foreach($this->__slot_handlers_js_include as $__slot_handler_js_include) {call_user_func_array($__slot_handler_js_include, array(array()));}}$this->__slotHandlerebfc5e13dfe8b5dc47f3da76b044f89e(array()); ?>


  <script type="text/javascript">
    <?php if(isset($this->__slot_handlers_js)) {foreach($this->__slot_handlers_js as $__slot_handler_js) {call_user_func_array($__slot_handler_js, array(array()));}}$this->__slotHandlerffd3510e50c36e35c1431c588733aa04(array()); ?>


    jQuery(window).ready(function()
    {
      <?php if(isset($this->__slot_handlers_js_ready)) {foreach($this->__slot_handlers_js_ready as $__slot_handler_js_ready) {call_user_func_array($__slot_handler_js_ready, array(array()));}}$this->__slotHandlerc5ffdfee6b6f200aeb8a58289b18deec(array()); ?>


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

function __slotHandler090b258d1a49a01b5c8820defa7c41a5($I= array()) {
if($I) extract($I);
}

function __slotHandler4e7147539a2072853ba1f86c38636f6d($J= array()) {
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
$this->_template738b7cfb93224b79a0911cc376220699(array('template' => 'flashbox','messages' => $K,'box_class' => 'error',)); ?>

        <?php $V='';
$W = $flashbox;
$V = $W->getMessages();
$this->_templatec8416d18e633ab382443d957933dab2d(array('template' => 'flashbox','messages' => $V,'box_class' => 'message',)); ?>

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

function _template738b7cfb93224b79a0911cc376220699($M= array()) {
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

function _templatec8416d18e633ab382443d957933dab2d($X= array()) {
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

function __slotHandlerf4f70722599397eb1cb549c7650914fe($BL= array()) {
if($BL) extract($BL); ?>


  <?php $this->__staticInclude3('_admin/selectors.phtml'); ?>

  <?php $this->__staticInclude4('_admin_object/actions.phtml'); ?>


  <div id="header">
    <h1>Product</h1>
  </div>

  <div id="body">
      <h1>Select category</h1>

      <?php $this->_render_tree8590596c3153e7e0c38b27cbbf585e6b($this->Tree, 0,array('kids_prop' => 'childs','prefix' => '1',));
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

function _render_tree8590596c3153e7e0c38b27cbbf585e6b($BS,$level,$BU= array()) {
if($BU) extract($BU);$BT=0;
foreach($BS as $item) {
$counter = $BT+1;
if(!$BT) {
 ?>

      <ul>
          <?php }
 ?>

          <li>
              <?php $BV='';
$BW = $item;
if((is_array($BW) || ($BW instanceof ArrayAccess)) && isset($BW['identifier'])) { $BV = $BW['identifier'];
}else{ $BV = '';}
echo htmlspecialchars($BV,3); ?>

              <a href='<?php $BX='';
$BY = $item;
if((is_array($BY) || ($BY instanceof ArrayAccess)) && isset($BY['id'])) { $BX = $BY['id'];
}else{ $BX = '';}
$CA = array();
$BZ = lmbArrayHelper :: explode(',',':', sprintf('action:create_to,id:%s',$BX));
foreach($BZ as $key => $value) $CA[trim($key)] = trim($value);
$CB = false;
echo lmbToolkit :: instance()->getRoutesUrl($CA, '', $CB);
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

function __slotHandlerf975323142395ef3f4400bb5a9dd319a($DC= array()) {
if($DC) extract($DC);
}

function __slotHandlerebfc5e13dfe8b5dc47f3da76b044f89e($DZ= array()) {
if($DZ) extract($DZ);
}

function __slotHandlerffd3510e50c36e35c1431c588733aa04($EA= array()) {
if($EA) extract($EA); ?>

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

function __slotHandlerc5ffdfee6b6f200aeb8a58289b18deec($EB= array()) {
if($EB) extract($EB);
}

}
}
$macro_executor_class='MacroTemplateExecutor5725743ddd1c6ad60390b3f60f0c5fc8';