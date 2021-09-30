<html>
    <head>
        <title>Phep tinh</title>
    </head>
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
            width: 370px;
            height: 90px;
            margin: 0 auto;
        }

    </style>
    <body>
        <div class='container'>
            <form align='center' action="kqpheptinh.php" method="POST" name="phep_tinh">
            <table border="1">
                <thead>
                    <th colspan="2" align="center"><h3>PHÉP TÍNH HAI SỐ</h3></th>
                </thead>
                <tbody>
                    <tr>
                        <td>Phép tính</td>
                        <td>
                            <input type="radio" name="phep" value="Cong" <?php if(isset($_POST['phep'])&&$_POST['phep']=='Cong') echo 'checked="checked"';?> checked /> Cộng
                            &nbsp;
                            <input type="radio" name="phep" value="Tru" <?php if(isset($_POST['phep'])&&$_POST['phep']=='Tru') echo 'checked="checked"';?>  /> Trừ
                            &nbsp;
                            <input type="radio" name="phep" value="Nhan" <?php if(isset($_POST['phep'])&&$_POST['phep']=='Nhan') echo 'checked="checked"';?>  /> Nhân
                            &nbsp;
                            <input type="radio" name="phep" value="Chia" <?php if(isset($_POST['phep'])&&$_POST['phep']=='Chia') echo 'checked="checked"';?> /> Chia
                        </td>
                    </tr>
                    <tr>
                        <td>Số 1</td>
                        <td>
                            <input type="number" name="s1" value="<?php  if(isset($_POST['s1'])) echo $_POST['s1'];?>" />
                        </td>
                    </tr>
                    <tr>
                        <td>Số 2</td>
                        <td>
                            <input type="number" name="s2" value="<?php  if(isset($_POST['s2'])) echo $_POST['s2'];?>" />
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


