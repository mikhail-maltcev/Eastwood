<?php /* This file is generated from /usr/share/nginx/www/eastwood/template/product/products_category.phtml*/?><?php
if(!class_exists('MacroTemplateExecutoref5107a397fa2d8b2f63af90145923b4', false)){
require_once('limb/macro/src/compiler/lmbMacroTemplateExecutor.class.php');
require_once('limb/core/src/lmbArrayHelper.class.php');
class MacroTemplateExecutoref5107a397fa2d8b2f63af90145923b4 extends lmbMacroTemplateExecutor {
function render($args = array()) {
if($args) extract($args);
$this->_init();
$this->__staticInclude1('front_page_layout.phtml', 'content_zone', 'content_zone', 'front_page_layout.phtml'); ?>

<?php 
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
      <div id="limb_links"><a href="http://limb-project.com">limb-project.com</a>&nbsp;|&nbsp;<a href="http://bits.limb-project.com">bits.limb-project.com</a></div>
    </div>
  </div>

  <div id="center">

    <div id="wrapper" >

      <div id="container">
        <div id="content">
          <h1><?php echo htmlspecialchars($this->title,3); ?></h1>

          <?php $this->__staticInclude2('flash_box.phtml'); ?>


          <?php if(isset($this->__slot_handlers_content_zone)) {foreach($this->__slot_handlers_content_zone as $__slot_handler_content_zone) {call_user_func_array($__slot_handler_content_zone, array(array()));}}$this->__slotHandlerb7f3371d7e62984aa2d27fc974adb78b(array()); ?>

        </div>
      </div>

    <div id="sidebar">
      <div id="navigation">
        <ul>
          <li><a href="product">Products</a></li>
          <li><a href="cart">Your Cart</a></li>

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
            <?php $this->__staticInclude4('user/include/category.phtml'); ?>

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

function __slotHandlerb7f3371d7e62984aa2d27fc974adb78b($O= array()) {
if($O) extract($O); ?>

  <h1>Product</h1>  
  <?php $T = 0;$V = $this->products;

if(!is_array($V) && !($V instanceof Iterator) && !($V instanceof IteratorAggregate)) {
$V = array();}
$U = $V;
foreach($U as $item) {if($T == 0) { ?>


<div class="border_table">
<table  cellspacing="1" class="sortable"><thead><tr>
    <td align="center" class="head">Name </td>
    <td align="center" class="head">Price</td>
    <td align="center" class="head">available</td>
    <td align="center" class="head">Cart</td>
</tr></thead>
<tbody>


<?php } ?>

<tr>
    <td class="bg1">&nbsp;<?php $X='';
$Y = $item;
if((is_array($Y) || ($Y instanceof ArrayAccess)) && isset($Y['title'])) { $X = $Y['title'];
}else{ $X = '';}
echo htmlspecialchars($X,3); ?></td>
    <td align="center" class="bg1"><?php $Z='';
$BB = $item;
if((is_array($BB) || ($BB instanceof ArrayAccess)) && isset($BB['price'])) { $Z = $BB['price'];
}else{ $Z = '';}
echo htmlspecialchars($Z,3); ?></td>
    <td align="center" class="bg1"><?php $BC='';
$BD = $item;
if((is_array($BD) || ($BD instanceof ArrayAccess)) && isset($BD['is_available'])) { $BC = $BD['is_available'];
}else{ $BC = '';}
echo htmlspecialchars($BC,3); ?></td>
    <td align="center" class="bg1"><a href="/reserve_view.html"><img border="0" title="Заказать" alt="заказ" src="/im/cart.png"></a></td>

</tr>







    <?php $T++;}if($T > 0) { ?>



</tbody><tfoot></tfoot></table>
    </div>
  <?php } ?>

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

    <?php $this->_render_treebc14c5e059a73bc8354ceaaf7a545dd1($this->Tree, 0,array('kids_prop' => 'childs','prefix' => '1',));
 ?>


</dd><?php 
}

function _render_treebc14c5e059a73bc8354ceaaf7a545dd1($BK,$level,$BM= array()) {
if($BM) extract($BM);$BL=0;
foreach($BK as $item) {
$counter = $BL+1;
if(!$BL) {
 ?>

    <ul>
        <?php }
 ?>

        <li>

            <?php  $new_prefix = $prefix . ".+++" . $counter;?> <?php if(isset($item["childs"])) {$this->_render_treebc14c5e059a73bc8354ceaaf7a545dd1($item["childs"], $level + 1, array('prefix' => $new_prefix,));
} ?>


            <a class="category_level<?php $BP='';
$BQ = $item;
if((is_array($BQ) || ($BQ instanceof ArrayAccess)) && isset($BQ['level'])) { $BP = $BQ['level'];
}else{ $BP = '';}
echo htmlspecialchars($BP,3); ?>" href='<?php $BR='';
$BS = $item;
if((is_array($BS) || ($BS instanceof ArrayAccess)) && isset($BS['id'])) { $BR = $BS['id'];
}else{ $BR = '';}
$BU = array();
$BT = lmbArrayHelper :: explode(',',':', sprintf('action:products_category,id:%s',$BR));
foreach($BT as $key => $value) $BU[trim($key)] = trim($value);
$BV = false;
echo lmbToolkit :: instance()->getRoutesUrl($BU, '', $BV);
 ?>'><?php $BW='';
$BX = $item;
if((is_array($BX) || ($BX instanceof ArrayAccess)) && isset($BX['identifier'])) { $BW = $BX['identifier'];
}else{ $BW = '';}
echo htmlspecialchars($BW,3); ?></a>


        </li>
        <?php $BL++;
}
if(count($BK) == 0) { ?>

        Комментарии отсуствуют
        <?php }if($BL) {
 ?>





        
    </ul>
    <?php }

}

}
}
$macro_executor_class='MacroTemplateExecutoref5107a397fa2d8b2f63af90145923b4';