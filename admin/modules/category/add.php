<?php
   require_once __DIR__ . "/../../autoload/autoload.php";
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
       header('location: http://localhost:8080/DoAnWeb202011/admin/modules/category');
   }
   ?>
<?php require_once __DIR__ . "/../../layouts/header.php" ?>
<style>
    label.error{
        color:red;
        font-style: italic;
    }
    </style>
<div class="product-status mg-tb-15">
   <div class="container-fluid">
      <div class="row">
         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="product-status-wrap">
               <h4>Sửa Danh Mục Sản Phẩm</h4>
               <form action="" method="post" enctype="multipart/form-data" id="editCategory">
                  <div class="row">
                     <div class="col-lg-8">
                        <?php
                           try {
                               $sql = "SELECT name FROM category";
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
                        <input type="text" class="form-control" placeholder="Tên danh mục mới" name="tendanhmuc" <?php echo "value='{$row['name']}'" ?>>
                     </div>
                     <div class="col-lg-4">
                        <input class="btn btn-primary" type="submit" value="Submit">
                     </div>
                  </div>
               </form>
               <script>
                    $(function () {
                        $("#editCategory").validate({
                            rules: {
                              tendanhmuc: { required: true , minlength: 3 },
                            },
                            messages: {
                              tendanhmuc: { required: "Vui lòng nhập danh mục", minlength: "Vui lòng nhập lớn hơn 3 kí tự"}
                            }
            
                        });
                       
                    });    
            </script>
            </div>
         </div>
      </div>
   </div>
</div>
<?php
   if (isset($_POST['tendanhmuc'])) {
       $tendanhmuc = $_POST['tendanhmuc'];
       $sql = "UPDATE `category` SET `name` = '$tendanhmuc' WHERE `category`.`id` = $id";
       $result = DataProvider::ExecuteQuery($sql);
   }
   require_once __DIR__ . "/../../layouts/footer.php"
?>