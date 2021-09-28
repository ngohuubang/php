
<html>
    <head>
        <title>Tinh tien dien</title>
    </head>
    <body>
       <?php
            if(isset($_POST['ten_chu_ho'])&&$_POST['chi_so_cu']&&$_POST['chi_so_moi']&&$_POST['don_gia'])
                $tien_dien = ($_POST['chi_so_cu'] - $_POST['chi_so_moi'])*$_POST['don_gia'];
            
        ?>
        <h1>Tien dien</h1>
        <form action="bai2.php" method="POST" name="tien_dien">
            Ten chu ho:
            <input type="text" name="ten_chu_ho" value="<?php if(isset($_POST['ten_chu_ho'])) echo $_POST['ten_chu_ho'];?>" />
            <br>
            Chi so cu:
            <input type="text" name="chi_so_cu" value="<?php if(isset($_POST['chi_so_cu'])) echo $_POST['chi_so_cu'];?>" />
            <br>
             Chi so moi:
            <input type="text" name="chi_so_moi" value="<?php  if(isset($_POST['chi_so_moi'])) echo $_POST['chi_so_moi'];?>" />
            <br>
             Don gia:
            <input type="text" name="don_gia" value="<?php if(isset($_POST['don_gia'])) echo $_POST['don_gia'];?>" />
            <br>
            Tien dien:
            <input type="text" name="tien_dien" readonly="true" value="<?php if(isset($tien_dien)) echo $tien_dien;?>" />
            <br><!-- comment -->
            <input type="submit" value="Tinh tien dien">
        </form>
        
    </body>
</html>

