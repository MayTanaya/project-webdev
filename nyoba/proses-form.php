<?php
session_start();

if (!$_SESSION['data']) {
    $_SESSION['data']=[];    
}
if (isset($_POST['submit'])) {
    $data =
    [
        "Nama" => $_POST['Nama'],
        "Deskripsi" => $_POST["Deskripsi"],
        "Gambaran" => $_POST["Gambaran"],
        "Tanggal" => $_POST["Tanggal"],
        "Kategori"=> $_POST["Kategori"],
        "Target"=> $_POST["Target"],
        "nominal"=> $_POST["nominal"],
    ];

    array_push($_SESSION['data'], $data);

    header('Location:terima-form.php');
    exit();
}
?>
