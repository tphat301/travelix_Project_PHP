<div class="header">
    <div class="header-top">
        <div class="wrap-content">
            <div class="row">
                <div class="col-md-6 d-flex align-items-center">
                    <p class="info-header"><?= $func->formatPhone($optsetting['hotline']) ?></p>
                    <?php if (count($social)) { ?>
                        <div class="social social-header d-flex align-items-center">
                            <?php foreach ($social as $k => $v) { ?>
                                <a href="<?= $v['link'] ?>" target="_blank" class="text-decoration-none mr-2">
                                    <img class="lazy" data-src="<?= THUMBS ?>/10x10x1/<?= UPLOAD_PHOTO_L . $v['photo'] ?>" alt="<?= $v['name' . $lang] ?>" title="<?= $v['name' . $lang] ?>">
                                </a>
                            <?php } ?>
                        </div>
                    <?php } ?>
                </div>
                <div class="col-md-6 text-end d-flex justify-content-end align-items-center">
                    <div class="lang-header mr-4">
                        <a href="ngon-ngu/vi/" class="text-decoration-none text-white text-capitalize vn">vietnam</a>
                        <a href="ngon-ngu/en/" class="text-decoration-none text-white text-capitalize">english</a>
                    </div>
                    <?php if (array_key_exists($loginMember, $_SESSION) && $_SESSION[$loginMember]['active'] == true) { ?>
                        <div class="user-header">
                            <a href="account/thong-tin">
                                <span>Hi, <?= $_SESSION[$loginMember]['username'] ?></span>
                            </a>
                            <a href="account/dang-xuat text-uppercase">
                                <i class="fas fa-sign-out-alt"></i>
                                <span><?= dangxuat ?></span>
                            </a>
                        </div>
                    <?php } else { ?>
                        <div class="user-header text-uppercase">
                            <a href="account/dang-nhap">
                                <span><?= dangnhap ?></span>
                            </a>
                            <a href="account/dang-ky" class="text-uppercase">
                                <span><?= dangky ?></span>
                            </a>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>