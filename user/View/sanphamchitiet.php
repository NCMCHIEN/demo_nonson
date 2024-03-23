<script type="text/javascript">
  function chonsize(a) {
    document.getElementById("size").value = a;
    console.log(a);
  }
</script>
<style>
  .boxTopProduct {
    background-color: #f6f6f6;
    padding: 20px 20px 30px;
    position: relative;
    top: 0;
    left: 0;
    right: 0;
    /* height: 500px; */
    z-index: 1;
    width: 1200px;
  }

  .boxChoosepro {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 400px;
    text-align: center;
  }

  .boxChoosepro .titlepro {
    margin-bottom: 15px;
    padding-bottom: 5px;
    display: inline-block;
    border-bottom: 1px solid #000000;
    line-height: 27px;
    text-transform: uppercase;
    color: #333333;
    font-size: 25px;
    font-weight: 400;
  }

  .boxChoosepro .chooseClor {
    margin-bottom: 10px;
  }

  .price {
    font-size: 20px;
    line-height: 30px;
    color: #000000;
    font-weight: bold;
  }

  .myCheckbox1 {
    padding: 5px 5px;
    min-width: 34px;
    border: 1px solid rgba(0, 0, 0, 0.1);
    text-align: center;
    cursor: pointer;
    text-transform: uppercase;
    font-size: 12px;
    margin-bottom: 10px;
  }

  .myCheckbox1.active {
    border: 1px solid #e21e70;
  }

  input[type="checkbox"],
  input[type="radio"] {
    box-sizing: border-box;
    padding: 0;
    width: 11px;
    height: 11px;
    border-radius: 50%;
    /* Làm tròn các góc để tạo hình tròn */
    -webkit-appearance: none;
    /* Loại bỏ giao diện mặc định của trình duyệt */
    -moz-appearance: none;
    appearance: none;
    border: 2px solid #555;
    /* Tùy chỉnh đường viền */
    outline: none;
    /* Loại bỏ viền xung quanh khi được focus */
  }

  /* Tùy chỉnh trạng thái checked của checkbox */
  input[type="checkbox"]:checked {
    background-color: #e21e70;
    /* Màu nền khi được chọn */
  }

  /* Tùy chỉnh trạng thái checked của radio button */
  input[type="radio"]:checked {
    background-color: #e21e70;
    /* Màu nền khi được chọn */
  }

  .contiDatHang button {
    margin-top: 20px;
    margin-bottom: 30px;
    width: 190px;
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

  .contiDatHang button:hover {
    background-color: #d01f6f;
    transition: 0.8s;
  }

  .boxconproduct {
    padding: 20px;
    position: relative;
    background-color: rgba(255, 255, 255, 0.6);
    -webkit-transition: all 0.5s linear;
    -o-transition: all 0.5s linear;
    transition: all 0.5s linear;
    /* z-index: 2; */
  }

  .wrap10Col {
    max-width: 870px;
    margin: 0 auto;
  }

  .boxconproduct .rightinfopro {
    padding: 0;
  }

  .lstinfomationPro .itemProBox {
    padding: 15px 0;
    border-bottom: 1px solid rgba(0, 0, 0, 0.1);
    padding-right: 20px;
    margin-left: 80px;
  }

  .lstinfomationPro .itemProBox .titleshow {
    font-size: 16px;
    line-height: 24px;
    text-transform: uppercase;
    font-weight: bold;
    color: #333333;
    position: relative;
    cursor: pointer;
    padding-right: 20px;
  }

  .lstinfomationPro .contentShow {
    padding-top: 10px;
    display: none;
    font-size: 15px;
    line-height: 23px;
  }

  .lstinfomationPro .contentShow p {
    padding: 2px 0;
  }

  .quantity-input {
    align-items: center;
    margin-top: 10px;
  }

  .quantity {
    width: 112px;
    text-align: center;
  }

  .btn {
    background-color: #333333;
    border: none;
    color: white;
    padding: 8px 12px;
    cursor: pointer;
  }

  .btn:hover {
    background-color: #d01f6f;
  }
</style>
<form action="index.php?action=giohang&act=giohang_action" method="post">
  <div class="row boxTopProduct">
    <?php
    if (isset ($_GET['id'])) {
      $id = $_GET['id'];//19
      //view doi hoi la can thong tin cua id=19
      //ai lam dieu do? model
      $hh = new hanghoa();
      $sp = $hh->getHangHoaId($id);
      $tenhh = $sp['tenhh'];
      $mota = $sp['mota'];
      $dongia = $sp['dongia'];
      $soluongton = $sp['soluongton'];
    }
    ?>
    <?php
    $hinh = $hh->getHangHoaHinh($id);
    $set = $hinh->fetch();
    ?>
    <div class="col-md-6">
      <img src="assets/images/<?php echo $set['hinh'] ?>" alt="Nón da MH187DA-DN1" width="495px" height="495px" />
    </div>
    <div class="col-md-6">
      <div class="boxChoosepro">
        <input type="hidden" name="mahh" value="<?php echo $id; ?>" />
        <div class="titlepro">
          <p>
            <?php echo $tenhh ?>
          </p>
        </div>
        <div class="myCheckbox1 i-group" data-label="" data-id="19" data-stock="">
          <!-- <input name="size" id="size" value="0"></input> -->

          <?php
          $size = $hh->getHangHoaSize($id);
          while ($set = $size->fetch()):
            ?>
            <button type="button" onclick="chonsize('<?php echo $set['size']; ?>')" class="btn btn-default" id=""
              value="<?php echo $set['idsize']; ?>">
              <?php echo $set['size']; ?>
            </button>
            <?php
          endwhile;
          ?>
        </div>

        <div class="vnt-box-cart">
          <div class="price">
            <div class="normal" id="ext_price">
              <?php echo number_format($dongia); ?> VNĐ
            </div>
          </div>
          <div class="quantity-input">
            <!-- <button class="btn btn-minus">-</button> -->
            <input type="number" class="quantity" id="soluong" type="number" step="1" min="1" max="100" name="soluong"
              value="1" title="Qty" class="input-text qty text" size="4" />
            <!-- <button class="btn btn-plus">+</button> -->
          </div>
          <div class="contiPay">
            <button class="main-border-button-inside" type="submit" data-toggle="modal" data-target="#myModal"
              value="addtocard">Thêm vào giỏ hàng</button>
          </div>
          <div class="viewSell">
            Còn
            <?php echo $soluongton; ?> sản phẩm
          </div>

        </div>
      </div>
    </div>
  </div>
  <div class="boxconproduct">
    <div class="wrap10Col">
      <div class="rightinfopro">
        <div class="lstinfomationPro">
          <div class="itemProBox active">
            <div class="titleshow">chi tiết sản phẩm</div>
            <div class="contentShow" style="display: block">
              <div class="desc">
                <p dir="ltr">
                  <strong><span style="font-size: 16px"><span style="font-family: Arial, Helvetica, sans-serif">Đây là
                        dòng sản phẩm mũ được cải tiến mới: chắc chắn, dễ chịu và dễ dàng hơn khi
                        đội.</span></span></strong>
                </p>

                <p dir="ltr">
                  <span style="font-size: 16px"><span style="font-family: Arial, Helvetica, sans-serif">
                      <?php echo $mota; ?> &nbsp;
                    </span></span>
                </p>

              </div>
            </div>
          </div>

          <div class="itemProBox active">
            <div class="titleshow">HƯỚNG DẪN SỬ DỤNG - BẢO QUẢN</div>
            <div class="contentShow" style="display: block">
              <div class="desc">
                <p dir="ltr">
                  <span style="font-size: 16px"><span style="font-family: Arial, Helvetica, sans-serif">1. Hãy chọn mũ
                      bảo
                      hiểm vừa với đầu của bạn, khóa chặt
                      dây quai đeo.&nbsp;</span></span>
                </p>

                <p dir="ltr">
                  <span style="font-size: 16px"><span style="font-family: Arial, Helvetica, sans-serif">2. Không đội mũ
                      đã
                      bị va đập mạnh, dù bề ngoài không
                      biến dạng.&nbsp;</span></span>
                </p>

                <p dir="ltr">
                  <span style="font-size: 16px"><span style="font-family: Arial, Helvetica, sans-serif">3. Không sơn lại
                      màu, không dùng dung dịch hóa học tẩy
                      rửa lên mũ.&nbsp;</span></span>
                </p>

                <p dir="ltr">
                  <span style="font-size: 16px"><span style="font-family: Arial, Helvetica, sans-serif">4. Nếu bề mặt vỏ
                      nhựa bẩn, hãy dùng khăn lau lên bề
                      mặt.&nbsp;</span></span>
                </p>

                <p dir="ltr">
                  <span style="font-size: 16px"><span style="font-family: Arial, Helvetica, sans-serif">5. Khuyến khích
                      nên sử dụng kèm chai xịt khử mùi (chai
                      xịt Diệt khuẩn - Kháng Khuẩn - Khử mùi Nón Sơn).</span></span>
                </p>
              </div>
            </div>
          </div>

          <div class="itemProBox active">
            <?php
            if (isset ($_SESSION['makh'])):
              ?>
              <p class="float-left"><b>Bình luận </b></p>
              <hr>
              <form action="" method="post">
                <div class="row">

                  <input type="hidden" name="txtmahh" value="<?php echo $id; ?>" />
                  <img src="Content/imagetourdien/people.png" width="50px" height="50px" ; />
                  <textarea class="input-field" type="text" name="comment" rows="2" cols="70" id="comment"
                    placeholder="Thêm bình luận">  </textarea>
                  <input type="submit" name="submit" class="btn btn-primary" id="submitButton" style="float: right;"
                    value="Bình Luận" />
                </div>

              </form>
              <div class="row">
                <p class="float-left"><b>Các bình luận</b></p>
                <?php
                $bl = new binhluan();
                $noidung = $bl->selectBinhLuan($id);
                while ($set = $noidung->fetch()):
                  ?>
                  <div class="col-12">
                    <div class="row">
                      <p>
                        <?php echo '<b>' . $set['content'] ?>
                      </p>
                    </div>
                  </div>
                  <?php
                endwhile;
                ?>
                <hr>
              </div>
              <div class="row">
                <br />
              </div>
              <?php
            endif;
            ?>

          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
</form>
<script>
  document.addEventListener("DOMContentLoaded", function () {
    const quantityInputs = document.querySelectorAll(".quantity-input");

    quantityInputs.forEach(function (input) {
      const inputField = input.querySelector(".quantity");
      const minusBtn = input.querySelector(".btn-minus");
      const plusBtn = input.querySelector(".btn-plus");

      minusBtn.addEventListener("click", function () {
        let value = parseInt(inputField.value);
        if (value > 1) {
          inputField.value = value - 1;
        }
      });

      plusBtn.addEventListener("click", function () {
        let value = parseInt(inputField.value);
        inputField.value = value + 1;
      });
    });
  });
</script>