<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Danh Mục Sản Phẩm
            </h1>
            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-dashboard"></i>  <a href="index.php"> Quản lý</a>
                </li>
                <li class="active">
                    <i class="fa fa-table"></i> Sản Phẩm
                </li>
            </ol>
            <a href="?c=product&a=add" class="btn btn-lg btn-primary" style="margin-bottom:10px">Thêm Sản Phẩm</a>
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
                            <th>Tên</th>
                            <th>Mã SP</th>
                            <th>Hình</th>
                            <th>Giá</th>
                            <th>Khuyến Mãi</th>
                            <th>Trạng Thái</th>
                            <th colspan="2">Hành Động</th>
                        </tr>
                    </thead>
                    <tbody id="jpage">
                    <?php
                        foreach($result as $row){
                            echo '
                            <tr> <!-- class: active,success,warning,danger,none -->
                                <td>'.$row['idproduct'].'</td>
                                <td>'.$row['name'].'</td>
                                <td>'.$row['model'].'</td>
                                <td style="text-align:center"><img src="../assets/img/'.$row['pimage'].'" class="img-thumbnail"  width="100" /></td>
                                <td>'.number_format($row['price']).'</td>
                                <td>'.($row['sale']?number_format($row['sale']):'').'</td>
                                <td>';

                                switch ($row['state']){
                                    case 0: echo ''; break;
                                    case 1: echo 'MỚI'; break;
                                    case 2: echo 'KM'; break;
                                }

                                echo '</td>
                                <td style="text-align:center">
                                    <a href="?c=product&a=edit&idproduct='.$row['idproduct'].'" onclick="return confirm(\'Bạn có chắc muốn sửa không?\');">
                                        <span class="glyphicon glyphicon-pencil hd"></span>
                                    </a>
                                </td>
                                <td style="text-align:center">
                                    <a href="?c=product&a=del&idproduct='.$row['idproduct'].'" onclick="return confirm(\'Bạn có chắc muốn xóa không?\');">
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