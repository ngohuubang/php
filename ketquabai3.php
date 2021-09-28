<?php
    if(isset($_POST['phep']) && ($_POST['s1'])&&($_POST['s2']))
    {
        switch ($_POST['phep']) {
            case 'Cong':
                $kq = $_POST['s1'] + $_POST['s2'];
                break;
            case 'Tru':
                $kq = $_POST['s1'] + $_POST['s2'];
                break;
            case 'Nhan':
                $kq = $_POST['s1'] + $_POST['s2'];
                break;
            case 'Chia':
                $kq = $_POST['s1'] + $_POST['s2'];
                break;
            default:
                break;
        }
    }
?>
<html>
    <head>
        <title>Ket qua phep tinh</title>
    </head>
    <body>
        <h1>Ket qua phep tinh</h1><!-- comment -->
        <br>
        Phep tinh:<?php echo $_POST['phep']; ?>
        <form action="" method="POST" name="phep_tinh">
            So 1:
            <input type="text" name="s1" value="<?php  if(isset($_POST['s1'])) echo $_POST['s1'];?>" />
            <br><!-- comment -->
            So 2:
            <input type="text" name="s2" value="<?php if(isset($_POST['s2'])) echo $_POST['s2'];?>" />
            <br><!-- comment -->
            Ket qua:
            <input type="text" name="kq" readonly="true" value="<?php if(isset($kq)) echo $kq;?>" />
            
        </form>
        <a href="javascript:window.history.back(-1);">Tro ve trang truoc</a>
    </body>
</html>

