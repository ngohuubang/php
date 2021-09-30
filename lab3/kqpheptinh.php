<html>
    <head>
        <title>Ket qua phep tinh</title>
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
            width: 280px;
            height: 160px;
            margin: 0 auto;
        }

    </style>

    </head>
    <body>
        <?php
            if(isset($_POST['phep']) && isset($_POST['s1'])&& isset($_POST['s2']))
            {
                switch ($_POST['phep']) {
                    case 'Cong':
                        $kq = $_POST['s1'] + $_POST['s2'];
                        break;
                    case 'Tru':
                        $kq = $_POST['s1'] - $_POST['s2'];
                        break;
                    case 'Nhan':
                        $kq = $_POST['s1'] * $_POST['s2'];
                        break;
                    case 'Chia':
                        $kq = $_POST['s1'] / $_POST['s2'];
                        break;
                    default:
                        break;
                }
            }
        ?>
        <div class='container'>
            <form action="" method="POST" name="phep_tinh">
                <table border="1">
                    <thead>
                        <tr>
                           <th colspan="2" align="center"><h3>KẾT QUẢ PHÉP TÍNH</h3></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Phép tính</td>
                            <td><?php  if(isset($_POST['phep'])) echo $_POST['phep'];?></td>
                        </tr>
                        <tr>
                            <td>Số 1</td>
                            <td>
                                <input type="text" name="s1" readonly="true" value="<?php  if(isset($_POST['s1'])) echo $_POST['s1'];?>" />
                            </td>
                        </tr>
                        <tr>
                            <td>Số 2</td>
                            <td>
                                <input type="text" name="s2" readonly="true" value="<?php  if(isset($_POST['s2'])) echo $_POST['s2'];?>" />
                            </td>
                        </tr>
                        <tr>
                            <td>Kết quả</td>
                            <td>
                                <input type="text" name="kq" readonly="true" value="<?php if(isset($kq)) echo $kq;?>" />
                            </td>
                        </tr>
                        <tr>
                            <td> </td>
                            <td>
                                <a href="javascript:window.history.back(-1);">Trở về trang trước</a>
                            </td>
                        </tr>
                    </tbody>
                </table>

            </form>
        </div>
    </body>
</html>


