<?php
    session_start();

    require_once('db_connect.php');
    $stmt = $db->query('SELECT * FROM token');
    $stmt->execute();
    $token = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if(isset($_SESSION['token']) == $token) {
        echo 'OK';
        unset($_SESSION['token']);
    } else {
        http_response_code(400);
        die('Invalid Token.');
    }
?>