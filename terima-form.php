<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Formulir Donasi</title>
</head>
<body>
<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
?>
    <h2>HASIL FORMULIR DONASI</h2>
    <table border="1">
    
        <tr>
            <th>Nama Donasi</th>
            <th>Deskripsi Donasi</th>
            <th>Gambaran Donasi</th>
            <th>Tanggal Peluncuran Donasi</th>
            <th>Jenis Donasi</th>
            <th>Target Donatur</th>
            <th>Jumlah Nominal</th>
        </tr>
        <?php for ($i = 0; $i <count($_POST['Nama']); $i++) : ?>
        <tr>
            <td><?php echo $_POST['Nama']?></td>
            <td><?php echo $_POST['Deskripsi']?></td>
            <td><?php echo $_POST['Gambaran']?></td>
            <td><?php echo $_POST['Tanggal']?></td>
            <td><?php echo $_POST['Kategori']?></td>
            <td><?php echo $_POST['Target']?></td>
            <td><?php echo $_POST['nominal']?></td>
        </tr>
        <?php endfor; ?>

    </table>
<?php 
} else {
    echo "<p>Form belum dikirim!</p>";
}
?>
</body>
</html>