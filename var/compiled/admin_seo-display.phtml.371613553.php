<?php /* This file is generated from /usr/share/nginx/www/eastwood/lib//limb/cms/template/admin_seo/display.phtml*/?><?php
if(!class_exists('MacroTemplateExecutor76ad30249e4e0a9793d2b201aa8de9c6', false)){
require_once('limb/macro/src/compiler/lmbMacroTemplateExecutor.class.php');
require_once('limb/core/src/lmbArrayHelper.class.php');
require_once('limb/macro/src/filters/lmbMacroDefaultFilter.inc.php');
class MacroTemplateExecutor76ad30249e4e0a9793d2b201aa8de9c6 extends lmbMacroTemplateExecutor {
function render($args = array()) {
if($args) extract($args);
$this->_init();
$this->__staticInclude1('admin_page_layout.phtml', 'admin_page_layout.phtml'); ?>


<?php 
}

function __staticInclude1($file,$file) {
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
  <?php if(isset($this->__slot_handlers_header_zone)) {foreach($this->__slot_handlers_header_zone as $__slot_handler_header_zone) {call_user_func_array($__slot_handler_header_zone, array(array()));}}$this->__slotHandlerc36bd8933198e2fddb6627f159c0d3ce(array()); ?>

  <style type="text/css">
    <?php if(isset($this->__slot_handlers_css_zone)) {foreach($this->__slot_handlers_css_zone as $__slot_handler_css_zone) {call_user_func_array($__slot_handler_css_zone, array(array()));}}$this->__slotHandlerd8d0a87ab2c3b92a0b23306b1b59078d(array()); ?>

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
        <?php if(isset($this->__slot_handlers_content_zone)) {foreach($this->__slot_handlers_content_zone as $__slot_handler_content_zone) {call_user_func_array($__slot_handler_content_zone, array(array()));}}$this->__slotHandler3993846b71ec6772b52452c223e826f8(array()); ?>

      </div>
    </div>

    <div id='sidebar'>
      <?php
        lmb_require('limb/cms/src/fetcher/lmbCmsAdminNavigationFetcher.class.php');
        $this->navigation=new lmbCmsAdminNavigationFetcher();
        $this->navigation=$this->navigation->fetch();
      ?>
      <dl id='main_menu'>
      <?php $DP = 0;$DR = $this->navigation;

if(!is_array($DR) && !($DR instanceof Iterator) && !($DR instanceof IteratorAggregate)) {
$DR = array();}
$DQ = $DR;
foreach($DQ as $item) {if($DP == 0) { ?>

        <?php } ?>

        <dt class='<?php $DT='';
$DU = $item;
if((is_array($DU) || ($DU instanceof ArrayAccess)) && isset($DU['id'])) { $DT = $DU['id'];
}else{ $DT = '';}
echo htmlspecialchars($DT,3); ?>'><img src='<?php $DV='';
$DW = $item;
if((is_array($DW) || ($DW instanceof ArrayAccess)) && isset($DW['icon'])) { $DV = $DW['icon'];
}else{ $DV = '';}
echo htmlspecialchars($DV,3); ?>'/> <?php $DX='';
$DY = $item;
if((is_array($DY) || ($DY instanceof ArrayAccess)) && isset($DY['title'])) { $DX = $DY['title'];
}else{ $DX = '';}
echo htmlspecialchars($DX,3); ?> </dt>
        <dd>
          <?php $DZ='';
$EA = $item;
if((is_array($EA) || ($EA instanceof ArrayAccess)) && isset($EA['children'])) { $DZ = $EA['children'];
}else{ $DZ = '';}
$ED = 0;$EF = $DZ;

if(!is_array($EF) && !($EF instanceof Iterator) && !($EF instanceof IteratorAggregate)) {
$EF = array();}
$EE = $EF;
foreach($EE as $sub_item) {if($ED == 0) { ?>

            <ul>
              <?php } ?>

              <li>
                <img src='<?php $EH='';
$EI = $sub_item;
if((is_array($EI) || ($EI instanceof ArrayAccess)) && isset($EI['icon'])) { $EH = $EI['icon'];
}else{ $EH = '';}
echo htmlspecialchars($EH,3); ?>'/> <a href='<?php $EJ='';
$EK = $sub_item;
if((is_array($EK) || ($EK instanceof ArrayAccess)) && isset($EK['url'])) { $EJ = $EK['url'];
}else{ $EJ = '';}
echo htmlspecialchars($EJ,3); ?>'><?php $EL='';
$EM = $sub_item;
if((is_array($EM) || ($EM instanceof ArrayAccess)) && isset($EM['title'])) { $EL = $EM['title'];
}else{ $EL = '';}
echo htmlspecialchars($EL,3); ?></a>
              </li><?php $ED++;}if($ED > 0) { ?>

            </ul>
          <?php } ?>

        </dd>
        <?php $DP++;}if($DP > 0) { ?>

      <?php } ?>

      </dl>
      <?php if(isset($this->__slot_handlers_context_help)) {foreach($this->__slot_handlers_context_help as $__slot_handler_context_help) {call_user_func_array($__slot_handler_context_help, array(array()));}}$this->__slotHandlerfc19a9cb03aef73ebdaa8619ae47d419(array()); ?>

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
  <?php if(isset($this->__slot_handlers_js_include)) {foreach($this->__slot_handlers_js_include as $__slot_handler_js_include) {call_user_func_array($__slot_handler_js_include, array(array()));}}$this->__slotHandler14cca860d7d0eed2714e4820a33335e8(array()); ?>


  <script type="text/javascript">
    <?php if(isset($this->__slot_handlers_js)) {foreach($this->__slot_handlers_js as $__slot_handler_js) {call_user_func_array($__slot_handler_js, array(array()));}}$this->__slotHandler310679ee635f35db6631e61d88eb1d4b(array()); ?>


    jQuery(window).ready(function()
    {
      <?php if(isset($this->__slot_handlers_js_ready)) {foreach($this->__slot_handlers_js_ready as $__slot_handler_js_ready) {call_user_func_array($__slot_handler_js_ready, array(array()));}}$this->__slotHandler713b80ef37e998b89eeaf5ceaeca4f9a(array()); ?>


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



  <?php $this->__staticInclude4('_admin/selectors.phtml'); ?>

  <?php $this->__staticInclude5('_admin_object/actions.phtml'); ?>


  

  

<?php 
}

function __slotHandlerc36bd8933198e2fddb6627f159c0d3ce($I= array()) {
if($I) extract($I);
}

function __slotHandlerd8d0a87ab2c3b92a0b23306b1b59078d($J= array()) {
if($J) extract($J); ?>

    dl.cms_meta dt {font-size:0.9em;font-weight: bold;}
    dl.cms_meta dd {font-size: 0.8em;margin:0 0 3px;}
  <?php 
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
$this->_template7985089e492f25455480b6cc4c535e09(array('template' => 'flashbox','messages' => $K,'box_class' => 'error',)); ?>

        <?php $V='';
$W = $flashbox;
$V = $W->getMessages();
$this->_templatea204f83f9ae6e804bd72489c03f8caa5(array('template' => 'flashbox','messages' => $V,'box_class' => 'message',)); ?>

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

function _template7985089e492f25455480b6cc4c535e09($M= array()) {
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

function _templatea204f83f9ae6e804bd72489c03f8caa5($X= array()) {
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

function __slotHandler3993846b71ec6772b52452c223e826f8($BL= array()) {
if($BL) extract($BL); ?>

    <div id="header">
      <h1>Мета-данные (SEO)</h1>

      <div class="header_actions">
        <a href='<?php $BN = array();
$BM = lmbArrayHelper :: explode(',',':', 'controller:admin_seo,action:create');
foreach($BM as $key => $value) $BN[trim($key)] = trim($value);
$BO = false;
echo lmbToolkit :: instance()->getRoutesUrl($BN, '', $BO);
 ?>' title="Добавить элемент" class='thickbox'><img src='/shared/cms/images/icons/page_white_add.png'/> Добавить элемент</a>
      </div>
    </div>

    <div id="body">
      <?php  $this->items->sort(array('url' => 'asc')); ?>
      <?php $BT = 0;$BV = $this->items;

if(!is_array($BV) && !($BV instanceof Iterator) && !($BV instanceof IteratorAggregate)) {
$BV = array();}
$BU = $BV;
foreach($BU as $item) {$parity = (( ($BT + 1) % 2) ? "odd" : "even");if($BT == 0) { ?>

      <?php $this->__staticInclude3('_admin_object/actions.phtml'); ?>

      <div class="list">
        <table>
          <tr>
            <th>#ID</th>
            <th width='20%'>URL</th>
            <th width='20%'>Title</th>
            <th width='60%'>Metadata</th>
            <th>Действия</th>
            </tr>
            <?php } ?>

            <tr class='<?php echo htmlspecialchars($parity,3); ?>'>
              <td>#<?php $BZ='';
$CA = $item;
if((is_array($CA) || ($CA instanceof ArrayAccess)) && isset($CA['id'])) { $BZ = $CA['id'];
}else{ $BZ = '';}
echo htmlspecialchars($BZ,3); ?></td>
              <td><a href="<?php $CB='';
$CC = $item;
if((is_array($CC) || ($CC instanceof ArrayAccess)) && isset($CC['url'])) { $CB = $CC['url'];
}else{ $CB = '';}
echo htmlspecialchars($CB,3); ?>" style="font-weight: bold;"><?php $CD='';
$CE = $item;
if((is_array($CE) || ($CE instanceof ArrayAccess)) && isset($CE['url'])) { $CD = $CE['url'];
}else{ $CD = '';}
echo htmlspecialchars($CD,3); ?></a></td>
              <td><?php $CF='';
$CG = $item;
if((is_array($CG) || ($CG instanceof ArrayAccess)) && isset($CG['title'])) { $CF = $CG['title'];
}else{ $CF = '';}
echo htmlspecialchars($CF,3); ?></td>
              <td>
                <dl class="cms_meta">
                  <dt>Keywords</dt><dd><?php $CH='';
$CI = $item;
if((is_array($CI) || ($CI instanceof ArrayAccess)) && isset($CI['keywords'])) { $CH = $CI['keywords'];
}else{ $CH = '';}
echo htmlspecialchars($CH,3); ?></dd>
                  <dt>Description</dt><dd><?php $CJ='';
$CK = $item;
if((is_array($CK) || ($CK instanceof ArrayAccess)) && isset($CK['description'])) { $CJ = $CK['description'];
}else{ $CJ = '';}
echo htmlspecialchars($CJ,3); ?></dd>
                </dl>
              </td>
              <td class='actions'>
                <?php $this->_template4ef9c27918d40b75062268b7852ec509(array('template' => 'object_action_edit','controller' => 'admin_seo','item' => $item,'icon' => 'page_white_edit',)); ?>

                <?php $this->_template12cd4de8c0deb2cb5b7eeff4db1b4d68(array('template' => 'object_action_delete','controller' => 'admin_seo','item' => $item,'icon' => 'page_white_delete',)); ?>

              </td>
            </tr>
            <?php $BT++;}if($BT > 0) { ?>

            
          </table>
        </div>
      <?php }if($BT == 0) { ?>

              <div class="empty_list">Записи отсутствуют</div>
            <?php } ?>

    </div>
  <?php 
}

function __staticInclude3($file) {
 ?>








<?php 
}

function _template4ef9c27918d40b75062268b7852ec509($CN= array()) {
if($CN) extract($CN); ?>

  <?php 
    $controller = isset($controller) ? $controller : lmbToolkit::instance()->getDispatchedController()->getName();
    $is_link = isset($is_link) ? $is_link : false;
    $title = isset($title) ? $title : 'Редактировать';
    $icon = isset($icon) ? $icon : "pencil";
  ?>
  <a href='<?php $CQ='';
$CR = $item;
if((is_array($CR) || ($CR instanceof ArrayAccess)) && isset($CR['id'])) { $CQ = $CR['id'];
}else{ $CQ = '';}
$CT = array();
$CS = lmbArrayHelper :: explode(',',':', sprintf('controller:%s,action:edit,id:%s',$controller,$CQ));
foreach($CS as $key => $value) $CT[trim($key)] = trim($value);
$CU = false;
echo lmbToolkit :: instance()->getRoutesUrl($CT, '', $CU);
 ?>' title="<?php echo lmb_macro_apply_default(isset($title) ? $title : null,'Редактировать'); ?>" class="thickbox"><img src='/shared/cms/images/icons/<?php echo lmb_macro_apply_default(isset($icon) ? $icon : null,"pencil"); ?>.png'/> <?php  if($is_link) echo $title; ?></a>
<?php 
}

function _template12cd4de8c0deb2cb5b7eeff4db1b4d68($DB= array()) {
if($DB) extract($DB); ?>

  <?php 
    $controller = isset($controller) ? $controller : lmbToolkit::instance()->getDispatchedController()->getName();
    $is_link = isset($is_link) ? $is_link : false;
    $title = isset($title) ? $title : 'Удалить';
    $icon = isset($icon) ? $icon : "delete";
  ?>
  <a href='#' onclick="if(confirm('Вы действительно желаете удалить выбранный объект?')) {jQuery.post('<?php $DF = array();
$DE = lmbArrayHelper :: explode(',',':', sprintf('controller:%s,action:delete',$controller));
foreach($DE as $key => $value) $DF[trim($key)] = trim($value);
$DG = false;
echo lmbToolkit :: instance()->getRoutesUrl($DF, '', $DG);
 ?>', {ids:<?php $DH='';
$DI = $item;
if((is_array($DI) || ($DI instanceof ArrayAccess)) && isset($DI['id'])) { $DH = $DI['id'];
}else{ $DH = '';}
echo htmlspecialchars($DH,3); ?>}, function(){document.location.reload()})}"  title="<?php echo lmb_macro_apply_default(isset($title) ? $title : null,'Удалить'); ?>"><img src='/shared/cms/images/icons/<?php echo lmb_macro_apply_default(isset($icon) ? $icon : null,"delete"); ?>.png'/> <?php  if($is_link) echo $title; ?></a>
<?php 
}

function __slotHandlerfc19a9cb03aef73ebdaa8619ae47d419($EN= array()) {
if($EN) extract($EN);
}

function __slotHandler14cca860d7d0eed2714e4820a33335e8($FK= array()) {
if($FK) extract($FK);
}

function __slotHandler310679ee635f35db6631e61d88eb1d4b($FL= array()) {
if($FL) extract($FL); ?>

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

function __slotHandler713b80ef37e998b89eeaf5ceaeca4f9a($FM= array()) {
if($FM) extract($FM);
}

function __staticInclude4($file) {
 ?>











<?php 
}

function __staticInclude5($file) {
 ?>








<?php 
}

}
}
$macro_executor_class='MacroTemplateExecutor76ad30249e4e0a9793d2b201aa8de9c6';