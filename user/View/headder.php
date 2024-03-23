<style>
  .header_container-item-logo::before {
    content: "";
    /* background-color: #ccc; */
    position: absolute;
    width: 220px;
    height: 90px;
    top: -8px;
    background-image: url("./assets/images/bglogo.png");
    background-repeat: no-repeat;
    background-position: top center;
    background-size: contain;
    background-repeat: no-repeat;
    left: 50%;
    transform: translateX(-50%);
    z-index: -1;
  }
</style>

<body>
  <div class="app">
    <div class="header_container">
      <div class="header_container-top">
        <ul class="header_container-item">
          <li class="header_container-item-phone">
            <i class="fa-solid fa-phone header_container-item-icon"></i>
            <span class="header_container-top-text">1800 7179 (Miễn phí cuộc gọi)</span>
          </li>
          <li class="header_container-item-locate">
            <i class="fa-solid fa-location-dot"></i>
            <span class="header_container-top-text">HỆ THỐNG CỬA HÀNG</span>
          </li>
        </ul>
        <ul class="header_container_controll">
          <li class="header_container-item-search">
            <i class="fa-solid fa-magnifying-glass"></i>
            <!-- cmt -->
            <form class="form-inline" action="index.php?action=sanpham&act=timkiem" method="post">
              <div class="input-group">
                <div class="input-group-prepend">
                  <!-- <a href="Trangchu.php?trang=tk"> -->
                  <input class="input-group-text" style="height: 1px; border: none;" type="submit" id="btsearch"
                    value="" />
                  <!-- </a> -->
                  <!-- <span class="input-group-text">@</span> -->
                  <input type="text" name="txtsearch" class="form-control" placeholder="Tìm Kiếm" />
                </div>

            </form>
            <!-- cmt -->
          </li>
          <li class="header_container-item-cart">
            <i class="fa-solid fa-cart-shopping"></i>
            <a href="index.php?action=giohang" class="header_container-top-text">GIỎ HÀNG</a>
          </li>
          <!-- tai khoan  -->
          <li class="header_container-item-account">
            <i class="fa-solid fa-user"></i>
            <span class="header_container-top-text">TÀI KHOẢN</span>

            <div class="header_container-list">
              <?php
              if (!isset ($_SESSION['makh'])) {
                ?>
                <button type="button" class="modal-button" data-toggle="modal" data-target="#modelIdlogin"
                  value="ĐĂNG NHẬP">
                  ĐĂNG NHẬP
                </button>
                <button type="button" class="modal-button" data-toggle="modal" data-target="#modelIdsignup"
                  value="ĐĂNG KÝ">
                  ĐĂNG KÝ
                </button>
                <?php
              }
              ?>

              <?php
              if (isset ($_SESSION['makh'])) {
                ?>
                <button onclick="window.location.href = 'index.php?action=dangnhap&act=dangxuat';" type="button"
                  class="modal-button" data-toggle="modal" data-target="#modelIdsignup" value="ĐĂNG XUAT">
                  ĐĂNG XUẤT
                </button>
                <?php
              }
              ?>
            </div>
          </li>
          <!-- nhap  -->
          <!-- end nhap  -->

        </ul>
      </div>
    </div>
    <div class="header_container-item-logo">
      <a href="index.php">
        <img src="https://nonson.vn/vnt_upload/weblink/logo_Non_Son_doc.svg" alt="" width="80px" height="90px" /></a>
    </div>
    <div class="header_container-menu">
      <ul class="header_container-menu-list">
        <?php
        $hh = new hanghoa();
        $result = $hh->getDanhMuc();//view lay duoc du lieu 8 san pham
        //đổ dữ liệu lên view
        while ($set = $result->fetch())://$set= array(mahh:24,tenhh:giay....)
          ?>
          <li class="header_container-menu-list-item">
            <a href="index.php?action=hanghoa&id=<?php echo $maloai; ?>" class="header_container-menu-text">
              <?php echo $set['tenloai'] ?>
            </a>
          </li>
          <?php
        endwhile;
        ?>
      </ul>
    </div>
  </div>
  <div class="main-banner">
    <!-- slide truot -->
    <div id="carouselId" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselId" data-slide-to="0" class="active"></li>
        <li data-target="#carouselId" data-slide-to="1"></li>
        <li data-target="#carouselId" data-slide-to="2"></li>
        <li data-target="#carouselId" data-slide-to="3"></li>
        <li data-target="#carouselId" data-slide-to="4"></li>
        <li data-target="#carouselId" data-slide-to="5"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
          <img src="https://img.ws.mms.shopee.vn/vn-11134210-23030-fuw3de64qfov0b" height="100%" width="100%"
            alt="First slide" />
        </div>
        <div class="carousel-item">
          <img src="https://img.ws.mms.shopee.vn/vn-11134210-23030-1a3jg150qfov93" height="100%" width="100%"
            alt="Second slide" />
        </div>
        <div class="carousel-item">
          <img src="https://img.ws.mms.shopee.vn/vn-11134210-23030-wfb44d64qfov79" height="100%" width="100%"
            alt="Third slide" />
        </div>
        <div class="carousel-item">
          <img src="https://img.ws.mms.shopee.vn/vn-11134210-23030-n5ljmzzbrfov37" height="100%" width="100%"
            alt="Four slide" />
        </div>
        <div class="carousel-item">
          <img src="https://img.ws.mms.shopee.vn/vn-11134210-7qukw-lf9mbzy7i3iv31" height="100%" width="100%"
            alt="Fif slide" />
        </div>
        <div class="carousel-item">
          <img src="https://img.ws.mms.shopee.vn/vn-11134210-23030-s5823n0arfov3e" height="100%" width="100%"
            alt="Six slide" />
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselId" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselId" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
  <!-- Button trigger modal -->

  <!-- Modal -->
  <!-- dang nhap -->
  <form action="index.php?action=dangnhap&act=dangnhap_action" method="post">
    <div class="act-login modal fade" id="modelIdlogin" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
      aria-hidden="true" style="width: 380px; left: 600px">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header bg-light">
            <h5 class="modal-title" style="width: 85px"></h5>
            <h5 class="modal-title" style="font-size: 28px; color: #e21e70">
              ĐĂNG NHẬP
            </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="form-group">
              <input type="text" name="txtusername" class="form-control" placeholder="Tên đăng nhập"
                aria-describedby="helpId" />
            </div>
            <div class="form-group">
              <input type="password" name="txtpassword" class="form-control" placeholder="Mật khẩu"
                aria-describedby="helpId" />
            </div>
            <button type="submit" class="dangnhap">ĐĂNG NHẬP</button>

            <div class="row mt-3">
              <div class="col-6">
                <div class="form-check form-check-inline">
                  <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" value="checkedValue" aria-label="" />Ghi nhớ
                  </label>
                </div>
              </div>
              <div class="col-6 text-right">
                <a href="" style="text-decoration: none; color: #ff69b4">Quên mật khẩu?</a>
              </div>
            </div>
            <div class="dangnhapkhac">
              <p>- Hoặc đăng nhập với-</p>
            </div>
            <button type="button" class="facebook">
              <i class="fa-brands fa-facebook-f"></i> FACEBOOK
            </button>
            <div class="dangnhapkhac">
              <p></p>
              <p>Tôi đã đọc và đồng ý với Điều khoản và Quy định của Nón Sơn</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </form>
  <!-- dang ky  -->
  <form action="index.php?action=dangky&act=dangky_action" method="post">
    <div class="act-login modal fade" id="modelIdsignup" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
      aria-hidden="true" style="width: 380px; left: 600px">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header bg-light">
            <h5 class="modal-title" style="width: 85px"></h5>
            <h5 class="modal-title" style="font-size: 28px; color: #e21e70; margin-left: 13px">
              ĐĂNG KÝ
            </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="form-group">
              <input type="text" name="txtusername" class="form-control" placeholder="Họ tên"
                aria-describedby="helpId" />
            </div>
            <div class="form-group">
              <input type="text" name="txtemail" class="form-control" placeholder="Địa chỉ email"
                aria-describedby="helpId" />
            </div>
            <div class="form-group">
              <input type="text" name="txtsodt" class="form-control" placeholder="Điện thoại"
                aria-describedby="helpId" />
            </div>
            <div class="form-group">
              <input type="password" name="txtpass" class="form-control" placeholder="Mật khẩu"
                aria-describedby="helpId" />
            </div>
            <div class="form-group">
              <input type="password" name="retypepassword" class="form-control" placeholder="Nhập lại mật khẩu"
                aria-describedby="helpId" />
            </div>
            <button class="dangnhap" type="submit" name="submit">ĐĂNG KÝ</button>

            <div class="row mt-3">
              <div class="col-12">
                <div class="form-check form-check-inline">
                  <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" value="checkedValue" aria-label="" />Tôi đồng ý với
                    Điều khoản dịch vụ của công ty
                  </label>
                </div>
              </div>
            </div>
            <div class="dangnhapkhac">
              <p>- Hoặc đăng nhập với-</p>
            </div>
            <button type="button" class="facebook">
              <i class="fa-brands fa-facebook-f"></i> FACEBOOK
            </button>
            <div class="dangnhapkhac">
              <p></p>
              <p>Tôi đã đọc và đồng ý với Điều khoản và Quy định của Nón Sơn</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </form>
  <script>
    $("#exampleModal").on("show.bs.modal", (event) => {
      var button = $(event.relatedTarget);
      var modal = $(this);
      // Use above variables to manipulate the DOM
    });
  </script>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
</body>

</html>