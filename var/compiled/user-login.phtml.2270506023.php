<?php /* This file is generated from /usr/share/nginx/www/eastwood/template/user/login.phtml*/?><?php
if(!class_exists('MacroTemplateExecutorcb629575e5cc248400b6aa8bd2aa705c', false)){
require_once('limb/macro/src/compiler/lmbMacroTemplateExecutor.class.php');
require_once('limb/macro/src/tags/form/lmbMacroFormWidget.class.php');
require_once('limb/macro/src/tags/form/lmbMacroInputWidget.class.php');
class MacroTemplateExecutorcb629575e5cc248400b6aa8bd2aa705c extends lmbMacroTemplateExecutor {

function _init() {
$this->form_login_form = new lmbMacroFormWidget('login_form');
$this->form_login_form->setAttributes(array (
  'method' => 'POST',
  'id' => 'login_form',
));
$this->input_id001 = new lmbMacroInputWidget('login');
$this->input_id001->setAttributes(array (
  'type' => 'text',
  'name' => 'login',
  'id' => 'login',
  'title' => 'Login',
));
$this->input_id001->setForm($this->form_login_form);
$this->form_login_form->addChild($this->input_id001);
$this->input_id002 = new lmbMacroFormElementWidget('password');
$this->input_id002->setAttributes(array (
  'type' => 'password',
  'name' => 'password',
  'id' => 'password',
  'title' => 'Password',
));
$this->input_id002->setForm($this->form_login_form);
$this->form_login_form->addChild($this->input_id002);

}
function render($args = array()) {
if($args) extract($args);
$this->_init();
 ?><?php  $this->title='Login'; ?>
<?php $this->__staticInclude1('front_page_layout.phtml', 'content_zone', 'front_page_layout.phtml');
}

function __staticInclude1($file,$into,$file) {
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


          <?php if(isset($this->__slot_handlers_content_zone)) {foreach($this->__slot_handlers_content_zone as $__slot_handler_content_zone) {call_user_func_array($__slot_handler_content_zone, array(array()));}}$this->__slotHandler58a18b407424edd45e7d51d2b3a04049(array()); ?>

        </div>
      </div>

    <div id="sidebar">
      <div id="navigation">
        <ul>
          <li><a href="product">Products</a></li>
          <li><a href="cart">Your Cart</a></li>
          <?php  if($this->toolkit->getUser()->is_logged_in) { ?>
            <li><a href="/user/orders/">Your Orders</a></li>
          <?php  } ?>
        </ul>
      </div>

      <dl id="profile">
        <dt>Profile</dt>
        <?php $BC='';
$BD = $this->toolkit;
if((is_array($BD) || ($BD instanceof ArrayAccess)) && isset($BD['user'])) { $BC = $BD['user'];
}else{ $BC = '';}
$this->__staticInclude4('user/include/profile_box.phtml', $BC); ?>

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

function __slotHandler58a18b407424edd45e7d51d2b3a04049($O= array()) {
if($O) extract($O); ?>

<?php if(isset($this->form_login_form_datasource))$this->form_login_form->setDatasource($this->form_login_form_datasource);
if(isset($this->form_login_form_error_list))$this->form_login_form->setErrorList($this->form_login_form_error_list);
 ?><form<?php $this->form_login_form->renderAttributes(); ?>>

  <?php $this->__staticInclude3('_admin/form_errors.phtml'); ?>


  <div class="field">
  <label for='login'>Login:</label>
  <input<?php $this->input_id001->renderAttributes(); ?> />
  </div>

  <div class="field">
  <label for='passwd'>Password:</label>
  <input<?php $this->input_id002->renderAttributes(); ?> />
  </div>

  <input type='submit' class='button' name='submitted' value="Submit" class='button'/>

</form>
<?php 
}

function __staticInclude3($file) {
$fields_errors = $this->form_login_form->getErrorList();
 ?>

<?php $V = 0;$X = $fields_errors;

if(!is_array($X) && !($X instanceof Iterator) && !($X instanceof IteratorAggregate)) {
$X = array();}
$W = $X;
foreach($W as $error) {if($V == 0) { ?>
  <div class="message_error">
    <b class='title'><?php 
    echo lmb_i18n('Fields with errors','cms');
         ?></b>
    <ol>
      <?php } ?>
        <li><font color="red"><?php $Z='';
$BB = $error;
if((is_array($BB) || ($BB instanceof ArrayAccess)) && isset($BB['message'])) { $Z = $BB['message'];
}else{ $Z = '';}
echo htmlspecialchars($Z,3); ?></font></li>
      <?php $V++;}if($V > 0) { ?>
    </ol>
  </div>
<?php }
}

function __staticInclude4($file,$user) {
 ?><?php  if($user->is_logged_in) { ?>
<dd>
  User: <?php $BE='';
$BF = $user;
if((is_array($BF) || ($BF instanceof ArrayAccess)) && isset($BF['name'])) { $BE = $BF['name'];
}else{ $BE = '';}
echo htmlspecialchars($BE,3); ?><br/>
  Login: <?php $BG='';
$BH = $user;
if((is_array($BH) || ($BH instanceof ArrayAccess)) && isset($BH['login'])) { $BG = $BH['login'];
}else{ $BG = '';}
echo htmlspecialchars($BG,3); ?><br/>
  Email: <?php $BI='';
$BJ = $user;
if((is_array($BJ) || ($BJ instanceof ArrayAccess)) && isset($BJ['email'])) { $BI = $BJ['email'];
}else{ $BI = '';}
echo htmlspecialchars($BI,3); ?><br/>
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
$macro_executor_class='MacroTemplateExecutorcb629575e5cc248400b6aa8bd2aa705c';