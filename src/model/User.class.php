<?php

class User
{
    protected $is_logged_in = false;

    function login()
    {
        {
            $this->setIsLoggedIn(true);
            return true;
        }

    }

    function logout()
    {
        $this->setIsLoggedIn(false);
    }
}