<?php session_start ()?>
<?php require_once __DIR__ . "/../../autoload/autoload.php"; ?>
<?php require_once __DIR__ . "/../../layouts/header.php" ?>
<?php 
$sotin1trang = 4; 

if( isset($_GET["trang"]) ){
	$trang = $_GET["trang"];
	settype($trang, "int");
}else{
	$trang = 1;	
}
?>
<div class="product-status mg-tb-15">
   <div class="container-fluid">
      <div class="row">
         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

            <div class="product-status-wrap">
               <h4>Danh Sách Admin</h4>
               <div class="add-product">
                  <a href="add.php">Thêm Admin</a>
               </div>
               <table>
                  <tr>
                     <th>Stt</th>
                     <th>Ảnh Đại Diện</th>
                     <th>Tên Admin</th>
                     <th>Cấp Độ</th>
                     <th>Địa Chỉ</th>
                     <th>Email</th>
                     <th>password</th>
                     <th>Phone</th>
                     <th>Ngày Tạo</th>
                     <th>Ngày Sửa</th>
                     <th>Setting</th>
                  </tr>
                  <?php
                  try {
                     $from = ($trang -1 ) * $sotin1trang;
                     $sql = "SELECT id, name,address,email,password,phone,status, level,avatar, created_at, updata_up  FROM `admins` LIMIT $from, $sotin1trang  ";
                     $result = DataProvider::ExecuteQuery($sql);
            
                     $stt = 0;
                     while ($row = mysqli_fetch_array($result)) {
                        $stt++;
                        $chuoi = <<< EOD
                             <tr>
                             <td>$stt</td>
                             <td><img src="img_admins/{$row['avatar']}" ></img>  </td>
                             <td> {$row['name']} </td>
                             <td> {$row['level']} </td>
                             <td> {$row['address']} </td>
                             <td> {$row['email']} </td>
                             <td> {$row['password']} </td>
                             <td> {$row['phone']} </td>
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
               <div id="phantrangadmins">
             <?php
             $x = "SELECT id FROM `admins`";
             $kq = DataProvider::ExecuteQuery($x);
             $tongsotin = mysqli_num_rows($kq);
             $sotrang = ceil($tongsotin / $sotin1trang);

               if ($trang > 1 && $sotrang > 1){
               echo '<a href="index.php?trang='.($trang-1).'"> Prev</a> | ';
               }
               for ($i = 1; $i <= $sotrang; $i++){
               if ($i == $trang){
               echo '<span>'.$i.'</span> | ';
               }
               else{
               echo '<a href="index.php?trang='.$i.'">'.$i.'</a> | ';
               }
               }
               if ($trang < $sotrang && $sotrang > 1){
               echo '<a href="index.php?trang='.($trang+1).'">Next</a>  ';
               }
          ?>
</div>
<style>
   #phantrangadmins{
      font-size:larger;

   }
   </style>
            </div>
         </div>
      </div>
   </div>
</div>
<?php require_once __DIR__ . "/../../layouts/footer.php" ?>