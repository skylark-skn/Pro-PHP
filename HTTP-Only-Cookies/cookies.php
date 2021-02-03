<?php

    $expireDuration = new DateTime('+1 week');
    setcookie('key', 'value', $expireDuration->getTimestamp(), '/', null, null, true);

?>