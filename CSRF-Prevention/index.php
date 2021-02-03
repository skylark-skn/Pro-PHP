<?php
session_start();
require_once('classes/Token.php');

if(isset($_POST['quantity'], $_POST['product'], $_POST['token'])) {
    $product    = $_POST['product'];
    $quantity   = $_POST['quantity'];

    if(!empty($product) && !empty($quantity)) {
        if(Token::check($_POST['token'])) {
            echo 'OK';
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        Quantity:
        <input type="text" name="quantity">
        <input type="submit" value="order">
        <input type="hidden" name="product" value="1567">
        <input type="hidden" name="token" value="<?php echo Token::generate(); ?>">
    </form>
</body>
</html>