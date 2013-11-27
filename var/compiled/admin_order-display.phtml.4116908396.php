<?php /* This file is generated from /usr/share/nginx/www/eastwood/template/admin_order/display.phtml*/?><?php
if(!class_exists('MacroTemplateExecutora0e202ed5ecfc041414bd4184674b0de', false)){
require_once('limb/macro/src/compiler/lmbMacroTemplateExecutor.class.php');
require_once('limb/macro/src/tags/form/lmbMacroFormWidget.class.php');
require_once('limb/macro/src/tags/form/lmbMacroSingleSelectWidget.class.php');
require_once('limb/macro/src/tags/pager/lmbMacroPagerHelper.class.php');
require_once('limb/core/src/lmbArrayHelper.class.php');
require_once('limb/macro/src/filters/lmbMacroDefaultFilter.inc.php');
class MacroTemplateExecutora0e202ed5ecfc041414bd4184674b0de extends lmbMacroTemplateExecutor {

function _init() {
$this->form_filter_form = new lmbMacroFormWidget('filter_form');
$this->form_filter_form->setAttributes(array (
  'method' => 'GET',
  'id' => 'filter_form',
));
$this->select_id001 = new lmbMacroSingleSelectWidget('status');
$this->select_id001->setAttributes(array (
  'id' => 'status',
  'name' => 'status',
));
$this->select_id001->setForm($this->form_filter_form);
$this->form_filter_form->addChild($this->select_id001);
$this->pager_pager = new lmbMacroPagerHelper('pager');

}
function render($args = array()) {
if($args) extract($args);
$this->_init();
 ?><?php  $this->title = 'Orders'; ?>
<?php $this->__staticInclude1('admin_page_layout.phtml', 'content_zone', 'content_zone', 'admin_page_layout.phtml');
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
  <?php if(isset($this->__slot_handlers_header_zone)) {foreach($this->__slot_handlers_header_zone as $__slot_handler_header_zone) {call_user_func_array($__slot_handler_header_zone, array(array()));}}$this->__slotHandlerb8ad358b4ca142f4d022e008859e3c00(array()); ?>

  <style type="text/css">
    <?php if(isset($this->__slot_handlers_css_zone)) {foreach($this->__slot_handlers_css_zone as $__slot_handler_css_zone) {call_user_func_array($__slot_handler_css_zone, array(array()));}}$this->__slotHandlerb83c0034c8ec0b89943470888829981f(array()); ?>

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
        <?php if(isset($this->__slot_handlers_content_zone)) {foreach($this->__slot_handlers_content_zone as $__slot_handler_content_zone) {call_user_func_array($__slot_handler_content_zone, array(array()));}}$this->__slotHandler2b2272b421631b3c7cf40e2fab5e6941(array()); ?>

      </div>
    </div>

    <div id='sidebar'>
      <?php
        lmb_require('limb/cms/src/fetcher/lmbCmsAdminNavigationFetcher.class.php');
        $this->navigation=new lmbCmsAdminNavigationFetcher();
        $this->navigation=$this->navigation->fetch();
      ?>
      <dl id='main_menu'>
      <?php $FE = 0;$FG = $this->navigation;

if(!is_array($FG) && !($FG instanceof Iterator) && !($FG instanceof IteratorAggregate)) {
$FG = array();}
$FF = $FG;
foreach($FF as $item) {if($FE == 0) { ?>

        <?php } ?>

        <dt class='<?php $FI='';
$FJ = $item;
if((is_array($FJ) || ($FJ instanceof ArrayAccess)) && isset($FJ['id'])) { $FI = $FJ['id'];
}else{ $FI = '';}
echo htmlspecialchars($FI,3); ?>'><img src='<?php $FK='';
$FL = $item;
if((is_array($FL) || ($FL instanceof ArrayAccess)) && isset($FL['icon'])) { $FK = $FL['icon'];
}else{ $FK = '';}
echo htmlspecialchars($FK,3); ?>'/> <?php $FM='';
$FN = $item;
if((is_array($FN) || ($FN instanceof ArrayAccess)) && isset($FN['title'])) { $FM = $FN['title'];
}else{ $FM = '';}
echo htmlspecialchars($FM,3); ?> </dt>
        <dd>
          <?php $FO='';
$FP = $item;
if((is_array($FP) || ($FP instanceof ArrayAccess)) && isset($FP['children'])) { $FO = $FP['children'];
}else{ $FO = '';}
$FS = 0;$FU = $FO;

if(!is_array($FU) && !($FU instanceof Iterator) && !($FU instanceof IteratorAggregate)) {
$FU = array();}
$FT = $FU;
foreach($FT as $sub_item) {if($FS == 0) { ?>

            <ul>
              <?php } ?>

              <li>
                <img src='<?php $FW='';
$FX = $sub_item;
if((is_array($FX) || ($FX instanceof ArrayAccess)) && isset($FX['icon'])) { $FW = $FX['icon'];
}else{ $FW = '';}
echo htmlspecialchars($FW,3); ?>'/> <a href='<?php $FY='';
$FZ = $sub_item;
if((is_array($FZ) || ($FZ instanceof ArrayAccess)) && isset($FZ['url'])) { $FY = $FZ['url'];
}else{ $FY = '';}
echo htmlspecialchars($FY,3); ?>'><?php $GA='';
$GB = $sub_item;
if((is_array($GB) || ($GB instanceof ArrayAccess)) && isset($GB['title'])) { $GA = $GB['title'];
}else{ $GA = '';}
echo htmlspecialchars($GA,3); ?></a>
              </li><?php $FS++;}if($FS > 0) { ?>

            </ul>
          <?php } ?>

        </dd>
        <?php $FE++;}if($FE > 0) { ?>

      <?php } ?>

      </dl>
      <?php if(isset($this->__slot_handlers_context_help)) {foreach($this->__slot_handlers_context_help as $__slot_handler_context_help) {call_user_func_array($__slot_handler_context_help, array(array()));}}$this->__slotHandler1900ad412ec7e71021217eee697311f2(array()); ?>

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
  <?php if(isset($this->__slot_handlers_js_include)) {foreach($this->__slot_handlers_js_include as $__slot_handler_js_include) {call_user_func_array($__slot_handler_js_include, array(array()));}}$this->__slotHandlerd4b5375167188780055b6f2e3383687b(array()); ?>


  <script type="text/javascript">
    <?php if(isset($this->__slot_handlers_js)) {foreach($this->__slot_handlers_js as $__slot_handler_js) {call_user_func_array($__slot_handler_js, array(array()));}}$this->__slotHandler6b6a98abf20ae53c852a951600f23ddc(array()); ?>


    jQuery(window).ready(function()
    {
      <?php if(isset($this->__slot_handlers_js_ready)) {foreach($this->__slot_handlers_js_ready as $__slot_handler_js_ready) {call_user_func_array($__slot_handler_js_ready, array(array()));}}$this->__slotHandler54d815894b8b240f4f1a2b078697b360(array()); ?>


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

function __slotHandlerb8ad358b4ca142f4d022e008859e3c00($I= array()) {
if($I) extract($I);
}

function __slotHandlerb83c0034c8ec0b89943470888829981f($J= array()) {
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
$this->_template948f786c9ff83ab73ba3a0eca22fd6f9(array('template' => 'flashbox','messages' => $K,'box_class' => 'error',)); ?>

        <?php $V='';
$W = $flashbox;
$V = $W->getMessages();
$this->_template1feb587ecb32d6dee0af55931492bc73(array('template' => 'flashbox','messages' => $V,'box_class' => 'message',)); ?>

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

function _template948f786c9ff83ab73ba3a0eca22fd6f9($M= array()) {
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

function _template1feb587ecb32d6dee0af55931492bc73($X= array()) {
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

function __slotHandler2b2272b421631b3c7cf40e2fab5e6941($BL= array()) {
if($BL) extract($BL); ?>


<p>
    <?php if(isset($this->form_filter_form_datasource))$this->form_filter_form->setDatasource($this->form_filter_form_datasource);
if(isset($this->form_filter_form_error_list))$this->form_filter_form->setErrorList($this->form_filter_form_error_list);
 ?><form<?php $this->form_filter_form->renderAttributes(); ?>>
    <?php $statuses = Order :: getStatusOptions(); ?>
    Filter : <?php $this->select_id001->setOptions($statuses);
 ?><select<?php $this->select_id001->renderAttributes(); ?>><?php ob_start();
 ?>Show all<?php $BO = ob_get_contents();
ob_end_clean();
$this->select_id001->prependToOptions('', $BO);
$this->select_id001->renderOptions();
 ?></select>
    <input type='submit' name='filter' value="Filter" class='button'/><br/>
    </form>
</p>

<?php $this->__staticInclude3('_admin/selectors.phtml'); ?>

<?php $this->__staticInclude4('_admin_object/actions.phtml'); ?>


<?php $this->__staticInclude5('_admin/pager.phtml', $this->orders); ?>


<div id="body">
    <?php $CW = 0;$CY = $this->orders;

if(!is_array($CY) && !($CY instanceof Iterator) && !($CY instanceof IteratorAggregate)) {
$CY = array();}
$CX = $CY;
foreach($CX as $item) {$parity = (( ($CW + 1) % 2) ? "odd" : "even");if($CW == 0) { ?>

    <div class='list'>
        <table>
            <tr>
                <th>User</th>
                <th>Date</th>
                <th>Status</th>
                <th>Summ</th>
                <th>Action</th>
            </tr>

            <?php } ?>

            <tr class="<?php echo htmlspecialchars($parity,3); ?>">
                <td><?php $DC='';
$DD = $item;
if((is_array($DD) || ($DD instanceof ArrayAccess)) && isset($DD['user'])) { $DC = $DD['user'];
if((is_array($DC) || ($DC instanceof ArrayAccess)) && isset($DC['login'])) { $DC = $DC['login'];
}else{ $DC = '';}
}else{ $DC = '';}
echo htmlspecialchars($DC,3); ?></td>
                <td><?php $DE='';
$DF = $item;
if((is_array($DF) || ($DF instanceof ArrayAccess)) && isset($DF['date'])) { $DE = $DF['date'];
}else{ $DE = '';}
echo date("d.m.Y", $DE); ?></td>
                <td><?php $DG='';
$DH = $item;
if((is_array($DH) || ($DH instanceof ArrayAccess)) && isset($DH['status_name'])) { $DG = $DH['status_name'];
}else{ $DG = '';}
echo htmlspecialchars($DG,3); ?></td>
                <td><?php $DI='';
$DJ = $item;
if((is_array($DJ) || ($DJ instanceof ArrayAccess)) && isset($DJ['summ'])) { $DI = $DJ['summ'];
}else{ $DI = '';}
echo htmlspecialchars($DI,3); ?></td>
                <td class='actions'>
                    <?php $this->_template3309f8b412545914952261fca04f103c(array('template' => 'object_action','action' => 'details','title' => 'Details','icon' => 'zoom','item' => $item,)); ?>

                    <?php $this->_template2a35122a7b1f0d438d4fa79f69f7b754(array('template' => 'object_action_edit','item' => $item,)); ?>

                    <?php $this->_templateeae1a0db90391013706317d61f3d9660(array('template' => 'object_action_delete','item' => $item,)); ?>

                </td>
            </tr>
            <?php $CW++;}if($CW > 0) { ?>

            
        </table>
    </div>
    <?php }if($CW == 0) { ?>

            <div class="empty_list">We have no orders yet.</div>
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

function __staticInclude5($file,$items) {
 ?><?php
  $limit = intval(isset($per_page) ? $per_page : 20);
?>
<?php $this->pager_pager->setItemsPerPage($limit);
$this->pager_pager->setTotalItems($items->count());
$this->pager_pager->prepare();
$BV = $this->pager_pager->getCurrentPageBeginItem();
if($BV > 0) $BV = $BV - 1;
$items->paginate($BV, $this->pager_pager->getItemsPerPage());
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

      <?php $CA = 0;
$CB = false;
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

function _template3309f8b412545914952261fca04f103c($DM= array()) {
if($DM) extract($DM); ?>

  <?php 
    $controller = isset($controller) ? $controller : lmbToolkit::instance()->getDispatchedController()->getName();
    $item = isset($item) ? $item : false;
    $is_link = isset($is_link) ? $is_link : false;
    $icon = isset($icon) ? $icon : "add";
  ?>
  <a href='<?php $DR='';
$DS = $item;
if((is_array($DS) || ($DS instanceof ArrayAccess)) && isset($DS['id'])) { $DR = $DS['id'];
}else{ $DR = '';}
$DU = array();
$DT = lmbArrayHelper :: explode(',',':', sprintf('controller:%s,action:%s,id:%s',$controller,$action,$DR));
foreach($DT as $key => $value) $DU[trim($key)] = trim($value);
$DV = false;
echo lmbToolkit :: instance()->getRoutesUrl($DU, '', $DV);
 ?>' title="<?php echo htmlspecialchars($title,3); ?>" class="thickbox"><img src='/shared/cms/images/icons/<?php echo lmb_macro_apply_default(isset($icon) ? $icon : null,"add"); ?>.png'/> <?php  if($is_link) echo $title; ?></a>
<?php 
}

function _template2a35122a7b1f0d438d4fa79f69f7b754($EC= array()) {
if($EC) extract($EC); ?>

  <?php 
    $controller = isset($controller) ? $controller : lmbToolkit::instance()->getDispatchedController()->getName();
    $is_link = isset($is_link) ? $is_link : false;
    $title = isset($title) ? $title : 'Редактировать';
    $icon = isset($icon) ? $icon : "pencil";
  ?>
  <a href='<?php $EF='';
$EG = $item;
if((is_array($EG) || ($EG instanceof ArrayAccess)) && isset($EG['id'])) { $EF = $EG['id'];
}else{ $EF = '';}
$EI = array();
$EH = lmbArrayHelper :: explode(',',':', sprintf('controller:%s,action:edit,id:%s',$controller,$EF));
foreach($EH as $key => $value) $EI[trim($key)] = trim($value);
$EJ = false;
echo lmbToolkit :: instance()->getRoutesUrl($EI, '', $EJ);
 ?>' title="<?php echo lmb_macro_apply_default(isset($title) ? $title : null,'Редактировать'); ?>" class="thickbox"><img src='/shared/cms/images/icons/<?php echo lmb_macro_apply_default(isset($icon) ? $icon : null,"pencil"); ?>.png'/> <?php  if($is_link) echo $title; ?></a>
<?php 
}

function _templateeae1a0db90391013706317d61f3d9660($EQ= array()) {
if($EQ) extract($EQ); ?>

  <?php 
    $controller = isset($controller) ? $controller : lmbToolkit::instance()->getDispatchedController()->getName();
    $is_link = isset($is_link) ? $is_link : false;
    $title = isset($title) ? $title : 'Удалить';
    $icon = isset($icon) ? $icon : "delete";
  ?>
  <a href='#' onclick="if(confirm('Вы действительно желаете удалить выбранный объект?')) {jQuery.post('<?php $EU = array();
$ET = lmbArrayHelper :: explode(',',':', sprintf('controller:%s,action:delete',$controller));
foreach($ET as $key => $value) $EU[trim($key)] = trim($value);
$EV = false;
echo lmbToolkit :: instance()->getRoutesUrl($EU, '', $EV);
 ?>', {ids:<?php $EW='';
$EX = $item;
if((is_array($EX) || ($EX instanceof ArrayAccess)) && isset($EX['id'])) { $EW = $EX['id'];
}else{ $EW = '';}
echo htmlspecialchars($EW,3); ?>}, function(){document.location.reload()})}"  title="<?php echo lmb_macro_apply_default(isset($title) ? $title : null,'Удалить'); ?>"><img src='/shared/cms/images/icons/<?php echo lmb_macro_apply_default(isset($icon) ? $icon : null,"delete"); ?>.png'/> <?php  if($is_link) echo $title; ?></a>
<?php 
}

function __slotHandler1900ad412ec7e71021217eee697311f2($GC= array()) {
if($GC) extract($GC);
}

function __slotHandlerd4b5375167188780055b6f2e3383687b($GZ= array()) {
if($GZ) extract($GZ);
}

function __slotHandler6b6a98abf20ae53c852a951600f23ddc($HA= array()) {
if($HA) extract($HA); ?>

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

function __slotHandler54d815894b8b240f4f1a2b078697b360($HB= array()) {
if($HB) extract($HB);
}

}
}
$macro_executor_class='MacroTemplateExecutora0e202ed5ecfc041414bd4184674b0de';