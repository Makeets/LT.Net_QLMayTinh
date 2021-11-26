<?php
    $conn = mysqli_connect ('localhost', 'root', '', 'qlpc');
    if($conn)
    {
        $setLang=mysqli_query($conn,"SET NAMES 'utf8'");
    }
    else
    {
        die("Kết nối thất bại".mysqli_connect_error());
    }
?>