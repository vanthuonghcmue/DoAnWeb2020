<?php
require_once __DIR__ . "/../../autoload/autoload.php";
if (isset  ($_GET['id'])){
    $id=$_GET['id'];
    $sql="DELETE  FROM `type` WHERE id='$id'";
    $result = DataProvider::ExecuteQuery($sql);
    header('location: http://localhost:8080/DoAnWeb2020/admin/modules/type');
}
else{
    echo"không bắt được id";
}
?>

