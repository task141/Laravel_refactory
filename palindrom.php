<?php
$input  = "Kasur ini rusak";
$input = strtolower($input);
$input = str_replace(' ', '', $input);

if ($input == strrev($input))
{
    echo "true";
}
else
{
    echo "false";
}
?>



