<?php
//No.1
function familyname ($fname , $year){
    echo "$fname George. Born in $year <br>";
}
familyname("Bill","1992");
familyname("Genny","1994");
familyname("Kathy","1996");
familyname("Nora","1998");
?>

<?php
//No.2
function setheight ($name,$minheight=130){
    echo "<br>$name's height is $minheight cm";
}
setheight("Bill","143");
setheight("Genny","155");
setheight("Kathy");
setheight("Nora","172");

?>

<?php
//No.3
function add_seven(&$value){
    $value+=7;
}
$num=5;
add_seven($num);
echo "<br> Adding 7 to 5 gives $num ";
?>

<?php
?>

<?php
//No.4
function myFamily($lastname, ...$firstname) {
  $txt = "";
  $len = count($firstname);
  for($i = 0; $i < $len; $i++) {
    $txt = $txt."Hi, $firstname[$i] $lastname.<br>";
  }
  return $txt;
}
$a = myFamily("Doe", "Jane", "John","Toy", "Joey","MoyMoy");
echo $a;
?>

<?php
//No.5
function family_persons($lname , ...$fname)
{
    $text="";
    $length= count($fname);
    echo "<br>There are total $length members in my family.<br>";
    for($i=0;$i<$length;$i++)
    {
    $text=$text."$fname[$i] $lname <br>";
}
return $text;
}
$a= family_persons("Griz","Emily","Jordan","Somanda","Niya","Frenzy","Carlous","Grimzy");
echo $a;
?>

<?php
//No.6
function sumMyNumbers(...$x) {
  $n = 0;
  $len = count($x);
  for($i = 0; $i < $len; $i++) {
    $n += $x[$i];
  }
  return $n;
}

$a = sumMyNumbers(5, 2, 6, 2, 7, 7);
echo $a;
?>




