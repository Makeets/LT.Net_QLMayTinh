<?php
    $id=$_GET['masp'];
    $sql="SELECT * FROM pc WHERE masp=$id";
    $query=mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($query);

    $sql2="SELECT * FROM pc ORDER BY RAND() LIMIT 3";
    $query2=mysqli_query($conn,$sql2);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            Máy tính để bàn
        </title>
        <link rel="stylesheet" href="./CSS/style.css"">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    </head>
    <body>
        <!-- ---HEADER --HEADER --HEADER --HEADER --HEADER --HEADER --HEADER --HEADER --HEADER --HEADER --HEADER --HEADER --HEADER --HEADER -->
   <div id="header">
       <div class="container">
           <div class="logo">
               <a href="index.php">Tickets To My Downfall!!</a> 
           </div>

           <div class="in4">
                <ul>
                    <li>
                        <div class="contact">
                            <label>Email</label>
                            <span>sv.18103100073@uneti.edu.vn</span>
                        </div>
                    </li>

                    <li>
                        <div class="contact">
                            <label>Call</label>
                            <span>0814406569</span>
                        </div>
                    </li>

                    <li>
                          <a href="signup.php" >Đăng ký</a>  
                    </li>
                </ul>
           </div>
       </div>
   </div>
<!-- ---START MENU------START MENU------START MENU------START MENU------START MENU------START MENU------START MENU------START MENU---  -->
    <div id="nav">
        <div class="container">
            <ul class="menu">
                <li><a href="index.php">HOME</a></li>
                <li><a href="">ABOUT</a></li>
                <li><a href="">OFFICE</a>
                    <ul class="sick">
                        <li><a href="">DELL</a></li>
                        <li><a href="">HP</a></li>
                        <li><a href="">ASUS</a></li>
                        <li><a href="">LENOVO</a></li>
                        <li><a href="">ACER</a></li>
                    </ul>
                </li>
                <li><a href="">GAMING</a>
                    <ul class="sick">
                        <li><a href="">DELL</a></li>
                        <li><a href="">HP</a></li>
                        <li><a href="">ASUS</a></li>
                        <li><a href="">LENOVO</a></li>
                        <li><a href="">ACER</a></li>
                    </ul>
                </li>
                <li><a href="">WORK STATION</a>
                    <ul class="sick">
                        <li><a href="">DELL</a></li>
                        <li><a href="">HP</a></li>
                        <li><a href="">ASUS</a></li>
                        <li><a href="">LENOVO</a></li>
                        <li><a href="">ACER</a></li>
                    </ul>
                </li>
                <li><a href="">SERVICE</a></li>
                <li><a href="">HELP</a></li>
            </ul>
                <div class="search">
                    <input type="text" class="keyword" placeholder="SEARCH" />
                    <button type="submit" class="btnTK">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
                <div class="others">
                        <li><a href="login2.php" class="fa fa-shopping-bag"></a></li>
                        <li><a href="login2.php" class="fas fa-user-circle"></a></li>
                        <li><a href="logout.php">Đăng xuất</a></li>
                </div>
        </div>        
    </div>
    <!--PRODUCT-PRODUCT-PRODUCT-PRODUCT-PRODUCT-PRODUCT-PRODUCT-PRODUCT-PRODUCT-PRODUCT-PRODUCT-PRODUCT-PRODUCT-PRODUCT-PRODUCT-PRODUCT-PRODUCT-PRODUCT--- -->
<section class="product">
        <div class="container">
            <div class="content">
                <div class="left">
                    <img id="m" src="image/<?php echo $row['img']; ?>" alt="">
                </div>
                <div class="right">
                    <div class="right-name">
                        <h1><?php echo $row['ten']; ?></h1>
                        <p>Msp: <?php echo $row['masp']; ?></p>
                    </div>
                    <div class="right-price">
                        <p><?php echo number_format($row['gia'],0,',','.'); ?><sup>đ</sup></p>
                    </div>
                    <div class="right-sl">
                        <p style="font-weight: bold;">Số lượng:</p>
                        <input type="number" min="0" value="1">
                    </div>
                    <div class="right-btn">
                        <button><i class="fas fa-dollar-sign"></i><p>Mua hàng</p></button>
                        <button><i class="fas fa-cart-plus"></i><p>Thêm vào giỏ</p></button>
                    </div>
                    <div class="right-contact">
                        <div class="right-icon">
                            <i class="fas fa-phone-alt"></i><p>Hotline</p>
                        </div>
                        <div class="right-icon">
                            <i class="fas fa-comments"></i><p>Chat</p>
                        </div>
                        <div class="right-icon">
                            <i class="fas fa-envelope"></i><p>Mail</p>
                        </div> 
                    </div>
                    <div class="detail">
                        <!-- <div class="detail-icon">
                            &#8744;
                        </div> -->
                        <div class="detail-big">
                            <div class="detail-title">
                                <p>Chi tiết sản phẩm</p>
                            </div>
                            <div class="detail-detail">
                                <p><?php echo $row['cauhinh'];   ?></p>
                            </div>
                        </div>
                    </div>
                
                </div>
            </div>
        </div>
</section>
<!-- product related ---- product related --- product related --- product related --- product related --- product related --- product related --- product related ---->
<section class="product-related">
    <div class="product-related-title">
        <p>Sản phẩm liên quan</p>
    </div>
    <div class="product-content">
            <?php
                while($row2=mysqli_fetch_array($query2))
                {
            ?> 
        <div class="related-items">
            <img id="t" src="image/<?php echo $row2['img']; ?>" alt="">
            <h1><a href="index.php?page_layout=chitietsp&masp=<?php echo $row2['masp']; ?>"><?php   echo $row2['ten']; ?></a></h1>
            <p><?php echo number_format($row2['gia'],0,',','.');   ?><sup>đ</sup></p>
        </div>    
            <?php
                }
            ?>
    </div>
</section>
<!-- footer--- footer--- footer--- footer--- footer--- footer--- footer--- footer--- footer--- footer--- footer--- footer--- footer--- footer--- footer--- -->
    <div class="guidance">
        <h1>Cảm ơn quý khách đã mua hàng</h1> 
    </div>
    <footer>
        <div class="footer">
            <h3>Họ tên: Phan Đức Thắng</h3>
            <h3>Ngày Sinh: 22/12/2000</h3>
            <h3>Mã sinh viên: 18103100073</h3>
            <h3>Lớp: ĐHTI12A1HN</h3> 
        </div>
    </footer>
    </body>