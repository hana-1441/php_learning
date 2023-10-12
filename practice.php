<?php

$my_array=array(12,23,34,45,67,78,98,6,5,4,3);

$o_count=0;
$e_count=0;
$o_sum=0;
$e_sum=0;


foreach($my_array as $key => $val){

    if($val%2==0){
        $e_count+=1;
        $e_sum+=$val;
    }
    else{
        $o_count+=1;
        $o_sum+=$val;
    }
}


echo "Sum of even : $e_sum<br>";
echo "Sum of odd : $o_sum<br>";
echo "count of odd : $o_count<br>";
echo "count of even : $e_count<br>";



?>