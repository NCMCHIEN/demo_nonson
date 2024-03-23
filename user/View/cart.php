<div class="container">
  <?php
  if (isset ($_SESSION['cart']) && count($_SESSION['cart']) > 0) {
    ?>
    <form action="index.php?action=giohang&act=update_gh" method="post">
      <div class="row">
        <div class="pay-left col-lg-6">Sản phẩm</div>
        <div class="pay-right col-lg-2">Lựa chọn</div>
        <div class="pay-right col-lg-2">Số lượng</div>
        <div class="pay-right col-lg-2">Thành tiền</div>
      </div>
      <div class="horizontal-line"></div>
      <!-- line 2 -->

      <div class="row">
        <?php
        foreach ($_SESSION['cart'] as $key => $item):
          ?>
          <div class="pay-left-line2 col-lg-6">
            <div class="row">
              <div class="col-lg-6">
                <a href="index.php?action=giohang&act=giohang_xoa&id=<?php echo $key; ?>">
                  <button type="button" class="button-delete btn btn-danger"><i class="fa-solid fa-xmark">X</i></button>
                </a>
                <img src="assets/images/<?php echo $item['hinh']; ?>" alt="" />
              </div>
              <div class="col-lg-6">
                <div class="ifo">
                  <div class="i-tittle">
                    <?php echo $item['tenhh'] ?>
                  </div>
                  <div class="i-price">
                    <?php echo $item['dongia'] ?> VNĐ
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="pay-right-line2 col-lg-2">
            <div class="i-options">
              <div class="i-color">
              </div>
              <div class="i-style">
                <span>SIZE : </span>
                <strong>
                  <?php echo $item['size']; ?>
                </strong>
              </div>
            </div>
          </div>
          <div class="i-quantity col-lg-2">
            <input type="number" name="newqty[<?php echo $key; ?>]" value="<?php echo $item['soluong']; ?>" />
          </div>
          <div class="pay-right-line2 col-lg-2">
            <strong>
              <?php echo $item['thanhtien'] ?> VND
            </strong>
          </div>




          <?php
        endforeach;
        ?>
      </div>
      <!-- nhap  -->
      <!-- end nhap  -->
      <div class="horizontal-line"></div>
      <div class="boxPayment row">
        <div class="boxPaymentL col-lg-6">
          <a href="index.php?action=home">TIẾP TỤC MUA</a>
        </div>
        <div class="boxPaymentR col-lg-6">
          <div class="box-form row">
            <div class="box-form-tittle col-lg-6">Nhập mã khuyến mãi</div>
            <div class="box-form-button col-lg-6">
              <input type="text" class="form-control" />
              <button>SỬ DỤNG</button>
            </div>
          </div>
          <div class="horizontal-line"></div>
          <div class="total-pay row">
            <div class="total-pay-left col-lg-8">TIỀN HÀNG</div>
            <div class="total-pay-right col-lg-4">
              <strong>
                <?php
                $gh = new giohang();
                echo $gh->getSubTotal();
                ?>
                VND
              </strong>
            </div>
          </div>
          <div class="contiPay">
            <button onclick="window.location.href = 'index.php?action=thanhtoan';" type="button">Tiếp tục thanh
              toán</button>
          </div>
        </div>
      </div>
    </form>
    <?php
  } else {
    echo '<script> alert("Gio hang chua co hang")</script>';
    echo '<meta http-equiv="refresh" content="0;url=./index.php?action=home"/>';
  }
  ?>
</div>