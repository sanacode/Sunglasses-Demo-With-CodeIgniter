<div class="container-fluid">

                <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            <?php echo ($_GET['a'] =='add'?'Thêm':'Sửa') ?> Sản Phẩm
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
                                <label>Tên Sản Phẩm: </label>
                                <input type="text" class="form-control" placeholder="Tên Sản Phẩm" name="name" value="<?php echo (isset($row['name'])?$row['name']:'') ?>" required="required" />
                            </div>

                            <div class="form-group">
                                <label>Mã Sản Phẩm: </label>
                                <input type="text" class="form-control" placeholder="Mã Sản Phẩm" name="model" value="<?php echo (isset($row['model'])?$row['model']:'') ?>" required="required" />
                            </div>

                            <label>Giá: </label>
                            <div class="form-group input-group">
                                <span class="input-group-addon">$</span>
                                <input class="form-control" type="text" name="price"  value="<?php echo (isset($row['price'])?$row['price']:'') ?>" required="required" />
                                <span class="input-group-addon">VND</span>
                            </div>

                            <label>Khuyến Mãi: </label>
                            <div class="form-group input-group">
                                <span class="input-group-addon">$</span>
                                <input class="form-control" type="text" name="sale" value="<?php echo (isset($row['sale'])?$row['sale']:'') ?>" />
                                <span class="input-group-addon">VND</span>
                            </div>

                            <div class="form-group">
                                <label>Trạng Thái</label>
                                <select name="state" class="form-control">
                                    <option value="0" <?php echo (isset($row['state']) && ($row['state']==0)?'selected="selected"':''); ?>>---</option>
                                    <option value="1" <?php echo (isset($row['state']) && ($row['state']==1)?'selected="selected"':''); ?>>MỚI</option>
                                    <option value="2" <?php echo (isset($row['state']) && ($row['state']==2)?'selected="selected"':''); ?>>KHUYẾN MÃI</option>
                                </select>
                            </div>

							<div class="form-group">
								<label>Thuộc Loại Sản Phẩm: </label>
								<select name="idcategories" class="form-control">
								<?php

									foreach($result as $row1):
									   if(isset($cat['idcategories']) && $cat['idcategories']==$row1['idcategories']){
										  echo '<option value="'.$row1['idcategories'].'" selected="selected">'.$row1['catname'].'</option>';
                                        }else{
                                            echo '<option value="'.$row1['idcategories'].'">'.$row1['catname'].'</option>';
                                        }
									endforeach;
								?>
								</select>
							</div>

                            <div class="form-group">
                                <label>Chi Tiết Sản Phẩm: </label>
                                <textarea name="detail" class="form-control" rows="3"><?php echo (isset($row['detail'])?$row['detail']:'') ?></textarea>
                            </div>

                            <div class="form-group">
                                <label>Ảnh: </label>
                                <input type="file" name="pimage" />
								<?php if (isset($row['pimage'])){
									echo '<img src="../assets/img/'.$row['pimage'].'" class="img-thumbnail" width="100" />';}
								?>
                                
                            </div>

                            <input type="hidden" name="idproduct" value="<?php echo (isset($_GET['idproduct'])?$_GET['idproduct']:'') ?>" />

                            <input type="submit" class="btn btn-lg btn-danger" name="submit" value="Chấp Nhận" />
                            <input type="reset" class="btn btn-lg btn-info" name="reset" value="Xóa" />

                        </form>
                    </div>

                </div>
                <!-- /.row -->

            </div>

            </div>