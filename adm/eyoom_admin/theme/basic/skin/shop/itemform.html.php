<?php
/**
 * Eyoom Admin Skin File
 * @file    ~/theme/basic/skin/shop/itemform.html.php
 */
if (!defined('_EYOOM_IS_ADMIN_')) exit;

add_stylesheet('<link rel="stylesheet" href="'.EYOOM_ADMIN_THEME_URL.'/plugins/magnific-popup/magnific-popup.min.css" type="text/css" media="screen">',0);
if ($config['cf_editor'] == 'tuieditor') echo tuieditor_resource();
?>

<style>
.blind {display:none;position:absolute;top:-10000px;left:-10000px}
.admin-shop-itemform .text-emphasis {font-weight:bold !important;color:#CC2300 !important}
.admin-shop-itemform .table-form-thumb-img {position:relative;float:left;width:150px}
.admin-shop-itemform .table-form-thumb .goods-thumb {width:120px;height:auto;border:1px solid #d5d5d5;padding:5px}
.admin-shop-itemform .table-form-thumb .no-goods-thumb {width:120px;height:auto;min-height:80px;border:1px dashed #d5d5d5;padding:5px}
.admin-shop-itemform .table-form-thumb-file {position:relative;float:left;width:350px}
.admin-shop-itemform #option_fieldset {border:1px solid #959595;margin:0 -1px -1px;padding:20px 15px;background:#eeeeee}
.admin-shop-itemform #addoption_fieldset {border:1px solid #959595;margin:0 -1px -1px;padding:20px 15px;background:#eeeeee}
.admin-shop-itemform .relation-sbox {padding:10px;background:#f5f5f5;border:1px solid #d5d5d5}
.admin-shop-itemform .relation-sbox-margin-top {margin-top:42px}
.admin-shop-itemform #relation ul {list-style:none;margin:0;padding:0}
.admin-shop-itemform #relation ul li {position:relative;border:1px solid #d5d5d5;border-bottom:0;height:50px;padding:5px 10px;clear:both}
.admin-shop-itemform #relation ul li:nth-child(odd) {background:#fbfbfb}
.admin-shop-itemform #relation ul li:last-child {border-bottom:1px solid #d5d5d5}
.admin-shop-itemform #relation ul li img {margin-right:10px;width:50px}
.admin-shop-itemform #relation ul li .list_item {display:block;text-overflow:ellipsis;white-space:nowrap;word-wrap:normal;overflow:hidden;margin-right:58px}
.admin-shop-itemform #relation ul li .list_item_btn {position:absolute;top:20px;right:10px;margin:0;float:inherit}
.admin-shop-itemform #relation ul li .add_item {width:48px;text-align:center;padding:0}
.admin-shop-itemform #reg_relation ul {list-style:none;margin:0;padding:0;margin-top:42px}
.admin-shop-itemform #reg_relation ul li {position:relative;border:1px solid #d5d5d5;border-bottom:0;height:50px;padding:5px 10px;clear:both}
.admin-shop-itemform #reg_relation ul li:nth-child(odd) {background:#fbfbfb}
.admin-shop-itemform #reg_relation ul li:last-child {border-bottom:1px solid #d5d5d5}
.admin-shop-itemform #reg_relation ul li img {margin-right:10px;width:50px}
.admin-shop-itemform #reg_relation ul li .list_item {display:block;text-overflow:ellipsis;white-space:nowrap;word-wrap:normal;overflow:hidden;margin-right:58px}
.admin-shop-itemform #reg_relation ul li .list_item_btn {position:absolute;top:20px;right:10px;margin:0;float:inherit}
.admin-shop-itemform #reg_relation ul li .del_item {width:48px;text-align:center;padding:0}
.admin-shop-itemform .event-box {padding:10px;background:#f5f5f5;border:1px solid #d5d5d5}
.admin-shop-itemform #event_list ul {list-style:none;padding:0;margin:0}
.admin-shop-itemform #event_list ul li {position:relative;margin-bottom:10px}
.admin-shop-itemform #event_list ul li:last-child {margin-bottom:0}
.admin-shop-itemform #event_list ul li .list_item {display:block;text-overflow:ellipsis;white-space:nowrap;word-wrap:normal;overflow:hidden;margin-right:58px}
.admin-shop-itemform #event_list ul li .list_item_btn {position:absolute;top:0;right:0}
.admin-shop-itemform #event_list ul li .add_event {width:48px;text-align:center;padding:0}
.admin-shop-itemform #reg_event_list ul {list-style:none;padding:0;margin:0}
.admin-shop-itemform #reg_event_list ul li {position:relative;margin-bottom:10px}
.admin-shop-itemform #reg_event_list ul li:last-child {margin-bottom:0}
.admin-shop-itemform #reg_event_list ul li .list_item {display:block;text-overflow:ellipsis;white-space:nowrap;word-wrap:normal;overflow:hidden;margin-right:58px}
.admin-shop-itemform #reg_event_list ul li .list_item_btn {position:absolute;top:0;right:0}
.admin-shop-itemform #reg_event_list ul li .del_event {width:48px;text-align:center;padding:0}
.admin-shop-itemform .sit_option {margin:0 0 20px;padding:0;border:1px solid #dadada;background:#fff}
.admin-shop-itemform .sit_option .sit-option-list {padding:10px;border-bottom:1px solid #dadada}
.admin-shop-itemform .sit_option .sit-option-item {float:left;width:50%;box-sizing:border-box}
.admin-shop-itemform .sit_option #sit_option_addfrm_btn {text-align:center;padding:10px 0;border-bottom:1px solid #dadada}
.admin-shop-itemform .sit_option #sit_option_addfrm_btn button {position:relative;top:inherit;right:inherit}
@media (max-width: 600px) {
    .admin-shop-itemform .sit_option .sit-option-item {float:inherit;width:100%;box-sizing:border-box}
    .admin-shop-itemform #scrollbar_container_1 {position:relative;overflow:hidden;display:block}
    .admin-shop-itemform #scrollbar_container_2 {position:relative;overflow:hidden;display:block}
    .admin-shop-itemform .scrollbar-container {position:relative;display:block}
    .admin-shop-itemform .relation-sbox-margin-top {margin-top:inherit}
    .admin-shop-itemform .table-form-thumb-img {float:inherit}
    .admin-shop-itemform .table-form-thumb-file {float:inherit;margin-top:10px;width:inherit}
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

<div class="admin-shop-itemform">
    <form name="fitemform" method="post" action="<?php echo $action_url1; ?>" onsubmit="return fitemformcheck(this);" enctype="multipart/form-data" autocomplete="off" class="eyoom-form">
    <input type="hidden" name="codedup" value="<?php echo $default['de_code_dup_use']; ?>">
    <input type="hidden" name="w" value="<?php echo $w; ?>">
    <input type="hidden" name="sca" value="<?php echo $sca; ?>">
    <input type="hidden" name="sst" value="<?php echo $sst; ?>">
    <input type="hidden" name="sod"  value="<?php echo $sod; ?>">
    <input type="hidden" name="sfl" value="<?php echo $sfl; ?>">
    <input type="hidden" name="stx"  value="<?php echo $stx; ?>">
    <input type="hidden" name="sdt"  value="<?php echo $sdt; ?>">
    <input type="hidden" name="fr_date"  value="<?php echo $fr_date; ?>">
    <input type="hidden" name="to_date"  value="<?php echo $to_date; ?>">
    <input type="hidden" name="ituse"  value="<?php echo $ituse; ?>">
    <input type="hidden" name="itsoldout"  value="<?php echo $itsoldout; ?>">
    <input type="hidden" name="itype"  value="<?php echo $itype; ?>">
    <input type="hidden" name="cate_a" value="<?php echo $cate_a; ?>">
    <input type="hidden" name="cate_b" value="<?php echo $cate_b; ?>">
    <input type="hidden" name="cate_c" value="<?php echo $cate_c; ?>">
    <input type="hidden" name="page" value="<?php echo $page; ?>">
    <input type="hidden" name="wmode" value="<?php echo $wmode; ?>">
    <input type="hidden" name="uploading" id="uploading" value="">

    <div class="adm-headline">
        <h3>?????? <?php echo $html_title; ?></h3>
    </div>

    <div id="anc_sitfrm_cate">
        <div class="pg-anchor">
        <?php echo adm_pg_anchor('anc_sitfrm_cate'); ?>
        </div>
        <div class="adm-table-form-wrap margin-bottom-30">
            <header class="border-bottom-1px"><strong><i class="fas fa-caret-right"></i> ???????????? ??????</strong></header>
            <fieldset>
                <div class="cont-text-bg">
                    <p class="bg-info font-size-12 margin-bottom-0">
                        <i class="fas fa-info-circle"></i> ??????????????? ????????? ??????????????? ?????????. ????????? ????????? ?????? 3?????? ?????? ????????? ????????? ??? ????????????.
                    </p>
                </div>
            </fieldset>

            <div class="table-list-eb">
                <?php if (!G5_IS_MOBILE) { ?>
                <div class="table-responsive">
                <?php } ?>
                <table class="table">
                    <tbody>
                        <tr>
                            <th class="table-form-th">
                                <label for="ca_id" class="label">????????????</label>
                            </th>
                            <td>
                                <label class="select form-width-250px">
                                    <select name="ca_id" id="ca_id" onchange="categorychange(this.form)">
                                        <option value="">???????????????</option>
                                        <?php echo conv_selected_option($category_select, $it['ca_id']); ?>
                                    </select><i></i>
                                </label>
                                <?php if ($w == "") { ?>
                                <div class="note"><strong>Note:</strong> ??????????????? ????????????, ??????/??????/HTML??????/????????? E-mail ??????, ????????? ????????? ??????????????? ???????????????.</div>
                                <?php } ?>
                                <script>
                                    var ca_use = new Array();
                                    var ca_stock_qty = new Array();
                                    //var ca_explan_html = new Array();
                                    var ca_sell_email = new Array();
                                    var ca_opt1_subject = new Array();
                                    var ca_opt2_subject = new Array();
                                    var ca_opt3_subject = new Array();
                                    var ca_opt4_subject = new Array();
                                    var ca_opt5_subject = new Array();
                                    var ca_opt6_subject = new Array();
                                    <?php echo "\n$script"; ?>
                                </script>
                            </td>
                        </tr>
                        <?php for ($i=2; $i<=3; $i++) { ?>
                        <tr>
                            <th class="table-form-th">
                                <label for="ca_id<?php echo $i; ?>"><?php echo $i; ?>??? ??????</label>
                            </th>
                            <td>
                                <label class="select form-width-250px">
                                    <select name="ca_id<?php echo $i; ?>" id="ca_id<?php echo $i; ?>">
                                        <option value="">???????????????</option>
                                        <?php echo conv_selected_option($category_select, $it['ca_id'.$i]); ?>
                                    </select><i></i>
                                </label>
                                <div class="note"><strong>Note:</strong> <?php echo $i; ?>??? ????????? ?????? ????????? ?????? ?????? ????????? ???????????? ?????? ?????? ????????? ?????? ????????? ????????? ????????? ????????? ??????????????? ?????????.</div>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <?php if (!G5_IS_MOBILE) { ?>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>

    <?php echo $frm_submit; // ?????? ?>

    <div id="anc_sitfrm_skin">
        <div class="pg-anchor">
        <?php echo adm_pg_anchor('anc_sitfrm_skin'); ?>
        </div>
        <div class="adm-table-form-wrap margin-bottom-30">
            <header class="border-bottom-1px"><strong><i class="fas fa-caret-right"></i> ????????????</strong></header>
            <fieldset>
                <div class="cont-text-bg">
                    <p class="bg-info font-size-12 margin-bottom-0">
                        <i class="fas fa-info-circle"></i> ???????????????????????? ????????? ????????? ???????????????.
                    </p>
                </div>
            </fieldset>

            <div class="table-list-eb">
                <?php if (!G5_IS_MOBILE) { ?>
                <div class="table-responsive">
                <?php } ?>
                <table class="table">
                    <tbody>
                        <tr>
                            <th class="table-form-th">
                                <label for="it_skin" class="label">PC??? ??????</label>
                            </th>
                            <td>
                                <label class="select form-width-250px">
                                    <?php echo get_skin_select('shop', 'it_skin', 'it_skin', $it['it_skin']); ?><i></i>
                                </label>
                            </td>
                            <td class="table-chk-td">
                                <div class="inline-group">
                                    <label for="chk_ca_it_skin" class="checkbox"><input type="checkbox" name="chk_ca_it_skin" value="1" id="chk_ca_it_skin"><i></i>????????????</label>
                                    <label for="chk_all_it_skin" class="checkbox"><input type="checkbox" name="chk_all_it_skin" value="1" id="chk_all_it_skin"><i></i>????????????</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th">
                                <label for="it_mobile_skin" class="label">???????????? ??????</label>
                            </th>
                            <td>
                                <label class="select form-width-250px">
                                    <?php echo get_mobile_skin_select('shop', 'it_mobile_skin', 'it_mobile_skin', $it['it_mobile_skin']); ?><i></i>
                                </label>
                            </td>
                            <td class="table-chk-td">
                                <div class="inline-group">
                                    <label for="chk_ca_it_mobile_skin" class="checkbox"><input type="checkbox" name="chk_ca_it_mobile_skin" value="1" id="chk_ca_it_mobile_skin"><i></i>????????????</label>
                                    <label for="chk_all_it_mobile_skin" class="checkbox"><input type="checkbox" name="chk_all_it_mobile_skin" value="1" id="chk_all_it_mobile_skin"><i></i>????????????</label>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <?php if (!G5_IS_MOBILE) { ?>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>

    <?php echo $frm_submit; // ?????? ?>

    <div id="anc_sitfrm_ini">
        <div class="pg-anchor">
        <?php echo adm_pg_anchor('anc_sitfrm_ini'); ?>
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
                                <label for="it_skin" class="label">????????????</label>
                            </th>
                            <td colspan="2">
                                <?php if ($w == '') { ?>
                                <label for="" class="input form-width-250px">
                                    <input type="text" name="it_id" value="<?php echo time(); ?>" id="it_id" required  maxlength="20">
                                </label>
                                <div class="note"><strong>Note:</strong> ????????? ????????? 10?????? ????????? ?????????????????????. <b>?????? ??????????????? ????????? ?????? ????????????.</b><br>??????????????? ?????????, ??????, - ??? ?????? ???????????????.</div>
                                <?php } else { ?>
                                <input type="hidden" name="it_id" value="<?php echo $it['it_id']; ?>">
                                <label class="input">
                                    <a href="<?php echo shop_item_url($it_id); ?>" target="_blank" class="btn-e btn-e-xs btn-e-dark">????????????</a>
                                    <a href="<?php echo G5_ADMIN_URL; ?>/?dir=shop&pid=itemuselist&sfl=a.it_id&stx=<?php echo $it['it_id']; ?>" class="btn-e btn-e-xs btn-e-dark">????????????</a>
                                    <a href="<?php echo G5_ADMIN_URL; ?>/?dir=shop&pid=itemqalist&sfl=a.it_id&stx=<?php echo $it['it_id']; ?>" class="btn-e btn-e-xs btn-e-dark">????????????</a>
                                </label>
                                <?php } ?>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th">
                                <label for="it_name" class="label">?????????</label>
                            </th>
                            <td colspan="2">
                                <label class="input">
                                    <input type="text" name="it_name" value="<?php echo get_text(cut_str($it['it_name'], 250, "")); ?>" id="it_name" required>
                                </label>
                                <div class="note"><strong>Note:</strong> HTML ????????? ???????????????.</div>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th">
                                <label for="it_basic" class="label">????????????</label>
                            </th>
                            <td>
                                <label class="input">
                                    <input type="text" name="it_basic" value="<?php echo get_text(html_purifier($it['it_basic'])); ?>" id="it_basic">
                                </label>
                                <div class="note"><strong>Note:</strong> ????????? ????????? ????????? ?????? ???????????? ????????? ????????? ????????? ???????????????. HTML ????????? ???????????????.</div>
                            </td>
                            <td class="table-chk-td">
                                <div class="inline-group">
                                    <label for="chk_ca_it_basic" class="checkbox"><input type="checkbox" name="chk_ca_it_basic" value="1" id="chk_ca_it_basic"><i></i>????????????</label>
                                    <label for="chk_all_it_basic" class="checkbox"><input type="checkbox" name="chk_all_it_basic" value="1" id="chk_all_it_basic"><i></i>????????????</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th">
                                <label for="it_basic" class="label">????????????</label>
                            </th>
                            <td>
                                <label class="input form-width-250px">
                                    <input type="text" name="it_order" value="<?php echo $it['it_order']; ?>" id="it_order">
                                </label>
                                <div class="note"><strong>Note:</strong> ????????? ?????? ?????? ????????? ???????????????. ?????? ????????? ???????????? ?????? ?????? ????????? -2147483648 ?????? 2147483647 ???????????????.<br><b>???????????? ????????? ???????????? ???????????????.</b></div>
                            </td>
                            <td class="table-chk-td">
                                <div class="inline-group">
                                    <label for="chk_ca_it_order" class="checkbox"><input type="checkbox" name="chk_ca_it_order" value="1" id="chk_ca_it_order"><i></i>????????????</label>
                                    <label for="chk_all_it_order" class="checkbox"><input type="checkbox" name="chk_all_it_order" value="1" id="chk_all_it_order"><i></i>????????????</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th">
                                <label class="label">????????????</label>
                            </th>
                            <td>
                                <div class="inline-group">
                                    <label class="checkbox">
                                        <input type="checkbox" name="it_type1" id="it_type1" value="1" <?php echo ($it['it_type1'] ? "checked" : ""); ?>><i></i> ??????
                                        <span class="label label-dark color-white"><span class="font-size-11">??????</span></span>
                                    </label>
                                    <label class="checkbox">
                                        <input type="checkbox" name="it_type2" id="it_type2" value="1" <?php echo ($it['it_type2'] ? "checked" : ""); ?> ><i></i> ??????
                                        <span class="label label-yellow color-white"><span class="font-size-11">??????</span></span>
                                    </label>
                                    <label class="checkbox">
                                        <input type="checkbox" name="it_type3" id="it_type3" value="1" <?php echo ($it['it_type3'] ? "checked" : ""); ?> ><i></i> ?????????
                                        <span class="label label-red color-white"><span class="font-size-11">??????</span></span>
                                    </label>
                                    <label class="checkbox">
                                        <input type="checkbox" name="it_type4" id="it_type4" value="1" <?php echo ($it['it_type4'] ? "checked" : ""); ?>><i></i> ??????
                                        <span class="label label-green color-white"><span class="font-size-11">?????????</span></span>
                                    </label>
                                    <label class="checkbox">
                                        <input type="checkbox" name="it_type5" id="it_type5" value="1" <?php echo ($it['it_type5'] ? "checked" : ""); ?>><i></i> ??????
                                        <span class="label label-purple color-white"><span class="font-size-11">??????</span></span>
                                    </label>
                                </div>
                                <div class="note"><strong>Note:</strong> ??????????????? ???????????? ???????????? ???????????????.<br>????????? ?????????????????? ????????????????????? ???????????? ???????????? ????????? ????????? ?????? ?????? ???????????????.</div>
                            </td>
                            <td class="table-chk-td">
                                <div class="inline-group">
                                    <label for="chk_ca_it_type" class="checkbox"><input type="checkbox" name="chk_ca_it_type" value="1" id="chk_ca_it_type"><i></i>????????????</label>
                                    <label for="chk_all_it_type" class="checkbox"><input type="checkbox" name="chk_all_it_type" value="1" id="chk_all_it_type"><i></i>????????????</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th">
                                <label for="it_maker" class="label">?????????</label>
                            </th>
                            <td>
                                <label class="input form-width-250px">
                                    <input type="text" name="it_maker" value="<?php echo get_text($it['it_maker']); ?>" id="it_maker">
                                </label>
                                <div class="note"><strong>Note:</strong> ???????????? ????????? ???????????????????????? ???????????? ????????????.</div>
                            </td>
                            <td class="table-chk-td">
                                <div class="inline-group">
                                    <label for="chk_ca_it_maker" class="checkbox"><input type="checkbox" name="chk_ca_it_maker" value="1" id="chk_ca_it_maker"><i></i>????????????</label>
                                    <label for="chk_all_it_maker" class="checkbox"><input type="checkbox" name="chk_all_it_maker" value="1" id="chk_all_it_maker"><i></i>????????????</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th">
                                <label for="it_origin" class="label">?????????</label>
                            </th>
                            <td>
                                <label class="input form-width-250px">
                                    <input type="text" name="it_origin" value="<?php echo get_text($it['it_origin']); ?>" id="it_origin">
                                </label>
                                <div class="note"><strong>Note:</strong> ???????????? ????????? ???????????????????????? ???????????? ????????????.</div>
                            </td>
                            <td class="table-chk-td">
                                <div class="inline-group">
                                    <label for="chk_ca_it_origin" class="checkbox"><input type="checkbox" name="chk_ca_it_origin" value="1" id="chk_ca_it_origin"><i></i>????????????</label>
                                    <label for="chk_all_it_origin" class="checkbox"><input type="checkbox" name="chk_all_it_origin" value="1" id="chk_all_it_origin"><i></i>????????????</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th">
                                <label for="it_brand" class="label">?????????</label>
                            </th>
                            <td>
                                <div class="inline-group inline-mix">
                                    <label class="input form-width-250px display-inline-block margin-right-5">
                                        <input type="text" name="it_brand" value="<?php echo get_text($it['it_brand']); ?>" id="it_brand">
                                    </label>
                                    <input type="hidden" name="it_brand_prev" value="<?php echo get_text($it['it_brand']); ?>">
                                    <?php if ($br_cnt > 0) { ?>
                                    <label for="it_brcode" class="select form-width-250px display-inline-block">
                                        <select name="it_brcode" id="it_brcode" onchange="set_brand(this);">
                                            <option value="">:: ????????? ?????? ::</option>
                                            <?php foreach ($brlist as $k => $li) { ?>
                                            <option value="<?php echo $li['br_code']; ?>" <?php echo $li['br_code'] == $it['it_brcode'] ? 'selected': ''; ?>><?php echo $li['br_name']; ?></option>
                                            <?php } ?>
                                        </select><i></i>
                                    </label>
                                    <script>
                                    function set_brand(sel) {
                                        var brand = sel.options[sel.selectedIndex].text;
                                        var brcode = sel.options[sel.selectedIndex].value;
                                        if (brcode) {
                                            $("#it_brand").val(brand);
                                        } else {
                                            $("#it_brand").val('');
                                        }
                                    }
                                    </script>
                                    <?php } ?>
                                </div>
                                <div class="note"><strong>Note:</strong> ????????? ???????????? ????????? ??????????????? ????????? ?????????. ???????????? ????????? ???????????????????????? ???????????? ????????????.</div>
                            </td>
                            <td class="table-chk-td">
                                <div class="inline-group">
                                    <label for="chk_ca_it_brand" class="checkbox"><input type="checkbox" name="chk_ca_it_brand" value="1" id="chk_ca_it_brand"><i></i>????????????</label>
                                    <label for="chk_all_it_brand" class="checkbox"><input type="checkbox" name="chk_all_it_brand" value="1" id="chk_all_it_brand"><i></i>????????????</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th">
                                <label for="it_model" class="label">??????</label>
                            </th>
                            <td>
                                <label class="input form-width-250px">
                                    <input type="text" name="it_model" value="<?php echo get_text($it['it_model']); ?>" id="it_model">
                                </label>
                                <div class="note"><strong>Note:</strong> ???????????? ????????? ???????????????????????? ???????????? ????????????.</div>
                            </td>
                            <td class="table-chk-td">
                                <div class="inline-group">
                                    <label for="chk_ca_it_model" class="checkbox"><input type="checkbox" name="chk_ca_it_model" value="1" id="chk_ca_it_model"><i></i>????????????</label>
                                    <label for="chk_all_it_model" class="checkbox"><input type="checkbox" name="chk_all_it_model" value="1" id="chk_all_it_model"><i></i>????????????</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th">
                                <label for="it_tel_inq" class="label">????????????</label>
                            </th>
                            <td>
                                <label class="checkbox" style="width:80px;">
                                    <input type="checkbox" name="it_tel_inq" value="1" id="it_tel_inq" <?php echo ($it['it_tel_inq']) ? "checked" : ""; ?>><i></i> ???
                                </label>
                                <div class="note"><strong>Note:</strong> ?????? ?????? ?????? ??????????????? ???????????????.</div>
                            </td>
                            <td class="table-chk-td">
                                <div class="inline-group">
                                    <label for="chk_ca_it_tel_inq" class="checkbox"><input type="checkbox" name="chk_ca_it_tel_inq" value="1" id="chk_ca_it_tel_inq"><i></i>????????????</label>
                                    <label for="chk_all_it_tel_inq" class="checkbox"><input type="checkbox" name="chk_all_it_tel_inq" value="1" id="chk_all_it_tel_inq"><i></i>????????????</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th">
                                <label for="it_use" class="label">????????????</label>
                            </th>
                            <td>
                                <label class="checkbox" style="width:80px;">
                                    <input type="checkbox" name="it_use" value="1" id="it_use" <?php echo ($it['it_use']) ? "checked" : ""; ?>><i></i> ???
                                </label>
                                <div class="note"><strong>Note:</strong> ?????? ????????? ??????????????? ????????? ?????? ????????? ????????? ????????? ????????? ???????????? ?????????, ????????? ?????? ????????????.</div>
                            </td>
                            <td class="table-chk-td">
                                <div class="inline-group">
                                    <label for="chk_ca_it_use" class="checkbox"><input type="checkbox" name="chk_ca_it_use" value="1" id="chk_ca_it_use"><i></i>????????????</label>
                                    <label for="chk_all_it_use" class="checkbox"><input type="checkbox" name="chk_all_it_use" value="1" id="chk_all_it_use"><i></i>????????????</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th">
                                <label for="it_nocoupon" class="label">??????????????????</label>
                            </th>
                            <td>
                                <label class="checkbox" style="width:80px;">
                                    <input type="checkbox" name="it_nocoupon" value="1" id="it_nocoupon" <?php echo ($it['it_nocoupon']) ? "checked" : ""; ?>><i></i> ???
                                </label>
                                <div class="note"><strong>Note:</strong> ????????? ??????????????? ?????? ?????? ??? ?????? ?????? ????????? ???????????? ????????????.</div>
                            </td>
                            <td class="table-chk-td">
                                <div class="inline-group">
                                    <label for="chk_ca_it_nocoupon" class="checkbox"><input type="checkbox" name="chk_ca_it_nocoupon" value="1" id="chk_ca_it_nocoupon"><i></i>????????????</label>
                                    <label for="chk_all_it_nocoupon" class="checkbox"><input type="checkbox" name="chk_all_it_nocoupon" value="1" id="chk_all_it_nocoupon"><i></i>????????????</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th">
                                <label for="ec_mall_pid" class="label">??????????????? ??????ID</label>
                            </th>
                            <td colspan="2">
                                <label class="input form-width-250px">
                                    <input type="text" name="ec_mall_pid" value="<?php echo get_text($it['ec_mall_pid']); ?>" id="ec_mall_pid">
                                </label>
                                <div class="note"><strong>Note:</strong> ?????????????????? ????????? ?????? ??????????????? ??????ID??? ??????????????? ?????????????????? ???????????????.<br>?????? ???????????? ?????? ??????????????? ??????ID ?????? ????????? ??????ID??? ???????????? ?????? ????????? ????????????.<br>??????????????? ?????????????????? ??? ????????? ?????? ????????? ???????????? ???????????? ?????? ?????? ??????????????? ?????????.</div>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th">
                                <label for="it_explan" class="label">????????????</label>
                            </th>
                            <td colspan="2">
                                <div class="textarea">
                                    <?php echo editor_html('it_explan', get_text(html_purifier($it['it_explan']), 0)); ?>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th">
                                <label for="it_mobile_explan" class="label">????????? ????????????</label>
                            </th>
                            <td colspan="2">
                                <div class="textarea">
                                    <?php echo editor_html('it_mobile_explan', get_text(html_purifier($it['it_mobile_explan']), 0)); ?>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th">
                                <label for="it_sell_email" class="label">????????? e-mail</label>
                            </th>
                            <td>
                                <label class="input form-width-250px">
                                    <input type="text" name="it_sell_email" value="<?php echo get_sanitize_input($it['it_sell_email']); ?>" id="it_sell_email">
                                </label>
                                <div class="note"><strong>Note:</strong> ???????????? ?????? ???????????? ?????? ?????? ?????? ???????????? e-mail??? ????????????, ?????? ?????? ????????? ???????????? ?????? ?????????????????? ???????????? ???????????????.</div>
                            </td>
                            <td class="table-chk-td">
                                <div class="inline-group">
                                    <label for="chk_ca_it_sell_email" class="checkbox"><input type="checkbox" name="chk_ca_it_sell_email" value="1" id="chk_ca_it_sell_email"><i></i>????????????</label>
                                    <label for="chk_all_it_sell_email" class="checkbox"><input type="checkbox" name="chk_all_it_sell_email" value="1" id="chk_all_it_sell_email"><i></i>????????????</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th">
                                <label for="it_shop_memo" class="label">????????????</label>
                            </th>
                            <td>
                                <label class="textarea">
                                    <textarea name="it_shop_memo" id="it_shop_memo"><?php echo html_purifier($it['it_shop_memo']); ?></textarea>
                                </label>
                            </td>
                            <td class="table-chk-td">
                                <div class="inline-group">
                                    <label for="chk_ca_it_shop_memo" class="checkbox"><input type="checkbox" name="chk_ca_it_shop_memo" value="1" id="chk_ca_it_shop_memo"><i></i>????????????</label>
                                    <label for="chk_all_it_shop_memo" class="checkbox"><input type="checkbox" name="chk_all_it_shop_memo" value="1" id="chk_all_it_shop_memo"><i></i>????????????</label>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <?php if (!G5_IS_MOBILE) { ?>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>

    <?php echo $frm_submit; // ?????? ?>

    <div id="anc_sitfrm_compact">
        <div class="pg-anchor">
        <?php echo adm_pg_anchor('anc_sitfrm_compact'); ?>
        </div>
        <div class="adm-table-form-wrap margin-bottom-30">
            <header class="border-bottom-1px"><strong><i class="fas fa-caret-right"></i> ??????????????????</strong></header>
            <fieldset>
                <div class="cont-text-bg">
                    <p class="bg-info font-size-12 margin-bottom-0">
                        <i class="fas fa-info-circle"></i> <strong>??????????????? ???????????? ?????? ?????? ??????????????? ?????? ??????</strong>??? ?????? ??? 35??? ???????????? ?????? ?????? ?????? ?????? ????????? ?????? ????????? ??? ????????????.
                    </p>
                </div>
            </fieldset>

            <div class="table-list-eb">
                <?php if (!G5_IS_MOBILE) { ?>
                <div class="table-responsive">
                <?php } ?>
                <table class="table">
                    <tbody>
                        <tr>
                            <th class="table-form-th">
                                <label for="it_info_gubun" class="label">????????? ??????</label>
                            </th>
                            <td>
                                <label class="select form-width-250px">
                                    <select id="it_info_gubun" name="it_info_gubun">
                                        <option value="">???????????? ???????????????.</option>
                                        <?php
                                        if(!$it['it_info_gubun']) $it['it_info_gubun'] = 'wear';
                                        foreach($item_info as $key=>$value) {
                                            $opt_value = $key;
                                            $opt_text  = $value['title'];
                                        ?>
                                        <option value="<?php echo $opt_value; ?>" <?php echo get_selected($opt_value, $it['it_info_gubun']); ?>><?php echo $opt_text; ?></option>
                                        <?php } ?>
                                    </select>
                                    <i></i>
                                </label>
                                <div class="note"><strong>Note:</strong> ???????????? ???????????? ???????????? ????????? ???????????????.</div>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th">
                                <label for="it_info_use" class="label">?????????????????? ??????</label>
                            </th>
                            <td>
                                <label class="checkbox">
                                    <input type="checkbox" name="it_info_use" id="it_info_use" value="1" <?php echo ($it['it_info_use']) ? "checked" : ""; ?>><i></i> ???
                                </label>
                                <div class="note"><strong>Note:</strong> ????????? ??????????????? ???????????? ???????????? ???????????? ????????????.</div>
                            </td>
                        </tr>

                    </tbody>
                </table>
                <?php if (!G5_IS_MOBILE) { ?>
                </div>
                <?php } ?>
            </div>

            <header><strong><i class="fas fa-caret-right"></i> ?????????????????? ????????????</strong></header>

            <div id="sit_compact_fields" class="table-list-eb">
                <?php include_once(EYOOM_ADMIN_CORE_PATH.'/shop/iteminfo.php'); ?>
            </div>
        </div>
        <script>
        $(function(){
            $(document).on("change", "#it_info_gubun", function() {
                var gubun = $(this).val();
                $.post(
                    "<?php echo EYOOM_ADMIN_CORE_URL; ?>//shop/iteminfo.php",
                    { it_id: "<?php echo $it['it_id']; ?>", gubun: gubun },
                    function(data) {
                        $("#sit_compact_fields").empty().html(data);
                    }
                );
            });
        });
        </script>
    </div>

    <?php echo $frm_submit; // ?????? ?>

    <div id="anc_sitfrm_cost">
        <div class="pg-anchor">
        <?php echo adm_pg_anchor('anc_sitfrm_cost'); ?>
        </div>
        <div class="adm-table-form-wrap margin-bottom-30">
            <header><strong><i class="fas fa-caret-right"></i> ?????? ??? ??????</strong></header>
            <div class="table-list-eb">
                <?php if (!G5_IS_MOBILE) { ?>
                <div class="table-responsive">
                <?php } ?>
                <table class="table">
                    <tbody>
                        <tr>
                            <th class="table-form-th">
                                <label for="it_price" class="label">????????????</label>
                            </th>
                            <td>
                                <label class="input form-width-250px">
                                    <input type="text" name="it_price" value="<?php echo $it['it_price']; ?>" id="it_price">
                                </label>
                            </td>
                            <td class="table-chk-td">
                                <div class="inline-group">
                                    <label for="chk_ca_it_price" class="checkbox"><input type="checkbox" name="chk_ca_it_price" value="1" id="chk_ca_it_price"><i></i>????????????</label>
                                    <label for="chk_all_it_price" class="checkbox"><input type="checkbox" name="chk_all_it_price" value="1" id="chk_all_it_price"><i></i>????????????</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th">
                                <label for="it_cust_price" class="label">????????????</label>
                            </th>
                            <td>
                                <label class="input form-width-250px">
                                    <input type="text" name="it_cust_price" value="<?php echo $it['it_cust_price']; ?>" id="it_cust_price">
                                </label>
                                <div class="note"><strong>Note:</strong> ???????????? ????????? ???????????????????????? ???????????? ????????????.</div>
                            </td>
                            <td class="table-chk-td">
                                <div class="inline-group">
                                    <label for="chk_ca_it_cust_price" class="checkbox"><input type="checkbox" name="chk_ca_it_cust_price" value="1" id="chk_ca_it_cust_price"><i></i>????????????</label>
                                    <label for="chk_all_it_cust_price" class="checkbox"><input type="checkbox" name="chk_all_it_cust_price" value="1" id="chk_all_it_cust_price"><i></i>????????????</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th">
                                <label for="it_point_type" class="label">????????? ??????</label>
                            </th>
                            <td>
                                <label class="select form-width-250px">
                                    <select name="it_point_type" id="it_point_type">
                                        <option value="0"<?php echo get_selected('0', $it['it_point_type']); ?>>????????????</option>
                                        <option value="1"<?php echo get_selected('1', $it['it_point_type']); ?>>??????????????? ????????????</option>
                                        <option value="2"<?php echo get_selected('2', $it['it_point_type']); ?>>??????????????? ????????????</option>
                                    </select><i></i>
                                </label>
                                <div class="note"><strong>Note:</strong> ????????? ????????? ????????? ??? ????????????. ????????? ???????????? ?????? ?????? ??????????????? %????????? ???????????? ???????????????.</div>
                                <script>
                                $(function() {
                                    $("#it_point_type").change(function() {
                                        if(parseInt($(this).val()) > 0)
                                            $("#it_point_unit").text("%");
                                        else
                                            $("#it_point_unit").text("???");
                                    });
                                });
                                </script>
                            </td>
                            <td class="table-chk-td">
                                <div class="inline-group">
                                    <label for="chk_ca_it_point_type" class="checkbox"><input type="checkbox" name="chk_ca_it_point_type" value="1" id="chk_ca_it_point_type"><i></i>????????????</label>
                                    <label for="chk_all_it_point_type" class="checkbox"><input type="checkbox" name="chk_all_it_point_type" value="1" id="chk_all_it_point_type"><i></i>????????????</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th">
                                <label for="it_point" class="label">?????????</label>
                            </th>
                            <td>
                                <label class="input form-width-250px">
                                    <i id="it_point_unit" class="icon-append"><?php if($it['it_point_type']) echo '%'; else echo '???'; ?></i>
                                    <input type="text" name="it_point" value="<?php echo $it['it_point']; ?>" id="it_point">
                                </label>
                                <div class="note"><strong>Note:</strong> ??????????????? ?????????????????? ????????? ???????????? ????????? ??? ???????????? ???????????? ??????????????????.\n???, ?????????????????? '?????????'??? ????????? ?????? ????????????, ??????????????? ???????????? ???????????? ???????????? ????????????.</div>
                            </td>
                            <td class="table-chk-td">
                                <div class="inline-group">
                                    <label for="chk_ca_it_point" class="checkbox"><input type="checkbox" name="chk_ca_it_point" value="1" id="chk_ca_it_point"><i></i>????????????</label>
                                    <label for="chk_all_it_point" class="checkbox"><input type="checkbox" name="chk_all_it_point" value="1" id="chk_all_it_point"><i></i>????????????</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th">
                                <label for="it_supply_point" class="label">?????????????????? ?????????</label>
                            </th>
                            <td>
                                <label class="input form-width-250px">
                                    <i class="icon-append">???</i>
                                    <input type="text" name="it_supply_point" value="<?php echo $it['it_supply_point']; ?>" id="it_supply_point">
                                </label>
                                <div class="note"><strong>Note:</strong> ????????? ?????????????????? ????????? ??????????????? ???????????? ??????????????????. 0?????? ??????????????? ?????????????????? ???????????? ????????????.<br>??????????????? ?????????????????? ????????? ???????????? ????????? ??? ???????????? ???????????? ??????????????????.<br>???, ?????????????????? '?????????'??? ????????? ?????? ????????????, ??????????????? ???????????? ???????????? ???????????? ????????????.</div>
                            </td>
                            <td class="table-chk-td">
                                <div class="inline-group">
                                    <label for="chk_ca_it_supply_point" class="checkbox"><input type="checkbox" name="chk_ca_it_supply_point" value="1" id="chk_ca_it_supply_point"><i></i>????????????</label>
                                    <label for="chk_all_it_supply_point" class="checkbox"><input type="checkbox" name="chk_all_it_supply_point" value="1" id="chk_all_it_supply_point"><i></i>????????????</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th">
                                <label for="it_soldout" class="label">????????????</label>
                            </th>
                            <td>
                                <label class="checkbox" style="width:80px;">
                                    <input type="checkbox" name="it_soldout" value="1" id="it_soldout" <?php echo ($it['it_soldout']) ? "checked" : ""; ?>><i></i> ???
                                </label>
                                <div class="note"><strong>Note:</strong> ?????? ????????? ??????????????? ????????? ?????? ????????? ????????? ????????? ?????????????????? ???????????????.</div>
                            </td>
                            <td class="table-chk-td">
                                <div class="inline-group">
                                    <label for="chk_ca_it_soldout" class="checkbox"><input type="checkbox" name="chk_ca_it_soldout" value="1" id="chk_ca_it_soldout"><i></i>????????????</label>
                                    <label for="chk_all_it_soldout" class="checkbox"><input type="checkbox" name="chk_all_it_soldout" value="1" id="chk_all_it_soldout"><i></i>????????????</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th">
                                <label for="it_stock_sms" class="label">?????????SMS ??????</label>
                            </th>
                            <td colspan="2">
                                <label class="checkbox" style="width:80px;">
                                    <input type="checkbox" name="it_stock_sms" value="1" id="it_stock_sms" <?php echo ($it['it_stock_sms']) ? "checked" : ""; ?>><i></i> ???
                                </label>
                                <div class="note"><strong>Note:</strong> ????????? ????????? ????????? ????????? ????????? ???????????????????????? ????????? ?????????SMS ????????? ????????? ??? ?????? ?????????.</div>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th">
                                <label for="it_stock_qty" class="label">????????????</label>
                            </th>
                            <td>
                                <label class="input form-width-250px">
                                    <i class="icon-append">???</i>
                                    <input type="text" name="it_stock_qty" value="<?php echo $it['it_stock_qty']; ?>" id="it_stock_qty">
                                </label>
                                <div class="note"><strong>Note:</strong> <b>?????????????????? ????????? ?????? ????????? ?????? ???????????? ????????? ???????????????.</b> ????????? ??????/???????????? ??????, ??????????????? ???????????????.<br>??????????????? 0?????? ??????????????? ?????????????????? ???????????????.</div>
                            </td>
                            <td class="table-chk-td">
                                <div class="inline-group">
                                    <label for="chk_ca_it_stock_qty" class="checkbox"><input type="checkbox" name="chk_ca_it_stock_qty" value="1" id="chk_ca_it_stock_qty"><i></i>????????????</label>
                                    <label for="chk_all_it_stock_qty" class="checkbox"><input type="checkbox" name="chk_all_it_stock_qty" value="1" id="chk_all_it_stock_qty"><i></i>????????????</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th">
                                <label for="it_noti_qty" class="label">?????? ????????????</label>
                            </th>
                            <td>
                                <label class="input form-width-250px">
                                    <i class="icon-append">???</i>
                                    <input type="text" name="it_noti_qty" value="<?php echo $it['it_noti_qty']; ?>" id="it_noti_qty">
                                </label>
                                <div class="note"><strong>Note:</strong> ????????? ????????? ?????????????????? ?????? ??? ??????????????? ??????????????? ??????????????? ???????????? ???????????? ???????????????.<br>????????? ?????? ????????? ?????? ????????? ??????????????? ???????????????.</div>
                            </td>
                            <td class="table-chk-td">
                                <div class="inline-group">
                                    <label for="chk_ca_it_noti_qty" class="checkbox"><input type="checkbox" name="chk_ca_it_noti_qty" value="1" id="chk_ca_it_noti_qty"><i></i>????????????</label>
                                    <label for="chk_all_it_noti_qty" class="checkbox"><input type="checkbox" name="chk_all_it_noti_qty" value="1" id="chk_all_it_noti_qty"><i></i>????????????</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th">
                                <label for="it_buy_min_qty" class="label">??????????????????</label>
                            </th>
                            <td>
                                <label class="input form-width-250px">
                                    <i class="icon-append">???</i>
                                    <input type="text" name="it_buy_min_qty" value="<?php echo $it['it_buy_min_qty']; ?>" id="it_buy_min_qty">
                                </label>
                                <div class="note"><strong>Note:</strong> ?????? ????????? ?????? ?????? ????????? ???????????????.</div>
                            </td>
                            <td class="table-chk-td">
                                <div class="inline-group">
                                    <label for="chk_ca_it_buy_min_qty" class="checkbox"><input type="checkbox" name="chk_ca_it_buy_min_qty" value="1" id="chk_ca_it_buy_min_qty"><i></i>????????????</label>
                                    <label for="chk_all_it_buy_min_qty" class="checkbox"><input type="checkbox" name="chk_all_it_buy_min_qty" value="1" id="chk_all_it_buy_min_qty"><i></i>????????????</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th">
                                <label for="it_buy_max_qty" class="label">??????????????????</label>
                            </th>
                            <td>
                                <label class="input form-width-250px">
                                    <i class="icon-append">???</i>
                                    <input type="text" name="it_buy_max_qty" value="<?php echo $it['it_buy_max_qty']; ?>" id="it_buy_max_qty">
                                </label>
                                <div class="note"><strong>Note:</strong> ?????? ????????? ?????? ?????? ????????? ???????????????.</div>
                            </td>
                            <td class="table-chk-td">
                                <div class="inline-group">
                                    <label for="chk_ca_it_buy_max_qty" class="checkbox"><input type="checkbox" name="chk_ca_it_buy_max_qty" value="1" id="chk_ca_it_buy_max_qty"><i></i>????????????</label>
                                    <label for="chk_all_it_buy_max_qty" class="checkbox"><input type="checkbox" name="chk_all_it_buy_max_qty" value="1" id="chk_all_it_buy_max_qty"><i></i>????????????</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th">
                                <label for="it_notax" class="label">???????????? ??????</label>
                            </th>
                            <td>
                                <label class="select form-width-250px">
                                    <select name="it_notax" id="it_notax">
                                        <option value="0"<?php echo get_selected('0', $it['it_notax']); ?>>??????</option>
                                        <option value="1"<?php echo get_selected('1', $it['it_notax']); ?>>?????????</option>
                                    </select><i></i>
                                </label>
                                <div class="note"><strong>Note:</strong> ????????? ????????????(??????, ?????????)??? ???????????????.</div>
                            </td>
                            <td class="table-chk-td">
                                <div class="inline-group">
                                    <label for="chk_ca_it_notax" class="checkbox"><input type="checkbox" name="chk_ca_it_notax" value="1" id="chk_ca_it_notax"><i></i>????????????</label>
                                    <label for="chk_all_it_notax" class="checkbox"><input type="checkbox" name="chk_all_it_notax" value="1" id="chk_all_it_notax"><i></i>????????????</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th">
                                <label class="label">??????????????????</label>
                            </th>
                            <td colspan="2">
                                <div class="note margin-bottom-10"><strong>Note:</strong> ??????????????? ??????(,) ??? ???????????? ???????????? ????????? ??? ????????????. ?????? ?????? ?????? [??????1 : ????????? , ??????1 ?????? : XXL,XL,L,M,S] , [??????2 : ?????? , ??????2 ?????? : ???,???,???]<br><strong>???????????? ??????????????? ?????????(', ")??? ????????? ??? ????????????.</strong></div>
                                <div class="sit_option">
                                    <div class="sit-option-list">
                                        <div class="sit-option-item">
                                            <div class="inline-group">
                                                <span class="form-width-70px"><label for="opt1_subject">??????1</label></span>
                                                <span>
                                                    <label class="input form-width-250px">
                                                        <input type="text" name="opt1_subject" value="<?php echo $opt_subject[0]; ?>" id="opt1_subject">
                                                    </label>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="sit-option-item">
                                            <div class="inline-group">
                                                <span class="form-width-70px"><label for="opt1">??????1 ??????</label></span>
                                                <span>
                                                    <label class="input form-width-250px">
                                                        <input type="text" name="opt1" value="" id="opt1">
                                                    </label>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="sit-option-list">
                                        <div class="sit-option-item">
                                            <div class="inline-group">
                                                <span class="form-width-70px"><label for="opt2_subject">??????2</label></span>
                                                <span>
                                                    <label class="input form-width-250px">
                                                        <input type="text" name="opt2_subject" value="<?php echo $opt_subject[1]; ?>" id="opt2_subject">
                                                    </label>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="sit-option-item">
                                            <div class="inline-group">
                                                <span class="form-width-70px"><label for="opt2">??????2 ??????</label></span>
                                                <span>
                                                    <label class="input form-width-250px">
                                                        <input type="text" name="opt2" value="" id="opt2">
                                                    </label>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="sit-option-list">
                                        <div class="sit-option-item">
                                            <div class="inline-group">
                                                <span class="form-width-70px"><label for="opt3_subject">??????3</label></span>
                                                <span>
                                                    <label class="input form-width-250px">
                                                        <input type="text" name="opt3_subject" value="<?php echo $opt_subject[2]; ?>" id="opt3_subject">
                                                    </label>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="sit-option-item">
                                            <div class="inline-group">
                                                <span class="form-width-70px"><label for="opt3">??????3 ??????</label></span>
                                                <span>
                                                    <label class="input form-width-250px">
                                                        <input type="text" name="opt3" value="" id="opt3">
                                                    </label>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="text-center margin-top-10 margin-bottom-10">
                                        <button type="button" id="option_table_create" class="btn-e btn-e-md btn-e-purple">??????????????????</button>
                                    </div>
                                </div>
                                <?php if (G5_IS_MOBILE) { ?>
                                <div class="font-size-11 color-grey margin-bottom-5"><i class="fas fa-info-circle"></i> Note! ??????????????? ?????? (<i class="fas fa-arrows-alt-h"></i>)</div>
                                <?php } ?>
                                <div id="scrollbar_container_1">
                                    <div class="scrollbar-container">
                                        <div id="sit_option_frm"><?php include_once(EYOOM_ADMIN_CORE_PATH.'/shop/itemoption.php'); ?></div>
                                    </div>
                                </div>

                                <script>
                                $(function() {
                                    <?php if($it['it_id'] && $po_run) { ?>
                                    //??????????????????
                                    var arr_opt1 = new Array();
                                    var arr_opt2 = new Array();
                                    var arr_opt3 = new Array();
                                    var opt1 = opt2 = opt3 = '';
                                    var opt_val;

                                    $(".opt-cell").each(function() {
                                        opt_val = $(this).text().split(" > ");
                                        opt1 = opt_val[0];
                                        opt2 = opt_val[1];
                                        opt3 = opt_val[2];

                                        if(opt1 && $.inArray(opt1, arr_opt1) == -1)
                                            arr_opt1.push(opt1);

                                        if(opt2 && $.inArray(opt2, arr_opt2) == -1)
                                            arr_opt2.push(opt2);

                                        if(opt3 && $.inArray(opt3, arr_opt3) == -1)
                                            arr_opt3.push(opt3);
                                    });


                                    $("input[name=opt1]").val(arr_opt1.join());
                                    $("input[name=opt2]").val(arr_opt2.join());
                                    $("input[name=opt3]").val(arr_opt3.join());
                                    <?php } ?>
                                    // ??????????????????
                                    $("#option_table_create").click(function() {
                                        var it_id = $.trim($("input[name=it_id]").val());
                                        var opt1_subject = $.trim($("#opt1_subject").val());
                                        var opt2_subject = $.trim($("#opt2_subject").val());
                                        var opt3_subject = $.trim($("#opt3_subject").val());
                                        var opt1 = $.trim($("#opt1").val());
                                        var opt2 = $.trim($("#opt2").val());
                                        var opt3 = $.trim($("#opt3").val());
                                        var $option_table = $("#sit_option_frm");

                                        if(!opt1_subject || !opt1) {
                                            alert("???????????? ??????????????? ????????? ????????????.");
                                            return false;
                                        }

                                        $.post(
                                            "<?php echo EYOOM_ADMIN_CORE_URL; ?>/shop/itemoption.php",
                                            { it_id: it_id, w: "<?php echo $w; ?>", opt1_subject: opt1_subject, opt2_subject: opt2_subject, opt3_subject: opt3_subject, opt1: opt1, opt2: opt2, opt3: opt3 },
                                            function(data) {
                                                $option_table.empty().html(data);
                                            }
                                        );
                                    });

                                    // ????????????
                                    $(document).on("click", "input[name=opt_chk_all]", function() {
                                        if($(this).is(":checked")) {
                                            $("input[name='opt_chk[]']").attr("checked", true);
                                        } else {
                                            $("input[name='opt_chk[]']").attr("checked", false);
                                        }
                                    });

                                    // ????????????
                                    $(document).on("click", "#sel_option_delete", function() {
                                        var $el = $("input[name='opt_chk[]']:checked");
                                        if($el.size() < 1) {
                                            alert("??????????????? ????????? ?????? ?????? ????????? ????????????.");
                                            return false;
                                        }

                                        $el.closest("tr").remove();
                                    });

                                    // ????????????
                                    $(document).on("click", "#opt_value_apply", function() {
                                        if($(".opt_com_chk:checked").size() < 1) {
                                            alert("?????? ????????? ????????? ???????????? ????????? ????????????.");
                                            return false;
                                        }

                                        var opt_price = $.trim($("#opt_com_price").val());
                                        var opt_stock = $.trim($("#opt_com_stock").val());
                                        var opt_noti = $.trim($("#opt_com_noti").val());
                                        var opt_use = $("#opt_com_use").val();
                                        var $el = $("input[name='opt_chk[]']:checked");

                                        // ????????? ????????? ????????? ????????? ?????? ??????
                                        if($el.size() > 0) {
                                            var $tr;
                                            $el.each(function() {
                                                $tr = $(this).closest("tr");

                                                if($("#opt_com_price_chk").is(":checked"))
                                                    $tr.find("input[name='opt_price[]']").val(opt_price);

                                                if($("#opt_com_stock_chk").is(":checked"))
                                                    $tr.find("input[name='opt_stock_qty[]']").val(opt_stock);

                                                if($("#opt_com_noti_chk").is(":checked"))
                                                    $tr.find("input[name='opt_noti_qty[]']").val(opt_noti);

                                                if($("#opt_com_use_chk").is(":checked"))
                                                    $tr.find("select[name='opt_use[]']").val(opt_use);
                                            });
                                        } else {
                                            if($("#opt_com_price_chk").is(":checked"))
                                                $("input[name='opt_price[]']").val(opt_price);

                                            if($("#opt_com_stock_chk").is(":checked"))
                                                $("input[name='opt_stock_qty[]']").val(opt_stock);

                                            if($("#opt_com_noti_chk").is(":checked"))
                                                $("input[name='opt_noti_qty[]']").val(opt_noti);

                                            if($("#opt_com_use_chk").is(":checked"))
                                                $("select[name='opt_use[]']").val(opt_use);
                                        }
                                    });
                                });
                                </script>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th">
                                <label class="label">??????????????????</label>
                            </th>
                            <td colspan="2">
                                <div class="note margin-bottom-10"><strong>Note:</strong> ??????????????? ??????(,) ??? ???????????? ???????????? ????????? ??? ????????????. ??????????????? ?????? ?????? [??????1 : ?????????????????? , ??????1 ?????? : ??????????????????,?????????,?????????]<br><strong>???????????? ??????????????? ?????????(', ")??? ????????? ??? ????????????.</strong></strong></div>
                                <div id="sit_supply_frm" class="sit_option">
                                    <?php
                                    $i = 0;
                                    do {
                                        $seq = $i + 1;
                                    ?>
                                    <div class="sit-option-list">
                                        <div class="sit-option-item sit-opt-l">
                                            <div class="inline-group">
                                                <span class="form-width-70px"><label for="spl_subject_<?php echo $seq; ?>" class="label">??????<?php echo $seq; ?></label></span>
                                                <span>
                                                    <label class="input form-width-200px">
                                                        <input type="text" name="spl_subject[]" id="spl_subject_<?php echo $seq; ?>" value="<?php echo $spl_subject[$i]; ?>">
                                                    </label>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="sit-option-item  sit-opt-r">
                                            <div class="inline-group">
                                                <span class="form-width-70px"><label for="spl_item_<?php echo $seq; ?>" class="label"><b>??????<?php echo $seq; ?> ??????</b></label></span>
                                                <span>
                                                    <label class="input form-width-200px">
                                                        <input type="text" name="spl[]" id="spl_item_<?php echo $seq; ?>" value="">
                                                    </label>
                                                </span>
                                                <span>
                                                    <?php if ($i > 0) { ?>
                                                    <button type="button" id="del_supply_row" class="btn-e btn-e-dark">??????</button>
                                                    <?php } ?>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <?php
                                        $i++;
                                    } while($i < $spl_count);
                                    ?>
                                    <div id="sit_option_addfrm_btn"><button type="button" id="add_supply_row" class="btn-e btn-e-yellow">????????????</button></div>
                                    <div class="text-center margin-top-10 margin-bottom-10">
                                        <button type="button" id="supply_table_create" class="btn-e btn-e-md btn-e-purple">??????????????????</button>
                                    </div>
                                </div>
                                <?php if (G5_IS_MOBILE) { ?>
                                <div class="font-size-11 color-grey margin-bottom-5"><i class="fas fa-info-circle"></i> Note! ??????????????? ?????? (<i class="fas fa-arrows-alt-h"></i>)</div>
                                <?php } ?>
                                <div id="scrollbar_container_2">
                                    <div class="scrollbar-container">
                                        <div id="sit_option_addfrm"><?php include_once(EYOOM_ADMIN_CORE_PATH.'/shop/itemsupply.php'); ?></div>
                                    </div>
                                </div>

                                <script>
                                $(function() {
                                    <?php if($it['it_id'] && $ps_run) { ?>
                                    // ??????????????? ?????? ??????
                                    var arr_subj = new Array();
                                    var subj, spl;

                                    $("input[name='spl_subject[]']").each(function() {
                                        subj = $.trim($(this).val());
                                        if(subj && $.inArray(subj, arr_subj) == -1)
                                            arr_subj.push(subj);
                                    });

                                    for(i=0; i<arr_subj.length; i++) {
                                        var arr_spl = new Array();
                                        $(".spl-subject-cell").each(function(index) {
                                            subj = $(this).text();
                                            if(subj == arr_subj[i]) {
                                                spl = $(".spl-cell:eq("+index+")").text();
                                                arr_spl.push(spl);
                                            }
                                        });

                                        $("input[name='spl[]']:eq("+i+")").val(arr_spl.join());
                                    }
                                    <?php } ?>
                                    // ??????????????????
                                    $("#add_supply_row").click(function() {
                                        var $el = $("#sit_supply_frm .sit-option-list:last");

                                        var fld = "<div class=\"sit-option-list\">\n";
                                        fld += "<div class=\"sit-option-item sit-opt-l\">\n";
                                        fld += "<div class=\"inline-group\">\n";
                                        fld += "<span class=\"form-width-70px\"><label class=\"label\" for=\"\">??????</label></span>\n";
                                        fld += "<span>\n";
                                        fld += "<label class=\"input form-width-200px\">\n";
                                        fld += "<input type=\"text\" name=\"spl_subject[]\" value=\"\">\n";
                                        fld += "</label>\n";
                                        fld += "</span>\n";
                                        fld += "</div>\n";
                                        fld += "</div>\n";
                                        fld += "<div class=\"sit-option-item sit-opt-r\">\n";
                                        fld += "<div class=\"inline-group\">\n";
                                        fld += "<span class=\"form-width-70px\"><label class=\"label\" for=\"\"><b>?????? ??????</b></label></span>\n";
                                        fld += "<span>\n";
                                        fld += "<label class=\"input form-width-200px\">\n";
                                        fld += "<input type=\"text\" name=\"spl[]\" value=\"\">\n";
                                        fld += "</label>\n";
                                        fld += "</span>\n";
                                        fld += "<span>\n";
                                        fld += "<button type=\"button\" id=\"del_supply_row\" class=\"btn-e btn-e-dark\">??????</button>\n";
                                        fld += "</span>\n";
                                        fld += "</div>\n";
                                        fld += "</div>\n";
                                        fld += "<div class=\"clearfix\"></div>\n";
                                        fld += "</div>";

                                        $el.after(fld);

                                        supply_sequence();
                                    });

                                    // ??????????????????
                                    $(document).on("click", "#del_supply_row", function() {
                                        $(this).closest(".sit-option-list").remove();

                                        supply_sequence();
                                    });

                                    // ??????????????????
                                    $("#supply_table_create").click(function() {
                                        var it_id = $.trim($("input[name=it_id]").val());
                                        var subject = new Array();
                                        var supply = new Array();
                                        var subj, spl;
                                        var count = 0;
                                        var $el_subj = $("input[name='spl_subject[]']");
                                        var $el_spl = $("input[name='spl[]']");
                                        var $supply_table = $("#sit_option_addfrm");

                                        $el_subj.each(function(index) {
                                            subj = $.trim($(this).val());
                                            spl = $.trim($el_spl.eq(index).val());

                                            if(subj && spl) {
                                                subject.push(subj);
                                                supply.push(spl);
                                                count++;
                                            }
                                        });

                                        if(!count) {
                                            alert("?????????????????? ????????????????????? ????????? ????????????.");
                                            return false;
                                        }

                                        $.post(
                                            "<?php echo EYOOM_ADMIN_CORE_URL; ?>/shop/itemsupply.php",
                                            { it_id: it_id, w: "<?php echo $w; ?>", 'subject[]': subject, 'supply[]': supply },
                                            function(data) {
                                                $supply_table.empty().html(data);
                                            }
                                        );
                                    });

                                    // ????????????
                                    $(document).on("click", "input[name=spl_chk_all]", function() {
                                        if($(this).is(":checked")) {
                                            $("input[name='spl_chk[]']").attr("checked", true);
                                        } else {
                                            $("input[name='spl_chk[]']").attr("checked", false);
                                        }
                                    });

                                    // ????????????
                                    $(document).on("click", "#sel_supply_delete", function() {
                                        var $el = $("input[name='spl_chk[]']:checked");
                                        if($el.size() < 1) {
                                            alert("??????????????? ????????? ?????? ?????? ????????? ????????????.");
                                            return false;
                                        }

                                        $el.closest("tr").remove();
                                    });

                                    // ????????????
                                    $(document).on("click", "#spl_value_apply", function() {
                                        if($(".spl_com_chk:checked").size() < 1) {
                                            alert("?????? ????????? ????????? ???????????? ????????? ????????????.");
                                            return false;
                                        }

                                        var spl_price = $.trim($("#spl_com_price").val());
                                        var spl_stock = $.trim($("#spl_com_stock").val());
                                        var spl_noti = $.trim($("#spl_com_noti").val());
                                        var spl_use = $("#spl_com_use").val();
                                        var $el = $("input[name='spl_chk[]']:checked");

                                        // ????????? ????????? ????????? ????????? ?????? ??????
                                        if($el.size() > 0) {
                                            var $tr;
                                            $el.each(function() {
                                                $tr = $(this).closest("tr");

                                                if($("#spl_com_price_chk").is(":checked"))
                                                    $tr.find("input[name='spl_price[]']").val(spl_price);

                                                if($("#spl_com_stock_chk").is(":checked"))
                                                    $tr.find("input[name='spl_stock_qty[]']").val(spl_stock);

                                                if($("#spl_com_noti_chk").is(":checked"))
                                                    $tr.find("input[name='spl_noti_qty[]']").val(spl_noti);

                                                if($("#spl_com_use_chk").is(":checked"))
                                                    $tr.find("select[name='spl_use[]']").val(spl_use);
                                            });
                                        } else {
                                            if($("#spl_com_price_chk").is(":checked"))
                                                $("input[name='spl_price[]']").val(spl_price);

                                            if($("#spl_com_stock_chk").is(":checked"))
                                                $("input[name='spl_stock_qty[]']").val(spl_stock);

                                            if($("#spl_com_noti_chk").is(":checked"))
                                                $("input[name='spl_noti_qty[]']").val(spl_noti);

                                            if($("#spl_com_use_chk").is(":checked"))
                                                $("select[name='spl_use[]']").val(spl_use);
                                        }
                                    });
                                });

                                function supply_sequence()
                                {
                                    var $tr = $("#sit_supply_frm .sit-option-list");
                                    var seq;
                                    var th_label, td_label;

                                    $tr.each(function(index) {
                                        seq = index + 1;
                                        $(this).find(".sit-opt-l .label").attr("for", "spl_subject_"+seq).text("??????"+seq);
                                        $(this).find(".sit-opt-l input").attr("id", "spl_subject_"+seq);
                                        $(this).find(".sit-opt-r .label").attr("for", "spl_item_"+seq);
                                        $(this).find(".sit-opt-r .label b").text("??????"+seq+" ??????");
                                        $(this).find(".sit-opt-r input").attr("id", "spl_item_"+seq);
                                    });
                                }
                                </script>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <?php if (!G5_IS_MOBILE) { ?>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>

    <?php echo $frm_submit; // ?????? ?>

    <div id="anc_sitfrm_sendcost">
        <div class="pg-anchor">
        <?php echo adm_pg_anchor('anc_sitfrm_sendcost'); ?>
        </div>
        <div class="adm-table-form-wrap margin-bottom-30">
            <header class="border-bottom-1px"><strong><i class="fas fa-caret-right"></i> ?????????</strong></header>
            <fieldset>
                <div class="cont-text-bg">
                    <p class="bg-info font-size-12 margin-bottom-0">
                        <i class="fas fa-info-circle"></i> ??????????????? &gt; ??????????????? ???????????? <strong>???????????? ?????????????????? ??????</strong> ???????????????.
                    </p>
                </div>
            </fieldset>

            <div class="table-list-eb">
                <?php if (!G5_IS_MOBILE) { ?>
                <div class="table-responsive">
                <?php } ?>
                <table class="table">
                    <tbody>
                        <tr>
                            <th class="table-form-th">
                                <label for="it_sc_type" class="label">????????? ??????</label>
                            </th>
                            <td>
                                <label class="select form-width-250px">
                                    <select name="it_sc_type" id="it_sc_type">
                                        <option value="0"<?php echo get_selected('0', $it['it_sc_type']); ?>>????????? ???????????? ??????</option>
                                        <option value="1"<?php echo get_selected('1', $it['it_sc_type']); ?>>????????????</option>
                                        <option value="2"<?php echo get_selected('2', $it['it_sc_type']); ?>>????????? ????????????</option>
                                        <option value="3"<?php echo get_selected('3', $it['it_sc_type']); ?>>????????????</option>
                                        <option value="4"<?php echo get_selected('4', $it['it_sc_type']); ?>>????????? ??????</option>
                                    </select><i></i>
                                </label>
                                <div class="note"><strong>Note:</strong> ????????? ????????? ???????????? ???????????? ????????? ???????????????.</div>
                            </td>
                            <td rowspan="1" id="sc_grp" class="table-chk-td">
                                <div class="inline-group">
                                    <label for="chk_ca_it_sendcost" class="checkbox"><input type="checkbox" name="chk_ca_it_sendcost" value="1" id="chk_ca_it_sendcost"><i></i>????????????</label>
                                    <label for="chk_all_it_sendcost" class="checkbox"><input type="checkbox" name="chk_all_it_sendcost" value="1" id="chk_all_it_sendcost"><i></i>????????????</label>
                                </div>
                            </td>
                        </tr>
                        <tr id="sc_con_method">
                            <th class="table-form-th">
                                <label for="it_sc_method" class="label">????????? ??????</label>
                            </th>
                            <td>
                                <label class="select form-width-250px">
                                    <select name="it_sc_method" id="it_sc_method">
                                        <option value="0"<?php echo get_selected('0', $it['it_sc_method']); ?>>??????</option>
                                        <option value="1"<?php echo get_selected('1', $it['it_sc_method']); ?>>??????</option>
                                        <option value="2"<?php echo get_selected('2', $it['it_sc_method']); ?>>???????????????</option>
                                    </select><i></i>
                                </label>
                            </td>
                        </tr>
                        <tr id="sc_con_basic">
                            <th class="table-form-th">
                                <label for="it_sc_price" class="label">???????????????</label>
                            </th>
                            <td>
                                <label class="input form-width-250px">
                                    <i class="icon-append">???</i>
                                    <input type="text" name="it_sc_price" value="<?php echo $it['it_sc_price']; ?>" id="it_sc_price">
                                </label>
                                <div class="note"><strong>Note:</strong> ???????????? ????????? ????????? ???????????? ????????? ???????????????.</div>
                            </td>
                        </tr>
                        <tr id="sc_con_minimum">
                            <th class="table-form-th">
                                <label for="it_sc_minimum" class="label">????????? ????????????</label>
                            </th>
                            <td>
                                <label class="input form-width-250px">
                                    <i class="icon-append">???</i>
                                    <input type="text" name="it_sc_minimum" value="<?php echo $it['it_sc_minimum']; ?>" id="it_sc_minimum">
                                </label>
                                <div class="note"><strong>Note:</strong> ??????????????? ????????? ?????? ???????????? ????????????</div>
                            </td>
                        </tr>
                        <tr id="sc_con_qty">
                            <th class="table-form-th">
                                <label for="it_sc_qty" class="label">????????? ????????????<br><br>(??????????????? ????????? ??????)</label>
                            </th>
                            <td>
                                <label class="input form-width-250px">
                                    <i class="icon-append">???</i>
                                    <input type="text" name="it_sc_qty" value="<?php echo $it['it_sc_qty']; ?>" id="it_sc_qty">
                                </label>
                                <div class="note"><strong>Note:</strong> ??????????????? ????????? ????????? ????????? ???????????? ???????????? ???????????????.<br>??????????????? ?????? ????????? ?????? ???????????? ???????????????. ?????? ?????? ?????????????????? 3,000??? ????????? 3?????? ???????????? ?????? ????????? ??????????????? 5????????? 6,000??? ???????????? ???????????????.</div>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <?php if (!G5_IS_MOBILE) { ?>
                </div>
                <?php } ?>
            </div>
            <script>
            $(function() {
                <?php
                switch($it['it_sc_type']) {
                    case 1:
                        echo '$("#sc_con_method").hide();'.PHP_EOL;
                        echo '$("#sc_con_basic").hide();'.PHP_EOL;
                        echo '$("#sc_con_minimum").hide();'.PHP_EOL;
                        echo '$("#sc_con_qty").hide();'.PHP_EOL;
                        echo '$("#sc_grp").attr("rowspan","1");'.PHP_EOL;
                        break;
                    case 2:
                        echo '$("#sc_con_method").show();'.PHP_EOL;
                        echo '$("#sc_con_basic").show();'.PHP_EOL;
                        echo '$("#sc_con_minimum").show();'.PHP_EOL;
                        echo '$("#sc_con_qty").hide();'.PHP_EOL;
                        echo '$("#sc_grp").attr("rowspan","4");'.PHP_EOL;
                        break;
                    case 3:
                        echo '$("#sc_con_method").show();'.PHP_EOL;
                        echo '$("#sc_con_basic").show();'.PHP_EOL;
                        echo '$("#sc_con_minimum").hide();'.PHP_EOL;
                        echo '$("#sc_con_qty").hide();'.PHP_EOL;
                        echo '$("#sc_grp").attr("rowspan","3");'.PHP_EOL;
                        break;
                    case 4:
                        echo '$("#sc_con_method").show();'.PHP_EOL;
                        echo '$("#sc_con_basic").show();'.PHP_EOL;
                        echo '$("#sc_con_minimum").hide();'.PHP_EOL;
                        echo '$("#sc_con_qty").show();'.PHP_EOL;
                        echo '$("#sc_grp").attr("rowspan","4");'.PHP_EOL;
                        break;
                    default:
                        echo '$("#sc_con_method").hide();'.PHP_EOL;
                        echo '$("#sc_con_basic").hide();'.PHP_EOL;
                        echo '$("#sc_con_minimum").hide();'.PHP_EOL;
                        echo '$("#sc_con_qty").hide();'.PHP_EOL;
                        echo '$("#sc_grp").attr("rowspan","1");'.PHP_EOL;
                        break;
                }
                ?>
                $("#it_sc_type").change(function() {
                    var type = $(this).val();

                    switch(type) {
                        case "1":
                            $("#sc_con_method").hide();
                            $("#sc_con_basic").hide();
                            $("#sc_con_minimum").hide();
                            $("#sc_con_qty").hide();
                            $("#sc_grp").attr("rowspan","1");
                            break;
                        case "2":
                            $("#sc_con_method").show();
                            $("#sc_con_basic").show();
                            $("#sc_con_minimum").show();
                            $("#sc_con_qty").hide();
                            $("#sc_grp").attr("rowspan","4");
                            break;
                        case "3":
                            $("#sc_con_method").show();
                            $("#sc_con_basic").show();
                            $("#sc_con_minimum").hide();
                            $("#sc_con_qty").hide();
                            $("#sc_grp").attr("rowspan","3");
                            break;
                        case "4":
                            $("#sc_con_method").show();
                            $("#sc_con_basic").show();
                            $("#sc_con_minimum").hide();
                            $("#sc_con_qty").show();
                            $("#sc_grp").attr("rowspan","4");
                            break;
                        default:
                            $("#sc_con_method").hide();
                            $("#sc_con_basic").hide();
                            $("#sc_con_minimum").hide();
                            $("#sc_con_qty").hide();
                            $("#sc_grp").attr("rowspan","1");
                            break;
                    }
                });
            });
            </script>
        </div>
    </div>

    <?php echo $frm_submit; // ?????? ?>

    <div id="anc_sitfrm_img">
        <div class="pg-anchor">
        <?php echo adm_pg_anchor('anc_sitfrm_img'); ?>
        </div>
        <div class="adm-table-form-wrap margin-bottom-30">
            <header><strong><i class="fas fa-caret-right"></i> ????????? ?????????</strong></header>

            <div class="table-list-eb">
                <?php if (!G5_IS_MOBILE) { ?>
                <div class="table-responsive">
                <?php } ?>
                <table class="table">
                    <tbody>
                        <?php foreach ($gdimage as $i => $itimg) { ?>
                        <tr>
                            <th class="table-form-th">
                                <label for="it_img<?php echo $i; ?>">????????? <?php echo $i; ?></label>
                            </th>
                            <td class="position-relative">
                                <div class="table-form-thumb">
                                    <div class="table-form-thumb-img">
                                        <?php if ($itimg['thumb']) { ?>
                                        <div class="goods-thumb">
                                            <?php echo $itimg['thumb']; ?>
                                        </div>
                                        <?php } else { ?>
                                        <div class="no-goods-thumb"></div>
                                        <?php } ?>
                                    </div>
                                    <div class="table-form-thumb-file">
                                        <label class="input input-file">
                                            <div class="button"><input type="file" name="it_img<?php echo $i; ?>" id="it_img<?php echo $i; ?>" onchange="this.parentNode.nextSibling.value = this.value">????????? ?????????</div><input type="text" readonly="">
                                        </label>
                                        <?php if ($itimg['thumb']) { ?>
                                        <label class="checkbox"><input type="checkbox" name="it_img<?php echo $i; ?>_del" id="it_img<?php echo $i; ?>_del" value="1"><i></i>???????????? [<?php echo $itimg['img_name']; ?>]</label>
                                        <a class="goods-thumb-btn btn-e btn-e-xs btn-e-default" data-gall="goods_image_<?php echo $i; ?>" href="<?php echo G5_DATA_URL; ?>/item/<?php echo $itimg['img_name']; ?>" title="<?php echo $itimg['img_name']; ?>">????????????</a>
                                        <?php } ?>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <?php if (!G5_IS_MOBILE) { ?>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>

    <?php echo $frm_submit; // ?????? ?>

    <div id="anc_sitfrm_relation" class="srel">
        <div class="pg-anchor">
        <?php echo adm_pg_anchor('anc_sitfrm_relation'); ?>
        </div>
        <div class="adm-table-form-wrap border-bottom-1px">
            <header class="border-bottom-1px"><strong><i class="fas fa-caret-right"></i> ????????????</strong></header>
            <fieldset>
                <div class="cont-text-bg">
                    <p class="bg-info font-size-12 margin-bottom-0">
                        <i class="fas fa-info-circle"></i> ????????? ???????????? ???????????? ??????????????? ???????????? ?????? ?????? ???????????? ????????? ???????????????.<br>
                        <i class="fas fa-info-circle"></i> ????????????????????? ?????? ???????????? ??????????????? ????????? ???????????? ????????? <strong>??????</strong> ???????????????.<br>
                        <i class="fas fa-info-circle"></i> ?????? ??????, A ????????? B ????????? ?????????????????? ???????????? B ???????????? A ????????? ?????????????????? ?????? ????????????, <strong>?????? ????????? ???????????? ?????? ???????????????.</strong>
                    </p>
                </div>
            </fieldset>

            <fieldset>
                <div class="row">
                    <div class="col col-6">
                        <label class="label">????????? ???????????? ??????</label>
                        <div class="inline-mix margin-top-5 margin-bottom-10">
                            <label class="select display-inline-block width-40">
                                <select id="sch_relation">
                                    <option value=''>????????? ??????</option>
                                    <?php echo $category_select; ?>
                                </select><i></i>
                            </label>
                            <label class="input input-button display-inline-block width-50">
                                <input type="text" name="sch_name" id="sch_name"><div class="button"><a href="javascript:;" id="btn_search_item" onclick="return false;"><i class="fas fa-search"></i> ??????</a></div>
                            </label>
                        </div>

                        <div id="relation">
                            <p class="relation-sbox">????????? ????????? ?????????????????? ???????????? ???????????? ??? ???????????? ????????????.</p>
                        </div>
                        <script>
                        $(function() {
                            $("#btn_search_item").click(function() {
                                var ca_id = $("#sch_relation").val();
                                var it_name = $.trim($("#sch_name").val());
                                var $relation = $("#relation");

                                if(ca_id == "" && it_name == "") {
                                    $relation.html("<p class='relation-sbox'>????????? ????????? ?????????????????? ???????????? ???????????? ??? ???????????? ????????????.</p>");
                                    return false;
                                }

                                $("#relation").load(
                                    "<?php echo G5_ADMIN_URL; ?>/?dir=shop&pid=itemformrelation&smode=1",
                                    { it_id: "<?php echo $it_id; ?>", ca_id: ca_id, it_name: it_name }
                                );
                            });

                            $(document).on("click", "#relation .add_item", function() {
                                // ?????? ????????? ???????????? ??????
                                var $li = $(this).closest("li");
                                var it_id = $li.find("input:hidden").val();
                                var it_id2;
                                var dup = false;
                                $("#reg_relation input[name='re_it_id[]']").each(function() {
                                    it_id2 = $(this).val();
                                    if(it_id == it_id2) {
                                        dup = true;
                                        return false;
                                    }
                                });

                                if(dup) {
                                    alert("?????? ????????? ???????????????.");
                                    return false;
                                }

                                var cont = "<li>"+$li.html().replace("add_item", "del_item").replace("??????", "??????")+"</li>";
                                var count = $("#reg_relation li").size();

                                if(count > 0) {
                                    $("#reg_relation li:last").after(cont);
                                } else {
                                    $("#reg_relation").html("<ul>"+cont+"</ul>");
                                }

                                $li.remove();
                            });

                            $(document).on("click", "#reg_relation .del_item", function() {
                                if(!confirm("????????? ?????????????????????????"))
                                    return false;

                                $(this).closest("li").remove();

                                var count = $("#reg_relation li").size();
                                if(count < 1)
                                    $("#reg_relation").html("<p class='relation-sbox'>????????? ????????? ????????????.</p>");
                            });
                        });
                        </script>
                    </div>

                    <div class="col col-6">
                        <label class="label">????????? ???????????? ??????</label>
                        <div id="reg_relation" class="relation-sbox-margin-top">
                            <?php if (count((array)$rellist) > 0) { ?>
                            <ul>
                                <?php foreach($rellist as $relitem) { ?>
                                <li>
                                    <input type="hidden" name="re_it_id[]" value="<?php echo $relitem['it_id']; ?>">
                                    <div class="list_item"><?php echo $relitem['image'].' '. $relitem['it_name']; ?></div>
                                    <div class="list_item_btn"><button type="button" class="del_item btn-e btn-e-xs btn-e-dark">??????</button></div>
                                </li>
                                <?php } ?>
                            </ul>
                            <?php } else { ?>
                            <p class="relation-sbox">????????? ????????? ????????????.</p>
                            <?php } ?>
                        </div>
                        <input type="hidden" name="it_list" value="<?php echo $str; ?>">
                    </div>
                </div>
            </fieldset>
        </div>
    </div>

    <?php echo $frm_submit; // ?????? ?>

    <div id="anc_sitfrm_event">
        <div class="pg-anchor">
        <?php echo adm_pg_anchor('anc_sitfrm_event'); ?>
        </div>
        <div class="adm-table-form-wrap border-bottom-1px">
            <header><strong><i class="fas fa-caret-right"></i> ???????????????</strong></header>
            <fieldset>
                <div class="row">
                    <div class="col col-6">
                        <section>
                            <label class="label">????????? ??????????????? ??????</label>
                            <div id="event_list">
                                <div class="event-box">
                                    <?php if (count((array)$evinfo) > 0) { ?>
                                    <ul>
                                        <?php foreach ($evinfo as $evitem) { ?>
                                        <li>
                                            <input type="hidden" name="ev_id[]" value="<?php echo $evitem['ev_id']; ?>">
                                            <div class="list_item">??? <?php echo get_text($evitem['ev_subject']); ?></div>
                                            <div class="list_item_btn"><button type="button" class="add_event btn-e btn-e-xs btn-e-red">??????</button></div>
                                        </li>
                                        <?php } ?>
                                    </ul>
                                    <?php } else { ?>
                                    ????????? ???????????? ????????????.
                                    <?php } ?>
                                </div>
                            </div>
                        </section>
                    </div>
                    <script>
                    $(function() {
                        $(document).on("click", "#event_list .add_event", function() {
                            // ?????? ????????? ??????????????? ??????
                            var $li = $(this).closest("li");
                            var ev_id = $li.find("input:hidden").val();
                            var ev_id2;
                            var dup = false;
                            $("#reg_event_list input[name='ev_id[]']").each(function() {
                                ev_id2 = $(this).val();
                                if(ev_id == ev_id2) {
                                    dup = true;
                                    return false;
                                }
                            });

                            if(dup) {
                                alert("?????? ????????? ??????????????????.");
                                return false;
                            }

                            var cont = "<li>"+$li.html().replace("add_event", "del_event").replace("??????", "??????")+"</li>";
                            var count = $("#reg_event_list li").size();

                            if(count > 0) {
                                $("#reg_event_list li:last").after(cont);
                            } else {
                                $("#reg_event_list").html("<ul>"+cont+"</ul>");
                            }
                        });

                        $(document).on("click", "#reg_event_list .del_event", function() {
                            if(!confirm("????????? ?????????????????????????"))
                                return false;

                            $(this).closest("li").remove();

                            var count = $("#reg_event_list li").size();
                            if(count < 1)
                                $("#reg_event_list").html("????????? ???????????? ????????????.");
                        });
                    });
                    </script>

                    <div class="col col-6">
                        <section>
                            <label class="label">????????? ??????????????? ??????</label>
                            <div>
                                <div class="event-box" id="reg_event_list">
                                    <?php if (count((array)$reg_evinfo) > 0) { ?>
                                    <ul>
                                        <?php foreach ($reg_evinfo as $reg_evitem) { ?>
                                        <li>
                                            <input type="hidden" name="ev_id[]" value="<?php echo $reg_evitem['ev_id']; ?>">
                                            <div class="list_item">??? <?php echo get_text($reg_evitem['ev_subject']); ?></div>
                                            <div class="list_item_btn"><button type="button" class="del_event btn-e btn-e-xs btn-e-dark">??????</button></div>
                                        </li>
                                        <?php } ?>
                                    </ul>
                                    <?php } else { ?>
                                    ????????? ???????????? ????????????.
                                    <?php } ?>
                                </div>
                                <input type="hidden" name="ev_list" value="<?php echo $reg_ev_ids; ?>">
                            </div>
                        </section>
                    </div>
                </div>
            </fieldset>
        </div>
    </div>

    <?php echo $frm_submit; // ?????? ?>

    <div id="anc_sitfrm_optional">
        <div class="pg-anchor">
        <?php echo adm_pg_anchor('anc_sitfrm_optional'); ?>
        </div>
        <div class="adm-table-form-wrap margin-bottom-30">
            <header><strong><i class="fas fa-caret-right"></i> ??????????????????</strong></header>

            <div class="table-list-eb">
                <?php if (!G5_IS_MOBILE) { ?>
                <div class="table-responsive">
                <?php } ?>
                <table class="table">
                    <tbody>
                        <tr>
                            <th class="table-form-th">
                                <label for="it_head_html" class="label">??????????????????</label>
                            </th>
                            <td>
                                <div class="textarea">
                                    <?php echo editor_html('it_head_html', get_text(html_purifier($it['it_head_html']), 0)); ?>
                                </div>
                                <div class="note"><strong>Note:</strong> ?????????????????? ????????? ????????? ???????????? HTML ???????????????.</div>
                            </td>
                            <td class="table-chk-td">
                                <div class="inline-group">
                                    <label for="chk_ca_it_head_html" class="checkbox"><input type="checkbox" name="chk_ca_it_head_html" value="1" id="chk_ca_it_head_html"><i></i>????????????</label>
                                    <label for="chk_all_it_head_html" class="checkbox"><input type="checkbox" name="chk_all_it_head_html" value="1" id="chk_all_it_head_html"><i></i>????????????</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th">
                                <label for="it_tail_html" class="label">??????????????????</label>
                            </th>
                            <td>
                                <div class="textarea">
                                    <?php echo editor_html('it_tail_html', get_text(html_purifier($it['it_tail_html']), 0)); ?>
                                </div>
                                <div class="note"><strong>Note:</strong> ?????????????????? ????????? ????????? ???????????? HTML ???????????????.</div>
                            </td>
                            <td class="table-chk-td">
                                <div class="inline-group">
                                    <label for="chk_ca_it_tail_html" class="checkbox"><input type="checkbox" name="chk_ca_it_tail_html" value="1" id="chk_ca_it_tail_html"><i></i>????????????</label>
                                    <label for="chk_all_it_tail_html" class="checkbox"><input type="checkbox" name="chk_all_it_tail_html" value="1" id="chk_all_it_tail_html"><i></i>????????????</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th">
                                <label for="it_mobile_head_html" class="label">????????? ??????????????????</label>
                            </th>
                            <td>
                                <div class="textarea">
                                    <?php echo editor_html('it_mobile_head_html', get_text(html_purifier($it['it_mobile_head_html']), 0)); ?>
                                </div>
                                <div class="note"><strong>Note:</strong> ????????? ?????????????????? ????????? ????????? ???????????? HTML ???????????????.</div>
                            </td>
                            <td class="table-chk-td">
                                <div class="inline-group">
                                    <label for="chk_ca_it_mobile_head_html" class="checkbox"><input type="checkbox" name="chk_ca_it_mobile_head_html" value="1" id="chk_ca_it_mobile_head_html"><i></i>????????????</label>
                                    <label for="chk_all_it_mobile_head_html" class="checkbox"><input type="checkbox" name="chk_all_it_mobile_head_html" value="1" id="chk_all_it_mobile_head_html"><i></i>????????????</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th">
                                <label for="it_mobile_tail_html" class="label">????????? ??????????????????</label>
                            </th>
                            <td>
                                <div class="textarea">
                                    <?php echo editor_html('it_mobile_tail_html', get_text(html_purifier($it['it_mobile_tail_html']), 0)); ?>
                                </div>
                                <div class="note"><strong>Note:</strong> ????????? ?????????????????? ????????? ????????? ???????????? HTML ???????????????.</div>
                            </td>
                            <td class="table-chk-td">
                                <div class="inline-group">
                                    <label for="chk_ca_it_mobile_tail_html" class="checkbox"><input type="checkbox" name="chk_ca_it_mobile_tail_html" value="1" id="chk_ca_it_mobile_tail_html"><i></i>????????????</label>
                                    <label for="chk_all_it_mobile_tail_html" class="checkbox"><input type="checkbox" name="chk_all_it_mobile_tail_html" value="1" id="chk_all_it_mobile_tail_html"><i></i>????????????</label>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <?php if (!G5_IS_MOBILE) { ?>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>

    <?php echo $frm_submit; // ?????? ?>

    <div id="anc_sitfrm_extra">
        <div class="pg-anchor">
        <?php echo adm_pg_anchor('anc_sitfrm_extra'); ?>
        </div>
        <div class="adm-table-form-wrap margin-bottom-30">
            <header><strong><i class="fas fa-caret-right"></i> ???????????? ??????</strong></header>

            <div class="table-list-eb">
                <?php if (!G5_IS_MOBILE) { ?>
                <div class="table-responsive">
                <?php } ?>
                <table class="table">
                    <tbody>
                        <?php for ($i=1; $i<=10; $i++) { ?>
                        <tr>
                            <th class="table-form-th">
                                <label class="label">???????????? <?php echo $i ?> ??????</label>
                            </th>
                            <td>
                                <label for="it_<?php echo $i ?>_subj" class="input form-width-250px">
                                    <input type="text" name="it_<?php echo $i ?>_subj" id="it_<?php echo $i ?>_subj" value="<?php echo get_text($it['it_'.$i.'_subj']); ?>">
                                </label>
                            </td>
                        <?php if (G5_IS_MOBILE) { ?>
                        </tr>
                        <tr>
                        <?php } ?>
                            <th class="table-form-th border-left-th">
                                <label class="label">???????????? <?php echo $i ?> ???</label>
                            </th>
                            <td>
                                <label for="it_<?php echo $i ?>" class="input form-width-250px">
                                    <input type="text" name="it_<?php echo $i ?>" id="it_<?php echo $i ?>" value="<?php echo get_text($it['it_'.$i]); ?>">
                                </label>
                            </td>
                            <td class="table-chk-td">
                                <div class="inline-group">
                                    <label for="chk_ca_<?php echo $i ?>" class="checkbox"><input type="checkbox" name="chk_ca_<?php echo $i ?>" value="1" id="chk_ca_<?php echo $i ?>"><i></i>????????????</label>
                                    <label for="chk_all_<?php echo $i ?>" class="checkbox"><input type="checkbox" name="chk_all_<?php echo $i ?>" value="1" id="chk_all_<?php echo $i ?>"><i></i>????????????</label>
                                </div>
                            </td>
                        </tr>
                        <?php } ?>
                        <?php if ($w == 'u') { ?>
                        <tr>
                            <th class="table-form-th">
                                <label for="it_time" class="label">????????????</label>
                            </th>
                            <td colspan="4">
                                <label class="input state-disabled form-width-250px">
                                    <input type="text" name="it_time" id="it_time" value="<?php echo $it['it_time']; ?>" readonly disabled>
                                </label>
                                <div class="note"><strong>Note:</strong> ????????? ?????? ??????(??????)??? ???????????????.</div>
                            </td>
                        <?php if (!$wmode) { ?>
                        </tr>
                        <tr>
                        <?php } ?>
                            <th class="table-form-th <?php echo $wmode ? 'border-left-th':''; ?>">
                                <label for="it_update_time" class="label">????????????</label>
                            </th>
                            <td colspan="4">
                                <label class="input state-disabled form-width-250px">
                                    <input type="text" name="it_update_time" id="it_update_time" value="<?php echo $it['it_update_time']; ?>" readonly disabled>
                                </label>
                                <div class="note"><strong>Note:</strong> ????????? ?????? ????????? ???????????????.</div>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <?php if (!G5_IS_MOBILE) { ?>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>

    <?php echo $frm_submit; // ?????? ?>

</div>

<script src="<?php echo EYOOM_ADMIN_THEME_URL; ?>/plugins/magnific-popup/magnific-popup.min.js"></script>
<script>
$('.pg-anchor a').on('click', function(e) {
    e.stopPropagation();
    var scrollTopSpace;
    if (window.innerWidth >= 1100) {
        scrollTopSpace = 70;
    } else {
        scrollTopSpace = 70;
    }
    var tabLink = $(this).attr('href');
    var offset = $(tabLink).offset().top;
    $('html, body').animate({scrollTop : offset - scrollTopSpace}, 500);
    return false;
});

$(function(){
    <?php if (G5_IS_MOBILE) { ?>
    var scrollCont = $('#it_name').width();
    $('.scrollbar-container').css('width', scrollCont);
    new PerfectScrollbar('#scrollbar_container_1');
    new PerfectScrollbar('#scrollbar_container_2');
    <?php } ?>

    <?php if (G5_IS_MOBILE || $wmode) { ?>
    $("td").removeAttr('colspan');
    $(".table-chk-td").hide();
    <?php } ?>

    // ????????? ????????????
    $('.goods-thumb-btn').magnificPopup({
        type: 'image',
        closeOnContentClick: true,
        mainClass: 'mfp-img-mobile',
        image: {
            verticalFit: true
        }
    });

    $(".goods-thumb img").removeAttr('width');
    $(".goods-thumb img").removeAttr('height');
    $(".goods-thumb img").addClass('img-responsive');
});

var f = document.fitemform;

function codedupcheck(id)
{
    if (!id) {
        alert('??????????????? ??????????????????.');
        f.it_id.focus();
        return;
    }

    var it_id = id.replace(/[A-Za-z0-9\-_]/g, "");
    if(it_id.length > 0) {
        alert("??????????????? ?????????, ??????, -, _ ??? ????????? ??? ????????????.");
        return false;
    }

    $.post(
        "<?php echo G5_ADMIN_URL; ?>/shop_admin/codedupcheck.php",
        { it_id: id },
        function(data) {
            if(data.name) {
                alert("?????? '"+data.code+"' ??? '".data.name+"' (???)??? ?????? ???????????? ????????????\n\n???????????? ??? ????????????.");
                return false;
            } else {
                alert("'"+data.code+"' ???(???) ????????? ????????? ???????????? ???????????? ??? ????????????.");
                document.fitemform.codedup.value = '';
            }
        }, "json"
    );
}

function fitemformcheck(f)
{
    if (!f.ca_id.value) {
        alert("??????????????? ??????????????????.");
        f.ca_id.focus();
        return false;
    }

    if (f.w.value == "") {
        var error = "";
        $.ajax({
            url: "<?php echo G5_ADMIN_URL; ?>/shop_admin/ajax.it_id.php",
            type: "POST",
            data: {
                "it_id": f.it_id.value
            },
            dataType: "json",
            async: false,
            cache: false,
            success: function(data, textStatus) {
                error = data.error;
            }
        });

        if (error) {
            alert(error);
            return false;
        }
    }

    if(f.it_point_type.value == "1" || f.it_point_type.value == "2") {
        var point = parseInt(f.it_point.value);
        if(point < 0 || point > 99) {
            alert("????????? ????????? 0??? 99 ????????? ????????? ????????? ????????????.");
            f.it_point.focus();
            f.it_point.select();
            return false;
        }
    }

    if(parseInt(f.it_sc_type.value) > 1) {
        if(!f.it_sc_price.value || f.it_sc_price.value == "0") {
            alert("?????????????????? ????????? ????????????.");
            return false;
        }

        if(f.it_sc_type.value == "2" && (!f.it_sc_minimum.value || f.it_sc_minimum.value == "0")) {
            alert("????????? ??????????????? ??????????????? ????????? ????????????.");
            return false;
        }

        if(f.it_sc_type.value == "4" && (!f.it_sc_qty.value || f.it_sc_qty.value == "0")) {
            alert("????????? ??????????????? ??????????????? ????????? ????????????.");
            return false;
        }
    }

    // ??????????????????
    var item = new Array();
    var re_item = it_id = "";

    $("#reg_relation input[name='re_it_id[]']").each(function() {
        it_id = $(this).val();
        if(it_id == "")
            return true;

        item.push(it_id);
    });

    if(item.length > 0)
        re_item = item.join();

    $("input[name=it_list]").val(re_item);

    // ???????????????
    var evnt = new Array();
    var ev = ev_id = "";

    $("#reg_event_list input[name='ev_id[]']").each(function() {
        ev_id = $(this).val();
        if(ev_id == "")
            return true;

        evnt.push(ev_id);
    });

    if(evnt.length > 0)
        ev = evnt.join();

    $("input[name=ev_list]").val(ev);

    <?php echo get_editor_js('it_explan'); ?>
    <?php echo get_editor_js('it_mobile_explan'); ?>
    <?php echo get_editor_js('it_head_html'); ?>
    <?php echo get_editor_js('it_tail_html'); ?>
    <?php echo get_editor_js('it_mobile_head_html'); ?>
    <?php echo get_editor_js('it_mobile_tail_html'); ?>

    return true;
}

function categorychange(f)
{
    var idx = f.ca_id.value;

    if (f.w.value == "" && idx)
    {
        f.it_use.checked = ca_use[idx] ? true : false;
        f.it_stock_qty.value = ca_stock_qty[idx];
        f.it_sell_email.value = ca_sell_email[idx];
    }
}

categorychange(document.fitemform);
</script>