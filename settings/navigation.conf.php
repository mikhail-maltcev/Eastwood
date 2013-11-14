<?php
require_once('limb/cms/settings/navigation.conf.php');
$conf[lmbCmsUserRoles :: ADMIN][0]['children'][] =
  array(
    "title" => "Users",
    "url" => "/admin_user/",
    "icon" => "/shared/cms/images/icons/user.png",
);