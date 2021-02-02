<?php
    require_once('db_connect.php');
    $stmt = $db->query('SELECT * FROM token');
    $stmt->execute();
    $token = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if(empty($_SESSION['token'])) {
        $_SESSION['token'] = $token;
    }
?>