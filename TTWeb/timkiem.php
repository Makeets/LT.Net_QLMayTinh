<?php
            
            $search = $_POST['search'];
            $sql = "SELECT * FROM pc WHERE ten like '%$search%'";
            $result = mysqli_query($conn, $sql);
            $num = mysqli_num_rows($result);
        
    ?>

 
    <div class="title__main">
        <span style="font-weight: 500; color: rgb(160, 160, 175);"><a style="font-weight: 300; color: black;"
                href="index.php">Trang chủ</a> > Tìm kiếm</span>
        <h1 class="tilte__main-big">Tìm kiếm</h1>
        <p class="tilte__main-small">
        <?php
            if ($num > 0 ){
                // Dùng $num để đếm số dòng trả về.
                echo "$num ket qua tra ve voi tu khoa <b>$search</b>";
        ?>
        </p>
    </div>
    <div class="post__main">
    
        <?php
            while($row = mysqli_fetch_array($result)){
        ?>
             <div class="card">
                                    <a href="product.php&masp=<?php echo $row['masp']; ?>">
                                        <img id="a" src="image/<?php echo $row['img']; ?>">
                                    </a>
                                    <h2>
                                        <a href="index.php?page_layout=chitietsp&masp=<?php echo $row['masp']; ?>&hang=<?php echo $row['hang'];?> ">
                                        <?php echo $row['ten']; ?></a>
                                    </h2>
                                    <p>Giá: <?php echo number_format($row['gia'],0,',','.'); ?><sup>đ</sup></p>
                                        <div class="btn">
                                            <a href="" class="btnMua">Mua</a>
                                            <a href="cart.php?masp=<?php echo $row['masp']; ?>" class="btnThem">Thêm vào giỏ</a>
                                        </div>
                                    </div>
        <?php 
            }}
            else{
                echo 'không tìm thấy kết quả';
            }
        ?>
    </div>