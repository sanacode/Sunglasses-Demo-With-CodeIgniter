<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>
<!DOCTYPE HTML>
<html>
<head>
    <title>Mắt Kính 123</title>

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta property="og:title" content="Mắt Kính 123. Copyright 2014 by Anh Vu"/>
	<meta property="og:image" content="http://anhvhps01904.tk/images/logo.png"/>
	<meta property="og:site_name" content="Mắt Kính 123"/>
	<meta property="og:description" content="Mắt Kính 123, Sunglasses, mắt kính, glasses, brand, lens, men, women, kids,..."/>

    <link href="<?php echo base_url() ?>assets/css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link href="<?php echo base_url() ?>assets/css/form.css" rel="stylesheet" type="text/css" media="all" />

    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery1.min.js"></script>

    <!-- start menu -->
    <link href="<?php echo base_url() ?>assets/css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/megamenu.js"></script>
    <script>$(document).ready(function(){$(".megamenu").megamenu();});</script>

    <!--start slider -->
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/fwslider.css" media="all">
        <script src="<?php echo base_url() ?>assets/js/jquery-ui.min.js"></script>
        <script src="<?php echo base_url() ?>assets/js/css3-mediaqueries.js"></script>
        <script src="<?php echo base_url() ?>assets/js/fwslider.js"></script>
    <!--end slider -->

    <script src="<?php echo base_url() ?>assets/js/jquery.easydropdown.js"></script>

</head>

<body>
<!-- Header -->
<?php $this->load->view('header.tpl.php'); ?>

<!-- Content -->
<?php $this->load->view('content/'.$name_content.'.tpl.php'); ?>

<!-- Footer -->
<?php $this->load->view('footer.tpl.php'); ?>

<div id="myModal" class="linhnguyen-modal">vu hai anh</div>
</body>
</html>