<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Danh Mục Khách Hàng
            </h1>
            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-dashboard"></i><a href="index.php"> Quản lý</a>
                </li>
                <li class="active">
                    <i class="fa fa-table"></i> Khách Hàng
                </li>
            </ol>
            <a href="?c=customer&a=add" class="btn btn-lg btn-primary" style="margin-bottom:10px">Thêm Khách Hàng</a>
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
                            <th>Avatar</th>
                            <th>Giới tính</th>
                            <th>Tài khoản</th>
                            <th>Mật khẩu</th>
                            <th colspan="2">Hành Động</th>
                        </tr>
                    </thead>
                    <tbody id="jpage">
                    <?php
                        foreach($result as $row){
                            echo '
                            <tr> <!-- class: active,success,warning,danger,none -->
                                <td>'.$row['idcustomer'].'</td>
                                <td style="font-weight:bold">'.$row['name'].'</td>
                                <td style="text-align:center"><img class="img-thumbnail" width="100" src="../assets/img/'.(($row['image']!="")?$row['image']:'/noavatar.jpg').'"</td>
                                <td style="text-align:center">
                                    <img src="../assets/img/'.$row['gender'].'.jpeg" class="img-thumbnail"  width="100" />
                                </td>
                                <td>'.$row['user'].'</td>
                                <td>'.$row['pass'].'</td>
                                <td style="text-align:center">
                                    <a href="?c=customer&a=edit&idcustomer='.$row['idcustomer'].'" onclick="return confirm(\'Bạn có chắc muốn sửa không?\');">
                                        <span class="glyphicon glyphicon-pencil hd"></span>
                                    </a>
                                </td>
                                <td style="text-align:center">
                                    <a href="?c=customer&a=del&idcustomer='.$row['idcustomer'].'" onclick="return confirm(\'Bạn có chắc muốn xóa không?\');">
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