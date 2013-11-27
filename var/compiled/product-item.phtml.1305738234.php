<?php /* This file is generated from /usr/share/nginx/www/eastwood/template/product/item.phtml*/?><?php
if(!class_exists('MacroTemplateExecutora6cab0358161771fc412800f74f9d9b8', false)){
require_once('limb/macro/src/compiler/lmbMacroTemplateExecutor.class.php');
class MacroTemplateExecutora6cab0358161771fc412800f74f9d9b8 extends lmbMacroTemplateExecutor {
function render($args = array()) {
if($args) extract($args);
$this->_init();
$this->__staticInclude1('front_page_layout.phtml', 'content_zone', 'content_zone', 'front_page_layout.phtml');
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
      <img src="http://bits.limb-project.com/shop/images/logo.limb.gif"  width='384' height='46' alt='logo.limb' id='logo'/>
      <div id="limb_links"><a href="http://limb-project.com">limb-project.com</a>&nbsp;|&nbsp;<a href="http://bits.limb-project.com">bits.limb-project.com</a></div>
    </div>
  </div>

  <div id="center">

    <div id="wrapper" >

      <div id="container">
        <div id="content">
          <h1><?php echo htmlspecialchars($this->title,3); ?></h1>

          <?php $this->__staticInclude2('flash_box.phtml'); ?>


          <?php if(isset($this->__slot_handlers_content_zone)) {foreach($this->__slot_handlers_content_zone as $__slot_handler_content_zone) {call_user_func_array($__slot_handler_content_zone, array(array()));}}$this->__slotHandler251b041493091119cf0abfb81e5f8b3e(array()); ?>

        </div>
      </div>

    <div id="sidebar">
      <div id="navigation">
        <ul>
          <li><a href="product">Products</a></li>
          <li><a href="cart">Your Cart</a></li>
          <?php  if($this->toolkit->getUser()->is_logged_in) { ?>
            <li><a href="/user/orders/">Your Orders</a></li>
          <?php  }else {?>
          <li><a href="/user/login/">Login please</a></li>

          <?php } ?>
        </ul>
      </div>

      <dl id="profile">
        <dt>Profile</dt>
        <?php $BE='';
$BF = $this->toolkit;
if((is_array($BF) || ($BF instanceof ArrayAccess)) && isset($BF['user'])) { $BE = $BF['user'];
}else{ $BE = '';}
$this->__staticInclude3('user/include/profile_box.phtml', $BE); ?>

      </dl>

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

function __slotHandler251b041493091119cf0abfb81e5f8b3e($O= array()) {
if($O) extract($O); ?>

  <h1>Product #<?php $P='';
$Q = $this->item;
if((is_array($Q) || ($Q instanceof ArrayAccess)) && isset($Q['id'])) { $P = $Q['id'];
}else{ $P = '';}
echo htmlspecialchars($P,3); ?></h1>
  <p><a href="/product/">к списку</a></p>
  <ul>
    <li>id: <?php $R='';
$S = $this->item;
if((is_array($S) || ($S instanceof ArrayAccess)) && isset($S['id'])) { $R = $S['id'];
}else{ $R = '';}
echo htmlspecialchars($R,3); ?></li>
  
    <li>title: <?php $T='';
$U = $this->item;
if((is_array($U) || ($U instanceof ArrayAccess)) && isset($U['title'])) { $T = $U['title'];
}else{ $T = '';}
echo htmlspecialchars($T,3); ?></li>
  
    <li>description: <?php $V='';
$W = $this->item;
if((is_array($W) || ($W instanceof ArrayAccess)) && isset($W['description'])) { $V = $W['description'];
}else{ $V = '';}
echo $V; ?></li>
  
    <li>is_available: <?php $X='';
$Y = $this->item;
if((is_array($Y) || ($Y instanceof ArrayAccess)) && isset($Y['is_available'])) { $X = $Y['is_available'];
}else{ $X = '';}
echo htmlspecialchars($X,3); ?></li>
  
    <li>price: <?php $Z='';
$BB = $this->item;
if((is_array($BB) || ($BB instanceof ArrayAccess)) && isset($BB['price'])) { $Z = $BB['price'];
}else{ $Z = '';}
echo htmlspecialchars($Z,3); ?></li>
  
    <li>image_name: <?php $BC='';
$BD = $this->item;
if((is_array($BD) || ($BD instanceof ArrayAccess)) && isset($BD['image_name'])) { $BC = $BD['image_name'];
}else{ $BC = '';}
echo htmlspecialchars($BC,3); ?></li>
  </ul>
<?php 
}

function __staticInclude3($file,$user) {
 ?><?php  if($user->is_logged_in) { ?>
<dd>
  User: <?php $BG='';
$BH = $user;
if((is_array($BH) || ($BH instanceof ArrayAccess)) && isset($BH['name'])) { $BG = $BH['name'];
}else{ $BG = '';}
echo htmlspecialchars($BG,3); ?><br/>
  Login: <?php $BI='';
$BJ = $user;
if((is_array($BJ) || ($BJ instanceof ArrayAccess)) && isset($BJ['login'])) { $BI = $BJ['login'];
}else{ $BI = '';}
echo htmlspecialchars($BI,3); ?><br/>
  Email: <?php $BK='';
$BL = $user;
if((is_array($BL) || ($BL instanceof ArrayAccess)) && isset($BL['email'])) { $BK = $BL['email'];
}else{ $BK = '';}
echo htmlspecialchars($BK,3); ?><br/>
  <a href="/user/edit/">edit</a>
  <a href="/user/logout/">logout</a>
</dd>
<?php  } else {?>
<dd>
  <form method="POST" id='login_form' action='/user/login/'>

    <label for='login'>Login:</label><br/>
    <input type="text" name="login" id="login" title="Login" class='input'/><br/>

    <label for='passwd'>Password:</label><br/>
    <input type="text" name="password" id="password" type="password" title="Password" class='input'/><br/>

    <p>Use <b>admin</b>/<b>secret</b> to enter in <a href="/admin/">administration panel</a>.</p>

    <input type='submit' name='submitted' value="Submit"/><br/>
  </form>
  <a href="/user/register/">Register</a>
</dd>
<?php  } ?><?php 
}

}
}
$macro_executor_class='MacroTemplateExecutora6cab0358161771fc412800f74f9d9b8';