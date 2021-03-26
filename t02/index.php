<?php

function checkDivision($start = 1, $end = 60){
	for($i = $start; $i <= $end; $i++){
		$str = "The number $i";

		if($i % 2 == 0 || $i % 3 == 0 || $i % 10 == 0){
			if($i % 2 == 0)
				$str = "$str is divisible by 2";
		
			if($i % 3 == 0){
				if(strlen($str) > 13)
					$str = "$str,";
				$str = "$str is divisible by 3";
			}

			if($i %10 == 0){
				if(strlen($str) > 10)
					$str = "$str,";
				$str = "$str is divisible by 10";
			}
		}
		else
			$str = "$str -";

		$str = "$str\n";
		echo($str);
	}
}

?>