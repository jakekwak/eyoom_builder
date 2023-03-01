<?php
/**
 * @file    /adm/eyoom_admin/core/config/auth_update.php
 */
if (!defined('_EYOOM_IS_ADMIN_')) exit;

$sub_menu = "100250";

check_demo();

if ($is_admin != 'super' || $member['mb_id'] != $config['cf_admin']) {
    alert('최고관리자만 접근 가능합니다.');
}

/**
 * 이윰 관리자모드 테마인지 체크
 */
$cf_eyoom_admin_theme = get_skin_dir('theme', EYOOM_ADMIN_PATH);
$mg_theme = isset($_POST['mg_theme']) ? clean_xss_tags($_POST['mg_theme']) : '';
if (!in_array($mg_theme, $cf_eyoom_admin_theme)) {
    alert('잘못된 접근입니다.');
}

/**
 * 등록된 회원인지 체크
 */
$mb = get_member($mb_id);
if (!$mb['mb_id']) {
    alert('존재하는 회원아이디가 아닙니다.');
}

$mg_menu = serialize($_POST['mg_menu']);

check_admin_token();

require_once G5_CAPTCHA_PATH . '/captcha.lib.php';

if (!chk_captcha()) {
    alert('자동등록방지 숫자가 틀렸습니다.');
}

$row = sql_fetch("select count(*) as cnt from {$g5['eyoom_manager']} where mb_id = '{$mb_id}' and mg_theme = '{$mg_theme}' ");
if ($row['cnt'] > 0) {
    $sql = " update {$g5['eyoom_manager']} set mg_theme = '{$mg_theme}', mg_menu = '{$mg_menu}' where mb_id = '{$mb_id}' ";
    sql_query($sql, false);
} else {
    $sql = " insert into {$g5['eyoom_manager']} set mb_id = '{$mb_id}', mg_theme = '{$mg_theme}', mg_menu = '{$mg_menu}' ";
    sql_query($sql, false);
}

goto_url(G5_ADMIN_URL . '/?dir=config&amp;pid=multi_manager&amp;' . $qstr);