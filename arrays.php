<?php
$names=["Ahmed",'Mohsen','Ibraheem'];
// echo $names[3];
//echo '<pre>';
//print_r($names);
//var_dump($names);

foreach ($names as $key => $name){
    echo '<h1>' . ($key + 1)  . $name . '</h1>';
}


$pesron=["name"=> "ahmed","age"=>25,"color"=>'red'];

echo $pesron['age'];