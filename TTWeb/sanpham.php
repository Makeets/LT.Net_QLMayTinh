<?php
                            $item_per_page=!empty($_GET['per_page'])?$_GET['per_page']:6;
                            $current_page=!empty($_GET['page'])?$_GET['page']:1;
                            $offset=($current_page -1) * $item_per_page;
                            $sql = "SELECT * FROM pc LIMIT  ".$item_per_page." OFFSET ".$offset."";
                            $result = mysqli_query($conn, $sql);
                            $sql2="SELECT * FROM pc";
                            $product = mysqli_query($conn, $sql2);
                            $totalpr = mysqli_num_rows($product);
                            $toalpages=ceil($totalpr / $item_per_page);
                            while ($row = mysqli_fetch_array($result)) {
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
                            }
                        ?>      
                        <?php 
                                include_once('./phantrang.php');
                                ?> 