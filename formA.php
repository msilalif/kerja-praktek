<?php
    if (isset($_POST['submit']) && $_POST['submit'] == "Submit") {
    $nama = $_POST['nama'];
    $password = $_POST['pass'];

    $audio  = $_FILES['audio'];
    $audioname = $audio['name'];
    $audioTmpName = $audio['tmp_name'];
    $audioSize = $audio['size'];
    $audioError = $audio['error'];
    $audioType = $audio['type'];
    $tempataudio = 'audio/';

    $fileExt = explode('.', $audioname);
    $fileActualExt = strtolower(end($fileExt));
    $allowed = array('mp3','wav');
        if (!empty($nama)&&!empty($password)) {
            if (in_array($fileActualExt,$allowed)) {
                if ($audioError === 0) {
                    if ($audioSize < 1000000) {
                   // $audionew = uniqid('', true).".".$fileActualExt;
                   // $fileDir = $tempataudio.$audionew;
                    $filenew = $tempataudio.$audioname;
                    move_uploaded_file($audioTmpName, $filenew);
                    submit($nama, $password, $filenew);
                      } else {
                        echo "File terlalu besar";}
                } else {
                     echo "Error saat upload";}
            } else {
                   echo "Format Audio Salah";}
        } else {     
              echo "Nama atau Password TIDAK BOLEH KOSONG!";
              echo "</br>";}
    }  
    function submit($nama,$password,$audioname) {
      include "connect.php";
      $mysqli  = "INSERT INTO user (nama, password, audio) VALUES ('$nama','$password','$audioname')";
      $result  = mysqli_query($konek, $mysqli);     
      if ($result) {
        echo "Input berhasil";}
      else {
        echo "Input gagal";}
        mysqli_close($konek);
      }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Hasil</title>
</head>
<body>
  <button><a href="tabel-user.php">Table User</a></button>
</body>
</html>