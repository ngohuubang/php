<html>
    <head>
        <title>Phep tinh</title>
    </head>
    <body>
        <form action="ketquabai3.php" method="POST" name="phep_tinh">
            Chon phep tinh:
            <input type="radio" name="phep" value="Cong" <?php if(isset($_POST['phep'])&&$_POST['phep']=='Cong') echo 'checked="checked"';?> checked /> Cong
            &nbsp;
            <input type="radio" name="phep" value="Tru" <?php if(isset($_POST['phep'])&&$_POST['phep']=='Tru') echo 'checked="checked"';?>  /> Tru
            &nbsp;
            <input type="radio" name="phep" value="Nhan" <?php if(isset($_POST['phep'])&&$_POST['phep']=='Nhan') echo 'checked="checked"';?>  /> Nhan
            &nbsp;
            <input type="radio" name="phep" value="Chia" <?php if(isset($_POST['phep'])&&$_POST['phep']=='Chia') echo 'checked="checked"';?> /> Chia
            <br>
            So 1:
            <input type="text" name="s1" value="<?php  if(isset($_POST['s1'])) echo $_POST['s1'];?>" />
            <br><!-- comment -->
            So 2:
            <input type="text" name="s2" value="<?php if(isset($_POST['s2'])) echo $_POST['s2'];?>" />
            <br><!-- comment -->
            
            <input type="submit" value="Tinh">
            
        </form>
            <!--<a href="javascript:location.reload();">Tro ve trang truoc</a> -->

    </body>
</html>


