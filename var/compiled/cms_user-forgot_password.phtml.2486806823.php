<?php /* This file is generated from /usr/share/nginx/www/eastwood/lib//limb/cms/template/cms_user/forgot_password.phtml*/?><?php
if(!class_exists('MacroTemplateExecutor1386d25ea3c2276fdf5ead3d27158f2e', false)){
require_once('limb/macro/src/compiler/lmbMacroTemplateExecutor.class.php');
class MacroTemplateExecutor1386d25ea3c2276fdf5ead3d27158f2e extends lmbMacroTemplateExecutor {
function render($args = array()) {
if($args) extract($args);
$this->_init();
 ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!-- Powered by LIMB | http://www.limb-project.com/ -->
<!-- Designed by BIT | http://www.bit-creative.com/ -->
<html>
<head>
  <title>Панель управления :: Восстановление пароля</title>
  <meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
  <link rel=stylesheet type="text/css" href="/shared/cms/styles/cp.css" />
  <link rel=stylesheet type="text/css" href="/shared/cms/styles/cp.css" />
  <!--[if IE]><link rel="stylesheet" type="text/css" href="/shared/cms/styles/cp_ie.css" /><![endif]-->
  <!--[if lt IE 7]><link rel="stylesheet" type="text/css" href="/shared/cms/styles/cp_ie6.css" /><![endif]-->
</head>
<body id='login_form'>

  <div id="login_form_wrapper">

    <form method="post" id='password_form' runat='server'>

        <div id="logo_limb">
          <a href="http://limb-project.com"><img src="/shared/cms/images/logo.limb.png" alt='LIMB'/></a>
        </div>

        <div id="form_body">

          <h1>Восстановление пароля</h1>

          <dl class='field'>
            <dt><label for='email'>Email:</label></dt>
            <dd>
              <input type="text" name="email" id="email" value="" title="Email" class='input'/>
              <input type='submit' class='button' name='submitted' value="OK" />
            </dd>
          </dl>

          <a href="/user/login" class="forgot_password_link">Отмена</a>

          <div id="forgot_password_comment">После отправки данной формы вы получите письмо с новым паролем и ссылкой для его активации</div>

          <?php $this->__staticInclude1('_admin/notify_zone.phtml'); ?>

        </div>

    </form>

    <div class='shadow_bottom'><div class='left'></div><div class='center'></div><div class='right'></div></div>
    <div class='shadow_left'><div class='top'></div><div class='center'></div></div>
    <div class='shadow_right'><div class='top'></div><div class='center'></div></div>

  </div>

</body>
</html>

<?php 
}

function __staticInclude1($file) {
 ?>


<?php 
  $flashbox = $this->toolkit->getFlashBox();
  if($flashbox->hasErrors() || $flashbox->hasMessages()){ ?>
    <div id="flashbox" class="flashbox">
      <ul>
        <?php $A='';
$B = $flashbox;
$A = $B->getErrors();
$this->_templatebbef509a5efde3ca3d19b89eccc0cad4(array('template' => 'flashbox','messages' => $A,'box_class' => 'error',)); ?>

        <?php $L='';
$M = $flashbox;
$L = $M->getMessages();
$this->_template15cdcf7a92d63b86a6c678b0e74af735(array('template' => 'flashbox','messages' => $L,'box_class' => 'message',)); ?>

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

function _templatebbef509a5efde3ca3d19b89eccc0cad4($C= array()) {
if($C) extract($C); ?>

  <?php $F = 0;$H = $messages;

if(!is_array($H) && !($H instanceof Iterator) && !($H instanceof IteratorAggregate)) {
$H = array();}
$G = $H;
foreach($G as $item) {if($F == 0) { ?>

    <?php } ?>

      <li><?php echo htmlspecialchars($item,3); ?></li>
    <?php $F++;}if($F > 0) { ?>

  <?php } ?>

<?php 
}

function _template15cdcf7a92d63b86a6c678b0e74af735($N= array()) {
if($N) extract($N); ?>

  <?php $Q = 0;$S = $messages;

if(!is_array($S) && !($S instanceof Iterator) && !($S instanceof IteratorAggregate)) {
$S = array();}
$R = $S;
foreach($R as $item) {if($Q == 0) { ?>

    <?php } ?>

      <li><?php echo htmlspecialchars($item,3); ?></li>
    <?php $Q++;}if($Q > 0) { ?>

  <?php } ?>

<?php 
}

}
}
$macro_executor_class='MacroTemplateExecutor1386d25ea3c2276fdf5ead3d27158f2e';