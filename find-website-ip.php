<?php
echo "\n +=====================================+";
echo "\n |           Find Website IP           |";
echo "\n +=====================================+";
echo "\n |  Author : Rahat Khan Tusar(rkt)     |";
echo "\n |  Github : https://github.com/r3k4t  |";
echo "\n +=====================================+";
echo "\n";
echo "\n"; 
echo " Enter a website url(www.google.com):";
$host=trim(fgets(STDIN));
$ip = gethostbyname($host);
echo "\n";
echo  $ip ;
echo "\n";
?>
