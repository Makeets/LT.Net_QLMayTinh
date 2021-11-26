<?php include_once('signup_submit.php')?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký tài khoản</title>
    <link rel="stylesheet" href="./CSS/signup.css"">
</head>
    <body>
    <form action="signup.php" method="POST" >
    <div class="container">
        <h1>Đăng Ký Tài Khoản</h1>
        <hr>
        <label for=""><b>Họ và Tên</b></label>
        <input type="text" placeholder="Nhập tên" name="name" 
        pattern="[a-zA-ZÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂẾưăạảấầẩẫậắằẳẵặẹẻẽềềểếỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ\s\W|_]{3,15}"
        required
        title="Tên tài khoản phải từ 3 ký tự đến 15 ký tự và không được chứa ký tự số">

        <label for=""><b>Tên đăng nhập</b></label>
        <input type="text" placeholder="Nhập tên đăng nhập" name="username" 
        pattern="[a-zA-Z0-9]{3,15}"
        required
        title="Tên đăng nhập không đc phép có dấu cách">

        <label for=""><b>Email</b></label>
        <input type="email" placeholder="Nhập Email" name="email" required>

        <label for=""><b>Số điện thoại</b></label>
        <input type="text" placeholder="Nhập số điện thoại" name="tele" 
        pattern="[0-9]{10,12}" required
        title="Số điện thoại phải được nhập trong khoảng từ 8 đến 12 ký tự số" >

        <label for=""><b>Mật khẩu</b></label>
        <input type="password" placeholder="Nhập mật khẩu" name="pass" required>

        <label for=""><b>Nhập lại mật khẩu</b></label>
        <input type="password" placeholder="Nhập lại mật khẩu" name="repass" required>

        <div class="clearfix">
        <button type="submit" class="signupbtn" name="submit">Đăng ký</button>
        <a href="index.php">Thoát</a>
        <!-- <button type="reset" class="signupbtn"><a href="index.php">Thoát</a></button> -->
        </div> 
    </div>
    </form>  
</body>

</html>
