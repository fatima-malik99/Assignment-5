<?php
//Write a function that prints any table by given parameter. Try to use while loop within the function.
$table = 6;
$count = 1;
echo "Table of 6 <br>";
while($count<=10){
$output =$table*$count;
echo "{$table} * {$count} = {$output} <br>";
$count++;
}
?>