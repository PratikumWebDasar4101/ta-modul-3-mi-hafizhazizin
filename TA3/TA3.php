<?php
include("config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>TA3</title>
</head>
<body bgcolor = "#7FFFD4">
    <div id ="form">
        <div id="title"> 
            <h3> Input Data </h3>
        </div>
        <div id="data">
            <form action="1.php" method="post" enctype="multipart/form-data">

                User ID :       <input type="text" name="user" id=""><br><br>
                NIM :           <input type="text" name="nim" id=""><br><br>
                Fakultas :      <select name="fakultas">
                    <option value="FIT"name="supervisor">FIT</option>
                    <option value="FKB"name="manajer">FKB</option>
                    <option value="FIK"name="staff">FIK</option>
                    <option value="FTE"name="staff">FTE</option>
                </select>
                <br><br>
                Jenis Kelamin : <input type="radio" name="jk" id="" value="Perempuan">Perempuan
                                    <input type="radio" name="jk" id="" value="Laki">Laki-laki <br><br>
                <input type="file" name="images" id="images"><br><br>
                <input type="submit" value="Upload Image" name="submit">
         </div>
</body>
</html>

