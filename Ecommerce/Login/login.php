<?php

require_once "Facebook/User.php";
require_once "Google/User.php";

use Google\User as GoogleUser;
use Facebook\Login\User as FacebookUser;


$type = 'Google';

if ($type == 'Google'){
    $googleUser = new GoogleUser();

    return $googleUser->login("saf", 222);

} else {
    $facebookUser = new FacebookUser();

    return $facebookUser->login("saf", 222);

}

