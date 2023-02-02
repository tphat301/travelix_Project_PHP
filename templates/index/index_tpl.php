<!-- SERVICE -->
<div class="services">
    <div class="footer-fl-other">
        <?php foreach ($splist as $k => $v) { ?>
            <a href="<?= $v['slug' . $lang] ?>"><?= $v['name' . $lang] ?></a>
        <?php } ?>
    </div>
</div>

<!-- REGISTER MESSAGER -->
<div class="contact__background">
    <div class="wrap-content">
        <div class="row">
            <div class="col-md-5">
                <div class="contact_image"></div>
            </div>
            <div class="col-md-7" data-aos="fade-up" data-aos-duration="1000">
                <div class="contact__container__form">
                    <div class="contact__container__form--title">
                        <h2><?= dangkynhantin ?></h2>
                    </div>
                    <form class="validation-newsletter contact__form" novalidate method="POST">
                        <input type=" text" placeholder="<?= hoten ?>" name="dataNewsletter[fullname]" class="contact_form_name" required>
                        <div class="invalid-feedback"><?= vuilongnhaphoten ?></div>

                        <input type="text" placeholder="E-mail" class="contact_form_email" name="dataNewsletter[email]" require>
                        <div class="invalid-feedback"><?= vuilongnhapdiachiemail ?></div>

                        <input type="text" placeholder="<?= sodienthoai ?>" class="contact_form_subject" name="dataNewsletter[phone]" require>
                        <div class="invalid-feedback"><?= vuilongnhapsodienthoai ?></div>

                        <textarea cols="30" rows="10" placeholder="<?= noidung ?>" name="dataNewsletter[content]"></textarea>
                        <div class="invalid-feedback"><?= vuilongnhapnoidung ?></div>

                        <button class="form_submit_button hover_xam" type="submit" name="btn-res-messager">
                            <?= dangkytaiday ?><span></span><span></span><span></span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- SERVICE HOT -->
<?php if (count($serviceHot)) { ?>
    <div class="wrap-content padding-top-bottom">
        <div class="title-main"><span>Dịch vụ hot</span></div>
        <div class="owl-pronb">
            <div class="owl-page owl-carousel owl-theme" data-xsm-items="2:10" data-sm-items="2:10" data-md-items="3:10" data-lg-items="3:10" data-xlg-items="4:20" data-rewind="1" data-autoplay="1" data-loop="0" data-lazyload="0" data-mousedrag="1" data-touchdrag="1" data-smartspeed="500" data-autoplayspeed="3500" data-dots="0" data-nav="0" data-navtext="<svg xmlns='http://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-chevron-left' width='44' height='45' viewBox='0 0 24 24' stroke-width='1.5' stroke='#2c3e50' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'/><polyline points='15 6 9 12 15 18' /></svg>|<svg xmlns='http://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-chevron-right' width='44' height='45' viewBox='0 0 24 24' stroke-width='1.5' stroke='#2c3e50' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'/><polyline points='9 6 15 12 9 18' /></svg>" data-navcontainer=".control-pronb">
                <?php foreach ($serviceHot as $k => $v) { ?>
                    <div class="box-product">
                        <div class="pic-product">
                            <a class="text-decoration-none scale-img hover_xam" href="<?= $v[$sluglang] ?>" title="<?= $v['name' . $lang] ?>">
                                <img class="lazy w-100" onerror="this.src='<?= THUMBS ?>/285x285x1/assets/images/noimage.png';" data-src="<?= WATERMARK ?>/product/285x285x1/<?= UPLOAD_PRODUCT_L . $v['photo'] ?>" alt="<?= $v['name' . $lang] ?>" title="<?= $v['name' . $lang] ?>" />
                            </a>
                        </div>
                        <h3 class="mb-0"><a class="text-decoration-none text-split name-product" href="<?= $v[$sluglang] ?>" title="<?= $v['name' . $lang] ?>"><?= $v['name' . $lang] ?></a></h3>
                        <p class="price-product">
                            <?php if ($v['discount']) { ?>
                                <span class="price-new"><?= $func->formatMoney($v['sale_price']) ?></span>
                                <span class="price-old"><?= $func->formatMoney($v['regular_price']) ?></span>
                                <span class="price-per"><?= '-' . $v['discount'] . '%' ?></span>
                            <?php } else { ?>
                                <span class="price-new"><?= ($v['regular_price']) ? $func->formatMoney($v['regular_price']) : lienhe ?></span>
                            <?php } ?>
                        </p>
                    </div>
                <?php } ?>
            </div>
            <div class="control-pronb control-owl transition"></div>
        </div>
    </div>
<?php } ?>

