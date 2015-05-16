<?php
    // Lấy thông tin admin đăng nhập vô quản trị
    switch($c){
        case 'orderdetail': $admin = new product(); break;
        default: $admin = new $c(); 
    }

    $idadmin = $_SESSION['(*)v(*)'];
    $sql = "SELECT * FROM `customer` WHERE `idcustomer`='$idadmin'";
    $tmp = $admin->getfetch($sql);
?>
<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php">TRANG QUẢN LÝ</a>
    </div>
    <ul class="nav navbar-right top-nav">
        <li class="dropdown">
            
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="http://<?php echo $_SERVER['HTTP_HOST'] ?>/assets/img/<?php echo $tmp['image'] ?>" style="width:25px;border:1px solid;border-radius:15px;margin-right:5px" /><?php echo $tmp['name'] ?> <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li>
                    <a href="login.php?unset=1"><i class="fa fa-fw fa-power-off"></i> Đăng Xuất</a>
                </li>
            </ul>
        </li>
    </ul>

    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">

            <li <?php echo (isset($_GET['c']) && $_GET['c']=='categories'?'class="active"':'') ?>><a href="index.php?c=categories"><i class="fa fa-fw fa-table"></i> Loại Sản Phẩm</a></li>
            <li <?php echo (empty($_GET['c']) || $_GET['c']=='product'?'class="active"':'') ?>><a href="index.php?c=product"><i class="fa fa-fw fa-table"></i> Sản Phẩm</a></li>
            <li <?php echo (isset($_GET['c']) && $_GET['c']=='customer'?'class="active"':'') ?>><a href="index.php?c=customer"><i class="fa fa-fw fa-table"></i> Khách Hàng</a></li>
            <li <?php echo (isset($_GET['c']) && $_GET['c']=='order'?'class="active"':'') ?>><a href="index.php?c=order"><i class="glyphicon glyphicon-shopping-cart"></i> Hóa Đơn</a></li>

        </ul>
    </div>
    <!-- /.navbar-collapse -->
</nav>