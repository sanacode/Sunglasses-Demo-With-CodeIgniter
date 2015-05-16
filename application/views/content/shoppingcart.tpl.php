<link href="<?php echo base_url() ?>assets/css/cart.css" rel="stylesheet" type="text/css" media="all" />

<div class="mens">
  <div class="main">
    <div class="wrap">
        <ul class="breadcrumb breadcrumb__t"><a class="home" href="<?php echo base_url() ?>">Home</a> / Shopping Cart</ul>
    </div>
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
            <th class="fifth">&nbsp;</th>
          </tr>
        </thead>

        <tbody>
          <!-- shopping cart contents -->
          <?php
            $cart_check = $this->cart->contents();
            if(empty($cart_check)):
                echo '<tr><td colspan="5"><p style="color: red;">Bạn chưa chọn sản phẩm muốn mua!</p></td></tr>';
                echo '<meta http-equiv="refresh" content="4;url='.base_url().'">';
            else:
            
                echo form_open('shoppingcart/update_cart');
                $i = 0;
                $cart = $this->cart->contents();

                foreach ($cart as $key => $items):
                    echo form_hidden("cart[".$items['id']."][rowid]", $items['rowid']);
            ?>
                  <tr class="productitm">
                    <td><img src="<?php echo base_url().'assets/img/'.$items['pimage']; ?>" class="thumb" /></td>
                    <td><?php echo $items['name'] ?></td>
                    <td><?php echo form_input("cart[".$items['id']."][qty]", $items['qty'], 'maxlength="3" size="5" class="qtyinput"'); ?></td>
                    <td><?php echo number_format($items['subtotal']) ?></td>
                    
                    <td><span class="remove">
                        <?php 
                            // cancle image.
                            $path = '<img src="'.base_url().'assets/img/trash.png" alt="X" />';
                            echo anchor('shoppingcart/remove/' . $items['rowid'], $path); 
                        ?>
                    </span></td>
                  </tr>
            <?php
                $i++;
                endforeach;
            ?>
              <!-- Total -->
              <tr class="extracosts">
                <td class="light">Total:</td>
                <td>&nbsp;</td>
                <td colspan="3"><span class="thick"><?php  echo $this->cart->format_number($this->cart->total()); ?> VND </span></td>
              </tr>
              
              <!-- checkout btn -->
              <tr class="checkoutrow">
                <td class="checkout" colspan="5">
                    <button name="clearcart" type="submit" formaction="<?php echo base_url() ?>shoppingcart/clear_cart" id="submitbtn">Clear Now!</button>
                    <button type="submit" name="update" value="update" id="submitbtn">Update Now!</button>
                    <button type="submit" formaction="<?php echo base_url() ?>checkout" id="submitbtn">Checkout Now!</button>
                </td>
              </tr>
          <?php
          echo form_close();
          endif;
          ?>
        </tbody>
      </table>

  </div>
</div>