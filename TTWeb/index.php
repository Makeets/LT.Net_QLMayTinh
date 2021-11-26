<?php 
                        session_start();
                            if(isset($_SESSION["user"]))
                    {
                        echo $_SESSION["user"]; 
                    }
                    ?>
<?php
    // ob_start();
    include_once './ketnoi.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            Máy tính để bàn
        </title>
        <link rel="stylesheet" href="./CSS/style.css"">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
        <?php
            if(isset ($_GET['page_layout']))
            {
                switch($_GET['page_layout'])
                {
                    case 'dangnhap':
                        include_once './login2.php';
                        break;
                    case 'dangky':
                        include_once './signup.php';
                        break;
                    case 'dangxuat':
                        include_once './logout.php';
                        break;
                    case 'chitietsp':
                        include_once './product.php';
                        break;     
                    case 'giohang':
                        include_once './cart.php';
                        break;  
                }  
            }
        ?>
    </head>
    <body>
        <!-- ---HEADER --HEADER --HEADER --HEADER --HEADER --HEADER --HEADER --HEADER --HEADER --HEADER --HEADER --HEADER --HEADER --HEADER -->
    <div id="header">
       <div class="container">
           <div class="logo">
               <a href="">Tickets To My Downfall!!</a> 
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
                <li><a href="">HOME</a></li>
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
                <li><a href="lienhe.php">LIÊN HỆ</a></li>
                <li><a href="">HELP</a></li>
            </ul>
                <div class="search">
                    <!-- <input type="text" class="keyword" placeholder="SEARCH" />
                    <button type="submit" class="btnTK">
                        <i class="fas fa-search"></i>
                    </button> -->
                    <form action="index.php?page_layout=timkiem" method="POST">
                            <input type="search" name="search" class="keyword" placeholder="Search">
                            <button type="submit" name="submit" class="btnTK"><i class="fas fa-search"></i></button>
                        </form>
                </div>
                <div class="others">
                        <li><a href="cart.php" class="fa fa-shopping-bag"></a></li>
                        <li><a href="login2.php" class="fas fa-user-circle"></a></li>
                        <li><a href="logout.php">Đăng xuất</a></li>
                </div>
        </div>        
    </div>
<!-- ----BANNER---BANNER---BANNER---BANNER---BANNER---BANNER---BANNER---BANNER---BANNER---BANNER---BANNER---BANNER---BANNER---BANNER---BANNER -->
<section id="Banner">
    <div class="aspect-ratio-169"> 
        <img src="./image/cover.png" />
        <img  src="./image/cover2.PNG" />
        <img src="./image/cover3.png" />
    </div> 
    <div class="dot-container">
        <div class="dot active"></div>
        <div class="dot"></div>
        <div class="dot"></div>
    </div>
</section>    
<!--  -----FT -----FT -----FT -----FT -----FT -----FT -----FT -----FT -----FT -----FT -----FT -----FT -----FT V-----FT -----FT -----FT -->
    <div id="feature">
        <div class="container">
            <div class="left">
            <h1>OUR PRODUCT</h1>
            <?php
            if(isset ($_GET['page_layout']))
            {
                switch($_GET['page_layout'])
                {
                    case 'timkiem':
                        include_once './timkiem.php';
                        break;  
                }  
            }
            else {
                include_once './sanpham.php';
            }
        ?>
                 
            </div>
                            <div class="right">
                                <img id="b" src="./image/ad1.PNG"> 
                                <img id="b" src="./image/img1.PNG">
                                <img id="c" src="./image/img2.png">
                            </div>
        </div>
    </div>                  
    <!------Footer----Footer----Footer----Footer----Footer----Footer----Footer----Footer----Footer----Footer----Footer----Footer----Footer-->
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
<!---JVS-JVS---JVS---JVS---JVS---JVS---JVS---JVS---JVS---JVS---JVS---JVS---JVS---JVS---JVS---JVS---JVS---JVS---JVS---JVS---JVS---JVS---JVS---JVS---JVS---JVS---->
    <script>
        const imgPosition=document.querySelectorAll(".aspect-ratio-169 img")
        const imgContainer=document.querySelector('.aspect-ratio-169')
        const dotItem =document.querySelectorAll(".dot")
        let imgNum=imgPosition.length
        let index=0
        imgPosition.forEach(function(image,index){
        image.style.left = index*100 +"%"
        dotItem[index].addEventListener("click",function(){
            slider(index)
        })
        })
        function imgSlide()
        {
            index++;
            if(index>=imgNum)
            {
                index=0
            }
            slider(index)
                imgContainer.style.left="-" +index*100+ "%"
            
        }
        function slider(index)
        {
            imgContainer.style.left="-" +index*100 +"%"
            const dotActive = document.querySelector('.active')
            dotActive.classList.remove("active")
            dotItem[index].classList.add("active")
        }
        setInterval(imgSlide,4000)
    </script>
</html>

