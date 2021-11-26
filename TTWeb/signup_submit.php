<?php
    $conn = mysqli_connect ('localhost', 'root', '', 'qlpc') or die ('Không thể kết nối tới database');
    mysqli_set_charset($conn,"utf8");
    if(isset($_POST['submit']) && $_POST["name"] != '' && $_POST["username"] != '' && $_POST["email"] != '' && $_POST["tele"] != '' && $_POST["pass"] != '' && $_POST["repass"] != '')
    {
        $name = $_POST["name"];
        $username = $_POST["username"];
        $email = $_POST["email"];
        $tele = $_POST["tele"];
        $pass = $_POST["pass"];
        $repass = $_POST["repass"]; 
        $sql="SELECT * from user where username ='$username' ";
        $old = mysqli_query($conn,$sql);
        if(mysqli_num_rows($old) > 0)
        {
            echo "Tên đăng nhập đã tồn tại";

        }
        else
        {
            if($pass != $repass)
            {
                echo "Mật khẩu nhập lại bị sai";
            }
            else
                {
                    $sql= "INSERT INTO user (ten,username,email,sdt,mk) VALUES ('$name','$username','$email','$tele','$pass')";
                    mysqli_query($conn,$sql);
                    echo "Đã đăng ký thành công";
                }
        }
    }
?>