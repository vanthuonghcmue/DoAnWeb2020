<?php
require_once __DIR__ . "/../../layouts/header.php";
require_once __DIR__ . "/../../autoload/autoload.php";
?>
<!-- Begin element -->
<element class="container">
<h2 class="text-center">Thông Báo</h2>
<?php if (isset ($_SESSION['success'])): ?>
<div class="alert alert-success" role="alert">
  <?php echo $_SESSION['success']; unset($_SESSION['success']) ?>
  
</div>
<?php  ?>
<?php endif ?>
<a href="../index.php"><button  type="button" class="btn btn-primary btn-lg btn-block">Quay Về Trang Chủ</button></a>

</element>
<?php require_once __DIR__ . "/../../layouts/footer.php" ?>