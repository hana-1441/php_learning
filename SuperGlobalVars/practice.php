

<h1>it will always start with _ except GLOBALS</h1>
<h1>And everything is case sensitive</h1>

<h1>Super Global Variable</h1>
<h2>======================</h2>

<h1>Informative Super Globals</h1>
<h2>=========================</h2>
<h3>$_ENV</h3>
<h3>$_SERVER</h3>

<h1>Data Receiver</h1>
<h2>=============</h2>

<!-- $_GET will take data from URL -->
<h3>$_GET</h3>

<!-- $_POST will take data when form submit -->
<h3>$_POST</h3>

<!-- hence post get works same as Django forms -->


<!-- $_REQUEST will work as both get and post  -->
<h3>$_REQUEST</h3> 

<!-- use when form contain any file -->
<h3>$_FILES</h3>

<!-- give information about global variables -->
<h3>$GLOBALS</h3>


<h1>Storage</h1>
<h2>=======</h2>

<!-- in cookie there is limitation approx 4kb -->
<h3>$_COOKIE</h3>

<!-- there is no lmitaion in session -->
<!-- it contain data same as database -->
<h3>$_SESSION</h3>


<?php

// $_ENV=getenv();

// echo "<pre>";

// print_r($_ENV);

echo "<pre>";
print_r($_SERVER);

?>