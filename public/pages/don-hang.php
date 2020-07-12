<?php
require_once __DIR__ . "/../../layouts/header.php";
require_once __DIR__ . "/../../autoload/autoload.php";
?>
<h2 class="text-center">Đơn hàng của bạn</h2>
<div class="container"> 
 <table  class="table table-hover"> 
  <thead> 
   <tr id="alll"> 
   <th style="width:15%">Mã đơn hàng</th> 
    <th style="width:20%">Ngày mua</th> 
   <th style="width:25%">Tên sản phẩm</th> 
    <th style="width:20%" class="text-center">Thành tiền</th> 
    <th style="width:20%">Trạng thái đơn hàng</th> 
   </tr> 
  </thead> 
  <tbody><tr> 
  <td  data-th="Order">406361020</td>
   <td  data-th="Date">23/05/2020</td>
   <td data-th="Product"> 
    <div class="row"> 
     <div class="col-sm-2 hidden-xs"><img src="http://hocwebgiare.com/thiet_ke_web_chuan_demo/shopping_cart/images/090.jpg" alt="Sản phẩm 1" class="img-responsive" width="100">
     </div> 
     <div class="col-sm-10"> 
      <h4 class="nomargin">Sản phẩm 1</h4> 
      <p>Mô tả của sản phẩm 1</p> 
     </div> 
    </div> 
   </td> 
   </td> 
   <td data-th="Subtotal" class="text-center">200.000 đ</td> 
   <td  data-th="Status">Giao hàng thành công</td>
    
   </td> 
  </tr> 
  <tr> 
  <td  data-th="Order">406361020</td>
   <td  data-th="Date">23/05/2020</td>
   <td data-th="Product"> 
    <div class="row"> 
     <div class="col-sm-2 hidden-xs"><img src="http://hocwebgiare.com/thiet_ke_web_chuan_demo/shopping_cart/images/174.jpg" alt="Sản phẩm 1" class="img-responsive" width="100">
     </div> 
     <div class="col-sm-10"> 
      <h4 class="nomargin">Sản phẩm 2</h4> 
      <p>Mô tả của sản phẩm 2</p> 
     </div> 
    </div> 
   </td> 
   </td> 
   <td data-th="Subtotal" class="text-center">300.000 đ</td> 
   <td  data-th="Status">Giao hàng thành công</td>
   </td> 
  </tr> 
  </tbody><tfoot> 
   <tr class="visible-xs"> 
    <td class="text-center"><strong>Tổng 200.000 đ</strong>
    </td> 
   </tr> 
   <tr> 
    <td><a href="http://hocwebgiare.com/" class="btn btn-warning"><i class="fa fa-angle-left"></i> Tiếp tục mua hàng</a>
    </td> 
    <td colspan="5" class="hidden-xs"> </td> 
    <td class="hidden-xs text-center"><strong>Tổng tiền 500.000 đ</strong>
   </tr> 
  </tfoot> 
 </table>
</div>
<style>
    #alll{
        color:blue;
    }
    h2{
        color:brown;
    }
</style>
<?php require_once __DIR__ . "/../../layouts/footer.php" ?>