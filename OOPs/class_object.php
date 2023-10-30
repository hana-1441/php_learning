<?php

class Student{

    public function call()
    {
        echo "inside class";
    }
}

$o1=new Student();

//access class method
$o1->call();

?>