
<?php
$colors = array("black", "white", "grey");

var_dump($colors);
?>

<?php


$Student1Marks = ["an",true,123,456.44,889.00];
// $Student1Marks = [20,19,18,05];

//gettype() : function use to know data type

echo gettype($Student1Marks),"<br>";
echo $Student1Marks[0],"<br>";

// echo $Student1Marks;
echo "Developer option for view array elements <pre>";

print_r($Student1Marks);

var_dump($Student1Marks);

echo gettype(var_export($Student1Marks));

?>


<?php

echo "<br><br><br><br><br><br>";
$a=11;

do 
{
    echo "burger<br>";    
    $a++;
}while ($a <= 10);


?>


<?php

echo "<br>FOR each loop<br>";

$array = ['Mohammed','BCA First Year','19','ok'];
echo "<pre>";
var_dump($array);
echo "</pre>";

// echo "$array" ;


// foreach ($array as $index => $value) 

// {
//     echo "the index is $index and it's value is $value<br>";
// }

// arr[i]


foreach ($array as $abc => $var) 
{
    echo "the index is $abc and it's value is<br>";
}



?>