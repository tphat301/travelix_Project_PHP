<div class="w-menu">
    <div class="menu">
        <div class="wrap-content">
            <div>
                <a class="logo-header" href="">
                    <div class="d-inline-flex">
                        <img class="lazy" onerror="this.src='<?= THUMBS ?>/35x47x1/assets/images/noimage.png';" data-src="<?= THUMBS ?>/35x47x1/<?= UPLOAD_PHOTO_L . $logo['photo'] ?>" alt="logo" title="logo" />
                        <a href="" class="name-logo text-uppercase text-decoration-none mt-2 site-me">Travelix</a>
                    </div>
                </a>
            </div>
            <ul class="d-flex align-items-center justify-content-between">
                <li><a class="<?php if ($com == '' || $com == 'index') echo 'active'; ?> transition" href="" title="<?= trangchu ?>"><?= trangchu ?></a></li>
                <li><a class="<?php if ($com == 'gioi-thieu') echo 'active'; ?> transition" href="gioi-thieu" title="<?= gioithieu ?>"><?= gioithieu ?></a></li>
                <li>
                    <a class="has-child <?php if ($com == 'tin-tuc') echo 'active'; ?> transition" href="tin-tuc" title="<?= tintuc ?>"><?= tintuc ?></a>
                    <?php if (count($ttlist)) { ?>
                        <ul>
                            <?php foreach ($ttlist as $klist => $vlist) {
                                $ttcat = $d->rawQuery("select name$lang, slugvi, slugen, id from #_news_cat where id_list = ? and find_in_set('hienthi',status) order by numb,id desc", array($vlist['id'])); ?>
                                <li>
                                    <a class="has-child transition" title="<?= $vlist['name' . $lang] ?>" href="<?= $vlist[$sluglang] ?>"><?= $vlist['name' . $lang] ?></a>
                                    <?php if (!empty($ttcat)) { ?>
                                        <ul>
                                            <?php foreach ($ttcat as $kcat => $vcat) {
                                                $ttitem = $d->rawQuery("select name$lang, slugvi, slugen, id from #_news_item where id_cat = ? and find_in_set('hienthi',status) order by numb,id desc", array($vcat['id'])); ?>
                                                <li>
                                                    <a class="has-child transition" title="<?= $vcat['name' . $lang] ?>" href="<?= $vcat[$sluglang] ?>"><?= $vcat['name' . $lang] ?></a>
                                                    <?php if (!empty($ttitem)) { ?>
                                                        <ul>
                                                            <?php foreach ($ttitem as $kitem => $vitem) {
                                                                $ttsub = $d->rawQuery("select name$lang, slugvi, slugen, id from #_news_sub where id_item = ? and find_in_set('hienthi',status) order by numb,id desc", array($vitem['id'])); ?>
                                                                <li>
                                                                    <a class="has-child transition" title="<?= $vitem['name' . $lang] ?>" href="<?= $vitem[$sluglang] ?>"><?= $vitem['name' . $lang] ?></a>
                                                                    <?php if (!empty($ttsub)) { ?>
                                                                        <ul>
                                                                            <?php foreach ($ttsub as $ksub => $vsub) { ?>
                                                                                <li>
                                                                                    <a class="transition" title="<?= $vsub['name' . $lang] ?>" href="<?= $vsub[$sluglang] ?>"><?= $vsub['name' . $lang] ?></a>
                                                                                </li>
                                                                            <?php } ?>
                                                                        </ul>
                                                                    <?php } ?>
                                                                </li>
                                                            <?php } ?>
                                                        </ul>
                                                    <?php } ?>
                                                </li>
                                            <?php } ?>
                                        </ul>
                                    <?php } ?>
                                </li>
                            <?php } ?>
                        </ul>
                    <?php } ?>
                </li>
                <li><a class="<?php if ($com == 'tuyen-dung') echo 'active'; ?> transition" href="tuyen-dung" title="<?= tuyendung ?>"><?= tuyendung ?></a></li>
                <li><a class="<?php if ($com == 'lien-he') echo 'active'; ?> transition" href="lien-he" title="<?= lienhe ?>"><?= lienhe ?></a></li>
                <li class="text-white ml-auto ico-search position-relative">
                    <span class="close text-white">X</span>
                    <i class="bi bi-search" id="s"></i>
                </li>
            </ul>
            <div class="search box-s d-flex align-items-center justify-content-between">
                <input type="text" id="keyword" placeholder="<?= nhaptukhoatimkiem ?>" onkeypress="doEnter(event,'keyword');" value="<?php if (!empty($_GET['keyword'])) {
                                                                                                                                            echo $_GET['keyword'];
                                                                                                                                        } ?>" />
                <p onclick="onSearch('keyword');" class="d-flex align-items-center justify-content-center"><i class="bi bi-search"></i></p>
            </div>
        </div>
    </div>
    <?php include TEMPLATE . LAYOUT . "mmenu.php"; ?>
</div>