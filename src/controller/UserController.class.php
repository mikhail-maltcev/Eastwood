<?php
lmb_require('src/facebook.php');

class UserController extends lmbController
{

   function doLogin()
  {


  $config = array(
    'appId' => '443083905803662',
    'secret' => '097973e88404931eb5a360bcd15e8947',
  );

  $facebook = new Facebook($config);
  $user_id = $facebook->getUser();

   $user_profile = $facebook->api('/me');
                print_r($user_profile);
                echo ($user_profile['name']);

die();
  $this->toolkit->getSession()->set('user_name', $user_profile['name']);
  $this->flashAndRedirect('You were logged in!', '/');



   if($user_id) {
      // We have a user ID, so probably a logged in user.
      // If not, we'll get an exception, which we handle below.
      try {
        echo '<br /><a href="' . $facebook->getLogoutUrl() . '">logout</a>';
      } catch(FacebookApiException $e) {
        // If the user is logged out, you can have a 
        // user ID even though the access token is invalid.
        // In this case, we'll get an exception, so we'll
        // just ask the user to login again here.
        $login_url = $facebook->getLoginUrl( array(
                       'scope' => 'publish_stream'
                       )); 
        echo 'Please <a href="' . $login_url . '">login.(try)</a>';
        error_log($e->getType());
        error_log($e->getMessage());
      }   
    } else {

      // No user, so print a link for the user to login
      // To post to a user's wall, we need publish_stream permission
      // We'll use the current URL as the redirect_uri, so we don't
      // need to specify it here.
      $login_url = $facebook->getLoginUrl( array( 'scope' => 'publish_stream' ) );
      echo 'Please <a href="' . $login_url . '">login.(else)</a>';

    } 


  

    // $user = $this->toolkit->getUser();


    // $login = $this->request->get('login');
    // $password = $this->request->get('password');



    // if(!$user->login($login, $password))
    // {
    //   $this->addError('Login or password incorrect!');
    // }
    // else
    // {
    //   $this->toolkit->getSession()->set('user_id', $user->getId());/////тулкит
    //   $this->flashAndRedirect('You were logged in!', '/');
    // }




  }
}
?>