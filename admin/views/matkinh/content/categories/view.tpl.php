<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Danh Mục Loại Sản Phẩm
            </h1>
            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-dashboard"></i><a href="index.php"> Quản lý</a>
                </li>
                <li class="active">
                    <i class="fa fa-table"></i> Loại Sản Phẩm
                </li>
            </ol>
            <a href="?c=categories&a=add" class="btn btn-lg btn-primary" style="margin-bottom:10px">Thêm Loại Sản Phẩm</a>
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
                            <th>Hiện</th>
                            <th>Sắp xếp</th>
                            <th colspan="2">Hành Động</th>
                        </tr>
                    </thead>
                    <tbody id="jpage">
                    <?php
                        foreach($result as $row){
                            echo '
                            <tr> <!-- class: active,success,warning,danger,none -->
                                <td>'.$row['idcategories'].'</td>
                                <td style="font-weight:bold">'.$row['catname'].'</td>
                                <td style="text-align:center">
                                    <span aria-hidden="true" class="glyphicon hd glyphicon-'.($row['public']==1?'ok" style="color:#C81313"':'remove"').'></span>
                                </td>
                                <td>'.$row['position'].'</td>
                                <td style="text-align:center">
                                    <a href="?c=categories&a=edit&idcategories='.$row['idcategories'].'" onclick="return confirm(\'Bạn có chắc muốn sửa không?\');">
                                        <span class="glyphicon glyphicon-pencil hd"></span>
                                    </a>
                                </td>
                                <td style="text-align:center">
                                    <a href="?c=categories&a=del&idcategories='.$row['idcategories'].'" onclick="return confirm(\'Bạn có chắc muốn xóa không?\');">
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