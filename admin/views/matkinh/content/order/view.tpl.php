<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Danh Mục Hóa Đơn
            </h1>
            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-dashboard"></i><a href="index.php"> Quản lý</a>
                </li>
                <li class="active">
                    <i class="fa fa-table"></i> Hóa Đơn
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
                            <th>ID</th>
                            <th>Tên Khách Hàng</th>
                            <th>Địa Chỉ</th>
                            <th>Giới Tính</th>
                            <th>Ghi Chú</th>
                            <th>Thời Gian</th>
                            <th colspan="2">Chi Tiết</th>
                        </tr>
                    </thead>
                    <tbody id="jpage">
                    <?php
                        foreach($result as $row){
                            echo '
                            <tr> <!-- class: active,success,warning,danger,none -->
                                <td>'.$row['idorder'].'</td>
                                <td style="font-weight:bold">'.$row['name'].'</td>
                                <td>'.$row['address'].'</td>
                                <td style="text-align:center">
                                    <img src="../assets/img/'.$row['gender'].'.jpeg" class="img-thumbnail"  width="100" />
                                </td>
                                <td>'.$row['note'].'</td>
                                <td>'.$row['time_add'].'</td>
                                <td style="text-align:center">
                                    <a href="?c=orderdetail&idorder='.$row['idorder'].'">
                                        <span class="glyphicon glyphicon-list-alt hd"></span>
                                    </a>
                                </td>
                                <td style="text-align:center">
                                    <a href="?c=order&a=del&idorder='.$row['idorder'].'" onclick="return confirm(\'Bạn có chắc muốn xóa không?\');">
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