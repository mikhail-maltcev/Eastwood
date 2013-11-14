<?php

class BaseShopController extends lmbController
{
  function performAction()
  {
    $this->view->set('user', $this->toolkit->getUser());
    return parent :: performAction();
  }
}
?>