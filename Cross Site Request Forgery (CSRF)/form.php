<?php
    session_start();
    require_once('generate.php');
?>

<form method="POST" action="submit.php">
    Enter "CONFIRM" below to delete your account.
    <input type="hidden" name="token" value="<?php echo $_SESSION['token']; ?>">
    <input type="text" name="confirm" pattern="CONFIRM" required>
    <input type="submit" name="Delete my account">
</form>