<?php
/**
 * Eyoom Admin Skin File
 * @file    ~/theme/basic/skin/shop/brandform.html.php
 */
if (!defined('_EYOOM_IS_ADMIN_')) exit;

add_stylesheet('<link rel="stylesheet" href="'.EYOOM_ADMIN_THEME_URL.'/plugins/magnific-popup/magnific-popup.min.css" type="text/css" media="screen">',0);
if ($config['cf_editor'] == 'tuieditor') echo tuieditor_resource();
?>

<style>
.blind {display:none;position:absolute;top:-10000px;left:-10000px}
.admin-shop-brandform .text-emphasis {font-weight:bold !important;color:#CC2300 !important}
.admin-shop-brandform .table-form-thumb-img {position:relative;float:left;width:150px}
.admin-shop-brandform .table-form-thumb .goods-thumb {width:120px;height:auto;border:1px solid #d5d5d5;padding:5px}
.admin-shop-brandform .table-form-thumb .no-goods-thumb {width:120px;height:auto;min-height:80px;border:1px dashed #d5d5d5;padding:5px}
.admin-shop-brandform .table-form-thumb-file {position:relative;float:left;width:350px}
.admin-shop-brandform #option_fieldset {border:1px solid #959595;margin:0 -1px -1px;padding:20px 15px;background:#eeeeee}
.admin-shop-brandform #addoption_fieldset {border:1px solid #959595;margin:0 -1px -1px;padding:20px 15px;background:#eeeeee}
.admin-shop-brandform .relation-sbox {padding:10px;background:#f5f5f5;border:1px solid #d5d5d5}
.admin-shop-brandform .relation-sbox-margin-top {margin-top:42px}
.admin-shop-brandform #relation ul {list-style:none;margin:0;padding:0}
.admin-shop-brandform #relation ul li {position:relative;border:1px solid #d5d5d5;border-bottom:0;height:50px;padding:5px 10px;clear:both}
.admin-shop-brandform #relation ul li:nth-child(odd) {background:#fbfbfb}
.admin-shop-brandform #relation ul li:last-child {border-bottom:1px solid #d5d5d5}
.admin-shop-brandform #relation ul li img {margin-right:10px;width:50px}
.admin-shop-brandform #relation ul li .list_brand {display:block;text-overflow:ellipsis;white-space:nowrap;word-wrap:normal;overflow:hidden;margin-right:58px}
.admin-shop-brandform #relation ul li .list_brand_btn {position:absolute;top:20px;right:10px;margin:0;float:inherit}
.admin-shop-brandform #relation ul li .add_brand {width:48px;text-align:center;padding:0}
.admin-shop-brandform #reg_relation ul {list-style:none;margin:0;padding:0;margin-top:42px}
.admin-shop-brandform #reg_relation ul li {position:relative;border:1px solid #d5d5d5;border-bottom:0;height:50px;padding:5px 10px;clear:both}
.admin-shop-brandform #reg_relation ul li:nth-child(odd) {background:#fbfbfb}
.admin-shop-brandform #reg_relation ul li:last-child {border-bottom:1px solid #d5d5d5}
.admin-shop-brandform #reg_relation ul li img {margin-right:10px;width:50px}
.admin-shop-brandform #reg_relation ul li .list_brand {display:block;text-overflow:ellipsis;white-space:nowrap;word-wrap:normal;overflow:hidden;margin-right:58px}
.admin-shop-brandform #reg_relation ul li .list_brand_btn {position:absolute;top:20px;right:10px;margin:0;float:inherit}
.admin-shop-brandform #reg_relation ul li .del_brand {width:48px;text-align:center;padding:0}
.admin-shop-brandform .event-box {padding:10px;background:#f5f5f5;border:1px solid #d5d5d5}
.admin-shop-brandform #event_list ul {list-style:none;padding:0;margin:0}
.admin-shop-brandform #event_list ul li {position:relative;margin-bottom:10px}
.admin-shop-brandform #event_list ul li:last-child {margin-bottom:0}
.admin-shop-brandform #event_list ul li .list_brand {display:block;text-overflow:ellipsis;white-space:nowrap;word-wrap:normal;overflow:hidden;margin-right:58px}
.admin-shop-brandform #event_list ul li .list_brand_btn {position:absolute;top:0;right:0}
.admin-shop-brandform #event_list ul li .add_event {width:48px;text-align:center;padding:0}
.admin-shop-brandform #reg_event_list ul {list-style:none;padding:0;margin:0}
.admin-shop-brandform #reg_event_list ul li {position:relative;margin-bottom:10px}
.admin-shop-brandform #reg_event_list ul li:last-child {margin-bottom:0}
.admin-shop-brandform #reg_event_list ul li .list_brand {display:block;text-overflow:ellipsis;white-space:nowrap;word-wrap:normal;overflow:hidden;margin-right:58px}
.admin-shop-brandform #reg_event_list ul li .list_brand_btn {position:absolute;top:0;right:0}
.admin-shop-brandform #reg_event_list ul li .del_event {width:48px;text-align:center;padding:0}
.admin-shop-brandform .sbr_option {margin:0 0 20px;padding:0;border:1px solid #dadada;background:#fff}
.admin-shop-brandform .sbr_option .sit-option-list {padding:10px;border-bottom:1px solid #dadada}
.admin-shop-brandform .sbr_option .sit-option-brand {float:left;width:50%;box-sizing:border-box}
.admin-shop-brandform .sbr_option #sbr_option_addfrm_btn {text-align:center;padding:10px 0;border-bottom:1px solid #dadada}
.admin-shop-brandform .sbr_option #sbr_option_addfrm_btn button {position:relative;top:inherit;right:inherit}
@media (max-width: 600px) {
    .admin-shop-brandform .sbr_option .sit-option-brand {float:inherit;width:100%;box-sizing:border-box}
    .admin-shop-brandform #scrollbar_container_1 {position:relative;overflow:hidden;display:block}
    .admin-shop-brandform #scrollbar_container_2 {position:relative;overflow:hidden;display:block}
    .admin-shop-brandform .scrollbar-container {position:relative;display:block}
    .admin-shop-brandform .relation-sbox-margin-top {margin-top:inherit}
    .admin-shop-brandform .table-form-thumb-img {float:inherit}
    .admin-shop-brandform .table-form-thumb-file {float:inherit;margin-top:10px;width:inherit}
}
@media (min-width: 1150px) {
    .pg-anchor-in.tab-e2 .nav-tabs li a {font-size:13px;font-weight:bold;padding:8px 8px}
    .pg-anchor-in.tab-e2 .nav-tabs li.active a {z-index:1;border:1px solid #000;border-top:1px solid #DE2600;color:#DE2600}
    .pg-anchor-in.tab-e2 .tab-bottom-line {position:relative;display:block;height:1px;background:#000;margin-bottom:20px}
}
@media (min-width: 1400px) {
    .pg-anchor-in.tab-e2 .nav-tabs li a {font-size:14px;font-weight:bold;padding:8px 10px}
}
@media (min-width: 1600px) {
    .pg-anchor-in.tab-e2 .nav-tabs li a {font-size:14px;font-weight:bold;padding:8px 15px}
}
@media (max-width: 1149px) {
    .pg-anchor-in {position:relative;overflow:hidden;margin-bottom:20px;border:1px solid #757575}
    .pg-anchor-in.tab-e2 .nav-tabs li {width:33.33333%;margin:0}
    .pg-anchor-in.tab-e2 .nav-tabs li a {font-size:12px;padding:6px 0;text-align:center;border-bottom:1px solid #d5d5d5;margin-right:0;font-weight:bold;background:#fff}
    .pg-anchor-in.tab-e2 .nav-tabs li.active a {border:0;border-bottom:1px solid #d5d5d5 !important;color:#DE2600;background:#fff1f0}
    .pg-anchor-in.tab-e2 .nav-tabs li:nth-child(1) a {border-right:1px solid #d5d5d5}
    .pg-anchor-in.tab-e2 .nav-tabs li:nth-child(2) a {border-right:1px solid #d5d5d5}
    .pg-anchor-in.tab-e2 .nav-tabs li:nth-child(4) a {border-right:1px solid #d5d5d5}
    .pg-anchor-in.tab-e2 .nav-tabs li:nth-child(5) a {border-right:1px solid #d5d5d5}
    .pg-anchor-in.tab-e2 .nav-tabs li:nth-child(7) a {border-right:1px solid #d5d5d5}
    .pg-anchor-in.tab-e2 .nav-tabs li:nth-child(8) a {border-right:1px solid #d5d5d5}
    .pg-anchor-in.tab-e2 .nav-tabs li:nth-child(10) a {border-right:1px solid #d5d5d5;border-bottom:0 !important}
    .pg-anchor-in.tab-e2 .nav-tabs li:nth-child(11) a {border-right:1px solid #d5d5d5;border-bottom:0 !important}
    .pg-anchor-in.tab-e2 .nav-tabs li:nth-child(12) a {border-bottom:0 !important}
    .pg-anchor-in.tab-e2 .tab-bottom-line {display:none}
}
</style>

<div class="admin-shop-brandform">
    <form name="fbrandform" method="post" action="<?php echo $action_url1; ?>" onsubmit="return fbrandformcheck(this);" enctype="multipart/form-data" autocomplete="off" class="eyoom-form">
    <input type="hidden" name="w" value="<?php echo $w; ?>">
    <input type="hidden" name="sca" value="<?php echo $sca; ?>">
    <input type="hidden" name="sst" value="<?php echo $sst; ?>">
    <input type="hidden" name="sfl" value="<?php echo $sfl; ?>">
    <input type="hidden" name="stx"  value="<?php echo $stx; ?>">
    <input type="hidden" name="page" value="<?php echo $page; ?>">
    <input type="hidden" name="br_no" value="<?php echo $br_no; ?>">
    <input type="hidden" name="wmode" value="<?php echo $wmode; ?>">
    <input type="hidden" name="uploading" id="uploading" value="">

    <div class="adm-headline">
        <h3>????????? <?php echo $html_title; ?></h3>
    </div>


    <div class="adm-table-form-wrap margin-bottom-30">
        <header><strong><i class="fas fa-caret-right"></i> ????????????</strong></header>

        <div class="table-list-eb">
            <?php if (!G5_IS_MOBILE) { ?>
            <div class="table-responsive">
            <?php } ?>
            <table class="table">
                <tbody>
                    <tr>
                        <th class="table-form-th">
                            <label for="br_code" class="label">???????????????</label>
                        </th>
                        <td>
                            <?php if ($w == '') { ?>
                            <label for="br_code" class="input form-width-250px">
                                <input type="text" name="br_code" value="<?php echo time(); ?>" id="br_code" required  maxlength="20">
                            </label>
                            <div class="note"><strong>Note:</strong> ???????????? ????????? 10?????? ????????? ?????????????????????. <b>?????? ?????????????????? ????????? ?????? ????????????.</b><br>?????????????????? ?????????, ??????, - ??? ?????? ???????????????.</div>
                            <?php } else { ?>
                            <input type="hidden" name="br_code" value="<?php echo $br['br_code']; ?>" id="br_code">
                            <strong><?php echo $br['br_code']; ?></strong>
                            <?php } ?>
                        </td>
                    </tr>
                    <tr>
                        <th class="table-form-th">
                            <label for="br_name" class="label">????????????</label>
                        </th>
                        <td>
                            <label class="input">
                                <input type="text" name="br_name" value="<?php echo get_text(cut_str($br['br_name'], 250, "")); ?>" id="br_name" required>
                            </label>
                            <div class="note"><strong>Note:</strong> HTML ????????? ???????????????.</div>
                        </td>
                    </tr>
                    <tr>
                        <th class="table-form-th">
                            <label for="br_basic" class="label">????????????</label>
                        </th>
                        <td>
                            <label class="input">
                                <input type="text" name="br_basic" value="<?php echo get_text(html_purifier($br['br_basic'])); ?>" id="br_basic">
                            </label>
                            <div class="note"><strong>Note:</strong> ???????????? ????????? ???????????? ?????? ???????????? ????????? ????????? ????????? ???????????????. HTML ????????? ???????????????.</div>
                        </td>
                    </tr>
                    <tr>
                        <th class="table-form-th">
                            <label class="label">????????????</label>
                        </th>
                        <td>
                            <div class="inline-group">
                                <label for="br_open_y" class="radio"><input type="radio" name="br_open" id="br_open_y" value="y" <?php echo $br['br_open']=='y' ? 'checked': ''; ?>><i></i> ???</label>
                                <label for="br_open_n" class="radio"><input type="radio" name="br_open" id="br_open_n" value="n" <?php echo $br['br_open']=='n' ? 'checked': ''; ?>><i></i> ?????????</label>
                            </div>
                            <div class="note"><strong>Note:</strong> ?????? ????????? ???????????????.</b></div>
                        </td>
                    </tr>
                    <?php if ($w=='u') { ?>
                    <tr>
                        <th class="table-form-th">
                            <label for="br_sort" class="label">????????????</label>
                        </th>
                        <td>
                            <label class="input form-width-250px">
                                <input type="text" name="br_sort" value="<?php echo $br['br_sort']; ?>" id="br_sort">
                            </label>
                            <div class="note"><strong>Note:</strong> ????????? ?????? ?????? ????????? ???????????????. ?????? ????????? ???????????? ?????? ?????? ????????? -2147483648 ?????? 2147483647 ???????????????.<br><b>???????????? ????????? ???????????? ???????????????.</b></div>
                        </td>
                    </tr>
                    <?php } ?>
                    <tr>
                        <th class="table-form-th">
                            <label for="br_img" class="label">????????? ?????????</label>
                        </th>
                        <td>
                            <label for="file" class="input input-file">
                                <div class="button bg-color-light-grey"><input type="file" id="br_img" name="br_img" value="????????????" onchange="this.parentNode.nextSibling.value = this.value">????????????</div><input type="text" readonly>
                            </label>
                            <?php if ($br['img_url']) { ?>
                            <label for="del_br_img" class="checkbox"><input type="checkbox" id="del_br_img" name="del_br_img" value="1"><i></i> [<?php echo $br['br_img']; ?>] ??????</label>
                            <?php } ?>
                            <div class="note"><strong>Note:</strong> ????????? ?????? ???????????? ????????? ?????????.</div>
                        </td>
                    </tr>
                </tbody>
            </table>
            <?php if (!G5_IS_MOBILE) { ?>
            </div>
            <?php } ?>
        </div>
    </div>

    <?php echo $frm_submit; // ?????? ?>

</div>

<script src="<?php echo EYOOM_ADMIN_THEME_URL; ?>/plugins/magnific-popup/magnific-popup.min.js"></script>
