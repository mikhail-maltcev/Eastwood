<?php
require_once('limb/cms/settings/navigation.conf.php');

$conf[lmbCmsUserRoles :: ADMIN][0]['children'][] =
    array(
        "title" => "Категории",
        "url" => "/admin_category/",
        "icon" => "/shared/cms/images/icons/bricks.png",
    );

$conf[lmbCmsUserRoles :: ADMIN][0]['children'][] =
    array(
        "title" => "Товары",
        "url" => "/admin_product/",
        "icon" => "/shared/cms/images/icons/camera.png",
    );


