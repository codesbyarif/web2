<?php 
$karyawan = [
    [
        "id"=> "3423432",
        "nama"=> "Nia",
        "posisi"=> "Administrasi",
        "email"=> "nia@software.co.id",
        "foto"=> "nia.jpg",
    ],
    [
        "nama"=> "Azizah",
        "id"=> "943293429",
        "posisi"=> "Akuntansi",
        "email"=> "azizah@software.co.id",
        "foto"=> "azizah.jpg",
    ],
    [
        "nama"=> "Naya",
        "id"=> "32423324",
        "posisi"=> "Manager",
        "email"=> "naya@software.co.id",
        "foto"=> "naya.jpg",
    ],
    [
        "nama"=> "Hanida",
        "id"=> "13234499",
        "posisi"=> "Administrasi",
        "email"=> "hanida@software.co.id",
        "foto"=> "hanida.jpg",
    ],
    [
        "nama"=> "Alya",
        "id"=> "9234324344",
        "posisi"=> "Marketing",
        "email"=> "alya@software.co.id",
        "foto"=> "alya.jpg",
    ]
]
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Data Karyawan</h1>
    <?php foreach ($karyawan as $kyn): {}?>
    <ul>
        <li>
            <img src="<?= $kyn["foto"];?>" alt="">
        </li>
        <li>Nama : <?= $kyn["nama"]; ?></li>
        <li>ID : <?= $kyn["id"]; ?></li>
        <li>posisi : <?= $kyn["posisi"]; ?></li>
        <li>Email : <?= $kyn["email"]; ?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>