<?php
require("config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body bgcolor="lime">
    <div class="data" >
        <table border="1">
            <tr>
                <th>NO</th>
                <th>NIM</th>
                <th>NAMA</th>
                <th>FAKULTAS</th>
                <th>Jenis Kelamin</th>
                <th>FOTO</th>
            </tr>
            <?php
            $no = 1;
            $query = $pdo -> prepare("SELECT * FROM pwd");
            $query -> execute();
            while($data =$query -> fetch(PDO :: FETCH_ASSOC)){
            ?>
            
            <tr>
                <td><?php echo $no;?></td>
                <td><?php echo $data['NIM'];?></td>
                <td><?php echo $data['user'];?></td>
                <td><?php echo $data['fakultas'];?></td>
                <td><?php echo $data['jeniskelamin'];?></td>
                <td><img src="<?php echo $data['filegambar'];?>" width ="10%"></td>
            </tr>
            <?php
                $no++;
            }
            ?>
        </table>
    </div>
</body>
</html>