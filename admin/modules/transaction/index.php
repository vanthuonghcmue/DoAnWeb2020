<?php session_start ()?>
<?php require_once __DIR__ . "/../../autoload/autoload.php"; ?>
<?php require_once __DIR__ . "/../../layouts/header.php";?>
<?php
if( !isset ($_SESSION['namead']) ){
   echo "<script> alert ('Bạn phải là admin để sử dụng chức năng này. Hãy đăng nhập để tiếp tục nhé'); 
   location.href='/DoAnWeb2020/admin/modules/'</script> ";}
 ?>
<div class="product-status mg-tb-15">
   <div class="container-fluid">
      <div class="row">
         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

            <div class="product-status-wrap">
               <h4>Danh Sách Đơn Hàng</h4>
               
               <table>
                  <tr>
                     <th>Stt</th>
                     <th>Mã Đơn Hàng</th>                 
                     <th>Tên Khách Hàng</th>
                     <th>Tổng Tiền</th>                    
                     <th>Ngày Đặt</th> 
                     <th>Trạng Thái </th> 
                   
                     <th>Setting</th>
                  </tr>

                  <?php
                  try {
                     $sql = "SELECT * FROM `transaction`";
                     $result = DataProvider::ExecuteQuery($sql);
                     $stt = 0;
                     while ($row = mysqli_fetch_array($result)) 
                     {
                        $sql1="SELECT name FROM `users`  WHERE `users`.`id` = '{$row['user_id']}'";      
                        // WHERE `category`.`id` = '{$row['category']}'            
                        $result1= DataProvider::ExecuteQuery($sql1);
                        $row1= mysqli_fetch_array($result1);

                        
                        if ($row['status']==0 ){ $status = "chưa xác nhận";  }
                        else {
                            $status = "Đã xác nhận";
                        }
                        $stt++;
                        $chuoi = <<< EOD
                             <tr>
                             <td>$stt</td>                                                   
                             <td> {$row['id']}</td>
                             <td> {$row1['name']}</td>
                             <td> {$row['amount']} </td>
                             <td> {$row['created_at']} </td>
                             <td> <button type="button" class="btn btn-success">{$status} </button> </td>
                             <td>
                                 <a href="see.php?id= {$row['id']} "> <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fas fa-eye" aria-hidden="true"></i></button></a>
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