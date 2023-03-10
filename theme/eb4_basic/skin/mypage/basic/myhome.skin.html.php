<?php
/**
 * skin file : /theme/THEME_NAME/skin/mypage/basic/myhome.skin.html.php
 */
if (!defined('_EYOOM_')) exit;

add_stylesheet('<link rel="stylesheet" href="'.EYOOM_THEME_URL.'/plugins/sly/tab_scroll_category.css" type="text/css" media="screen">',0);
add_stylesheet('<link rel="stylesheet" href="'.EYOOM_THEME_URL.'/plugins/sweetalert2/sweetalert2.min.css" type="text/css" media="screen">',0);
?>

<style>
.my-home .my-profile-box {position:relative}
.my-home .my-wallpaper {position:relative;overflow:hidden;height:350px;background:#959595}
.my-home .my-wallpaper img {display:block;max-width:100%;height:auto}
.my-home .my-wallpaper img:after {position:absolute;top:0;bottom:0;left:0;right:0;width:100%;height:100%;content:"";background:rgba(0,0,0,0.15)}
.my-home .my-wallpaper .img-thumbnail {padding:0;border:0}
.my-home .profile-btns {position:absolute;top:20px;right:20px}
.my-home .profile-btns .btn-likes {position:relative}
.my-home .my-introduce {position:absolute;top:20px;left:20px;color:#fff}
.my-home .my-introduce h5 {position:relative;font-weight:700;font-size:1.25rem;margin-bottom:25px}
.my-home .my-introduce h5:after {content:"";display:block;position:absolute;bottom:-10px;left:0;width:15px;height:2px;background:#ffb300}
.my-home .my-introduce h6 {margin-bottom:5px}
.my-home .my-introduce p {width:450px;margin-top:15px}
.my-home .my-photo {position:absolute;bottom:-20px;left:20px}
.my-home .my-photo .photo {position:relative;overflow:hidden;border:5px solid #fff;border-radius:50%}
.my-home .my-photo .photo img {height:80px;width:80px;background-color:#fff;background-size:cover}
.my-home .my-navbar {position:absolute;bottom:0;left:0;width:100%;background:rgba(0,0,0,0.7);text-align:right;padding:15px}
.my-home .my-navbar a {color:#fff;margin-left:15px}
.my-home .my-navbar a:hover {text-decoration:underline}
.my-home-wallpaper .cover-img {display:block;overflow:hidden;text-align:center;margin:0 auto;max-height:360px;background-color:#fff}
.my-home-wallpaper .cover-img i {width:100%;height:150px;line-height:150px;color:#fff;font-size:50px;text-align:center;background:#dadada}
.my-home-wallpaper .cover-img img {display:block;max-width:100%;height:auto}
@media (max-width:1399px) {
    .my-home .my-wallpaper {height:300px}
}
@media (max-width:1199px) {
    .my-home .my-wallpaper {height:250px}
}
@media (max-width:991px) {
    .my-home .my-wallpaper {height:auto}
    .my-home .my-wallpaper img:after {display:none}
    .my-home .my-introduce {position:relative;top:inherit;left:inherit;color:#252525;padding:15px 15px 70px;border-left:1px solid #d5d5d5;border-right:1px solid #d5d5d5}
    .my-home .my-introduce.border-top-1px {border-top:1px solid #d5d5d5}
}
@media (max-width:767px) {
    .my-home .my-introduce p {width:inherit}
}
@media (max-width:576px) {
    .my-home .profile-btns {top:10px;right:10px}
    .my-home .my-photo {bottom:-10px;left:10px}
    .my-home .my-photo .photo img {height:60px;width:60px}
}
</style>

<div class="my-home">
    <div class="container">
        <div class="tab-scroll-category">
            <div class="scrollbar">
                <div class="handle">
                    <div class="mousearea"></div>
                </div>
            </div>

            <div id="tab-category">
                <div class="category-list">
                    <span <?php if (!($userpage == 'following') && !($userpage == 'follower') && !($userpage == 'friends') && !($userpage == 'guest')) { ?>class="active"<?php } ?>><a href="<?php echo G5_URL; ?>/?<?php echo $user['mb_id']; ?>"><?php if ($user['mb_id'] != $member['mb_id']) { ?>[ <strong class="color-indigo"><?php echo $user['mb_nick']; ?></strong> ] ?????? ???<?php } else { ?>?????????<?php } ?></a></span>
                    <span <?php if ($userpage == 'friends') { ?>class="active"<?php } ?>><a href="<?php echo G5_URL; ?>/?<?php echo $user['mb_id']; ?>&friends">????????????</a></span>
                    <span <?php if ($userpage == 'follower') { ?>class="active"<?php } ?>><a href="<?php echo G5_URL; ?>/?<?php echo $user['mb_id']; ?>&follower">?????????</a></span>
                    <span <?php if ($userpage == 'following') { ?>class="active"<?php } ?>><a href="<?php echo G5_URL; ?>/?<?php echo $user['mb_id']; ?>&following">?????????</a></span>
                    <?php if ($is_member) { ?>
                        <?php if ($user['mb_id'] != $member['mb_id']) { ?>
                    <span><a href="<?php echo G5_URL; ?>/?<?php echo $member['mb_id']; ?>">????????? ????????????</a></span>
                        <?php } ?>
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

        <?php if (!($userpage == 'following') && !($userpage == 'follower') && !($userpage == 'friends') && !($userpage == 'guest')) { ?>
        <?php /* ????????? ?????? ?????? */ ?>
        <div class="my-profile-box">
            <div class="my-wallpaper">
                <?php if ($user['wallpaper']) echo $user['wallpaper']; ?>

                <?php if ($is_member) { ?>
                <div class="profile-btns">
                <?php if ($user['mb_id'] != $member['mb_id']) { ?>
                    <a href="javascript:void(0);" class="btn-e btn-dark btn-likes tooltips" data-toggle="tooltip" data-placement="top" data-original-title="<?php echo $user['mb_nick']; ?>?????? ??? ??????"><i class="far fa-thumbs-up"></i> ?????????<span id="like_count" class="badge badge-red"><?php echo $user['cnt_likes']; ?></span></a>
                    <?php if (!$user['follow_token']) { ?>
                    <button type="button" class="btn-e btn-indigo follow_<?php echo $user['mb_id']; ?>" name="<?php echo $user['mb_id']; ?>" value="follow" title="??????????????? ???????????????."><i class="fas fa-check"></i> ????????? ??????</button>
                    <?php } else { ?>
                    <button type="button" class="btn-e btn-gray follow_<?php echo $user['mb_id']; ?>" name="<?php echo $user['mb_id']; ?>" value="unfollow" title="??????????????? ???????????????."><i class="fas fa-times"></i> ????????????</button>
                    <?php } ?>
                <?php } else { ?>
                    <a href="#" class="btn-e btn-e-md btn-e-indigo bd-r-0" data-bs-toggle="modal" data-bs-target=".my-home-wallpaper" title="?????? ????????? ??????">????????????</a>
                    <a href="<?php echo G5_URL; ?>/mypage/" class="btn-e btn-e-md btn-crimson bd-r-0">???????????????<i class="fas fa-caret-right m-l-5"></i></a>
                <?php } ?>
                </div>
                <?php } ?>
            </div>
            <div class="my-introduce <?php if (!$user['wallpaper']) { ?>border-top-1px<?php } ?>">
                <h5><?php echo $user['mb_nick']; ?></h5>
                <h6>- ???????????? : <span><?php echo number_format($user['myhome_hit']); ?></span></h6>
                <h6>- ???????????? : <span><?php echo number_format($user['cnt_likes']); ?></span></h6>
                <?php if ($user['mb_signature']) { ?>
                <p><?php echo stripslashes($user['mb_signature']); ?></p>
                <?php } ?>
            </div>
            <div class="my-navbar">
                <a href="<?php echo G5_URL; ?>/?<?php echo $user['mb_id']; ?>&friends" <?php if ($userpage == 'friends') { ?>class="active"<?php } ?>>
                    ???????????? <?php if ($user['cnt_friends']) { ?><?php echo number_format($user['cnt_friends']); ?><?php } else { ?>0<?php } ?>
                </a>
                <a href="<?php echo G5_URL; ?>/?<?php echo $user['mb_id']; ?>&follower" <?php if ($userpage == 'follower') { ?>class="active"<?php } ?>>
                    ????????? <?php if ($user['cnt_follower']) { ?><?php echo number_format($user['cnt_follower']); ?><?php } else { ?>0<?php } ?>
                </a>
                <a href="<?php echo G5_URL; ?>/?<?php echo $user['mb_id']; ?>&following" <?php if ($userpage == 'following') { ?>class="active"<?php } ?>>
                    ????????? <?php if ($user['cnt_following']) { ?><?php echo number_format($user['cnt_following']); ?><?php } else { ?>0<?php } ?>
                </a>
            </div>
            <div class="my-photo">
                <div class="photo">
                    <?php if ($user['mb_photo']) { echo $user['mb_photo']; } else { ?><img src="<?php echo $eyoom_skin_url['mypage']; ?>/img/user.jpg" alt="????????????"><?php } ?>
                </div>
            </div>
        </div>
        <?php /* ????????? ?????? ??? */ ?>
        <div class="m-b-40"></div>
        <?php } ?>

        <?php /* ????????? ????????? ?????? */ ?>
        <div class="my-content">
            <?php
            switch($userpage) {
                default :
                    /**
                     * ????????? ??????
                     */
                    include_once(EYOOM_CORE_PATH.'/mypage/myhomebox.php');

                    /**
                     * ?????? ????????? ????????????
                     */
                    include_once(EYOOM_CORE_PATH.'/mypage/myhome_posts.php');
                    break;
                case "following":
                    include_once(EYOOM_CORE_PATH.'/mypage/myhome_following.php');
                    break;
                case "follower":
                    include_once(EYOOM_CORE_PATH.'/mypage/myhome_follower.php');
                    break;
                case "friends":
                    include_once(EYOOM_CORE_PATH.'/mypage/myhome_friends.php');
                    break;
            }
            ?>
        </div>
        <?php /* ????????? ????????? ??? */ ?>
    </div>
</div>

<?php /* ??????????????? ?????? ?????? ?????? */ ?>
<div class="modal fade my-home-wallpaper" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form name="wallpaper_photo" method="post" action="<?php echo EYOOM_CORE_URL; ?>/mypage/cover_update.php" enctype="multipart/form-data" class="eyoom-form">
            <input type="hidden" name="old_wallpaper" value="<?php echo $eyoomer['myhome_cover']; ?>">
            <input type="hidden" name="back_url" value="<?php echo $_SERVER['REQUEST_URI']; ?>">
            <div class="modal-header">
                <h5 class="modal-title f-s-20r"><i class="far fa-image text-gray m-r-7"></i><strong>????????? ?????? ????????? ??????</strong></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="cover-img">
                    <?php if ($eyoomer['myhome_cover']) { echo $eyoomer['wallpaper']; } else { ?><i class="far fa-image"></i><?php } ?>
                </div>
                <?php if ($eyoomer['myhome_cover']) { ?>
                <label class="checkbox m-t-10"><input type="checkbox" name="del_wallpaper" value="1"><i></i>??????????????? ??????</label>
                <?php } ?>
                <div class="m-b-20"></div>
                <div class="alert alert-info">
                    <p>?????????????????? ?????????(gif/jpg/png) ????????? ??????????????????, ??????x?????? 1400x520?????? ???????????? ??????????????????.</p>
                </div>
                <label for="file" class="label">?????? ??????????????? ??????</label>
                <div class="input">
                    <input type="file" class="form-control" id="file" name="wallpaper" value="?????????????????????">
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn-e btn-e-lg btn-red" type="submit" value="????????????">????????????</button>
                <button data-bs-dismiss="modal" class="btn-e btn-e-lg btn-dark" type="button"><i class="fas fa-times"></i> ??????</button>
            </div>
            </form>
        </div>
    </div>
</div>
<?php /* ??????????????? ?????? ?????? ??? */ ?>

<script src="<?php echo EYOOM_THEME_URL; ?>/plugins/sly/vendor_plugins.min.js"></script>
<script src="<?php echo EYOOM_THEME_URL; ?>/plugins/sly/sly.min.js"></script>
<script src="<?php echo EYOOM_THEME_URL; ?>/plugins/sweetalert2/sweetalert2.min.js"></script>
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
        prev: $wrap.find('.prev'),
        next: $wrap.find('.next')
    });
    var tabWidth = $('#tab-category').width();
    var categoryWidth = $('.category-list').width();
    if (tabWidth < categoryWidth) {
        $('.controls').show();
    }
});

$(function(){
    $(".btn-likes").click(function(){
        var mb_id = '<?php echo $user['mb_id']; ?>';
        var url = "<?php echo EYOOM_CORE_URL; ?>/mypage/likes.ajax.php";
        $.post(url, {'user':mb_id}, function(data) {
            if (data.result == 'yes') {
                Swal.fire({
                    title: "OK!",
                    text: "'????????? ??????'??? ???????????????.",
                    confirmButtonColor: "#e53935",
                    icon: "success",
                    confirmButtonText: "??????"
                });
                var like_count = parseInt($("#like_count").text())+1;
                $("#like_count").text(like_count);
            } else if (data.result == 'no') {
                Swal.fire({
                    title: "??????!",
                    text: "?????? '????????? ??????'??? ???????????????.",
                    confirmButtonColor: "#e53935",
                    icon: "warning",
                    confirmButtonText: "??????"
                });
            }
        },"json");
    });
});

// ?????????
$(".profile-btns button").click(function(){
    var action = $(this).attr('value');
    var target = $(this).attr('name');
    if (!target) return;

    var url = "<?php echo EYOOM_CORE_URL; ?>/mypage/follow.ajax.php";
    $.post(url, {'action':action,'user':target}, function(data) {
        if(data.result == 'yes') {
            var botton = $(".follow_"+target);
            if (action == 'follow') {
                botton.removeClass('btn-e-teal');
                botton.addClass('btn-e-gray');
                botton.attr('title','???????????? ???????????????.');
                botton.html('<i class="fas fa-times text-white m-r-5"></i>????????? ??????');
                botton.attr('value','unfollow');
                Swal.fire({
                    title: "??????",
                    text: '?????? ????????? ????????????????????????.',
                    confirmButtonColor: "#e53935",
                    icon: "success",
                    confirmButtonText: "??????"
                });
            }
            if (action == 'unfollow') {
                botton.removeClass('btn-e-gray');
                botton.addClass('btn-e-teal');
                botton.attr('title','???????????? ???????????????.');
                botton.html('<i class="fas fa-check text-white m-r-5"></i>?????????');
                botton.attr('value','follow');
                Swal.fire({
                    title: "??????",
                    text: '?????? ????????? ????????? ?????????????????????.',
                    confirmButtonColor: "#e53935",
                    icon: "success",
                    confirmButtonText: "??????"
                });
            }
        } else if (data.result == 'no'){
            Swal.fire({
                title: "??????",
                text: '??????????????? Off ???????????? ???????????????.',
                confirmButtonColor: "#e53935",
                icon: "warning",
                confirmButtonText: "??????"
            });
        }
    },"json");
});
</script>