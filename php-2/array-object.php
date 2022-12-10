<?php
$mahasiswa = [
    [
        "nama" => "Rizky",
        "nim" => "123456",
        "jurusan" => "Teknik Informatika",
        "email" => "rizky@gmail.com",
        "nilai"=> 75,
    ],
    [
        "nama" => "Muhammad",
        "nim" => "1234561",
        "jurusan" => "Teknik Informatika",
        "email" => "muhammad@gmail.com",
        "nilai"=> 85,
    ],
    [
        "nama" => "Ahmad",
        "nim" => "1234561",
        "jurusan" => "Teknik Informatika",
        "email" => "ahmad@gmail.com",
        "nilai"=> 95,
    ],
];

foreach ($mahasiswa as $mhs) {
    echo "<br>Nama : {$mhs['nama']}";
    echo "<br>NIM : {$mhs['nim']}";
    echo "<br>Jurusan : {$mhs['jurusan']}";
    echo "<br>Email : {$mhs['email']}";
    echo "<br>Nilai : {$mhs['nilai']}";
    echo "<br>";
}