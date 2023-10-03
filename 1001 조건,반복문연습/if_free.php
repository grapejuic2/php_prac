<?php
    $age = 66;			
    $free = "5000원";

    if ($age <= 64 ) {		
        $free = "무료";
    }

    echo "나이 : $age 세<br>";	 
    echo "입장료 : $free";
?>
