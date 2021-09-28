<html>
    <head>
        <title>Dien tich hinh chu nhat</title>
    </head>
    <body>
       <?php
            if(isset($_POST['chieu_dai'])&&$_POST['chieu_rong'])
                $dien_tich = $_POST['chieu_dai']*$_POST['chieu_rong'];
            
        ?>
        <h1>Dien tich hinh chu nhat</h1>
        <form action="bai1.php" method="POST" name="chu_nhat">
            Chieu dai:
            <input type="text" name="chieu_dai" value="<?php if(isset($_POST['chieu_dai'])) echo $_POST['chieu_dai'];?>" />
            <br><!-- comment -->
            Chieu rong:
            <input type="text" name="chieu_rong" value="<?php if(isset($_POST['chieu_rong'])) echo $_POST['chieu_rong'];?>" />
            <br><!-- comment -->
            Dien tich:
            <input type="text" name="dien_tich" readonly="true" value="<?php if(isset($dien_tich)) echo $dien_tich;?>" />
            <br>
            <input type="submit" value="Tinh dien tich">
        </form>
        
    </body>
</html>


