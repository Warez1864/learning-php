<?php

$countries = array("Mexico", "USA", "Denmark", "Germany", "Russia");
$cities = array("Kabul", "Aalborg", "Støvring", "berlin", "moscow");
$CountryNameSize = count($countries);


echo "The SIZE OF COUNTRY LIST is " . $CountryNameSize ."<br>";


for($k=0; $k < $CountryNameSize; $k++){

    //code here
    echo "The value of K is: " . $k ."<br>";
    echo $countries[$k] . "<br>";




}
$citiesNameSize = count($cities);

for($j=0; $j < $citiesNameSize; $j++){

echo $cities[$j] . "<br>";



}




?>
