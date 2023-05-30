<?php
    include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            display: flex;
        }
        #oyresult{
            display: block;
            width: 720px;
            padding: 10px;
            border:1px solid #111;
            margin: 20px auto;
            text-align: center;
            height: auto;
        }
        .parties{
            height: 25px;
            margin-bottom: 20px;
            background-color: #111;
            color:red;
            display: block;
        }
    </style>
</head>
<body>
    <?php
        $sql = "SELECT * FROM tb";
        $result = $db->query($sql);
        $kullanilan = mysqli_num_rows($result);
        $sqchp = "SELECT * FROM tb WHERE oy='chp'";
        $reschp = $db->query($sqchp);
        $chpoy = mysqli_num_rows($reschp);
        $sqakp = "SELECT * FROM tb WHERE oy='akp'";
        $resakp = $db->query($sqakp);
        $akpoy = mysqli_num_rows($resakp);
        $sqmhp = "SELECT * FROM tb WHERE oy='mhp'";
        $resmhp = $db->query($sqmhp);
        $mhpoy = mysqli_num_rows($resmhp);
        $sqhdp = "SELECT * FROM tb WHERE oy='hdp'";
        $reshdp = $db->query($sqhdp);
        $hdpoy = mysqli_num_rows($reshdp);
        $akpyuzde = $akpoy * 100 / $kullanilan;
        $chpyuzde = $chpoy * 100 / $kullanilan;
        $mhpyuzde = $mhpoy * 100 / $kullanilan;
        $hdpyuzde = $hdpoy * 100 / $kullanilan;
    ?>
    <div id="oyresult">
        <label>AKP<div class="parties" id="akp" style="width:<?php echo $akpyuzde; ?>%"><?php echo '%'.$akpyuzde; ?></div></label>
        <label>CHP<div class="parties" id="chp" style="width:<?php echo $chpyuzde; ?>%"><?php echo '%'.$chpyuzde; ?></div></label>
        <label>HDP<div class="parties" id="hdp" style="width:<?php echo $hdpyuzde; ?>%"><?php echo '%'.$hdpyuzde; ?></div></label>
        <label>MHP<div class="parties" id="mhp" style="width:<?php echo $mhpyuzde; ?>%"><?php echo '%'.$mhpyuzde; ?></div></label>
    </div>
</body>
</html>