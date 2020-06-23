<?php
   require_once __DIR__ . "/../../autoload/autoload.php";
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
       header('location: http://localhost:8080/DoAnWeb2020/admin/modules/category');
   }
   ?>
<?php require_once __DIR__ . "/../../layouts/header.php" ?>
<div class="product-status mg-tb-15">
   <div class="container-fluid">
      <div class="row">
         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="product-status-wrap">
               <h4>Thêm Danh Mục Sản Phẩm</h4>
               <form action="" method="post" enctype="multipart/form-data">
                  <div class="row">
                     <div class="col-lg-8">
                        <input type="text" class="form-control" placeholder="Tên danh mục mới" name="tendanhmuc">
                     </div>
                     <div class="col-lg-4">
                        <input class="btn btn-primary" type="submit" value="Submit">
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>
<?php
   $tendanhmuc = @$_REQUEST['tendanhmuc'];
   if (isset($tendanhmuc)) {
       $sql = "INSERT INTO `category` (`id`, `name`, `slug`, `images`, `banner`, `home`, `status`, `created_at`, `updated`) VALUES (NULL, '{$tendanhmuc}', NULL, NULL, NULL, '0', '0', current_timestamp(), current_timestamp())";
       echo $sql;
       $result = DataProvider::ExecuteQuery($sql);
   }
   require_once __DIR__ . "/../../layouts/footer.php" ?>