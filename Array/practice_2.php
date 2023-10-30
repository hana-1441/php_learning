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
print_r(array_diff($a2,$a1)); //compare based on value 
print_r(array_diff_key($a2,$a1)); //compare based on key
print_r(array_diff_assoc($a1,$a2)); // compare based on key and value both
echo "</pre>";

?>

<?php

echo "=========================================================================";

echo "<pre>";
$a = array("volvo","ferrari","RR","Mercedeas","BMW","Audi","Bugatti");
// echo "<pre>";
print_r($a);

print_r(array_chunk($a,2));
print_r(array_slice($a,4));

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
        // $data[]=$value['name']; // Also Good Way
        echo $value['name']."<br>";  //Also the other way
    }

    // print_r($data);

    // array_column(array,colummn_key,index_key)

    // array : required -> can be any multi-dimentional array or array of objects
    // column_key : required -> return value from int or string kind of key(work as value of returned array)
    // index_key : optional -> (work as key of returned array) confused ! need to ask about column_key and index_key

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

echo "<br>=================in array==============================================<br>";

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
var_export(array_search("a8",$a));



?>

<?php

echo "<br>=======================pop========================================<br>";

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

echo(array_reduce($array,"abc")); // like map() in python
//create a single value by applying funciton to each and every array element

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
$var=implode(" ",$a); //for associative array will consider value 

echo $var."<br>";
echo gettype($var);


echo "<br><br>===================explode =======================<br><br>";

$var1="Hola Amigo. ~from Miguel";

$varx=explode("o","Hola Amigo. ~from Miguel",4); //convert string to array
//split string into array elements -> split performs based on white space 

echo "<pre>";
print_r($varx);
echo gettype($varx);

?>

<?php
echo "<br><br>===================combine merge =======================<br><br>";


$name = array("a"=>"Peter","z"=>"Thor","c"=>"Iron Man","q"=>"Captain");
$age = array("a"=>21,"z"=>100,"o"=>2000,"c"=>55);

//Length should be Equal
$newarray = (array_combine($name,$age));
print_r($newarray);
echo "<br>";
print_r(array_merge($name,$age)); // it's like dictionary update method in python(if key will same then update value with the other one)
//It will overwrite the last value

//if key was given and key will same for both array then value will be replaced 
// but if array w/o key then will merge all elements altogather


echo "<br>";
//this declaration needs a lookout
$a = array("test"=>10,20,30,40);
$b = array("test"=>'a','b','c','d');

echo "<br>";

echo "array merge example";
echo "<br>";
echo "<br><pre>>>>>>>>>>>>>>>>>>>here it is";
print_r($a);
print_r($b);
echo "<pre>";
print_r(array_merge($a,$b));
echo "array merge recursive";
echo "<br>";
print_r(array_merge_recursive($a,$b));
echo "</pre>";
?>

<?php

echo "<br><br>===================array intersect=======================<br><br>";


$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("e"=>"red","f"=>"green","g"=>"blue","a");
echo "<pre>";
$result=array_intersect($a1,$a2);//only check based on value
print_r($result);


$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("a"=>"red","b"=>"green","c"=>"Blue");

$result=array_intersect_assoc($a1,$a2); // check based on value and key both
print_r($result);


$a1=array("a"=>"red","b"=>"green","c"=>"blue");
$a2=array("a"=>"red","c"=>"blue","d"=>"pink");

$result=array_intersect_key($a1,$a2);
print_r($result);


function myfunction($a,$b)
{
if ($a===$b)
  {
  return 0;
  }
  return ($a>$b)?1:-1;
}

$a1=array("a"=>"red","b"=>"green","c"=>"blue");
$a2=array("d"=>"red","b"=>"green","e"=>"blue");

$result=array_intersect_uassoc($a1,$a2,"myfunction");
print_r($result);


function myfunctionukeys($a,$b)
{
if ($a===$b)
  {
  return 0;
  }
  return ($a>$b)?1:-1;
}

$a1=array("a"=>"red","b"=>"green","c"=>"blue");
$a2=array("a"=>"blue","b"=>"black","e"=>"blue");

$result=array_intersect_ukey($a1,$a2,"myfunctionukeys");
print_r($result);

?>