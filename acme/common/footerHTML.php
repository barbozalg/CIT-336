<footer>
    <hr>
    &copy; ACME, All rights reserved.<br>
    All images used are believed to be in "Fair Use".
    Please notify the author if any are not and they will be removed.<br>
    Last Update: <?php

$temp = explode("/", $_SERVER['PHP_SELF']);
echo 'Last Update: '.date('j F, Y.', filemtime($temp[count($temp)-1]));

?>
</footer>