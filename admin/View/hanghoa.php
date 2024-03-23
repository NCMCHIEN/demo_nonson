<style>

</style>
<!-- Recent Sales Start -->
<div class="container-fluid pt-4 px-4">
    <div class="bg-light text-center rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h6 class="mb-0">Bảng Sản Phẩm</h6>
            <a href="index.php?action=hanghoa&act=insert_hanghoa">
                <h4>Thêm sản phẩm</h4>
            </a>
        </div>
        <div class="table-responsive">
            <table class="table text-start align-middle table-bordered table-hover mb-0">
                <thead>
                    <tr class="text-dark">
                        <th>Mã hàng</th>
                        <th>Tên hàng</th>
                        <th>Mã loại</th>
                        <th>Số lượt xem</th>
                        <th>Mô tả</th>
                        <th>Ngày lập</th>
                        <th>Cập Nhật</th>
                        <th>Xóa</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $hh = new hanghoa();
                    $result = $hh->getHangHoa();
                    while ($set = $result->fetch()):
                        ?>
                        <tr>
                            <td>
                                <?php echo $set['mahh']; ?>
                            </td>
                            <td>
                                <?php echo $set['tenhh']; ?>
                            </td>
                            <td>
                                <?php echo $set['maloai']; ?>
                            </td>
                            <td>
                                <?php echo $set['soluotxem']; ?>
                            </td>
                            <td>
                                <?php echo $set['mota']; ?>
                            </td>
                            <td>
                                <?php echo $set['ngaylap']; ?>
                            </td>

                            <td><a href="index.php?action=hanghoa&act=update_hanghoa&id=<?php echo $set['mahh']; ?>">Cập
                                    nhật</a></td>
                            <td><a href="index.php?action=hanghoa&act=delete_hanghoa&id=<?php echo $set['mahh']; ?>">Xóa</a>
                            </td>
                        </tr>
                        <?php
                    endwhile;
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- Recent Sales End -->