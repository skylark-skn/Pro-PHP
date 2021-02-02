<?php
    session_start();

    if(!empty($_SESSION['token'] && time() > $_SESSION['tokenExpire'])) {
        unset($_SESSION['token']);
        unset($_SESSION['tokenExpire']);
    }

    if(isset($_SESSION['token']) && $_POST['token'] == $_SESSION['token']) {
        echo 'OK';
        unset($_SESSION['token']);
        unset($_SESSION['tokenExpire']);
    } else {
        die('Invalid Token or Token Expired.');
    }
?>