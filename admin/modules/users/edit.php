<?php
require_once __DIR__ . "/../../autoload/autoload.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    header('location: index.php');
}
?>
<?php require_once __DIR__ . "/../../layouts/header.php" ?>
<div class="product-status mg-tb-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-status-wrap">
                    <h4>Sửa Thông Tin User</h4>
                    <!-- Begin form add product -->
                    <form action="" method="post" enctype="multipart/form-data">
                        <?php
                        try {
                            $sql = "SELECT * FROM users";
                            if (isset($_GET['id'])) {
                                $id = $_GET['id'];
                                $sql .= " WHERE id = " . $id;
                            }
                            $result = DataProvider::ExecuteQuery($sql);
                            $row = mysqli_fetch_array($result);
                        } catch (Exception $ex) {
                            echo "Không thể mở CSDL";
                        }
                        ?>
                        <div class="form-group">
                            <label>Tên User</label>
                            <input type="text" class="form-control" placeholder="Enter name" name="TenAD" value="<?php echo $row['name'] ?>">
                        </div>
                        <div class="form-group">
                            <label>Địa Chỉ</label>
                            <input type="text" class="form-control" placeholder="351 Lạc Long Quân-Phường 4- Quận 5- Thành Phố Hồ Chí Minh" name="address" value="<?php echo $row['address'] ?>">
                        </div>
                        <div class="form-group">
                            <label>Số Điện Thoại</label>
                            <input type="number" class="form-control" placeholder="" name="phone" value="<?php echo $row['phone'] ?>">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" placeholder="ABC@gmail.com" name="email" value="<?php echo $row['email'] ?>">
                        </div>
                        <div class="form-group">
                            <label>Tên Đăng Nhập</label>
                            <input type="text" class="form-control" placeholder="NguyenVanA" name="account" value="<?php echo $row['Account'] ?>">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" placeholder="" name="password" value="<?php echo $row['password'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Ảnh Đại Diện</label>
                            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="Hinh">
                            <img src="img_users/<?php echo $row['avatar'] ?>">
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>

                        <!-- End form add product -->
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
<?php
if (isset($_REQUEST['TenAD'])) {
    $sql = "UPDATE `users` SET `name` = '{$_REQUEST['TenAD']}', `email` = '{$_REQUEST['email']}', `address` = '{$_REQUEST['address']}', `phone` = '{$_REQUEST['phone']}', `Account` = '{$_REQUEST['account']}',
             `password` = '{$_REQUEST['password']}', `created_at` = NULL, `updata_up` = NULL WHERE `users`.`id` = $id";
    echo $sql;
    DataProvider::ExecuteQuery($sql);
    if (@$_FILES['Hinh']['error'] == 0) {
        move_uploaded_file(@$_FILES['Hinh']["tmp_name"], "img_users/" . @$_FILES['Hinh']["name"]);
        $sql = "UPDATE `users` SET  `avatar` = '{$_FILES['Hinh']["name"]}' WHERE `users`.`id` = $id";
        echo $sql;
        DataProvider::ExecuteQuery($sql);
    }
}
require_once __DIR__ . "/../../layouts/footer.php" ?>