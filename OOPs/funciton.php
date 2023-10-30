<?php

function my_fun($n)
{
    if($n<=0){
        return 1;
    }
    else{
        return $n*my_fun($n-1);
    }
}

echo "factorial of 5 is : ".my_fun(5);

?>