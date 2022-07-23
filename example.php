<?php

require_once("./Timer.php");

echo "Wait 5 seconds!";
$timer = new Timer(5, 1); //Types: 1 - Seconds, 2 - Minutes, 3 - Hours
$timer->isTimeOver();
echo "\nThank you!";