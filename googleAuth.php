<?php
require_once ('./vendor/autoload.php');
        $google_client = new Google_Client();
        $google_client->setClientid('1052952968021-86k2ats12kqvakoeub40b2pa6cni4c55.apps.googleusercontent.com');
        $google_client->setClientSecret('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');
        $google_client->setRedirectUri('http://localhost/youtube_clone/index.php');
        $google_client->addScope('email');
        $google_client->addScope('profile');
?>