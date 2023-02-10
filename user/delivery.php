<?php
    session_start();
?>
<title>Thông tin mua hàng</title>
    <link rel="stylesheet" href="css/style.css" class="css">
    <script src="https://kit.fontawesome.com/17d0ccc118.js" crossorigin="anonymous"></script>
    <script>
        function validate_demo(){
            //validate họ tên
            var regex_recipient_name = /^[a-zA-ZàÀảẢãÃáÁạẠăĂằẰẳẲẵẴắẮặẶâÂầẦẩẨẫẪấẤậẬđĐèÈẻẺẽẼéÉẹẸêÊềỀểỂễỄếẾệỆìÌỉỈĩĨíÍịỊòÒỏỎõÕóÓọỌôÔồỒổỔỗỖốỐộỘơƠờỜởỞỡỠớỚợỢùÙủỦũŨúÚụỤưƯừỪửỬữỮứỨựỰỳỲỷỶỹỸýÝỵỴ\s]+$/;
            var recipient_name = document.getElementById('recipient_name').value;
            var dem = 0;
            var kq_recipient_name = regex_recipient_name.test(recipient_name);
            if(recipient_name.length == 0){
                document.getElementById('error-recipient_name').innerHTML = "Phải nhập họ tên";
                dem++;
            }
            else if(kq_recipient_name == false){
                document.getElementById('error-recipient_name').innerHTML = "Họ tên không được chứa chữ số và ký tự đặc biệt";
                dem++;
            }
            else {
                document.getElementById('error-recipient_name').innerHTML = "";
            }
             // 
             var regex_phonenumber = /^0[0-9]{9,10}$/;
            var phonenumber = document.getElementById('phonenumber').value;
            var kq_phonenumber = regex_phonenumber.test(phonenumber);
            if(phonenumber.length == 0){
                document.getElementById('error-phonenumber').innerHTML = "Phải nhập số điện thoại";
                dem++;
            }
            else if(kq_phonenumber == false){
                document.getElementById('error-phonenumber').innerHTML = "Phải nhập đúng dịnh dạng số điện thoại";
                dem++;
            }
            else {
                document.getElementById('error-phonenumber').innerHTML = "";
            }
            // 
            var local = document.getElementById('local').value;
            if(local.length == 0){
                document.getElementById('error-local').innerHTML = "Phải nhập địa chỉ";
                dem++;
            }
            else {
                document.getElementById('error-local').innerHTML = "";
            }
            if(dem != 0){
                return false;
            }
            return true;
        }
    </script>
    <header>
       <div class="logo">
       <a href="index.php"><img src="image/logo1.png" alt="logo"></a>
       </div>
       <div class="menu">
           <li><a href="index.php">Trang chủ</a></li>
           <li><a href="catergory-nu.php">Nữ</a>
            <ul class="sub-menu">
                <li><a href="">Áo </a>
                     <ul>
                     <?php 
                     include '../admin/connect/open-connect.php';
                     $sql = "SELECT catergory.*
                     FROM catergory 
                     WHERE catergory.catergory_name LIKE '%áo%nữ'";
                     $result = mysqli_query($connect,$sql);
                     foreach ($result as $each){
                         ?>
                         <li><a href="catergory.php?catergory_id=<?php echo $each['catergory_id'];?>"><?php echo $each['catergory_name'];?></a></li>
                      <?php
                     }
                    ?>   
                     </ul>
                </li>
                <li><a href="">Quần</a>
                     <ul>
                     <?php 
                     $sql = "SELECT catergory.*
                     FROM catergory 
                     WHERE catergory.catergory_name LIKE '%quần%nữ'";
                     $result = mysqli_query($connect,$sql);
                     foreach ($result as $each){
                         ?>
                         <li><a href="catergory.php?catergory_id=<?php echo $each['catergory_id'];?>"><?php echo $each['catergory_name'];?></a></li>
                      <?php
                     }
                    ?>   
                     </ul>
                </li>
                <?php 
                     $sql = "SELECT catergory.*
                     FROM catergory 
                     WHERE catergory.catergory_name LIKE '%váy%nữ'";
                     $result = mysqli_query($connect,$sql);
                     foreach ($result as $each){
                         ?>
                         <li><a href="catergory.php?catergory_id=<?php echo $each['catergory_id'];?>"><?php echo $each['catergory_name'];?></a></li>
                      <?php
                     }
                    ?>   
            </ul></li>
           <li><a href="catergory-nam.php">Nam</a>
            <ul class="sub-menu">
                <li><a href="">Áo </a>
                     <ul>
                     <?php 
                     $sql = "SELECT catergory.*
                     FROM catergory 
                     WHERE catergory.catergory_name LIKE '%áo%nam'";
                     $result = mysqli_query($connect,$sql);
                     foreach ($result as $each){
                         ?>
                         <li><a href="catergory.php?catergory_id=<?php echo $each['catergory_id'];?>"><?php echo $each['catergory_name'];?></a></li>
                      <?php
                     }
                    ?>   
                     </ul>
                </li>
                <li><a href="">Quần</a>
                     <ul>
                     <?php 
                     $sql = "SELECT catergory.*
                     FROM catergory 
                     WHERE catergory.catergory_name LIKE '%quần%nam'";
                     $result = mysqli_query($connect,$sql);
                     foreach ($result as $each){
                         ?>
                         <li><a href="catergory.php?catergory_id=<?php echo $each['catergory_id'];?>"><?php echo $each['catergory_name'];?></a></li>
                      <?php
                     }
                    ?>   
                     </ul>
                </li>
            </ul></li>
           <li><a href="catergory-tre.php">Trẻ em</a>
            <ul class="sub-menu">
                <li><a href="">Bé gái </a>
                     <ul>
                     <?php 
                     $sql = "SELECT catergory.*
                     FROM catergory 
                     WHERE catergory.catergory_name LIKE '%gái'";
                     $result = mysqli_query($connect,$sql);
                     foreach ($result as $each){
                         ?>
                         <li><a href="catergory.php?catergory_id=<?php echo $each['catergory_id'];?>"><?php echo $each['catergory_name'];?></a></li>
                      <?php
                     }
                    ?>   
                     </ul>
                </li>
                <li><a href="">Bé trai</a>
                     <ul>
                     <?php 
                     $sql = "SELECT catergory.*
                     FROM catergory 
                     WHERE catergory.catergory_name LIKE '%trai'";
                     $result = mysqli_query($connect,$sql);
                     foreach ($result as $each){
                         ?>
                         <li><a href="catergory.php?catergory_id=<?php echo $each['catergory_id'];?>"><?php echo $each['catergory_name'];?></a></li>
                      <?php
                     }

                    ?>   
                     </ul>
                </li>
            </ul></li>
           <li><a href="introduction.php">Về chúng tôi</a></li>
       </div>
       <div class="other">
            <li> <form method="get" action="search-list.php">
            <?php
            $search = "";
            if(isset($_GET['search'])){
            $search = $_GET['search'];
            }
            ?>
                <input placeholder="Tìm kiếm" type="text"name="search" value="<?php echo $search;?>"> 
                <button style="cursor: pointer; background-color: white; border: none"><i style="left:180px;" class="fas fa-search"></i></button>
                </form>
            </li>
           <li><a class="fa fa-shopping-bag" href="cart.php" style=" position: relative;"></a>
           <div style=" position: absolute; 
                height: 18px;
                width :17px;
               border-radius: 50%;
               background-color: rgb(241, 14, 14);
               margin-top: -30px;
               margin-left: 10px;
               padding-left: 4px;
               font-size: 15px;
               color: white;"><?php if(isset($_SESSION['gio_hang'])){echo COUNT($_SESSION['gio_hang']);} else{echo "0";}?></div></li>
           <li><a class="fa fa-user" href="isset-user.php" style=" position: relative;"></a>
           <?php 
    $sql = "SELECT user.*
    FROM user";
    $result = mysqli_query($connect, $sql);
    foreach ($result as $each_u){?>
   <p style=" position: absolute;font-size: 10px; margin-left: -10px; "><?php
if(isset($_SESSION['user_id'])){
if($_SESSION['user_id'] == $each_u['user_id']){
echo $each_u['username'];
}
}
}
?></p>
        </li>
       </div>
