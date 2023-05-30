<?php
    include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oy ver</title>
</head>
<body>
    <?php
        if(isset($_SESSION["vat"])){
            if($_POST["oy"]){
                $oy = trim(strip_tags($_POST["oy"]));
                $vat = $_SESSION["crypt"];
                $sql = "SELECT * FROM tb WHERE vat='$vat'";
                $result = $db->query($sql);
                $count = mysqli_num_rows($result);
                if($count>0){
                    echo 'Oy kullanılmış!';
                }else{
                    $sq = "INSERT into tb(vat,oy) VALUES('$vat','$oy')";
                    if ($db->query($sq) === TRUE) {
                        echo "Oy verme işlemi başarılı";
                        include 'logout.php';
                      } else {
                        echo "Error: " . $sql . "<br>" . $db->error;
                      }
                      $db->close();
                }
            }else{
    ?>
                <form action="" method="post">
                    <div><input type="radio" name="oy" value="chp" placeholder="chp"/><label>chp</label></div>
                    <div><input type="radio" name="oy" value="akp" placeholder="akp"/><label>akp</label></div>
                    <div><input type="radio" name="oy" value="hdp" placeholder="hdp"/><label>hdp</label></div>
                    <div><input type="radio" name="oy" value="mhp" placeholder="mhp"/><label>mhp</label></div>
                    <div><input type="submit" name="submit" /></div>
                </form>
    <?php            
            }            
        }else{
            if($_POST){
                $vat = trim(strip_tags($_POST["vat"]));
                $crypt = md5(sha1($vat));
                $sql = "SELECT * FROM tb WHERE vat='$crypt'";
                $result = $db->query($sql);
                $count = mysqli_num_rows($result);
                if($count>0){
                    echo "Oy kullanılmış";
                }else{
                    $sq = "SELECT * FROM vat WHERE vatcrypt='$crypt'";
                    $resu = $db->query($sq);
                    $cou = mysqli_num_rows($resu);
                    if($cou>0){
                        while($array = mysqli_fetch_array($resu)){
                            $_SESSION["vat"] = TRUE;
                            $_SESSION["crypt"] = $array["vatcrypt"];
                            session_start();
                            ob_start();
                            header("refresh:0;index.php");
                        }
                    }
                }              
            }else{
    ?>
                <form action="" method="post">
                    <input type="text" name="vat"/></br>
                    <input type="submit" name="submit" value="Giriş" />
                </form>    
    <?php
            }
        }
    ?>
</body>
</html>
