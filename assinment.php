<?php
$num = 5;
// Using if statement
if ($num > 0) {
$result = 'positive';
}
if ($num < 0 ) {
$result = "negative";
if( $num < -10) {
$result = "value is below -10";
}
}
else {
$result = "its zero";
}

echo $result;


echo "\n";

$result = $num > 0 ? "Its Positive" : ($num < 0 ? ($num < -10 ? "Its below -10" : "Its Negative"): "Its Zero");

echo $result;