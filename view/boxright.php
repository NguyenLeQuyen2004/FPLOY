<div class="boxright">
    <div class="mb">
        <div class="box_title">TÀI KHOẢN</div>
        <div class="box_content form_account">
            <form action="index.php?act=dangnhap" method="post">
                <h4>Tên đăng nhập</h4><br>
                <input type="text" name="user" value="<?= isset($_SESSION['user']['user']) ? $_SESSION['user']['user'] : '' ?>">
                <h4>Mật khẩu</h4><br>
                <input type="password" name="pass" value="<?= isset($_SESSION['user']['pass']) ? $_SESSION['user']['pass'] : '' ?>"><br>
                <input type="checkbox" name="">Ghi nhớ tài khoản?
                <br><button type="submit">Đăng nhập</button>
                <li class="form_li"><a href="index.php?act=quenmk">Quên mật khẩu</a></li>
                <li class="form_li"><a href="index.php?act=dangky">Đăng kí thành viên</a></li>
            </form>
            <button style="display: block; margin: 0 auto;">
                <a style="text-decoration: none; color: #000000;" href="index.php?act=dangxuat">
                    Đăng xuất</a>
            </button>

            <p style="margin-left: 90px; margin-top: 10px">
                <?= isset($_SESSION['user']['user']) ? 'Hello: ' . $_SESSION['user']['user'] : '' ?></p>
        </div>
    </div>
    <div class="mb">
        <div class="box_title">DANH MỤC</div>
        <div class="box_content2 product_portfolio">
            <ul>
                <?php foreach ($selectalldm as $dm) : ?>
                    <?php extract($dm);
                    $linkdm = "index.php?act=sanpham&iddm=" . $id; ?>
                    <li><a href="<?= $linkdm ?>"><?= $name ?> </a></li>
                <?php endforeach ?>
            </ul>
        </div>
        <div class="box_search">
            <form action="index.php?act=sanpham" method="POST">
                <input type="text" name="kyw" placeholder="Nhập từ khoá cần tìm">
                <input type="hidden" name="iddm">
                <button type="submit">Tìm kiếm</button>
            </form>
        </div>
    </div>
    <!-- DANH MỤC SẢN PHẨM BÁN CHẠY -->
    <div class="mb">
        <div class="box_title">SẢN PHẨM BÁN CHẠY</div>
        <div class="box_content">
            <?php foreach ($dstop10 as $sp) : ?>
                <?php extract($sp);
                $linksp = "index.php?act=sanphamct&idsp=" . $id . "&iddm=" . $iddm;
                $img = $img_path . $img; ?>
                <div class="selling_products" style="width:100%;">
                    <a href="<?= $linksp ?>"> <img src="<?= $img ?>" alt=""></a>
                    <a href="<?= $linksp ?>"><?= $name ?></a>
                </div>
            <?php endforeach ?>

        </div>
    </div>
</div>