<?php
    if(empty($_SESSION['token'])) {
        $_SESSION['token'] = bin2hex(random_bytes(32));
        $_SESSION['tokenExpire'] = time() + 3600; // Token expiration = 3600 seconds
    }
?>