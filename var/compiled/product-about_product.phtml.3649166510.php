<?php /* This file is generated from /usr/share/nginx/www/eastwood/template/product/about_product.phtml*/?><?php
if(!class_exists('MacroTemplateExecutorb38969e0754113ede94e9bdafa39208c', false)){
require_once('limb/macro/src/compiler/lmbMacroTemplateExecutor.class.php');
require_once('limb/core/src/lmbArrayHelper.class.php');
class MacroTemplateExecutorb38969e0754113ede94e9bdafa39208c extends lmbMacroTemplateExecutor {
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
    </div>
  </div>

  <div id="center">

    <div id="wrapper" >

      <div id="container">
        <div id="content">
          <h1><?php echo htmlspecialchars($this->title,3); ?></h1>

          <?php $this->__staticInclude2('flash_box.phtml'); ?>


          <?php if(isset($this->__slot_handlers_content_zone)) {foreach($this->__slot_handlers_content_zone as $__slot_handler_content_zone) {call_user_func_array($__slot_handler_content_zone, array(array()));}}$this->__slotHandler7a2550d559212e28ecfbc9f4498dc4a9(array()); ?>

        </div>
      </div>

    <div id="sidebar">
      <div id="navigation">
        <ul>
          <li><a href="/product">Products</a></li>
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

function __slotHandler7a2550d559212e28ecfbc9f4498dc4a9($O= array()) {
if($O) extract($O); ?>

<h1><?php $P='';
$Q = $this->product;
$P = $Q->getTitle();
echo htmlspecialchars($P,3); ?></h1>
<table>
    <tr>
        <td><img src="/product_images/<?php $R='';
$S = $this->product;
$R = $S->getImageName();
echo htmlspecialchars($R,3); ?>" width="300px"></td>
        <td>
            <p>Цена:</p><h1><?php $T='';
$U = $this->product;
$T = $U->getPrice();
echo htmlspecialchars($T,3); ?> Руб.</h1>


            <p><?php $V='';
$W = $this->product;
$V = $W->getIsAvailable()==1;
if($V) {
 ?>Товар сейчас есть на складе<?php } else {
 ?>Товар на складе отсуствует<?php }
 ?></p>
        </td>
    </tr>
</table>
<b>Характеристики:</b>

<?php $BC = 0;$BE = $this->properties;

if(!is_array($BE) && !($BE instanceof Iterator) && !($BE instanceof IteratorAggregate)) {
$BE = array();}
$BD = $BE;
foreach($BD as $item) {if($BC == 0) { ?>


<?php } ?>




<p><?php $BG='';
$BH = $item;
$BG = $BH->getProperty();
$BG = $BG->getPropertyName();
echo htmlspecialchars($BG,3); ?>  :   <?php $BI='';
$BJ = $item;
if((is_array($BJ) || ($BJ instanceof ArrayAccess)) && isset($BJ['value'])) { $BI = $BJ['value'];
}else{ $BI = '';}
echo htmlspecialchars($BI,3); ?></p>


<?php $BC++;}if($BC > 0) { ?>


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
    <?php $this->_render_tree20f969aa6a38244b86d60a5785ede71e($this->Tree, 0,array('kids_prop' => 'childs','prefix' => '1',));
 ?>


</dd><?php 
}

function _render_tree20f969aa6a38244b86d60a5785ede71e($BQ,$level,$BS= array()) {
if($BS) extract($BS);$BR=0;
foreach($BQ as $item) {
$counter = $BR+1;
if(!$BR) {
 ?>

    <ul>
        <?php }
 ?>

        <li>

            <?php  $new_prefix = $prefix . ".+++" . $counter;?> <?php if(isset($item["childs"])) {$this->_render_tree20f969aa6a38244b86d60a5785ede71e($item["childs"], $level + 1, array('prefix' => $new_prefix,));
} ?>


            <a class="category_level<?php $BV='';
$BW = $item;
if((is_array($BW) || ($BW instanceof ArrayAccess)) && isset($BW['level'])) { $BV = $BW['level'];
}else{ $BV = '';}
echo htmlspecialchars($BV,3); ?>" href='<?php $BX='';
$BY = $item;
if((is_array($BY) || ($BY instanceof ArrayAccess)) && isset($BY['id'])) { $BX = $BY['id'];
}else{ $BX = '';}
$CA = array();
$BZ = lmbArrayHelper :: explode(',',':', sprintf('action:products_category,id:%s',$BX));
foreach($BZ as $key => $value) $CA[trim($key)] = trim($value);
$CB = false;
echo lmbToolkit :: instance()->getRoutesUrl($CA, '', $CB);
 ?>'><?php $CC='';
$CD = $item;
if((is_array($CD) || ($CD instanceof ArrayAccess)) && isset($CD['identifier'])) { $CC = $CD['identifier'];
}else{ $CC = '';}
echo htmlspecialchars($CC,3); ?></a>

        </li>
        <?php $BR++;
}
if(count($BQ) == 0) { ?>

        Категории отсуствуют
        <?php }if($BR) {
 ?>


        
    </ul>
    <?php }

}

}
}
$macro_executor_class='MacroTemplateExecutorb38969e0754113ede94e9bdafa39208c';