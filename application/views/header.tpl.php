<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>
<div class="header-top">
    <div class="wrap">
        <div class="cssmenu">
            <ul>
                <li><a href="<?php echo base_url(); ?>admin/login.php">Log In</a></li> |
                <li><a href="<?php echo base_url(); ?>admin/login.php">Register</a></li>
            </ul>
        </div>
        <div class="clear"></div>
    </div>
</div>
<div class="header-bottom">
    <div class="wrap">
        <div class="header-bottom-left">
            <div class="logo">
                <a href="<?php echo base_url(); ?>"><?php echo img('assets/img/logo.png'); ?></a>
            </div>
            <div class="menu">
                <ul class="megamenu skyblue">
                    <li class="active grid"><?php echo anchor('/','Home','title="Trang Chủ"') ?></li>
                    <li><?php echo anchor('/men','Men','title="Men"') ?></li>
                    <li><?php echo anchor('/women','Women','title="Women"') ?></li>
                    <li><?php echo anchor('/kids','Kids','title="Kids"') ?></li>
                    <li><?php echo anchor('/contact','Contact','title="Contact"') ?></li>
                </ul>
            </div>
        </div>
        <div class="header-bottom-right">
            <div class="search">
                <input type="text" name="s" class="textbox" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {
                            this.value = 'Search';
                        }">
                <input type="submit" value="Subscribe" id="submit" name="submit">
                <div id="response"> </div>
            </div>
            <div class="tag-list">

                <ul class="icon1 sub-icon1 profile_img">
                    <li><a class="active-icon c2" href="#"> </a>
                        <ul class="sub-icon1 list">
                            <li><h3>No Products</h3><a href=""></a></li>
                            <li><p>Lorem ipsum dolor sit amet, consectetuer  <a href="">adipiscing elit, sed diam</a></p></li>
                        </ul>
                    </li>
                </ul>

                <ul class="last"><li><a href="#">Cart(0)</a></li></ul>
            </div>
        </div>
        <div class="clear"></div>
    </div>
</div>
<!-- start slider -->
<?php if ($this->uri->uri_string() == ''): ?>
    <div id="fwslider">
        <div class="slider_container">
            <div class="slide">
                <!-- Slide image -->
                <?php echo img('assets/img/banner.jpg'); ?>
                <!-- /Slide image -->
                <!-- Texts container -->
                <div class="slide_content">
                    <div class="slide_content_wrap">
                        <!-- Text title -->
                        <h4 class="title">Aluminium Club</h4>
                        <!-- /Text title -->

                        <!-- Text description -->
                        <p class="description">Experiance ray ban</p>
                        <!-- /Text description -->
                    </div>
                </div>
                <!-- /Texts container -->
            </div>
            <!-- /Duplicate to create more slides -->
            <div class="slide">
                <?php echo img('assets/img/banner1.jpg'); ?>
                <div class="slide_content">
                    <div class="slide_content_wrap">
                        <h4 class="title">consectetuer adipiscing </h4>
                        <p class="description">diam nonummy nibh euismod</p>
                    </div>
                </div>
            </div>
            <!--/slide -->
        </div>
        <div class="timers"></div>
        <div class="slidePrev"><span></span></div>
        <div class="slideNext"><span></span></div>
    </div>
<?php endif; ?>
<!--/slider -->