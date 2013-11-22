<?php /* This file is generated from /usr/share/nginx/www/eastwood/lib//limb/cms/template/admin_document/display.phtml*/?><?php
if(!class_exists('MacroTemplateExecutor7cce5b731d5192455d171d3fccbfdeac', false)){
require_once('limb/macro/src/compiler/lmbMacroTemplateExecutor.class.php');
require_once('limb/macro/src/filters/lmbMacroDefaultFilter.inc.php');
require_once('limb/core/src/lmbArrayHelper.class.php');
require_once('limb/macro/src/tags/pager/lmbMacroPagerHelper.class.php');
require_once('limb/macro/src/tags/form/lmbMacroInputWidget.class.php');
require_once('limb/i18n/src/macro/filters.inc.php');
class MacroTemplateExecutor7cce5b731d5192455d171d3fccbfdeac extends lmbMacroTemplateExecutor {

function _init() {
$this->pager_pager = new lmbMacroPagerHelper('pager');
$this->input_id001 = new lmbMacroInputWidget('id001');
$this->input_id001->setAttributes(array (
  'type' => 'text',
  'class' => 'priority',
  'title' => 'Priority',
  'size' => '3',
  'runtime_id' => 'id001',
));

}
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
  <?php if(isset($this->__slot_handlers_header_zone)) {foreach($this->__slot_handlers_header_zone as $__slot_handler_header_zone) {call_user_func_array($__slot_handler_header_zone, array(array()));}}$this->__slotHandlerc4f127853dfbf822fddf8564bd9e57ce(array()); ?>

  <style type="text/css">
    <?php if(isset($this->__slot_handlers_css_zone)) {foreach($this->__slot_handlers_css_zone as $__slot_handler_css_zone) {call_user_func_array($__slot_handler_css_zone, array(array()));}}$this->__slotHandler9158be469740d066025ae691963921f7(array()); ?>

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
        <?php if(isset($this->__slot_handlers_content_zone)) {foreach($this->__slot_handlers_content_zone as $__slot_handler_content_zone) {call_user_func_array($__slot_handler_content_zone, array(array()));}}$this->__slotHandlerb0c4ffa22dc8f636a630289a2e65f6a0(array()); ?>

      </div>
    </div>

    <div id='sidebar'>
      <?php
        lmb_require('limb/cms/src/fetcher/lmbCmsAdminNavigationFetcher.class.php');
        $this->navigation=new lmbCmsAdminNavigationFetcher();
        $this->navigation=$this->navigation->fetch();
      ?>
      <dl id='main_menu'>
      <?php $MU = 0;$MW = $this->navigation;

if(!is_array($MW) && !($MW instanceof Iterator) && !($MW instanceof IteratorAggregate)) {
$MW = array();}
$MV = $MW;
foreach($MV as $item) {if($MU == 0) { ?>

        <?php } ?>

        <dt class='<?php $MY='';
$MZ = $item;
if((is_array($MZ) || ($MZ instanceof ArrayAccess)) && isset($MZ['id'])) { $MY = $MZ['id'];
}else{ $MY = '';}
echo htmlspecialchars($MY,3); ?>'><img src='<?php $NA='';
$NB = $item;
if((is_array($NB) || ($NB instanceof ArrayAccess)) && isset($NB['icon'])) { $NA = $NB['icon'];
}else{ $NA = '';}
echo htmlspecialchars($NA,3); ?>'/> <?php $NC='';
$ND = $item;
if((is_array($ND) || ($ND instanceof ArrayAccess)) && isset($ND['title'])) { $NC = $ND['title'];
}else{ $NC = '';}
echo htmlspecialchars($NC,3); ?> </dt>
        <dd>
          <?php $NE='';
$NF = $item;
if((is_array($NF) || ($NF instanceof ArrayAccess)) && isset($NF['children'])) { $NE = $NF['children'];
}else{ $NE = '';}
$NI = 0;$NK = $NE;

if(!is_array($NK) && !($NK instanceof Iterator) && !($NK instanceof IteratorAggregate)) {
$NK = array();}
$NJ = $NK;
foreach($NJ as $sub_item) {if($NI == 0) { ?>

            <ul>
              <?php } ?>

              <li>
                <img src='<?php $NM='';
$NN = $sub_item;
if((is_array($NN) || ($NN instanceof ArrayAccess)) && isset($NN['icon'])) { $NM = $NN['icon'];
}else{ $NM = '';}
echo htmlspecialchars($NM,3); ?>'/> <a href='<?php $NO='';
$NP = $sub_item;
if((is_array($NP) || ($NP instanceof ArrayAccess)) && isset($NP['url'])) { $NO = $NP['url'];
}else{ $NO = '';}
echo htmlspecialchars($NO,3); ?>'><?php $NQ='';
$NR = $sub_item;
if((is_array($NR) || ($NR instanceof ArrayAccess)) && isset($NR['title'])) { $NQ = $NR['title'];
}else{ $NQ = '';}
echo htmlspecialchars($NQ,3); ?></a>
              </li><?php $NI++;}if($NI > 0) { ?>

            </ul>
          <?php } ?>

        </dd>
        <?php $MU++;}if($MU > 0) { ?>

      <?php } ?>

      </dl>
      <?php if(isset($this->__slot_handlers_context_help)) {foreach($this->__slot_handlers_context_help as $__slot_handler_context_help) {call_user_func_array($__slot_handler_context_help, array(array()));}}$this->__slotHandlerc795c3540740cfdca10ed8d44a56cf83(array()); ?>

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
  <?php if(isset($this->__slot_handlers_js_include)) {foreach($this->__slot_handlers_js_include as $__slot_handler_js_include) {call_user_func_array($__slot_handler_js_include, array(array()));}}$this->__slotHandler9ba5300be8c338871a28f9c317aaa95d(array()); ?>


  <script type="text/javascript">
    <?php if(isset($this->__slot_handlers_js)) {foreach($this->__slot_handlers_js as $__slot_handler_js) {call_user_func_array($__slot_handler_js, array(array()));}}$this->__slotHandler2ea22d59ce7b8aad48a659e6e7eb5507(array()); ?>


    jQuery(window).ready(function()
    {
      <?php if(isset($this->__slot_handlers_js_ready)) {foreach($this->__slot_handlers_js_ready as $__slot_handler_js_ready) {call_user_func_array($__slot_handler_js_ready, array(array()));}}$this->__slotHandlercb337337bf50717b25bfad70d6b0df0a(array()); ?>


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

function __slotHandlerc4f127853dfbf822fddf8564bd9e57ce($I= array()) {
if($I) extract($I);
}

function __slotHandler9158be469740d066025ae691963921f7($J= array()) {
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
$this->_templatef48895d8e95049aecc7f6172ac95df7a(array('template' => 'flashbox','messages' => $K,'box_class' => 'error',)); ?>

        <?php $V='';
$W = $flashbox;
$V = $W->getMessages();
$this->_template7d2d031354a3ff0cce5a537d00b9b2f5(array('template' => 'flashbox','messages' => $V,'box_class' => 'message',)); ?>

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

function _templatef48895d8e95049aecc7f6172ac95df7a($M= array()) {
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

function _template7d2d031354a3ff0cce5a537d00b9b2f5($X= array()) {
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

function __slotHandlerb0c4ffa22dc8f636a630289a2e65f6a0($BL= array()) {
if($BL) extract($BL); ?>


    <?php $this->__staticInclude3('_admin_object/actions.phtml'); ?>

    <?php $this->__staticInclude4('_widgets/cms_document_breadcrumbs.phtml', $this->item, '/admin_document/display/', 'id', '/admin_document/', 'Список документов'); ?>


    <div id="header">
      <h1>
        <?php  if(!$this->is_root) : ?>
          Страница &laquo;<a href="<?php $CI='';
$CJ = $this->item;
if((is_array($CJ) || ($CJ instanceof ArrayAccess)) && isset($CJ['uri'])) { $CI = $CJ['uri'];
}else{ $CI = '';}
echo htmlspecialchars($CI,3); ?>" title="Посмотреть на сайте" target="_blank"><?php $CK='';
$CL = $this->item;
if((is_array($CL) || ($CL instanceof ArrayAccess)) && isset($CL['title'])) { $CK = $CL['title'];
}else{ $CK = '';}
echo htmlspecialchars($CK,3); ?></a>&raquo;
        <?php  else : ?>
          Список документов
        <?php  endif; ?>
      </h1>

      <div class="header_actions">
        <?php  if(!$this->is_root) : ?>

          <?php $this->_template83de5ac5c1004dcab1a8beef9e4e30ca(array('template' => 'object_action','item' => $this->item,'action' => 'create','is_link' => 'true','title' => 'Добавить документ','icon' => 'page_add',)); ?>

          <?php $this->_template40b26514ba58567bbe6935742760d0fb(array('template' => 'object_action_edit','item' => $this->item,'icon' => 'page_edit','is_link' => 'true','title' => 'Редактировать',)); ?>


          <?php  if($this->item->getIsPublished()) : ?>
            <?php $this->_template600188e436db53e2542c3f4f3a72eb08(array('template' => 'object_action_unpublish','item' => $this->item,'icon' => 'lightbulb_off','is_link' => 'true','title' => 'Снять с публикации',)); ?>

          <?php   else:  ?>
            <?php $this->_templateab56daa9f9857b9c924988b95ee44210(array('template' => 'object_action_publish','item' => $this->item,'icon' => 'lightbulb','is_link' => 'true','title' => 'Опубликовать',)); ?>

          <?php  endif; ?>

          <?php $this->_templatefc0fb07b6c782fd0fb2f1359a4fc5080(array('template' => 'object_action_delete','item' => $this->item,'is_link' => 'true','title' => 'Удалить',)); ?>


        <?php   else:  ?>
          <?php $item = lmbCmsDocument :: findRoot(); ?>
          <?php $this->_template0772579bdb0e8919ae4aea2e8a30ef46(array('template' => 'object_action','item' => $item,'action' => 'create','title' => 'Создать документ','icon' => 'page_add','is_link' => 'true',)); ?>

        <?php  endif ?>

      </div>
    </div>

    <div id="body">
      <?php $this->__staticInclude5('_admin/pager.phtml', $this->items); ?>

      <?php $this->__staticInclude6('admin_document/include/items_list.phtml', $this->items); ?>

    </div>

  <?php 
}

function __staticInclude3($file) {
 ?>








<?php 
}

function __staticInclude4($file,$item,$base_path,$link_field,$root_path,$root_title) {
 ?><?php
  if($item->isRoot() && (!isset($display_root) || $display_root == false))
    return;

  $chain = array();
  while($parent = $item->getParent())
  {
    if($parent->isRoot())
      break;

    $chain[] = $item = $parent;
  }

  if(isset($root_path))
    $chain[] = array('root_path' => $root_path,
                     'root_title' => (isset($root_title) ? $root_title : 'Главная страница'));

  $chain = array_reverse($chain);

?>
<?php $BS = 0;$BU = $chain;

if(!is_array($BU) && !($BU instanceof Iterator) && !($BU instanceof IteratorAggregate)) {
$BU = array();}
$BT = $BU;
foreach($BT as $item) {$counter = $BS+1;if($BS == 0) { ?>

  <div class="breadcrumbs">
    <?php } ?>

      <?php  if(isset($root_path) && ($counter == 1)){ ?>
        <a href='<?php echo htmlspecialchars($item["root_path"],3); ?>'><b><?php echo htmlspecialchars($item["root_title"],3); ?></b></a>&nbsp;&raquo;
      <?php  }else{ ?>
        <a href='<?php echo lmb_macro_apply_default(isset($base_path) ? $base_path : null,"");echo htmlspecialchars($item[$link_field],3); ?>'><b><?php $CE='';
$CF = $item;
if((is_array($CF) || ($CF instanceof ArrayAccess)) && isset($CF['title'])) { $CE = $CF['title'];
}else{ $CE = '';}
echo htmlspecialchars($CE,3); ?></b></a>&nbsp;&raquo;
      <?php  } ?>
    <?php $BS++;}if($BS > 0) { ?>

    <?php $CG='';
$CH = $this->item;
if((is_array($CH) || ($CH instanceof ArrayAccess)) && isset($CH['title'])) { $CG = $CH['title'];
}else{ $CG = '';}
echo htmlspecialchars($CG,3); ?>

  </div>
<?php } ?>

<?php 
}

function _template83de5ac5c1004dcab1a8beef9e4e30ca($CO= array()) {
if($CO) extract($CO); ?>

  <?php 
    $controller = isset($controller) ? $controller : lmbToolkit::instance()->getDispatchedController()->getName();
    $item = isset($item) ? $item : false;
    $is_link = isset($is_link) ? $is_link : false;
    $icon = isset($icon) ? $icon : "add";
  ?>
  <a href='<?php $CT='';
$CU = $item;
if((is_array($CU) || ($CU instanceof ArrayAccess)) && isset($CU['id'])) { $CT = $CU['id'];
}else{ $CT = '';}
$CW = array();
$CV = lmbArrayHelper :: explode(',',':', sprintf('controller:%s,action:%s,id:%s',$controller,$action,$CT));
foreach($CV as $key => $value) $CW[trim($key)] = trim($value);
$CX = false;
echo lmbToolkit :: instance()->getRoutesUrl($CW, '', $CX);
 ?>' title="<?php echo htmlspecialchars($title,3); ?>" class="thickbox"><img src='/shared/cms/images/icons/<?php echo lmb_macro_apply_default(isset($icon) ? $icon : null,"add"); ?>.png'/> <?php  if($is_link) echo $title; ?></a>
<?php 
}

function _template40b26514ba58567bbe6935742760d0fb($DE= array()) {
if($DE) extract($DE); ?>

  <?php 
    $controller = isset($controller) ? $controller : lmbToolkit::instance()->getDispatchedController()->getName();
    $is_link = isset($is_link) ? $is_link : false;
    $title = isset($title) ? $title : 'Редактировать';
    $icon = isset($icon) ? $icon : "pencil";
  ?>
  <a href='<?php $DH='';
$DI = $item;
if((is_array($DI) || ($DI instanceof ArrayAccess)) && isset($DI['id'])) { $DH = $DI['id'];
}else{ $DH = '';}
$DK = array();
$DJ = lmbArrayHelper :: explode(',',':', sprintf('controller:%s,action:edit,id:%s',$controller,$DH));
foreach($DJ as $key => $value) $DK[trim($key)] = trim($value);
$DL = false;
echo lmbToolkit :: instance()->getRoutesUrl($DK, '', $DL);
 ?>' title="<?php echo lmb_macro_apply_default(isset($title) ? $title : null,'Редактировать'); ?>" class="thickbox"><img src='/shared/cms/images/icons/<?php echo lmb_macro_apply_default(isset($icon) ? $icon : null,"pencil"); ?>.png'/> <?php  if($is_link) echo $title; ?></a>
<?php 
}

function _template600188e436db53e2542c3f4f3a72eb08($DS= array()) {
if($DS) extract($DS); ?>

  <?php 
    $controller = isset($controller) ? $controller : lmbToolkit::instance()->getDispatchedController()->getName();
    $is_link = isset($is_link) ? $is_link : false;
    $title = isset($title) ? $title : 'Скрыть';
    $icon = isset($icon) ? $icon : "lightbulb_off";
  ?>

  <a href='<?php $DV='';
$DW = $item;
if((is_array($DW) || ($DW instanceof ArrayAccess)) && isset($DW['id'])) { $DV = $DW['id'];
}else{ $DV = '';}
$DY = array();
$DX = lmbArrayHelper :: explode(',',':', sprintf('controller:%s,action:unpublish,id:%s',$controller,$DV));
foreach($DX as $key => $value) $DY[trim($key)] = trim($value);
$DZ = false;
echo lmbToolkit :: instance()->getRoutesUrl($DY, '', $DZ);
 ?>' title="<?php echo lmb_macro_apply_default(isset($title) ? $title : null,'Скрыть'); ?>" class="unpublish thickbox"><img src='/shared/cms/images/icons/<?php echo lmb_macro_apply_default(isset($icon) ? $icon : null,"lightbulb_off"); ?>.png'/> <?php  if($is_link) echo $title; ?></a>
<?php 
}

function _templateab56daa9f9857b9c924988b95ee44210($EG= array()) {
if($EG) extract($EG); ?>

  <?php 
    $controller = isset($controller) ? $controller : lmbToolkit::instance()->getDispatchedController()->getName();
    $is_link = isset($is_link) ? $is_link : false;
    $title = isset($title) ? $title : 'Показать';
    $icon = isset($icon) ? $icon : "lightbulb";
  ?>
  <a href='<?php $EJ='';
$EK = $item;
if((is_array($EK) || ($EK instanceof ArrayAccess)) && isset($EK['id'])) { $EJ = $EK['id'];
}else{ $EJ = '';}
$EM = array();
$EL = lmbArrayHelper :: explode(',',':', sprintf('controller:%s,action:publish,id:%s',$controller,$EJ));
foreach($EL as $key => $value) $EM[trim($key)] = trim($value);
$EN = false;
echo lmbToolkit :: instance()->getRoutesUrl($EM, '', $EN);
 ?>' title="<?php echo lmb_macro_apply_default(isset($title) ? $title : null,'Показать'); ?>" class="publish thickbox"><img src='/shared/cms/images/icons/<?php echo lmb_macro_apply_default(isset($icon) ? $icon : null,"lightbulb"); ?>.png'/> <?php  if($is_link) echo $title; ?></a>
<?php 
}

function _templatefc0fb07b6c782fd0fb2f1359a4fc5080($EU= array()) {
if($EU) extract($EU); ?>

  <?php 
    $controller = isset($controller) ? $controller : lmbToolkit::instance()->getDispatchedController()->getName();
    $is_link = isset($is_link) ? $is_link : false;
    $title = isset($title) ? $title : 'Удалить';
    $icon = isset($icon) ? $icon : "delete";
  ?>
  <a href='#' onclick="if(confirm('Вы действительно желаете удалить выбранный объект?')) {jQuery.post('<?php $EY = array();
$EX = lmbArrayHelper :: explode(',',':', sprintf('controller:%s,action:delete',$controller));
foreach($EX as $key => $value) $EY[trim($key)] = trim($value);
$EZ = false;
echo lmbToolkit :: instance()->getRoutesUrl($EY, '', $EZ);
 ?>', {ids:<?php $FA='';
$FB = $item;
if((is_array($FB) || ($FB instanceof ArrayAccess)) && isset($FB['id'])) { $FA = $FB['id'];
}else{ $FA = '';}
echo htmlspecialchars($FA,3); ?>}, function(){document.location.reload()})}"  title="<?php echo lmb_macro_apply_default(isset($title) ? $title : null,'Удалить'); ?>"><img src='/shared/cms/images/icons/<?php echo lmb_macro_apply_default(isset($icon) ? $icon : null,"delete"); ?>.png'/> <?php  if($is_link) echo $title; ?></a>
<?php 
}

function _template0772579bdb0e8919ae4aea2e8a30ef46($FI= array()) {
if($FI) extract($FI); ?>

  <?php 
    $controller = isset($controller) ? $controller : lmbToolkit::instance()->getDispatchedController()->getName();
    $item = isset($item) ? $item : false;
    $is_link = isset($is_link) ? $is_link : false;
    $icon = isset($icon) ? $icon : "add";
  ?>
  <a href='<?php $FN='';
$FO = $item;
if((is_array($FO) || ($FO instanceof ArrayAccess)) && isset($FO['id'])) { $FN = $FO['id'];
}else{ $FN = '';}
$FQ = array();
$FP = lmbArrayHelper :: explode(',',':', sprintf('controller:%s,action:%s,id:%s',$controller,$action,$FN));
foreach($FP as $key => $value) $FQ[trim($key)] = trim($value);
$FR = false;
echo lmbToolkit :: instance()->getRoutesUrl($FQ, '', $FR);
 ?>' title="<?php echo htmlspecialchars($title,3); ?>" class="thickbox"><img src='/shared/cms/images/icons/<?php echo lmb_macro_apply_default(isset($icon) ? $icon : null,"add"); ?>.png'/> <?php  if($is_link) echo $title; ?></a>
<?php 
}

function __staticInclude5($file,$items) {
 ?><?php
  $limit = intval(isset($per_page) ? $per_page : 20);
?>
<?php $this->pager_pager->setItemsPerPage($limit);
$this->pager_pager->setTotalItems($items->count());
$this->pager_pager->prepare();
$GC = $this->pager_pager->getCurrentPageBeginItem();
if($GC > 0) $GC = $GC - 1;
$items->paginate($GC, $this->pager_pager->getItemsPerPage());
 ?>


<?php $this->pager_pager->useSections();
$this->pager_pager->prepare();
$total_items = $this->pager_pager->getTotalItems();
$total_pages = $this->pager_pager->getTotalPages();
$items_per_page = $this->pager_pager->getItemsPerPage();
$begin_item_number = $this->pager_pager->getCurrentPageBeginItem();
$end_item_number = $this->pager_pager->getCurrentPageEndItem();
 ?>

  <?php  if($total_pages > 1){ ?>
    <div class='pager'>
      <?php if (!$this->pager_pager->isFirst()) {
$href = $this->pager_pager->getFirstPageUri();
 ?><a href="<?php echo htmlspecialchars($href,3); ?>"><img src="/shared/cms/images/button/arrow_first.gif"  width='18' height='17' alt='&#171;'/></a><?php }
 ?>

      <?php if ($this->pager_pager->hasPrev()) {
$href = $this->pager_pager->getPageUri($this->pager_pager->getCurrentPage() - 1 );
 ?><a href="<?php echo htmlspecialchars($href,3); ?>"><img src="/shared/cms/images/button/arrow_prev.gif"  width='18' height='17' alt='&#60;'/></a><?php }
 ?>

      <?php $GH = 0;
$GI = false;
while ($this->pager_pager->isValid()) {
if ($this->pager_pager->isDisplayedSection()) {
if (!($this->pager_pager->isFirst() && $this->pager_pager->isLast())) {
if (!$this->pager_pager->isDisplayedPage()) {
$href = $this->pager_pager->getPageUri();
$number = $this->pager_pager->getPage();
 ?><a href="<?php echo htmlspecialchars($href,3); ?>"><?php echo htmlspecialchars($number,3); ?></a><?php }
if ($this->pager_pager->isDisplayedPage()) {
$href = $this->pager_pager->getCurrentPageUri();
$number = $this->pager_pager->getPage();
 ?><b><?php echo htmlspecialchars($number,3); ?></b><?php }
}
$this->pager_pager->nextPage();
if ($this->pager_pager->isValid()){
 ?> <?php }
}
else {
if (!$this->pager_pager->isDisplayedSection()) {
$href = $this->pager_pager->getSectionUri();
$section_begin_page = $this->pager_pager->getSectionBeginPage();
$section_end_page = $this->pager_pager->getSectionEndPage();
 ?><a href="<?php echo htmlspecialchars($href,3); ?>">[<?php echo htmlspecialchars($section_begin_page,3); ?>..<?php echo htmlspecialchars($section_end_page,3); ?>]</a><?php }
$this->pager_pager->nextSection();
}
}
 ?>

      <?php if ($this->pager_pager->hasNext()) {
$href = $this->pager_pager->getPageUri($this->pager_pager->getCurrentPage() + 1 );
 ?><a href="<?php echo htmlspecialchars($href,3); ?>"><img src="/shared/cms/images/button/arrow_next.gif"  width='18' height='17' alt='&#62;'/></a><?php }
 ?>

      <?php if (!$this->pager_pager->isLast()) {
$href = $this->pager_pager->getLastPageUri();
 ?><a href="<?php echo htmlspecialchars($href,3); ?>"><img src="/shared/cms/images/button/arrow_last.gif"  width='18' height='17' alt='&#187;'/></a><?php }
 ?>

    </div>
  <?php  } ?>

<?php 
}

function __staticInclude6($file,$items) {
$HF = 0;$HH = $items;

if(!is_array($HH) && !($HH instanceof Iterator) && !($HH instanceof IteratorAggregate)) {
$HH = array();}
$HG = $HH;
foreach($HG as $item) {$parity = (( ($HF + 1) % 2) ? "odd" : "even");if($HF == 0) { ?>


  <?php $this->__staticInclude7('_admin/selectors.phtml'); ?>

  <?php $this->__staticInclude8('_admin_object/actions.phtml'); ?>


  <div class="list" id="documents">
    <div class='list_actions'>
      <?php $this->_templateff144e97863046914a63730c1661bf66(array('template' => 'selectors_button','action' => 'delete','title' => 'Удалить',)); ?>

      <?php $HQ='';
$HR = $this->item;
if((is_array($HR) || ($HR instanceof ArrayAccess)) && isset($HR['id'])) { $HQ = $HR['id'];
}else{ $HQ = '';}
$this->_template849146497617f8973eb4c283e4f1bf24(array('template' => 'save_priority_button','controller' => 'admin_document','action' => 'priority','params' => sprintf('parent_id=%s',$HQ),)); ?>

    </div>
    <table>
      <tr>
        <th><?php $this->_templatef897f024cc738ca5f03a82849464f54c(array('template' => 'selectors_toggler',)); ?></th>
        <th>#ID</th>
        <th>Порядок</th>
        <th>Название</th>
        <th>Статус</th>
        <th>Дата<br/>создания</th>
        <th>Последнее<br/>обновление</th>
        <th>Действия</th>
      </tr>
      <?php } ?>

      <tr class='<?php echo htmlspecialchars($parity,3); ?>'>
        <td><?php $IC='';
$ID = $item;
if((is_array($ID) || ($ID instanceof ArrayAccess)) && isset($ID['id'])) { $IC = $ID['id'];
}else{ $IC = '';}
$this->_templated8b23d578829fbbd468baf8b8a6280d9(array('template' => 'selector','value' => $IC,)); ?></td>
        <td>#<?php $IH='';
$II = $item;
if((is_array($II) || ($II instanceof ArrayAccess)) && isset($II['id'])) { $IH = $II['id'];
}else{ $IH = '';}
echo htmlspecialchars($IH,3); ?></td>
        <td><?php $this->__staticInclude9('_admin/priority_input.phtml', $item); ?></td>
        <td width="80%">
          <a href='<?php $IR='';
$IS = $item;
if((is_array($IS) || ($IS instanceof ArrayAccess)) && isset($IS['id'])) { $IR = $IS['id'];
}else{ $IR = '';}
$IU = array();
$IT = lmbArrayHelper :: explode(',',':', sprintf('action:display,id:%s',$IR));
foreach($IT as $key => $value) $IU[trim($key)] = trim($value);
$IV = false;
echo lmbToolkit :: instance()->getRoutesUrl($IU, '', $IV);
 ?>' title="Просмотр дочерних документов" style="font-weight:bold;"><?php $IW='';
$IX = $item;
if((is_array($IX) || ($IX instanceof ArrayAccess)) && isset($IX['title'])) { $IW = $IX['title'];
}else{ $IW = '';}
echo htmlspecialchars($IW,3); ?></a> (<?php $IY='';
$IZ = $item;
if((is_array($IZ) || ($IZ instanceof ArrayAccess)) && isset($IZ['kids'])) { $IY = $IZ['kids'];
$IY = $IY->count();
}else{ $IY = '';}
echo htmlspecialchars($IY,3); ?>)
          <br/>[<a href="<?php $JA='';
$JB = $item;
if((is_array($JB) || ($JB instanceof ArrayAccess)) && isset($JB['uri'])) { $JA = $JB['uri'];
}else{ $JA = '';}
echo htmlspecialchars($JA,3); ?>" title="Посмотреть на сайте" target="_blank"><?php $JC='';
$JD = $item;
if((is_array($JD) || ($JD instanceof ArrayAccess)) && isset($JD['uri'])) { $JC = $JD['uri'];
}else{ $JC = '';}
echo htmlspecialchars($JC,3); ?></a>]
        </td>
        <td><?php  echo $item->getIsPublished() ? '<img src="/shared/cms/images/icons/lightbulb.png" title="Опубликована"/>' : '<img src="/shared/cms/images/icons/lightbulb_off.png" title="Скрыта"/>'; ?></td>
        <td><?php $JE='';
$JF = $item;
if((is_array($JF) || ($JF instanceof ArrayAccess)) && isset($JF['ctime'])) { $JE = $JF['ctime'];
}else{ $JE = '';}
echo lmb_i18n_date_filter(array("", "stamp", "short_date_time",), $JE); ?></td>
        <td><?php $JG='';
$JH = $item;
if((is_array($JH) || ($JH instanceof ArrayAccess)) && isset($JH['utime'])) { $JG = $JH['utime'];
}else{ $JG = '';}
echo lmb_i18n_date_filter(array("", "stamp", "short_date_time",), $JG); ?></td>
        <td class='actions'>
          <?php $this->_template19056c540680f57b02d6a44ff139ac7a(array('template' => 'object_action','item' => $item,'action' => 'create','title' => 'Добавление дочернего документа','icon' => 'page_add',)); ?>

          <?php  if($item->getIsPublished()): ?>
            <?php $this->_template4a33b370fe97a3253b6b0c9d1013dab7(array('template' => 'object_action_unpublish','item' => $item,'icon' => 'lightbulb_off',)); ?>

          <?php   else:  ?>
            <?php $this->_template9d605ae55c7a85ed0e52deb8501ad1ed(array('template' => 'object_action_publish','item' => $item,'icon' => 'lightbulb',)); ?>

          <?php  endif; ?>
          <?php $this->_templatea13761fcaf12785ab8370708ac80e6b6(array('template' => 'object_action_edit','item' => $item,'icon' => 'page_edit',)); ?>

          <?php $this->_template510f6bb7eed889946c578d0dcbe28939(array('template' => 'object_action_delete','item' => $item,)); ?>

        </td>
      </tr>
      <?php $HF++;}if($HF > 0) { ?>

      
    </table>
    <div class='list_actions'>
      <?php $this->_templatee99d7537cf7a6fdc165864cc70c42e8c(array('template' => 'selectors_button','action' => 'delete','title' => 'Удалить',)); ?>

      <?php $MJ='';
$MK = $this->item;
if((is_array($MK) || ($MK instanceof ArrayAccess)) && isset($MK['id'])) { $MJ = $MK['id'];
}else{ $MJ = '';}
$this->_template58e9f31677e364d41e37f18638e98dbb(array('template' => 'save_priority_button','controller' => 'admin_document','action' => 'priority','params' => sprintf('parent_id=%s',$MJ),)); ?>

    </div>
  </div>

<?php }if($HF == 0) { ?>

        <div class="empty_list">Документы отсутствуют</div>
      <?php } ?>

<?php 
}

function __staticInclude7($file) {
 ?>











<?php 
}

function __staticInclude8($file) {
 ?>








<?php 
}

function _templateff144e97863046914a63730c1661bf66($HJ= array()) {
if($HJ) extract($HJ); ?>

<?php 
$controller = isset($controller) ? $controller : lmbToolkit::instance()->getDispatchedController()->getName();
$params = isset($params)? $params : '';

$url = lmbToolkit :: instance()->getRoutesUrl(array('controller' => $controller, 'action' => $action));
$url .= '?' . $params;
?>

   <input type="button" value='<?php echo htmlspecialchars($title,3); ?>' onclick='openWindowForSelectors("<?php echo htmlspecialchars($title,3); ?>", "<?php echo htmlspecialchars($url,3); ?>", this);return false;'/>
<?php 
}

function _template849146497617f8973eb4c283e4f1bf24($HS= array()) {
if($HS) extract($HS); ?>

<?php 
$controller = isset($controller) ? $controller : lmbToolkit::instance()->getDispatchedController()->getName();
$params = isset($params)? $params : '';

$url = lmbToolkit :: instance()->getRoutesUrl(array('controller' => $controller, 'action' => $action));
$url .= '?' . $params;

$title = isset($title) ? $title : lmb_i18n('Change order');
?>
      <input type="button" class='button' value='<?php echo htmlspecialchars($title,3); ?>' onclick='openWindowForSavePriority("<?php echo htmlspecialchars($title,3); ?>?", "<?php echo htmlspecialchars($url,3); ?>", this);return false;'/>
<?php 
}

function _templatef897f024cc738ca5f03a82849464f54c($HZ= array()) {
if($HZ) extract($HZ); ?>

  <input type='checkbox' onclick='toggle_selected(this);' name='mark_all'/>
<?php 
}

function _templated8b23d578829fbbd468baf8b8a6280d9($IE= array()) {
if($IE) extract($IE); ?>

  <input type='checkbox' name="ids[]" value='<?php echo htmlspecialchars($value,3); ?>'/>
<?php 
}

function __staticInclude9($file,$item) {
$IL='';
$IM = $item;
if((is_array($IM) || ($IM instanceof ArrayAccess)) && isset($IM['id'])) { $IL = $IM['id'];
}else{ $IL = '';}
$IN='';
$IO = $item;
if((is_array($IO) || ($IO instanceof ArrayAccess)) && isset($IO['id'])) { $IN = $IO['id'];
}else{ $IN = '';}
$IP='';
$IQ = $item;
if((is_array($IQ) || ($IQ instanceof ArrayAccess)) && isset($IQ['priority'])) { $IP = $IQ['priority'];
}else{ $IP = '';}
$this->input_id001->setAttribute('name',sprintf('priority_items[%s]',$IL));
$this->input_id001->setAttribute('id',sprintf('priority_items[%s]',$IN));
$this->input_id001->setAttribute('value',$IP);
 ?><input<?php $this->input_id001->renderAttributes(); ?> />
<?php 
}

function _template19056c540680f57b02d6a44ff139ac7a($JK= array()) {
if($JK) extract($JK); ?>

  <?php 
    $controller = isset($controller) ? $controller : lmbToolkit::instance()->getDispatchedController()->getName();
    $item = isset($item) ? $item : false;
    $is_link = isset($is_link) ? $is_link : false;
    $icon = isset($icon) ? $icon : "add";
  ?>
  <a href='<?php $JP='';
$JQ = $item;
if((is_array($JQ) || ($JQ instanceof ArrayAccess)) && isset($JQ['id'])) { $JP = $JQ['id'];
}else{ $JP = '';}
$JS = array();
$JR = lmbArrayHelper :: explode(',',':', sprintf('controller:%s,action:%s,id:%s',$controller,$action,$JP));
foreach($JR as $key => $value) $JS[trim($key)] = trim($value);
$JT = false;
echo lmbToolkit :: instance()->getRoutesUrl($JS, '', $JT);
 ?>' title="<?php echo htmlspecialchars($title,3); ?>" class="thickbox"><img src='/shared/cms/images/icons/<?php echo lmb_macro_apply_default(isset($icon) ? $icon : null,"add"); ?>.png'/> <?php  if($is_link) echo $title; ?></a>
<?php 
}

function _template4a33b370fe97a3253b6b0c9d1013dab7($KA= array()) {
if($KA) extract($KA); ?>

  <?php 
    $controller = isset($controller) ? $controller : lmbToolkit::instance()->getDispatchedController()->getName();
    $is_link = isset($is_link) ? $is_link : false;
    $title = isset($title) ? $title : 'Скрыть';
    $icon = isset($icon) ? $icon : "lightbulb_off";
  ?>

  <a href='<?php $KD='';
$KE = $item;
if((is_array($KE) || ($KE instanceof ArrayAccess)) && isset($KE['id'])) { $KD = $KE['id'];
}else{ $KD = '';}
$KG = array();
$KF = lmbArrayHelper :: explode(',',':', sprintf('controller:%s,action:unpublish,id:%s',$controller,$KD));
foreach($KF as $key => $value) $KG[trim($key)] = trim($value);
$KH = false;
echo lmbToolkit :: instance()->getRoutesUrl($KG, '', $KH);
 ?>' title="<?php echo lmb_macro_apply_default(isset($title) ? $title : null,'Скрыть'); ?>" class="unpublish thickbox"><img src='/shared/cms/images/icons/<?php echo lmb_macro_apply_default(isset($icon) ? $icon : null,"lightbulb_off"); ?>.png'/> <?php  if($is_link) echo $title; ?></a>
<?php 
}

function _template9d605ae55c7a85ed0e52deb8501ad1ed($KO= array()) {
if($KO) extract($KO); ?>

  <?php 
    $controller = isset($controller) ? $controller : lmbToolkit::instance()->getDispatchedController()->getName();
    $is_link = isset($is_link) ? $is_link : false;
    $title = isset($title) ? $title : 'Показать';
    $icon = isset($icon) ? $icon : "lightbulb";
  ?>
  <a href='<?php $KR='';
$KS = $item;
if((is_array($KS) || ($KS instanceof ArrayAccess)) && isset($KS['id'])) { $KR = $KS['id'];
}else{ $KR = '';}
$KU = array();
$KT = lmbArrayHelper :: explode(',',':', sprintf('controller:%s,action:publish,id:%s',$controller,$KR));
foreach($KT as $key => $value) $KU[trim($key)] = trim($value);
$KV = false;
echo lmbToolkit :: instance()->getRoutesUrl($KU, '', $KV);
 ?>' title="<?php echo lmb_macro_apply_default(isset($title) ? $title : null,'Показать'); ?>" class="publish thickbox"><img src='/shared/cms/images/icons/<?php echo lmb_macro_apply_default(isset($icon) ? $icon : null,"lightbulb"); ?>.png'/> <?php  if($is_link) echo $title; ?></a>
<?php 
}

function _templatea13761fcaf12785ab8370708ac80e6b6($LC= array()) {
if($LC) extract($LC); ?>

  <?php 
    $controller = isset($controller) ? $controller : lmbToolkit::instance()->getDispatchedController()->getName();
    $is_link = isset($is_link) ? $is_link : false;
    $title = isset($title) ? $title : 'Редактировать';
    $icon = isset($icon) ? $icon : "pencil";
  ?>
  <a href='<?php $LF='';
$LG = $item;
if((is_array($LG) || ($LG instanceof ArrayAccess)) && isset($LG['id'])) { $LF = $LG['id'];
}else{ $LF = '';}
$LI = array();
$LH = lmbArrayHelper :: explode(',',':', sprintf('controller:%s,action:edit,id:%s',$controller,$LF));
foreach($LH as $key => $value) $LI[trim($key)] = trim($value);
$LJ = false;
echo lmbToolkit :: instance()->getRoutesUrl($LI, '', $LJ);
 ?>' title="<?php echo lmb_macro_apply_default(isset($title) ? $title : null,'Редактировать'); ?>" class="thickbox"><img src='/shared/cms/images/icons/<?php echo lmb_macro_apply_default(isset($icon) ? $icon : null,"pencil"); ?>.png'/> <?php  if($is_link) echo $title; ?></a>
<?php 
}

function _template510f6bb7eed889946c578d0dcbe28939($LQ= array()) {
if($LQ) extract($LQ); ?>

  <?php 
    $controller = isset($controller) ? $controller : lmbToolkit::instance()->getDispatchedController()->getName();
    $is_link = isset($is_link) ? $is_link : false;
    $title = isset($title) ? $title : 'Удалить';
    $icon = isset($icon) ? $icon : "delete";
  ?>
  <a href='#' onclick="if(confirm('Вы действительно желаете удалить выбранный объект?')) {jQuery.post('<?php $LU = array();
$LT = lmbArrayHelper :: explode(',',':', sprintf('controller:%s,action:delete',$controller));
foreach($LT as $key => $value) $LU[trim($key)] = trim($value);
$LV = false;
echo lmbToolkit :: instance()->getRoutesUrl($LU, '', $LV);
 ?>', {ids:<?php $LW='';
$LX = $item;
if((is_array($LX) || ($LX instanceof ArrayAccess)) && isset($LX['id'])) { $LW = $LX['id'];
}else{ $LW = '';}
echo htmlspecialchars($LW,3); ?>}, function(){document.location.reload()})}"  title="<?php echo lmb_macro_apply_default(isset($title) ? $title : null,'Удалить'); ?>"><img src='/shared/cms/images/icons/<?php echo lmb_macro_apply_default(isset($icon) ? $icon : null,"delete"); ?>.png'/> <?php  if($is_link) echo $title; ?></a>
<?php 
}

function _templatee99d7537cf7a6fdc165864cc70c42e8c($MC= array()) {
if($MC) extract($MC); ?>

<?php 
$controller = isset($controller) ? $controller : lmbToolkit::instance()->getDispatchedController()->getName();
$params = isset($params)? $params : '';

$url = lmbToolkit :: instance()->getRoutesUrl(array('controller' => $controller, 'action' => $action));
$url .= '?' . $params;
?>

   <input type="button" value='<?php echo htmlspecialchars($title,3); ?>' onclick='openWindowForSelectors("<?php echo htmlspecialchars($title,3); ?>", "<?php echo htmlspecialchars($url,3); ?>", this);return false;'/>
<?php 
}

function _template58e9f31677e364d41e37f18638e98dbb($ML= array()) {
if($ML) extract($ML); ?>

<?php 
$controller = isset($controller) ? $controller : lmbToolkit::instance()->getDispatchedController()->getName();
$params = isset($params)? $params : '';

$url = lmbToolkit :: instance()->getRoutesUrl(array('controller' => $controller, 'action' => $action));
$url .= '?' . $params;

$title = isset($title) ? $title : lmb_i18n('Change order');
?>
      <input type="button" class='button' value='<?php echo htmlspecialchars($title,3); ?>' onclick='openWindowForSavePriority("<?php echo htmlspecialchars($title,3); ?>?", "<?php echo htmlspecialchars($url,3); ?>", this);return false;'/>
<?php 
}

function __slotHandlerc795c3540740cfdca10ed8d44a56cf83($NS= array()) {
if($NS) extract($NS);
}

function __slotHandler9ba5300be8c338871a28f9c317aaa95d($OP= array()) {
if($OP) extract($OP);
}

function __slotHandler2ea22d59ce7b8aad48a659e6e7eb5507($OQ= array()) {
if($OQ) extract($OQ); ?>

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

function __slotHandlercb337337bf50717b25bfad70d6b0df0a($OR= array()) {
if($OR) extract($OR);
}

}
}
$macro_executor_class='MacroTemplateExecutor7cce5b731d5192455d171d3fccbfdeac';