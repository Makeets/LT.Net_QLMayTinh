<?php include_once('lienhe_submit.php')?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liên hệ</title>
    <link rel="stylesheet" href="./CSS/signup.css"">
</head>
    <body>
    <form action="lienhe.php" method="POST" >
    <div class="container">
        <h1>Liên Hệ</h1>
        <hr>
        <label for=""><b>Email</b></label>
        <input type="email" placeholder="Nhập Email" name="email" required>

        <label for=""><b>Số điện thoại</b></label>
        <input type="text" placeholder="Nhập số điện thoại" name="sdt" 
        pattern="[0-9]{10,12}" required
        title="Số điện thoại phải được nhập trong khoảng từ 8 đến 12 ký tự số" >

        <label for=""><b>Nội dung</b></label>
        <input type="text" placeholder="Nhập nội dung" name="nd" required>
        <div class="clearfix">
        <button type="submit" class="signupbtn" name="submit">Hoàn thành</button>
        <a href="index.php">Thoát</a>
        </div> 
    </div>
    </form>  
</body>

</html>