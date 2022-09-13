<?php

$christmasDay = strtotime('December 25');

$time = time();
//change seconds to days
$days = ceil(($christmasDay - $time)/60/60/24);

echo "There are " . $days . " days until Christmas";

?>