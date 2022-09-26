<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border = "1px">
        <tr>
            <td>No</td>
            <td>Kode Mahasiswa</td>
            <td>Nama Mahasiswa</td>
            <td>Kode Matakuliah</td>
            <td>Nama Matakuliah</td>
        </tr>
        <?php foreach($soal2 as $key=>$value):?>
           <tr>
            <td><?php echo $key+1; ?></td>
            <td><?php echo $value->kode_mahasiswa ?></td>
            <td><?php echo $value->nama_mahasiswa ?></td>
            <td><?php echo $value->kode_matakuliah ?></td>
            <td><?php echo $value->nama_matakuliah ?></td>
           </tr> 
        <?php endforeach; ?>
   </table>
</body>
</html>