</header>
<section class="delivery">
        <div class="container">
            <div class="delivery-top-wrap">
                <div class="delivery-top">
                   <div class="delivery-top-delivery delivery-top-item">
                     <i class="fas fa-shopping-cart"></i>
                   </div>
                   <div class="delivery-top-address delivery-top-item">
                     <i class="fas fa-map-marker-alt"></i>
                   </div>
                   <div class="delivery-top-payment delivery-top-item">
                     <i class="fas fa-money-check-alt"></i>
                   </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div style=" margin-left: 30px;"class="delivery-content row">
                <div class="delivery-content-left">
                    <p>Vui lòng nhập thông tin liên hệ của bạn để chúng tôi giao hàng</p>
                    <div class="delivery-content-left-dangnhap row">
                        <i class="fas fa-sign-in-alt"></i>
                        <p>Thông tin liên hệ:</p>
                    </div>
                    <form action="order.php" id="form-login" method="post">
                    <div class="delivery-content-left-input-top row">
                        <div class="delivery-content-left-input-top-item">
                            <label for="">Họ tên người nhận <span style="color:red">*</span></label>
                            <input required type="text"name="recipient_name"id="recipient_name"><span id="error-recipient_name"></span>
                        </div>
                        <div class="delivery-content-left-input-top-item">
                            <label for="">Điện thoại <span style="color:red">*</span></label>
                            <input required type="text"name="phonenumber"id="phonenumber"><span id="error-phonenumber"></span>
                        </div>
                        
                    </div>
                    <div class="delivery-content-left-input-bottom">
                        <label for="">Địa chỉ <span style="color:red">*</span></label>
                        <input required type="text"name="local"id="local"><span id="error-local"></span>
                    </div>
                    <div class="delivery-content-left-button row">
                        <a href="cart.php"><span>&#171</span><p>Quay lại giỏ hàng</p></a>
                        <button onclick="return validate_demo()" style="submit" style="width:30%; margin-left:710px;"><p style="font-weight: bold;" >THANH TOÁN VÀ GIAO HÀNG</p></button>
                    </div>
                    </form>
                </div>
