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
                    <h4>Thêm Sản Phẩm Mới</h4>
                <!-- Begin form add product -->
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Danh mục</label>
                            <select class="form-control form-control-lg" name="loaisp">
                                <?php 
                                $dsLoaiSP = DataProvider::ExecuteQuery( "SELECT id, name FROM category");
                                while($loai = mysqli_fetch_array($dsLoaiSP)){
                               echo  " <option value='{$loai['id']}'> {$loai['name']} </option>"  ;
                                }
                                ?>
                            </select>
                            
                        </div>
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
                        <div class="form-group">
                            <label>Tên Sản Phẩm</label>
                            <input type="text" class="form-control" placeholder="Enter name" name="TenSP">
                        </div>
                        <div class="form-group">
                            <label>Số Lượng</label>
                            <input type="number" class="form-control" placeholder="1" name="soluong">
                        </div>
                        <div class="form-group">
                            <label>Giá</label>
                            <input type="number" class="form-control" placeholder="9 000 000" name="Gia">
                        </div>
                        <div class="form-group">
                            <label>Giảm Giá</label>
                            <input type="number" class="form-control" placeholder="1 000 000" name="GiamGia">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Ảnh</label>
                            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="Hinh">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Mô Tả Sản Phẩm</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="noidung"></textarea>
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
if(@$_FILES['Hinh']['error'] == 0){
    if(move_uploaded_file(@$_FILES['Hinh']["tmp_name"], "img_product/".@$_FILES['Hinh']["name"]))
        {
            $sql = "INSERT INTO `product` (`id`, `name`, `slug`, `soluong`, `gia`, `sale`, `avatar`, `category`,`type`, `content`, `head`, `view`, `hot`, `created_at`, `updata_up`) 
            VALUES (NULL, '{$_REQUEST['TenSP']}', NULL,'{$_REQUEST['soluong']}', '{$_REQUEST['Gia']}', '{$_REQUEST['GiamGia']}', '{$_FILES['Hinh']['name']}', '{$_REQUEST['loaisp']}','{$_REQUEST['type']}', '{$_REQUEST['noidung']}', '0', '0', '0',current_timestamp() , current_timestamp())";
            DataProvider::ExecuteQuery($sql);
		}
}
require_once __DIR__ . "/../../layouts/footer.php" ?>