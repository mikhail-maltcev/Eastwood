<?php /* This file is generated from /usr/share/nginx/www/eastwood/template/admin_product/display.phtml*/?><?php
if(!class_exists('MacroTemplateExecutor941e378e759ccb5e731424c3a3cf73f5', false)){
require_once('limb/macro/src/compiler/lmbMacroTemplateExecutor.class.php');
require_once('limb/core/src/lmbArrayHelper.class.php');
require_once('limb/macro/src/filters/lmbMacroDefaultFilter.inc.php');
require_once('limb/macro/src/tags/pager/lmbMacroPagerHelper.class.php');
class MacroTemplateExecutor941e378e759ccb5e731424c3a3cf73f5 extends lmbMacroTemplateExecutor {

function _init() {
$this->pager_pager = new lmbMacroPagerHelper('pager');

}
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
  <?php if(isset($this->__slot_handlers_header_zone)) {foreach($this->__slot_handlers_header_zone as $__slot_handler_header_zone) {call_user_func_array($__slot_handler_header_zone, array(array()));}}$this->__slotHandler99c62191b219ddcacc0b81399f614cb7(array()); ?>

  <style type="text/css">
    <?php if(isset($this->__slot_handlers_css_zone)) {foreach($this->__slot_handlers_css_zone as $__slot_handler_css_zone) {call_user_func_array($__slot_handler_css_zone, array(array()));}}$this->__slotHandlera9054d65706ae5c86c8967c7b23bc38f(array()); ?>

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
        <?php if(isset($this->__slot_handlers_content_zone)) {foreach($this->__slot_handlers_content_zone as $__slot_handler_content_zone) {call_user_func_array($__slot_handler_content_zone, array(array()));}}$this->__slotHandler59ee87b79746ecc90371f41657f5650d(array()); ?>

      </div>
    </div>

    <div id='sidebar'>
      <?php
        lmb_require('limb/cms/src/fetcher/lmbCmsAdminNavigationFetcher.class.php');
        $this->navigation=new lmbCmsAdminNavigationFetcher();
        $this->navigation=$this->navigation->fetch();
      ?>
      <dl id='main_menu'>
      <?php $GN = 0;$GP = $this->navigation;

if(!is_array($GP) && !($GP instanceof Iterator) && !($GP instanceof IteratorAggregate)) {
$GP = array();}
$GO = $GP;
foreach($GO as $item) {if($GN == 0) { ?>

        <?php } ?>

        <dt class='<?php $GR='';
$GS = $item;
if((is_array($GS) || ($GS instanceof ArrayAccess)) && isset($GS['id'])) { $GR = $GS['id'];
}else{ $GR = '';}
echo htmlspecialchars($GR,3); ?>'><img src='<?php $GT='';
$GU = $item;
if((is_array($GU) || ($GU instanceof ArrayAccess)) && isset($GU['icon'])) { $GT = $GU['icon'];
}else{ $GT = '';}
echo htmlspecialchars($GT,3); ?>'/> <?php $GV='';
$GW = $item;
if((is_array($GW) || ($GW instanceof ArrayAccess)) && isset($GW['title'])) { $GV = $GW['title'];
}else{ $GV = '';}
echo htmlspecialchars($GV,3); ?> </dt>
        <dd>
          <?php $GX='';
$GY = $item;
if((is_array($GY) || ($GY instanceof ArrayAccess)) && isset($GY['children'])) { $GX = $GY['children'];
}else{ $GX = '';}
$HB = 0;$HD = $GX;

if(!is_array($HD) && !($HD instanceof Iterator) && !($HD instanceof IteratorAggregate)) {
$HD = array();}
$HC = $HD;
foreach($HC as $sub_item) {if($HB == 0) { ?>

            <ul>
              <?php } ?>

              <li>
                <img src='<?php $HF='';
$HG = $sub_item;
if((is_array($HG) || ($HG instanceof ArrayAccess)) && isset($HG['icon'])) { $HF = $HG['icon'];
}else{ $HF = '';}
echo htmlspecialchars($HF,3); ?>'/> <a href='<?php $HH='';
$HI = $sub_item;
if((is_array($HI) || ($HI instanceof ArrayAccess)) && isset($HI['url'])) { $HH = $HI['url'];
}else{ $HH = '';}
echo htmlspecialchars($HH,3); ?>'><?php $HJ='';
$HK = $sub_item;
if((is_array($HK) || ($HK instanceof ArrayAccess)) && isset($HK['title'])) { $HJ = $HK['title'];
}else{ $HJ = '';}
echo htmlspecialchars($HJ,3); ?></a>
              </li><?php $HB++;}if($HB > 0) { ?>

            </ul>
          <?php } ?>

        </dd>
        <?php $GN++;}if($GN > 0) { ?>

      <?php } ?>

      </dl>
      <?php if(isset($this->__slot_handlers_context_help)) {foreach($this->__slot_handlers_context_help as $__slot_handler_context_help) {call_user_func_array($__slot_handler_context_help, array(array()));}}$this->__slotHandlercbd97ec3ef742594faaf2ac24dca6ebc(array()); ?>

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
  <?php if(isset($this->__slot_handlers_js_include)) {foreach($this->__slot_handlers_js_include as $__slot_handler_js_include) {call_user_func_array($__slot_handler_js_include, array(array()));}}$this->__slotHandlerb1d248eddb5df6b5a6dbd004c33081b4(array()); ?>


  <script type="text/javascript">
    <?php if(isset($this->__slot_handlers_js)) {foreach($this->__slot_handlers_js as $__slot_handler_js) {call_user_func_array($__slot_handler_js, array(array()));}}$this->__slotHandler25e51a62f3c73bff64252ca50e325d65(array()); ?>


    jQuery(window).ready(function()
    {
      <?php if(isset($this->__slot_handlers_js_ready)) {foreach($this->__slot_handlers_js_ready as $__slot_handler_js_ready) {call_user_func_array($__slot_handler_js_ready, array(array()));}}$this->__slotHandler0e82f27565568f71370d5983e0b63951(array()); ?>


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

function __slotHandler99c62191b219ddcacc0b81399f614cb7($I= array()) {
if($I) extract($I);
}

function __slotHandlera9054d65706ae5c86c8967c7b23bc38f($J= array()) {
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
$this->_templateb85bd81581be29ed94ff56c1d9aa2da8(array('template' => 'flashbox','messages' => $K,'box_class' => 'error',)); ?>

        <?php $V='';
$W = $flashbox;
$V = $W->getMessages();
$this->_templatef1d6d779cbf447f85d7b7f9f94947033(array('template' => 'flashbox','messages' => $V,'box_class' => 'message',)); ?>

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

function _templateb85bd81581be29ed94ff56c1d9aa2da8($M= array()) {
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

function _templatef1d6d779cbf447f85d7b7f9f94947033($X= array()) {
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

function __slotHandler59ee87b79746ecc90371f41657f5650d($BL= array()) {
if($BL) extract($BL); ?>


  <?php $this->__staticInclude3('_admin/selectors.phtml'); ?>

  <?php $this->__staticInclude4('_admin_object/actions.phtml'); ?>


  <div id="header">
    <h1>Product</h1>
    <div class="header_actions">
      <?php $this->_template8b0ebe6858349ab621864ccb13fd5ccc(array('template' => 'object_action','action' => 'create','is_link' => 'true','title' => 'Создать Product',)); ?>

    </div>

    <?php $this->__staticInclude5('_admin/pager.phtml', $this->items); ?>

  </div>

  <div id="body">

    <?php $DL = 0;$DN = $this->items;

if(!is_array($DN) && !($DN instanceof Iterator) && !($DN instanceof IteratorAggregate)) {
$DN = array();}
$DM = $DN;
foreach($DM as $item) {$counter = $DL+1;$parity = (( ($DL + 1) % 2) ? "odd" : "even");if($DL == 0) { ?>


      <div class="list">
        <div class='list_actions'>
          <?php $this->_template54bfec47a23bf3f49d1875030840782c(array('template' => 'selectors_button','action' => 'set_available','title' => 'Set available',)); ?>

          <?php $this->_template17db52fbad659010f60e74d539b2cc13(array('template' => 'selectors_button','action' => 'set_unavailable','title' => 'Set unavailable',)); ?>

        </div>
        <table>
          <tr>
            <th><?php $this->_template4442684897d4307dfcd1d2e69bba9a80(array('template' => 'selectors_toggler',)); ?></th>
            <th>#ID</th>
            <th width='20%'>Title</th>
            <th width='10%'>Price</th>
            <th width='10%'>Image</th>
            <th width="10%">Availability</th>
            <th width='40%'>Decsription</th>
            <th>Actions</th>
          </tr>
          <?php } ?>

            <tr class='<?php echo htmlspecialchars($parity,3); ?>'>
              <td><?php $EG='';
$EH = $item;
if((is_array($EH) || ($EH instanceof ArrayAccess)) && isset($EH['id'])) { $EG = $EH['id'];
}else{ $EG = '';}
$this->_template036d0eb3a9236513c930ff7893a88f9b(array('template' => 'selector','value' => $EG,)); ?></td>
              <td>#<?php $EL='';
$EM = $item;
if((is_array($EM) || ($EM instanceof ArrayAccess)) && isset($EM['id'])) { $EL = $EM['id'];
}else{ $EL = '';}
echo htmlspecialchars($EL,3); ?></td>
              <td><?php $EN='';
$EO = $item;
if((is_array($EO) || ($EO instanceof ArrayAccess)) && isset($EO['title'])) { $EN = $EO['title'];
}else{ $EN = '';}
echo htmlspecialchars($EN,3); ?></td>
              <td><?php $EP='';
$EQ = $item;
if((is_array($EQ) || ($EQ instanceof ArrayAccess)) && isset($EQ['price'])) { $EP = $EQ['price'];
}else{ $EP = '';}
echo htmlspecialchars($EP,3); ?></td>
              <td><img src="/<?php $ER='';
$ES = $item;
if((is_array($ES) || ($ES instanceof ArrayAccess)) && isset($ES['image_path'])) { $ER = $ES['image_path'];
}else{ $ER = '';}
echo htmlspecialchars($ER,3); ?>"/></td>
              <td><img src="/shared/cms/images/icons/<?php echo  ($item->getIsAvailable()) ? 'lightbulb.png' : 'lightbulb_off.png'; ?>"/></td>
              <td><?php $ET='';
$EU = $item;
if((is_array($EU) || ($EU instanceof ArrayAccess)) && isset($EU['description'])) { $ET = $EU['description'];
}else{ $ET = '';}
echo nl2br($ET); ?></td>
              <td class='actions'>
                <?php $this->_template7ed2ba2c13a7572d9e8ee001d5790e6a(array('template' => 'object_action_edit','item' => $item,'icon' => 'page_white_edit',)); ?>

                <?php $this->_template79339428be63d25b1ab041e4feb50a9d(array('template' => 'object_action_delete','item' => $item,'icon' => 'page_white_delete',)); ?>

              </td>
            </tr>
          <?php $DL++;}if($DL > 0) { ?>

          
        </table>
        <div class='list_actions'>
          <?php $this->_template0787b36c6f74f39f30949db9cdac4d42(array('template' => 'selectors_button','action' => 'set_available','title' => 'Set available',)); ?>

          <?php $this->_template73ebdcbd2a13f0a45ab5a8794fc1022e(array('template' => 'selectors_button','action' => 'set_unavailable','title' => 'Set unavailable',)); ?>

        </div>
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

function _template8b0ebe6858349ab621864ccb13fd5ccc($BM= array()) {
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

function _template54bfec47a23bf3f49d1875030840782c($DP= array()) {
if($DP) extract($DP); ?>

<?php 
$controller = isset($controller) ? $controller : lmbToolkit::instance()->getDispatchedController()->getName();
$params = isset($params)? $params : '';

$url = lmbToolkit :: instance()->getRoutesUrl(array('controller' => $controller, 'action' => $action));
$url .= '?' . $params;
?>

   <input type="button" value='<?php echo htmlspecialchars($title,3); ?>' onclick='openWindowForSelectors("<?php echo htmlspecialchars($title,3); ?>", "<?php echo htmlspecialchars($url,3); ?>", this);return false;'/>
<?php 
}

function _template17db52fbad659010f60e74d539b2cc13($DW= array()) {
if($DW) extract($DW); ?>

<?php 
$controller = isset($controller) ? $controller : lmbToolkit::instance()->getDispatchedController()->getName();
$params = isset($params)? $params : '';

$url = lmbToolkit :: instance()->getRoutesUrl(array('controller' => $controller, 'action' => $action));
$url .= '?' . $params;
?>

   <input type="button" value='<?php echo htmlspecialchars($title,3); ?>' onclick='openWindowForSelectors("<?php echo htmlspecialchars($title,3); ?>", "<?php echo htmlspecialchars($url,3); ?>", this);return false;'/>
<?php 
}

function _template4442684897d4307dfcd1d2e69bba9a80($ED= array()) {
if($ED) extract($ED); ?>

  <input type='checkbox' onclick='toggle_selected(this);' name='mark_all'/>
<?php 
}

function _template036d0eb3a9236513c930ff7893a88f9b($EI= array()) {
if($EI) extract($EI); ?>

  <input type='checkbox' name="ids[]" value='<?php echo htmlspecialchars($value,3); ?>'/>
<?php 
}

function _template7ed2ba2c13a7572d9e8ee001d5790e6a($EX= array()) {
if($EX) extract($EX); ?>

  <?php 
    $controller = isset($controller) ? $controller : lmbToolkit::instance()->getDispatchedController()->getName();
    $is_link = isset($is_link) ? $is_link : false;
    $title = isset($title) ? $title : 'Редактировать';
    $icon = isset($icon) ? $icon : "pencil";
  ?>
  <a href='<?php $FA='';
$FB = $item;
if((is_array($FB) || ($FB instanceof ArrayAccess)) && isset($FB['id'])) { $FA = $FB['id'];
}else{ $FA = '';}
$FD = array();
$FC = lmbArrayHelper :: explode(',',':', sprintf('controller:%s,action:edit,id:%s',$controller,$FA));
foreach($FC as $key => $value) $FD[trim($key)] = trim($value);
$FE = false;
echo lmbToolkit :: instance()->getRoutesUrl($FD, '', $FE);
 ?>' title="<?php echo lmb_macro_apply_default(isset($title) ? $title : null,'Редактировать'); ?>" class="thickbox"><img src='/shared/cms/images/icons/<?php echo lmb_macro_apply_default(isset($icon) ? $icon : null,"pencil"); ?>.png'/> <?php  if($is_link) echo $title; ?></a>
<?php 
}

function _template79339428be63d25b1ab041e4feb50a9d($FL= array()) {
if($FL) extract($FL); ?>

  <?php 
    $controller = isset($controller) ? $controller : lmbToolkit::instance()->getDispatchedController()->getName();
    $is_link = isset($is_link) ? $is_link : false;
    $title = isset($title) ? $title : 'Удалить';
    $icon = isset($icon) ? $icon : "delete";
  ?>
  <a href='#' onclick="if(confirm('Вы действительно желаете удалить выбранный объект?')) {jQuery.post('<?php $FP = array();
$FO = lmbArrayHelper :: explode(',',':', sprintf('controller:%s,action:delete',$controller));
foreach($FO as $key => $value) $FP[trim($key)] = trim($value);
$FQ = false;
echo lmbToolkit :: instance()->getRoutesUrl($FP, '', $FQ);
 ?>', {ids:<?php $FR='';
$FS = $item;
if((is_array($FS) || ($FS instanceof ArrayAccess)) && isset($FS['id'])) { $FR = $FS['id'];
}else{ $FR = '';}
echo htmlspecialchars($FR,3); ?>}, function(){document.location.reload()})}"  title="<?php echo lmb_macro_apply_default(isset($title) ? $title : null,'Удалить'); ?>"><img src='/shared/cms/images/icons/<?php echo lmb_macro_apply_default(isset($icon) ? $icon : null,"delete"); ?>.png'/> <?php  if($is_link) echo $title; ?></a>
<?php 
}

function _template0787b36c6f74f39f30949db9cdac4d42($FX= array()) {
if($FX) extract($FX); ?>

<?php 
$controller = isset($controller) ? $controller : lmbToolkit::instance()->getDispatchedController()->getName();
$params = isset($params)? $params : '';

$url = lmbToolkit :: instance()->getRoutesUrl(array('controller' => $controller, 'action' => $action));
$url .= '?' . $params;
?>

   <input type="button" value='<?php echo htmlspecialchars($title,3); ?>' onclick='openWindowForSelectors("<?php echo htmlspecialchars($title,3); ?>", "<?php echo htmlspecialchars($url,3); ?>", this);return false;'/>
<?php 
}

function _template73ebdcbd2a13f0a45ab5a8794fc1022e($GE= array()) {
if($GE) extract($GE); ?>

<?php 
$controller = isset($controller) ? $controller : lmbToolkit::instance()->getDispatchedController()->getName();
$params = isset($params)? $params : '';

$url = lmbToolkit :: instance()->getRoutesUrl(array('controller' => $controller, 'action' => $action));
$url .= '?' . $params;
?>

   <input type="button" value='<?php echo htmlspecialchars($title,3); ?>' onclick='openWindowForSelectors("<?php echo htmlspecialchars($title,3); ?>", "<?php echo htmlspecialchars($url,3); ?>", this);return false;'/>
<?php 
}

function __slotHandlercbd97ec3ef742594faaf2ac24dca6ebc($HL= array()) {
if($HL) extract($HL);
}

function __slotHandlerb1d248eddb5df6b5a6dbd004c33081b4($II= array()) {
if($II) extract($II);
}

function __slotHandler25e51a62f3c73bff64252ca50e325d65($IJ= array()) {
if($IJ) extract($IJ); ?>

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

function __slotHandler0e82f27565568f71370d5983e0b63951($IK= array()) {
if($IK) extract($IK);
}

}
}
$macro_executor_class='MacroTemplateExecutor941e378e759ccb5e731424c3a3cf73f5';