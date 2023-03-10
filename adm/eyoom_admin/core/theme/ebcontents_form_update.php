<?php
/**
 * @file    /adm/eyoom_admin/core/theme/ebcontents_form_update.php
 */
if (!defined('_EYOOM_IS_ADMIN_')) exit;

$sub_menu = "999610";

auth_check_menu($auth, $sub_menu, 'w');

check_demo();

$ec_code             = isset($_POST['ec_code']) ? clean_xss_tags(trim($_POST['ec_code'])) : '';
$post_me_id          = isset($_POST['me_id']) ? clean_xss_tags(trim($_POST['me_id'])) : '';
$post_ec_theme       = isset($_POST['theme']) ? clean_xss_tags(trim($_POST['theme'])) : '';
$post_ec_state       = isset($_POST['ec_state']) ? clean_xss_tags(trim($_POST['ec_state'])) : '';
$post_ec_name        = isset($_POST['ec_name']) ? clean_xss_tags(trim($_POST['ec_name'])) : '';
$post_ec_skin        = isset($_POST['ec_skin']) ? clean_xss_tags(trim($_POST['ec_skin'])) : '';
$post_ec_link_cnt    = isset($_POST['ec_link_cnt']) ? clean_xss_tags(trim($_POST['ec_link_cnt'])) : '';
$post_ec_image_cnt   = isset($_POST['ec_image_cnt']) ? clean_xss_tags(trim($_POST['ec_image_cnt'])) : '';
$post_ec_ext_cnt     = isset($_POST['ec_ext_cnt']) ? clean_xss_tags(trim($_POST['ec_ext_cnt'])) : '';
$post_ec_link        = isset($_POST['ec_link']) ? $eb->filter_url($_POST['ec_link']) : '';
$post_ec_target      = isset($_POST['ec_target']) ? clean_xss_tags(trim($_POST['ec_target'])) : '';
$post_ec_subject     = isset($_POST['ec_subject']) && is_array($_POST['ec_subject']) ? serialize($_POST['ec_subject']) : '';
$post_ec_text        = isset($_POST['ec_text']) && is_array($_POST['ec_text']) ? serialize($_POST['ec_text']) : '';

if ($post_me_id) {
    $sql_me_id = " and me_id = '{$post_me_id}' ";
    $meinfo = sql_fetch("select * from {$g5['eyoom_menu']} where (1) {$sql_me_id} ");
}

$sql_common = "
    ec_code = '{$ec_code}',
    ec_theme = '{$post_ec_theme}',
    me_id = '{$post_me_id}',
    me_code = '{$meinfo['me_code']}',
    ec_state = '{$post_ec_state}',
    ec_skin = '{$post_ec_skin}',
    ec_name = '{$post_ec_name}',
    ec_subject = '{$post_ec_subject}',
    ec_text = '{$post_ec_text}',
    ec_link_cnt = '{$post_ec_link_cnt}',
    ec_image_cnt = '{$post_ec_image_cnt}',
    ec_ext_cnt = '{$post_ec_ext_cnt}',
    ec_link = '{$post_ec_link}',
    ec_target = '{$post_ec_target}',
";

/**
 * ????????? ?????????
 */
$upload_max_filesize = ini_get('upload_max_filesize');

if (empty($_POST)) {
    alert("?????? ?????? ???????????? ????????? ???????????? ????????? ?????? ?????? ????????? ?????????????????????.\\npost_max_size=".ini_get('post_max_size')." , upload_max_filesize=".$upload_max_filesize."\\n?????????????????? ?????? ????????????????????? ?????? ????????????.");
}

/**
 * ?????? ????????????
 */
if ($w == 'u') {
    $sql = "select ec_image, ec_file, ec_filename from {$g5['eyoom_contents']} where ec_code = '{$ec_code}' {$sql_me_id} limit 1";
    $ec = sql_fetch($sql);
    $ec_image = $ec['ec_image'];
    $ec_file = $ec['ec_file'];
    $ec_filename = $ec['ec_filename'];
}

/**
 * ??????????????? ????????? ??????
 */
@mkdir(G5_DATA_PATH.'/ebcontents/'.$post_ec_theme.'/', G5_DIR_PERMISSION);
@chmod(G5_DATA_PATH.'/ebcontents/'.$post_ec_theme.'/', G5_DIR_PERMISSION);

@mkdir(G5_DATA_PATH.'/ebcontents/'.$post_ec_theme.'/img/', G5_DIR_PERMISSION);
@chmod(G5_DATA_PATH.'/ebcontents/'.$post_ec_theme.'/img/', G5_DIR_PERMISSION);

@mkdir(G5_DATA_PATH.'/ebcontents/'.$post_ec_theme.'/file/', G5_DIR_PERMISSION);
@chmod(G5_DATA_PATH.'/ebcontents/'.$post_ec_theme.'/file/', G5_DIR_PERMISSION);

