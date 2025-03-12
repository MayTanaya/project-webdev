<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Formulir Donasi</title>
</head>
<body>
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
        <?php
        session_start();
        $data =$_SESSION['data'];
        
        array_map(function($i){
            ?>
            <tr>
                <td><?php echo $i['Nama']?></td>
                <td><?php echo $i['Deskripsi']?></td>
                <td><?php echo $i['Gambaran']?></td>
                <td><?php echo $i['Tanggal']?></td>
                <td><?php echo $i['Kategori']?></td>
                <td><?php echo $i['Target']?></td>
                <td><?php echo $i['nominal']?></td>
            </tr>

            <?php
        },$data)
        ?>

    </table>
</body>
</html>