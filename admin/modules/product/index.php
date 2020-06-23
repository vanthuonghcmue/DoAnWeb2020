
<?php require_once __DIR__ . "/../../autoload/autoload.php"; ?>
<?php require_once __DIR__ . "/../../layouts/header.php" ?>
<div class="product-status mg-tb-15">
   <div class="container-fluid">
      <div class="row">
         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

            <div class="product-status-wrap">
               <h4>Danh Mục</h4>
               <div class="add-product">
                  <a href="add.php">Thêm Danh Mục</a>
               </div>
               <table>
                  <tr>
                     <th>Stt</th>
                     <th>Hình Ảnh</th>
                     <th>Trạng Thái</th>
                     <th>Loại sản phẩm</th>
                     <th>Tên Sản Phẩm</th>
                     <th>Số Lượng</th>
                     <th>Giá bán</th>
                     <th>Ngày thêm</th>
                     <th>Ngày Sửa</th>
                     <th>Setting</th>
                  </tr>

                  <?php
                  try {
                     $sql = "SELECT id, name, slug , soluong , gia, sale, avatar, category, content, head, view, hot, created_at, updata_up FROM `product`";
                     $result = DataProvider::ExecuteQuery($sql);
                     $stt = 0;
                     while ($row = mysqli_fetch_array($result)) 
                     {
                        $sql1="SELECT name FROM `category` WHERE `id` = '{$row['category']}'";                  
                        $result1= DataProvider::ExecuteQuery($sql1);
                        $row1= mysqli_fetch_array($result1);
                        $stt++;
                        $chuoi = <<< EOD
                             <tr>
                             <td>$stt</td>
                             <td><img src="img_product/{$row['avatar']}" ></img>      </td>
                             <td>
                              <button class={"pd-setting"} >ddđ</button>
                             </td>
                             <td> {$row1['name']}</td>
                             <td> {$row[  'name']} </td>
                             <td> {$row['soluong']}</td>
                             <td> {$row['gia']}</td>
                             <td>{$row['created_at']}</td>
                             <td>{$row['updata_up']}</td>
                             <td>
                                 <a href="edit.php?id= {$row['id']} "> <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>
                                 <a href="delete.php?id= {$row['id']} "> <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"> </i> </button> </a>
                             </td>
                         </tr>
                         EOD;
                        echo $chuoi;
                     }
                  } catch (Exception $ex) {
                     echo "Không thể mở CSDL";
                  }
               ?>
               </table>
               <div class="custom-pagination">
                  <nav aria-label="Page navigation example">
                     <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                     </ul>
                  </nav>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<?php require_once __DIR__ . "/../../layouts/footer.php" ?>