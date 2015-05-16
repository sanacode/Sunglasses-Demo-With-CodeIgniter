<link href="<?php echo base_url() ?>assets/css/cart.css" rel="stylesheet" type="text/css" media="all" />
<style>
    .thongtin{margin-top:20px;}
    .thongtin span, .thongtin > p{
        font-weight:bold;
    }
</style>
<div class="mens">
  <div class="main">
    <div class="wrap">
        <ul class="breadcrumb breadcrumb__t"><a class="home" href="<?php echo base_url() ?>">Home</a> / Shopping Cart</ul>
    <h1 style="font-size:26px;text-align:center">Cảm ơn quý khách đã mua sản phẩm của chúng tôi:</h1>
    <div class="thongtin">
        <p>Thôn tin khách hàng: </p>
        <?php foreach($customer as $cus): ?>
            <span>Tên: </span><?php echo $cus['name'] ?><br />
            <span>Địa chỉ: </span><?php echo $cus['address'] ?><br />
            <span>Giới tính: </span><?php echo ($cus['gender']==1)?'Nam':'Nữ' ?><br />
            <span>Thông tin thêm: </span><?php echo ($cus['note']!='')?'None':$cus['note'] ?><br />
        <?php endforeach; ?>
    </div>
    <br />

<table id="cart">
        <thead>
            <tr class="trheader">
                <th colspan="5">Shopping Cart</th>
            </tr>
          <tr>
            <th class="first">Photo</th>
            <th class="third">Product</th>
            <th class="second">Qty</th>
            <th class="fourth">Line Total</th>
          </tr>
        </thead>

        <tbody>
          <!-- shopping cart contents -->
            <?php
                $cart = $this->cart->contents();
                foreach ($cart as $key => $items):
            ?>
              <tr class="productitm">
                <td><img src="<?php echo base_url().'assets/img/'.$items['pimage']; ?>" class="thumb" /></td>
                <td><?php echo $items['name'] ?></td>
                <td><?php echo $items['qty'] ?></td>
                <td><?php echo number_format($items['subtotal']) ?></td>
              </tr>
            <?php
                endforeach;
            ?>
              <!-- Total -->
              <tr class="extracosts">
                <td class="light">Total:</td>
                <td>&nbsp;</td>
                <td colspan="3"><span class="thick"><?php  echo number_format($this->cart->total()); ?> VND </span></td>
              </tr>
        </tbody>
      </table>


<?php $this->cart->destroy(); ?>

</div>
</div>
</div>