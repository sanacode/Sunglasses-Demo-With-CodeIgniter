<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery.jscrollpane.min.js"></script>
		<script type="text/javascript" id="sourcecode">
			$(function(){
				$('.scroll-pane').jScrollPane();
			});
		</script>
<!-- start details -->
<script src="<?php echo base_url() ?>assets/js/slides.min.jquery.js"></script>
   <script>
		$(function(){
			$('#products').slides({
				preload: true,
				preloadImage: 'img/loading.gif',
				effect: 'slide, fade',
				crossfade: true,
				slideSpeed: 350,
				fadeSpeed: 500,
				generateNextPrev: true,
				generatePagination: false
			});
		});
	</script>
	<!-- start zoom -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/zoome-min.css" />
	<script type="text/javascript" src="<?php echo base_url() ?>assets/js/zoome-e.js"></script>
	<script type="text/javascript">
		$(function(){
		$('#img1,#img2,#img3,#img4').zoome({showZoomState:true,magnifierSize:[250,250]});
	});
	</script>
<?php foreach($query as $row): ?>
<div class="mens">
  <div class="main">
     <div class="wrap">
     	<ul class="breadcrumb breadcrumb__t"><a class="home" href="<?php echo base_url(); ?>">Home</a> / <?php echo $row['name'] ?></ul>
		<div class="cont span_2_of_3">
		  	<div class="grid images_3_of_2">
				<div id="container">
					<div id="products_example">
						<div id="products">
							<div class="slides_container">
							        <a href="#"><img class="a" id="img1" src="<?php echo base_url().'/assets/img/'.$row['pimage'] ?>" alt="" rel="<?php echo base_url() ?>assets/img/<?php echo $row['pimage'] ?>" /></a>
							</div>
							<!--
							<ul class="pagination">
								<li><a href="#"><img src="images/s1.jpg" width="s-img" alt="1144953 3 2x"></a></li>
								<li><a href="#"><img src="images/s2.jpg" width="s-img1" alt="1144953 3 2x"></a></li>
								<li><a href="#"><img src="images/s3.jpg" width="s-img2" alt="1144953 3 2x"></a></li>
								<li><a href="#"><img src="images/s4.jpg" width="s-img3" alt="1144953 1 2x"></a></li><div class="clear"></div>
							</ul>
							-->
						</div>
					</div>
				</div>
	        </div>
			<div class="desc1 span_3_of_2">
				<h3 class="m_3"><?php echo $row['name'] ?></h3>
				<p class="m_5"><?php echo ($row['sale']==0?number_format($row['price']).' VNĐ':number_format($row['sale']).' VNĐ') ?> &nbsp; 
					<span class="reducedfrom"><?php echo ($row['sale']!=0?number_format($row['price']).' VNĐ':'') ?></span>
				</p>
				<div class="btn_form">
					<form name="fpro" action="<?php echo base_url(); ?>shoppingcart" method="POST">
                        <input type="hidden" name="idproduct" value="<?php echo $row['idproduct'] ?>" />
                        <select name="qty">
                            <?php for($i=1;$i<=10;$i++) echo '<option value="'.$i.'">'.$i.'</option>'; ?>
                        </select><br /><br />
						<input type="submit" name="buy" value="buy" />
					</form>
			 	</div>
				<!-- <span class="m_link">Chi tiết sản phẩm</span> -->
			 	<p class="m_text2"><?php echo $row['detail'] ?></p>
			</div>
			<div class="clear"></div>


	    <div class="clients">
	    <h3 class="m_3">10 Other Products in the same category</h3>
		 <ul id="flexiselDemo3">
			<li><img src="<?php echo base_url() ?>assets/img/s5.jpg" /><a href="#">Category</a><p>Rs 600</p></li>
			<li><img src="<?php echo base_url() ?>assets/img/s6.jpg" /><a href="#">Category</a><p>Rs 850</p></li>
			<li><img src="<?php echo base_url() ?>assets/img/s7.jpg" /><a href="#">Category</a><p>Rs 900</p></li>
			<li><img src="<?php echo base_url() ?>assets/img/s8.jpg" /><a href="#">Category</a><p>Rs 550</p></li>
			<li><img src="<?php echo base_url() ?>assets/img/s9.jpg" /><a href="#">Category</a><p>Rs 750</p></li>
		 </ul>
	<script type="text/javascript">
		$(window).load(function() {
			$("#flexiselDemo1").flexisel();
			$("#flexiselDemo2").flexisel({
				enableResponsiveBreakpoints: true,
		    	responsiveBreakpoints: {
		    		portrait: {
		    			changePoint:480,
		    			visibleItems: 1
		    		},
		    		landscape: {
		    			changePoint:640,
		    			visibleItems: 2
		    		},
		    		tablet: {
		    			changePoint:768,
		    			visibleItems: 3
		    		}
		    	}
		    });

			$("#flexiselDemo3").flexisel({
				visibleItems: 5,
				animationSpeed: 1000,
				autoPlay: true,
				autoPlaySpeed: 3000,
				pauseOnHover: true,
				enableResponsiveBreakpoints: true,
		    	responsiveBreakpoints: {
		    		portrait: {
		    			changePoint:480,
		    			visibleItems: 1
		    		},
		    		landscape: {
		    			changePoint:640,
		    			visibleItems: 2
		    		},
		    		tablet: {
		    			changePoint:768,
		    			visibleItems: 3
		    		}
		    	}
		    });

		});
	</script>
	<script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery.flexisel.js"></script>
     </div>

      	</div>
			<div class="rsidebar span_1_of_left">
    	<div class="top-border"> </div>
    	 <div class="border">
         <link href="<?php echo base_url() ?>assets/css/default.css" rel="stylesheet" type="text/css" media="all" />
         <link href="<?php echo base_url() ?>assets/css/nivo-slider.css" rel="stylesheet" type="text/css" media="all" />
    	  <script src="<?php echo base_url() ?>assets/js/jquery.nivo.slider.js"></script>
    	    <script type="text/javascript">
    	    $(window).load(function() {
    	        $('#slider').nivoSlider();
    	    });
    	    </script>
    <div class="slider-wrapper theme-default">
      <div id="slider" class="nivoSlider">
        <img src="<?php echo base_url() ?>assets/img/t-img1.jpg"  alt="" />
       	<img src="<?php echo base_url() ?>assets/img/t-img2.jpg"  alt="" />
        <img src="<?php echo base_url() ?>assets/img/t-img3.jpg"  alt="" />
      </div>
     </div>
      <div class="btn"><a href="#">Check it Out</a></div>
     </div>
    </div>
		      <div class="clear"></div>
			</div>
			 <div class="clear"></div>
		   </div>
		</div>
<?php endforeach; ?>