<div class="main">
<div class="wrap">
<div class="section group">
    <div class="cont span_2_of_3">
    <h2 class="head">New Products</h2>

        <?php
            $x = 0;
            for($i=1;$i<=3;$i++): // Số dòng lặp
        ?>

        <div class="top-box">

        <?php

            $result = $this->Product->getlist(3,$x);
            foreach($result->result_array() as $row): // Số sản phẩm lặp (3sp/dòng)

        ?>
        <div class="col_1_of_3 span_1_of_3">
            <a href="<?php echo 'pdetail/'.url_title($row['name']).'-'.$row['idproduct'] ?>">
                <div class="inner_content clearfix">
                    <div class="product_image">
                        <img src="<?php echo base_url() ?>assets/img/<?php echo $row['pimage'] ?>" alt="<?php echo $row['name'] ?>"/>
                    </div>
                    <?php
                        if($row['state']==1){
                            echo '<div class="sale-box"><span class="on_sale title_shop">New</span></div>';
                        }elseif($row['state']==2){
                            echo '<div class="sale-box1"><span class="on_sale title_shop">Sale</span></div>';
                        }
                    ?>

                    <div class="price">
    			<div class="cart-left">
                            <p class="title"><?php echo $row['name']; ?></p>
                            <div class="price1">
                            <?php
                                if($row['sale']!=0){
                                    echo '<span class="reducedfrom">'.number_format($row['price']).' VND</span>';
                                    echo '<span class="actual">'.number_format($row['sale']).' VND</span>';
                                }else{
                                    echo '<span class="actual">'.number_format($row['price']).' VND</span>';
                                }
                            ?>

                            </div>
                        </div>
                        <div class="cart-right"> </div>
                        <div class="clear"></div>
                    </div>
                </div>
            </a>
        </div>
        <?php
            endforeach;
            $x += 3;
        ?>
    	<div class="clear"></div>
    </div>
    <?php endfor; ?>







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
    <div class="top-border"> </div>
    <div class="sidebar-bottom">
        <h2 class="m_1">Newsletters<br> Signup</h2>
        <p class="m_text">Lorem ipsum dolor sit amet, consectetuer</p>
        <div class="subscribe">
    		 <form>
    		    <input name="userName" type="text" class="textbox">
    		    <input type="submit" value="Subscribe">
    		 </form>
    	</div>
    </div>
    </div>
    <div class="clear"></div>
    </div>
    </div>
	</div>