<!-- SERVICE LIST -->
<?php if (count($splistnb)) { ?>
    <div class="w-pronb">
        <div class="wrap-content padding-top-bottom">
            <div class="title-main"><span><?= cacloaidichvu ?></span></div>
            <div class="dm-noibat d-flex flex-wrap align-items-start justify-content-start">
                <div class="cats-owl list-hot">
                    <div class="owl-page owl-carousel owl-theme" data-xsm-items="2:10" data-sm-items="2:10" data-md-items="3:10" data-lg-items="5:5" data-xlg-items="5:5" data-rewind="1" data-autoplay="1" data-loop="0" data-lazyload="0" data-mousedrag="1" data-touchdrag="1" data-smartspeed="500" data-autoplayspeed="3500" data-dots="0" data-nav="0" data-navtext="" data-navcontainer="">
                        <a class="text-decoration-none footer-fl-other" data-id="0" data-tenkhongdau="san-pham"><?= tatca ?></a>
                        <?php foreach ($splistnb as $v) { ?>
                            <a class="text-decoration-none footer-fl-other" data-id="<?= $v['id'] ?>" data-tenkhongdau="<?= $v[$sluglang] ?>"><?= $v['name' . $lang] ?></a>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="load_ajax_product"></div>
        </div>
    </div>
<?php } ?>

<?php if (count($splistnb)) { ?>
    <?php foreach ($splistnb as $vlist) { ?>
        <div class="wrap-product wrap-content">
            <div class="title-main"><span><?= $vlist['name' . $lang] ?></span></div>
            <div class="paging-product-category paging-product-category-<?= $vlist['id'] ?>" data-list="<?= $vlist['id'] ?>"></div>
        </div>
    <?php } ?>
<?php } ?>

<!-- NEWSS AND VIDEOS -->
<?php if (count($newsnb) || count($videonb)) { ?>
    <div class="wrap-intro wrap-content d-flex flex-wrap align-items-start justify-content-between">
        <div class="left-intro" data-aos="flip-left">
            <p class=" title-intro"><span><?= tintucnoibat ?></span></p>
            <div class="flex_ttnb">
                <div class="newshome-intro">
                    <a class="pic-newshome-best scale-img newshome-best footer-fl-other" href="<?= $newsnb[0][$sluglang] ?>" title="<?= $newsnb[0]['name' . $lang] ?>">
                        <img class="lazy w-100" onerror="this.src='<?= THUMBS ?>/350x250x1/assets/images/noimage.png';" data-src="<?= THUMBS ?>/350x250x1/<?= UPLOAD_NEWS_L . $newsnb[0]['photo'] ?>" alt="<?= $newsnb[0]['name' . $lang] ?>" title="<?= $newsnb[0]['name' . $lang] ?>" />
                    </a>
                    <h3>
                        <a class="text-decoration-none name-newshome text-split" href="<?= $newsnb[0][$sluglang] ?>" title="<?= $newsnb[0]['name' . $lang] ?>"><?= $newsnb[0]['name' . $lang] ?></a>
                    </h3>
                    <p class="time-newshome text-dark"><?= date("d/m/Y", $newsnb[0]['date_created']) ?></p>
                    <p class="desc-newshome text-split"><?= $newsnb[0]['desc' . $lang] ?></p>
                    <a class="view-newshome text-decoration-none hover_xemthem" href="<?= $newsnb[0][$sluglang] ?>" title="<?= $newsnb[0]['name' . $lang] ?>"><?= xemthem ?></a>
                </div>
                <div class="newshome-scroll">
                    <div class="slick-v-3">
                        <?php foreach ($newsnb as $k => $v) { ?>
                            <div>
                                <div class="news-slick">
                                    <a class="img scale-img footer-fl-other" href="<?= $v[$sluglang] ?>" title="<?= $v['name' . $lang] ?>">
                                        <img onerror="this.src='<?= THUMBS ?>/150x120x1/assets/images/noimage.png';" src="<?= THUMBS ?>/150x120x1/<?= UPLOAD_NEWS_L . $v['photo'] ?>" alt="<?= $v['name' . $lang] ?>" title="<?= $v['name' . $lang] ?>" />
                                    </a>
                                    <div class="info">
                                        <h3>
                                            <a class="name-newshome text-split text-decoration-none" href="<?= $v[$sluglang] ?>" title="<?= $v['name' . $lang] ?>"><?= $v['name' . $lang] ?></a>
                                        </h3>
                                        <p class="desc-newshome desc-home-cl text-split"><?= $v['desc' . $lang] ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>

        </div>
        <div class="right-intro" data-aos="flip-right">
            <p class="title-intro"><span><?= videoclip ?></span></p>
            <div class="videohome-intro">
                <?php foreach ($videonb as $k => $v) { ?>
                    <a class="item-video1 pic-video scale-img text-decoration-none" data-fancybox="video" data-src="<?= $v['link_video'] ?>" title="<?= $v['name' . $lang] ?>">
                        <img onerror="this.src='<?= THUMBS ?>/480x360x2/assets/images/noimage.png';" src="https://img.youtube.com/vi/<?= $func->getYoutube($v['link_video']) ?>/0.jpg" alt="<?= $v['name' . $lang] ?>" />
                    </a>
                <?php break;
                } ?>
                <div class="div_hiden">
                    <div class="owl-page owl-carousel owl-theme owl-videorun" data-xsm-items="3:10" data-sm-items="3:10" data-md-items="3:10" data-lg-items="3:10" data-xlg-items="3:10" data-rewind="1" data-autoplay="1" data-loop="0" data-lazyload="0" data-mousedrag="1" data-touchdrag="1" data-smartspeed="500" data-autoplayspeed="3500" data-dots="0" data-nav="0" data-navtext="" data-navcontainer="">
                        <?php foreach ($videonb as $k => $v) { ?>
                            <div>
                                <a class="item-video2 pic-video-2 scale-img text-decoration-none" data-fancybox="video" data-src="<?= $v['link_video'] ?>" title="<?= $v['name' . $lang] ?>">
                                    <img onerror="this.src='<?= THUMBS ?>/480x360x2/assets/images/noimage.png';" src="https://img.youtube.com/vi/<?= $func->getYoutube($v['link_video']) ?>/0.jpg" alt="<?= $v['name' . $lang] ?>" />
                                </a>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>

<?php if (count($newsnb)) { ?>
    <div class="wrap-newsnb padding-top-bottom" data-aos="flip-right">
        <div class="wrap-content">
            <p class="title-main"><span><?= tintucnoibat ?></span></p>
            <div class="owl-page owl-carousel owl-theme" data-xsm-items="1:10" data-sm-items="2:10" data-md-items="3:10" data-lg-items="4:10" data-xlg-items="4:10" data-rewind="1" data-autoplay="1" data-loop="0" data-lazyload="0" data-mousedrag="1" data-touchdrag="1" data-smartspeed="500" data-autoplayspeed="3500" data-dots="0" data-nav="0" data-navtext="" data-navcontainer="">
                <?php foreach ($newsnb as $k => $v) { ?>
                    <div class="item-newsnb">
                        <p class="pic-newsnb">
                            <a class="scale-img footer-fl-other" href="<?= $v[$sluglang] ?>" title="<?= $v['name' . $lang] ?>">
                                <img class="lazy w-100" onerror="this.src='<?= THUMBS ?>/576x432x1/assets/images/noimage.png';" data-src="<?= THUMBS ?>/576x432x1/<?= UPLOAD_NEWS_L . $v['photo'] ?>" alt="<?= $v['name' . $lang] ?>" title="<?= $v['name' . $lang] ?>" />
                            </a>
                        </p>
                        <div class="info-newsnb">
                            <h3 class="mb-0">
                                <a class="name-newsnb text-split text-decoration-none" href="<?= $v[$sluglang] ?>" title="<?= $v['name' . $lang] ?>"><?= $v['name' . $lang] ?></a>
                            </h3>
                            <p class="time-newshome"><?= ngaydang ?>: <?= date("d/m/Y", $v['date_created']) ?></p>
                            <p class="desc-newsnb text-split"><?= $v['desc' . $lang] ?></p>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
<?php } ?>