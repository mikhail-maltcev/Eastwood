<?php /* This file is generated from /usr/share/nginx/www/eastwood/template/cart/checkout_me.phtml*/?><?php
if(!class_exists('MacroTemplateExecutor54dc6a9b01f39e17abdb840a8f2e1d79', false)){
require_once('limb/macro/src/compiler/lmbMacroTemplateExecutor.class.php');
require_once('limb/macro/src/tags/form/lmbMacroFormWidget.class.php');
require_once('limb/macro/src/tags/form/lmbMacroTextAreaWidget.class.php');
class MacroTemplateExecutor54dc6a9b01f39e17abdb840a8f2e1d79 extends lmbMacroTemplateExecutor {

function _init() {
$this->form_checkout_form = new lmbMacroFormWidget('checkout_form');
$this->form_checkout_form->setAttributes(array (
  'name' => 'checkout_form',
  'id' => 'checkout_form',
  'method' => 'POST',
));
$this->textarea_id001 = new lmbMacroTextAreaWidget('address');
$this->textarea_id001->setAttributes(array (
  'type' => 'text',
  'name' => 'address',
  'id' => 'address',
  'title' => 'Delivery address',
));
$this->textarea_id001->setForm($this->form_checkout_form);
$this->form_checkout_form->addChild($this->textarea_id001);

}
function render($args = array()) {
if($args) extract($args);
$this->_init();
 ?><?php  $this->title = 'Checkout'; ?>

<?php $this->__staticInclude1('front_page_layout.phtml', 'content_zone', 'content_zone', 'front_page_layout.phtml');
}

function __staticInclude1($file,$in,$into,$file) {
 ?><html>
<head>
    <title><?php echo htmlspecialchars($this->title,3); ?> :: Limb3 shop example application on &#123;&#123;macro&#125;&#125;</title>
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
    <link rel=stylesheet type="text/css" href="/styles/main.css"/>
</head>
<body>
<div id="header">
    <div class="center">
        <img src="/images/logo.limb.gif" width='384' height='46' alt='logo.limb' id='logo'/>
    </div>
</div>

<div id="center">
    <div id="wrapper">

        <div id="container">
            <div id="content">
                <h1><?php echo htmlspecialchars($this->title,3); ?></h1>
                <?php $this->__staticInclude2('flash_box.phtml'); ?>

                <?php if(isset($this->__slot_handlers_content_zone)) {foreach($this->__slot_handlers_content_zone as $__slot_handler_content_zone) {call_user_func_array($__slot_handler_content_zone, array(array()));}}$this->__slotHandler3822bccea9b6abce458b826169f605cd(array()); ?>

            </div>
        </div>

        <div id="sidebar">
            <div id="navigation">
                <ul>
                    <li><a href="/product">Products</a></li>
                    <li><a href="/cart">Your Cart</a></li>

                    <?php  if ($this->toolkit->getSession()->get('user_id')) { ?>
                    <?php  } else { ?>
                        <li><a href="/user/login/">Login please</a></li>
                    <?php  } ?>
                </ul>
            </div>

            <div id="profile">
                <dt>Profile</dt>
                <?php $this->__staticInclude3('user/include/profile_box.phtml'); ?>

            </div>

            <div id="category">
                <dt>Categories</dt>
                <?php $this->__staticInclude4('category.phtml'); ?>

            </div>

        </div>
    </div>
</div>
</div>
</body>
</html><?php 
}

function __staticInclude2($file) {
 ?><?php  $flash_messages = $this->toolkit->getFlashBox()->getUnifiedList(); ?>
<?php $G = 0;$I = $flash_messages;

if(!is_array($I) && !($I instanceof Iterator) && !($I instanceof IteratorAggregate)) {
$I = array();}
$H = $I;
foreach($H as $item) {if($G == 0) { ?>

<?php } ?>

<?php  if ($item['is_error']) { ?>
    <div class="error_border"><b><?php $K='';
$L = $item;
if((is_array($L) || ($L instanceof ArrayAccess)) && isset($L['message'])) { $K = $L['message'];
}else{ $K = '';}
echo htmlspecialchars($K,3); ?></b></div><?php  } ?>
<?php  if ($item['is_message']) { ?>
    <div class="border"><b><?php $M='';
$N = $item;
if((is_array($N) || ($N instanceof ArrayAccess)) && isset($N['message'])) { $M = $N['message'];
}else{ $M = '';}
echo htmlspecialchars($M,3); ?></b></div><?php  } ?>
<?php $G++;}if($G > 0) { ?>

<?php }
}

function __slotHandler3822bccea9b6abce458b826169f605cd($O= array()) {
if($O) extract($O); ?>


Your cart contains <?php $P='';
$Q = $this->cart;
if((is_array($Q) || ($Q instanceof ArrayAccess)) && isset($Q['items_count'])) { $P = $Q['items_count'];
}else{ $P = '';}
echo htmlspecialchars($P,3); ?> items.

<?php $R='';
$S = $this->cart;
if((is_array($S) || ($S instanceof ArrayAccess)) && isset($S['items'])) { $R = $S['items'];
}else{ $R = '';}
$T = 0;$V = $R;

if(!is_array($V) && !($V instanceof Iterator) && !($V instanceof IteratorAggregate)) {
$V = array();}
$U = $V;
foreach($U as $item) {if($T == 0) { ?>

<table cellpadding="0" cellspacing="0" class='list'>
    <thead>
    <tr>
        <th>Title</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>Summ</th>
    </tr>
    </thead>
    <?php } ?>

    <tr class='checkout'>
        <td><?php $X='';
$Y = $item;
if((is_array($Y) || ($Y instanceof ArrayAccess)) && isset($Y['product'])) { $X = $Y['product'];
if((is_array($X) || ($X instanceof ArrayAccess)) && isset($X['title'])) { $X = $X['title'];
}else{ $X = '';}
}else{ $X = '';}
echo htmlspecialchars($X,3); ?></td>
        <td>$<?php $Z='';
$BB = $item;
if((is_array($BB) || ($BB instanceof ArrayAccess)) && isset($BB['price'])) { $Z = $BB['price'];
}else{ $Z = '';}
echo number_format($Z,2, '.', ' '); ?></td>
        <td><?php $BC='';
$BD = $item;
if((is_array($BD) || ($BD instanceof ArrayAccess)) && isset($BD['quantity'])) { $BC = $BD['quantity'];
}else{ $BC = '';}
echo htmlspecialchars($BC,3); ?></td>
        <td>$<?php $BE='';
$BF = $item;
if((is_array($BF) || ($BF instanceof ArrayAccess)) && isset($BF['summ'])) { $BE = $BF['summ'];
}else{ $BE = '';}
echo number_format($BE,2, '.', ' '); ?></td>
    </tr>
    <?php $T++;}if($T > 0) { ?>

</table>
<?php } ?>


Total summ is : <b>$<?php $BG='';
$BH = $this->cart;
if((is_array($BH) || ($BH instanceof ArrayAccess)) && isset($BH['total_summ'])) { $BG = $BH['total_summ'];
}else{ $BG = '';}
echo number_format($BG,2, '.', ' '); ?></b>

<br/>
<?php if(isset($this->form_checkout_form_datasource))$this->form_checkout_form->setDatasource($this->form_checkout_form_datasource);
if(isset($this->form_checkout_form_error_list))$this->form_checkout_form->setErrorList($this->form_checkout_form_error_list);
 ?><form<?php $this->form_checkout_form->renderAttributes(); ?>>

<label for='address'>Delivery address:</label><br/>
<textarea<?php $this->textarea_id001->renderAttributes(); ?>><?php echo htmlspecialchars($this->textarea_id001->getValue(), ENT_QUOTES);
 ?></textarea><br/>

<input type='submit' class='button' name='submitted' value="Finish order" class='button'/><br/>
</form>
<?php 
}

function __staticInclude3($file) {
 ?><?php  if ($this->toolkit->getSession()->get('user_id')) { ?>
    <dd>
        <?php 
        echo $this->toolkit->getSession()->get('user_name');
        echo '<br /><a href="/user/logout">logout</a>';
        ?>
    </dd>
<?php 
}
?><?php 
}

function __staticInclude4($file) {
 ?><?php 
$tree = new Tree();
$this->Tree = $tree->getData();
?>

<dd>
    <?php $this->_render_tree3d96658f7bbe1b13aebb181eeaa75e32($this->Tree, 0,array('kids_prop' => 'childs','prefix' => '1',));
 ?>


</dd><?php 
}

function _render_tree3d96658f7bbe1b13aebb181eeaa75e32($BO,$level,$BQ= array()) {
if($BQ) extract($BQ);$BP=0;
foreach($BO as $item) {
$counter = $BP+1;
if(!$BP) {
 ?>

    <ul>
        <?php }
 ?>

        <li>

            <?php $new_prefix = $prefix . ".+++" . $counter; ?>
            <?php if(isset($item["childs"])) {$this->_render_tree3d96658f7bbe1b13aebb181eeaa75e32($item["childs"], $level + 1, array('prefix' => $new_prefix,));
} ?>

            <a class="category_level<?php $BT='';
$BU = $item;
if((is_array($BU) || ($BU instanceof ArrayAccess)) && isset($BU['level'])) { $BT = $BU['level'];
}else{ $BT = '';}
echo htmlspecialchars($BT,3); ?>" href='/product/products_category/<?php $BV='';
$BW = $item;
if((is_array($BW) || ($BW instanceof ArrayAccess)) && isset($BW['id'])) { $BV = $BW['id'];
}else{ $BV = '';}
echo htmlspecialchars($BV,3); ?>'><?php $BX='';
$BY = $item;
if((is_array($BY) || ($BY instanceof ArrayAccess)) && isset($BY['identifier'])) { $BX = $BY['identifier'];
}else{ $BX = '';}
echo htmlspecialchars($BX,3); ?></a>
        </li>
        <?php $BP++;
}
if(count($BO) == 0) { ?>

        Категории отсуствуют
        <?php }if($BP) {
 ?>


        
    </ul>
    <?php }

}

}
}
$macro_executor_class='MacroTemplateExecutor54dc6a9b01f39e17abdb840a8f2e1d79';