<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/validate.js"></script>
<div class="login">
   <div class="wrap">
    <ul class="breadcrumb breadcrumb__t"><a class="home" href="<?php echo base_url(); ?>">Home</a>  / Checkout</ul>
	   <div class="content-top">
       <h1 style="font-size:28px;text-align:center;font-weight:bold;margin-bottom:10px">THÔNG TIN KHÁCH HÀNG</h1>
			<form name="check" method="post" action="<?php echo base_url(); ?>finished" onsubmit="return kiemtra()">
				<div class="to">
					<input type="text" class="text" name="hoten" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="required" />
				 	<input type="text" class="text" name="email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" style="margin-left: 10px" />
				</div>

				<div class="to">
                    <select name="gender" style="width:49.5%;">
                        <option value="">Gender</option>
                        <option value="1">Men</option>
                        <option value="0">Women</option>
                    </select>
				 	<input type="text" class="text" name="address" value="Address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Address';}" style="margin-left: 10px" required="required" />
				<br style="clear:both" />
                </div>

				<div class="text">
                   <textarea name="note" value="Message:" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}">Message:</textarea>
                </div>

                <div class="submit" style="margin:0 auto;width:400px">
               		<input type="reset" name="reset" value="Reset" />
                    <input type="submit" name="cus" value="Finshed" />
                </div>
			</form>
        </div>
   </div>
</div>