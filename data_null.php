<?php

// data null data yang tidak ada 
$nama="fathin";
$nama=null;

$age=null;
echo"Nama";
echo $nama;
//var_dump untuk mengechek nilai dari varibale tersebut 
var_dump(is_null($age));

$contoh ="eko";
// fungsi dari unset adalah menghapus variabel dan ketikan menjalan variabel yang sama maka tidak akan terdeteksi
unset ($contoh);

$contoh="fathin";

$contoh= null;

var_dump(isset($contoh));

?>