<?php /* This file is generated from /usr/share/nginx/www/eastwood/template/product/about_product.phtml*/?><?php
if(!class_exists('MacroTemplateExecutorde2c22dce57852b820ada42e30bdfad2', false)){
require_once('limb/macro/src/compiler/lmbMacroTemplateExecutor.class.php');
require_once('limb/core/src/lmbArrayHelper.class.php');
class MacroTemplateExecutorde2c22dce57852b820ada42e30bdfad2 extends lmbMacroTemplateExecutor {
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


          <?php if(isset($this->__slot_handlers_content_zone)) {foreach($this->__slot_handlers_content_zone as $__slot_handler_content_zone) {call_user_func_array($__slot_handler_content_zone, array(array()));}}$this->__slotHandler124062f4b711e38d93b9490fd01c2366(array()); ?>

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

function __slotHandler124062f4b711e38d93b9490fd01c2366($O= array()) {
if($O) extract($O); ?>

<h1>Information about Product</h1>



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
    <?php $this->_render_tree03b88a19b38b39cd4c4cec76319a77fa($this->Tree, 0,array('kids_prop' => 'childs','prefix' => '1',));
 ?>


</dd><?php 
}

function _render_tree03b88a19b38b39cd4c4cec76319a77fa($V,$level,$X= array()) {
if($X) extract($X);$W=0;
foreach($V as $item) {
$counter = $W+1;
if(!$W) {
 ?>

    <ul>
        <?php }
 ?>

        <li>

            <?php  $new_prefix = $prefix . ".+++" . $counter;?> <?php if(isset($item["childs"])) {$this->_render_tree03b88a19b38b39cd4c4cec76319a77fa($item["childs"], $level + 1, array('prefix' => $new_prefix,));
} ?>


            <a class="category_level<?php $BB='';
$BC = $item;
if((is_array($BC) || ($BC instanceof ArrayAccess)) && isset($BC['level'])) { $BB = $BC['level'];
}else{ $BB = '';}
echo htmlspecialchars($BB,3); ?>" href='<?php $BD='';
$BE = $item;
if((is_array($BE) || ($BE instanceof ArrayAccess)) && isset($BE['id'])) { $BD = $BE['id'];
}else{ $BD = '';}
$BG = array();
$BF = lmbArrayHelper :: explode(',',':', sprintf('action:products_category,id:%s',$BD));
foreach($BF as $key => $value) $BG[trim($key)] = trim($value);
$BH = false;
echo lmbToolkit :: instance()->getRoutesUrl($BG, '', $BH);
 ?>'><?php $BI='';
$BJ = $item;
if((is_array($BJ) || ($BJ instanceof ArrayAccess)) && isset($BJ['identifier'])) { $BI = $BJ['identifier'];
}else{ $BI = '';}
echo htmlspecialchars($BI,3); ?></a>

        </li>
        <?php $W++;
}
if(count($V) == 0) { ?>

        Категории отсуствуют
        <?php }if($W) {
 ?>


        
    </ul>
    <?php }

}

}
}
$macro_executor_class='MacroTemplateExecutorde2c22dce57852b820ada42e30bdfad2';