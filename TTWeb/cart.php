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
<!-- --Cart-------Cart-------Cart-------Cart-------Cart-------Cart-------Cart-------Cart-------Cart-------Cart-------Cart-------Cart-------Cart----- -->
<section class="cart">
    <div class="container">
        <div class="top-wrap">
            <div class="top">
                <div class="top-icon1">
                    <i class="fas fa-shopping-cart"></i>
                </div>
                <div class="top-icon">
                    <i class="fas fa-map-marker-alt"></i>
                </div>
                <div class="top-icon">
                    <i class="far fa-credit-card"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="container2">
        <div class="cart-content">
            <div class="cart-left">
                <table>
                    <tr>
                        <th>Sản phẩm</th>
                        <th>Tên sản phẩm</th>
                        <th>Số lượng</th>
                        <th>Thành tiền</th>
                        <th>Xóa</th>
                    </tr>
                    <tr>
                        <td><img src="./image/Dell1.PNG" alt=""></td>
                        <td>Dell Office 12</td>
                        <td> <input  type="number" min="0" value="1"></td>
                        <td> <p>10.000.000<sup>đ</sup></p></td>
                        <td><span>X</span></td>
                    </tr>
                </table>
            </div>
        
            <div class="cart-right">
                <table>
                    <tr>
                        <th colspan="2">TỔNG TIỀN GIỎ HÀNG</th>
                    </tr>
                    <tr>
                        <td>TỔNG SẢN PHẨM:</td>
                        <td>1<td>
                    </tr>
                    <tr>
                        
                        <td>TỔNG TIỀN:</td>
                        <td><p>10.000.000<sup>đ</sup></p></td>
                    </tr>
                    <tr>
                        <td>TẠM TÍNH:</td>
                        <td><p style="color: black; font-weight: bold;">53.666.000<sup>đ</sup></p></td>
                    </tr>
                </table>
                <div class="right-text">
                    <p>Bạn sẽ được miễn phí vận chuyển nếu đơn hàng trị giá trên 10.000.000 đ</p>
                </div>
                <div class="right-button">
                    <button>Tiếp tục mua sắm</button>
                    <button>THANH TOÁN</button>
                </div>
            </div>
            </div>
        </div>
      
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