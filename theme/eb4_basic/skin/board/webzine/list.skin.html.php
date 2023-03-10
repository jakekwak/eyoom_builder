<?php
/**
 * skin file : /theme/THEME_NAME/skin/board/webzine/list.skin.html.php
 */
if (!defined('_EYOOM_')) exit;

add_stylesheet('<link rel="stylesheet" href="'.EYOOM_THEME_URL.'/plugins/sly/tab_scroll_category.css" type="text/css" media="screen">',0);
add_stylesheet('<link rel="stylesheet" href="'.EYOOM_THEME_URL.'/plugins/sweetalert2/sweetalert2.min.css" type="text/css" media="screen">',0);
?>

<style>
.board-list {font-size:.9375rem}
.board-list .board-setup {position:relative;border:1px solid #d5d5d5;height:38px;margin-bottom:20px}
.board-list .board-setup .select {position:absolute;top:-1px;left:-1px;display:inline-block;width:200px}
.board-list .board-setup-btn-box {position:absolute;top:-1px;right:-1px;display:inline-block;width:420px}
.board-list .board-setup-btn {float:left;width:25%;height:38px;line-height:38px;color:#fff;text-align:center;font-size:.8125rem}
.board-list .board-setup-btn:nth-child(odd) {background-color:#000}
.board-list .board-setup-btn:nth-child(even) {background-color:#3c3c3e}
.board-list .board-setup-btn:hover {opacity:0.8}
.board-list .favorite-setup {display:inline-block;width:125px;margin-left:15px}
.board-list .favorite-setup .toggle {padding-right:45px}
.board-webzine .webzine-item {position:relative;border-top:1px solid #eaeaea;width:100%;padding:20px 0;display:flex}
.board-webzine .webzine-item .webzine-img {flex-shrink:0;width:300px;margin-right:20px}
.board-webzine .webzine-item .webzine-desc {flex-grow:1;position:relative}
.board-webzine .webzine-item .webzine-noimg-desc {position:relative}
.board-webzine .webzine-item .webzine-img-box {position:relative;overflow:hidden;max-height:200px}
.board-webzine .webzine-item .webzine-img-box-in {position:relative;overflow:hidden}
.board-webzine .webzine-item .webzine-img-box-in:after {content:"";text-align:center;position:absolute;display:block;left:0;top:0;opacity:0;-moz-transition:all 0.2s ease 0s;-webkit-transition:all 0.2s ease 0s;-ms-transition:all 0.2s ease 0s;-o-transition:all 0.2s ease 0s;transition:all 0.2s ease 0s;width:100%;height:100%;background:rgba(0,0,0,0.3)}
.board-webzine .webzine-item .webzine-img-box-in .movie-icon {display:inline-block;position:absolute;top:50%;left:50%;width:50px;height:50px;line-height:50px;text-align:center;color:#fff;font-size:40px;transform:translate(-50%,-50%);z-index:1}
.board-webzine .webzine-item:hover .webzine-img-box-in:after {opacity:1}
.board-webzine .webzine-item .webzine-desc h4 {font-size:1.125rem;color:#252525;margin-top:0;margin-bottom:15px;line-height:1.4;word-break:keep-all;overflow:hidden;text-overflow:ellipsis;display:-webkit-box;-webkit-line-clamp:2;-webkit-box-orient:vertical}
.board-webzine .webzine-item .webzine-desc h4 .webzine-new-icon {position:relative;display:inline-block;width:18px;height:14px;background-color:#cc2300;margin-right:2px}
.board-webzine .webzine-item .webzine-desc h4 .webzine-new-icon:before {content:"";position:absolute;top:4px;left:5px;width:2px;height:6px;background-color:#fff}
.board-webzine .webzine-item .webzine-desc h4 .webzine-new-icon:after {content:"";position:absolute;top:4px;right:5px;width:2px;height:6px;background-color:#fff}
.board-webzine .webzine-item .webzine-desc h4 .webzine-new-icon b {position:absolute;top:3px;left:8px;width:2px;height:8px;background-color:#fff;transform:rotate(-60deg)}
.board-webzine .webzine-item:hover .webzine-desc h4 {text-decoration:underline}
.board-webzine .webzine-item .webzine-checkbox {display:inline-block;position:absolute;top:-2px;right:-10px;z-index:1}
.board-webzine .webzine-item .webzine-cont {position:relative;color:#959595;overflow:hidden;text-overflow:ellipsis;display:-webkit-box;-webkit-line-clamp:2;
-webkit-box-orient:vertical;margin-bottom:10px}
.board-webzine .webzine-item .webzine-info {position:relative;border-top:1px solid #f2f2f2;padding-top:10px}
.board-webzine .webzine-item .webzine-info span i {color:#b5b5b5}
.board-webzine .webzine-item .webzine-info strong {font-weight:400}
.board-webzine .webzine-item .webzine-info .webzine-photo {display:inline-block;margin-right:2px}
.board-webzine .webzine-item .webzine-info .webzine-photo img {width:17px;height:17px;border-radius:50%}
.board-webzine .webzine-item .webzine-info .webzine-photo .webzine-user-icon i {font-size:.9375rem;color:#252525}
.board-webzine .webzine-item .webzine-info .webzine-lv-icon {display:inline-block;margin-left:2px}
.board-webzine .webzine-ratings .star-ratings-list {width:80px;height:18px}
.board-webzine .webzine-ratings .star-ratings-list li {padding:0;float:left;margin-right:0}
.board-webzine .webzine-ratings .star-ratings-list li .rating {color:#a5a5a5;font-size:.8125rem;line-height:normal}
.board-webzine .webzine-ratings .star-ratings-list li .rating-selected {color:#cc2300;font-size:.8125rem}
.board-webzine .webzine-item-notice {position:relative;overflow:hidden;border:1px solid #757575;padding:12px 15px;margin-bottom:20px}
.board-webzine .webzine-item-notice .label {font-size:.8125rem;font-weight:normal;margin-bottom:0}
.board-list .view-infinite-more {margin-top:30px;margin-bottom:40px}
.board-list .view-infinite-more .btn-e-xlg {position:relative;height:50px;line-height:50px;padding:0 120px;font-size:1.0625rem !important;border:1px solid #b5b5b5;background:#fff;color:#757575}
.board-list .view-infinite-more .btn-e-xlg i {position:absolute;top:10px;right:5px;font-size:30px;color:#fff;transition:all 0.2s ease-in-out}
.board-list .view-infinite-more .btn-e-xlg:hover {border:1px solid #959595;background:#f5f5f5;color:#000}
.board-list .view-infinite-more .btn-e-xlg:hover i {color:#b5b5b5}
#infscr-loading {text-align:center;z-index:100;position:absolute;left:50%;bottom:0;width:200px;margin-left:-100px;padding:8px 0;background:#000;opacity:0.8;color:#fff}
.board-list .board-list-button-wrap:after {content:"";display:block;clear:both}
.board-list .board-list-button-wrap .blbw-left {float:left;margin-top:5px}
.board-list .board-list-button-wrap .blbw-right {float:right;margin-top:5px}
@media (max-width:991px) {
    .board-webzine .webzine-item .webzine-img {width:240px}
    .board-webzine .webzine-item .webzine-img-box {max-height:160px}
}
@media (max-width:767px) {
    .board-webzine .webzine-item {display:inherit}
    .board-webzine .webzine-item .webzine-img {flex-shrink:inherit;width:100%;margin-right:0;margin-bottom:15px}
    .board-webzine .webzine-item .webzine-img-box {max-height:240px}
    .board-webzine .webzine-item .webzine-img-box-in .movie-icon {width:40px;height:40px;line-height:40px;font-size:30px}
    .board-webzine .webzine-item .webzine-desc {flex-grow:inherit}
}
</style>

<div class="board-list">
<?php if ($is_admin && !G5_IS_MOBILE && !$wmode) { ?>
    <div class="board-setup btn-edit-mode hidden-xs hidden-sm">
        <span class="eyoom-form">
            <label class="select">
                <select name="set_bo_skin" class="set_bo_skin">
                    <option value="">::????????????::</option>
                    <?php foreach ($bo_skin as $skin) { ?>
                    <option value="<?php echo $skin; ?>" <?php echo $skin == $eyoom_board['bo_skin'] ? 'selected': ''; ?>><?php echo $skin; ?></option>
                    <?php }?>
                </select><i></i>
            </label>
        </span>
        <span class="board-setup-btn-box">
            <a href="<?php echo G5_ADMIN_URL; ?>/?dir=board&amp;pid=board_copy&amp;bo_table=<?php echo $bo_table; ?>&amp;wmode=1"  onclick="eb_admset_modal(this.href); return false;" class="board-setup-btn"><i class="far fa-clone"></i> ????????????</a>
            <a href="<?php echo G5_ADMIN_URL; ?>/?dir=board&amp;pid=board_form&amp;w=u&amp;bo_table=<?php echo $bo_table; ?>&amp;wmode=1"  onclick="eb_admset_modal(this.href); return false;" class="board-setup-btn"><i class="fas fa-list-alt"></i> ????????????</a>
            <a href="<?php echo G5_ADMIN_URL; ?>/?dir=theme&amp;pid=board_form&amp;w=u&amp;bo_table=<?php echo $bo_table; ?>&amp;wmode=1"  onclick="eb_admset_modal(this.href); return false;" class="board-setup-btn"><i class="far fa-list-alt"></i> ????????????</a>
            <a href="<?php echo G5_ADMIN_URL; ?>/?dir=board&amp;pid=board_extend&amp;w=u&amp;bo_table=<?php echo $bo_table; ?>&amp;wmode=1"  onclick="eb_admset_modal(this.href); return false;" class="board-setup-btn"><i class="far fa-plus-square"></i> ???????????? (<?php echo number_format($board['bo_ex_cnt']); ?>)</a>
        </span>
    </div>
    <?php } ?>

    <?php /* ????????? ????????? ?????? ??? ?????? ?????? */ ?>
    <div class="board-info m-b-20">
        <div class="float-start m-t-5 text-gray">
            <u>?????? <?php echo number_format($total_count); ?> ??? - <?php echo $page; ?> ?????????</u>
            <?php if ($is_member && $eyoom['is_community_theme'] == 'y') { ?>
            <span class="favorite-setup eyoom-form">
                <label class="toggle small-toggle green-toggle">
                    <input type="hidden" name="favorite_board" id="favorite_board" value="<?php echo !$is_bo_favorite ? 'n': 'y'; ?>">
                    <input type="checkbox" class="btn_favorite_toggle" value="favorite_board" <?php echo $is_bo_favorite ? 'checked':''; ?>><i></i><span class="text-gray">???????????????</span>
                </label>
            </span>
            <?php } ?>
        </div>
        <?php if ($write_href) { ?>
        <div class="float-end">
            <a href="<?php echo $write_href; ?>" class="btn-e btn-e-lg btn-indigo" type="button">?????????</a>
        </div>
        <?php } ?>
        <div class="clearfix"></div>
    </div>
    <?php /* ????????? ????????? ?????? ??? ?????? ??? */ ?>

    <?php /* ????????? ???????????? ?????? */ ?>
    <?php if ($is_category) { ?>
    <div class="tab-scroll-category">
        <div class="scrollbar">
            <div class="handle">
                <div class="mousearea"></div>
            </div>
        </div>
        <div id="tab-category">
            <div class="category-list">
                <span <?php if (!$decode_sca) { ?>class="active"<?php } ?>><a href="<?php echo $category_href; ?>">???????????? (<?php echo number_format($board['bo_count_write']); ?>)</a></span>
                <?php for ($i=0; $i<count((array)$bocate); $i++) { ?>
                <span <?php if ($decode_sca == $bocate[$i]['ca_name']) { ?>class="active"<?php } ?>><a href="<?php echo get_eyoom_pretty_url($bo_table, '', 'sca='.$bocate[$i]['ca_sca']); ?>"><?php echo $bocate[$i]['ca_name']; ?> (<?php echo $bocate[$i]['ca_count']; ?>)</a></span>
                <?php } ?>
                <span class="fake-span"></span>
            </div>
            <div class="controls">
                <button class="btn prev"><i class="fas fa-caret-left"></i></button>
                <button class="btn next"><i class="fas fa-caret-right"></i></button>
            </div>
        </div>
        <div class="tab-category-divider"></div>
    </div>
    <?php } ?>
    <?php /* ????????? ???????????? ??? */ ?>

    <?php if ($is_admin) { ?>
    <form name="fboardlist" id="fboardlist" action="<?php echo G5_BBS_URL; ?>/board_list_update.php" onsubmit="return fboardlist_submit(this);" method="post" class="eyoom-form">
    <input type="hidden" name="bo_table" value="<?php echo $bo_table; ?>">
    <input type="hidden" name="sfl" value="<?php echo $sfl; ?>">
    <input type="hidden" name="stx" value="<?php echo $stx; ?>">
    <input type="hidden" name="spt" value="<?php echo $spt; ?>">
    <input type="hidden" name="sca" value="<?php echo $sca; ?>">
    <input type="hidden" name="page" value="<?php echo $page; ?>">
    <input type="hidden" name="sw" value="">
    <?php } ?>

    <div class="board-list-button-wrap m-b-15">
        <div class="blbw-left">
            <?php if ($is_checkbox) { ?>
                <button class="btn-e btn-e-sm btn-gray" type="submit" name="btn_submit" value="????????????" onclick="document.pressed=this.value">????????????</button>
                <button class="btn-e btn-e-sm btn-gray" type="submit" name="btn_submit" value="????????????" onclick="document.pressed=this.value">????????????</button>
                <button class="btn-e btn-e-sm btn-gray" type="submit" name="btn_submit" value="????????????" onclick="document.pressed=this.value">????????????</button>
            <?php } ?>
            <?php if ($rss_href) { ?>
            <a href="<?php echo $rss_href; ?>" class="btn-e btn-e-sm btn-amber" type="button"><i class="fas fa-rss"></i></a>
            <?php } ?>
            <a class="btn-e btn-e-sm btn-dark" type="button" data-bs-toggle="modal" data-bs-target=".search-modal"><i class="fas fa-search"></i></a>
        </div>
    </div>

    <?php if ($is_checkbox) { ?>
    <div class="m-b-10">
        <label class="checkbox"><input type="checkbox" id="chkall" onclick="if (this.checked) all_checked(true); else all_checked(false);"><i></i>?????? ????????? ????????? ????????????</label>
    </div>
    <?php } ?>

    <div class="board-webzine">
    <?php for ($i=0; $i<count((array)$list); $i++) { ?>
        <?php if ($list[$i]['is_notice']) { ?>
        <div class="webzine-item-notice">
            <div class="ellipsis">
                <span class="label label-dark text-white m-r-10">??????</span><a href="<?php echo $list[$i]['href']; ?>" <?php echo $infinite_wmode? 'onclick="eb_modal(this.href); return false;"': ''; ?>><strong class="f-s-15r"><?php echo $list[$i]['subject']; ?></strong></a>
            </div>
        </div>
        <?php } else { ?>
        <div class="webzine-item">
            <?php if ($list[$i]['img_content'] && !preg_match('/no image/',$list[$i]['img_content'])) { ?>
            <div class="webzine-img">
                <a href="<?php echo $list[$i]['href']; ?>" <?php echo $infinite_wmode ? 'onclick="eb_modal(this.href); return false;"': ''; ?>>
                    <div class="webzine-img-box">
                        <div class="webzine-img-box-in">
                            <?php echo $list[$i]['img_content']; ?>
                            <?php if ($list[$i]['is_video']) { ?>
                            <span class="movie-icon"><i class="far fa-play-circle"></i></span>
                            <?php } ?>
                        </div>
                    </div>
                </a>
            </div>
            <?php } ?>
            <div class="webzine-desc">
                <h4>
                    <a href="<?php echo $list[$i]['href']; ?>" <?php echo $infinite_wmode ? 'onclick="eb_modal(this.href); return false;"': ''; ?>>
                        <?php if ($list[$i]['icon_new']) { ?>
                        <span class="webzine-new-icon"><b></b></span>
                        <?php } ?>
                        <?php if ($is_category && $list[$i]['ca_name']) { ?>
                        <span class="text-gray m-r-7">[<?php echo $list[$i]['ca_name']; ?>]</span>
                        <?php } ?>
                        <?php if ($wr_id == $list[$i]['wr_id']) { ?>
                        <span class="text-crimson m-r-5">?????????</span><?php echo $list[$i]['subject']; ?>
                        <?php } else { ?>
                        <?php echo $list[$i]['subject']; ?>
                        <?php } ?>
                    </a>
                    <?php if ($is_checkbox) { ?>
                    <span class="webzine-checkbox">
                        <label for="chk_wr_id_<?php echo $i; ?>" class="sound_only"><?php echo $list[$i]['subject']; ?></label>
                        <label class="checkbox">
                            <input type="checkbox" name="chk_wr_id[]" value="<?php echo $list[$i]['wr_id']; ?>" id="chk_wr_id_<?php echo $i; ?>"><i></i>
                        </label>
                    </span>
                    <?php } ?>
                </h4>
                <p class="webzine-cont">
                    <?php if (!G5_IS_MOBILE) { ?>
                    <?php echo cut_str($list[$i]['content'],150, '???'); ?>
                    <?php } else { ?>
                    <?php echo cut_str($list[$i]['content'],80, '???'); ?>
                    <?php } ?>
                </p>
                <div class="webzine-info">
                    <span><?php echo eb_nameview($list[$i]['mb_id'], $list[$i]['wr_name'], $list[$i]['wr_email'], $list[$i]['homepage']); ?></span>
                    <?php if ($list[$i]['gnu_icon']) { ?>
                    <span class="webzine-lv-icon"><img src="<?php echo $list[$i]['gnu_icon']; ?>" alt="??????"></span>
                    <?php } ?>
                    <?php if ($list[$i]['eyoom_icon']) { ?>
                    <span class="webzine-lv-icon"><img src="<?php echo $list[$i]['eyoom_icon']; ?>" alt="??????"></span>
                    <?php } ?>
                    <span class="m-l-7">
                        <?php if ($eyoom_board['bo_sel_date_type'] == '1') { ?>
                        <i class="far fa-clock m-r-5"></i> <?php echo $eb->date_time('Y.m.d', $list[$i]['wr_datetime']); ?>
                        <?php } else if ($eyoom_board['bo_sel_date_type'] == '2') { ?>
                        <i class="far fa-clock m-r-5"></i> <?php echo $eb->date_format('Y.m.d', $list[$i]['wr_datetime']); ?>
                        <?php } ?>
                    </span>
                    <span class="m-l-7"><i class="far fa-eye m-r-5"></i><strong><?php echo number_format($list[$i]['wr_hit']); ?></strong></span>
                    <?php if ($list[$i]['wr_comment'] > 0) { ?>
                    <span class="m-l-7"><i class="far fa-comment-dots text-deep-orange m-r-5"></i><strong class="text-deep-orange"><?php echo number_format($list[$i]['wr_comment']); ?></strong></span>
                    <?php } ?>
                    <?php if ($is_good && $list[$i]['wr_good'] > 0) { ?>
                    <span class="m-l-7"><i class="far fa-thumbs-up m-r-5"></i><strong class="text-teal"><?php echo number_format($list[$i]['wr_good']); ?></strong></span>
                    <?php } ?>
                    <?php if ($is_nogood && $list[$i]['wr_nogood'] > 0) { ?>
                    <span class="m-l-7"><i class="far fa-thumbs-down m-r-5"></i><strong class="text-pink"><?php echo number_format($list[$i]['wr_nogood']); ?></strong></span>
                    <?php } ?>
                    <?php if ($eyoom_board['bo_use_rating'] == '1' && $eyoom_board['bo_use_rating_list'] == '1') { ?>
                    <div class="webzine-ratings float-end">
                        <ul class="list-unstyled star-ratings-list">
                            <li><i class="<?php if ($list[$i]['star'] <= 0) { ?>rating far fa-star<?php } else if ($list[$i]['star'] > 0.3 && $list[$i]['star'] <= 0.7) { ?>rating-selected fas fa-star-half<?php } else if ($list[$i]['star'] > 0.8) { ?>rating-selected fas fa-star<?php } ?>"></i></li>
                            <li><i class="<?php if ($list[$i]['star'] <= 1) { ?>rating far fa-star<?php } else if ($list[$i]['star'] > 1.3 && $list[$i]['star'] <= 1.7) { ?>rating-selected fas fa-star-half<?php } else if ($list[$i]['star'] > 1.8) { ?>rating-selected fas fa-star<?php } ?>"></i></li>
                            <li><i class="<?php if ($list[$i]['star'] <= 2) { ?>rating far fa-star<?php } else if ($list[$i]['star'] > 2.3 && $list[$i]['star'] <= 2.7) { ?>rating-selected fas fa-star-half<?php } else if ($list[$i]['star'] > 2.8) { ?>rating-selected fas fa-star<?php } ?>"></i></li>
                            <li><i class="<?php if ($list[$i]['star'] <= 3) { ?>rating far fa-star<?php } else if ($list[$i]['star'] > 3.3 && $list[$i]['star'] <= 3.7) { ?>rating-selected fas fa-star-half<?php } else if ($list[$i]['star'] > 3.8) { ?>rating-selected fas fa-star<?php } ?>"></i></li>
                            <li><i class="<?php if ($list[$i]['star'] <= 4) { ?>rating far fa-star<?php } else if ($list[$i]['star'] > 4.3 && $list[$i]['star'] <= 4.7) { ?>rating-selected fas fa-star-half<?php } else if ($list[$i]['star'] > 4.8) { ?>rating-selected fas fa-star<?php } ?>"></i></li>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <?php } ?>
    <?php } ?>
    <?php if (count((array)$list) == 0) { ?>
        <div class="text-center text-gray f-s-13r"><i class="fas fa-exclamation-circle m-r-5"></i>???????????? ????????????.</div>
    <?php } ?>
    </div>
    <?php if ($list && $eyoom_board['bo_use_infinite_scroll'] == '1') { ?>
    <div class="view-infinite-more text-center">
        <a id="view-infinite-more" href="#" class="btn-e btn-e-brd btn-gray btn-e-xlg"><strong>??? ??????</strong><i class="far fa-arrow-alt-circle-down"></i></a>
    </div>
    <?php } ?>
    
    <div class="board-list-button-wrap m-t-15">
        <div class="blbw-left">
            <?php if ($is_checkbox) { ?>
                <button class="btn-e btn-e-sm btn-gray" type="submit" name="btn_submit" value="????????????" onclick="document.pressed=this.value">????????????</button>
                <button class="btn-e btn-e-sm btn-gray" type="submit" name="btn_submit" value="????????????" onclick="document.pressed=this.value">????????????</button>
                <button class="btn-e btn-e-sm btn-gray" type="submit" name="btn_submit" value="????????????" onclick="document.pressed=this.value">????????????</button>
            <?php } ?>
            <?php if ($rss_href) { ?>
            <a href="<?php echo $rss_href; ?>" class="btn-e btn-e-sm btn-amber" type="button"><i class="fas fa-rss"></i></a>
            <?php } ?>
            <a class="btn-e btn-e-sm btn-dark" type="button" data-bs-toggle="modal" data-bs-target=".search-modal"><i class="fas fa-search"></i></a>
        </div>
        <div class="blbw-right">
            <?php if ($write_href) { ?>
            <a href="<?php echo $write_href; ?>" class="btn-e btn-e-sm btn-indigo" type="button">?????????</a>
            <?php } ?>
        </div>
    </div>

    <?php if ($is_admin) { ?>
    </form>
    <?php } ?>
</div>

<div class="board-pagination">
    <?php if ($eyoom_board['bo_use_infinite_scroll'] != '1') { ?>
    <?php /* ????????? */ ?>
    <?php echo eb_paging($eyoom['paging_skin']);?>
    <?php } else { ?>
    <div id="infinite_pagination">
        <a class="next" href="<?php echo get_eyoom_pretty_url($bo_table,'','&amp;sca='.$sca.'&amp;page='.($page+1)); ?>"></a>
    </div>
    <?php } ?>
</div>

<?php /* ????????? ?????? ?????? ?????? */ ?>
<div class="modal fade search-modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title f-s-20r"><i class="fas fa-search text-gray m-r-7"></i><strong><?php echo $board['bo_subject']; ?> ??????</strong></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <?php /* ????????? ?????? ?????? */ ?>
                <fieldset id="bo_sch" class="eyoom-form">
                    <form name="fsearch" method="get">
                    <input type="hidden" name="bo_table" value="<?php echo $bo_table; ?>">
                    <input type="hidden" name="sca" value="<?php echo $sca; ?>">
                    <input type="hidden" name="sop" value="and">
                    <label for="sfl" class="sound_only">????????????</label>
                    <section class="m-t-10">
                        <label class="select">
                            <select name="sfl" id="sfl" class="form-control">
                                <option value="wr_subject"<?php get_selected($sfl, 'wr_subject', true); ?>>??????</option>
                                <option value="wr_content"<?php get_selected($sfl, 'wr_content'); ?>>??????</option>
                                <option value="wr_subject||wr_content"<?php get_selected($sfl, 'wr_subject||wr_content'); ?>>??????+??????</option>
                                <option value="mb_id,1"<?php get_selected($sfl, 'mb_id,1'); ?>>???????????????</option>
                                <option value="mb_id,0"<?php get_selected($sfl, 'mb_id,0'); ?>>???????????????(???)</option>
                                <option value="wr_name,1"<?php get_selected($sfl, 'wr_name,1'); ?>>?????????</option>
                                <option value="wr_name,0"<?php get_selected($sfl, 'wr_name,0'); ?>>?????????(???)</option>
                                <?php if (is_array($ex_sfl)) { ?>
                                <?php foreach ($ex_sfl as $key => $ex_name) { ?>
                                <option value="<?php echo $key; ?>"<?php get_selected($sfl, $key, true); ?>><?php echo $ex_name; ?></option>
                                <?php } ?>
                                <?php } ?>
                            </select>
                            <i></i>
                        </label>
                    </section>
                    <section>
                        <label for="stx" class="sound_only">?????????<strong class="sound_only"> ??????</strong></label>
                        <div class="input input-button">
                            <input type="text" name="stx" value="<?php echo stripslashes($stx); ?>" required id="stx">
                            <div class="button"><input type="submit" value="??????">??????</div>
                        </div>
                    </section>
                    </form>
                </fieldset>
                <?php /* ????????? ?????? ??? */ ?>
            </div>
        </div>
    </div>
</div>
<?php /* ????????? ?????? ?????? ??? */ ?>

<?php if ($infinite_wmode) { ?>
<?php /* ????????? ???????????? ?????? ?????? */ ?>
<div class="modal fade view-iframe-modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <iframe id="view-iframe" width="100%" frameborder="0"></iframe>
            </div>
        </div>
    </div>
</div>
<?php /* ????????? ???????????? ?????? ??? */ ?>
<?php } ?>

<?php if ($is_checkbox) { ?>
<noscript>
<p class="text-gray f-s-12r m-t-20"><i class="fas fa-exclamation-circle"></i> ????????????????????? ???????????? ?????? ?????? ????????? ?????? ?????? ?????? ?????? ???????????? ??????????????? ??????????????? ????????????.</p>
</noscript>
<?php } ?>

<script src="<?php echo EYOOM_THEME_URL; ?>/plugins/sweetalert2/sweetalert2.min.js"></script>
<script src="<?php echo EYOOM_THEME_URL; ?>/plugins/imagesloaded/imagesloaded.pkgd.min.js"></script>
<?php if ($eyoom_board['bo_use_infinite_scroll'] == '1') { ?>
<script src="<?php echo EYOOM_THEME_URL; ?>/plugins/infinite-scroll/jquery.infinitescroll.min.js"></script>
<?php } ?>
<?php if ($is_category) { ?>
<script src="<?php echo EYOOM_THEME_URL; ?>/plugins/sly/vendor_plugins.min.js"></script>
<script src="<?php echo EYOOM_THEME_URL; ?>/plugins/sly/sly.min.js"></script>
<script>
$(function() {
    var $frame = $('#tab-category');
    var $wrap  = $frame.parent();
    $frame.sly({
        horizontal: 1,
        itemNav: 'centered',
        smart: 1,
        activateOn: 'click',
        mouseDragging: 1,
        touchDragging: 1,
        releaseSwing: 1,
        scrollBar: $wrap.find('.scrollbar'),
        scrollBy: 1,
        startAt: $frame.find('.active'),
        speed: 300,
        elasticBounds: 1,
        easing: 'easeOutExpo',
        dragHandle: 1,
        dynamicHandle: 1,
        clickBar: 1,
        prevPage: $wrap.find('.prev'),
        nextPage: $wrap.find('.next')
    });
    var tabWidth = $('#tab-category').width();
    var categoryWidth = $('.category-list').width();
    if (tabWidth < categoryWidth) {
        $('.controls').show();
    }
});
</script>
<?php } ?>

<script>
<?php if ($eyoom_board['bo_use_infinite_scroll'] == '1') { ?>
function eb_modal(href) {
    $('.view-iframe-modal').modal('show').on('hidden.bs.modal', function () {
        $("#view-iframe").attr("src", "");
        $('html').css({overflow: ''});
    });
    $('.view-iframe-modal').modal('show').on('shown.bs.modal', function () {
        $("#view-iframe").attr("src", href);
        $('#view-iframe').height(parseInt($(window).height() * 0.85));
        $('html').css({overflow: 'hidden'});
    });
    return false;
}

$(document).ready(function () {
    $(window).resize(function () {
        $('#view-iframe').height(parseInt($(window).height() * 0.7));
    });
    window.closeModal = function(wr_id){
        $('.view-iframe-modal').modal('hide');
        if(wr_id) {
            var w_id = wr_id.split('|');
            for(var i=0;i<w_id.length;i++) {
                $("#list-item-"+w_id[i]).hide();
            }
        }
    };
});

$(function(){
    var $container = $('.board-webzine');
    $container.infinitescroll({
        navSelector  : "#infinite_pagination",
        nextSelector : "#infinite_pagination .next",
        itemSelector : ".webzine-item",
        loading: {
            finishedMsg: 'END',
            img: '<?php echo EYOOM_THEME_URL; ?>/image/loading.gif'
        }
    },
    function( newElements ) {
        var $newElems = $( newElements ).css({ opacity: 0 });
        $newElems.imagesLoaded(function(){
            $newElems.animate({ opacity: 1 });
        });
    });
    $(window).unbind('.infscr');
    $('#view-infinite-more').click(function(){
        $container.infinitescroll('retrieve');
        $('#infinite_pagination').show();
        return false;
    });
});
<?php } ?>
</script>

<?php if ($is_checkbox) { ?>
<script>
function all_checked(sw) {
    var f = document.fboardlist;
    for (var i=0; i<f.length; i++) {
        if (f.elements[i].name == "chk_wr_id[]")
            f.elements[i].checked = sw;
    }
}

function fboardlist_submit(f) {
    var chk_count = 0;
    for (var i=0; i<f.length; i++) {
        if (f.elements[i].name == "chk_wr_id[]" && f.elements[i].checked)
            chk_count++;
    }
    if (!chk_count) {
        Swal.fire({
            title: '<strong class="f-s-20r">??????!</strong>',
            html: "<strong class='text-crimson'>" + document.pressed + "</strong> ??? ???????????? ?????? ?????? ???????????????.",
            icon: 'error',
            confirmButtonColor: '#e53935',
            confirmButtonText: '??????'
        });
        return false;
    }
    if (document.pressed == "????????????") {
        select_copy("copy");
        return;
    }
    if (document.pressed == "????????????") {
        select_copy("move");
        return;
    }
    if (document.pressed == "????????????") {
        if (!confirm("????????? ???????????? ?????? ?????????????????????????\n\n?????? ????????? ????????? ????????? ??? ????????????\n\n???????????? ?????? ???????????? ???????????? ??????\n???????????? ??????????????? ???????????? ???????????????."))
            return false;
        f.removeAttribute("target");
        f.action = g5_bbs_url+"/board_list_update.php";
    }
    return true;
}

// ????????? ????????? ?????? ??? ??????
function select_copy(sw) {
    var f = document.fboardlist;
    if (sw == "copy")
        str = "??????";
    else
        str = "??????";

    var sub_win = window.open("", "move", "left=50, top=50, width=500, height=550, scrollbars=1");
    f.sw.value = sw;
    f.target = "move";
    f.action = g5_bbs_url+"/move.php";
    f.submit();
}
</script>
<?php } ?>

<?php if ($is_admin) { ?>
<script>
$(function() {
    $(".set_bo_skin").change(function() {
        var skin = $(this).val();
        if (!skin) {
            Swal.fire({
                title: '<strong class="f-s-20r">??????</strong>',
                html: '<span class="f-s-15r">????????? ????????? ?????????.</span>',
                icon: 'warning',
                confirmButtonColor: "#e53935",
                confirmButtonText: "??????"
            });
        } else {
            var bo_table = '<?php echo $bo_table; ?>';
            var url = '<?php echo EYOOM_CORE_URL; ?>/board/set_bo_skin.php';
            $.post(url, { bo_table: bo_table, skin: skin }, function() {
                document.location.href = '<?php echo str_replace('&amp;','&', get_pretty_url($bo_table));?>';
            });
        }
    });
});
</script>
<?php } ?>

<?php if ($is_member) { ?>
<script>
$(function() {
    $(".btn_favorite_toggle").change(function() {
        var favorite = $("#favorite_board").val();

        $.post('<?php echo EYOOM_CORE_URL; ?>/board/favorite_board.php', { bo_table: "<?php echo $bo_table; ?>", favorite: favorite });
        if (favorite == 'y') {
            $("#favorite_board").val('n');
            Swal.fire({
                title: '<strong class="f-s-20r">??????</strong>',
                html: '<span class="f-s-15r">????????????????????? <strong class="text-crimson">??????</strong>???????????????.</span>',
                icon: 'success',
                confirmButtonColor: '#e53935',
                confirmButtonText: '??????'
            });
        } else if (favorite == 'n') {
            $("#favorite_board").val('y');
            Swal.fire({
                title: '<strong class="f-s-20r">??????</strong>',
                html: '<span class="f-s-15r">????????????????????? <strong class="text-crimson">??????</strong>???????????????.</span>',
                icon: 'success',
                confirmButtonColor: '#e53935',
                confirmButtonText: '??????'
            });
        }
    });
});
</script>
<?php } ?>