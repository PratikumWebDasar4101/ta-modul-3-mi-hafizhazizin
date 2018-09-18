<?php
require("config.php");
?>
<?php
 if (isset($_POST['nim'])) {
$user =$_POST['user'];
$nim =$_POST['nim'];
$fakultas =$_POST['fakultas'];
$jk =$_POST['jk'];

}
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["images"]["name"]);
if(move_uploaded_file ($_FILES["images"]["tmp_name"],$target_file)){
    $nama_file = basename($_FILES["images"]["name"]);
    echo "berhasil upload";
}else{
    echo "gagal upload";
}
$query =$pdo ->prepare("INSERT INTO pwd VALUES ('$nim','$user','$fakultas','$jk','$target_file')");
$query -> execute();
    if($query)
    header("location:view.php");
    else{
        die("Tambah Data Gagal");    
    }
?>
<img src ="uploads/<?php echo $nama_file; ?>" alt="">