$chars_array = array_merge(range(0,9), range('a','z'), range('A','Z'));

/**
 * ????????? ??????
 */
if ($w == 'u') {
    $ebcontents_imgfile = G5_DATA_PATH.'/ebcontents/'.$post_ec_theme.'/img/'.$del_image_name;
    if ($_POST['ec_image_del'] && file_exists($ebcontents_imgfile) && !is_dir($ebcontents_imgfile)) {
        @unlink($ebcontents_imgfile);
        $ec_image = '';
    }
}

/**
 * ????????? ?????????
 */
$file_upload_msg = '';
$upload = array();
if (is_uploaded_file($_FILES['ec_image']['tmp_name'])) {
    $ext = $qfile->get_file_ext($_FILES['ec_image']['name']);
    $file_name = md5(time().$_FILES['ec_image']['name']).".".$ext;
    if (!preg_match("/\.(jpg|jpeg|gif|png|webp)$/i", $_FILES['ec_image']['name'])) {
        $file_upload_msg .= $_FILES['ec_image']['name'] . '???(???) jpg/gif/png/webp ????????? ????????????.\\n';
    } else {
        $dest_path = G5_DATA_PATH.'/ebcontents/'.$post_ec_theme.'/img/'.$file_name;

        move_uploaded_file($_FILES['ec_image']['tmp_name'], $dest_path);
        chmod($dest_path, G5_FILE_PERMISSION);

        if (file_exists($dest_path)) {
            $size = getimagesize($dest_path);
            $ec_image = $file_name;
        }
    }
}

/**
 * EB????????? ??????????????? ??????
 */
$sql_common .= " ec_image = '" . $ec_image . "', ";

/**
 * ???????????? ??????
 */
if ($w == 'u') {
    $ebcontents_file = G5_DATA_PATH.'/ebcontents/'.$post_ec_theme.'/file/'.$del_file_name;
    if ($_POST['ec_file_del'] && file_exists($ebcontents_file) && !is_dir($ebcontents_file)) {
        @unlink($ebcontents_file);
        $ec_file = '';
        $ec_filename = '';
    }
}

/**
 * ????????????
 */
if (is_uploaded_file($_FILES['ec_file']['tmp_name'])) {
    $upload = new upload;
    $upfile = $upload->upload_file($_FILES['ec_file'], G5_DATA_PATH.'/ebcontents/'.$post_ec_theme.'/file/');
    $ec_file = $upfile['destfile'];
    $ec_filename = $upfile['filename'];
}

/**
 * EB????????? ????????????
 */
$sql_common .= " ec_file = '" . $ec_file . "', ";
$sql_common .= " ec_filename = '" . $ec_filename . "', ";

if ($w == '') {
    $max = sql_fetch("select max(ec_sort) as snum from {$g5['eyoom_contents']} where me_id = '{$post_me_id}' ");
    $ec_sort = $max['snum'] + 1;
    $sql_common .= " ec_sort = '{$ec_sort}', ";
    sql_query(" insert into {$g5['eyoom_contents']} set {$sql_common} ec_regdt = '".G5_TIME_YMDHIS."'");
    $ec_no = sql_insert_id();
    $msg = "EB????????? ???????????? ??????????????????.";

} else if ($w == 'u') {
    $ec_sort = isset($_POST['ec_sort']) ? clean_xss_tags(trim($_POST['ec_sort'])): '';
    $sql_common .= " ec_sort = '{$ec_sort}', ";
    $sql = " update {$g5['eyoom_contents']} set {$sql_common} ec_regdt=ec_regdt where ec_code = '{$ec_code}' {$sql_me_id} ";
    sql_query($sql);
    $msg = "EB????????? ???????????? ?????????????????????.";

} else {
    alert('????????? ??? ?????? ???????????? ???????????????.');
}

/**
 * EB????????? ??????
 */
$ebcontents_path = G5_DATA_PATH.'/ebcontents/'.$post_ec_theme;

/**
 * ??????????????? ????????? ??????
 */
if (!is_dir($ebcontents_path)) {
    @mkdir($ebcontents_path, G5_DIR_PERMISSION);
    @chmod($ebcontents_path, G5_DIR_PERMISSION);
}

/**
 * EB????????? master ?????? ??????
 */
$master_file = $ebcontents_path.'/ec_master_'.$ec_code.'.php';

/**
 * g5_eyoom_contents ??????????????? ?????? ??????
 */
$ec_master = sql_fetch("select * from {$g5['eyoom_contents']} where (1) and ec_code = '{$ec_code}' limit 1 ");

/**
 * ?????? ??????
 */
$qfile->save_file('ec_master', $master_file, $ec_master);

/**
 * ????????? ?????? ???????????????
 */
echo "<script>alert('".$msg."'); window.parent.close_modal_and_reload('".$meinfo['me_code']."');</script>";
exit;
