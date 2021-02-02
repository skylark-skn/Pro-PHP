<?php
    // user password should be hashed and saved to database.
    $userPassword = 'userPassword';
    $userPasswordHash = password_hash($userPassword, PASSWORD_DEFAULT, ['cost' => 12]);

    // password verification
    $result = password_verify($submittedPassword, $userPasswordHash);

?>