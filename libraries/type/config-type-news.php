<?php
/* Tin tức */
$nametype = "tin-tuc";
$config['news'][$nametype]['title_main'] = "Tin tức";
$config['news'][$nametype]['dropdown'] = false;
$config['news'][$nametype]['list'] = false;
$config['news'][$nametype]['cat'] = false;
$config['news'][$nametype]['item'] = false;
$config['news'][$nametype]['sub'] = false;
$config['news'][$nametype]['tags'] = false;
$config['news'][$nametype]['view'] = true;
$config['news'][$nametype]['office'] = false;/*chuc vu*/
$config['news'][$nametype]['copy'] = true;
$config['news'][$nametype]['copy_image'] = true;
$config['news'][$nametype]['comment'] = false;
$config['news'][$nametype]['slug'] = true;
$config['news'][$nametype]['check'] = array("noibat" => "Nổi bật", "hienthi" => "Hiển thị");
$config['news'][$nametype]['images'] = true;
$config['news'][$nametype]['show_images'] = true;
$config['news'][$nametype]['gallery'] = array();
$config['news'][$nametype]['desc'] = true;
$config['news'][$nametype]['content'] = true;
$config['news'][$nametype]['content_cke'] = true;
$config['news'][$nametype]['seo'] = true;
$config['news'][$nametype]['width'] = 576;
$config['news'][$nametype]['height'] = 432;
$config['news'][$nametype]['thumb'] = '100x100x1';
$config['news'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif';

/* Tuyển dụng */
$nametype = "tuyen-dung";
$config['news'][$nametype]['title_main'] = "Tuyển dụng";
$config['news'][$nametype]['check'] = array("hienthi" => "Hiển thị");
$config['news'][$nametype]['view'] = true;
$config['news'][$nametype]['slug'] = true;
$config['news'][$nametype]['copy'] = true;
$config['news'][$nametype]['images'] = true;
$config['news'][$nametype]['show_images'] = true;
$config['news'][$nametype]['desc'] = true;
$config['news'][$nametype]['content'] = true;
$config['news'][$nametype]['content_cke'] = true;
$config['news'][$nametype]['seo'] = true;
$config['news'][$nametype]['width'] = 576;
$config['news'][$nametype]['height'] = 432;
$config['news'][$nametype]['thumb'] = '100x100x1';
$config['news'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif';

/* Chính sách */
$nametype = "chinh-sach";
$config['news'][$nametype]['title_main'] = "Chính sách";
$config['news'][$nametype]['check'] = array("hienthi" => "Hiển thị");
$config['news'][$nametype]['view'] = true;
$config['news'][$nametype]['slug'] = true;
$config['news'][$nametype]['copy'] = true;
$config['news'][$nametype]['images'] = true;
$config['news'][$nametype]['show_images'] = true;
$config['news'][$nametype]['content'] = true;
$config['news'][$nametype]['content_cke'] = true;
$config['news'][$nametype]['seo'] = true;
$config['news'][$nametype]['width'] = 576;
$config['news'][$nametype]['height'] = 432;
$config['news'][$nametype]['thumb'] = '100x100x1';
$config['news'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif';

/* Hình thức thanh toán */
$nametype = "hinh-thuc-thanh-toan";
$config['news'][$nametype]['title_main'] = "Hình thức thanh toán";
$config['news'][$nametype]['check'] = array("hienthi" => "Hiển thị");
$config['news'][$nametype]['copy'] = true;
$config['news'][$nametype]['desc'] = true;

/* Quản lý mục (Không cấp) */
if (isset($config['news'])) {
    foreach ($config['news'] as $key => $value) {
        if (!isset($value['dropdown']) || (isset($value['dropdown']) && $value['dropdown'] == false)) {
            $config['shownews'] = 1;
            break;
        }
    }
}
