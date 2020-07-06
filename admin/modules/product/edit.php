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
                    <h4>Sửa Thông Tin Sản Phẩm</h4>
                <!-- Begin form edit product -->
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                        <?php
                           try {
                               $sql = "SELECT name, soluong, gia, sale, avatar, category, content FROM product";
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
                            <label>Danh Mục Sản Phẩm</label>
                            <select class="form-control form-control-lg" name="loaisp">
                                <?php 
                                $dsLoaiSP = DataProvider::ExecuteQuery( "SELECT id, name FROM category");
                                while($loai = mysqli_fetch_array($dsLoaiSP)){ ?>
                                 <option value='<?php echo $loai['id']?>' <?php echo $row['category']==$loai['id'] ? "selected ='selected'" : ' ' ?>> <?php echo $loai['name'] ?> </option> ;
                                <?php }?>
                                
                            </select>
                            <div class="form-group">
                            <label>Loại Sản Phẩm</label>
                            <select class="form-control form-control-lg" name="type">
                                <?php 
                                $dsLoai= DataProvider::ExecuteQuery( "SELECT * FROM `type`");
                                while($loaisp = mysqli_fetch_array($dsLoai)){
                               echo  " <option value='{$loaisp['id']}'> {$loaisp['name']} </option>"  ;
                                }
                                ?>
                            </select>
                            
                        </div>
                        </div>
                        <div class="form-group">
                            <label>Tên Sản Phẩm</label>
                            <input type="text" class="form-control" placeholder="Enter name" name="TenSP" <?php echo "value='{$row['name']}'"?>>
                        </div>
                        <div class="form-group">
                            <label>Số Lượng</label>
                            <input type="number" class="form-control" placeholder="1" name="soluong" <?php echo "value='{$row['soluong']}'"?>>
                        </div>
                        <div class="form-group">
                            <label>Giá</label>
                            <input type="number" class="form-control" placeholder="9 000 000" name="Gia"<?php echo "value='{$row['gia']}'"?>>
                        </div>
                        <div class="form-group">
                            <label>Giảm Giá</label>
                            <input type="number" class="form-control" placeholder="1 000 000" name="GiamGia"<?php echo "value='{$row['sale']}'"?>>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Ảnh</label>
                            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="Hinh">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Mô Tả Sản Phẩm</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="noidung"><?php echo "{$row['content']}"?></textarea>
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

if (isset($_REQUEST['TenSP'])) {
    $sql = "UPDATE `product` SET `name` = '{$_REQUEST['TenSP']}',`soluong` = '{$_REQUEST['soluong']}' ,`gia` = '{$_REQUEST['Gia']}',`sale` = '{$_REQUEST['GiamGia']}' ,`category` = '{$_REQUEST['loaisp']}',`type` = '{$_REQUEST['type']}',`content` = '{$_REQUEST['noidung']} 'WHERE `product`.`id` = $id";
    echo $sql;
    DataProvider::ExecuteQuery($sql);
    if (@$_FILES['Hinh']['error'] == 0) {
        move_uploaded_file(@$_FILES['Hinh']["tmp_name"], "img_product/". @$_FILES['Hinh']["name"]);
        $sql = "UPDATE `product` SET  `avatar` = '{$_FILES['Hinh']['name']}' ,' WHERE `product`.`id` = $id";
        echo $sql;
        DataProvider::ExecuteQuery($sql);
    }
}

require_once __DIR__ . "/../../layouts/footer.php" ?>