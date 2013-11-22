<?php /* This file is generated from /usr/share/nginx/www/eastwood/template/admin_user/display.phtml*/?><?php
if(!class_exists('MacroTemplateExecutor98de9ee57a483d470ea5afbd3a2ee379', false)){
require_once('limb/macro/src/compiler/lmbMacroTemplateExecutor.class.php');
require_once('limb/core/src/lmbArrayHelper.class.php');
require_once('limb/macro/src/filters/lmbMacroDefaultFilter.inc.php');
require_once('limb/macro/src/tags/pager/lmbMacroPagerHelper.class.php');
class MacroTemplateExecutor98de9ee57a483d470ea5afbd3a2ee379 extends lmbMacroTemplateExecutor {

function _init() {
$this->pager_pager = new lmbMacroPagerHelper('pager');

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
  <?php if(isset($this->__slot_handlers_header_zone)) {foreach($this->__slot_handlers_header_zone as $__slot_handler_header_zone) {call_user_func_array($__slot_handler_header_zone, array(array()));}}$this->__slotHandler20d788b83a3bd56afa0e475263f1b891(array()); ?>

  <style type="text/css">
    <?php if(isset($this->__slot_handlers_css_zone)) {foreach($this->__slot_handlers_css_zone as $__slot_handler_css_zone) {call_user_func_array($__slot_handler_css_zone, array(array()));}}$this->__slotHandler5783ee604fa11b049da772d9c1d41747(array()); ?>

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
        <?php if(isset($this->__slot_handlers_content_zone)) {foreach($this->__slot_handlers_content_zone as $__slot_handler_content_zone) {call_user_func_array($__slot_handler_content_zone, array(array()));}}$this->__slotHandler6e8156779874933396396d4eb51a90ab(array()); ?>

      </div>
    </div>

    <div id='sidebar'>
      <?php
        lmb_require('limb/cms/src/fetcher/lmbCmsAdminNavigationFetcher.class.php');
        $this->navigation=new lmbCmsAdminNavigationFetcher();
        $this->navigation=$this->navigation->fetch();
      ?>
      <dl id='main_menu'>
      <?php $FF = 0;$FH = $this->navigation;

if(!is_array($FH) && !($FH instanceof Iterator) && !($FH instanceof IteratorAggregate)) {
$FH = array();}
$FG = $FH;
foreach($FG as $item) {if($FF == 0) { ?>

        <?php } ?>

        <dt class='<?php $FJ='';
$FK = $item;
if((is_array($FK) || ($FK instanceof ArrayAccess)) && isset($FK['id'])) { $FJ = $FK['id'];
}else{ $FJ = '';}
echo htmlspecialchars($FJ,3); ?>'><img src='<?php $FL='';
$FM = $item;
if((is_array($FM) || ($FM instanceof ArrayAccess)) && isset($FM['icon'])) { $FL = $FM['icon'];
}else{ $FL = '';}
echo htmlspecialchars($FL,3); ?>'/> <?php $FN='';
$FO = $item;
if((is_array($FO) || ($FO instanceof ArrayAccess)) && isset($FO['title'])) { $FN = $FO['title'];
}else{ $FN = '';}
echo htmlspecialchars($FN,3); ?> </dt>
        <dd>
          <?php $FP='';
$FQ = $item;
if((is_array($FQ) || ($FQ instanceof ArrayAccess)) && isset($FQ['children'])) { $FP = $FQ['children'];
}else{ $FP = '';}
$FT = 0;$FV = $FP;

if(!is_array($FV) && !($FV instanceof Iterator) && !($FV instanceof IteratorAggregate)) {
$FV = array();}
$FU = $FV;
foreach($FU as $sub_item) {if($FT == 0) { ?>

            <ul>
              <?php } ?>

              <li>
                <img src='<?php $FX='';
$FY = $sub_item;
if((is_array($FY) || ($FY instanceof ArrayAccess)) && isset($FY['icon'])) { $FX = $FY['icon'];
}else{ $FX = '';}
echo htmlspecialchars($FX,3); ?>'/> <a href='<?php $FZ='';
$GA = $sub_item;
if((is_array($GA) || ($GA instanceof ArrayAccess)) && isset($GA['url'])) { $FZ = $GA['url'];
}else{ $FZ = '';}
echo htmlspecialchars($FZ,3); ?>'><?php $GB='';
$GC = $sub_item;
if((is_array($GC) || ($GC instanceof ArrayAccess)) && isset($GC['title'])) { $GB = $GC['title'];
}else{ $GB = '';}
echo htmlspecialchars($GB,3); ?></a>
              </li><?php $FT++;}if($FT > 0) { ?>

            </ul>
          <?php } ?>

        </dd>
        <?php $FF++;}if($FF > 0) { ?>

      <?php } ?>

      </dl>
      <?php if(isset($this->__slot_handlers_context_help)) {foreach($this->__slot_handlers_context_help as $__slot_handler_context_help) {call_user_func_array($__slot_handler_context_help, array(array()));}}$this->__slotHandler756081903188016b517589ecd677ca64(array()); ?>

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
  <?php if(isset($this->__slot_handlers_js_include)) {foreach($this->__slot_handlers_js_include as $__slot_handler_js_include) {call_user_func_array($__slot_handler_js_include, array(array()));}}$this->__slotHandler2d56eb78ecb8d2d90624be55ccef9b06(array()); ?>


  <script type="text/javascript">
    <?php if(isset($this->__slot_handlers_js)) {foreach($this->__slot_handlers_js as $__slot_handler_js) {call_user_func_array($__slot_handler_js, array(array()));}}$this->__slotHandlerc668689f819bfd0563bd2ff3b3480d26(array()); ?>


    jQuery(window).ready(function()
    {
      <?php if(isset($this->__slot_handlers_js_ready)) {foreach($this->__slot_handlers_js_ready as $__slot_handler_js_ready) {call_user_func_array($__slot_handler_js_ready, array(array()));}}$this->__slotHandler0c12335c1287fd878509fc0fd9c6a121(array()); ?>


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

function __slotHandler20d788b83a3bd56afa0e475263f1b891($I= array()) {
if($I) extract($I);
}

function __slotHandler5783ee604fa11b049da772d9c1d41747($J= array()) {
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
$this->_templatef7f1288436d1662ed1fc9ff89bad045c(array('template' => 'flashbox','messages' => $K,'box_class' => 'error',)); ?>

        <?php $V='';
$W = $flashbox;
$V = $W->getMessages();
$this->_templatece5394971d11b0febf420f7720e691cc(array('template' => 'flashbox','messages' => $V,'box_class' => 'message',)); ?>

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

function _templatef7f1288436d1662ed1fc9ff89bad045c($M= array()) {
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

function _templatece5394971d11b0febf420f7720e691cc($X= array()) {
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

function __slotHandler6e8156779874933396396d4eb51a90ab($BL= array()) {
if($BL) extract($BL); ?>


  <?php $this->__staticInclude3('_admin/selectors.phtml'); ?>

  <?php $this->__staticInclude4('_admin_object/actions.phtml'); ?>


  <div id="header">
    <h1>Users</h1>
    <div class="header_actions">
      <?php $this->_template6bddde06727ed89f78d1b4b3010fdaeb(array('template' => 'object_action','action' => 'create','is_link' => 'true','title' => 'Create user',)); ?>

    </div>

    <?php $this->__staticInclude5('_admin/pager.phtml', $this->items); ?>

  </div>

  <div id="body">

    <?php $DL = 0;$DN = $this->items;

if(!is_array($DN) && !($DN instanceof Iterator) && !($DN instanceof IteratorAggregate)) {
$DN = array();}
$DM = $DN;
foreach($DM as $item) {$counter = $DL+1;$parity = (( ($DL + 1) % 2) ? "odd" : "even");if($DL == 0) { ?>


      <div class='list'>
        <table>
          <tr>
            <th>#ID</th>
            <th>Name</th>
            <th>Login</th>
            <th>Email</th>
            <th>Address</th>
            <th>Actions</th>
          </tr>

          <?php } ?>

            <tr class="<?php echo htmlspecialchars($parity,3); ?>">
              <td><?php $DR='';
$DS = $item;
if((is_array($DS) || ($DS instanceof ArrayAccess)) && isset($DS['id'])) { $DR = $DS['id'];
}else{ $DR = '';}
echo htmlspecialchars($DR,3); ?></td>
              <td><?php $DT='';
$DU = $item;
if((is_array($DU) || ($DU instanceof ArrayAccess)) && isset($DU['name'])) { $DT = $DU['name'];
}else{ $DT = '';}
echo htmlspecialchars($DT,3); ?></td>
              <td><?php $DV='';
$DW = $item;
if((is_array($DW) || ($DW instanceof ArrayAccess)) && isset($DW['login'])) { $DV = $DW['login'];
}else{ $DV = '';}
echo htmlspecialchars($DV,3); ?></td>
              <td><?php $DX='';
$DY = $item;
if((is_array($DY) || ($DY instanceof ArrayAccess)) && isset($DY['email'])) { $DX = $DY['email'];
}else{ $DX = '';}
echo htmlspecialchars($DX,3); ?></td>
              <td><?php $DZ='';
$EA = $item;
if((is_array($EA) || ($EA instanceof ArrayAccess)) && isset($EA['address'])) { $DZ = $EA['address'];
}else{ $DZ = '';}
echo nl2br($DZ); ?></td>
              <td class='actions'>
                <?php $this->_template40fbaef7ed37656378ab67242b69828e(array('template' => 'object_action_edit','item' => $item,)); ?>

                <?php $this->_template645c8575a18dc675dd6e4e086a39570b(array('template' => 'object_action_delete','item' => $item,)); ?>

              </td>
            </tr>
          <?php $DL++;}if($DL > 0) { ?>

          
        </table>
      </div>

    <?php }if($DL == 0) { ?>

            <div class="empty_list">Empty</div>
          <?php } ?>


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

function _template6bddde06727ed89f78d1b4b3010fdaeb($BM= array()) {
if($BM) extract($BM); ?>

  <?php 
    $controller = isset($controller) ? $controller : lmbToolkit::instance()->getDispatchedController()->getName();
    $item = isset($item) ? $item : false;
    $is_link = isset($is_link) ? $is_link : false;
    $icon = isset($icon) ? $icon : "add";
  ?>
  <a href='<?php $BR='';
$BS = $item;
if((is_array($BS) || ($BS instanceof ArrayAccess)) && isset($BS['id'])) { $BR = $BS['id'];
}else{ $BR = '';}
$BU = array();
$BT = lmbArrayHelper :: explode(',',':', sprintf('controller:%s,action:%s,id:%s',$controller,$action,$BR));
foreach($BT as $key => $value) $BU[trim($key)] = trim($value);
$BV = false;
echo lmbToolkit :: instance()->getRoutesUrl($BU, '', $BV);
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
$CG = $this->pager_pager->getCurrentPageBeginItem();
if($CG > 0) $CG = $CG - 1;
$items->paginate($CG, $this->pager_pager->getItemsPerPage());
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

      <?php $CL = 0;
$CM = false;
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

function _template40fbaef7ed37656378ab67242b69828e($ED= array()) {
if($ED) extract($ED); ?>

  <?php 
    $controller = isset($controller) ? $controller : lmbToolkit::instance()->getDispatchedController()->getName();
    $is_link = isset($is_link) ? $is_link : false;
    $title = isset($title) ? $title : 'Редактировать';
    $icon = isset($icon) ? $icon : "pencil";
  ?>
  <a href='<?php $EG='';
$EH = $item;
if((is_array($EH) || ($EH instanceof ArrayAccess)) && isset($EH['id'])) { $EG = $EH['id'];
}else{ $EG = '';}
$EJ = array();
$EI = lmbArrayHelper :: explode(',',':', sprintf('controller:%s,action:edit,id:%s',$controller,$EG));
foreach($EI as $key => $value) $EJ[trim($key)] = trim($value);
$EK = false;
echo lmbToolkit :: instance()->getRoutesUrl($EJ, '', $EK);
 ?>' title="<?php echo lmb_macro_apply_default(isset($title) ? $title : null,'Редактировать'); ?>" class="thickbox"><img src='/shared/cms/images/icons/<?php echo lmb_macro_apply_default(isset($icon) ? $icon : null,"pencil"); ?>.png'/> <?php  if($is_link) echo $title; ?></a>
<?php 
}

function _template645c8575a18dc675dd6e4e086a39570b($ER= array()) {
if($ER) extract($ER); ?>

  <?php 
    $controller = isset($controller) ? $controller : lmbToolkit::instance()->getDispatchedController()->getName();
    $is_link = isset($is_link) ? $is_link : false;
    $title = isset($title) ? $title : 'Удалить';
    $icon = isset($icon) ? $icon : "delete";
  ?>
  <a href='#' onclick="if(confirm('Вы действительно желаете удалить выбранный объект?')) {jQuery.post('<?php $EV = array();
$EU = lmbArrayHelper :: explode(',',':', sprintf('controller:%s,action:delete',$controller));
foreach($EU as $key => $value) $EV[trim($key)] = trim($value);
$EW = false;
echo lmbToolkit :: instance()->getRoutesUrl($EV, '', $EW);
 ?>', {ids:<?php $EX='';
$EY = $item;
if((is_array($EY) || ($EY instanceof ArrayAccess)) && isset($EY['id'])) { $EX = $EY['id'];
}else{ $EX = '';}
echo htmlspecialchars($EX,3); ?>}, function(){document.location.reload()})}"  title="<?php echo lmb_macro_apply_default(isset($title) ? $title : null,'Удалить'); ?>"><img src='/shared/cms/images/icons/<?php echo lmb_macro_apply_default(isset($icon) ? $icon : null,"delete"); ?>.png'/> <?php  if($is_link) echo $title; ?></a>
<?php 
}

function __slotHandler756081903188016b517589ecd677ca64($GD= array()) {
if($GD) extract($GD);
}

function __slotHandler2d56eb78ecb8d2d90624be55ccef9b06($HA= array()) {
if($HA) extract($HA);
}

function __slotHandlerc668689f819bfd0563bd2ff3b3480d26($HB= array()) {
if($HB) extract($HB); ?>

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

function __slotHandler0c12335c1287fd878509fc0fd9c6a121($HC= array()) {
if($HC) extract($HC);
}

}
}
$macro_executor_class='MacroTemplateExecutor98de9ee57a483d470ea5afbd3a2ee379';