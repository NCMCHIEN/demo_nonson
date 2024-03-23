<div class="table-responsive">
  <style>
    .text-font {
      font-weight: bold;
    }

    .horizontal-line {
      border-top: 1px solid #d01f6f;
      /* Màu và độ dày của đường thẳng */
      margin-top: 10px;
      /* Khoảng cách trên và dưới đường thẳng */
    }

    .horizontal-line-gray {
      border-top: 1px solid gray;
      /* Màu và độ dày của đường thẳng */
      margin-top: 10px;
      /* Khoảng cách trên và dưới đường thẳng */
    }

    .info-customer {
      border-right: 1px solid #ccc;
    }

    .info-customer p {
      color: #d01f6f;
    }

    .info-customer input {
      width: 100%;
      height: 40px;
      margin-top: 17px;
      border-radius: 5px;
      border: 1px solid #6d6e70;
      font-size: 13px;
    }

    .detail-bill span {
      font-size: 15px;
      line-height: 23px;
      text-transform: uppercase;
      font-weight: bold;
      margin-bottom: 10px;
    }

    .detail-bill-p {
      font-size: 16px;
      line-height: 24px;
      color: #d01f6f;
    }

    .buttoncheck>input {
      width: 18px;
      height: 18px;
      border-radius: 100%;
      background: #fff;
      border: 1px solid rgba(0, 0, 0, 0.1);
    }

    .contiPay button {
      margin-top: 20px;
      margin-bottom: 30px;
      width: 100%;
      background-color: #333333;
      text-transform: uppercase;
      font-size: 15px;
      line-height: 22px;
      text-transform: uppercase;
      border: none;
      padding: 12px 20px;
      text-align: center;
      -webkit-transition: all 0.3s linear;
      -o-transition: all 0.3s linear;
      transition: all 0.3s linear;
      color: #fff;
    }

    .contiPay button:hover {
      background-color: #d01f6f;
      transition: 0.8s;
    }

    .contiProduct {
      margin-top: 12px;
    }

    .finalprice {
      margin-top: 10px;
      display: flex;
      justify-content: space-between;
    }
  </style>
  <?php
  if (!isset ($_SESSION['makh']) || count($_SESSION['cart']) < 1):
    echo '<script> alert("Bạn chưa đăng nhập")</script>';
    echo '<meta http-equiv="refresh" content="0;url=./index.php?action=dangnhap"/>';
    ?>
    <?php
  else:
    ?>
    <form action="" method="post">
      <table class="table table-bordered" border="0">
        <?php
        if (isset ($_SESSION['masohd'])) {
          $mshd = $_SESSION['masohd'];
          $hd = new hoadon();
          $kh = $hd->selectThongTinKHHD($mshd);
          $ngay = $kh['ngaydat'];
          $sodt = $kh['sodienthoai'];
        }
        ?>

        <div class="container">
          <div class="row">
            <div class="info-customer col-lg-6">
              <p class="text-font">THÔNG TIN KHÁCH HÀNG</p>
              <div class="horizontal-line"></div>
              <input type="text" placeholder=" Họ và tên *" width="100%" />
              <input type="text" placeholder=" Điện thoại *" />
              <input type="text" placeholder=" Email *" />
              <input type="text" placeholder=" Địa chỉ *" />
              <input type="text" placeholder=" Ghi chú cho đơn hàng" />
              <p class="text-font">PHƯƠNG THỨC GIAO HÀNG</p>
              <div class="horizontal-line"></div>
              <label class="buttoncheck" for=""><input type="radio" />THANH TOÁN KHI NHẬN HÀNG</label>
              <div class="contiPay">
                <button type="submit" value="Tiếp tục thanh toán">
                  HOÀN TẤT ĐƠN HÀNG
                </button>
              </div>
            </div>

            <div class="detail-bill col-lg-6">
              <p class="text-font">CHI TIẾT HÓA ĐƠN</p>
              <div class="horizontal-line"></div>
              <div class="row contiProduct">
                <?php
                $sp = $hd->selectThongTinHHID($mshd);
                while ($set = $sp->fetch()):
                  ?>
                  <div class="col-lg-3">
                    <img src="assets/images/<?php echo $set['hinh']; ?>" alt="" width="84px" height="84px" />
                  </div>
                  <div class="col-lg-5">
                    <span>
                      <?php echo $set['tenhh']; ?>
                    </span>
                    <p>SIZE :
                      <?php echo $set['size']; ?>
                    </p>
                    <p>Số lượng :
                      <?php echo $set['soluongmua']; ?>
                    </p>
                  </div>
                  <div class="col-lg-4">
                    <p class="detail-bill-p">
                      <?php echo number_format($set['dongia']); ?> VND
                    </p>
                  </div>
                  <?php
                endwhile;
                ?>

              </div>
              <div class="horizontal-line-gray"></div>
              <div class="finalprice">
                <div>TỔNG CỘNG</div>
                <div>
                  <?php
                  $gh = new giohang();
                  echo $gh->getSubTotal();
                  ?> VNĐ
                </div>
              </div>
            </div>
          </div>
        </div>
      </table>
    </form>
    <?php
  endif;
  ?>
</div>
</div>