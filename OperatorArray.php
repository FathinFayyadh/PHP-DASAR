<?php


/// ini operasi penggabungan array

$first =[
    "frist_name"=> "Fathin"
];

$last= [

    "last_name"=>"Fayyadh"
];

$full =$first+$last;

var_dump($full);


$first1 =[
    "frist_name"=> "Fathin",
    "last_name"=>"Fayyadh",
];

$last1= [

    "last_name"=>"Fayyadh",
    "frist_name"=> "Fathin"
];

$full1 =$first+$last1;

/// mencari kesamaan dari variabel
var_dump($first1== $last1);

/// mencari kesamaan dan posisinya 
var_dump($first1=== $last1);


?>