<?php
require_once __DIR__ . "/../../layouts/header.php";
require_once __DIR__ . "/../../autoload/autoload.php";
?>
<!-- Begin element -->
<element class="container">
    <div class="left_nav">
        <h2 class="title-nav"> Filter by </h2>
        <ul class="content_left_nav"> Thương Hiệu
            <li>
                <label>
                    <input type="checkbox"></input>
                    Aaron
                </label>
            </li>
            <li>
                <label>
                    <input type="checkbox"></input>
                    Aaron
                </label>
            </li>
            <li>
                <label>
                    <input type="checkbox"></input>
                    Aaron
                </label>
            </li>
        </ul>
        <ul class="content_left_nav"> Chất Hiệu
            <li>
                <label>
                    <input type="checkbox"></input>
                    Aaron
                </label>
            </li>
            <li>
                <label>
                    <input type="checkbox"></input>
                    Aaron
                </label>
            </li>
            <li>
                <label>
                    <input type="checkbox"></input>
                    Aaron
                </label>
            </li>
        </ul>

    </div>
    <div class="san_pham row">
        <?php
        try {
            $sql = "SELECT * FROM `product`";
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $sql .= "WHERE category =" . $id;
            }
            $result = DataProvider::ExecuteQuery($sql);
           
         
            while ($row = mysqli_fetch_array($result)) {
                $chuoi = <<< EOD
                                <div class="khung_san_pham col-4">
                                <div class="Hinh_anhsp">
                                    <a href=""><img src="/DoAnWeb2020/admin/modules/product/img_product/{$row['avatar']}"  alt="poto"></a>
                                </div>
                                <div class="ten_sp">
                                    <p> {$row['name']}</p>
                                </div>
                                <div class="gia_sp">
                                    <p> {$row['gia']} </p>
                                </div>
                                </div>
                            EOD;
                echo $chuoi;
            }
        } catch (Exception $ex) {
            echo "Không thể mở CSDL";
        }
        ?>




    </div>
    <div class="clearfix"></div>
</element>
<?php require_once __DIR__ . "/../../layouts/footer.php" ?>