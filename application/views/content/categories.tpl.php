<div class="mens">    
<div class="main">
<div class="wrap">
<div class="cont span_2_of_3">
<h2 class="head"><?php echo $catname; ?>'s</h2>
<div class="mens-toolbar">
  <div class="sort">
   	<div class="sort-by">
        <label>Sort By</label>
        <select>
            <option value="">Position</option>
            <option value="">Name</option>
            <option value="">Price</option>
        </select>
        <a href=""><img src="<?php echo base_url() ?>assets/images/arrow2.gif" alt="" class="v-middle"></a>
   </div>
</div>
<div class="pager">   
<div class="limiter visible-desktop">
    <label>Show</label>
    <select>
        <option value="" selected="selected">9</option>
        <option value="">15</option>
        <option value="">30</option>
    </select> per page        
 </div>
<ul class="dc_pagination dc_paginationA dc_paginationA06">
    <li><a href="#" class="previous">Pages</a></li>
    <li><a href="#">1</a></li>
    <li><a href="#">2</a></li>
</ul>
<div class="clear"></div>
</div>
<div class="clear"></div>
</div>

    
        <?php
            $x = 0;
            for($i=1;$i<=$numrows;$i++):
        ?>

        <div class="top-box">
        
        <?php
            
            $sql = "SELECT `product`.* FROM `product` 
            INNER JOIN 
                (`cat_pro` INNER JOIN `categories` ON (`cat_pro`.`idcategories` = `categories`.`idcategories`)) 
            ON (`product`.`idproduct` = `cat_pro`.`idproduct`) 
       WHERE `categories`.`idcategories` = '$cat' 
       limit $x,3
       ";
    
            $query = $this->db->query($sql);
            foreach($query->result_array() as $row):
    
        ?>
        <div class="col_1_of_3 span_1_of_3">
            <a href="<?php echo 'pdetail/'.url_title($row['name']).'-'.$row['idproduct'] ?>">
    			<div class="inner_content clearfix">
    				<div class="product_image">
    					<img src="<?php echo base_url() ?>assets/img/<?php echo $row['pimage'] ?>" alt=""/>
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

<!-- right -->
<div class="clear"></div>
</div>
</div>
</div>
<script src="<?php echo base_url() ?>assets/js/jquery.easydropdown.js"></script>