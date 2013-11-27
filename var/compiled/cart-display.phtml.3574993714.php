<?php /* This file is generated from /usr/share/nginx/www/eastwood/template/cart/display.phtml*/?><?php
if(!class_exists('MacroTemplateExecutore443793ed804967374b013c56928c75a', false)){
require_once('limb/macro/src/compiler/lmbMacroTemplateExecutor.class.php');
require_once('limb/core/src/lmbArrayHelper.class.php');
class MacroTemplateExecutore443793ed804967374b013c56928c75a extends lmbMacroTemplateExecutor {
function render($args = array()) {
if($args) extract($args);
$this->_init();
 ?><?php  $this->title ='Your Cart'; ?>
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
      <img src="/images/logo.limb.gif"  width='384' height='46' alt='logo.limb' id='logo'/>
    </div>
  </div>

  <div id="center">

    <div id="wrapper" >

      <div id="container">
        <div id="content">
          <h1><?php echo htmlspecialchars($this->title,3); ?></h1>

          <?php $this->__staticInclude2('flash_box.phtml'); ?>


          <?php if(isset($this->__slot_handlers_content_zone)) {foreach($this->__slot_handlers_content_zone as $__slot_handler_content_zone) {call_user_func_array($__slot_handler_content_zone, array(array()));}}$this->__slotHandler77e9d1dbdb50605e661b04016feefdcf(array()); ?>

        </div>
      </div>

    <div id="sidebar">
      <div id="navigation">
        <ul>
          <li><a href="/product">Products</a></li>
          <li><a href="/cart">Your Cart</a></li>

          <?php  if($this->toolkit->getSession()->get('user_id')){ ?>
            <li><a href="/user/orders/">Your Orders</a></li>
          <?php  }else {?>
          <li><a href="/user/login/">Login please</a></li>

          <?php } ?>
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

<?php  if($item['is_error']){ ?><div class="error_border"><b><?php $K='';
$L = $item;
if((is_array($L) || ($L instanceof ArrayAccess)) && isset($L['message'])) { $K = $L['message'];
}else{ $K = '';}
echo htmlspecialchars($K,3); ?></b></div><?php  } ?>
<?php  if($item['is_message']){ ?><div class="border"><b><?php $M='';
$N = $item;
if((is_array($N) || ($N instanceof ArrayAccess)) && isset($N['message'])) { $M = $N['message'];
}else{ $M = '';}
echo htmlspecialchars($M,3); ?></b></div><?php  } ?>
<?php $G++;}if($G > 0) { ?>

<?php }
}

function __slotHandler77e9d1dbdb50605e661b04016feefdcf($O= array()) {
if($O) extract($O); ?>


<?php  if($this->cart->items_count) {?>
    <p>Your cart contains <?php $P='';
$Q = $this->cart;
if((is_array($Q) || ($Q instanceof ArrayAccess)) && isset($Q['items_count'])) { $P = $Q['items_count'];
}else{ $P = '';}
echo htmlspecialchars($P,3); ?> items.</p>

    <?php $R='';
$S = $this->cart;
if((is_array($S) || ($S instanceof ArrayAccess)) && isset($S['items'])) { $R = $S['items'];
}else{ $R = '';}
$V = 0;$X = $R;

if(!is_array($X) && !($X instanceof Iterator) && !($X instanceof IteratorAggregate)) {
$X = array();}
$W = $X;
foreach($W as $item) {$parity = (( ($V + 1) % 2) ? "odd" : "even");if($V == 0) { ?>

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

        <tr class='<?php echo htmlspecialchars($parity,3); ?>'>
            <td><?php $BC='';
$BD = $item;
if((is_array($BD) || ($BD instanceof ArrayAccess)) && isset($BD['product'])) { $BC = $BD['product'];
if((is_array($BC) || ($BC instanceof ArrayAccess)) && isset($BC['title'])) { $BC = $BC['title'];
}else{ $BC = '';}
}else{ $BC = '';}
echo htmlspecialchars($BC,3); ?></td>
            <td>$<?php $BE='';
$BF = $item;
if((is_array($BF) || ($BF instanceof ArrayAccess)) && isset($BF['price'])) { $BE = $BF['price'];
}else{ $BE = '';}
echo number_format($BE,2, '.',' '); ?></td>
            <td><?php $BG='';
$BH = $item;
if((is_array($BH) || ($BH instanceof ArrayAccess)) && isset($BH['quantity'])) { $BG = $BH['quantity'];
}else{ $BG = '';}
echo htmlspecialchars($BG,3); ?></td>
            <td>$<?php $BI='';
$BJ = $item;
if((is_array($BJ) || ($BJ instanceof ArrayAccess)) && isset($BJ['summ'])) { $BI = $BJ['summ'];
}else{ $BI = '';}
echo number_format($BI,2, '.', ' '); ?></td>
        </tr>
        <?php $V++;}if($V > 0) { ?>

    </table>
    <?php } ?>


    Total summ is : <b>$<?php $BK='';
$BL = $this->cart;
if((is_array($BL) || ($BL instanceof ArrayAccess)) && isset($BL['total_summ'])) { $BK = $BL['total_summ'];
}else{ $BK = '';}
echo number_format($BK,2, '.', ' '); ?></b>
    <br/>
    <a href="<?php $BN = array();
$BM = lmbArrayHelper :: explode(',',':', 'action:empty');
foreach($BM as $key => $value) $BN[trim($key)] = trim($value);
$BO = false;
echo lmbToolkit :: instance()->getRoutesUrl($BN, '', $BO);
 ?>">Empty cart</a><br/>
    <a href="<?php $BQ = array();
$BP = lmbArrayHelper :: explode(',',':', 'action:checkout');
foreach($BP as $key => $value) $BQ[trim($key)] = trim($value);
$BR = false;
echo lmbToolkit :: instance()->getRoutesUrl($BQ, '', $BR);
 ?>">Checkout</a>

<?php  } else { ?>
    You cart is empty at the moment!
<?php  } ?>
<?php 
}

function __staticInclude3($file) {
 ?><?php  if($this->toolkit->getSession()->get('user_id')) { ?>
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
    <?php $this->_render_treebc8cffdad90f446a80bf62a78bd29b8c($this->Tree, 0,array('kids_prop' => 'childs','prefix' => '1',));
 ?>


</dd><?php 
}

function _render_treebc8cffdad90f446a80bf62a78bd29b8c($BY,$level,$CA= array()) {
if($CA) extract($CA);$BZ=0;
foreach($BY as $item) {
$counter = $BZ+1;
if(!$BZ) {
 ?>

    <ul>
        <?php }
 ?>

        <li>

            <?php  $new_prefix = $prefix . ".+++" . $counter;?> <?php if(isset($item["childs"])) {$this->_render_treebc8cffdad90f446a80bf62a78bd29b8c($item["childs"], $level + 1, array('prefix' => $new_prefix,));
} ?>


<!--            <a class="category_level<?php $CD='';
$CE = $item;
if((is_array($CE) || ($CE instanceof ArrayAccess)) && isset($CE['level'])) { $CD = $CE['level'];
}else{ $CD = '';}
echo htmlspecialchars($CD,3); ?>" href='<?php $CF='';
$CG = $item;
if((is_array($CG) || ($CG instanceof ArrayAccess)) && isset($CG['id'])) { $CF = $CG['id'];
}else{ $CF = '';}
$CI = array();
$CH = lmbArrayHelper :: explode(',',':', sprintf('action:products_category,id:%s',$CF));
foreach($CH as $key => $value) $CI[trim($key)] = trim($value);
$CJ = false;
echo lmbToolkit :: instance()->getRoutesUrl($CI, '', $CJ);
 ?>'><?php $CK='';
$CL = $item;
if((is_array($CL) || ($CL instanceof ArrayAccess)) && isset($CL['identifier'])) { $CK = $CL['identifier'];
}else{ $CK = '';}
echo htmlspecialchars($CK,3); ?></a>-->
            <a class="category_level<?php $CM='';
$CN = $item;
if((is_array($CN) || ($CN instanceof ArrayAccess)) && isset($CN['level'])) { $CM = $CN['level'];
}else{ $CM = '';}
echo htmlspecialchars($CM,3); ?>" href='/product/products_category/<?php $CO='';
$CP = $item;
if((is_array($CP) || ($CP instanceof ArrayAccess)) && isset($CP['id'])) { $CO = $CP['id'];
}else{ $CO = '';}
echo htmlspecialchars($CO,3); ?>'><?php $CQ='';
$CR = $item;
if((is_array($CR) || ($CR instanceof ArrayAccess)) && isset($CR['identifier'])) { $CQ = $CR['identifier'];
}else{ $CQ = '';}
echo htmlspecialchars($CQ,3); ?></a>

        </li>
        <?php $BZ++;
}
if(count($BY) == 0) { ?>

        Категории отсуствуют
        <?php }if($BZ) {
 ?>


        
    </ul>
    <?php }

}

}
}
$macro_executor_class='MacroTemplateExecutore443793ed804967374b013c56928c75a';