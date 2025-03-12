<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Formulir Donasi</title>
</head>
<body>
    <table>
        <tr>
            <th>Nama Donasi</th>
            <th>Deskripsi Donasi</th>
            <th>Gambaran Donasi</th>
            <th>Tanggal Peluncuran Donasi</th>
            <th>Jenis Donasi</th>
            <th>Target Donatur</th>
            <th>Jumlah Nominal</th>
        </tr>
        <tr>
            <td><?php echo $_POST['Nama Donasi']?></td>
            <td><?php echo $_POST['Deskripsi Donasi']?></td>
            <td><?php echo $_FILES['Gambaran Donasi']?></td>
            <td><?php echo $_POST['Tanggal Donasi']?></td>
            <td><?php echo $_POST['Kategori']?></td>
            <td><?php echo $_POST['Target']?></td>
            <td><?php echo $_POST['nominal']?></td>
        </tr>
    </table>
    
</body>
</html>