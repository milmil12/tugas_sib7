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
            <td>ID Courses</td>
            <td>Kode Matakuliah</td>
            <td>Nama Matakuliah</td>
            <td>Total</td>
            
        </tr>
        <?php foreach($soal6 as $key=>$value):?>
           <tr>
            <td><?php echo $key+1; ?></td>
            <td><?php echo $value->id_courses ?></td>
            <td><?php echo $value->code_courses ?></td>
            <td><?php echo $value->name_courses ?></td>
            <td><?php echo $value->total?></td>
            
           </tr> 
        <?php endforeach; ?>
    </table>
</body>
</html>