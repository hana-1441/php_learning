<?php

echo "Array start";

?>


<?php 


echo "<br>=========Array given==========";

// $arr1 = ["names"=>"Admin","age"=>19];
// $arr2 = ["name"=>"User","age"=>19];
// $arr3 = ["name"=>"User1","age"=>19];


$a1 = array("a"=>"red","b"=>"green","c"=>"white");
$a2 = array("e"=>"red","f"=>"orange","z"=>"pink");


echo "<pre>";
print_r(array_diff($a2,$a1));
print_r(array_diff_key($a2,$a1));
print_r(array_diff_assoc($a2,$a1));
echo "</pre>";

?>

<?php

echo "=========================================================================";

echo "<pre>";
$a = array("volvo","ferrari","RR","Mercedeas","BMW","Audi");
// echo "<pre>";
print_r($a);

print_r(array_chunk($a,2));
print_r(array_slice($a,2));

?>

<?php

echo "==========================================";

$arr = array(100,200);

echo "<pre>";

print_r($arr);

?>

<?php

echo "========================================================";

$a = array(

    array(
        'id'=>1,
        'name'=>"Mohammed",
        'marks'=>89,
    ),
    array(
        'id'=>2,
        'name'=>"Darshan",
        'marks'=> 105
    ),
    array(
        'id'=>3,
        'name'=>"Virat",
        'marks'=>99
    )

    );

    echo "<pre>";
    print_r($a);

    foreach ($a as $key => $value) 
    {
        $data[]=$value['name']; // Also Good Way
        echo $value['name']."<br>";  //Also the other way
    }

    print_r($data);

    print_r(array_column($a,'name')); //Best way but for 2d array
    echo "</pre>";


?>


<?php

echo "===================================================================";

$a = array(

    array(
        'id'=>1,
        'name'=>"Mohammed",
        'marks'=>89,
    ),
    array(
        'id'=>2,
        'name'=>"Darshan",
        'marks'=> 105
    ),
    array(
        'id'=>3,
        'name'=>"Virat",
        'marks'=>99
    )

    );

    echo "<pre>";
    print_r($a);

    foreach ($a as $key => $value) 
    {
        $data[]=$value['name']; // Also Good Way
        echo $value['name']."<br>";  //Also the other way
    }

    print_r($data);

    print_r(array_column($a,'name')); //Best way but for 2d array
    echo "</pre>";


?>

<?php

echo "<br>===============================================================<br>";

$a = array("volvo"=>"xc90","bmw"=>"x5","audi"=>"a8");

var_dump(array_key_exists("volvo",$a));
echo "<br>";
echo "<br>";
var_dump(in_array("volvo",$a));
echo "<br>";
echo "<br>";
var_dump(in_array("xc90",$a));
echo "<br>";
echo "<br>";
var_dump(array_search("a8",$a));
echo "<br>";
echo "<br>";
print_r(array_search("a8",$a));
echo "<br>";
echo "<br>";



?>

<?php

echo "<br>===============================================================<br>";

$a = array("red","green","orange","white");
print_r($a);


echo "<br>";
echo "<br>";

array_pop($a);

echo "<br>";
echo "<br>";

print_r($a);


echo "<br>";
echo "<br>";

$b = array("oink","white");

echo "<br>";
echo "<br>";
array_push($b,"yellow","red");


print_r($b);



function abc($a1,$a2)
{
    return $a1 . "_" . $a2;
    
    
}

echo "<br>";
echo "<br>";

$array = array("dog","cat","lion");

echo(array_reduce($array,"abc"));

echo "<br>";
echo "<br>";
shuffle($array);
print_r($array);

?>

<?php

echo "<br>=================array implode and explode==========================<br>";

$a = array("volvo"=>"xc90","bmw"=>"x5","audi"=>"a8");
$array = array("dog","cat","lion");


$var=implode(" ",$array); //convert array to string

echo $var."<br>";
echo gettype($var);


echo "<br><br>===================explode =======================<br><br>";

$var1="Hola Amigo. ~from Miguel";

$varx=explode(" ","Hola Amigo. ~from Miguel",2); //convert string to array

echo "<pre>";
print_r($varx);
echo gettype($varx);

?>