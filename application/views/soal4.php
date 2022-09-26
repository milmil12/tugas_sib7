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
            <td>ID Mahasiswa</td>
            <td>Kode Mahasiswa</td>
            <td>Nama Mahasiswa</td>
            <td>ID Matakuliah</td>
            <td>Kode Matakuliah</td>
            <td>Nama Matakuliah</td>
        </tr>
        <?php foreach($soal4 as $key=>$value):?>
           <tr>
            <td><?php echo $key+1; ?></td>
            <td><?php echo $value->id_students ?></td>
            <td><?php echo $value->code_students ?></td>
            <td><?php echo $value->name_students ?></td>
            <td><?php echo $value->id_courses ?></td>
            <td><?php echo $value->code_courses ?></td>
            <td><?php echo $value->name_courses  ?></td>
            
           </tr> 
        <?php endforeach; ?>
    </table>
</body>
</html>