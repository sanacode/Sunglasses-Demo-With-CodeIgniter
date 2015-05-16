<div class="container-fluid">

                <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            <?php echo ($_GET['a'] =='add'?'Thêm':'Sửa') ?> Khách Hàng
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
                                <label>Tên Khách Hàng: </label>
                                <input type="text" class="form-control" placeholder="Tên Khách Hàng" name="name" value="<?php echo (isset($row['name'])?$row['name']:'') ?>" required="required" />
                            </div>

                            <div class="form-group">
                                <label>Giới tính</label>
                                <select name="gender" class="form-control">
                                    <option value="1" <?php echo (isset($row['gender']) && ($row['gender']==1)?'selected="selected"':''); ?>>Nam</option>
                                    <option value="0" <?php echo (isset($row['gender']) && ($row['gender']==0)?'selected="selected"':''); ?>>Nữ</option>
                                </select>
                            </div>
                            
                            
                            <div class="form-group">
                                <label>Tài Khoản: </label>
                                <input type="text" class="form-control" placeholder="Tài khoản" name="user" value="<?php echo (isset($row['user'])?$row['user']:'') ?>" required="required" />
                            </div>
                            
                            <div class="form-group">
                                <label>Mật khẩu: </label>
                                <input type="text" class="form-control" placeholder="Mật khẩu" name="pass" value="<?php echo (isset($row['pass'])?$row['pass']:'') ?>" required="required" />
                            </div>
                            
                            <div class="form-group">
                                <label>Avatar: </label>
                                <input type="file" name="image" />
                                <?php if (isset($row['image'])){
									echo '<img src="..assets/img/'.$row['image'].'" class="img-thumbnail" width="100" />';}
								?>
                            </div>

                            <input type="hidden" name="idcustomer" value="<?php echo (isset($_GET['idcustomer'])?$_GET['idcustomer']:'') ?>" />

                            <input type="submit" class="btn btn-lg btn-danger" name="submit" value="Chấp Nhận" />
                            <input type="reset" class="btn btn-lg btn-info" name="reset" value="Xóa" />

                        </form>
                    </div>

                </div>
                <!-- /.row -->

            </div>

            </div>