<html>
    <head>
        <title>Kết quả bài 4</title>
        <style type="text/css">

        body {  

            background-color: #cbbbd1;

        }

        .container{
            width: 180px;
            height: 155px;
            margin: 0 auto;
            border: solid 1px;
        }

    </style>
    </head>
    <body>
        <div class="container">
            Họ và tên: <?php echo $_POST['ten']; ?>
            <br>
            Giới tính: <?php echo $_POST['GT']; ?>
            <br>
            Địa chỉ: <?php echo $_POST['dia_chi']; ?>
            <br>
            Số điện thoại: <?php echo $_POST['sdt']; ?>
            <br>
            Quốc gia : <?php echo $_POST['quoc_gia'];?>
            <br>
            Môn học:
            <?php
               if(isset($_POST['chk1'])) echo  $_POST['chk1'].",";
               if(isset($_POST['chk2'])) echo  $_POST['chk2'].",";
               if(isset($_POST['chk3'])) echo  $_POST['chk3'];
            ?>
            <br>
            Ghi chú: <?php echo $_POST['ghi_chu']; ?>
            <br>
            <a href="javascript:window.history.back(-1);">Trở về trang trước</a>
        </div>
         
         
    </body>
</html>


