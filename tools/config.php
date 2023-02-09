<?php
    // Using Google API to Login with Google
    
    require_once '../tools/GoogleAPI/vendor/autoload.php';
    $gClient = new Google_Client();
    $gClient->setClientId("344716270254-96svc4flfi7tsfpuq3kii2nvimqb01nu.apps.googleusercontent.com");
    $gClient->setClientSecret("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");
    $gClient->setApplicationName("WeCare Nursing Home Google Login");
    $gClient->setRedirectUri("http://localhost/WeCare/tools/g-callback.php");
    $gClient->addScope(scope_or_scopes:"https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");
?>