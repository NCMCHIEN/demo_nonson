<style>
    .xemchitiet {
        margin-left: 368px;
    }

</style>
<!--Section: Examples-->
<section id="examples" class="text-center">

    <!-- Heading -->
    <div class="detail row">
        <div class="col-lg-12 mt-4">
            <div class="detail-column row">
                <div class="detail-column-left col-lg-6">
                    <div class="detail-column-left-section-heading">
                        <h2>Product's Latest</h2>
                        <span>Sản phẩm phát hành mới nhất của NONSON.</span>
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
                        <p>trạng thái : </p>
                        <select class="detail-column-right-select" onchange="window.location.href = this.value;">
                            <option value="index.php?action=home">HOME</option>
                            <option value="index.php?action=sanpham">TẤT CẢ</option>
                            <option value="index.php?action=sanpham&act=sanphamkhuyenmai">SALES</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!--Grid row-->
    <div class="row">

        <?php
        $hh = new hanghoa();
        $result = $hh->getHangHoaNew();//view lay duoc du lieu 8 san pham
        //đổ dữ liệu lên view
        while ($set = $result->fetch())://$set= array(mahh:24,tenhh:giay....)
            ?>

            <!--Grid column-->
            <div class="col-lg-3 col-md-4 mb-3 text-left">

                <div class="product">
                    <div class="product-frame-img">
                        <img src="assets/images/<?php echo $set['hinh'] ?>" alt="Product Image"
                            class="product-frame-image" />
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
            <?php
        endwhile;
        ?>
    </div>


    <!--Grid row-->

</section>
<!-- end sản phẩm mới nhất -->
<!-- sản phẩm khuyến mãi -->
<section id="examples" class="text-center">

    <!-- Heading -->
    <div class="detail row">
        <div class="col-lg-12 mt-4">
            <div class="detail-column row">
                <div class="detail-column-left col-lg-6">
                    <div class="detail-column-left-section-heading">
                        <h2>Product's Sale</h2>
                        <span>Sản phẩm khuyến mãi của NONSON.</span>
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
                        <!-- <p>trạng thái : </p>
                                        <select class="detail-column-right-select" name="" id="">
                                            <option value="">TẤT CẢ</option>
                                            <option value="">SALES</option>
                                        </select> -->
                    </div>
                </div>
            </div>
        </div>

        <!--Grid row-->
        <!--Grid row-->
        <div class="row">

            <?php
            $hh = new hanghoa();
            $result = $hh->getHangHoaSale();//view lay duoc du lieu 8 san pham
            //đổ dữ liệu lên view
            while ($set = $result->fetch())://$set= array(mahh:24,tenhh:giay....)
                ?>

                <!--Grid column-->
                <div class="col-lg-3 col-md-4 mb-3 text-left">

                    <div class="product">
                        <div class="product-frame-img">
                            <img src="assets/images/<?php echo $set['hinh'] ?>" alt="Product Image"
                                class="product-frame-image" />
                        </div>
                        <div class="product-details" style="margiin-top : 10px;">
                            <a href="./index.php?action=sanpham&act=sanphamchitiet&id=<?php echo $set['mahh'] ?>">
                                <span style="color: black">
                                    <?php echo $set['tenhh']; ?>
                                </span></br></a>
                            <span class="product-price"><strike>
                                    <?php echo number_format($set['dongia']) ?>
                                </strike> VNĐ</br></span>
                            <span class="product-price">
                                <?php echo number_format($set['giamgia']) ?> VNĐ</br>
                            </span>
                            <!-- Thêm các thông tin chi tiết sản phẩm khác ở đây -->
                        </div>
                    </div>

                </div>
                <?php
            endwhile;
            ?>
        </div>



        <!--Grid row-->

</section>
<!-- end sản phẩm khuyến mãi -->