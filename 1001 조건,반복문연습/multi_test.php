<?php
    $mul = 3; //3의 배수 여부를 판별하기 위한 변수.
              //예를 들어 5의 배수를 판별하려면 5를 저장.
    $num = 12;

    if($num % $mul ==0)
    {
        echo "$num : $mul"."의 배수이다.";
    }else{
        echo "$num : $mul"."의 배수가 아니다.";
    }
?>


<?php

echo "<br>";

?>

<?php

    $level = 7;
    echo "회원 레벨: $level<br>";

    if($level >= 1 and $level <= 7)
        echo "로그인 가능합니다";
    else
        echo "로그인 불가";
?>

