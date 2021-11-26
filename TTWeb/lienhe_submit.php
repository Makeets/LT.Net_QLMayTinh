<?php
    $conn = mysqli_connect ('localhost', 'root', '', 'qlpc') or die ('Không thể kết nối tới database');
    mysqli_set_charset($conn,"utf8");
    if(isset($_POST['submit']) && $_POST["email"] != '' && $_POST["sdt"] != '' && $_POST["nd"] != '' )
    {
        $email = $_POST["email"];
        $sdt = $_POST["sdt"];
        $nd = $_POST["nd"];
        $sql= "INSERT INTO lienhe (email,sdt,noidung) VALUES ('$email','$sdt','$nd')";
                    mysqli_query($conn,$sql);
                    echo "Đã gửi thành công";
    }
?>