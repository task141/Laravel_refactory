<?php
$phrase  = "Hari ini saya ingin pergi ke pasar";
$test = array("saya", "pasar",);
$test2   = array("*****", "*****",);
$newphrase = str_replace($test, $test2, $phrase);

echo $newphrase
?>


