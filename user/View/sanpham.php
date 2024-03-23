<!-- end số lượt xem san phẩm -->
<!-- sản phẩm-->
<?php
// cung 1 view ma goi nhieu du lieu co view giong nhau
$ac = 1;//cắm cờ
if (isset ($_GET['action'])) {
  if (isset ($_GET['act']) && $_GET['act'] == 'sanphamkhuyenmai') {
    $ac = 2;
  } else if (isset ($_GET['act']) && $_GET['act'] == 'timkiem') {
    $ac = 3;
  } else {
    $ac = 1;
  }
}
?>


<!--Section: Examples-->
<section id="examples" class="text-center">

  <!-- Heading -->
  <!-- view hiển thị tiêu đề -->
  <div class="row">
    <div class="col-lg-12 mt-3 text-center">
      <?php
      if ($ac == 1) {
        echo '
                    <div class="detail row">
                    <div class="col-lg-12 mt-4">
                      <div class="detail-column row">
                        <div class="detail-column-left col-lg-6">
                          <div class="detail-column-left-section-heading">
                            <h2>TẤT CẢ SẢN PHẨM</h2>
                          </div>
                        </div>
                        <!-- xem chi tiet -->
                        <div class="detail-column-right col-lg-6">
                          <div class="row">
                            <!-- <a href="index.php?action=sanpham">
                                                    <span >
                                                    <button class="xemchitiet" >Xem chi tiết</button>
                                                    </span>
                                            </a> -->
                            <p>trạng thái :</p>
                            <select
                              class="detail-column-right-select"
                              onchange="window.location.href = this.value;"
                            >
                              <option value="index.php?action=home">HOME</option>
                              <option value="index.php?action=sanpham">TẤT CẢ</option>
                              <option value="index.php?action=sanpham&act=sanphamkhuyenmai">
                                SALES
                              </option>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                    ';
      }
      if ($ac == 2) {
        echo '<div class="detail row">
                        <div class="col-lg-12 mt-4">
                            <div class="detail-column row">
                            <div class="detail-column-left col-lg-6">
                                <div class="detail-column-left-section-heading">
                                <h2>SẢN PHẨM KHUYẾN MÃI</h2>
                                </div>
                            </div>
                            <!-- xem chi tiet -->
                            <div class="detail-column-right col-lg-6">
                                <div class="row">
                                <!-- <a href="index.php?action=sanpham">
                                                        <span >
                                                        <button class="xemchitiet" >Xem chi tiết</button>
                                                        </span>
                                                </a> -->
                                <p>trạng thái :</p>
                                <select
                                    class="detail-column-right-select"
                                    onchange="window.location.href = this.value;"
                                >
                                    <option value="index.php?action=home">HOME</option>
                                    <option value="index.php?action=sanpham">TẤT CẢ</option>
                                    <option value="index.php?action=sanpham&act=sanphamkhuyenmai">
                                    SALES
                                    </option>
                                </select>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                    </h3>';
      }
      if ($ac == 3) {
        echo '<h3 class="mb-5 font-weight-bold" style="color: black">SẢN PHẨM TÌM KIẾM</h3>';
      }
      ?>
    </div>

  </div>
  <!--Grid row-->
  <!-- view hiển thị sản phẩm khác nhau -->
  <div class="row">
    <?php
    $hh = new hanghoa();
    if ($ac == 1) {
      $result = $hh->getHangHoaAll();
    }
    if ($ac == 2) {
      $result = $hh->getHangHoaAllSale();
    }
    if ($ac == 3) {
      if (isset ($_POST['txtsearch'])) {
        $tk = $_POST['txtsearch'];
        $result = $hh->selectTimKiem($tk);
      }
    }
    //do tung sp len view
    while ($set = $result->fetch()):
      ?>
      <!--Grid column-->
      <div class="col-lg-3 col-md-4 mb-3 text-left">

        <div class="view overlay z-depth-1-half">
          <img src="Content/imgnon/<?php echo $set['hinh']; ?>" class="img-fluid zoom" alt="">
          <div class="mask rgba-white-slight"></div>
        </div>

        <?php

        ?>

        <a href="./index.php?action=sanpham&act=sanphamchitiet&id=<?php echo $set['mahh'] ?>">
          <div class="col-lg-3 col-md-4 mb-3 text-left">

            <div class="product">
              <div class="product-frame-img">
                <img src="assets/images/<?php echo $set['hinh'] ?>" alt="Product Image" class="product-frame-image" />
              </div>
              <div class="product-details">
                <a href="./index.php?action=sanpham&act=sanphamchitiet&id=<?php echo $set['mahh'] ?>">
                  <span style="color: black">
                    <?php echo $set['tenhh']; ?>
                  </span></br></a>
                <span class="product-price">
                  <?php echo number_format($set['dongia']) ?> VNĐ</br>
                </span>
                <!-- Thêm các thông tin chi tiết sản phẩm khác ở đây -->
              </div>
            </div>

          </div>
      </div>
      <?php
    endwhile;
    ?>

  </div>

  <!--Grid row-->

</section>


<!-- end sản phẩm mới nhất -->


<div class="col-md-6 div col-md-offset-3">
  <ul class="pagination">

    <li><a href=""></a></li>

  </ul>
</div>