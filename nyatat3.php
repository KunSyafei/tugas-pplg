<?php
////Array indeks
$buah = [ "apel","jeruk", "pisang"];
echo $buah[1];//output : jeruk

////Array asosiatif
$mahasiswa =[
    "nama" => "Kun Syafei","nim"  => "0904","prodi"=> "random","alamat"=> "Bumi,Asia,Asia tenggara,Indonesia,makassar,biringkanaya,sudiang,hartaco,yppkg k8 no.22"
];
echo $mahasiswa["nama"]; //output: Kun Syafei

////Array indeks 2
$sayur = array("bayam","kangkung","buncis");
$sayur []="daun bawang"; 
echo "$sayur[3]";


$nilai =[78,80,85,90,95,98];
echo "nilai PPLG $nilai[1]<br>";
echo "nilai IPAS $nilai[4]<br>"; ?>