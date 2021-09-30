<html>
    <head>
        <title>Tinh tien dien</title>
        
        <style type="text/css">

        body {  

            background-color: #cbbbd1;

        }

        table{

            background: #ffd94d;

            border: 0 solid yellow;

        }

        thead{

            background: #fff14d;    

        }

        td {

            color: blue;

        }

        h3{

            font-family: verdana;

            text-align: center;

            /* text-anchor: middle; */

            color: #ff8100;

            font-size: medium;

        }
        .container{
            width: 250px;
            height: 205px;
            margin: 0 auto;
        }

    </style>

    </head>
    <body>
        <?php
            if(isset($_POST['ten_chu_ho'])&&isset($_POST['chi_so_cu'])&&isset($_POST['chi_so_moi'])&&isset($_POST['don_gia']))
                if(is_numeric($_POST['chi_so_cu'])&&is_numeric($_POST['chi_so_moi'])&&is_numeric($_POST['don_gia']))
                    if($_POST['chi_so_moi']<$_POST['chi_so_cu'])
                        echo "<font color='red'>Vui lòng nhập lại chỉ số cũ và mới! </font>";
                    else {
                        $tien_dien = ($_POST['chi_so_moi'] - $_POST['chi_so_cu'])*$_POST['don_gia'];
                    }
                else{
                    echo "<font color='red'>Vui lòng nhập vào số! </font>"; 
                }
                        
            
        ?>
        <div class='container'>
            <form align='center' action="tiendien.php" method="POST">
            <table border="1">
                <thead>
                    <th colspan="2" align="center"><h3>TÍNH TIỀN ĐIỆN</h3></th>
                </thead>
                <tbody> 
                    <tr>
                        <td>Tên chủ hộ</td>
                        <td><input type="text" name="ten_chu_ho" value="<?php if(isset($_POST['ten_chu_ho'])) echo $_POST['ten_chu_ho'];?>" /></td>
                    </tr>
                    <tr>
                        <td>Chỉ số cũ</td>
                        <td><input type="text" name="chi_so_cu" value="<?php if(isset($_POST['chi_so_cu'])) echo $_POST['chi_so_cu'];?>" /></td>
                    </tr>
                    <tr>
                        <td>
                            Chỉ số mới
                        </td>
                        <td>
                            <input type="text" name="chi_so_moi" value="<?php  if(isset($_POST['chi_so_moi'])) echo $_POST['chi_so_moi'];?>" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Đơn giá
                        </td>
                        <td>
                           <input type="text" name="don_gia" value="<?php if(isset($_POST['don_gia'])) echo $_POST['don_gia'];?>" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Tiền điện
                        </td>
                        <td>
                            <input style="background-color: lightsalmon" type="text" name="tien_dien" readonly="true" value="<?php if(isset($tien_dien)) echo $tien_dien;?>" />
                        </td>
                    </tr>
                    <tr>



                        <td colspan="2" align="center"><input type="submit" value="Tính" name="tinh" /></td>



                    </tr>
                </tbody>
            </table>

        </form>
        </div>
        
    </body>
</html>


