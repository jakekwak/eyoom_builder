<?php
/**
 * Eyoom Admin Skin File
 * @file    ~/theme/basic/skin/config/config_form.html.php
 */
if (!defined('_EYOOM_IS_ADMIN_')) exit;

add_stylesheet('<link rel="stylesheet" href="'.G5_JS_URL.'/remodal/remodal.css">', 11);
add_stylesheet('<link rel="stylesheet" href="'.G5_JS_URL.'/remodal/remodal-default-theme.css">', 12);
add_javascript('<script src="'.G5_JS_URL.'/remodal/remodal.js"></script>', 10);
?>

<style>
@media (min-width: 1100px) {
    .pg-anchor-in.tab-e2 .nav-tabs li a {font-size:14px;font-weight:bold;padding:8px 17px}
    .pg-anchor-in.tab-e2 .nav-tabs li.active a {z-index:1;border:1px solid #000;border-top:1px solid #DE2600;color:#DE2600}
    .pg-anchor-in.tab-e2 .tab-bottom-line {position:relative;display:block;height:1px;background:#000;margin-bottom:20px}
}
@media (max-width: 1099px) {
    .pg-anchor-in {position:relative;overflow:hidden;margin-bottom:20px;border:1px solid #757575}
    .pg-anchor-in.tab-e2 .nav-tabs li {width:33.33333%;margin:0}
    .pg-anchor-in.tab-e2 .nav-tabs li a {font-size:12px;padding:6px 0;text-align:center;border-bottom:1px solid #d5d5d5;margin-right:0;font-weight:bold;background:#fff}
    .pg-anchor-in.tab-e2 .nav-tabs li.active a {border:0;border-bottom:1px solid #d5d5d5 !important;color:#DE2600;background:#fff1f0}
    .pg-anchor-in.tab-e2 .nav-tabs li:nth-child(1) a {border-right:1px solid #d5d5d5}
    .pg-anchor-in.tab-e2 .nav-tabs li:nth-child(2) a {border-right:1px solid #d5d5d5}
    .pg-anchor-in.tab-e2 .nav-tabs li:nth-child(4) a {border-right:1px solid #d5d5d5}
    .pg-anchor-in.tab-e2 .nav-tabs li:nth-child(5) a {border-right:1px solid #d5d5d5}
    .pg-anchor-in.tab-e2 .nav-tabs li:nth-child(7) a {border-right:1px solid #d5d5d5;border-bottom:0 !important}
    .pg-anchor-in.tab-e2 .nav-tabs li:nth-child(8) a {border-right:1px solid #d5d5d5;border-bottom:0 !important}
    .pg-anchor-in.tab-e2 .nav-tabs li:nth-child(9) a {border-bottom:0 !important}
    .pg-anchor-in.tab-e2 .tab-bottom-line {display:none}
}
.cf_cert_hide {display:none;position:absolute;top:-20000px;left:-10000px}

.icode_old_version th{background-color:#FFFCED !important;}
.icode_json_version th{background-color:#F6F1FF !important;}
.cf_tr_hide {display:none;}
</style>

<div class="admin-config-form">
    <form name="fconfigform" id="fconfigform" method="post" onsubmit="return fconfigform_submit(this);" class="eyoom-form">
    <input type="hidden" name="token" id="token" value="">

    <div class="adm-headline">
        <h3>???????????? ??????</h3>
    </div>

    <div id="anc_cf_basic">
        <div class="pg-anchor">
        <?php echo adm_pg_anchor('anc_cf_basic'); ?>
        </div>
        <div class="adm-table-form-wrap margin-bottom-30">
            <header><strong><i class="fas fa-caret-right"></i> ???????????? ???????????? ??????</strong></header>
            <div class="table-list-eb">
                <?php if (!G5_IS_MOBILE) { ?>
                <div class="table-responsive">
                <?php } ?>
                <table class="table">
                    <tbody>
                        <tr>
                            <th class="table-form-th">
                                <label for="cf_title" class="label">???????????? ??????<strong class="sound_only">??????</strong></label>
                            </th>
                            <td colspan="3">
                                <label class="input form-width-250px">
                                    <input type="text" name="cf_title" value="<?php echo get_sanitize_input($config['cf_title']); ?>" id="cf_title" required>
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th">
                                <label for="cf_admin" class="label">???????????????<strong class="sound_only">??????</strong></label>
                            </th>
                            <td colspan="3">
                                <label class="select form-width-250px">
                                    <?php echo get_member_id_select('cf_admin', 10, $config['cf_admin'], 'required') ?><i></i>
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th">
                                <label for="cf_admin_email" class="label">????????? ?????? ??????<strong class="sound_only">??????</strong></label>
                            </th>
                            <td colspan="3">
                                <label class="input form-width-250px">
                                    <input type="text" name="cf_admin_email" id="cf_admin_email" class="email" value="<?php echo get_sanitize_input($config['cf_admin_email']); ?>" required>
                                </label>
                                <div class="note"><strong>Note:</strong> ???????????? ????????? ?????? ????????? ???????????? ?????? ????????? ???????????????. (????????????, ????????????, ?????????, ?????????????????? ????????? ??????)
                                <?php if (function_exists('domain_mail_host') && $config['cf_admin_email'] && stripos($config['cf_admin_email'], domain_mail_host()) === false) { ?>
                                <br><br>???????????????????????? ?????? ????????? ?????? ????????????, ???????????? ?????? ????????? ?????? ???????????? ????????? ???????????? ????????????.<br>name<?php echo domain_mail_host(); ?>??? ?????? ????????? ???????????? ??????????????? ???????????????.</div>
                                <?php } ?>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th">
                                <label for="cf_admin_email_name" class="label">????????? ?????? ????????????<strong class="sound_only">??????</strong></label>
                            </th>
                            <td colspan="3">
                                <label class="input form-width-250px">
                                    <input type="text" name="cf_admin_email_name" id="cf_admin_email_name" value="<?php echo get_sanitize_input($config['cf_admin_email_name']); ?>" required>
                                </label>
                                <div class="note"><strong>Note:</strong> ???????????? ????????? ?????? ????????? ???????????? ????????? ??????????????? ???????????????. (????????????, ????????????, ?????????, ?????????????????? ????????? ??????)</div>
                            </td>
                        </tr>
                        <?php if ($member['mb_id'] == $config['cf_admin']) { ?>
                        <tr>
                            <th class="table-form-th">
                                <label for="cf_eyoom_admin_theme" class="label">??????????????? ????????????<strong class="sound_only">??????</strong></label>
                            </th>
                            <td>
                                <label class="select form-width-250px">
                                    <select name="cf_eyoom_admin_theme" id="cf_eyoom_admin_theme" required>
                                        <option value="">??????</option>
                                        <?php for ($i=0; $i<count((array)$cf_eyoom_admin_theme); $i++) { ?>
                                        <option value="<?php echo $cf_eyoom_admin_theme[$i]; ?>" <?php echo get_selected($config['cf_eyoom_admin_theme'], $cf_eyoom_admin_theme[$i])?>><?php echo $cf_eyoom_admin_theme[$i]; ?></option>
                                        <?php } ?>
                                    </select><i></i>
                                </label>
                                <div class="note"><strong>Note:</strong> ?????? ?????????????????? ????????? ??????????????????.</div>
                            </td>
                        <?php if (G5_IS_MOBILE) { ?>
                        </tr>
                        <tr>
                        <?php } ?>
                            <th class="table-form-th border-left-th">
                                <label for="cf_permit_level" class="label">????????? ?????? ?????? ??????</label>
                            </th>
                            <td>
                                <label class="select form-width-250px"><?php echo get_member_level_select('cf_permit_level', 1, 10, $config['cf_permit_level']) ?><i></i></label>
                                <div class="note"><strong>Note:</strong> ????????? ???????????? ??????????????? ??? ??????, ??????????????? ?????? ????????? ?????? ????????? ???????????????.</div>
                            </td>
                        </tr>
                        <?php } else { ?>
                        <input type="hidden" name="cf_eyoom_admin_theme" id="cf_eyoom_admin_theme" value="<?php echo $config['cf_eyoom_admin_theme']; ?>">
                        <tr>
                            <th class="table-form-th border-left-th">
                                <label for="cf_permit_level" class="label">????????? ?????? ?????? ??????</label>
                            </th>
                            <td colspan="3">
                                <label class="select form-width-250px"><?php echo get_member_level_select('cf_permit_level', 1, 10, $config['cf_permit_level']) ?><i></i></label>
                                <div class="note"><strong>Note:</strong> ????????? ???????????? ??????????????? ??? ??????, ??????????????? ?????? ????????? ?????? ????????? ???????????????.</div>
                            </td>
                        </tr>
                        <?php } ?>
                        <tr>
                            <th class="table-form-th">
                                <label for="cf_use_point" class="label">????????? ??????</label>
                            </th>
                            <td>
                                <label class="checkbox" style="width:80px;">
                                    <input type="checkbox" name="cf_use_point" value="1" id="cf_use_point" <?php echo $config['cf_use_point']?'checked':''; ?>><i></i> ??????
                                </label>
                            </td>
                        <?php if (G5_IS_MOBILE) { ?>
                        </tr>
                        <tr>
                        <?php } ?>
                            <th class="table-form-th border-left-th">
                                <label for="cf_point_term" class="label">????????? ????????????</label>
                            </th>
                            <td>
                                <label class="input form-width-250px">
                                    <i class="icon-append">???</i>
                                    <input type="text" name="cf_point_term" value="<?php echo (int) $config['cf_point_term']; ?>" id="cf_point_term" class="text-right">
                                </label>
                                <div class="note"><strong>Note:</strong> ????????? 0?????? ????????? ????????? ??????????????? ???????????? ????????????.</div>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th">
                                <label for="cf_login_point" class="label">???????????? ?????????<strong class="sound_only">??????</strong></label>
                            </th>
                            <td>
                                <label class="input form-width-250px">
                                    <i class="icon-append">???</i>
                                    <input type="text" name="cf_login_point" value="<?php echo (int) $config['cf_login_point']; ?>" id="cf_login_point" class="text-right" required>
                                </label>
                                <div class="note"><strong>Note:</strong> ????????? ???????????? ????????? ????????? ??????</div>
                            </td>
                        <?php if (G5_IS_MOBILE) { ?>
                        </tr>
                        <tr>
                        <?php } ?>
                            <th class="table-form-th border-left-th">
                                <label for="cf_memo_send_point" class="label">??????????????? ?????? ?????????<strong class="sound_only">??????</strong></label>
                            </th>
                            <td>
                                <label class="input form-width-250px">
                                    <i class="icon-append">???</i>
                                    <input type="text" name="cf_memo_send_point" value="<?php echo (int) $config['cf_memo_send_point']; ?>" id="cf_memo_send_point" class="text-right" required>
                                </label>
                                <div class="note"><strong>Note:</strong> ????????? ??????????????????. 0?????? ?????? ????????? ???????????? ???????????? ????????????.</div>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th">
                                <label for="cf_cut_name" class="label">??????(?????????) ??????</label>
                            </th>
                            <td colspan="3">
                                <label class="input form-width-250px">
                                    <i class="icon-append text-width">??????</i>
                                    <input type="text" name="cf_cut_name" id="cf_cut_name" value="<?php echo (int) $config['cf_cut_name']; ?>" class="text-right">
                                </label>
                                <div class="note"><strong>Note:</strong> ????????? ?????????????????? ???????????? ?????????.</div>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th">
                                <label for="cf_nick_modify" class="label">????????? ??????</label>
                            </th>
                            <td>
                                <div class="inline-group">
                                    <span>????????????</span>
                                    <span>
                                        <label class="input"><input type="text" name="cf_nick_modify" id="cf_nick_modify" value="<?php echo (int) $config['cf_nick_modify']; ?>" class="text-right" style="width:80px;"></label>
                                    </span>
                                    <span>??? ?????? ?????? ??? ??????</span>
                                </div>
                            </td>
                        <?php if (G5_IS_MOBILE) { ?>
                        </tr>
                        <tr>
                        <?php } ?>
                            <th class="table-form-th border-left-th">
                                <label for="cf_open_modify" class="label">???????????? ??????</label>
                            </th>
                            <td>
                                <div class="inline-group">
                                    <span>????????????</span>
                                    <span>
                                        <label class="input"><input type="text" name="cf_open_modify" id="cf_open_modify" value="<?php echo (int) $config['cf_open_modify']; ?>" class="text-right" style="width:80px;"></label>
                                    </span>
                                    <span>??? ?????? ?????? ??? ??????</span>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th">
                                <label for="cf_new_del" class="label">??????????????? ??????</label>
                            </th>
                            <td>
                                <label class="input form-width-250px">
                                    <i class="icon-append">???</i>
                                    <input type="text" name="cf_new_del" id="cf_new_del" value="<?php echo (int) $config['cf_new_del']; ?>" class="text-right">
                                </label>
                                <div class="note"><strong>Note:</strong> ???????????? ?????? ??????????????? ?????? ??????</div>
                            </td>
                        <?php if (G5_IS_MOBILE) { ?>
                        </tr>
                        <tr>
                        <?php } ?>
                            <th class="table-form-th border-left-th">
                                <label for="cf_memo_del" class="label">?????? ??????</label>
                            </th>
                            <td>
                                <label class="input form-width-250px">
                                    <i class="icon-append">???</i>
                                    <input type="text" name="cf_memo_del" id="cf_memo_del" value="<?php echo (int) $config['cf_memo_del']; ?>" class="text-right">
                                </label>
                                <div class="note"><strong>Note:</strong> ???????????? ?????? ?????? ?????? ??????</div>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th">
                                <label for="cf_visit_del" class="label">??????????????? ??????</label>
                            </th>
                            <td>
                                <label class="input form-width-250px">
                                    <i class="icon-append">???</i>
                                    <input type="text" name="cf_visit_del" id="cf_visit_del" value="<?php echo (int) $config['cf_visit_del']; ?>" class="text-right">
                                </label>
                                <div class="note"><strong>Note:</strong> ???????????? ?????? ????????? ?????? ?????? ??????</div>
                            </td>
                        <?php if (G5_IS_MOBILE) { ?>
                        </tr>
                        <tr>
                        <?php } ?>
                            <th class="table-form-th border-left-th">
                                <label for="cf_popular_del" class="label">??????????????? ??????</label>
                            </th>
                            <td>
                                <label class="input form-width-250px">
                                    <i class="icon-append">???</i>
                                    <input type="text" name="cf_popular_del" id="cf_popular_del" value="<?php echo (int) $config['cf_popular_del']; ?>" class="text-right">
                                </label>
                                <div class="note"><strong>Note:</strong> ???????????? ?????? ??????????????? ?????? ??????</div>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th">
                                <label for="cf_login_minutes" class="label">?????? ?????????</label>
                            </th>
                            <td>
                                <label class="input form-width-250px">
                                    <i class="icon-append">???</i>
                                    <input type="text" name="cf_login_minutes" id="cf_login_minutes" value="<?php echo (int) $config['cf_login_minutes']; ?>" class="text-right">
                                </label>
                                <div class="note"><strong>Note:</strong> ????????? ????????? ???????????? ?????? ???????????? ??????</div>
                            </td>
                        <?php if (G5_IS_MOBILE) { ?>
                        </tr>
                        <tr>
                        <?php } ?>
                            <th class="table-form-th border-left-th">
                                <label for="cf_new_rows" class="label">??????????????? ?????????</label>
                            </th>
                            <td>
                                <label class="input form-width-250px">
                                    <i class="icon-append text-width">??????</i>
                                    <input type="text" name="cf_new_rows" id="cf_new_rows" value="<?php echo (int) $config['cf_new_rows']; ?>" class="text-right">
                                </label>
                                <div class="note"><strong>Note:</strong> ?????? ??????????????? ?????????</div>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th">
                                <label for="cf_page_rows" class="label">??????????????? ?????????</label>
                            </th>
                            <td>
                                <label class="input form-width-250px">
                                    <i class="icon-append text-width">??????</i>
                                    <input type="text" name="cf_page_rows" id="cf_page_rows" value="<?php echo (int) $config['cf_page_rows']; ?>" class="text-right">
                                </label>
                                <div class="note"><strong>Note:</strong> ??????(?????????) ??????????????? ?????????</div>
                            </td>
                        <?php if (G5_IS_MOBILE) { ?>
                        </tr>
                        <tr>
                        <?php } ?>
                            <th class="table-form-th border-left-th">
                                <label for="cf_mobile_page_rows" class="label">????????? ??????????????? ?????????</label>
                            </th>
                            <td>
                                <label class="input form-width-250px">
                                    <i class="icon-append text-width">??????</i>
                                    <input type="text" name="cf_mobile_page_rows" id="cf_mobile_page_rows" value="<?php echo (int) $config['cf_mobile_page_rows']; ?>" class="text-right">
                                </label>
                                <div class="note"><strong>Note:</strong> ????????? ?????? ??????????????? ?????????</div>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th">
                                <label for="cf_write_pages" class="label">????????? ?????? ???<strong class="sound_only">??????</strong></label>
                            </th>
                            <td>
                                <label class="input form-width-250px">
                                    <i class="icon-append">p.</i>
                                    <input type="text" name="cf_write_pages" id="cf_write_pages" value="<?php echo (int) $config['cf_write_pages']; ?>" required class="text-right">
                                </label>
                                <div class="note"><strong>Note:</strong> ?????? ????????? ????????? ????????????</div>
                            </td>
                        <?php if (G5_IS_MOBILE) { ?>
                        </tr>
                        <tr>
                        <?php } ?>
                            <th class="table-form-th border-left-th">
                                <label for="cf_mobile_pages" class="label">????????? ????????? ?????? ???<strong class="sound_only">??????</strong></label>
                            </th>
                            <td>
                                <label class="input form-width-250px">
                                    <i class="icon-append">p.</i>
                                    <input type="text" name="cf_mobile_pages" id="cf_mobile_pages" value="<?php echo (int) $config['cf_mobile_pages']; ?>" required class="text-right">
                                </label>
                                <div class="note"><strong>Note:</strong> ????????? ?????? ????????? ????????? ????????????</div>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th">
                                <label for="cf_new_skin" class="label">??????????????? ??????<strong class="sound_only">??????</strong></label>
                            </th>
                            <td>
                                <label class="select form-width-250px">
                                    <?php echo get_skin_select('new', 'cf_new_skin', 'cf_new_skin', $config['cf_new_skin'], 'required'); ?><i></i>
                                </label>
                            </td>
                        <?php if (G5_IS_MOBILE) { ?>
                        </tr>
                        <tr>
                        <?php } ?>
                            <th class="table-form-th border-left-th">
                                <label for="cf_mobile_new_skin" class="label">????????? ??????????????? ??????<strong class="sound_only">??????</strong></label>
                            </th>
                            <td>
                                <label class="select form-width-250px">
                                    <?php echo get_mobile_skin_select('new', 'cf_mobile_new_skin', 'cf_mobile_new_skin', $config['cf_mobile_new_skin'], 'required'); ?><i></i>
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th">
                                <label for="cf_search_skin" class="label">?????? ??????<strong class="sound_only">??????</strong></label>
                            </th>
                            <td>
                                <label class="select form-width-250px">
                                    <?php echo get_skin_select('search', 'cf_search_skin', 'cf_search_skin', $config['cf_search_skin'], 'required'); ?><i></i>
                                </label>
                            </td>
                        <?php if (G5_IS_MOBILE) { ?>
                        </tr>
                        <tr>
                        <?php } ?>
                            <th class="table-form-th border-left-th">
                                <label for="cf_mobile_search_skin" class="label">????????? ?????? ??????<strong class="sound_only">??????</strong></label>
                            </th>
                            <td>
                                <label class="select form-width-250px">
                                    <?php echo get_mobile_skin_select('search', 'cf_mobile_search_skin', 'cf_mobile_search_skin', $config['cf_mobile_search_skin'], 'required'); ?><i></i>
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th">
                                <label for="cf_connect_skin" class="label">????????? ??????<strong class="sound_only">??????</strong></label>
                            </th>
                            <td>
                                <label class="select form-width-250px">
                                    <?php echo get_skin_select('connect', 'cf_connect_skin', 'cf_connect_skin', $config['cf_connect_skin'], 'required'); ?><i></i>
                                </label>
                            </td>
                        <?php if (G5_IS_MOBILE) { ?>
                        </tr>
                        <tr>
                        <?php } ?>
                            <th class="table-form-th border-left-th">
                                <label for="cf_mobile_connect_skin" class="label">????????? ????????? ??????<strong class="sound_only">??????</strong></label>
                            </th>
                            <td>
                                <label class="select form-width-250px">
                                    <?php echo get_mobile_skin_select('connect', 'cf_mobile_connect_skin', 'cf_mobile_connect_skin', $config['cf_mobile_connect_skin'], 'required'); ?><i></i>
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th">
                                <label for="cf_faq_skin" class="label">FAQ ??????<strong class="sound_only">??????</strong></label>
                            </th>
                            <td>
                                <label class="select form-width-250px">
                                    <?php echo get_skin_select('faq', 'cf_faq_skin', 'cf_faq_skin', $config['cf_faq_skin'], 'required'); ?><i></i>
                                </label>
                            </td>
                        <?php if (G5_IS_MOBILE) { ?>
                        </tr>
                        <tr>
                        <?php } ?>
                            <th class="table-form-th border-left-th">
                                <label for="cf_mobile_faq_skin" class="label">????????? FAQ ??????<strong class="sound_only">??????</strong></label>
                            </th>
                            <td>
                                <label class="select form-width-250px">
                                    <?php echo get_mobile_skin_select('faq', 'cf_mobile_faq_skin', 'cf_mobile_faq_skin', $config['cf_mobile_faq_skin'], 'required'); ?><i></i>
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th">
                                <label for="cf_editor" class="label">????????? ??????</label>
                            </th>
                            <td colspan="3">
                                <label class="select form-width-250px">
                                    <select name="cf_editor" id="cf_editor">
                                        <option value="">????????????</option>
                                        <?php for ($i=0; $i<count((array)$cf_editor); $i++) { ?>
                                        <option value="<?php echo $cf_editor[$i]; ?>" <?php echo get_selected($config['cf_editor'], $cf_editor[$i])?>><?php echo $cf_editor[$i]; ?></option>
                                        <?php } ?>
                                    </select><i></i>
                                </label>
                                <div class="note"><strong>Note:</strong> <?php echo G5_EDITOR_URL; ?> ?????? DHTML ????????? ????????? ???????????????.</div>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th">
                                <label for="cf_captcha" class="label">?????? ??????<strong class="sound_only">??????</strong></label>
                            </th>
                            <td colspan="3">
                                <label class="select form-width-250px">
                                    <select name="cf_captcha" id="cf_captcha" required>
                                        <option value="kcaptcha" <?php echo get_selected($config['cf_captcha'], 'kcaptcha') ; ?>>Kcaptcha</option>
                                        <option value="recaptcha" <?php echo get_selected($config['cf_captcha'], 'recaptcha') ; ?>>reCAPTCHA V2</option>
                                        <option value="recaptcha_inv" <?php echo get_selected($config['cf_captcha'], 'recaptcha_inv') ; ?>>Invisible reCAPTCHA</option>
                                    </select><i></i>
                                </label>
                                <div class="note"><strong>Note:</strong> ????????? ????????? ???????????????.<br>1) Kcaptcha ??? ????????????5??? ?????????????????????. ( ???????????? )<br>2) reCAPTCHA V2 ??? ???????????? ??????????????? ????????? ????????? ????????? ???????????????. ( ????????? ????????? UI )<br>3) Invisible reCAPTCHA ??? ???????????? ??????????????? ???????????? ????????? ???????????????. ( ?????? ????????? ????????? ?????????. )</div>
                            </td>
                        </tr>
                        <tr class="kcaptcha_mp3">
                            <th class="table-form-th">
                                <label for="cf_captcha_mp3" class="label">???????????? ??????</label>
                            </th>
                            <td colspan="3">
                                <label class="select form-width-250px">
                                    <select name="cf_captcha_mp3" id="cf_captcha_mp3" required>
                                        <option value="">??????</option>
                                        <?php for ($i=0; $i<count((array)$cf_captcha_mp3); $i++) { ?>
                                        <option value="<?php echo $cf_captcha_mp3[$i]; ?>" <?php echo get_selected($config['cf_captcha_mp3'], $cf_captcha_mp3[$i])?>><?php echo $cf_captcha_mp3[$i]; ?></option>
                                        <?php } ?>
                                    </select><i></i>
                                </label>
                                <div class="note"><strong>Note:</strong>kcaptcha ????????? <?php echo str_replace(array('recaptcha_inv', 'recaptcha'), 'kcaptcha', G5_CAPTCHA_URL); ?>/mp3 ?????? ?????? ????????? ???????????????.'</div>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th">
                                <label for="cf_recaptcha_site_key" class="label">?????? reCAPTCHA Site key</label>
                            </th>
                            <td>
                                <div class="inline-group">
                                    <span>
                                        <label class="input"><input type="text" name="cf_recaptcha_site_key" id="cf_recaptcha_site_key" value="<?php echo get_sanitize_input($config['cf_recaptcha_site_key']); ?>"> </label>
                                    </span>
                                    <span><a href="https://www.google.com/recaptcha/admin" target="_blank" class="btn-e btn-e-md btn-e-dark">reCAPTCHA ????????????</a></span>
                                </div>
                                <div class="note"><strong>Note:</strong> reCAPTCHA V2??? Invisible reCAPTCHA ?????????<br>sitekey ??? secret ?????? ???????????? ??????, ?????? ???????????? ?????? ????????????.</div>
                            </td>
                        <?php if (G5_IS_MOBILE) { ?>
                        </tr>
                        <tr>
                        <?php } ?>
                            <th class="table-form-th border-left-th">
                                <label for="cf_recaptcha_secret_key" class="label">?????? reCAPTCHA Secret key</label>
                            </th>
                            <td>
                                <label class="input">
                                    <input type="text" name="cf_recaptcha_secret_key" id="cf_recaptcha_secret_key" value="<?php echo get_sanitize_input($config['cf_recaptcha_secret_key']); ?>">
                                </label>
                                <div class="note"><strong>Note:</strong> ?????? reCAPTCHA Secret key ??? ????????? ?????????.</div>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th">
                                <label for="cf_possible_ip" class="label">???????????? IP</label>
                            </th>
                            <td>
                                <label class="textarea">
                                    <textarea name="cf_possible_ip" id="cf_possible_ip" rows="8"><?php echo get_sanitize_input($config['cf_possible_ip']); ?></textarea>
                                </label>
                                <div class="note"><strong>Note:</strong> ????????? IP??? ???????????? ????????? ??? ????????????.<br>123.123.+ ??? ?????? ??????. (????????? ??????)</div>
                            </td>
                        <?php if (G5_IS_MOBILE) { ?>
                        </tr>
                        <tr>
                        <?php } ?>
                            <th class="table-form-th border-left-th">
                                <label for="cf_intercept_ip" class="label">???????????? IP</label>
                            </th>
                            <td>
                                <label class="textarea">
                                    <textarea name="cf_intercept_ip" id="cf_intercept_ip" rows="8"><?php echo get_sanitize_input($config['cf_intercept_ip']); ?></textarea>
                                </label>
                                <div class="note"><strong>Note:</strong> ????????? IP??? ???????????? ????????? ??? ??????.<br>123.123.+ ??? ?????? ??????. (????????? ??????)</div>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th">
                                <label for="cf_analytics" class="label">??????????????? ????????????</label>
                            </th>
                            <td colspan="3">
                                <label class="textarea">
                                    <textarea name="cf_analytics" id="cf_analytics" rows="8"><?php echo get_text($copy_config['cf_analytics']); ?></textarea>
                                </label>
                                <div class="note"><strong>Note:</strong> ??????????????? ???????????? ????????? ???????????????. ???) ?????? ???????????????<br>????????? ?????????????????? ??? ????????? ???????????? ????????????.</div>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th">
                                <label for="cf_add_meta" class="label">?????? ????????????</label>
                            </th>
                            <td colspan="3">
                                <label class="textarea">
                                    <textarea name="cf_add_meta" id="cf_add_meta" rows="8"><?php echo get_text($copy_config['cf_add_meta']); ?></textarea>
                                </label>
                                <div class="note"><strong>Note:</strong> ????????? ???????????? meta ????????? ???????????????.<br>????????? ?????????????????? ??? ????????? ???????????? ????????????.</div>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th">
                                <label for="cf_syndi_token" class="label">????????? ??????????????? ?????????</label>
                            </th>
                            <td colspan="3">
                                <label class="input">
                                    <input type="text" name="cf_syndi_token" id="cf_syndi_token" value="<?php echo isset($config['cf_syndi_token']) ? get_sanitize_input($config['cf_syndi_token']) : ''; ?>">
                                </label>
                                <div class="note"><strong>Note:</strong> <?php if (!function_exists('curl_init')) { ?><b>??????) curl??? ???????????? ?????? ????????? ?????????????????? ???????????? ????????????.</b><br><?php } ?>????????? ??????????????? ?????????(token)??? ???????????? ????????? ?????????????????? ????????? ??? ????????????.<br>???????????? <a href="http://webmastertool.naver.com/" target="_blank"><u>????????? ??????????????????</u></a> -> ????????? ????????????????????? ????????? ??? ????????????.</div>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th">
                                <label for="cf_syndi_except" class="label">????????? ??????????????? ???????????????</label>
                            </th>
                            <td colspan="3">
                                <label class="input">
                                    <input type="text" name="cf_syndi_except" id="cf_syndi_except" value="<?php echo isset($config['cf_syndi_except']) ? get_sanitize_input($config['cf_syndi_except']) : ''; ?>">
                                </label>
                                <div class="note"><strong>Note:</strong> ????????? ??????????????? ???????????? ????????? ????????? ???????????? | ??? ???????????? ??????????????????. ???) notice|adult<br>????????? ?????????????????? ?????????, ????????? ?????? 2 ?????? ?????????, ???????????? ??????????????? ???????????? ???????????????.</div>
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

    <div id="anc_cf_board">
        <div class="pg-anchor">
        <?php echo adm_pg_anchor('anc_cf_board'); ?>
        </div>

        <div class="adm-table-form-wrap margin-bottom-30">
            <header><strong><i class="fas fa-caret-right"></i> ????????? ?????? ??????</strong></header>
            <fieldset>
                <div class="cont-text-bg">
                    <p class="bg-info font-size-12 margin-bottom-0">
                        <i class="fas fa-info-circle"></i> ??? ????????? ???????????? ??????????????? ?????? ???????????????.
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
                                <label for="cf_delay_sec" class="label">????????? ??????<strong class="sound_only">??????</strong></label>
                            </th>
                            <td>
                                <label class="input form-width-250px">
                                    <input type="text" name="cf_delay_sec" value="<?php echo (int) $config['cf_delay_sec'] ?>" id="cf_delay_sec" required>
                                </label>
                                <div class="note margin-bottom-10"><strong>Note:</strong> ???????????? ????????? ?????? ?????? ??? ???????????? ???????????????.</div>
                            </td>
                        <?php if (G5_IS_MOBILE) { ?>
                        </tr>
                        <tr>
                        <?php } ?>
                            <th class="table-form-th border-left-th">
                                <label for="cf_link_target" class="label">?????? ??????</label>
                            </th>
                            <td>
                                <label class="select form-width-250px">
                                    <select name="cf_link_target" id="cf_link_target">
                                        <option value="_blank"<?php echo get_selected($config['cf_link_target'], '_blank'); ?>>_blank</option>
                                        <option value="_self"<?php echo get_selected($$config['cf_link_target'], '_self'); ?>>_self</option>
                                        <option value="_top"<?php echo get_selected($$config['cf_link_target'], '_top'); ?>>_top</option>
                                        <option value="_new"<?php echo get_selected($$config['cf_link_target'], '_new'); ?>>_new</option>
                                    </select><i></i>
                                </label>
                                <div class="note"><strong>Note:</strong> ???????????? ????????? ?????? ?????? ??? ???????????? ???????????????.</div>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th">
                                <label for="cf_search_part" class="label">?????? ??????</label>
                            </th>
                            <td>
                                <label class="input form-width-250px">
                                    <i class="icon-append">???</i>
                                    <input type="text" name="cf_search_part" id="cf_search_part" value="<?php echo $config['cf_search_part'] ?>" class="text-right">
                                </label>
                                <div class="note margin-bottom-10"><strong>Note:</strong> ????????? ?????? ????????? ??????</div>
                            </td>
                        <?php if (G5_IS_MOBILE) { ?>
                        </tr>
                        <tr>
                        <?php } ?>
                            <th class="table-form-th border-left-th">
                                <label for="cf_use_copy_log" class="label">??????, ????????? ??????</label>
                            </th>
                            <td>
                                <label class="checkbox" style="width:80px;">
                                    <input type="checkbox" name="cf_use_copy_log" value="1" id="cf_use_copy_log" <?php echo $config['cf_use_copy_log']?'checked':''; ?>><i></i> ??????
                                </label>
                                <div class="note"><strong>Note:</strong> ????????? ????????? ????????? ?????? ??????, ????????? ??????</div>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th">
                                <label for="cf_read_point" class="label">????????? ?????????<strong class="sound_only">??????</strong></label>
                            </th>
                            <td>
                                <label class="input form-width-250px">
                                    <i class="icon-append">???</i>
                                    <input type="text" name="cf_read_point" id="cf_read_point" value="<?php echo (int) $config['cf_read_point'] ?>" class="text-right" required>
                                </label>
                            </td>
                        <?php if (G5_IS_MOBILE) { ?>
                        </tr>
                        <tr>
                        <?php } ?>
                            <th class="table-form-th border-left-th">
                                <label for="cf_write_point" class="label">????????? ?????????<strong class="sound_only">??????</strong></label>
                            </th>
                            <td>
                                <label class="input form-width-250px">
                                    <i class="icon-append">???</i>
                                    <input type="text" name="cf_write_point" id="cf_write_point" value="<?php echo (int) $config['cf_write_point'] ?>" class="text-right" required>
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th">
                                <label for="cf_comment_point" class="label">???????????? ?????????<strong class="sound_only">??????</strong></label>
                            </th>
                            <td>
                                <label class="input form-width-250px">
                                    <i class="icon-append">???</i>
                                    <input type="text" name="cf_comment_point" id="cf_comment_point" value="<?php echo (int) $config['cf_comment_point'] ?>" class="text-right" required>
                                </label>
                            </td>
                        <?php if (G5_IS_MOBILE) { ?>
                        </tr>
                        <tr>
                        <?php } ?>
                            <th class="table-form-th border-left-th">
                                <label for="cf_download_point" class="label">???????????? ?????????<strong class="sound_only">??????</strong></label>
                            </th>
                            <td>
                                <label class="input form-width-250px">
                                    <i class="icon-append">???</i>
                                    <input type="text" name="cf_download_point" id="cf_download_point" value="<?php echo (int) $config['cf_download_point'] ?>" class="text-right" required>
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th">
                                <label for="cf_image_extension" class="label">????????? ????????? ?????????</label>
                            </th>
                            <td colspan="3">
                                <label class="input">
                                    <input type="text" name="cf_image_extension" value="<?php echo get_sanitize_input($config['cf_image_extension']); ?>" id="cf_image_extension">
                                </label>
                                <div class="note"><strong>Note:</strong> ????????? ???????????? ????????? ?????? ????????? ?????? ?????????. | ??? ??????</div>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th">
                                <label for="cf_flash_extension" class="label">????????? ????????? ?????????</label>
                            </th>
                            <td colspan="3">
                                <label class="input">
                                    <input type="text" name="cf_flash_extension" value="<?php echo get_sanitize_input($config['cf_flash_extension']); ?>" id="cf_flash_extension">
                                </label>
                                <div class="note"><strong>Note:</strong> ????????? ???????????? ????????? ?????? ????????? ?????? ?????????. | ??? ??????</div>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th">
                                <label for="cf_movie_extension" class="label">????????? ????????? ?????????</label>
                            </th>
                            <td colspan="3">
                                <label class="input">
                                    <input type="text" name="cf_movie_extension" value="<?php echo get_sanitize_input($config['cf_movie_extension']); ?>" id="cf_movie_extension">
                                </label>
                                <div class="note"><strong>Note:</strong> ????????? ???????????? ????????? ?????? ????????? ?????? ?????????. | ??? ??????</div>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th">
                                <label for="cf_filter" class="label">?????? ?????????</label>
                            </th>
                            <td colspan="3">
                                <label class="textarea">
                                    <textarea name="cf_filter" id="cf_filter" rows="8"><?php echo get_sanitize_input($config['cf_filter']); ?></textarea>
                                </label>
                                <div class="note"><strong>Note:</strong> ????????? ????????? ????????? ????????? ????????? ??? ????????????. ????????? ?????? ????????? ,??? ???????????????.</div>
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

    <div id="anc_cf_join">
        <div class="pg-anchor">
        <?php echo adm_pg_anchor('anc_cf_join'); ?>
        </div>
        <div class="adm-table-form-wrap margin-bottom-30">
            <header><strong><i class="fas fa-caret-right"></i> ???????????? ??????</strong></header>
            <fieldset>
                <div class="cont-text-bg">
                    <p class="bg-info font-size-12 margin-bottom-0">
                        <i class="fas fa-info-circle"></i> ???????????? ??? ????????? ????????? ?????? ?????? ?????? ?????? ????????? ??? ????????????.
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
                                <label for="cf_member_skin" class="label">?????? ??????<strong class="sound_only">??????</strong></label>
                            </th>
                            <td>
                                <label class="select form-width-250px">
                                    <?php echo get_skin_select('member', 'cf_member_skin', 'cf_member_skin', $config['cf_member_skin'], 'required'); ?><i></i>
                                </label>
                            </td>
                        <?php if (G5_IS_MOBILE) { ?>
                        </tr>
                        <tr>
                        <?php } ?>
                            <th class="table-form-th border-left-th">
                                <label for="cf_mobile_member_skin" class="label">????????? ?????? ??????<strong class="sound_only">??????</strong></label>
                            </th>
                            <td>
                                <label class="select form-width-250px">
                                    <?php echo get_mobile_skin_select('member', 'cf_mobile_member_skin', 'cf_mobile_member_skin', $config['cf_mobile_member_skin'], 'required'); ?><i></i>
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th">
                                <label class="label">???????????? ??????</label>
                            </th>
                            <td>
                                <div class="inline-group">
                                    <label for="cf_use_homepage" class="checkbox"><input type="checkbox" name="cf_use_homepage" value="1" id="cf_use_homepage" <?php echo $config['cf_use_homepage']?'checked':''; ?>><i></i> ?????????</label>
                                    <label for="cf_req_homepage" class="checkbox"><input type="checkbox" name="cf_req_homepage" value="1" id="cf_req_homepage" <?php echo $config['cf_req_homepage']?'checked':''; ?>><i></i> ????????????</label>
                                </div>
                            </td>
                        <?php if (G5_IS_MOBILE) { ?>
                        </tr>
                        <tr>
                        <?php } ?>
                            <th class="table-form-th border-left-th">
                                <label class="label">?????? ??????</label>
                            </th>
                            <td>
                                <div class="inline-group">
                                    <label for="cf_use_addr" class="checkbox"><input type="checkbox" name="cf_use_addr" value="1" id="cf_use_addr" <?php echo $config['cf_use_addr']?'checked':''; ?>><i></i> ?????????</label>
                                    <label for="cf_req_addr" class="checkbox"><input type="checkbox" name="cf_req_addr" value="1" id="cf_req_addr" <?php echo $config['cf_req_addr']?'checked':''; ?>><i></i> ????????????</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th">
                                <label class="label">???????????? ??????</label>
                            </th>
                            <td>
                                <div class="inline-group">
                                    <label for="cf_use_tel" class="checkbox"><input type="checkbox" name="cf_use_tel" value="1" id="cf_use_tel" <?php echo $config['cf_use_tel']?'checked':''; ?>><i></i> ?????????</label>
                                    <label for="cf_req_tel" class="checkbox"><input type="checkbox" name="cf_req_tel" value="1" id="cf_req_tel" <?php echo $config['cf_req_tel']?'checked':''; ?>><i></i> ????????????</label>
                                </div>
                            </td>
                        <?php if (G5_IS_MOBILE) { ?>
                        </tr>
                        <tr>
                        <?php } ?>
                            <th class="table-form-th border-left-th">
                                <label class="label">??????????????? ??????</label>
                            </th>
                            <td>
                                <div class="inline-group">
                                    <label for="cf_use_hp" class="checkbox"><input type="checkbox" name="cf_use_hp" value="1" id="cf_use_hp" <?php echo $config['cf_use_hp']?'checked':''; ?>><i></i> ?????????</label>
                                    <label for="cf_req_hp" class="checkbox"><input type="checkbox" name="cf_req_hp" value="1" id="cf_req_hp" <?php echo $config['cf_req_hp']?'checked':''; ?>><i></i> ????????????</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th">
                                <label class="label">?????? ??????</label>
                            </th>
                            <td>
                                <div class="inline-group">
                                    <label for="cf_use_signature" class="checkbox"><input type="checkbox" name="cf_use_signature" value="1" id="cf_use_signature" <?php echo $config['cf_use_signature']?'checked':''; ?>><i></i> ?????????</label>
                                    <label for="cf_req_signature" class="checkbox"><input type="checkbox" name="cf_req_signature" value="1" id="cf_req_signature" <?php echo $config['cf_req_signature']?'checked':''; ?>><i></i> ????????????</label>
                                </div>
                            </td>
                        <?php if (G5_IS_MOBILE) { ?>
                        </tr>
                        <tr>
                        <?php } ?>
                            <th class="table-form-th border-left-th">
                                <label class="label">???????????? ??????</label>
                            </th>
                            <td>
                                <div class="inline-group">
                                    <label for="cf_use_profile" class="checkbox"><input type="checkbox" name="cf_use_profile" value="1" id="cf_use_profile" <?php echo $config['cf_use_profile']?'checked':''; ?>><i></i> ?????????</label>
                                    <label for="cf_req_profile" class="checkbox"><input type="checkbox" name="cf_req_profile" value="1" id="cf_req_profile" <?php echo $config['cf_req_profile']?'checked':''; ?>><i></i> ????????????</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th">
                                <label for="cf_register_level" class="label">??????????????? ??????</label>
                            </th>
                            <td>
                                <label class="select form-width-250px">
                                    <?php echo get_member_level_select('cf_register_level', 1, 9, $config['cf_register_level']) ?><i></i>
                                </label>
                            </td>
                        <?php if (G5_IS_MOBILE) { ?>
                        </tr>
                        <tr>
                        <?php } ?>
                            <th class="table-form-th border-left-th">
                                <label for="cf_register_point" class="label">??????????????? ?????????</label>
                            </th>
                            <td>
                                <label class="input form-width-250px">
                                    <i class="icon-append">???</i>
                                    <input type="text" name="cf_register_point" id="cf_register_point" value="<?php echo (int) $config['cf_register_point']; ?>" class="text-right">
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th">
                                <label for="cf_leave_day" class="label">??????????????? ?????????</label>
                            </th>
                            <td colspan="3">
                                <label class="input form-width-250px">
                                    <i class="icon-append">???</i>
                                    <input type="text" name="cf_leave_day" value="<?php echo (int) $config['cf_leave_day'] ?>" id="cf_leave_day"  class="text-right">
                                </label>
                                <div class="note"><strong>Note:</strong> ????????? ?????? ?????? ??????</div>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th">
                                <label for="cf_use_member_icon" class="label">??????????????? ??????</label>
                            </th>
                            <td>
                                <label class="select form-width-250px">
                                    <select name="cf_use_member_icon" id="cf_use_member_icon">
                                        <option value="0"<?php echo get_selected($config['cf_use_member_icon'], '0') ?>>?????????
                                        <option value="1"<?php echo get_selected($config['cf_use_member_icon'], '1') ?>>???????????? ??????
                                        <option value="2"<?php echo get_selected($config['cf_use_member_icon'], '2') ?>>?????????+?????? ??????
                                    </select><i></i>
                                </label>
                                <div class="note"><strong>Note:</strong> ???????????? ????????? ????????? ?????? ????????? ??????</div>
                            </td>
                        <?php if (G5_IS_MOBILE) { ?>
                        </tr>
                        <tr>
                        <?php } ?>
                            <th class="table-form-th border-left-th">
                                <label for="cf_icon_level" class="label">?????? ?????????, ????????? ????????? ??????</label>
                            </th>
                            <td>
                                <label class="select form-width-250px">
                                    <?php echo get_member_level_select('cf_icon_level', 1, 9, $config['cf_icon_level']) ?><i></i>
                                </label>
                                <div class="note"><strong>Note:</strong> ?????? ?????? ?????? ????????? ????????????.</div>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th">
                                <label for="cf_member_icon_size" class="label">??????????????? ??????</label>
                            </th>
                            <td>
                                <label class="input form-width-250px">
                                    <i class="icon-append text-width">Byte</i>
                                    <input type="text" name="cf_member_icon_size" value="<?php echo (int) $config['cf_member_icon_size'] ?>" id="cf_member_icon_size" class="text-right">
                                </label>
                                <div class="note"><strong>Note:</strong> ?????? ?????? ????????? ??????</div>
                            </td>
                        <?php if (G5_IS_MOBILE) { ?>
                        </tr>
                        <tr>
                        <?php } ?>
                            <th class="table-form-th border-left-th">
                                <label class="label">??????????????? ?????????</label>
                            </th>
                            <td>
                                <div class="inline-group">
                                    <span>
                                        <label for="cf_member_icon_width" class="input"><i class="icon-prepend text-width">??????</i><i class="icon-append text-width">px</i><input type="text" name="cf_member_icon_width" id="cf_member_icon_width" value="<?php echo (int) $config['cf_member_icon_width']; ?>" class="text-right" style="width:170px;"></label>
                                    </span>
                                    <span>??????</span>
                                    <br>
                                    <span>
                                        <label for="cf_member_icon_height" class="input"><i class="icon-prepend text-width">??????</i><i class="icon-append text-width">px</i><input type="text" name="cf_member_icon_height" id="cf_member_icon_height" value="<?php echo (int) $config['cf_member_icon_height']; ?>" class="text-right" style="width:170px;"></label>
                                    </span>
                                    <span>??????</span>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th">
                                <label for="cf_member_img_size" class="label">??????????????? ??????</label>
                            </th>
                            <td>
                                <label class="input form-width-250px">
                                    <i class="icon-append text-width">Byte</i>
                                    <input type="text" name="cf_member_img_size" value="<?php echo (int) $config['cf_member_img_size'] ?>" id="cf_member_img_size" class="text-right">
                                </label>
                                <div class="note"><strong>Note:</strong> ?????? ?????? ????????? ??????</div>
                            </td>
                        <?php if (G5_IS_MOBILE) { ?>
                        </tr>
                        <tr>
                        <?php } ?>
                            <th class="table-form-th border-left-th">
                                <label class="label">??????????????? ?????????</label>
                            </th>
                            <td>
                                <div class="inline-group">
                                    <span>
                                        <label for="cf_member_img_width" class="input"><i class="icon-prepend text-width">??????</i><i class="icon-append text-width">px</i><input type="text" name="cf_member_img_width" id="cf_member_img_width" value="<?php echo (int) $config['cf_member_img_width']; ?>" class="text-right" style="width:170px;"></label>
                                    </span>
                                    <span>??????</span>
                                    <br>
                                    <span>
                                        <label for="cf_member_img_height" class="input"><i class="icon-prepend text-width">??????</i><i class="icon-append text-width">px</i><input type="text" name="cf_member_img_height" id="cf_member_img_height" value="<?php echo (int) $config['cf_member_img_height']; ?>" class="text-right" style="width:170px;"></label>
                                    </span>
                                    <span>??????</span>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th">
                                <label for="cf_use_recommend" class="label">??????????????? ??????</label>
                            </th>
                            <td>
                                <label class="checkbox" style="width:80px;">
                                    <input type="checkbox" name="cf_use_recommend" value="1" id="cf_use_recommend" <?php echo $config['cf_use_recommend']?'checked':''; ?>> <i></i> ??????
                                </label>
                            </td>
                        <?php if (G5_IS_MOBILE) { ?>
                        </tr>
                        <tr>
                        <?php } ?>
                            <th class="table-form-th border-left-th">
                                <label for="cf_recommend_point" class="label">????????? ?????????</label>
                            </th>
                            <td>
                                <label class="input form-width-250px">
                                    <i class="icon-append">???</i>
                                    <input type="text" name="cf_recommend_point" id="cf_recommend_point" value="<?php echo $config['cf_recommend_point']; ?>" class="text-right">
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th">
                                <label for="cf_prohibit_id" class="label">?????????,????????? ????????????</label>
                            </th>
                            <td>
                                <label class="textarea">
                                    <textarea name="cf_prohibit_id" id="cf_prohibit_id" rows="8"><?php echo get_sanitize_input($config['cf_prohibit_id']); ?></textarea>
                                </label>
                                <div class="note"><strong>Note:</strong> ???????????????, ??????????????? ????????? ??? ?????? ????????? ????????? ?????? (,)??? ??????</div>
                            </td>
                        <?php if (G5_IS_MOBILE) { ?>
                        </tr>
                        <tr>
                        <?php } ?>
                            <th class="table-form-th border-left-th">
                                <label for="cf_prohibit_email" class="label">?????? ?????? ??????</label>
                            </th>
                            <td>
                                <label class="textarea">
                                    <textarea name="cf_prohibit_email" id="cf_prohibit_email" rows="8"><?php echo get_sanitize_input($config['cf_prohibit_email']); ?></textarea>
                                </label>
                                <div class="note"><strong>Note:</strong> ?????? ?????? ?????? ???????????? ???????????????. ????????? ?????? ex) hotmail.com</div>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th">
                                <label for="cf_stipulation" class="label">??????????????????</label>
                            </th>
                            <td colspan="3">
                                <label class="textarea">
                                    <textarea name="cf_stipulation" id="cf_stipulation" rows="8"><?php echo html_purifier($config['cf_stipulation']); ?></textarea>
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th">
                                <label for="cf_privacy" class="label">????????????????????????</label>
                            </th>
                            <td colspan="3">
                                <label class="textarea">
                                    <textarea name="cf_privacy" id="cf_privacy" rows="8"><?php echo html_purifier($config['cf_privacy']); ?></textarea>
                                </label>
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

    <div id="anc_cf_cert">
        <div class="pg-anchor">
        <?php echo adm_pg_anchor('anc_cf_cert'); ?>
        </div>
        <div class="adm-table-form-wrap border-bottom-1px margin-bottom-30">
            <header><strong><i class="fas fa-caret-right"></i> ???????????? ??????</strong></header>
            <fieldset>
                <div class="cont-text-bg">
                    <p class="bg-info font-size-12 margin-bottom-0">
                        <i class="fas fa-info-circle"></i> ???????????? ??? ???????????? ????????? ???????????????.<br>
                        <i class="fas fa-info-circle"></i> ????????? ????????? ?????? ????????? ???????????? ????????? ??????????????? ????????? ???????????????.<br>
                        <i class="fas fa-info-circle"></i> ???????????? ?????? ???????????? ?????? ??????????????? ?????? ????????? ?????? ??? ?????? ????????? ??? ??? ????????????.
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
                                <label for="cf_cert_use" class="label">????????????</label>
                            </th>
                            <td>
                                <label class="select form-width-250px">
                                    <select name="cf_cert_use" id="cf_cert_use">
                                        <?php echo option_selected("0", $config['cf_cert_use'], "????????????"); ?>
                                        <?php echo option_selected("1", $config['cf_cert_use'], "?????????"); ?>
                                        <?php echo option_selected("2", $config['cf_cert_use'], "????????????"); ?>
                                    </select><i></i>
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th cf_cert_service">
                                <label for="cf_cert_find" class="label">??????????????????</label>
                            </th>
                            <td class="cf_cert_service">
                                <label class="checkbox">
                                    <input type="checkbox" name="cf_cert_find" id="cf_cert_find" value="1" <?php echo isset($config['cf_cert_find']) && $config['cf_cert_find'] == 1 ? 'checked': ''; ?>><i></i>?????????/???????????? ????????? ????????????
                                </label>
                                <div class="note margin-bottom-10"><strong>Note:</strong> ?????????/????????? ??????????????? ?????????????????? ??????????????? ??????????????? ??????, ?????? ????????? ?????????/???????????? ????????? ????????? ??? ?????? ??? ????????????.</div>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th cf_cert_service">
                                <label for="cf_cert_simple" class="label">????????????(????????????)</label>
                            </th>
                            <td class="cf_cert_service">
                                <label class="select form-width-250px">
                                    <select name="cf_cert_simple" id="cf_cert_simple">
                                        <?php echo option_selected("", $config['cf_cert_simple'], "????????????"); ?>
                                        <?php echo option_selected("inicis", $config['cf_cert_simple'], "KG???????????? ????????????(????????????)"); ?>
                                    </select><i></i>
                                </label>
                                <div class="note margin-bottom-10"><strong>Note:</strong> KG??????????????? ????????????(????????????+????????????) ??????????????? ??????????????? ????????? ???????????? ????????? ?????????. <a href="https://www.inicis.com/all-auth-service" target="_blank"><u>KG???????????? ???????????? ??????</u></a></div>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th cf_cert_service">
                                <label for="cf_cert_hp" class="label">????????? ????????????</label>
                            </th>
                            <td class="cf_cert_service">
                                <label class="select form-width-250px">
                                    <select name="cf_cert_hp" id="cf_cert_hp">
                                        <?php echo option_selected("", $config['cf_cert_hp'], "????????????"); ?>
                                        <?php echo option_selected("kcb", $config['cf_cert_hp'], "????????????????????????(KCB) ????????? ????????????"); ?>
                                        <?php echo option_selected("kcp", $config['cf_cert_hp'], "NHN KCP ????????? ????????????"); ?>
                                    </select><i></i>
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th cf_cert_service">
                                <label for="cf_cert_ipin" class="label">????????? ????????????</label>
                            </th>
                            <td class="cf_cert_service">
                                <label class="select form-width-250px">
                                    <select name="cf_cert_ipin" id="cf_cert_ipin">
                                        <?php echo option_selected("",    $config['cf_cert_ipin'], "????????????"); ?>
                                        <?php echo option_selected("kcb", $config['cf_cert_ipin'], "????????????????????????(KCB) ?????????"); ?>
                                    </select><i></i>
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th cf_cert_service">
                                <label for="cf_cert_kg_mid" class="label">KG???????????? ???????????? MID</label>
                            </th>
                            <td class="cf_cert_service">
                                <div class="inline-group">
                                    <span>
                                        <label class="input form-width-250px">
                                            <i class="icon-prepend text-width">SRA</i>
                                            <input type="text" name="cf_cert_kg_mid" value="<?php echo get_sanitize_input($config['cf_cert_kg_mid']); ?>" id="cf_cert_kg_mid" minlength="7" maxlength="7">
                                        </label>
                                    </span>
                                    <span>
                                        <a href="http://sir.kr/main/service/inicis_cert_form.php" target="_blank" class="btn-e btn-e-md btn-e-dark">KG???????????? ???????????? ???????????????</a>
                                    </span>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th cf_cert_service">
                                <label for="cf_cert_kg_cd" class="label">KG???????????? ???????????? API KEY</label>
                            </th>
                            <td class="cf_cert_service">
                                <div class="inline-group">
                                    <span>
                                        <label class="input form-width-250px">
                                            <input type="text" name="cf_cert_kg_cd" value="<?php echo get_sanitize_input($config['cf_cert_kg_cd']); ?>" id="cf_cert_kg_cd" minlength="32" maxlength="32">
                                        </label>
                                    </span>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th cf_cert_service">
                                <label for="cf_cert_kcb_cd" class="label">???????????????????????? KCB ?????????ID</label>
                            </th>
                            <td class="cf_cert_service">
                                <div class="inline-group">
                                    <span>
                                        <label class="input form-width-250px">
                                            <input type="text" name="cf_cert_kcb_cd" value="<?php echo get_sanitize_input($config['cf_cert_kcb_cd']); ?>" id="cf_cert_kcb_cd">
                                        </label>
                                    </span>
                                </div>
                                <div class="note margin-bottom-10"><strong>Note:</strong> KCB ?????????ID??? ????????? ????????????.<br>???????????? ???????????? ?????? ?????????, KCB??? ???????????? ??? ?????????ID??? ?????? ????????? ??? ????????????. ?????????????????? ???????????? ?????? ????????? ?????????, ????????? ???????????? ?????? ?????????????????? ?????????. ????????? ???????????? ???????????? ???????????? KCB ?????????ID??? ?????? ?????????, ????????? ???????????? ???????????? ?????? KCB ?????? ?????? ?????? ???????????? ?????????.</div>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th border-left-th cf_cert_service">
                                <label for="cf_cert_kcp_cd" class="label">NHN KCP ???????????????</label>
                            </th>
                            <td class="cf_cert_service">
                                <div class="inline-group">
                                    <span>
                                        <label class="input form-width-250px">
                                            <i class="icon-prepend">SM</i>
                                            <input type="text" name="cf_cert_kcp_cd" value="<?php echo get_sanitize_input($config['cf_cert_kcp_cd']); ?>" id="cf_cert_kcp_cd">
                                        </label>
                                    </span>
                                    <span>
                                        <a href="http://sir.kr/main/service/p_cert.php" target="_blank" class="btn-e btn-e-md btn-e-dark">NHN KCP ????????? ???????????? ????????? ???????????????</a>
                                    </span>
                                </div>
                                <div class="note margin-bottom-10"><strong>Note:</strong> SM?????? ???????????? 5?????? ????????? ????????? ?????? 3????????? ????????? ????????????.<br>???????????? ???????????? ?????? ?????????, ???????????? ????????? ????????????????????? ????????? ?????? ??? ?????????????????? ?????? ????????? ??? ????????????.</div>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th cf_cert_service">
                                <label for="cf_cert_limit" class="label">???????????? ????????????</label>
                            </th>
                            <td class="cf_cert_service">
                                <label class="input form-width-250px">
                                    <i class="icon-append">???</i>
                                    <input type="text" name="cf_cert_limit" value="<?php echo (int) $config['cf_cert_limit']; ?>" id="cf_cert_limit" class="text-right">
                                </label>
                                <div class="note margin-bottom-10"><strong>Note:</strong> 1??? ?????? ??????????????? ????????? ??? ?????? ??????????????? ???????????????. (0?????? ?????? ??? ???????????? ???????????? ??????)<br>?????????/?????????/?????????????????? ?????? ???????????????.)</div>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th cf_cert_service">
                                <label for="cf_cert_req" class="label">???????????? ??????</label>
                            </th>
                            <td class="cf_cert_service">
                                <label class="checkbox" style="width:80px;">
                                    <input type="checkbox" name="cf_cert_req" value="1" id="cf_cert_req"<?php echo get_checked($config['cf_cert_req'], 1); ?>><i></i> ???
                                </label>
                                <div class="note margin-bottom-10"><strong>Note:</strong> ???????????? ??? ??????????????? ????????? ?????? ???????????????. ????????? ??????????????? ??????????????? ?????? ?????? ?????? ??????????????? ????????????.</div>
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

    <div id="anc_cf_url">
        <div class="pg-anchor">
        <?php echo adm_pg_anchor('anc_cf_url'); ?>
        </div>
        <div class="adm-table-form-wrap margin-bottom-30">
            <header><strong><i class="fas fa-caret-right"></i> ???????????? ??????</strong></header>

            <fieldset>
                <div class="cont-text-bg">
                    <p class="bg-info font-size-12 margin-bottom-0">
                        <i class="fas fa-info-circle"></i> ???????????? ????????? ???????????? ?????? URL ??? ???????????????. <a href="https://sir.kr/manual/g5/286" class="btn-e btn-e-red btn-e-sm" target="_blank" style="margin-left:10px">?????? ?????? ????????? ??????</a><br>
                        <?php if( $is_use_apache && ! $is_use_nginx ){ ?>
                            <?php if( ! $is_apache_rewrite ){ ?>
                            <i class="fas fa-info-circle"></i> <strong>Apache ????????? ?????? rewrite_module ??? ???????????? ?????? ????????? ?????? ????????? ???????????? ????????????.</strong><br>
                            <?php } else if( ! $is_write_file && $is_apache_need_rules ) {   // apache??? ?????? ?>
                            <i class="fas fa-info-circle"></i><strong> ?????? ?????? ????????? ?????? Apache ?????? ????????? ???????????? ????????? ?????????.</strong><br>
                            <?php } ?>
                        <?php } ?>
                    </p>
                </div>
            </fieldset>

            <fieldset>
                <div class="cont-text-bg">
                <?php if ( $is_use_apache ){ ?>
                    <button type="button" data-remodal-target="modal_apache" class="btn-e btn-e-purple btn-e-lg">Apache ?????? ?????? ??????</button>
                <?php } ?>
                <?php if ( $is_use_nginx ) { ?>
                    <button type="button" data-remodal-target="modal_nginx" class="btn-e btn-e-purple btn-e-lg">Nginx ?????? ?????? ??????</button>
                <?php } ?>
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
                                <label for="cf_email_use" class="label">???????????? ?????? ??????</label>
                            </th>
                            <td>
                                <?php foreach($short_url_arrs as $k=>$v) {
                                    $checked = ((int) $config['cf_bbs_rewrite'] === (int) $k) ? 'checked' : '';
                                ?>
                                <label for="cf_bbs_rewrite_<?php echo $k; ?>" class="radio"><input name="cf_bbs_rewrite" id="cf_bbs_rewrite_<?php echo $k; ?>" type="radio" value="<?php echo $k; ?>" <?php echo $checked;?> ><i></i> 
                                    <span style="display:inline-block; min-width:100px;"><?php echo $v['label']; ?></span>
                                    <span><?php echo $v['url']; ?></span>
                                </label>
                                <?php } ?>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <?php if (!G5_IS_MOBILE) { ?>
                </div>
                <?php } ?>
            </div>

            <div class="server_rewrite_info">
                <div class="is_rewrite remodal" data-remodal-id="modal_apache" role="dialog" aria-labelledby="modalApache" aria-describedby="modal1Desc">

                    <button type="button" class="connect-close" data-remodal-action="close">
                        <i class="fa fa-close"></i>
                        <span class="txt">??????</span>
                    </button>

                    <h4 class="copy_title">.htaccess ????????? ????????? ???????????????.
                    <?php if( ! $is_apache_rewrite ) { ?>
                    <br><span class="info-warning">Apache ????????? ?????? rewrite_module ??? ???????????? ?????? ????????? ?????? ????????? ???????????? ????????????.</span>
                    <?php } else if ( ! $is_write_file && $is_apache_need_rules ) { ?>
                    <br><span class="info-warning">???????????? .htaccess ????????? ?????? ?????? ?????? ????????? ????????????.<br>.htaccess ????????? ????????? ?????? ??????, ?????? ????????? ????????? ????????? ???????????? ???????????? ??? ?????????.</span>
                    <?php } else if ( ! $is_apache_need_rules ){ ?>
                    <br><span class="info-success">??????????????? ????????? ???????????????.</span>
                    <?php } ?>
                    </h4>
                    <textarea readonly="readonly" rows="10"><?php echo get_eyoom_mod_rewrite_rules(true); ?></textarea>
                </div>

                <div class="is_rewrite remodal" data-remodal-id="modal_nginx" role="dialog" aria-labelledby="modalNginx" aria-describedby="modal2Desc">

                    <button type="button" class="connect-close" data-remodal-action="close">
                        <i class="fa fa-close"></i>
                        <span class="txt">??????</span>
                    </button>
                    <h4 class="copy_title">?????? ????????? ???????????? nginx ?????? ????????? ????????? ?????????.</h4>
                    <textarea readonly="readonly" rows="10"><?php echo get_eyoom_nginx_conf_rules(true); ?></textarea>
                </div>

            </div>
        </div>
    </div>

    <?php echo $frm_submit; // ?????? ?>

    <div id="anc_cf_mail">
        <div class="pg-anchor">
        <?php echo adm_pg_anchor('anc_cf_mail'); ?>
        </div>
        <div class="adm-table-form-wrap margin-bottom-30">
            <header><strong><i class="fas fa-caret-right"></i> ?????? ?????? ?????? ??????</strong></header>
            <div class="table-list-eb">
                <?php if (!G5_IS_MOBILE) { ?>
                <div class="table-responsive">
                <?php } ?>
                <table class="table">
                    <tbody>
                        <tr>
                            <th class="table-form-th">
                                <label for="cf_email_use" class="label">???????????? ??????</label>
                            </th>
                            <td>
                                <label class="checkbox" style="width:80px;">
                                    <input type="checkbox" name="cf_email_use" id="cf_email_use" value="1" <?php echo $config['cf_email_use']?'checked':''; ?>><i></i> ??????
                                </label>
                                <div class="note margin-bottom-10"><strong>Note:</strong> ???????????? ????????? ??????????????? ?????? ???????????? ????????????. ?????? ???????????? ???????????????.</div>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th">
                                <label for="cf_use_email_certify" class="label">???????????? ??????<strong class="sound_only">??????</strong></label>
                            </th>
                            <td>
                                <label class="checkbox" style="width:80px;">
                                    <input type="checkbox" name="cf_use_email_certify" id="cf_use_email_certify" value="1" <?php echo $config['cf_use_email_certify']?'checked':''; ?>><i></i> ??????
                                </label>
                                <div class="note margin-bottom-10"><strong>Note:</strong> ????????? ????????? ?????? ????????? ??????????????? ???????????? ???????????????.</div>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th">
                                <label for="cf_formmail_is_member" class="label">????????? ?????? ??????<strong class="sound_only">??????</strong></label>
                            </th>
                            <td>
                                <label class="checkbox" style="width:80px;">
                                    <input type="checkbox" name="cf_formmail_is_member" id="cf_formmail_is_member" value="1" <?php echo $config['cf_formmail_is_member']?'checked':''; ?>><i></i> ????????? ??????
                                </label>
                                <div class="note margin-bottom-10"><strong>Note:</strong> ???????????? ????????? ???????????? ?????? ??? ??? ????????????.</div>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <?php if (!G5_IS_MOBILE) { ?>
                </div>
                <?php } ?>
            </div>
            <header><strong><i class="fas fa-caret-right"></i> ????????? ??? ?????? ??? ?????? ??????</strong></header>
            <div class="table-list-eb">
                <?php if (!G5_IS_MOBILE) { ?>
                <div class="table-responsive">
                <?php } ?>
                <table class="table">
                    <tbody>
                        <tr>
                            <th class="table-form-th">
                                <label for="cf_email_wr_super_admin" class="label">???????????????</label>
                            </th>
                            <td>
                                <label class="checkbox" style="width:80px;">
                                    <input type="checkbox" name="cf_email_wr_super_admin" id="cf_email_wr_super_admin" value="1" <?php echo $config['cf_email_wr_super_admin']?'checked':''; ?>><i></i> ??????
                                </label>
                                <div class="note margin-bottom-10"><strong>Note:</strong> ????????????????????? ????????? ???????????????.</div>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th">
                                <label for="cf_email_wr_group_admin" class="label">???????????????</label>
                            </th>
                            <td>
                                <label class="checkbox" style="width:80px;">
                                    <input type="checkbox" name="cf_email_wr_group_admin" id="cf_email_wr_group_admin" value="1" <?php echo $config['cf_email_wr_group_admin']?'checked':''; ?>><i></i> ??????
                                </label>
                                <div class="note margin-bottom-10"><strong>Note:</strong> ????????????????????? ????????? ???????????????.</div>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th">
                                <label for="cf_email_wr_board_admin" class="label">??????????????????</label>
                            </th>
                            <td>
                                <label class="checkbox" style="width:80px;">
                                    <input type="checkbox" name="cf_email_wr_board_admin" id="cf_email_wr_board_admin" value="1" <?php echo $config['cf_email_wr_board_admin']?'checked':''; ?>><i></i> ??????
                                </label>
                                <div class="note margin-bottom-10"><strong>Note:</strong> ???????????????????????? ????????? ???????????????.</div>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th">
                                <label for="cf_email_wr_write" class="label">???????????????</label>
                            </th>
                            <td>
                                <label class="checkbox" style="width:80px;">
                                    <input type="checkbox" name="cf_email_wr_write" id="cf_email_wr_write" value="1" <?php echo $config['cf_email_wr_write']?'checked':''; ?>><i></i> ??????
                                </label>
                                <div class="note margin-bottom-10"><strong>Note:</strong> ??????????????? ????????? ???????????????.</div>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th">
                                <label for="cf_email_wr_comment_all" class="label">???????????????</label>
                            </th>
                            <td>
                                <label class="checkbox" style="width:80px;">
                                    <input type="checkbox" name="cf_email_wr_comment_all" id="cf_email_wr_comment_all" value="1" <?php echo $config['cf_email_wr_comment_all']?'checked':''; ?>><i></i> ??????
                                </label>
                                <div class="note margin-bottom-10"><strong>Note:</strong> ????????? ????????? ???????????? ?????? ?????? ??? ?????? ????????? ????????? ???????????????.</div>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <?php if (!G5_IS_MOBILE) { ?>
                </div>
                <?php } ?>
            </div>
            <header><strong><i class="fas fa-caret-right"></i> ???????????? ??? ?????? ?????? ??????</strong></header>
            <div class="table-list-eb">
                <?php if (!G5_IS_MOBILE) { ?>
                <div class="table-responsive">
                <?php } ?>
                <table class="table">
                    <tbody>
                        <tr>
                            <th class="table-form-th">
                                <label for="cf_email_mb_super_admin" class="label">??????????????? ????????????</label>
                            </th>
                            <td>
                                <label class="checkbox" style="width:80px;">
                                    <input type="checkbox" name="cf_email_mb_super_admin" id="cf_email_mb_super_admin" value="1" <?php echo $config['cf_email_mb_super_admin']?'checked':''; ?>><i></i> ??????
                                </label>
                                <div class="note margin-bottom-10"><strong>Note:</strong> ????????????????????? ????????? ???????????????.</div>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th">
                                <label for="cf_email_mb_member" class="label">???????????? ????????????</label>
                            </th>
                            <td>
                                <label class="checkbox" style="width:80px;">
                                    <input type="checkbox" name="cf_email_mb_member" id="cf_email_mb_member" value="1" <?php echo $config['cf_email_mb_member']?'checked':''; ?>><i></i> ??????
                                </label>
                                <div class="note margin-bottom-10"><strong>Note:</strong> ??????????????? ???????????? ????????? ???????????????.</div>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <?php if (!G5_IS_MOBILE) { ?>
                </div>
                <?php } ?>
            </div>
            <header><strong><i class="fas fa-caret-right"></i> ?????? ???????????? ?????? ??? ?????? ??????</strong></header>
            <div class="table-list-eb">
                <?php if (!G5_IS_MOBILE) { ?>
                <div class="table-responsive">
                <?php } ?>
                <table class="table">
                    <tbody>
                        <tr>
                            <th class="table-form-th">
                                <label for="cf_email_po_super_admin" class="label">??????????????? ????????????</label>
                            </th>
                            <td>
                                <label class="checkbox" style="width:80px;">
                                    <input type="checkbox" name="cf_email_po_super_admin" id="cf_email_po_super_admin" value="1" <?php echo $config['cf_email_po_super_admin']?'checked':''; ?>><i></i> ??????
                                </label>
                                <div class="note margin-bottom-10"><strong>Note:</strong> ????????????????????? ????????? ???????????????.</div>
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

    <div id="anc_cf_sns">
        <div class="pg-anchor">
        <?php echo adm_pg_anchor('anc_cf_sns'); ?>
        </div>
        <div class="adm-table-form-wrap margin-bottom-30">
            <header><strong><i class="fas fa-caret-right"></i> ???????????????????????????(SNS : Social Network Service)</strong></header>
            <div class="table-list-eb">
                <?php if (!G5_IS_MOBILE) { ?>
                <div class="table-responsive">
                <?php } ?>
                <table class="table">
                    <tbody>
                        <tr>
                            <th class="table-form-th">
                                <label for="cf_social_login_use" class="label">?????????????????????</label>
                            </th>
                            <td colspan="3">
                                <label class="checkbox" style="width:80px;">
                                    <input type="checkbox" name="cf_social_login_use" id="cf_social_login_use" value="1" <?php echo (!empty($config['cf_social_login_use']))?'checked':''; ?>><i></i> ??????
                                </label>
                                <div class="note margin-bottom-10"><strong>Note:</strong> ?????????????????? ???????????????. <a href="https://sir.kr/manual/g5/276" class="btn-e btn-e-xs btn-e-dark" target="_blank">?????? ?????? ????????? ??????</a></div>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th">
                                <label for="check_social_naver" class="label">????????? ???????????????</label>
                            </th>
                            <td colspan="3">
                                <label class="checkbox">
                                    <input type="checkbox" name="cf_social_servicelist[]" id="check_social_naver" value="naver" <?php echo option_array_checked('naver', $config['cf_social_servicelist']); ?>><i></i> ????????? ???????????? ???????????????.
                                </label>
                                <div class="note margin-bottom-10"><strong>Note:</strong> ????????? CallbackURL : <?php echo get_social_callbackurl('naver'); ?></div>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th">
                                <label for="check_social_kakao" class="label">????????? ???????????????</label>
                            </th>
                            <td colspan="3">
                                <label class="checkbox">
                                    <input type="checkbox" name="cf_social_servicelist[]" id="check_social_kakao" value="kakao" <?php echo option_array_checked('kakao', $config['cf_social_servicelist']); ?>><i></i> ????????? ???????????? ???????????????.
                                </label>
                                <div class="note margin-bottom-10"><strong>Note:</strong> ????????? ????????? Redirect URI : <?php echo get_social_callbackurl('kakao', true); ?></div>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th">
                                <label for="check_social_facebook" class="label">???????????? ???????????????</label>
                            </th>
                            <td colspan="3">
                                <label class="checkbox">
                                    <input type="checkbox" name="cf_social_servicelist[]" id="check_social_facebook" value="facebook" <?php echo option_array_checked('facebook', $config['cf_social_servicelist']); ?>><i></i> ???????????? ???????????? ???????????????.
                                </label>
                                <div class="note margin-bottom-10"><strong>Note:</strong> ???????????? ????????? OAuth ???????????? URI : <?php echo get_social_callbackurl('facebook'); ?></div>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th">
                                <label for="check_social_google" class="label">?????? ???????????????</label>
                            </th>
                            <td colspan="3">
                                <label class="checkbox">
                                    <input type="checkbox" name="cf_social_servicelist[]" id="check_social_google" value="google" <?php echo option_array_checked('google', $config['cf_social_servicelist']); ?>><i></i> ?????? ???????????? ???????????????.
                                </label>
                                <div class="note margin-bottom-10"><strong>Note:</strong> ?????? ????????? ???????????? URI : <?php echo get_social_callbackurl('google'); ?></div>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th">
                                <label for="check_social_twitter" class="label">????????? ???????????????</label>
                            </th>
                            <td colspan="3">
                                <label class="checkbox">
                                    <input type="checkbox" name="cf_social_servicelist[]" id="check_social_twitter" value="twitter" <?php echo option_array_checked('twitter', $config['cf_social_servicelist']); ?>><i></i> ????????? ???????????? ???????????????.
                                </label>
                                <div class="note margin-bottom-10"><strong>Note:</strong> ????????? CallbackURL : <?php echo get_social_callbackurl('twitter'); ?></div>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th">
                                <label for="check_social_payco" class="label">????????? ???????????????</label>
                            </th>
                            <td colspan="3">
                                <label class="checkbox">
                                    <input type="checkbox" name="cf_social_servicelist[]" id="check_social_payco" value="payco" <?php echo option_array_checked('payco', $config['cf_social_servicelist']); ?>><i></i> ????????? ???????????? ???????????????.
                                </label>
                                <div class="note margin-bottom-10"><strong>Note:</strong> ????????? CallbackURL : <?php echo get_social_callbackurl('payco', false, true); ?></div>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <?php if (!G5_IS_MOBILE) { ?>
                </div>
                <?php } ?>
            </div>
            <header><strong><i class="fas fa-caret-right"></i> SNS ???ID/KEY ??????</strong></header>
            <div class="table-list-eb">
                <?php if (!G5_IS_MOBILE) { ?>
                <div class="table-responsive">
                <?php } ?>
                <table class="table">
                    <tbody>
                        <tr>
                            <th class="table-form-th">
                                <label for="cf_naver_clientid" class="label">????????? Client ID</label>
                            </th>
                            <td>
                                <div class="inline-group">
                                    <span>
                                        <label class="input form-width-220px"><input type="text" name="cf_naver_clientid" id="cf_naver_clientid" value="<?php echo get_sanitize_input($config['cf_naver_clientid']); ?>"> </label>
                                    </span>
                                    <span><a href="https://developers.naver.com/apps/#/register" target="_blank" class="btn-e btn-e-md btn-e-dark">??? ????????????</a></span>
                                </div>
                            </td>
                        <?php if (G5_IS_MOBILE) { ?>
                        </tr>
                        <tr>
                        <?php } ?>
                            <th class="table-form-th border-left-th">
                                <label for="cf_naver_secret" class="label">????????? Client Secret</label>
                            </th>
                            <td>
                                <label class="input form-width-250px">
                                    <input type="text" name="cf_naver_secret" id="cf_naver_secret" value="<?php echo get_sanitize_input($config['cf_naver_secret']); ?>">
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th">
                                <label for="cf_facebook_appid" class="label">???????????? ??? ID</label>
                            </th>
                            <td>
                                <div class="inline-group">
                                    <span>
                                        <label class="input form-width-220px"><input type="text" name="cf_facebook_appid" id="cf_facebook_appid" value="<?php echo get_sanitize_input($config['cf_facebook_appid']); ?>"> </label>
                                    </span>
                                    <span><a href="https://developers.facebook.com/apps" target="_blank" class="btn-e btn-e-md btn-e-dark">??? ????????????</a></span>
                                </div>
                            </td>
                        <?php if (G5_IS_MOBILE) { ?>
                        </tr>
                        <tr>
                        <?php } ?>
                            <th class="table-form-th border-left-th">
                                <label for="cf_facebook_secret" class="label">???????????? ??? Secret</label>
                            </th>
                            <td>
                                <label class="input form-width-250px">
                                    <input type="text" name="cf_facebook_secret" id="cf_facebook_secret" value="<?php echo get_sanitize_input($config['cf_facebook_secret']); ?>">
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th">
                                <label for="cf_twitter_key" class="label">????????? ????????? Key</label>
                            </th>
                            <td>
                                <div class="inline-group">
                                    <span>
                                        <label class="input form-width-220px"><input type="text" name="cf_twitter_key" id="cf_twitter_key" value="<?php echo get_sanitize_input($config['cf_twitter_key']); ?>"> </label>
                                    </span>
                                    <span><a href="https://developer.twitter.com/en/apps" target="_blank" class="btn-e btn-e-md btn-e-dark">??? ????????????</a></span>
                                </div>
                            </td>
                        <?php if (G5_IS_MOBILE) { ?>
                        </tr>
                        <tr>
                        <?php } ?>
                            <th class="table-form-th border-left-th">
                                <label for="cf_twitter_secret" class="label">????????? ????????? Secret</label>
                            </th>
                            <td>
                                <label class="input form-width-250px">
                                    <input type="text" name="cf_twitter_secret" id="cf_twitter_secret" value="<?php echo get_sanitize_input($config['cf_twitter_secret']); ?>">
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th">
                                <label for="cf_google_clientid" class="label">?????? Client ID</label>
                            </th>
                            <td>
                                <div class="inline-group">
                                    <span>
                                        <label class="input form-width-220px"><input type="text" name="cf_google_clientid" id="cf_google_clientid" value="<?php echo get_sanitize_input($config['cf_google_clientid']); ?>"> </label>
                                    </span>
                                    <span><a href="https://console.developers.google.com" target="_blank" class="btn-e btn-e-md btn-e-dark">??? ????????????</a></span>
                                </div>
                            </td>
                        <?php if (G5_IS_MOBILE) { ?>
                        </tr>
                        <tr>
                        <?php } ?>
                            <th class="table-form-th border-left-th">
                                <label for="cf_google_secret" class="label">?????? Client Secret</label>
                            </th>
                            <td>
                                <label class="input form-width-250px">
                                    <input type="text" name="cf_google_secret" id="cf_google_secret" value="<?php echo get_sanitize_input($config['cf_google_secret']); ?>">
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th">
                                <label for="cf_googl_shorturl_apikey" class="label">?????? ???????????? API Key</label>
                            </th>
                            <td colspan="3">
                                <div class="inline-group">
                                    <span>
                                        <label class="input form-width-220px"><input type="text" name="cf_googl_shorturl_apikey" id="cf_googl_shorturl_apikey" value="<?php echo get_sanitize_input($config['cf_googl_shorturl_apikey']); ?>"> </label>
                                    </span>
                                    <span><a href="http://code.google.com/apis/console/" target="_blank" class="btn-e btn-e-md btn-e-dark">API Key ????????????</a></span>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th">
                                <label for="cf_kakao_rest_key" class="label">????????? REST API ???</label>
                            </th>
                            <td>
                                <div class="inline-group">
                                    <span>
                                        <label class="input form-width-220px"><input type="text" name="cf_kakao_rest_key" id="cf_kakao_rest_key" value="<?php echo get_sanitize_input($config['cf_kakao_rest_key']); ?>"> </label>
                                    </span>
                                    <span><a href="https://developers.kakao.com/product/kakaoLogin" target="_blank" class="btn-e btn-e-md btn-e-dark">??? ????????????</a></span>
                                </div>
                            </td>
                        <?php if (G5_IS_MOBILE) { ?>
                        </tr>
                        <tr>
                        <?php } ?>
                            <th class="table-form-th border-left-th">
                                <label for="cf_kakao_client_secret" class="label">????????? Client Secret</label>
                            </th>
                            <td>
                                <label class="input form-width-250px">
                                    <input type="text" name="cf_kakao_client_secret" id="cf_kakao_client_secret" value="<?php echo get_sanitize_input($config['cf_kakao_client_secret']); ?>">
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th">
                                <label for="cf_kakao_js_apikey" class="label">????????? JavaScript ???</label>
                            </th>
                            <td colspan="3">
                                <label class="input form-width-300px">
                                    <input type="text" name="cf_kakao_js_apikey" id="cf_kakao_js_apikey" value="<?php echo get_sanitize_input($config['cf_kakao_js_apikey']); ?>">
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th">
                                <label for="cf_payco_clientid" class="label">????????? Client ID</label>
                            </th>
                            <td>
                                <div class="inline-group">
                                    <span>
                                        <label class="input form-width-220px"><input type="text" name="cf_payco_clientid" id="cf_payco_clientid" value="<?php echo get_sanitize_input($config['cf_payco_clientid']); ?>"> </label>
                                    </span>
                                    <span><a href="https://developers.payco.com/guide" target="_blank" class="btn-e btn-e-md btn-e-dark">??? ????????????</a></span>
                                </div>
                            </td>
                        <?php if (G5_IS_MOBILE) { ?>
                        </tr>
                        <tr>
                        <?php } ?>
                            <th class="table-form-th border-left-th">
                                <label for="cf_payco_secret" class="label">????????? Secret</label>
                            </th>
                            <td>
                                <label class="input form-width-250px">
                                    <input type="text" name="cf_payco_secret" id="cf_payco_secret" value="<?php echo get_sanitize_input($config['cf_payco_secret']); ?>">
                                </label>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <?php if (!G5_IS_MOBILE) { ?>
                </div>
                <?php } ?>
            </div>

            <div id="anc_cf_map">
                <header><strong><i class="fas fa-caret-right"></i> ?????? API ID ??????</strong></header>
                <div class="table-list-eb">
                    <?php if (!G5_IS_MOBILE) { ?>
                    <div class="table-responsive">
                    <?php } ?>
                    <table class="table">
                        <tbody>
                            <tr>
                                <th class="table-form-th">
                                    <label for="cf_map_google_id" class="label">???????????? API KEY</label>
                                </th>
                                <td>
                                    <div class="inline-group inline-mobile-block">
                                        <span>
                                            <label class="input form-width-350px"><input type="text" name="cf_map_google_id" id="cf_map_google_id" value="<?php echo get_sanitize_input($config['cf_map_google_id']); ?>"> </label>
                                        </span>
                                        <span><a href="https://cloud.google.com/maps-platform/" target="_blank" class="btn-e btn-e-md btn-e-dark">???????????? API KEY ????????????</a></span>
                                    </div>
                                    <div class="note margin-bottom-10"><strong>Note:</strong> ?????? ???????????? ????????? &gt; ??????????????? ?????? ?????? ???, API KEY??? ???????????? ??? ????????????.</div>
                                </td>
                            </tr>
                            <tr>
                                <th class="table-form-th">
                                    <label for="cf_map_naver_id" class="label">??????????????? CLIENT ID</label>
                                </th>
                                <td>
                                    <div class="inline-group inline-mobile-block">
                                        <span>
                                            <label class="input form-width-350px"><input type="text" name="cf_map_naver_id" id="cf_map_naver_id" value="<?php echo get_sanitize_input($config['cf_map_naver_id']); ?>"> </label>
                                        </span>
                                        <span><a href="https://www.ncloud.com/product/applicationService/maps" target="_blank" class="btn-e btn-e-md btn-e-green">??????????????? ?????? ?????????</a></span>
                                    </div>
                                    <div class="note margin-bottom-10"><strong>Note:</strong> ?????? ???, ??? ?????????????????? ???????????? Client ID??? ???????????? ??? ????????????.</div>
                                </td>
                            </tr>
                            <tr>
                                <th class="table-form-th">
                                    <label for="cf_map_daum_id" class="label">???????????? APP KEY</label>
                                </th>
                                <td>
                                    <div class="inline-group inline-mobile-block">
                                        <span>
                                            <label class="input form-width-350px"><input type="text" name="cf_map_daum_id" id="cf_map_daum_id" value="<?php echo get_sanitize_input($config['cf_map_daum_id']); ?>"> </label>
                                        </span>
                                        <span><a href="https://developers.kakao.com" target="_blank" class="btn-e btn-e-md btn-e-dark">???????????? APP KEY ????????????</a></span>
                                        <span><a href="http://apis.map.daum.net/web/guide/" target="_blank" class="btn-e btn-e-md btn-e-yellow">???????????? API ?????? ?????????</a></span>
                                    </div>
                                    <div class="note margin-bottom-10"><strong>Note:</strong> ?????? ?????? ???, ??? ???????????????????????? ????????? ?????? ?????? ????????? JavaScript?????? ????????? ?????????.</div>
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
    </div>

    <?php echo $frm_submit; // ?????? ?>

    <div id="anc_cf_layout">
        <div class="pg-anchor">
        <?php echo adm_pg_anchor('anc_cf_layout'); ?>
        </div>
        <div class="adm-table-form-wrap margin-bottom-30">
            <header><strong><i class="fas fa-caret-right"></i> ???????????? ????????????</strong></header>
            <fieldset>
                <div class="cont-text-bg">
                    <p class="bg-info font-size-12 margin-bottom-0">
                        <i class="fas fa-info-circle"></i> ?????? ????????? ?????? ?????? ??? script, css ??? ??????????????? ????????? ??? ????????????.
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
                                <label for="cf_add_script" class="label">?????? script, css</label>
                            </th>
                            <td>
                                <label class="textarea">
                                    <textarea name="cf_add_script" id="cf_add_script" rows="8"><?php echo get_text($copy_config['cf_add_script']); ?></textarea>
                                </label>
                                <div class="note margin-bottom-10"><strong>Note:</strong> HTML??? &lt;/HEAD&gt; ???????????? ????????? JavaScript??? css ????????? ???????????????.<br>????????? ?????????????????? ??? ????????? ???????????? ????????????.</div>
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

    <div id="anc_cf_sms">
        <div class="pg-anchor">
        <?php echo adm_pg_anchor('anc_cf_sms'); ?>
        </div>
        <div class="adm-table-form-wrap margin-bottom-30">
            <header><strong><i class="fas fa-caret-right"></i> SMS ??????</strong></header>
            <div class="table-list-eb">
                <?php if (!G5_IS_MOBILE) { ?>
                <div class="table-responsive">
                <?php } ?>
                <table class="table">
                    <tbody>
                        <tr>
                            <th class="table-form-th">
                                <label for="cf_sms_use" class="label">SMS ??????</label>
                            </th>
                            <td>
                                <label class="select form-width-250px">
                                    <select id="cf_sms_use" name="cf_sms_use">
                                        <option value="" <?php echo get_selected($config['cf_sms_use'], ''); ?>>????????????</option>
                                        <option value="icode" <?php echo get_selected($config['cf_sms_use'], 'icode'); ?>>????????????</option>
                                    </select><i></i>
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th">
                                <label for="cf_sms_type" class="label">SMS ????????????</label>
                            </th>
                            <td>
                                <label class="select form-width-250px">
                                    <select id="cf_sms_type" name="cf_sms_type">
                                        <option value="" <?php echo get_selected($config['cf_sms_type'], ''); ?>>SMS</option>
                                        <option value="LMS" <?php echo get_selected($config['cf_sms_type'], 'LMS'); ?>>LMS</option>
                                    </select><i></i>
                                </label>
                                <div class="note margin-bottom-10"><strong>Note:</strong> ??????????????? SMS??? ??????????????? ?????? 80??????????????? ???????????? ??? ?????????<br>LMS??? ??????????????? 90????????? ????????? SMS???, ??? ????????? ".G5_ICODE_LMS_MAX_LENGTH."??????????????? LMS??? ???????????????.<br>????????? ?????? SMS??? 16???, LMS??? 48????????????.</div>
                            </td>
                        </tr>
                        <tr class="icode_old_version">
                            <th class="table-form-th">
                                <label for="cf_icode_id" class="label">???????????? ???????????????<br>(?????????)</label>
                            </th>
                            <td>
                                <label class="input form-width-250px">
                                    <input type="text" name="cf_icode_id" value="<?php echo get_sanitize_input($config['cf_icode_id']); ?>" id="cf_icode_id">
                                </label>
                                <div class="note margin-bottom-10"><strong>Note:</strong> ?????????????????? ??????????????? ?????????????????? ???????????????.</div>
                            </td>
                        </tr>
                        <tr class="icode_old_version">
                            <th class="table-form-th">
                                <label for="cf_icode_pw" class="label">???????????? ????????????<br>(?????????)</label>
                            </th>
                            <td>
                                <label class="input form-width-250px">
                                    <input type="password" name="cf_icode_pw" value="<?php echo get_sanitize_input($config['cf_icode_pw']); ?>" id="cf_icode_pw">
                                </label>
                                <div class="note margin-bottom-10"><strong>Note:</strong> ?????????????????? ??????????????? ??????????????? ???????????????.</div>
                            </td>
                        </tr>
                        <tr class="icode_old_version <?php if(!(isset($userinfo['payment']) && $userinfo['payment'])){ echo 'cf_tr_hide'; } ?>">
                            <th class="table-form-th">
                                <label class="label">?????????<br>(?????????)</label>
                            </th>
                            <td>
                                <input type="hidden" name="cf_icode_server_ip" value="<?php echo get_sanitize_input($config['cf_icode_server_ip']); ?>">
                                <label class="input margin-top-5">
                                    <?php if ($userinfo['payment'] == 'A') { ?>
                                    ?????????<input type="hidden" name="cf_icode_server_port" value="7295" id="cf_icode_server_port">
                                    <?php } else if ($userinfo['payment'] == 'C') { ?>
                                    ?????????<input type="hidden" name="cf_icode_server_port" value="7296" id="cf_icode_server_port">
                                    <?php } else { ?>
                                    ??????????????????.<input type="hidden" name="cf_icode_server_port" value="7295" id="cf_icode_server_port">
                                    <?php } ?>
                                </label>
                            </td>
                        </tr>
                        <?php if ($userinfo['payment'] == 'A') { ?>
                        <tr class="icode_old_version">
                            <th class="table-form-th">
                                <label class="label">?????? ??????<br>(?????????)</label>
                            </th>
                            <td>
                                <?php echo number_format($userinfo['coin']); ?> ???.
                                <a href="http://www.icodekorea.com/smsbiz/credit_card_amt.php?icode_id=<?php echo get_text($config['cf_icode_id']); ?>&amp;icode_passwd=<?php echo get_text($config['cf_icode_pw']); ?>" target="_blank" class="btn-e btn-e-sm btn-e-dark text-center">????????????</a>
                            </td>
                        </tr>
                        <?php } ?>
                        <tr class="icode_json_version">
                            <th class="table-form-th">
                                <label class="label" for="cf_icode_token_key">???????????? ?????????<br>(JSON??????)</label>
                            </th>
                            <td>
                                <label class="input form-width-250px">
                                    <input type="text" name="cf_icode_token_key" value="<?php echo isset($config['cf_icode_token_key']) ? get_sanitize_input($config['cf_icode_token_key']) : ''; ?>" id="cf_icode_token_key">
                                </label>
                                <div class="note margin-bottom-10"><strong>Note:</strong> ???????????? JSON ????????? ?????? ???????????? ???????????? ????????? ???????????????.<br>SMS ??????????????? LMS??? ????????? 90????????? ????????? SMS, 90 ~ 2000 ???????????? LMS ??? ????????? ?????? ?????? LMS??? ???????????????.</div>
                                <div class="note margin-bottom-10"><strong>Note:</strong> ???????????? ????????? -> ??????????????? ???????????? ????????? ???????????? ???????????????.</div>
                                <br>
                                ??????????????? : <?php echo $_SERVER['SERVER_ADDR']; ?>
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th">
                                <label class="label">???????????? SMS ??????<br>????????????</label>
                            </th>
                            <td>
                                <?php echo number_format($userinfo['coin']); ?> ???
                            </td>
                        </tr>
                        <tr>
                            <th class="table-form-th">
                                <label class="label">???????????? ????????????</label>
                            </th>
                            <td>
                                <a href="http://icodekorea.com/res/join_company_fix_a.php?sellid=sir2" target="_blank" class="btn-e btn-e-sm btn-e-dark text-center">???????????? ????????????</a>
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

    <div id="anc_cf_extra">
        <div class="pg-anchor">
        <?php echo adm_pg_anchor('anc_cf_extra'); ?>
        </div>
        <div class="adm-table-form-wrap margin-bottom-30">
            <header><strong><i class="fas fa-caret-right"></i> ???????????? ?????? ??????</strong></header>
            <div class="table-list-eb">
                <?php if (!G5_IS_MOBILE) { ?>
                <div class="table-responsive">
                <?php } ?>
                <table class="table">
                    <tbody>
                        <?php for ($i=1; $i<=10; $i++) { ?>
                        <tr>
                            <th class="table-form-th">
                                <label for="cf_<?php echo $i; ?>_subj" class="label">???????????? <?php echo $i; ?> ??????</label>
                            </th>
                            <td>
                                <label class="input form-width-250px">
                                    <input type="text" name="cf_<?php echo $i; ?>_subj" id="cf_<?php echo $i; ?>_subj" value="<?php echo get_text($config['cf_'.$i.'_subj']); ?>">
                                </label>
                            </td>
                        <?php if (G5_IS_MOBILE) { ?>
                        </tr>
                        <tr>
                        <?php } ?>
                            <th class="table-form-th border-left-th">
                                <label for="cf_<?php echo $i; ?>" class="label">???????????? <?php echo $i; ?> ???</label>
                            </th>
                            <td>
                                <label class="input form-width-250px">
                                    <input type="text" name="cf_<?php echo $i; ?>" id="cf_<?php echo $i; ?>" value="<?php echo get_sanitize_input($config['cf_'.$i]); ?>">
                                </label>
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

    </form>
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

$(function() {
    <?php if (!$config['cf_cert_use']) { ?>
    $(".cf_cert_service").addClass("cf_cert_hide");
    <?php } ?>

    $("#cf_cert_use").change(function(){
        switch($(this).val()) {
            case "0":
                $(".cf_cert_service").addClass("cf_cert_hide");
                break;
            default:
                $(".cf_cert_service").removeClass("cf_cert_hide");
                break;
        }
    });

    $("#cf_captcha").on("change", function(){
        if ($(this).val() == 'recaptcha' || $(this).val() == 'recaptcha_inv') {
            $("[class^='kcaptcha_']").hide();
        } else {
            $("[class^='kcaptcha_']").show();
        }
    }).trigger("change");
});

function fconfigform_submit(f) {
    var current_user_ip = "<?php echo $_SERVER['REMOTE_ADDR']; ?>";
    var cf_intercept_ip_val = f.cf_intercept_ip.value;

    if( cf_intercept_ip_val && current_user_ip ){
        var cf_intercept_ips = cf_intercept_ip_val.split("\n");

        for(var i=0; i < cf_intercept_ips.length; i++){
            if ( cf_intercept_ips[i].trim() ) {
                cf_intercept_ips[i] = cf_intercept_ips[i].replace(".", "\.");
                cf_intercept_ips[i] = cf_intercept_ips[i].replace("+", "[0-9\.]+");
                
                var re = new RegExp(cf_intercept_ips[i]);
                if ( re.test(current_user_ip) ){
                    alert("?????? ?????? IP : "+ current_user_ip +" ??? ???????????? ?????? ?????????, ?????? IP??? ????????? ?????????.");
                    return false;
                }
            }
        }
    }

    f.action = "<?php echo $action_url1; ?>";
    return true;
}

<?php if (G5_IS_MOBILE) { ?>
$(function() {
    $(".adm-table-form-wrap td").removeAttr('colspan');
});
<?php } ?>
</script>

<?php
// ???????????? ?????? ???????????? ??????
if($config['cf_cert_use']) {
    // kcb??? ???
    if($config['cf_cert_ipin'] == 'kcb' || $config['cf_cert_hp'] == 'kcb') {
        // ????????????
        if(strtoupper(substr(PHP_OS, 0, 3)) !== 'WIN') {
            if(PHP_INT_MAX == 2147483647) // 32-bit
                $exe = G5_OKNAME_PATH.'/bin/okname';
            else
                $exe = G5_OKNAME_PATH.'/bin/okname_x64';
        } else {
            if(PHP_INT_MAX == 2147483647) // 32-bit
                $exe = G5_OKNAME_PATH.'/bin/okname.exe';
            else
                $exe = G5_OKNAME_PATH.'/bin/oknamex64.exe';
        }

        echo module_exec_check($exe, 'okname');

        if(is_dir(G5_OKNAME_PATH.'/log') && is_writable(G5_OKNAME_PATH.'/log') && function_exists('check_log_folder') ) {
            check_log_folder(G5_OKNAME_PATH.'/log');
        }
    }

    // kcp??? ???
    if($config['cf_cert_hp'] == 'kcp') {
        if(strtoupper(substr(PHP_OS, 0, 3)) !== 'WIN') {
            if(PHP_INT_MAX == 2147483647) // 32-bit
                $exe = G5_KCPCERT_PATH . '/bin/ct_cli';
            else
                $exe = G5_KCPCERT_PATH . '/bin/ct_cli_x64';
        } else {
            $exe = G5_KCPCERT_PATH . '/bin/ct_cli_exe.exe';
        }

        echo module_exec_check($exe, 'ct_cli');
    }

    // LG??? ?????? log ???????????? ??????
    if($config['cf_cert_hp'] == 'lg') {
        $log_path = G5_LGXPAY_PATH.'/lgdacom/log';

        if(!is_dir($log_path)) {
            echo '<script>'.PHP_EOL;
            echo 'alert("'.str_replace(G5_PATH.'/', '', G5_LGXPAY_PATH).'/lgdacom ?????? ?????? log ????????? ???????????? ??? ??????????????? ????????? ????????????.\n> mkdir log\n> chmod 707 log");'.PHP_EOL;
            echo '</script>'.PHP_EOL;
        } else {
            if(!is_writable($log_path)) {
                echo '<script>'.PHP_EOL;
                echo 'alert("'.str_replace(G5_PATH.'/', '',$log_path).' ????????? ??????????????? ????????? ????????????.\n> chmod 707 log");'.PHP_EOL;
                echo '</script>'.PHP_EOL;
            }
        }
    }
}
?>