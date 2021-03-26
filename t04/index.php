<?php

function total($addCount, $addPrice, $currentTotal = 0){
	if (is_finite($addCount) && is_finite($addPrice) && is_finite($currentTotal))
        return $currentTotal += $addCount * $addPrice;
    if ($currentTotal != 0)
        return $currentTotal;
}

?>