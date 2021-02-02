<?php
    session_start();
    require_once('setToken.php');
?>

<form method="POST" action="submit.php">
    Enter "CONFIRM" below to delete your account.
    <input type="text" name="confirm" pattern="CONFIRM" required>
    <input type="submit" name="Delete my account">
</form>