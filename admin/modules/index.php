<?php
require_once __DIR__ . "/../autoload/autoload.php";
?>

<?php require_once __DIR__ . "/../layouts/header.php" ?>
<div class="product-status mg-tb-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-status-wrap">
                    <h4>Danh Mục</h4>
                    <div class="add-product">
                        <a href="product-edit.html">Add Product</a>
                    </div>
                    <table>
                        <tr>
                            <th>Id</th>
                            <th>Tên Danh Mục</th>
                            <th>Trạng Thái</th>
                            <th>Ngày Tạo</th>
                            <th>Ngày Sửa</th>
                            <th>Setting</th>
                        </tr>

                        <?php
                        try {
                            $sql = "SELECT id, name , home, created_at, updeted status FROM wenoithat";
                            $result = DataProvider::ExecuteQuery($sql);
                            while ($row = mysqli_fetch_array($result)) {
                                $chuoi=<<< EOD
                                <tr>
                                <td>{$row['id']}</td>
                                <td> {$row['name']} </td>
                                <td>
                                    <button class={"pd-setting"} ></button>
                                </td>
                                <td>{$row['created_at']}/td>
                                <td>{$row['updeted']}</td>
                                <td>
                                    <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                    <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
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


<?php require_once __DIR__ . "/../layouts/footer.php" ?>