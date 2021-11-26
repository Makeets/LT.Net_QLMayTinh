
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="./CSS/login.css"">
</head>
    <body>
    <form action="login2.php" method="POST" >
    <div class="container">
        <h1>Đăng Nhập</h1>
        <hr>
        <label for=""><b>Tên đăng nhập</b></label>
        <input type="text" placeholder="Nhập tên đăng nhập" name="username" required>
        <label for=""><b>Mật khẩu</b></label>
        <input type="password" placeholder="Nhập mật khẩu" name="pass" required>
        <div class="clearfix">
        <button type="submit" class="loginbtn" name="submit">Đăng nhập</button>
        <a href="index.php">Thoát</a>
        <a href="signup.php">Đăng ký</a>
        </div> 
    </div>
    </form>  
</body>

</html>
<?php
    session_start();
    $conn = mysqli_connect ('localhost', 'root', '', 'qlpc') or die ('Không thể kết nối tới database');
    mysqli_set_charset($conn,"utf8");
    if(isset($_POST['submit']) && $_POST["username"] != '' && $_POST["pass"] != '')
    {
        $username=$_POST["username"];
        $pass=$_POST["pass"];
        $sql="SELECT *FROM user WHERE username='$username' AND mk='$pass'";
        $user = mysqli_query($conn,$sql);
        if(mysqli_num_rows($user) >0)
        {
            $_SESSION["user"] = $username;
                header("location:index.php"); 
        }
        else
        {
            echo "Bạn nhập sai TÀI KHOẢN hoặc MẬT KHẨU";
        }

    }

?>