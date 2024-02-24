<?php
// $values = array(10,11,12,13,0,15,16,0,);

var_dump($values); 
$nama =["eko,"."Fathi","dana", "apa"] ;

var_dump(count($nama));


/// ARRAY MAP / array di dalam ada array

$fathin = array(
    "id"=>"21110016",
    "name"=> "fathin fayyadh",
    "age"=> 30,

);
var_dump($fathin['id']);   
$aku= [
    "id"=>"21110017",
    "name"=> "nona",
    "age"=> 20,
];
var_dump($aku);

//ARRAY DALAM ARRAY
$dia= [
    "id"=>"21110017",
    "name"=> "nona",
    "age"=> 20,
    "univesitas"=> array (
        "jurusan "=> "teknik informatika",
        "Npm"=> "21110016",
    )

];
var_dump($dia["univesitas"],["jurusan"]);
 

?>

