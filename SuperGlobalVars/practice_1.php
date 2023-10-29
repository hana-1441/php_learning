<?php

// print_r($_GET);
// print_r($_POST);
print_r($_REQUEST);
print_r($_FILES);
print_r($GLOBALS);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="" method="post" enctype="multipart/form-data">

        <input type="text" name="uname" id="" placeholder="Enter name">
        <input type="email" name="uemail" id="" placeholder="Enter email">
        <input type="password" name="password" id="" placeholder="Enter password">
        <input type="tel" name="umobile" id="" placeholder="Enter mobile">
        <input type="date" name="dob" id="" placeholder="Enter dob">
        <input type="file" name="img" id="">

        <input type="submit" value="submit" id="">

    </form>
</body>
</html>