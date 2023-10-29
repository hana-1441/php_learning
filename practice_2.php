<?php

$n1=0;
$nx=0;
$n2=1;

echo "<pre>";

for($i=1;$i<=10;$i++){
    echo "$i) $n1 <br>";
    $nx=$n1+$n2;
    $n1=$n2;
    $n2=$nx;
}

?>

<?php

echo "<pre>";

for($i=0;$i<5;$i++){
    if($i==2 or $i==1 or $i==3){
        echo "* <br>";
    } 
    else{
        for($j=0;$j<=5;$j++)
        {
            echo "* ";
        }
        echo "<br>";
    }
}

?>