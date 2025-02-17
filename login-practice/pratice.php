<?php
echo "ALI";
echo "<br>";
echo "<br>";
echo "<br>";
$name = "new";
$name = "newss";
echo $name;
echo "<br>";
echo "<br>";


define("VARIABLE", ["asd", 121, 212]);
echo VARIABLE[0];
echo VARIABLE[1];

foreach (VARIABLE as $index) {
  echo "$index ,";
}


$arr = ["name" => "ali", "age" => 12, "city" => "121asa"];
foreach ($arr as $key => $value) {
  echo "<br>$key:$value ";
}
;



$multiArr = [
  [
    "OSAMA", //0
    "age",//1
    'city',//2
  ],//0 
  [
    "Ali",
    "age",
    'city',
  ],//1
  [
    "Ubaid",
    "age",
    'city',
  ],//2
];


echo $multiArr[2][0] = "Shoaib";
$multiArr[] = ["Muddasir", "age", "city"];
echo $multiArr[3][0];


$fil = [22, 20, 100, 10];
rsort($fil);
echo $fil[0];
foreach($fil as $check){
 echo "<br> $check, ";
}