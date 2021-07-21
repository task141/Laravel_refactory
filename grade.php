<?php

$nilai = 90;

if ($nilai >= 90) {
    $grade = "A";
} elseif($nilai >= 80){
    $grade = "B";
} elseif($nilai >= 70){
    $grade = "C";
} elseif($nilai >= 60){
    $grade = "D";
} elseif($nilai >= 59){
    $grade = "E";
}

echo "Nilai: $nilai<br>";
echo "Grade: $grade";

?>