<?php
/**
 * Eyoom Admin Skin File
 * @file    ~/theme/basic/skin/board/board_form.html.php
 */
if (!defined('_EYOOM_IS_ADMIN_')) exit;
if ($config['cf_editor'] == 'tuieditor') echo tuieditor_resource();
?>

<style>
@media (max-width: 500px) {
    .admin-board-form .btn-e-lg {margin-bottom:5px}
}
@media (min-width: 651px) {
    .pg-anchor-in.tab-e2 .nav-tabs li a {font-size:14px;font-weight:bold;padding:8px 17px}
    .pg-anchor-in.tab-e2 .nav-tabs li.active a {z-index:1;border:1px solid #000;border-top:1px solid #DE2600;color:#DE2600}
    .pg-anchor-in.tab-e2 .tab-bottom-line {position:relative;display:block;height:1px;background:#000;margin-bottom:20px}
}
@media (max-width: 650px) {
    .pg-anchor-in {position:relative;overflow:hidden;margin-bottom:20px;border:1px solid #757575}
    .pg-anchor-in.tab-e2 .nav-tabs li {width:33.33333%;margin:0}
    .pg-anchor-in.tab-e2 .nav-tabs li a {font-size:12px;padding:6px 0;text-align:center;border-bottom:1px solid #d5d5d5;margin-right:0;font-weight:bold;background:#fff}
    .pg-anchor-in.tab-e2 .nav-tabs li.active a {border:0;border-bottom:1px solid #d5d5d5 !important;color:#DE2600;background:#fff1f0}
    .pg-anchor-in.tab-e2 .nav-tabs li:nth-child(1) a {border-right:1px solid #d5d5d5}
    .pg-anchor-in.tab-e2 .nav-tabs li:nth-child(2) a {border-right:1px solid #d5d5d5}
    .pg-anchor-in.tab-e2 .nav-tabs li:nth-child(4) a {border-right:1px solid #d5d5d5;border-bottom:0 !important}
    .pg-anchor-in.tab-e2 .nav-tabs li:nth-child(5) a {border-right:1px solid #d5d5d5;border-bottom:0 !important}
    .pg-anchor-in.tab-e2 .nav-tabs li:nth-child(6) a {border-bottom:0 !important}
    .pg-anchor-in.tab-e2 .tab-bottom-line {display:none}
}
</style>

<div class="admin-board-form">
    <form name="fboardform" method="post" action="<?php echo $action_url1; ?>" onsubmit="return fboardform_submit(this)" enctype="multipart/form-data" class="eyoom-form">
    <input type="hidden" name="w" value="<?php echo $w; ?>">
    <input type="hidden" name="sfl" value="<?php echo $sfl; ?>">
    <input type="hidden" name="stx" value="<?php echo $stx; ?>">
    <input type="hidden" name="sst" value="<?php echo $sst; ?>">
    <input type="hidden" name="sod" value="<?php echo $sod; ?>">
    <input type="hidden" name="page" value="<?php echo $page; ?>">
    <input type="hidden" name="gr_id" value="<?php echo $gr_id; ?>">
    <input type="hidden" name="bo_skin" value="<?php echo $bo_skin; ?>">
    <input type="hidden" name="bo_mobile_skin" value="<?php echo $bo_mobile_skin; ?>">
    <input type="hidden" name="bo_ex" value="<?php echo $bo_ex; ?>">
    <input type="hidden" name="bo_cate" value="<?php echo $bo_cate; ?>">
    <input type="hidden" name="bo_sideview" value="<?php echo $bo_sideview; ?>">
    <input type="hidden" name="bo_dhtml" value="<?php echo $bo_dhtml; ?>">
    <input type="hidden" name="bo_secret" value="<?php echo $bo_secret; ?>">
    <input type="hidden" name="bo_good" value="<?php echo $bo_good; ?>">
    <input type="hidden" name="bo_nogood" value="<?php echo $bo_nogood; ?>">
    <input type="hidden" name="bo_file" value="<?php echo $bo_file; ?>">
    <input type="hidden" name="bo_cont" value="<?php echo $bo_cont; ?>">
    <input type="hidden" name="bo_list" value="<?php echo $bo_list; ?>">
    <input type="hidden" name="bo_sns" value="<?php echo $bo_sns; ?>">
    <input type="hidden" name="wmode" value="<?php echo $wmode; ?>">
    <input type="hidden" name="token" value="">

    <div class="adm-headline">
        <h3><?php echo $html_title; ?></h3>
    </div>

    <div id="anc_bo_basic">
        <div class="pg-anchor">
        <?php echo adm_pg_anchor('anc_bo_basic'); ?>
        </div>
        <div class="adm-table-form-wrap margin-bottom-30">
            <header><strong><i class="fas fa-caret-right"></i> ????????? ?????? ??????</strong></header>
            <div class="table-list-eb">
                <?php if (!G5_IS_MOBILE) { ?>
                <div class="table-responsive">
                <?php } ?>
                <table class="table">
                    <tbody>
                        <tr>
                            <th class="table-form-th">
                                <label for="bo_table" class="label">TABLE<?php echo $sound_only ?></label>
                            </th>
                            <td colspan="2">
                                <div class="inline-group">
                                    <span>
                                        <label class="input form-width-250px"><input type="text" name="bo_table" id="bo_table" value="<?php echo $board['bo_table']; ?>" maxlength="20" <?php echo $required; ?> <?php echo $readonly; ?> maxlength="20"></label>
                                    </span>
                                    <?php if ($w == '') { ?>
                                    <span>?????????, ??????, _ ??? ?????? (???????????? 20??? ??????)</span>
                                    <?php } else if (!$wmode) { ?>
                                    <span> <a href="<?php echo get_eyoom_pretty_url($board['bo_table']) ?>" class="btn-e btn-e-yellow">????????? ????????????</a></span>
                                    <?php } ?>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th">
                                <label for="gr_id" class="label">??????<strong class="sound_only">??????</strong></label>
                            </th>
                            <td colspan="2">
                                <label class="select form-width-250px"><?php echo get_group_select('gr_id', $board['gr_id'], 'required'); ?><i></i></label>
                                <?php if ($w=='u' && !$wmode) { ?>
                                <div class="margin-top-5"><a href="javascript:document.location.href='<?php echo G5_ADMIN_URL; ?>/?dir=board&amp;pid=board_list&amp;grid=<?php echo $board['gr_id']; ?>'" class="btn-e btn-e-md btn-e-dark">???????????? ???????????????</a></div>
                                <?php } ?>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th">
                                <label for="bo_subject" class="label">????????? ??????<strong class="sound_only">??????</strong></label>
                            </th>
                            <td colspan="2">
                                <label class="input form-width-250px">
                                    <input type="text" name="bo_subject" id="bo_subject" value="<?php echo get_text($board['bo_subject']) ?>" required maxlength="120">
                                </label>
                                <div class="note"><strong>Note:</strong> PC?????? ????????? ????????? ????????? ????????? ?????????.</div>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th">
                                <label for="bo_mobile_subject" class="label">????????? ????????? ??????</label>
                            </th>
                            <td colspan="2">
                                <label class="input form-width-250px">
                                    <input type="text" name="bo_mobile_subject" id="bo_mobile_subject" value="<?php echo get_text($board['bo_mobile_subject']) ?>" maxlength="120">
                                </label>
                                <div class="note"><strong>Note:</strong> ??????????????? ???????????? ????????? ????????? ?????? ????????? ???????????????. ????????? ????????? ?????? ????????? ????????? ???????????????.</div>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th">
                                <label for="bo_device" class="label">????????????</label>
                            </th>
                            <td>
                                <label class="select form-width-250px">
                                    <select id="bo_device" name="bo_device">
                                        <option value="both"<?php echo get_selected($board['bo_device'], 'both'); ?>>PC??? ??????????????? ?????? ??????</option>
                                        <option value="pc"<?php echo get_selected($board['bo_device'], 'pc'); ?>>PC ??????</option>
                                        <option value="mobile"<?php echo get_selected($board['bo_device'], 'mobile'); ?>>????????? ??????</option>
                                    </select><i></i>
                                </label>
                                <div class="note"><strong>Note:</strong> PC ??? ????????? ????????? ???????????????.</div>
                            </td>
                            <td class="table-chk-td">
                                <div class="inline-group">
                                    <label for="chk_grp_device" class="checkbox"><input type="checkbox" name="chk_grp_device" value="1" id="chk_grp_device"><i></i>????????????</label>
                                    <label for="chk_all_device" class="checkbox"><input type="checkbox" name="chk_all_device" value="1" id="chk_all_device"><i></i>????????????</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th">
                                <label for="bo_category_list" class="label">??????</label>
                            </th>
                            <td>
                                <label class="input"><input type="text" name="bo_category_list" id="bo_category_list" value="<?php echo get_text($board['bo_category_list']); ?>"></label>
                                <label for="bo_use_category" class="checkbox" style="width:80px;"><input type="checkbox" name="bo_use_category" value="1" id="bo_use_category" <?php echo $board['bo_use_category']?'checked':''; ?>><i></i> ??????</label>
                                <div class="note"><strong>Note:</strong> ????????? ?????? ????????? | ??? ???????????????. (???: ??????|??????) ????????? #??? ???????????? ?????????. (???: #??????|#?????? [X])<br>???????????? ?????? ???????????? ()/ ??? ???????????? ????????????.</div>
                            </td>
                            <td class="table-chk-td">
                                <div class="inline-group">
                                    <label for="chk_grp_category_list" class="checkbox"><input type="checkbox" name="chk_grp_category_list" value="1" id="chk_grp_category_list"><i></i>????????????</label>
                                    <label for="chk_all_category_list" class="checkbox"><input type="checkbox" name="chk_all_category_list" value="1" id="chk_all_category_list"><i></i>????????????</label>
                                </div>
                            </td>
                        </tr>
                        <?php if ($w == 'u') { ?>
                        <tr>
                            <th class="table-form-th">
                                <label for="proc_count" class="label">????????? ??????</label>
                            </th>
                            <td colspan="2">
                                <label class="checkbox" style="width:100px;">
                                    <input type="checkbox" name="proc_count" value="1" id="proc_count"><i></i> ????????? ????????????
                                </label>
                                <div class="note"><strong>Note:</strong> ?????? ????????? : <?php echo number_format($board['bo_count_write']); ?>, ?????? ????????? : <?php echo number_format($board['bo_count_comment']); ?><br>????????? ???????????? ?????? ????????? ?????? ?????? ????????? ??????????????????.</div>
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

    <?php echo $frm_submit; ?>

    <div id="anc_bo_auth">
        <div class="pg-anchor">
        <?php echo adm_pg_anchor('anc_bo_auth'); ?>
        </div>
        <div class="adm-table-form-wrap margin-bottom-30">
            <header><strong><i class="fas fa-caret-right"></i> ????????? ?????? ??????</strong></header>
            <div class="table-list-eb">
                <?php if (!G5_IS_MOBILE) { ?>
                <div class="table-responsive">
                <?php } ?>
                <table class="table">
                    <tbody>
                        <tr>
                            <th class="table-form-th">
                                <label for="bo_admin" class="label">????????? ?????????</label>
                            </th>
                            <td>
                                <label class="input form-width-250px">
                                    <input type="text" name="bo_admin" id="bo_admin" value="<?php echo $board['bo_admin'] ?>" maxlength="20">
                                </label>
                            </td>
                            <td class="table-chk-td">
                                <div class="inline-group">
                                    <label for="chk_grp_admin" class="checkbox"><input type="checkbox" name="chk_grp_admin" value="1" id="chk_grp_admin"><i></i>????????????</label>
                                    <label for="chk_all_admin" class="checkbox"><input type="checkbox" name="chk_all_admin" value="1" id="chk_all_admin"><i></i>????????????</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th">
                                <label for="bo_list_level" class="label">???????????? ??????</label>
                            </th>
                            <td>
                                <label class="select form-width-250px"><?php echo get_member_level_select('bo_list_level', 1, 10, $board['bo_list_level']) ?><i></i></label>
                                <div class="note"><strong>Note:</strong> ?????? 1??? ?????????, 2 ?????? ???????????????. ????????? 10 ??? ?????? ????????????.</div>
                            </td>
                            <td class="table-chk-td">
                                <div class="inline-group">
                                    <label for="chk_grp_list_level" class="checkbox"><input type="checkbox" name="chk_grp_list_level" value="1" id="chk_grp_list_level"><i></i>????????????</label>
                                    <label for="chk_all_list_level" class="checkbox"><input type="checkbox" name="chk_all_list_level" value="1" id="chk_all_list_level"><i></i>????????????</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th">
                                <label for="bo_read_level" class="label">????????? ??????</label>
                            </th>
                            <td>
                                <label class="select form-width-250px"><?php echo get_member_level_select('bo_read_level', 1, 10, $board['bo_read_level']) ?><i></i></label>
                            </td>
                            <td class="table-chk-td">
                                <div class="inline-group">
                                    <label for="chk_grp_read_level" class="checkbox"><input type="checkbox" name="chk_grp_read_level" value="1" id="chk_grp_read_level"><i></i>????????????</label>
                                    <label for="chk_all_read_level" class="checkbox"><input type="checkbox" name="chk_all_read_level" value="1" id="chk_all_read_level"><i></i>????????????</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th">
                                <label for="bo_write_level" class="label">????????? ??????</label>
                            </th>
                            <td>
                                <label class="select form-width-250px"><?php echo get_member_level_select('bo_write_level', 1, 10, $board['bo_write_level']) ?><i></i></label>
                            </td>
                            <td class="table-chk-td">
                                <div class="inline-group">
                                    <label for="chk_grp_write_level" class="checkbox"><input type="checkbox" name="chk_grp_write_level" value="1" id="chk_grp_write_level"><i></i>????????????</label>
                                    <label for="chk_all_write_level" class="checkbox"><input type="checkbox" name="chk_all_write_level" value="1" id="chk_all_write_level"><i></i>????????????</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th">
                                <label for="bo_reply_level" class="label">????????? ??????</label>
                            </th>
                            <td>
                                <label class="select form-width-250px"><?php echo get_member_level_select('bo_reply_level', 1, 10, $board['bo_reply_level']) ?><i></i></label>
                            </td>
                            <td class="table-chk-td">
                                <div class="inline-group">
                                    <label for="chk_grp_reply_level" class="checkbox"><input type="checkbox" name="chk_grp_reply_level" value="1" id="chk_grp_reply_level"><i></i>????????????</label>
                                    <label for="chk_all_reply_level" class="checkbox"><input type="checkbox" name="chk_all_reply_level" value="1" id="chk_all_reply_level"><i></i>????????????</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th">
                                <label for="bo_comment_level" class="label">???????????? ??????</label>
                            </th>
                            <td>
                                <label class="select form-width-250px"><?php echo get_member_level_select('bo_comment_level', 1, 10, $board['bo_comment_level']) ?><i></i></label>
                            </td>
                            <td class="table-chk-td">
                                <div class="inline-group">
                                    <label for="chk_grp_comment_level" class="checkbox"><input type="checkbox" name="chk_grp_comment_level" value="1" id="chk_grp_comment_level"><i></i>????????????</label>
                                    <label for="chk_all_comment_level" class="checkbox"><input type="checkbox" name="chk_all_comment_level" value="1" id="chk_all_comment_level"><i></i>????????????</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th">
                                <label for="bo_link_level" class="label">?????? ??????</label>
                            </th>
                            <td>
                                <label class="select form-width-250px"><?php echo get_member_level_select('bo_link_level', 1, 10, $board['bo_link_level']) ?><i></i></label>
                            </td>
                            <td class="table-chk-td">
                                <div class="inline-group">
                                    <label for="chk_grp_link_level" class="checkbox"><input type="checkbox" name="chk_grp_link_level" value="1" id="chk_grp_link_level"><i></i>????????????</label>
                                    <label for="chk_all_link_level" class="checkbox"><input type="checkbox" name="chk_all_link_level" value="1" id="chk_all_link_level"><i></i>????????????</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th">
                                <label for="bo_upload_level" class="label">????????? ??????</label>
                            </th>
                            <td>
                                <label class="select form-width-250px"><?php echo get_member_level_select('bo_upload_level', 1, 10, $board['bo_upload_level']) ?><i></i></label>
                            </td>
                            <td class="table-chk-td">
                                <div class="inline-group">
                                    <label for="chk_grp_upload_level" class="checkbox"><input type="checkbox" name="chk_grp_upload_level" value="1" id="chk_grp_upload_level"><i></i>????????????</label>
                                    <label for="chk_all_upload_level" class="checkbox"><input type="checkbox" name="chk_all_upload_level" value="1" id="chk_all_upload_level"><i></i>????????????</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th">
                                <label for="bo_download_level" class="label">???????????? ??????</label>
                            </th>
                            <td>
                                <label class="select form-width-250px"><?php echo get_member_level_select('bo_download_level', 1, 10, $board['bo_download_level']) ?><i></i></label>
                            </td>
                            <td class="table-chk-td">
                                <div class="inline-group">
                                    <label for="chk_grp_download_level" class="checkbox"><input type="checkbox" name="chk_grp_download_level" value="1" id="chk_grp_download_level"><i></i>????????????</label>
                                    <label for="chk_all_download_level" class="checkbox"><input type="checkbox" name="chk_all_download_level" value="1" id="chk_all_download_level"><i></i>????????????</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th">
                                <label for="bo_html_level" class="label">HTML ?????? ??????</label>
                            </th>
                            <td>
                                <label class="select form-width-250px"><?php echo get_member_level_select('bo_html_level', 1, 10, $board['bo_html_level']) ?><i></i></label>
                            </td>
                            <td class="table-chk-td">
                                <div class="inline-group">
                                    <label for="chk_grp_html_level" class="checkbox"><input type="checkbox" name="chk_grp_html_level" value="1" id="chk_grp_html_level"><i></i>????????????</label>
                                    <label for="chk_all_html_level" class="checkbox"><input type="checkbox" name="chk_all_html_level" value="1" id="chk_all_html_level"><i></i>????????????</label>
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

    <?php echo $frm_submit; ?>

    <div id="anc_bo_function">
        <div class="pg-anchor">
        <?php echo adm_pg_anchor('anc_bo_function'); ?>
        </div>
        <div class="adm-table-form-wrap margin-bottom-30">
            <header><strong><i class="fas fa-caret-right"></i> ????????? ?????? ??????</strong></header>
            <div class="table-list-eb">
                <?php if (!G5_IS_MOBILE) { ?>
                <div class="table-responsive">
                <?php } ?>
                <table class="table">
                    <tbody>
                        <tr>
                            <th class="table-form-th">
                                <label for="bo_count_modify" class="label">?????? ?????? ??????<strong class="sound_only">??????</strong></label>
                            </th>
                            <td>
                                <label class="input form-width-250px">
                                    <i class="icon-append">???</i>
                                    <input type="text" name="bo_count_modify" id="bo_count_modify" value="<?php echo $board['bo_count_modify'] ?>" class="text-right" required>
                                </label>
                                <div class="note"><strong>Note:</strong> ????????? ?????? ?????? ??? ???????????? ????????? ????????? ??? ????????????. 0?????? ??????????????? ?????? ?????? ???????????? ????????? ???????????????.</div>
                            </td>
                            <td class="table-chk-td">
                                <div class="inline-group">
                                    <label for="chk_grp_count_modify" class="checkbox"><input type="checkbox" name="chk_grp_count_modify" value="1" id="chk_grp_count_modify"><i></i>????????????</label>
                                    <label for="chk_all_count_modify" class="checkbox"><input type="checkbox" name="chk_all_count_modify" value="1" id="chk_all_count_modify"><i></i>????????????</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th">
                                <label for="bo_count_delete" class="label">?????? ?????? ??????<strong class="sound_only">??????</strong></label>
                            </th>
                            <td>
                                <label class="input form-width-250px">
                                    <i class="icon-append">???</i>
                                    <input type="text" name="bo_count_delete" id="bo_count_delete" value="<?php echo $board['bo_count_delete'] ?>" class="text-right" required>
                                </label>
                                <div class="note"><strong>Note:</strong> ????????? ?????? ?????? ??? ???????????? ????????? ????????? ??? ????????????. ?????? ?????? ?????? ???????????? 1 ?????? ??????????????? ?????????.</div>
                            </td>
                            <td class="table-chk-td">
                                <div class="inline-group">
                                    <label for="chk_grp_count_delete" class="checkbox"><input type="checkbox" name="chk_grp_count_delete" value="1" id="chk_grp_count_delete"><i></i>????????????</label>
                                    <label for="chk_all_count_delete" class="checkbox"><input type="checkbox" name="chk_all_count_delete" value="1" id="chk_all_count_delete"><i></i>????????????</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th">
                                <label for="bo_use_sideview" class="label">????????? ????????????</label>
                            </th>
                            <td>
                                <label class="checkbox" style="width:80px">
                                    <input type="checkbox" name="bo_use_sideview" id="bo_count_delete" value="1" <?php echo $board['bo_use_sideview']?'checked':''; ?>><i></i> ??????
                                </label>
                                <div class="note"><strong>Note:</strong> ????????? ????????? ????????? ????????? ??????</div>
                            </td>
                            <td class="table-chk-td">
                                <div class="inline-group">
                                    <label for="chk_grp_use_sideview" class="checkbox"><input type="checkbox" name="chk_grp_use_sideview" value="1" id="chk_grp_use_sideview"><i></i>????????????</label>
                                    <label for="chk_all_use_sideview" class="checkbox"><input type="checkbox" name="chk_all_use_sideview" value="1" id="chk_all_use_sideview"><i></i>????????????</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th">
                                <label for="bo_use_secret" class="label">????????? ??????</label>
                            </th>
                            <td>
                                <label class="select form-width-250px">
                                    <select id="bo_use_secret" name="bo_use_secret">
                                        <?php echo option_selected(0, $board['bo_use_secret'], "???????????? ??????"); ?>
                                        <?php echo option_selected(1, $board['bo_use_secret'], "????????????"); ?>
                                        <?php echo option_selected(2, $board['bo_use_secret'], "?????????"); ?>
                                    </select><i></i>
                                </label>
                                <div class="note"><strong>Note:</strong> "????????????"??? ???????????? ????????? ????????? ???????????????. "?????????"??? ???????????? ???????????? ???????????? ???????????????. (???????????? ??????????????? ???????????????.) ????????? ?????? ???????????? ?????? ??? ????????????.</div>
                            </td>
                            <td class="table-chk-td">
                                <div class="inline-group">
                                    <label for="chk_grp_use_secret" class="checkbox"><input type="checkbox" name="chk_grp_use_secret" value="1" id="chk_grp_use_secret"><i></i>????????????</label>
                                    <label for="chk_all_use_secret" class="checkbox"><input type="checkbox" name="chk_all_use_secret" value="1" id="chk_all_use_secret"><i></i>????????????</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th">
                                <label for="bo_use_dhtml_editor" class="label">DHTML ????????? ??????</label>
                            </th>
                            <td>
                                <label class="checkbox" style="width:80px">
                                    <input type="checkbox" name="bo_use_dhtml_editor" value="1" <?php echo $board['bo_use_dhtml_editor']?'checked':''; ?> id="bo_use_dhtml_editor"><i></i> ??????
                                </label>
                                <div class="note"><strong>Note:</strong> ???????????? ????????? DHTML ????????? ???????????? ????????? ????????? ???????????????. ????????? ?????? ???????????? ?????? ??? ????????????.</div>
                            </td>
                            <td class="table-chk-td">
                                <div class="inline-group">
                                    <label for="chk_grp_use_dhtml_editor" class="checkbox"><input type="checkbox" name="chk_grp_use_dhtml_editor" value="1" id="chk_grp_use_dhtml_editor"><i></i>????????????</label>
                                    <label for="chk_all_use_dhtml_editor" class="checkbox"><input type="checkbox" name="chk_all_use_dhtml_editor" value="1" id="chk_all_use_dhtml_editor"><i></i>????????????</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th">
                                <label for="bo_select_editor" class="label">????????? ????????? ??????</label>
                            </th>
                            <td>
                                <label class="select form-width-250px">
                                    <select id="bo_select_editor" name="bo_select_editor">
                                    <?php
                                    $arr = get_skin_dir('', G5_EDITOR_PATH);
                                    for ($i=0; $i<count((array)$arr); $i++) {
                                        if ($i == 0) echo "<option value=\"\">????????????????????? ????????? ??????</option>";
                                        echo "<option value=\"".$arr[$i]."\"".get_selected($board['bo_select_editor'], $arr[$i]).">".$arr[$i]."</option>\n";
                                    }
                                    ?>
                                    </select><i></i>
                                </label>
                                <div class="note"><strong>Note:</strong> ???????????? ????????? ???????????? ???????????????. ????????? ?????? ???????????? ?????? ??? ????????????.</div>
                            </td>
                            <td class="table-chk-td">
                                <div class="inline-group">
                                    <label for="chk_grp_select_editor" class="checkbox"><input type="checkbox" name="chk_grp_select_editor" value="1" id="chk_grp_select_editor"><i></i>????????????</label>
                                    <label for="chk_all_select_editor" class="checkbox"><input type="checkbox" name="chk_all_select_editor" value="1" id="chk_all_select_editor"><i></i>????????????</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th">
                                <label for="bo_use_rss_view" class="label">RSS ????????? ??????</label>
                            </th>
                            <td>
                                <label class="checkbox" style="width:80px">
                                    <input type="checkbox" name="bo_use_rss_view" value="1" <?php echo $board['bo_use_rss_view']?'checked':''; ?> id="bo_use_rss_view"><i></i> ??????
                                </label>
                                <div class="note"><strong>Note:</strong> ????????? ???????????? ???????????? RSS ????????? ????????? ????????? ???????????? RSS ????????? ?????????.</div>
                            </td>
                            <td class="table-chk-td">
                                <div class="inline-group">
                                    <label for="chk_grp_use_rss_view" class="checkbox"><input type="checkbox" name="chk_grp_use_rss_view" value="1" id="chk_grp_use_rss_view"><i></i>????????????</label>
                                    <label for="chk_all_use_rss_view" class="checkbox"><input type="checkbox" name="chk_all_use_rss_view" value="1" id="chk_all_use_rss_view"><i></i>????????????</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th">
                                <label for="bo_use_good" class="label">?????? ??????</label>
                            </th>
                            <td>
                                <label class="checkbox" style="width:80px">
                                    <input type="checkbox" name="bo_use_good" value="1" <?php echo $board['bo_use_good']?'checked':''; ?> id="bo_use_good"><i></i> ??????
                                </label>
                                <div class="note"><strong>Note:</strong> ???????????? "??????" ????????? ????????? ??? ????????????.</div>
                            </td>
                            <td class="table-chk-td">
                                <div class="inline-group">
                                    <label for="chk_grp_use_good" class="checkbox"><input type="checkbox" name="chk_grp_use_good" value="1" id="chk_grp_use_good"><i></i>????????????</label>
                                    <label for="chk_all_use_good" class="checkbox"><input type="checkbox" name="chk_all_use_good" value="1" id="chk_all_use_good"><i></i>????????????</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th">
                                <label for="bo_use_nogood" class="label">????????? ??????</label>
                            </th>
                            <td>
                                <label class="checkbox" style="width:80px">
                                    <input type="checkbox" name="bo_use_nogood" value="1" <?php echo $board['bo_use_nogood']?'checked':''; ?> id="bo_use_nogood"><i></i> ??????
                                </label>
                                <div class="note"><strong>Note:</strong> ???????????? "?????????" ????????? ????????? ??? ????????????.</div>
                            </td>
                            <td class="table-chk-td">
                                <div class="inline-group">
                                    <label for="chk_grp_use_nogood" class="checkbox"><input type="checkbox" name="chk_grp_use_nogood" value="1" id="chk_grp_use_nogood"><i></i>????????????</label>
                                    <label for="chk_all_use_nogood" class="checkbox"><input type="checkbox" name="chk_all_use_nogood" value="1" id="chk_all_use_nogood"><i></i>????????????</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th">
                                <label for="bo_use_name" class="label">??????(??????) ??????</label>
                            </th>
                            <td>
                                <label class="checkbox" style="width:80px">
                                    <input type="checkbox" name="bo_use_name" value="1" <?php echo $board['bo_use_name']?'checked':''; ?> id="bo_use_name"><i></i> ??????
                                </label>
                                <div class="note"><strong>Note:</strong> ???????????? ????????? ?????? ????????? ???????????????.</div>
                            </td>
                            <td class="table-chk-td">
                                <div class="inline-group">
                                    <label for="chk_grp_use_name" class="checkbox"><input type="checkbox" name="chk_grp_use_name" value="1" id="chk_grp_use_name"><i></i>????????????</label>
                                    <label for="chk_all_use_name" class="checkbox"><input type="checkbox" name="chk_all_use_name" value="1" id="chk_all_use_name"><i></i>????????????</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th">
                                <label for="bo_use_signature" class="label">??????????????? ??????</label>
                            </th>
                            <td>
                                <label class="checkbox" style="width:80px">
                                    <input type="checkbox" name="bo_use_signature" value="1" <?php echo $board['bo_use_signature']?'checked':''; ?> id="bo_use_signature"><i></i> ??????
                                </label>
                                <div class="note"><strong>Note:</strong> ???????????? ??????????????? ??????????????? ???????????????.</div>
                            </td>
                            <td class="table-chk-td">
                                <div class="inline-group">
                                    <label for="chk_grp_use_signature" class="checkbox"><input type="checkbox" name="chk_grp_use_signature" value="1" id="chk_grp_use_signature"><i></i>????????????</label>
                                    <label for="chk_all_use_signature" class="checkbox"><input type="checkbox" name="chk_all_use_signature" value="1" id="chk_all_use_signature"><i></i>????????????</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th">
                                <label for="bo_use_ip_view" class="label">IP ????????? ??????</label>
                            </th>
                            <td>
                                <label class="checkbox" style="width:80px">
                                    <input type="checkbox" name="bo_use_ip_view" value="1" <?php echo $board['bo_use_ip_view']?'checked':''; ?> id="bo_use_ip_view"><i></i> ??????
                                </label>
                                <div class="note"><strong>Note:</strong> ????????? IP??? ??????????????? ???????????????.</div>
                            </td>
                            <td class="table-chk-td">
                                <div class="inline-group">
                                    <label for="chk_grp_use_ip_view" class="checkbox"><input type="checkbox" name="chk_grp_use_ip_view" value="1" id="chk_grp_use_ip_view"><i></i>????????????</label>
                                    <label for="chk_all_use_ip_view" class="checkbox"><input type="checkbox" name="chk_all_use_ip_view" value="1" id="chk_all_use_ip_view"><i></i>????????????</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th">
                                <label for="bo_use_list_content" class="label">???????????? ?????? ??????</label>
                            </th>
                            <td>
                                <label class="checkbox" style="width:80px">
                                    <input type="checkbox" name="bo_use_list_content" value="1" <?php echo $board['bo_use_list_content']?'checked':''; ?> id="bo_use_list_content"><i></i> ??????
                                </label>
                                <div class="note"><strong>Note:</strong> ???????????? ????????? ???????????? ????????? ???????????? ??? ????????? ???????????? ???????????????. ????????? ???????????? ????????????. (????????? ????????? ????????? ??? ????????????.)</div>
                            </td>
                            <td class="table-chk-td">
                                <div class="inline-group">
                                    <label for="chk_grp_use_list_content" class="checkbox"><input type="checkbox" name="chk_grp_use_list_content" value="1" id="chk_grp_use_list_content"><i></i>????????????</label>
                                    <label for="chk_all_use_list_content" class="checkbox"><input type="checkbox" name="chk_all_use_list_content" value="1" id="chk_all_use_list_content"><i></i>????????????</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th">
                                <label for="bo_use_list_file" class="label">???????????? ?????? ??????</label>
                            </th>
                            <td>
                                <label class="checkbox" style="width:80px">
                                    <input type="checkbox" name="bo_use_list_file" value="1" <?php echo $board['bo_use_list_file']?'checked':''; ?> id="bo_use_list_file"><i></i> ??????
                                </label>
                                <div class="note"><strong>Note:</strong> ???????????? ????????? ??????????????? ???????????? ??? ????????? ???????????? ???????????????. ????????? ???????????? ????????????. (????????? ????????? ????????? ??? ????????????.)</div>
                            </td>
                            <td class="table-chk-td">
                                <div class="inline-group">
                                    <label for="chk_grp_use_list_file" class="checkbox"><input type="checkbox" name="chk_grp_use_list_file" value="1" id="chk_grp_use_list_file"><i></i>????????????</label>
                                    <label for="chk_all_use_list_file" class="checkbox"><input type="checkbox" name="chk_all_use_list_file" value="1" id="chk_all_use_list_file"><i></i>????????????</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th">
                                <label for="bo_use_list_view" class="label">????????????????????? ??????</label>
                            </th>
                            <td>
                                <label class="checkbox" style="width:80px">
                                    <input type="checkbox" name="bo_use_list_view" value="1" <?php echo $board['bo_use_list_view']?'checked':''; ?> id="bo_use_list_view"><i></i> ??????
                                </label>
                                <div class="note"><strong>Note:</strong> ????????? ?????? ??????????????? ????????? ??????????????? ???????????? ???????????????.</div>
                            </td>
                            <td class="table-chk-td">
                                <div class="inline-group">
                                    <label for="chk_grp_use_list_view" class="checkbox"><input type="checkbox" name="chk_grp_use_list_view" value="1" id="chk_grp_use_list_view"><i></i>????????????</label>
                                    <label for="chk_all_use_list_view" class="checkbox"><input type="checkbox" name="chk_all_use_list_view" value="1" id="chk_all_use_list_view"><i></i>????????????</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th">
                                <label for="bo_use_email" class="label">???????????? ??????</label>
                            </th>
                            <td>
                                <label class="checkbox" style="width:80px">
                                    <input type="checkbox" name="bo_use_email" value="1" <?php echo $board['bo_use_email']?'checked':''; ?> id="bo_use_email"><i></i> ??????
                                </label>
                                <div class="note"><strong>Note:</strong> ???????????? ????????? ??????, ???????????? ????????????????????? ?????? ????????? ?????? ??? ??????????????? ????????? ???????????????.</div>
                            </td>
                            <td class="table-chk-td">
                                <div class="inline-group">
                                    <label for="chk_grp_use_email" class="checkbox"><input type="checkbox" name="chk_grp_use_email" value="1" id="chk_grp_use_email"><i></i>????????????</label>
                                    <label for="chk_all_use_email" class="checkbox"><input type="checkbox" name="chk_all_use_email" value="1" id="chk_all_use_email"><i></i>????????????</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th">
                                <label for="bo_use_cert" class="label">???????????? ??????</label>
                            </th>
                            <td>
                                <label for="bo_use_cert" class="select form-width-250px">
                                    <select id="bo_use_cert" name="bo_use_cert">
                                        <?php
                                        echo option_selected("",  $board['bo_use_cert'], "????????????");
                                        if ($config['cf_cert_use']) {
                                            echo option_selected("cert",  $board['bo_use_cert'], "??????????????? ????????????");
                                            echo option_selected("adult", $board['bo_use_cert'], "??????????????? ???????????????");
                                            echo option_selected("hp-cert",  $board['bo_use_cert'], "????????? ??????????????? ????????????");
                                            echo option_selected("hp-adult", $board['bo_use_cert'], "????????? ??????????????? ???????????????");
                                        }
                                        ?>
                                    </select><i></i>
                                </label>
                                <div class="note"><strong>Note:</strong> ???????????? ????????? ?????? ???????????? ?????? ??? ??? ????????? ?????????.</div>
                            </td>
                            <td class="table-chk-td">
                                <div class="inline-group">
                                    <label for="chk_grp_use_cert" class="checkbox"><input type="checkbox" name="chk_grp_use_cert" value="1" id="chk_grp_use_cert"><i></i>????????????</label>
                                    <label for="chk_all_use_cert" class="checkbox"><input type="checkbox" name="chk_all_use_cert" value="1" id="chk_all_use_cert"><i></i>????????????</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th">
                                <label for="bo_upload_count" class="label">?????? ????????? ??????<strong class="sound_only">??????</strong></label>
                            </th>
                            <td>
                                <label class="input form-width-250px">
                                    <i class="icon-append">???</i>
                                    <input type="text" name="bo_upload_count" id="bo_upload_count" value="<?php echo $board['bo_upload_count'] ?>" class="text-right" required>
                                </label>
                                <div class="note"><strong>Note:</strong> ????????? ????????? ????????? ??? ??? ?????? ????????? ?????? ?????? (0 ??? ???????????? ???????????? ??????)</div>
                            </td>
                            <td class="table-chk-td">
                                <div class="inline-group">
                                    <label for="chk_grp_upload_count" class="checkbox"><input type="checkbox" name="chk_grp_upload_count" value="1" id="chk_grp_upload_count"><i></i>????????????</label>
                                    <label for="chk_all_upload_count" class="checkbox"><input type="checkbox" name="chk_all_upload_count" value="1" id="chk_all_upload_count"><i></i>????????????</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th">
                                <label for="bo_upload_size" class="label">?????? ????????? ??????<strong class="sound_only">??????</strong></label>
                            </th>
                            <td>
                                <label class="input form-width-250px">
                                    <i class="icon-append text-width">Byte</i>
                                    <input type="text" name="bo_upload_size" id="bo_upload_size" value="<?php echo $board['bo_upload_size'] ?>" class="text-right" required>
                                </label>
                                <div class="note"><strong>Note:</strong> ????????? ?????? ????????? ???????????? ???????????????.</div>
                            </td>
                            <td class="table-chk-td">
                                <div class="inline-group">
                                    <label for="chk_grp_upload_size" class="checkbox"><input type="checkbox" name="chk_grp_upload_size" value="1" id="chk_grp_upload_size"><i></i>????????????</label>
                                    <label for="chk_all_upload_size" class="checkbox"><input type="checkbox" name="chk_all_upload_size" value="1" id="chk_all_upload_size"><i></i>????????????</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th">
                                <label for="bo_use_file_content" class="label">?????? ?????? ??????</label>
                            </th>
                            <td>
                                <label class="checkbox" style="width:80px">
                                    <input type="checkbox" name="bo_use_file_content" value="1" <?php echo $board['bo_use_file_content']?'checked':''; ?> id="bo_use_file_content"><i></i> ??????
                                </label>
                                <div class="note"><strong>Note:</strong> ???????????? ??????????????? ????????? ??? ????????????.</div>
                            </td>
                            <td class="table-chk-td">
                                <div class="inline-group">
                                    <label for="chk_grp_use_file_content" class="checkbox"><input type="checkbox" name="chk_grp_use_file_content" value="1" id="chk_grp_use_file_content"><i></i>????????????</label>
                                    <label for="chk_all_use_file_content" class="checkbox"><input type="checkbox" name="chk_all_use_file_content" value="1" id="chk_all_use_file_content"><i></i>????????????</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th">
                                <label for="bo_write_min" class="label">?????? ?????? ??????</label>
                            </th>
                            <td>
                                <label class="input form-width-250px">
                                    <i class="icon-append text-width">??????</i>
                                    <input type="text" name="bo_write_min" id="bo_write_min" value="<?php echo $board['bo_write_min'] ?>" class="text-right">
                                </label>
                                <div class="note"><strong>Note:</strong> ??? ????????? ?????? ???????????? ??????. 0??? ??????????????? ???????????????, DHTML ????????? ??????????????? ???????????? ??????</div>
                            </td>
                            <td class="table-chk-td">
                                <div class="inline-group">
                                    <label for="chk_grp_write_min" class="checkbox"><input type="checkbox" name="chk_grp_write_min" value="1" id="chk_grp_write_min"><i></i>????????????</label>
                                    <label for="chk_all_write_min" class="checkbox"><input type="checkbox" name="chk_all_write_min" value="1" id="chk_all_write_min"><i></i>????????????</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th">
                                <label for="bo_write_max" class="label">?????? ?????? ??????</label>
                            </th>
                            <td>
                                <label class="input form-width-250px">
                                    <i class="icon-append text-width">??????</i>
                                    <input type="text" name="bo_write_max" id="bo_write_max" value="<?php echo $board['bo_write_max'] ?>" class="text-right">
                                </label>
                                <div class="note"><strong>Note:</strong> ??? ????????? ?????? ???????????? ??????. 0??? ??????????????? ???????????????, DHTML ????????? ??????????????? ???????????? ??????</div>
                            </td>
                            <td class="table-chk-td">
                                <div class="inline-group">
                                    <label for="chk_grp_write_max" class="checkbox"><input type="checkbox" name="chk_grp_write_max" value="1" id="chk_grp_write_max"><i></i>????????????</label>
                                    <label for="chk_all_write_max" class="checkbox"><input type="checkbox" name="chk_all_write_max" value="1" id="chk_all_write_max"><i></i>????????????</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th">
                                <label for="bo_comment_min" class="label">?????? ????????? ??????</label>
                            </th>
                            <td>
                                <label class="input form-width-250px">
                                    <i class="icon-append text-width">??????</i>
                                    <input type="text" name="bo_comment_min" id="bo_comment_min" value="<?php echo $board['bo_comment_min'] ?>" class="text-right">
                                </label>
                                <div class="note"><strong>Note:</strong> ?????? ????????? ?????? ???????????? ??????. 0??? ???????????? ???????????? ??????</div>
                            </td>
                            <td class="table-chk-td">
                                <div class="inline-group">
                                    <label for="chk_grp_comment_min" class="checkbox"><input type="checkbox" name="chk_grp_comment_min" value="1" id="chk_grp_comment_min"><i></i>????????????</label>
                                    <label for="chk_all_comment_min" class="checkbox"><input type="checkbox" name="chk_all_comment_min" value="1" id="chk_all_comment_min"><i></i>????????????</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th">
                                <label for="bo_comment_max" class="label">?????? ????????? ??????</label>
                            </th>
                            <td>
                                <label class="input form-width-250px">
                                    <i class="icon-append text-width">??????</i>
                                    <input type="text" name="bo_comment_max" id="bo_comment_max" value="<?php echo $board['bo_comment_max'] ?>" class="text-right">
                                </label>
                                <div class="note"><strong>Note:</strong> ?????? ????????? ?????? ???????????? ??????. 0??? ???????????? ???????????? ??????</div>
                            </td>
                            <td class="table-chk-td">
                                <div class="inline-group">
                                    <label for="chk_grp_comment_max" class="checkbox"><input type="checkbox" name="chk_grp_comment_max" value="1" id="chk_grp_comment_max"><i></i>????????????</label>
                                    <label for="chk_all_comment_max" class="checkbox"><input type="checkbox" name="chk_all_comment_max" value="1" id="chk_all_comment_max"><i></i>????????????</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th">
                                <label for="bo_use_sns" class="label">SNS ??????</label>
                            </th>
                            <td>
                                <label class="checkbox" style="width:80px">
                                    <input type="checkbox" name="bo_use_sns" value="1" <?php echo $board['bo_use_sns']?'checked':''; ?> id="bo_use_sns"><i></i> ??????
                                </label>
                                <div class="note"><strong>Note:</strong> ????????? ??????????????? ???????????????????????????(SNS)??? ?????? ???????????? ????????? ????????? ???????????? ????????????.<br>????????????????????? SNS ????????? ????????? ????????? ???????????????.</div>
                            </td>
                            <td class="table-chk-td">
                                <div class="inline-group">
                                    <label for="chk_grp_use_sns" class="checkbox"><input type="checkbox" name="chk_grp_use_sns" value="1" id="chk_grp_use_sns"><i></i>????????????</label>
                                    <label for="chk_all_use_sns" class="checkbox"><input type="checkbox" name="chk_all_use_sns" value="1" id="chk_all_use_sns"><i></i>????????????</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th">
                                <label for="bo_use_search" class="label">?????? ?????? ??????</label>
                            </th>
                            <td>
                                <label class="checkbox" style="width:80px">
                                    <input type="checkbox" name="bo_use_search" value="1" <?php echo $board['bo_use_search']?'checked':''; ?> id="bo_use_search"><i></i> ??????
                                </label>
                                <div class="note"><strong>Note:</strong> ?????????????????? ??? ???????????? ?????????????????? ?????? ????????? ???????????????.</div>
                            </td>
                            <td class="table-chk-td">
                                <div class="inline-group">
                                    <label for="chk_grp_use_search" class="checkbox"><input type="checkbox" name="chk_grp_use_search" value="1" id="chk_grp_use_search"><i></i>????????????</label>
                                    <label for="chk_all_use_search" class="checkbox"><input type="checkbox" name="chk_all_use_search" value="1" id="chk_all_use_search"><i></i>????????????</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th">
                                <label for="bo_order" class="label">?????? ??????</label>
                            </th>
                            <td>
                                <label class="input form-width-250px">
                                    <i class="icon-append fas fa-sort-numeric-down"></i>
                                    <input type="text" name="bo_order" id="bo_order" value="<?php echo $board['bo_order'] ?>" class="text-right">
                                </label>
                                <div class="note"><strong>Note:</strong> ????????? ?????? ????????? ?????? ????????? ????????? ?????? ???????????????.</div>
                            </td>
                            <td class="table-chk-td">
                                <div class="inline-group">
                                    <label for="chk_grp_order" class="checkbox"><input type="checkbox" name="chk_grp_order" value="1" id="chk_grp_order"><i></i>????????????</label>
                                    <label for="chk_all_order" class="checkbox"><input type="checkbox" name="chk_all_order" value="1" id="chk_all_order"><i></i>????????????</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th">
                                <label for="bo_use_captcha" class="label">?????? ??????</label>
                            </th>
                            <td>
                                <label class="checkbox" style="width:80px">
                                    <input type="checkbox" name="bo_use_captcha" value="1" <?php echo $board['bo_use_captcha']?'checked':''; ?> id="bo_use_captcha"><i></i> ??????
                                </label>
                                <div class="note"><strong>Note:</strong> ???????????? ??? ????????? ????????? ????????? ???????????????.( ?????? + ????????? ?????? )<br>??? ???????????? ?????????????????? ????????? ???????????????.</div>
                            </td>
                            <td class="table-chk-td">
                                <div class="inline-group">
                                    <label for="chk_grp_use_captcha" class="checkbox"><input type="checkbox" name="chk_grp_use_captcha" value="1" id="chk_grp_use_captcha"><i></i>????????????</label>
                                    <label for="chk_all_use_captcha" class="checkbox"><input type="checkbox" name="chk_all_use_captcha" value="1" id="chk_all_use_captcha"><i></i>????????????</label>
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

    <?php echo $frm_submit; ?>

    <div id="anc_bo_design">
        <div class="pg-anchor">
        <?php echo adm_pg_anchor('anc_bo_design'); ?>
        </div>
        <div class="adm-table-form-wrap margin-bottom-30">
            <header><strong><i class="fas fa-caret-right"></i> ????????? ?????????/??????</strong></header>
            <div class="table-list-eb">
                <?php if (!G5_IS_MOBILE) { ?>
                <div class="table-responsive">
                <?php } ?>
                <table class="table">
                    <tbody>
                        <tr>
                            <th class="table-form-th">
                                <label for="bo_skin" class="label">?????? ????????????<strong class="sound_only">??????</strong></label>
                            </th>
                            <td>
                                <label class="select form-width-250px">
                                    <?php echo get_skin_select('board', 'bo_skin', 'bo_skin', $board['bo_skin'], 'required'); ?><i></i>
                                </label>
                                <div class="note"><strong>Note:</strong> ???????????? ????????? ????????? ???????????????.<br>???????????? > ????????????????????? ???????????? ????????? ?????? ????????? ??? ??????, ????????? ?????????.</div>
                            </td>
                            <td class="table-chk-td">
                                <div class="inline-group">
                                    <label for="chk_grp_skin" class="checkbox"><input type="checkbox" name="chk_grp_skin" value="1" id="chk_grp_skin"><i></i>????????????</label>
                                    <label for="chk_all_skin" class="checkbox"><input type="checkbox" name="chk_all_skin" value="1" id="chk_all_skin"><i></i>????????????</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th">
                                <label for="bo_mobile_skin" class="label">????????? ?????? ????????????<strong class="sound_only">??????</strong></label>
                            </th>
                            <td>
                                <label class="select form-width-250px">
                                    <?php echo get_mobile_skin_select('board', 'bo_mobile_skin', 'bo_mobile_skin', $board['bo_mobile_skin'], 'required'); ?><i></i>
                                </label>
                                <div class="note"><strong>Note:</strong> ???????????? ????????? ????????? ???????????????.</div>
                            </td>
                            <td class="table-chk-td">
                                <div class="inline-group">
                                    <label for="chk_grp_mobile_skin" class="checkbox"><input type="checkbox" name="chk_grp_mobile_skin" value="1" id="chk_grp_mobile_skin"><i></i>????????????</label>
                                    <label for="chk_all_mobile_skin" class="checkbox"><input type="checkbox" name="chk_all_mobile_skin" value="1" id="chk_all_mobile_skin"><i></i>????????????</label>
                                </div>
                            </td>
                        </tr>
                        <?php if ($is_admin == 'super') { // ?????????????????? ???????????? ?????? ?????? ?>
                        <tr>
                            <th class="table-form-th">
                                <label for="bo_include_head" class="label">?????? ?????? ??????</label>
                            </th>
                            <td>
                                <label class="input form-width-250px">
                                    <input type="text" name="bo_include_head" id="bo_include_head" value="<?php echo get_sanitize_input($board['bo_include_head']); ?>">
                                </label>
                            </td>
                            <td class="table-chk-td">
                                <div class="inline-group">
                                    <label for="chk_grp_include_head" class="checkbox"><input type="checkbox" name="chk_grp_include_head" value="1" id="chk_grp_include_head"><i></i>????????????</label>
                                    <label for="chk_all_include_head" class="checkbox"><input type="checkbox" name="chk_all_include_head" value="1" id="chk_all_include_head"><i></i>????????????</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th">
                                <label for="bo_include_tail" class="label">?????? ?????? ??????</label>
                            </th>
                            <td>
                                <label class="input form-width-250px">
                                    <input type="text" name="bo_include_tail" id="bo_include_tail" value="<?php echo get_sanitize_input($board['bo_include_tail']); ?>">
                                </label>
                            </td>
                            <td class="table-chk-td">
                                <div class="inline-group">
                                    <label for="chk_grp_include_tail" class="checkbox"><input type="checkbox" name="chk_grp_include_tail" value="1" id="chk_grp_include_tail"><i></i>????????????</label>
                                    <label for="chk_all_include_tail" class="checkbox"><input type="checkbox" name="chk_all_include_tail" value="1" id="chk_all_include_tail"><i></i>????????????</label>
                                </div>
                            </td>
                        </tr>
                        <tr id="admin_captcha_box" style="display:none;">
                            <th class="table-form-th">
                                <label for="bo_include_tail" class="label">??????????????????</label>
                            </th>
                            <td colspan="2">
                                <?php
                                include_once(G5_CAPTCHA_PATH.'/captcha.lib.php');
                                $captcha_html = captcha_html();
                                $captcha_js   = chk_captcha_js();
                                echo $captcha_html;
                                ?>
                                <script>
                                jQuery("#captcha_key").removeAttr("required").removeClass("required");
                                </script>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th">
                                <label for="bo_content_head" class="label">?????? ??????</label>
                            </th>
                            <td>
                                <div class="textarea">
                                    <?php echo editor_html("bo_content_head", get_text(html_purifier($board['bo_content_head']), 0)); ?>
                                </div>
                            </td>
                            <td class="table-chk-td">
                                <div class="inline-group">
                                    <label for="chk_grp_content_head" class="checkbox"><input type="checkbox" name="chk_grp_content_head" value="1" id="chk_grp_content_head"><i></i>????????????</label>
                                    <label for="chk_all_content_head" class="checkbox"><input type="checkbox" name="chk_all_content_head" value="1" id="chk_all_content_head"><i></i>????????????</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th">
                                <label for="bo_content_tail" class="label">?????? ??????</label>
                            </th>
                            <td>
                                <div class="textarea">
                                    <?php echo editor_html("bo_content_tail", get_text(html_purifier($board['bo_content_tail']), 0)); ?>
                                </div>
                            </td>
                            <td class="table-chk-td">
                                <div class="inline-group">
                                    <label for="chk_grp_content_tail" class="checkbox"><input type="checkbox" name="chk_grp_content_tail" value="1" id="chk_grp_content_tail"><i></i>????????????</label>
                                    <label for="chk_all_content_tail" class="checkbox"><input type="checkbox" name="chk_all_content_tail" value="1" id="chk_all_content_tail"><i></i>????????????</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th">
                                <label for="bo_mobile_content_head" class="label">????????? ?????? ??????</label>
                            </th>
                            <td>
                                <div class="textarea">
                                    <?php echo editor_html("bo_mobile_content_head", get_text(html_purifier($board['bo_mobile_content_head']), 0)); ?>
                                </div>
                            </td>
                            <td class="table-chk-td">
                                <div class="inline-group">
                                    <label for="chk_grp_mobile_content_head" class="checkbox"><input type="checkbox" name="chk_grp_mobile_content_head" value="1" id="chk_grp_mobile_content_head"><i></i>????????????</label>
                                    <label for="chk_all_mobile_content_head" class="checkbox"><input type="checkbox" name="chk_all_mobile_content_head" value="1" id="chk_all_mobile_content_head"><i></i>????????????</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th">
                                <label for="bo_mobile_content_tail" class="label">????????? ?????? ??????</label>
                            </th>
                            <td>
                                <div class="textarea">
                                    <?php echo editor_html("bo_mobile_content_tail", get_text(html_purifier($board['bo_mobile_content_tail']), 0)); ?>
                                </div>
                            </td>
                            <td class="table-chk-td">
                                <div class="inline-group">
                                    <label for="chk_grp_mobile_content_tail" class="checkbox"><input type="checkbox" name="chk_grp_mobile_content_tail" value="1" id="chk_grp_mobile_content_tail"><i></i>????????????</label>
                                    <label for="chk_all_mobile_content_tail" class="checkbox"><input type="checkbox" name="chk_all_mobile_content_tail" value="1" id="chk_all_mobile_content_tail"><i></i>????????????</label>
                                </div>
                            </td>
                        </tr>
                        <?php } //end if $is_admin === 'super' ?>
                        <tr>
                            <th class="table-form-th">
                                <label for="bo_insert_content" class="label">????????? ?????? ??????</label>
                            </th>
                            <td>
                                <label class="textarea">
                                    <textarea id="bo_insert_content" name="bo_insert_content" rows="5"><?php echo html_purifier($board['bo_insert_content']); ?></textarea>
                                </label>
                            </td>
                            <td class="table-chk-td">
                                <div class="inline-group">
                                    <label for="chk_grp_insert_content" class="checkbox"><input type="checkbox" name="chk_grp_insert_content" value="1" id="chk_grp_insert_content"><i></i>????????????</label>
                                    <label for="chk_all_insert_content" class="checkbox"><input type="checkbox" name="chk_all_insert_content" value="1" id="chk_all_insert_content"><i></i>????????????</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th">
                                <label for="bo_subject_len" class="label">?????? ??????<strong class="sound_only">??????</strong></label>
                            </th>
                            <td>
                                <label class="input form-width-250px">
                                    <i class="icon-append text-width">??????</i>
                                    <input type="text" name="bo_subject_len" id="bo_subject_len" value="<?php echo $board['bo_subject_len'] ?>" class="text-right" required>
                                </label>
                                <div class="note"><strong>Note:</strong> ??????????????? ?????? ?????????. ????????? ?????? ??? ??? ??????</div>
                            </td>
                            <td class="table-chk-td">
                                <div class="inline-group">
                                    <label for="chk_grp_subject_len" class="checkbox"><input type="checkbox" name="chk_grp_subject_len" value="1" id="chk_grp_subject_len"><i></i>????????????</label>
                                    <label for="chk_all_subject_len" class="checkbox"><input type="checkbox" name="chk_all_subject_len" value="1" id="chk_all_subject_len"><i></i>????????????</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th">
                                <label for="bo_mobile_subject_len" class="label">????????? ?????? ??????<strong class="sound_only">??????</strong></label>
                            </th>
                            <td>
                                <label class="input form-width-250px">
                                    <i class="icon-append text-width">??????</i>
                                    <input type="text" name="bo_mobile_subject_len" id="bo_mobile_subject_len" value="<?php echo $board['bo_mobile_subject_len'] ?>" class="text-right" required>
                                </label>
                                <div class="note"><strong>Note:</strong> ??????????????? ?????? ?????????. ????????? ?????? ??? ??? ??????</div>
                            </td>
                            <td class="table-chk-td">
                                <div class="inline-group">
                                    <label for="chk_grp_mobile_subject_len" class="checkbox"><input type="checkbox" name="chk_grp_mobile_subject_len" value="1" id="chk_grp_mobile_subject_len"><i></i>????????????</label>
                                    <label for="chk_all_mobile_subject_len" class="checkbox"><input type="checkbox" name="chk_all_mobile_subject_len" value="1" id="chk_all_mobile_subject_len"><i></i>????????????</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th">
                                <label for="bo_page_rows" class="label">???????????? ?????? ???<strong class="sound_only">??????</strong></label>
                            </th>
                            <td>
                                <label class="input form-width-250px">
                                    <i class="icon-append">???</i>
                                    <input type="text" name="bo_page_rows" id="bo_page_rows" value="<?php echo $board['bo_page_rows'] ?>" class="text-right" required>
                                </label>
                                <div class="note"><strong>Note:</strong> ??? ???????????? ????????? ????????? ??????</div>
                            </td>
                            <td class="table-chk-td">
                                <div class="inline-group">
                                    <label for="chk_grp_page_rows" class="checkbox"><input type="checkbox" name="chk_grp_page_rows" value="1" id="chk_grp_page_rows"><i></i>????????????</label>
                                    <label for="chk_all_page_rows" class="checkbox"><input type="checkbox" name="chk_all_page_rows" value="1" id="chk_all_page_rows"><i></i>????????????</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th">
                                <label for="bo_mobile_page_rows" class="label">????????? ???????????? ?????? ???<strong class="sound_only">??????</strong></label>
                            </th>
                            <td>
                                <label class="input form-width-250px">
                                    <i class="icon-append">???</i>
                                    <input type="text" name="bo_mobile_page_rows" id="bo_mobile_page_rows" value="<?php echo $board['bo_mobile_page_rows'] ?>" class="text-right" required>
                                </label>
                                <div class="note"><strong>Note:</strong> ??? ???????????? ????????? ????????? ??????</div>
                            </td>
                            <td class="table-chk-td">
                                <div class="inline-group">
                                    <label for="chk_grp_mobile_page_rows" class="checkbox"><input type="checkbox" name="chk_grp_mobile_page_rows" value="1" id="chk_grp_mobile_page_rows"><i></i>????????????</label>
                                    <label for="chk_all_mobile_page_rows" class="checkbox"><input type="checkbox" name="chk_all_mobile_page_rows" value="1" id="chk_all_mobile_page_rows"><i></i>????????????</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th">
                                <label for="bo_gallery_cols" class="label">????????? ????????? ???<strong class="sound_only">??????</strong></label>
                            </th>
                            <td>
                                <label class="input form-width-250px">
                                    <i class="icon-append">???</i>
                                    <input type="text" name="bo_gallery_cols" value="<?php echo $board['bo_gallery_cols'] ?>" id="bo_gallery_cols" required class="text-right">
                                </label>
                                <div class="note"><strong>Note:</strong> ????????? ????????? ????????? ???????????? ???????????? ????????? ????????? ?????? ??? ???????????? ???????????? ???</div>
                            </td>
                            <td class="table-chk-td">
                                <div class="inline-group">
                                    <label for="chk_grp_gallery_cols" class="checkbox"><input type="checkbox" name="chk_grp_gallery_cols" value="1" id="chk_grp_gallery_cols"><i></i>????????????</label>
                                    <label for="chk_all_gallery_cols" class="checkbox"><input type="checkbox" name="chk_all_gallery_cols" value="1" id="chk_all_gallery_cols"><i></i>????????????</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th">
                                <label for="bo_gallery_width" class="label">????????? ????????? ???<strong class="sound_only">??????</strong></label>
                            </th>
                            <td>
                                <label class="input form-width-250px">
                                    <i class="icon-append text-width">px</i>
                                    <input type="text" name="bo_gallery_width" id="bo_gallery_width" value="<?php echo $board['bo_gallery_width'] ?>" class="text-right" required>
                                </label>
                                <div class="note"><strong>Note:</strong> ????????? ????????? ????????? ???????????? ????????? ???????????? ?????? ???????????? ???</div>
                            </td>
                            <td class="table-chk-td">
                                <div class="inline-group">
                                    <label for="chk_grp_gallery_width" class="checkbox"><input type="checkbox" name="chk_grp_gallery_width" value="1" id="chk_grp_gallery_width"><i></i>????????????</label>
                                    <label for="chk_all_gallery_width" class="checkbox"><input type="checkbox" name="chk_all_gallery_width" value="1" id="chk_all_gallery_width"><i></i>????????????</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th">
                                <label for="bo_gallery_height" class="label">????????? ????????? ??????<strong class="sound_only">??????</strong></label>
                            </th>
                            <td>
                                <label class="input form-width-250px">
                                    <i class="icon-append text-width">px</i>
                                    <input type="text" name="bo_gallery_height" id="bo_gallery_height" value="<?php echo $board['bo_gallery_height'] ?>" class="text-right" required>
                                </label>
                                <div class="note"><strong>Note:</strong> ????????? ????????? ????????? ???????????? ????????? ???????????? ????????? ???????????? ???</div>
                            </td>
                            <td class="table-chk-td">
                                <div class="inline-group">
                                    <label for="chk_grp_gallery_height" class="checkbox"><input type="checkbox" name="chk_grp_gallery_height" value="1" id="chk_grp_gallery_height"><i></i>????????????</label>
                                    <label for="chk_all_gallery_height" class="checkbox"><input type="checkbox" name="chk_all_gallery_height" value="1" id="chk_all_gallery_height"><i></i>????????????</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th">
                                <label for="bo_mobile_gallery_width" class="label">????????? ????????? ????????? ???<strong class="sound_only">??????</strong></label>
                            </th>
                            <td>
                                <label class="input form-width-250px">
                                    <i class="icon-append text-width">px</i>
                                    <input type="text" name="bo_mobile_gallery_width" id="bo_mobile_gallery_width" value="<?php echo $board['bo_mobile_gallery_width'] ?>" class="text-right" required>
                                </label>
                                <div class="note"><strong>Note:</strong> ???????????? ????????? ????????? ????????? ????????? ???????????? ????????? ???????????? ?????? ???????????? ???</div>
                            </td>
                            <td class="table-chk-td">
                                <div class="inline-group">
                                    <label for="chk_grp_mobile_gallery_width" class="checkbox"><input type="checkbox" name="chk_grp_mobile_gallery_width" value="1" id="chk_grp_mobile_gallery_width"><i></i>????????????</label>
                                    <label for="chk_all_mobile_gallery_width" class="checkbox"><input type="checkbox" name="chk_all_mobile_gallery_width" value="1" id="chk_all_mobile_gallery_width"><i></i>????????????</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th">
                                <label for="bo_mobile_gallery_height" class="label">????????? ????????? ????????? ??????<strong class="sound_only">??????</strong></label>
                            </th>
                            <td>
                                <label class="input form-width-250px">
                                    <i class="icon-append text-width">px</i>
                                    <input type="text" name="bo_mobile_gallery_height" id="bo_mobile_gallery_height" value="<?php echo $board['bo_mobile_gallery_height'] ?>" class="text-right" required>
                                </label>
                                <div class="note"><strong>Note:</strong> ???????????? ????????? ????????? ????????? ????????? ???????????? ????????? ???????????? ????????? ???????????? ???</div>
                            </td>
                            <td class="table-chk-td">
                                <div class="inline-group">
                                    <label for="chk_grp_mobile_gallery_height" class="checkbox"><input type="checkbox" name="chk_grp_mobile_gallery_height" value="1" id="chk_grp_mobile_gallery_height"><i></i>????????????</label>
                                    <label for="chk_all_mobile_gallery_height" class="checkbox"><input type="checkbox" name="chk_all_mobile_gallery_height" value="1" id="chk_all_mobile_gallery_height"><i></i>????????????</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th">
                                <label for="bo_table_width" class="label">????????? ???<strong class="sound_only">??????</strong></label>
                            </th>
                            <td>
                                <label class="input form-width-250px">
                                    <i class="icon-append text-width">px</i>
                                    <input type="text" name="bo_table_width" id="bo_table_width" value="<?php echo $board['bo_table_width'] ?>" class="text-right" required>
                                </label>
                                <div class="note"><strong>Note:</strong> 100 ????????? %</div>
                            </td>
                            <td class="table-chk-td">
                                <div class="inline-group">
                                    <label for="chk_grp_table_width" class="checkbox"><input type="checkbox" name="chk_grp_table_width" value="1" id="chk_grp_table_width"><i></i>????????????</label>
                                    <label for="chk_all_table_width" class="checkbox"><input type="checkbox" name="chk_all_table_width" value="1" id="chk_all_table_width"><i></i>????????????</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th">
                                <label for="bo_image_width" class="label">????????? ??? ??????<strong class="sound_only">??????</strong></label>
                            </th>
                            <td>
                                <label class="input form-width-250px">
                                    <i class="icon-append text-width">px</i>
                                    <input type="text" name="bo_image_width" id="bo_image_width" value="<?php echo $board['bo_image_width'] ?>" class="text-right" required>
                                </label>
                                <div class="note"><strong>Note:</strong> ??????????????? ???????????? ???????????? ??? ??????</div>
                            </td>
                            <td class="table-chk-td">
                                <div class="inline-group">
                                    <label for="chk_grp_image_width" class="checkbox"><input type="checkbox" name="chk_grp_image_width" value="1" id="chk_grp_image_width"><i></i>????????????</label>
                                    <label for="chk_all_image_width" class="checkbox"><input type="checkbox" name="chk_all_image_width" value="1" id="chk_all_image_width"><i></i>????????????</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th">
                                <label for="bo_new" class="label">?????? ?????????<strong class="sound_only">??????</strong></label>
                            </th>
                            <td>
                                <label class="input form-width-250px">
                                    <i class="icon-append text-width">??????</i>
                                    <input type="text" name="bo_new" id="bo_new" value="<?php echo $board['bo_new'] ?>" class="text-right" required>
                                </label>
                                <div class="note"><strong>Note:</strong> ??? ????????? new ???????????? ???????????? ??????. 0??? ??????????????? ???????????? ???????????? ????????????.</div>
                            </td>
                            <td class="table-chk-td">
                                <div class="inline-group">
                                    <label for="chk_grp_new" class="checkbox"><input type="checkbox" name="chk_grp_new" value="1" id="chk_grp_new"><i></i>????????????</label>
                                    <label for="chk_all_new" class="checkbox"><input type="checkbox" name="chk_all_new" value="1" id="chk_all_new"><i></i>????????????</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th">
                                <label for="bo_hot" class="label">????????? ?????????<strong class="sound_only">??????</strong></label>
                            </th>
                            <td>
                                <label class="input form-width-250px">
                                    <i class="icon-append">???</i>
                                    <input type="text" name="bo_hot" id="bo_hot" value="<?php echo $board['bo_hot'] ?>" class="text-right" required>
                                </label>
                                <div class="note"><strong>Note:</strong> ???????????? ????????? ???????????? hot ????????? ??????. 0??? ??????????????? ???????????? ???????????? ????????????.</div>
                            </td>
                            <td class="table-chk-td">
                                <div class="inline-group">
                                    <label for="chk_grp_hot" class="checkbox"><input type="checkbox" name="chk_grp_hot" value="1" id="chk_grp_hot"><i></i>????????????</label>
                                    <label for="chk_all_hot" class="checkbox"><input type="checkbox" name="chk_all_hot" value="1" id="chk_all_hot"><i></i>????????????</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th">
                                <label for="bo_reply_order" class="label">?????? ??????</label>
                            </th>
                            <td>
                                <label class="select form-width-250px">
                                    <select id="bo_reply_order" name="bo_reply_order">
                                        <option value="1"<?php echo get_selected($board['bo_reply_order'], 1, true); ?>>????????? ??? ?????? ????????? ?????? (??????)
                                        <option value="0"<?php echo get_selected($board['bo_reply_order'], 0); ?>>????????? ??? ?????? ?????? ??????
                                    </select><i></i>
                                </label>
                            </td>
                            <td class="table-chk-td">
                                <div class="inline-group">
                                    <label for="chk_grp_reply_order" class="checkbox"><input type="checkbox" name="chk_grp_reply_order" value="1" id="chk_grp_reply_order"><i></i>????????????</label>
                                    <label for="chk_all_reply_order" class="checkbox"><input type="checkbox" name="chk_all_reply_order" value="1" id="chk_all_reply_order"><i></i>????????????</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th">
                                <label for="bo_sort_field" class="label">????????? ?????? ??????</label>
                            </th>
                            <td>
                                <label class="select form-width-250px">
                                    <select id="bo_sort_field" name="bo_sort_field">
                                        <?php foreach( $bo_sort_fields as $v ){
                                            $option_value = $order_by_str = $v[0];
                                            if( $v[0] === 'wr_num, wr_reply' ){
                                                $selected = (! $board['bo_sort_field']) ? 'selected="selected"' : '';
                                                $option_value = '';
                                            } else {
                                                $selected = ($board['bo_sort_field'] === $v[0]) ? 'selected="selected"' : '';
                                            }
                                            
                                            if( $order_by_str !== 'wr_num, wr_reply' ){
                                                $tmp = explode(',', $v[0]);
                                                $order_by_str = $tmp[0];
                                            }

                                            echo '<option value="'.$option_value.'" '.$selected.' >'.$order_by_str.' : '.$v[1].'</option>';

                                        } ?>
                                    </select><i></i>
                                </label>
                                <div class="note"><strong>Note:</strong> ??????????????? ???????????? ????????? ????????? ????????? ???????????????. "??????"?????? ???????????? ???????????? ?????? ????????? ????????? ??? ????????????.</div>
                            </td>
                            <td class="table-chk-td">
                                <div class="inline-group">
                                    <label for="chk_grp_sort_field" class="checkbox"><input type="checkbox" name="chk_grp_sort_field" value="1" id="chk_grp_sort_field"><i></i>????????????</label>
                                    <label for="chk_all_sort_field" class="checkbox"><input type="checkbox" name="chk_all_sort_field" value="1" id="chk_all_sort_field"><i></i>????????????</label>
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

    <?php echo $frm_submit; ?>

    <div id="anc_bo_point">
        <div class="pg-anchor">
        <?php echo adm_pg_anchor('anc_bo_point'); ?>
        </div>
        <div class="adm-table-form-wrap margin-bottom-30">
            <header><strong><i class="fas fa-caret-right"></i> ????????? ????????? ??????</strong></header>
            <div class="table-list-eb">
                <?php if (!G5_IS_MOBILE) { ?>
                <div class="table-responsive">
                <?php } ?>
                <table class="table">
                    <tbody>
                        <tr>
                            <th class="table-form-th">
                                <label for="chk_grp_point" class="label">??????????????? ??????</label>
                            </th>
                            <td colspan="2">
                                <label for="chk_grp_point" class="checkbox" style="width:100px;">
                                    <input type="checkbox" name="chk_grp_point" id="chk_grp_point" onclick="set_point(this.form)"><i></i> ??????????????? ??????
                                </label>
                                <div class="note"><strong>Note:</strong> ??????????????? ????????? ???????????? ??????</div>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th">
                                <label for="bo_read_point" class="label">????????? ?????????<strong class="sound_only">??????</strong></label>
                            </th>
                            <td>
                                <label class="input form-width-250px">
                                    <i class="icon-append">???</i>
                                    <input type="text" name="bo_read_point" id="bo_read_point" value="<?php echo $board['bo_read_point'] ?>" class="text-right" required>
                                </label>
                            </td>
                            <td class="table-chk-td">
                                <div class="inline-group">
                                    <label for="chk_grp_read_point" class="checkbox"><input type="checkbox" name="chk_grp_read_point" value="1" id="chk_grp_read_point"><i></i>????????????</label>
                                    <label for="chk_all_read_point" class="checkbox"><input type="checkbox" name="chk_all_read_point" value="1" id="chk_all_read_point"><i></i>????????????</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th">
                                <label for="bo_write_point" class="label">????????? ?????????<strong class="sound_only">??????</strong></label>
                            </th>
                            <td>
                                <label class="input form-width-250px">
                                    <i class="icon-append">???</i>
                                    <input type="text" name="bo_write_point" id="bo_write_point" value="<?php echo $board['bo_write_point'] ?>" class="text-right" required>
                                </label>
                            </td>
                            <td class="table-chk-td">
                                <div class="inline-group">
                                    <label for="chk_grp_write_point" class="checkbox"><input type="checkbox" name="chk_grp_write_point" value="1" id="chk_grp_write_point"><i></i>????????????</label>
                                    <label for="chk_all_write_point" class="checkbox"><input type="checkbox" name="chk_all_write_point" value="1" id="chk_all_write_point"><i></i>????????????</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th">
                                <label for="bo_comment_point" class="label">???????????? ?????????<strong class="sound_only">??????</strong></label>
                            </th>
                            <td>
                                <label class="input form-width-250px">
                                    <i class="icon-append">???</i>
                                    <input type="text" name="bo_comment_point" id="bo_comment_point" value="<?php echo $board['bo_comment_point'] ?>" class="text-right" required>
                                </label>
                            </td>
                            <td class="table-chk-td">
                                <div class="inline-group">
                                    <label for="chk_grp_comment_point" class="checkbox"><input type="checkbox" name="chk_grp_comment_point" value="1" id="chk_grp_comment_point"><i></i>????????????</label>
                                    <label for="chk_all_comment_point" class="checkbox"><input type="checkbox" name="chk_all_comment_point" value="1" id="chk_all_comment_point"><i></i>????????????</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th">
                                <label for="bo_download_point" class="label">???????????? ?????????<strong class="sound_only">??????</strong></label>
                            </th>
                            <td>
                                <label class="input form-width-250px">
                                    <i class="icon-append">???</i>
                                    <input type="text" name="bo_download_point" id="bo_download_point" value="<?php echo $board['bo_download_point'] ?>" class="text-right" required>
                                </label>
                            </td>
                            <td class="table-chk-td">
                                <div class="inline-group">
                                    <label for="chk_grp_download_point" class="checkbox"><input type="checkbox" name="chk_grp_download_point" value="1" id="chk_grp_download_point"><i></i>????????????</label>
                                    <label for="chk_all_download_point" class="checkbox"><input type="checkbox" name="chk_all_download_point" value="1" id="chk_all_download_point"><i></i>????????????</label>
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

    <?php echo $frm_submit; ?>

    <div id="anc_bo_exfields">
        <div class="pg-anchor">
        <?php echo adm_pg_anchor('anc_bo_exfields'); ?>
        </div>
        <div class="adm-table-form-wrap margin-bottom-30">
            <header><strong><i class="fas fa-caret-right"></i> ????????? ???????????? ??????</strong></header>
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
                                <label for="bo_<?php echo $i ?>_subj" class="input form-width-200px">
                                    <input type="text" name="bo_<?php echo $i ?>_subj" id="bo_<?php echo $i ?>_subj" value="<?php echo get_text($board['bo_'.$i.'_subj']); ?>">
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
                                <label for="bo_<?php echo $i ?>" class="input form-width-200px">
                                    <input type="text" name="bo_<?php echo $i ?>" id="bo_<?php echo $i ?>" value="<?php echo get_text($board['bo_'.$i]); ?>">
                                </label>
                            </td>
                            <td class="table-chk-td">
                                <div class="inline-group">
                                    <label for="chk_grp_<?php echo $i ?>" class="checkbox"><input type="checkbox" name="chk_grp_<?php echo $i ?>" value="1" id="chk_grp_<?php echo $i ?>"><i></i>????????????</label>
                                    <label for="chk_all_<?php echo $i ?>" class="checkbox"><input type="checkbox" name="chk_all_<?php echo $i ?>" value="1" id="chk_all_<?php echo $i ?>"><i></i>????????????</label>
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

    <?php echo $frm_submit; ?>

    </form>
</div>

<div class="modal fade board-coppy-modal" tabindex="-1" role="dialog" aria-labelledby="boardCopyLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button aria-hidden="true" data-dismiss="modal" class="close" type="button">??</button>
                <h4 id="boardCopyLabel" class="modal-title"><strong><i class="far fa-clone"></i> ????????? ??????</strong></h4>
            </div>
            <div class="modal-body">
                <iframe id="board-coppy-iframe" width="100%" frameborder="0"></iframe>
            </div>
            <div class="modal-footer">
                <button data-dismiss="modal" class="btn-e btn-e-lg btn-e-dark" type="button"><i class="fas fa-times"></i> ??????</button>
            </div>
        </div>
    </div>
</div>

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

function eb_modal(href) {
    $('.board-coppy-modal').modal('show').on('hidden.bs.modal', function () {
        $("#board-coppy-iframe").attr("src", "");
        $('html').css({overflow: ''});
    });
    $('.board-coppy-modal').modal('show').on('shown.bs.modal', function () {
        $("#board-coppy-iframe").attr("src", href);
        $('#board-coppy-iframe').height(450);
        $('html').css({overflow: 'hidden'});
    });
    return false;
}

$(function(){
    <?php if (G5_IS_MOBILE || $wmode) { ?>
    $("td").removeAttr('colspan');
    $(".table-chk-td").hide();
    <?php } ?>

    $(".get_theme_galc").on("click", function() {
        if(!confirm("?????? ????????? ????????? ????????? ????????? ?????????????????????????"))
            return false;

        $.ajax({
            type: "POST",
            url: "./theme_config_load.php",
            cache: false,
            async: false,
            data: { type: "board" },
            dataType: "json",
            success: function(data) {
                if(data.error) {
                    alert(data.error);
                    return false;
                }

                var field = Array('bo_gallery_cols', 'bo_gallery_width', 'bo_gallery_height', 'bo_mobile_gallery_width', 'bo_mobile_gallery_height', 'bo_image_width');
                var count = field.length;
                var key;

                for(i=0; i<count; i++) {
                    key = field[i];

                    if(data[key] != undefined && data[key] != "")
                        $("input[name="+key+"]").val(data[key]);
                }
            }
        });
    });
});

function set_point(f) {
    if (f.chk_grp_point.checked) {
        f.bo_read_point.value = "<?php echo $config['cf_read_point'] ?>";
        f.bo_write_point.value = "<?php echo $config['cf_write_point'] ?>";
        f.bo_comment_point.value = "<?php echo $config['cf_comment_point'] ?>";
        f.bo_download_point.value = "<?php echo $config['cf_download_point'] ?>";
    } else {
        f.bo_read_point.value     = f.bo_read_point.defaultValue;
        f.bo_write_point.value    = f.bo_write_point.defaultValue;
        f.bo_comment_point.value  = f.bo_comment_point.defaultValue;
        f.bo_download_point.value = f.bo_download_point.defaultValue;
    }
}

var captcha_chk = false;

function use_captcha_check(){
    $.ajax({
        type: "POST",
        url: g5_admin_url+"/ajax.use_captcha.php",
        data: { admin_use_captcha: "1" },
        cache: false,
        async: false,
        dataType: "json",
        success: function(data) {
        }
    });
}

var bo_include_head = jQuery.trim(jQuery("#bo_include_head").val()),
    bo_include_tail = jQuery.trim(jQuery("#bo_include_tail").val());

function frm_check_file(){
    var head = jQuery.trim(jQuery("#bo_include_head").val());
    var tail = jQuery.trim(jQuery("#bo_include_tail").val());

    if(bo_include_head !== head || bo_include_tail !== tail){
        // ????????? ???????????????.
        jQuery("#admin_captcha_box").show();
        captcha_chk = true;

        use_captcha_check();

        return false;
    } else {
        jQuery("#admin_captcha_box").hide();
    }

    return true;
}

jQuery(function($){
    if( window.self !== window.top ){   // frame ?????? iframe??? ????????? ?????? ??????
        $("#bo_include_head, #bo_include_tail").on("change paste keyup", function(e) {
            frm_check_file();
        });

        use_captcha_check();
    }
});

function fboardform_submit(f)
{
    <?php
    if($w!=''){
    $js_array = get_bo_table_banned_word();
    echo "var banned_array = ". json_encode($js_array) . ";\n";
    }
    ?>

    // ??????????????? ????????? ????????? ?????? ?????????
    if( (typeof banned_array != 'undefined') && jQuery.inArray(f.bo_table.value, banned_array) !== -1 ){
        alert("????????? ????????? TABLE?????? ???????????? ????????????. ?????? ???????????? ????????? ?????????.");
        return false;
    }

    <?php echo get_editor_js("bo_content_head"); ?>
    <?php echo get_editor_js("bo_content_tail"); ?>
    <?php echo get_editor_js("bo_mobile_content_head"); ?>
    <?php echo get_editor_js("bo_mobile_content_tail"); ?>

    if (parseInt(f.bo_count_modify.value) < 0) {
        alert("?????? ?????? ?????? ???????????? 0 ?????? ??????????????? ?????????.");
        f.bo_count_modify.focus();
        return false;
    }

    if (parseInt(f.bo_count_delete.value) < 1) {
        alert("?????? ?????? ?????? ???????????? 1 ?????? ??????????????? ?????????.");
        f.bo_count_delete.focus();
        return false;
    }

    if( captcha_chk ) {
        <?php echo isset($captcha_js) ? $captcha_js : ''; // ?????? ????????? ???????????????????????? ????????? ????????? ?????????  ?>
    }

    return true;
}
</script>