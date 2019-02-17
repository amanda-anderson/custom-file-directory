/*
 * Description: Retrieve file paths and store in array
 * Author: Amanda Anderson
 */

<?php

$path = ".";
$dir = [];

foreach (new RecursiveIteratorIterator(new RecursiveDirectoryIterator($path)) as $file)
{ 
    array_push($dir, "<a class='link' href='$path/$file'>" . $file . "</a>");
}

echo $dir . "<script> var dir = " . json_encode($dir) . " </script>";
?> 