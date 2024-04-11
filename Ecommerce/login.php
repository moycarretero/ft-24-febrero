<?php

require_once "vendor/autoload.php";

use Upgrade\Ecommerce\Login\Facebook\User as FacebookUser;
use LoginGoogle\User as GoogleUser;


$type = 'Google';

if ($type == 'Google'){
    $googleUser = new GoogleUser();

    echo "Usuario logado con Google";

    return $googleUser->login("saf", 222);

} else {
    $facebookUser = new FacebookUser();

    return $facebookUser->login("saf", 222);

}

