<?php

class User extends lmbActiveRecord 
{
  protected $password;

  protected function _createValidator()
  {
    $validator = new lmbValidator();

    $validator->addRequiredRule('login');
    $validator->addRequiredRule('email');
    $validator->addRequiredRule('name');

    lmb_require('src/validation/UserUniqueFieldRule.class.php');
    $validator->addRule(new UserUniqueFieldRule('login', $this));
    $validator->addRule(new UserUniqueFieldRule('email', $this));    

    lmb_require('limb/validation/src/rule/lmbEmailRule.class.php');
    $validator->addRule(new lmbEmailRule('email'));
    return $validator;
  }

  protected function _onBeforeSave()
  {
    $this->_generatePassword();
  }

  protected function _generatePassword()
  {
    if($this->password)
      $this->setHashedPassword(self :: cryptPassword($this->password));
  }

  static function cryptPassword($password)
  {
    return md5($password);
  }

}