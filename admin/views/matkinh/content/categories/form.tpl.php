<div class="container-fluid">

                <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            <?php echo ($_GET['a'] =='add'?'Thêm':'Sửa') ?> Loại Sản Phẩm
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.php">Quản lý</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-edit"></i> <?php echo ($_GET['a'] =='add'?'Thêm':'Sửa') ?>
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-6">
                        <form role="form" name="formsp" action="" method="POST" enctype="multipart/form-data" onsubmit="return kiemtra();">

                            <div class="form-group">
                                <label>Tên Loại: </label>
                                <input type="text" class="form-control" placeholder="Tên Loại Sản Phẩm" name="catname" value="<?php echo (isset($row['catname'])?$row['catname']:'') ?>" required="required" />
                            </div>

                            <div class="form-group">
                                <label>Hiện</label>
                                <select name="public" class="form-control">
                                    <option value="1" <?php echo (isset($row['public']) && ($row['public']==1)?'selected="selected"':''); ?>>CÓ</option>
                                    <option value="0" <?php echo (isset($row['public']) && ($row['public']==0)?'selected="selected"':''); ?>>KHÔNG</option>
                                </select>
                            </div>
                            
                            <div class="form-group">
                                <label>Sắp Xếp: </label>
                                <input type="text" class="form-control" placeholder="Sắp Xếp" name="position" value="<?php echo (isset($row['position'])?$row['position']:'') ?>" />
                            </div>

                            <input type="hidden" name="idcategories" value="<?php echo (isset($_GET['idcategories'])?$_GET['idcategories']:'') ?>" />

                            <input type="submit" class="btn btn-lg btn-danger" name="submit" value="Chấp Nhận" />
                            <input type="reset" class="btn btn-lg btn-info" name="reset" value="Xóa" />

                        </form>
                    </div>

                </div>
                <!-- /.row -->

            </div>

            </div>