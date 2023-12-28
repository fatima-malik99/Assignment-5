<?php
//Write a function that prints any table by given parameter. Try to use while loop within the function.
function Table_of($Num)  //function name with attribute Num that holds the table number.
{
$count=1;         //Starting value or initializer
echo "Table of {$Num}<br>";   //This statement will print before each table is called.
while($count<=10){              //while loop containing ending value.
    $output =$Num*$count;        //Output of the table
    echo "$Num * $count = $output <br>";         //Formula to print table
    $count++;                                   //Increment operator
    }
}
Table_of(3);                                  //Function called for the first time
Table_of(5);                                  //Function called for the Second time
Table_of(8);                                  //Function called for the third time

?>