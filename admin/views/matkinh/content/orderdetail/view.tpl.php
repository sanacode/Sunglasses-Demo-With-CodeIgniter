<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Chi Tiết Hóa Đơn
            </h1>
            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-dashboard"></i><a href="index.php"> Quản lý</a>
                </li>
                <li class="active">
                    <i class="fa fa-table"></i> Chi Tiết Hóa Đơn
                </li>
            </ol>
        </div>
		<div class="col-lg-12">
			
		</div>
    </div>
    <!-- /.row -->

    <div class="row">
        <div class="col-lg-12">
            <div class="table-responsive">
                <table class="table table-bordered table-hover table-striped">
                    <thead>
                        <tr>
                            <th>Sản Phẩm</th>
                            <th>Mã Hóa Đơn</th>
                            <th>Số lượng</th>
                            <th>Giá</th>
                            <th>Xóa</th>
                        </tr>
                    </thead>
                    <tbody id="jpage">
                    <?php

                        foreach($result as $row){
                            $product = $order_detail->getbyid($row['idproduct']);
                            echo '
                            <tr> <!-- class: active,success,warning,danger,none -->
                                <td>'.$product['name'].'</td>
                                <td style="font-weight:bold">'.$row['idorder'].'</td>
                                <td>'.$row['qty'].'</td>
                                <td>'.number_format($row['price']).' VND</td>
                                <td style="text-align:center">
                                    <a href="?c=orderdetail&a=del&idproduct='.$row['idproduct'].'" onclick="return confirm(\'Bạn có chắc muốn xóa không?\');">
                                        <span class="glyphicon glyphicon-trash hd"></span>
                                    </a>
                                </td>
                            </tr>';
                        }
                    ?>
                    </tbody>
                </table>
                <!-- Phan trang -->
                <div class="holder"></div>
            </div>
        </div>

    </div>
    <!-- /.row -->

</div>