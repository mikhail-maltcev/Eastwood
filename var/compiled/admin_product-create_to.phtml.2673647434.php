<?php /* This file is generated from /usr/share/nginx/www/eastwood/template/admin_product/create_to.phtml*/?><?php
if(!class_exists('MacroTemplateExecutoree7ed8c535a45cbaa2f438b3b457288e', false)){
require_once('limb/macro/src/compiler/lmbMacroTemplateExecutor.class.php');
require_once('limb/core/src/lmbArrayHelper.class.php');
require_once('limb/macro/src/filters/lmbMacroDefaultFilter.inc.php');
class MacroTemplateExecutoree7ed8c535a45cbaa2f438b3b457288e extends lmbMacroTemplateExecutor {
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
  <?php if(isset($this->__slot_handlers_header_zone)) {foreach($this->__slot_handlers_header_zone as $__slot_handler_header_zone) {call_user_func_array($__slot_handler_header_zone, array(array()));}}$this->__slotHandler28862e9133bb369c654df84420ae3a83(array()); ?>

  <style type="text/css">
    <?php if(isset($this->__slot_handlers_css_zone)) {foreach($this->__slot_handlers_css_zone as $__slot_handler_css_zone) {call_user_func_array($__slot_handler_css_zone, array(array()));}}$this->__slotHandler2cd6ec15548bddb88249eabaf2660293(array()); ?>

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
        <?php if(isset($this->__slot_handlers_content_zone)) {foreach($this->__slot_handlers_content_zone as $__slot_handler_content_zone) {call_user_func_array($__slot_handler_content_zone, array(array()));}}$this->__slotHandler1914d8e6b333bafa5b3558721fb7f451(array()); ?>

      </div>
    </div>

    <div id='sidebar'>
      <?php
        lmb_require('limb/cms/src/fetcher/lmbCmsAdminNavigationFetcher.class.php');
        $this->navigation=new lmbCmsAdminNavigationFetcher();
        $this->navigation=$this->navigation->fetch();
      ?>
      <dl id='main_menu'>
      <?php $FR = 0;$FT = $this->navigation;

if(!is_array($FT) && !($FT instanceof Iterator) && !($FT instanceof IteratorAggregate)) {
$FT = array();}
$FS = $FT;
foreach($FS as $item) {if($FR == 0) { ?>

        <?php } ?>

        <dt class='<?php $FV='';
$FW = $item;
if((is_array($FW) || ($FW instanceof ArrayAccess)) && isset($FW['id'])) { $FV = $FW['id'];
}else{ $FV = '';}
echo htmlspecialchars($FV,3); ?>'><img src='<?php $FX='';
$FY = $item;
if((is_array($FY) || ($FY instanceof ArrayAccess)) && isset($FY['icon'])) { $FX = $FY['icon'];
}else{ $FX = '';}
echo htmlspecialchars($FX,3); ?>'/> <?php $FZ='';
$GA = $item;
if((is_array($GA) || ($GA instanceof ArrayAccess)) && isset($GA['title'])) { $FZ = $GA['title'];
}else{ $FZ = '';}
echo htmlspecialchars($FZ,3); ?> </dt>
        <dd>
          <?php $GB='';
$GC = $item;
if((is_array($GC) || ($GC instanceof ArrayAccess)) && isset($GC['children'])) { $GB = $GC['children'];
}else{ $GB = '';}
$GF = 0;$GH = $GB;

if(!is_array($GH) && !($GH instanceof Iterator) && !($GH instanceof IteratorAggregate)) {
$GH = array();}
$GG = $GH;
foreach($GG as $sub_item) {if($GF == 0) { ?>

            <ul>
              <?php } ?>

              <li>
                <img src='<?php $GJ='';
$GK = $sub_item;
if((is_array($GK) || ($GK instanceof ArrayAccess)) && isset($GK['icon'])) { $GJ = $GK['icon'];
}else{ $GJ = '';}
echo htmlspecialchars($GJ,3); ?>'/> <a href='<?php $GL='';
$GM = $sub_item;
if((is_array($GM) || ($GM instanceof ArrayAccess)) && isset($GM['url'])) { $GL = $GM['url'];
}else{ $GL = '';}
echo htmlspecialchars($GL,3); ?>'><?php $GN='';
$GO = $sub_item;
if((is_array($GO) || ($GO instanceof ArrayAccess)) && isset($GO['title'])) { $GN = $GO['title'];
}else{ $GN = '';}
echo htmlspecialchars($GN,3); ?></a>
              </li><?php $GF++;}if($GF > 0) { ?>

            </ul>
          <?php } ?>

        </dd>
        <?php $FR++;}if($FR > 0) { ?>

      <?php } ?>

      </dl>
      <?php if(isset($this->__slot_handlers_context_help)) {foreach($this->__slot_handlers_context_help as $__slot_handler_context_help) {call_user_func_array($__slot_handler_context_help, array(array()));}}$this->__slotHandlere6eb5b53f42f94c25c8b8e6b9e8671d0(array()); ?>

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
  <?php if(isset($this->__slot_handlers_js_include)) {foreach($this->__slot_handlers_js_include as $__slot_handler_js_include) {call_user_func_array($__slot_handler_js_include, array(array()));}}$this->__slotHandlerc4e0ae0217f3c7f5872ec65775261f13(array()); ?>


  <script type="text/javascript">
    <?php if(isset($this->__slot_handlers_js)) {foreach($this->__slot_handlers_js as $__slot_handler_js) {call_user_func_array($__slot_handler_js, array(array()));}}$this->__slotHandler2531eb99c8198515df05e78a5c8097d2(array()); ?>


    jQuery(window).ready(function()
    {
      <?php if(isset($this->__slot_handlers_js_ready)) {foreach($this->__slot_handlers_js_ready as $__slot_handler_js_ready) {call_user_func_array($__slot_handler_js_ready, array(array()));}}$this->__slotHandler55fdb26ee970fbfd72c652f879403c3a(array()); ?>


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

function __slotHandler28862e9133bb369c654df84420ae3a83($I= array()) {
if($I) extract($I);
}

function __slotHandler2cd6ec15548bddb88249eabaf2660293($J= array()) {
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
$this->_template8e3c968b0a2d9efe31535dad3db6c584(array('template' => 'flashbox','messages' => $K,'box_class' => 'error',)); ?>

        <?php $V='';
$W = $flashbox;
$V = $W->getMessages();
$this->_templated14fce63ffe7b1f17f20728109c50dbc(array('template' => 'flashbox','messages' => $V,'box_class' => 'message',)); ?>

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

function _template8e3c968b0a2d9efe31535dad3db6c584($M= array()) {
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

function _templated14fce63ffe7b1f17f20728109c50dbc($X= array()) {
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

function __slotHandler1914d8e6b333bafa5b3558721fb7f451($BL= array()) {
if($BL) extract($BL); ?>


<?php $this->__staticInclude3('_admin/selectors.phtml'); ?>

<?php $this->__staticInclude4('_admin_object/actions.phtml'); ?>


<div id="header">
    <h1>Product</h1>

    <div class="header_actions">
        <?php $this->_template2a9e37997667048e5883abc590451505(array('template' => 'object_action','action' => sprintf('create/%s',$this->category),'is_link' => 'true','title' => 'Создать Product',)); ?>

    </div>


</div>

<div id="body">

    <?php $CK = 0;$CM = $this->items;

if(!is_array($CM) && !($CM instanceof Iterator) && !($CM instanceof IteratorAggregate)) {
$CM = array();}
$CL = $CM;
foreach($CL as $item) {$counter = $CK+1;$parity = (( ($CK + 1) % 2) ? "odd" : "even");if($CK == 0) { ?>


    <div class="list">
        <div class='list_actions'>
            <?php $this->_template06ce8131d9ae9e876f2f9f06727f2f55(array('template' => 'selectors_button','action' => 'set_available','title' => 'Set available',)); ?>

            <?php $this->_templatee4ef49441b15e5614b0340b3f39237aa(array('template' => 'selectors_button','action' => 'set_unavailable','title' => 'Set unavailable',)); ?>

        </div>
        <table>
            <tr>
                <th><?php $this->_templateb874d4426d4572e6e735b5525af19fc2(array('template' => 'selectors_toggler',)); ?></th>
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
                <td><?php $DF='';
$DG = $item;
if((is_array($DG) || ($DG instanceof ArrayAccess)) && isset($DG['id'])) { $DF = $DG['id'];
}else{ $DF = '';}
$this->_template04cbcead26aefbbdc6b90dbe1b00afe4(array('template' => 'selector','value' => $DF,)); ?></td>
                <td>#<?php $DK='';
$DL = $item;
if((is_array($DL) || ($DL instanceof ArrayAccess)) && isset($DL['id'])) { $DK = $DL['id'];
}else{ $DK = '';}
echo htmlspecialchars($DK,3); ?></td>
                <td><?php $DM='';
$DN = $item;
if((is_array($DN) || ($DN instanceof ArrayAccess)) && isset($DN['title'])) { $DM = $DN['title'];
}else{ $DM = '';}
echo htmlspecialchars($DM,3); ?></td>
                <td><?php $DO='';
$DP = $item;
if((is_array($DP) || ($DP instanceof ArrayAccess)) && isset($DP['price'])) { $DO = $DP['price'];
}else{ $DO = '';}
echo htmlspecialchars($DO,3); ?></td>
                <td><img src="/<?php $DQ='';
$DR = $item;
if((is_array($DR) || ($DR instanceof ArrayAccess)) && isset($DR['image_path'])) { $DQ = $DR['image_path'];
}else{ $DQ = '';}
echo htmlspecialchars($DQ,3); ?>"/></td>
                <td><img
                        src="/shared/cms/images/icons/<?php echo  ($item->getIsAvailable()) ? 'lightbulb.png' : 'lightbulb_off.png'; ?>"/>
                </td>
                <td><?php $DS='';
$DT = $item;
if((is_array($DT) || ($DT instanceof ArrayAccess)) && isset($DT['description'])) { $DS = $DT['description'];
}else{ $DS = '';}
echo nl2br($DS); ?></td>
                <td class='actions'>
                    <?php $this->_templateb667b32b138e81ed4bd0e177c68686ce(array('template' => 'object_action_edit','item' => $item,'icon' => 'page_white_edit',)); ?>

                    <?php $this->_templatefd73acbeb4c3f68cac33bf838060d8d5(array('template' => 'object_action_delete','item' => $item,'icon' => 'page_white_delete',)); ?>

                    <a href='<?php $EW='';
$EX = $item;
if((is_array($EX) || ($EX instanceof ArrayAccess)) && isset($EX['id'])) { $EW = $EX['id'];
}else{ $EW = '';}
$EZ = array();
$EY = lmbArrayHelper :: explode(',',':', sprintf('action:edit_property,id:%s',$EW));
foreach($EY as $key => $value) $EZ[trim($key)] = trim($value);
$FA = false;
echo lmbToolkit :: instance()->getRoutesUrl($EZ, '', $FA);
 ?>'>Edit Property</a>
                </td>
            </tr>
            <?php $CK++;}if($CK > 0) { ?>

            
        </table>
        <div class='list_actions'>
            <?php $this->_template25fdcc69a4568957f99ec40cf68155ea(array('template' => 'selectors_button','action' => 'set_available','title' => 'Set available',)); ?>

            <?php $this->_template9f6ade6eff362f19acb21ba16d54f6e9(array('template' => 'selectors_button','action' => 'set_unavailable','title' => 'Set unavailable',)); ?>

        </div>
    </div>

    <?php }if($CK == 0) { ?>

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

function _template2a9e37997667048e5883abc590451505($BO= array()) {
if($BO) extract($BO); ?>

  <?php 
    $controller = isset($controller) ? $controller : lmbToolkit::instance()->getDispatchedController()->getName();
    $item = isset($item) ? $item : false;
    $is_link = isset($is_link) ? $is_link : false;
    $icon = isset($icon) ? $icon : "add";
  ?>
  <a href='<?php $BT='';
$BU = $item;
if((is_array($BU) || ($BU instanceof ArrayAccess)) && isset($BU['id'])) { $BT = $BU['id'];
}else{ $BT = '';}
$BW = array();
$BV = lmbArrayHelper :: explode(',',':', sprintf('controller:%s,action:%s,id:%s',$controller,$action,$BT));
foreach($BV as $key => $value) $BW[trim($key)] = trim($value);
$BX = false;
echo lmbToolkit :: instance()->getRoutesUrl($BW, '', $BX);
 ?>' title="<?php echo htmlspecialchars($title,3); ?>" class="thickbox"><img src='/shared/cms/images/icons/<?php echo lmb_macro_apply_default(isset($icon) ? $icon : null,"add"); ?>.png'/> <?php  if($is_link) echo $title; ?></a>
<?php 
}

function _template06ce8131d9ae9e876f2f9f06727f2f55($CO= array()) {
if($CO) extract($CO); ?>

<?php 
$controller = isset($controller) ? $controller : lmbToolkit::instance()->getDispatchedController()->getName();
$params = isset($params)? $params : '';

$url = lmbToolkit :: instance()->getRoutesUrl(array('controller' => $controller, 'action' => $action));
$url .= '?' . $params;
?>

   <input type="button" value='<?php echo htmlspecialchars($title,3); ?>' onclick='openWindowForSelectors("<?php echo htmlspecialchars($title,3); ?>", "<?php echo htmlspecialchars($url,3); ?>", this);return false;'/>
<?php 
}

function _templatee4ef49441b15e5614b0340b3f39237aa($CV= array()) {
if($CV) extract($CV); ?>

<?php 
$controller = isset($controller) ? $controller : lmbToolkit::instance()->getDispatchedController()->getName();
$params = isset($params)? $params : '';

$url = lmbToolkit :: instance()->getRoutesUrl(array('controller' => $controller, 'action' => $action));
$url .= '?' . $params;
?>

   <input type="button" value='<?php echo htmlspecialchars($title,3); ?>' onclick='openWindowForSelectors("<?php echo htmlspecialchars($title,3); ?>", "<?php echo htmlspecialchars($url,3); ?>", this);return false;'/>
<?php 
}

function _templateb874d4426d4572e6e735b5525af19fc2($DC= array()) {
if($DC) extract($DC); ?>

  <input type='checkbox' onclick='toggle_selected(this);' name='mark_all'/>
<?php 
}

function _template04cbcead26aefbbdc6b90dbe1b00afe4($DH= array()) {
if($DH) extract($DH); ?>

  <input type='checkbox' name="ids[]" value='<?php echo htmlspecialchars($value,3); ?>'/>
<?php 
}

function _templateb667b32b138e81ed4bd0e177c68686ce($DW= array()) {
if($DW) extract($DW); ?>

  <?php 
    $controller = isset($controller) ? $controller : lmbToolkit::instance()->getDispatchedController()->getName();
    $is_link = isset($is_link) ? $is_link : false;
    $title = isset($title) ? $title : 'Редактировать';
    $icon = isset($icon) ? $icon : "pencil";
  ?>
  <a href='<?php $DZ='';
$EA = $item;
if((is_array($EA) || ($EA instanceof ArrayAccess)) && isset($EA['id'])) { $DZ = $EA['id'];
}else{ $DZ = '';}
$EC = array();
$EB = lmbArrayHelper :: explode(',',':', sprintf('controller:%s,action:edit,id:%s',$controller,$DZ));
foreach($EB as $key => $value) $EC[trim($key)] = trim($value);
$ED = false;
echo lmbToolkit :: instance()->getRoutesUrl($EC, '', $ED);
 ?>' title="<?php echo lmb_macro_apply_default(isset($title) ? $title : null,'Редактировать'); ?>" class="thickbox"><img src='/shared/cms/images/icons/<?php echo lmb_macro_apply_default(isset($icon) ? $icon : null,"pencil"); ?>.png'/> <?php  if($is_link) echo $title; ?></a>
<?php 
}

function _templatefd73acbeb4c3f68cac33bf838060d8d5($EK= array()) {
if($EK) extract($EK); ?>

  <?php 
    $controller = isset($controller) ? $controller : lmbToolkit::instance()->getDispatchedController()->getName();
    $is_link = isset($is_link) ? $is_link : false;
    $title = isset($title) ? $title : 'Удалить';
    $icon = isset($icon) ? $icon : "delete";
  ?>
  <a href='#' onclick="if(confirm('Вы действительно желаете удалить выбранный объект?')) {jQuery.post('<?php $EO = array();
$EN = lmbArrayHelper :: explode(',',':', sprintf('controller:%s,action:delete',$controller));
foreach($EN as $key => $value) $EO[trim($key)] = trim($value);
$EP = false;
echo lmbToolkit :: instance()->getRoutesUrl($EO, '', $EP);
 ?>', {ids:<?php $EQ='';
$ER = $item;
if((is_array($ER) || ($ER instanceof ArrayAccess)) && isset($ER['id'])) { $EQ = $ER['id'];
}else{ $EQ = '';}
echo htmlspecialchars($EQ,3); ?>}, function(){document.location.reload()})}"  title="<?php echo lmb_macro_apply_default(isset($title) ? $title : null,'Удалить'); ?>"><img src='/shared/cms/images/icons/<?php echo lmb_macro_apply_default(isset($icon) ? $icon : null,"delete"); ?>.png'/> <?php  if($is_link) echo $title; ?></a>
<?php 
}

function _template25fdcc69a4568957f99ec40cf68155ea($FB= array()) {
if($FB) extract($FB); ?>

<?php 
$controller = isset($controller) ? $controller : lmbToolkit::instance()->getDispatchedController()->getName();
$params = isset($params)? $params : '';

$url = lmbToolkit :: instance()->getRoutesUrl(array('controller' => $controller, 'action' => $action));
$url .= '?' . $params;
?>

   <input type="button" value='<?php echo htmlspecialchars($title,3); ?>' onclick='openWindowForSelectors("<?php echo htmlspecialchars($title,3); ?>", "<?php echo htmlspecialchars($url,3); ?>", this);return false;'/>
<?php 
}

function _template9f6ade6eff362f19acb21ba16d54f6e9($FI= array()) {
if($FI) extract($FI); ?>

<?php 
$controller = isset($controller) ? $controller : lmbToolkit::instance()->getDispatchedController()->getName();
$params = isset($params)? $params : '';

$url = lmbToolkit :: instance()->getRoutesUrl(array('controller' => $controller, 'action' => $action));
$url .= '?' . $params;
?>

   <input type="button" value='<?php echo htmlspecialchars($title,3); ?>' onclick='openWindowForSelectors("<?php echo htmlspecialchars($title,3); ?>", "<?php echo htmlspecialchars($url,3); ?>", this);return false;'/>
<?php 
}

function __slotHandlere6eb5b53f42f94c25c8b8e6b9e8671d0($GP= array()) {
if($GP) extract($GP);
}

function __slotHandlerc4e0ae0217f3c7f5872ec65775261f13($HM= array()) {
if($HM) extract($HM);
}

function __slotHandler2531eb99c8198515df05e78a5c8097d2($HN= array()) {
if($HN) extract($HN); ?>

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

function __slotHandler55fdb26ee970fbfd72c652f879403c3a($HO= array()) {
if($HO) extract($HO);
}

}
}
$macro_executor_class='MacroTemplateExecutoree7ed8c535a45cbaa2f438b3b457288e';