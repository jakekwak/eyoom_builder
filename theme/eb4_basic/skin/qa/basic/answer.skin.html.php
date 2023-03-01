<?php
/**
 * skin file : /theme/THEME_NAME/skin/qa/basic/answer.skin.html.php
 */
if (!defined('_EYOOM_')) exit;
?>

<style>
.board-view-ans {font-size:.9375rem;border-top:1px solid #757575;padding-top:15px}
.board-view-ans h4 {font-size:1.25rem}
.board-view-ans .ans-datetime {margin:15px 0 0;padding:8px 0;border-top:1px solid #eaeaea;border-bottom:1px solid #eaeaea;color:#757575}
.board-view-ans .ans-con {position:relative;margin:20px 0}
.board-view-ans #bo_v_file {margin-top: 15px;padding: 10px;background-color: #f8f8f8;border-top:1px solid #999;border-bottom:1px solid #999;}
.board-view-ans #bo_v_file h2 {margin: 0 0 10px;padding: 5px 0 10px;font-size: 14px;font-weight: 700;border-bottom:1px solid #ddd;}
.board-view-ans #bo_v_file ul {list-style:none;margin: 0;padding: 0;}
.board-view-ans #bo_v_file ul li {margin-bottom: 5px;font-size: 13px;}
.board-view-ans #bo_v_file ul li i {margin-right: 5px;color: #999;}
.board-view-ans #bo_v_file ul li a:hover {text-decoration:underline;}
</style>

<div class="board-view-ans">
    <h4><strong><span class="text-crimson">답변</span> : <?php echo get_text($answer['qa_subject']); ?></strong></h4>
    <div class="ans-datetime">
        <i class="far fa-clock"></i> <?php echo $answer['qa_datetime']; ?>
    </div>
    <div id="ans_con" class="ans-con">
        <?php
        // 파일 출력
        if(isset($answer['img_count']) && $answer['img_count']) {
            echo "<div id=\"bo_v_img\">\n";

            for ($i=0; $i<$answer['img_count']; $i++) {
                echo get_view_thumbnail($answer['img_file'][$i], $qaconfig['qa_image_width']);
            }

            echo "</div>\n";
        }
        ?>

        <?php echo get_view_thumbnail(conv_content($answer['qa_content'], $answer['qa_html']), $qaconfig['qa_image_width']); ?>

        <?php if(isset($answer['download_count']) && $answer['download_count']) { ?>
        <!-- 첨부파일 시작 { -->
        <section id="bo_v_file">
            <h2>첨부파일</h2>
            <ul>
            <?php
            // 가변 파일
            for ($i=0; $i<$answer['download_count']; $i++) {
            ?>
                <li>
                    <i class="fa fa-download" aria-hidden="true"></i>
                    <a href="<?php echo $answer['download_href'][$i];  ?>" class="view_file_download" download>
                        <strong><?php echo $answer['download_source'][$i] ?></strong>
                    </a>
                </li>
            <?php
            }
            ?>
            </ul>
        </section>
        <!-- } 첨부파일 끝 -->
        <?php } ?>
    </div>
    <?php echo $config['cf_editor'] == 'tuieditor' ? $bbs->tuieditor_viewer("ans_con"): ''; ?>
    <div class="float-start">
        <?php if ($answer_update_href) { ?>
        <a href="<?php echo $answer_update_href; ?>" class="btn-e btn-gray">답변수정</a>
        <?php } ?>
        <?php if ($answer_delete_href) { ?>
        <a href="<?php echo $answer_delete_href; ?>" class="btn-e btn-gray" onclick="del(this.href); return false;">답변삭제</a>
        <?php } ?>
    </div>
    <div class="float-end">
        <a href="<?php echo $rewrite_href; ?>" class="btn-e btn-teal">추가질문</a>
    </div>
    <div class="clearfix"></div>
</div>