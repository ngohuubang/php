<html>
    <head>
        <title>Thong tin</title>
        <style type="text/css">

        body {  

            background-color: #cbbbd1;

        }

        .container{
            width: 390px;
            height: 210px;
            margin: 0 auto;
            border: solid 1px;
        }

    </style>
    </head>
    <body>
        <div class="container">
            <form action="kqbai4.php" method="POST">
            Họ và tên:
            <input type="text" name="ten" value="<?php if(isset($_POST['ten'])) echo $_POST['ten'];?>" />
            <br>
            Địa chỉ:
            <input type="text" name="dia_chi" value="<?php if(isset($_POST['dia_chi'])) echo $_POST['dia_chi'];?>" />
            <br>
            Số điện thoại:
            <input type="text" name="sdt" value="<?php if(isset($_POST['sdt'])) echo $_POST['sdt'];?>" />
            <br>
            Giới tính
            <input type="radio" name="GT" value="Nam"<?php if(isset($_POST['radGT'])&&$_POST['radGT']=='Nam') echo 'checked="checked"';?> checked/>		Nam
	        <input type="radio" name="GT" value="Nu" <?php if(isset($_POST['radGT'])&&$_POST['radGT']=='Nu') echo 'checked="checked"';?>/>
			Nữ
            <br>
            Quốc gia:
            <select name="quoc_gia">
			<option value="Việt nam" <?php if(isset($_POST['quoc_gia'])&& $_POST['quoc_gia']=='Việt nam') echo 'selected';?> selected>
				Việt nam
			</option>
                        <option value="Nhật" <?php if(isset($_POST['quoc_gia'])&& $_POST['lunch']=='Nhật') echo 'selected';?> >
				Nhật
			</option>
            </select>
			<br>
            Các môn đã học:
            <input type="checkbox" name="chk1" value="PHP" <?php if(isset($_POST['chk1'])&& $_POST['chk1']=='PHP') echo 'checked'; else echo ""?>/>PHP 
	        <input type="checkbox" name="chk2" value="C#" <?php if(isset($_POST['chk2'])&& $_POST['chk2']=='C#') echo 'checked'; else echo ""?>/>C#
            <input type="checkbox" name="chk3" value="Python" <?php if(isset($_POST['chk3'])&& $_POST['chk3']=='Python') echo 'checked'; else echo ""?>/>Python<br>
            Ghi chú
            <textarea name="ghi_chu" rows="3" cols="40"><?php if(isset($_POST['ghi_chu'])) echo $_POST['ghi_chu']; ?></textarea>
            <br>
            <input type="submit" value="Gửi"/>
            <input type="reset" value="Hủy" />
            
		
        </form>
        
        </div>
        

    </body>
</html>




