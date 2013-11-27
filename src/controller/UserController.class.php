<?php
lmb_require('src/facebook.php');

class UserController extends lmbController
{
    var $config = array(
        'appId' => '443083905803662',
        'secret' => '097973e88404931eb5a360bcd15e8947',
    );

    function doLogin()
    {

        $facebook = new Facebook($this->config);
        $user_id = $facebook->getUser();

        if ($user_id) {
            try {
                $user_profile = $facebook->api('/me');
                $this->toolkit->getSession()->set('user_id', $user_profile['id']);
                $this->toolkit->getSession()->set('user_name', $user_profile['name']);
            } catch (FacebookApiException $e) {
                $login_url = $facebook->getLoginUrl(array(
                    'scope' => 'publish_stream'
                ));
                //echo 'Please <a href="' . $login_url . '">login.(try)</a>';
                error_log($e->getType());
                error_log($e->getMessage());
                $this->loginUrl=$login_url;
            }
        } else {
            $login_url = $facebook->getLoginUrl(array('scope' => 'publish_stream'));
            //echo 'Please <a href="' . $login_url . '">login.(else)</a>';
            $this->loginUrl=$login_url;
        }



    }

    function doLogout()
    {
        $this->toolkit->getSession()->remove('user_id');
        $facebook = new Facebook($this->config);
        $facebook->destroySession();
        session_destroy();
        $this->redirect('login');
    }
}

?>