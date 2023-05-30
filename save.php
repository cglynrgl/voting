<?php
    include 'connect.php';
    if($_POST){
        $vat = trim(strip_tags($_POST["vat"]));
        $isim = trim(strip_tags($_POST["isim"]));
        $soyisim = trim(strip_tags($_POST["soyisim"]));        
        $crypt = md5(sha1($vat));
        $sql = "SELECT * FROM vat WHERE vatcrypt='$crypt'";
        $result = $db->query($sql);
        $count = mysqli_num_rows($result);
        if($count>0){
            echo 'vatandaş kaydedilmiş';
        }else{
            $ins = "INSERT into vat(isim,soyisim,vatcrypt) VALUES('$isim','$soyisim','$crypt')";
            if($db->query($ins) === TRUE){
                echo 'Kayıt başarılı';
            }else{
                echo 'Error: '.$sql.'<br>'.$db->error;
            }
            $db->close();
        }
    }
?>
<form method="post" action="">
    <input type="text" name="vat" placeholder="tc"/></br>
    <input type="text" name="isim" placeholder="isim" /></br>
    <input type="text" name="soyisim" placeholder="soyisim" /></br>
    <input type="submit" name="submit" value="kaydet" />
</form>