<?php 
                include_once "../admin/connect/open-connect.php";
                if(isset($_SESSION['gio_hang'])){?>
                <div  class="delivery-content-right">
                    <table style=" width:400px;">
                        <tr>
                            <th>Tên sản phẩm</th>
                            <th>Số lượng</th>
                            <th>Thành tiền</th>
                        </tr>
                        <?php

                $tong_tien = 0;
                $gio_hang = $_SESSION['gio_hang'];
                foreach ($gio_hang as $product_detail_id => $so_luong){
                    $sql = "SELECT product_detail.*, product.product_name
                    FROM product_detail
                    INNER JOIN product
                    ON product_detail.product_id = product.product_id  
                    WHERE product_detail_id = $product_detail_id";
                    $query = mysqli_query($connect, $sql);
                    foreach ($query as $each_tt){
        ?>
                        <tr>
                            <td ><?php echo $each_tt['product_name'];?> </td>
                            <td><?php echo $so_luong;?></td>
                            <?php
                        $thanh_tien = $each_tt['price'] * $so_luong;
                        $tong_tien += $thanh_tien+25;
                    ?>
                            <td><?php echo $thanh_tien; echo ".000";?><sup>đ</sup></td>
                        </tr>
                        <?php
                    }
                }
            }

        ?>
                        <tr>
                            <td style="font-weight: bold;" colspan="2">Tổng</td>
                            <td style="font-weight: bold;"><?php echo $thanh_tien; echo ".000";?><sup>đ</sup></td>
                        </tr>
                        <tr>
                            <td style="font-weight: bold;" colspan="2">Phí giao hàng(1 loại SP)</td>
                            <td style="font-weight: bold;">25.000<sup>đ</sup></td>
                        </tr>
                        <tr>
                            <td style="font-weight: bold;" colspan="2">Tổng tiền hàng</td>
                            <td style="font-weight: bold;"><?php echo $tong_tien; echo ".000";?><sup>đ</sup></td>
                        </tr>
                    </table>

<?php
            include_once "../admin/connect/close-connect.php";?>
                            </div>
            </div>
        </div>
    </section>
   <!--------------------Footer----------------------->
   <footer>
    <div class="footer-top">
        <li><a href=""><img src="image/img-congthuong.png" alt=""></a></li>
        <li><a href="">Liên hệ</a></li>
        <li><a href="">Tuyển dụng</a></li>
        <li><a href="">Giới thiệu</a></li>
        <li>
            <a href="" class="fab fa-facebook"></a>
            <a href="" class="fab fa-twitter"></a>
            <a href="" class="fab fa-youtube"></a>
        </li>
    </div>
        <div class="footer-center">
            <p>Công ty Cổ phần Dự Kim với số đăng ký kinh doanh: 0105777650 <br>
            <b> Địa chỉ đăng ký:</b> Tổ dân phố Tháp, P.Đại Mỗ, Q.Nam Từ Liêm, TP.Hà Nội, Việt Nam <br>
             <b>Số điện thoại:</b> 0243 205 2222
            </p>   
        </div>
    <div class="footer-bottom">
        ©PPStyle All rights reserved
    </div>
    </footer>
</body>
<link rel="stylesheet" href="js/script.js" class="js">
</html>