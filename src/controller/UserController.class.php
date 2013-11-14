<?php

class UserController extends lmbController
{
  function doRegister()
  {
    $this->useForm('register_form');
    $this->setFormDatasource($this->request);

    if($this->request->hasPost())
    {

      $user_properties = $this->request->getPost(
          array('login', 'name', 'email', 'password', 'address')
        );

        $user = new User($user_properties);
        $user->trySave($this->error_list);

      $this->_validatePasswordField();

      if($this->error_list->isValid())
      {
        /*
          Авторизация нового пользователя. 
          О работе с объектом Toolkit будет более подробно рассказано дальше.
        */
        // $this->toolkit->getUser()->login($login, $password);
        // $this->toolkit->getSession()->set('user_id', $user->getId());

        $this->flashMessage('Thank you for your registration!');
        $this->toolkit->redirect('/');
      }
    }
  }

  function _validatePasswordField()
  {
    $this->validator->addRequiredRule('password');
    $this->validator->addRequiredRule('repeat_password');
    lmb_require('limb/validation/src/rule/lmbMatchRule.class.php');
    $this->validator->addRule(new lmbMatchRule('password', 'repeat_password'));
    $this->validator->validate($this->request);
  }
}
?>