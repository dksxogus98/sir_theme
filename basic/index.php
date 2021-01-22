<?php
if (!defined('_INDEX_')) define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>
<style>
    .inSlider{width: 930px;background:pink;}
    .inSlider li img{width: 100%;}
</style>

<script>
    $(document).ready(function(){
        $(".slider1st").bxSlider({auto:true});
    });
</script>
<div class="inSlider">
    <ul class="slider1st">
        <li><img src="<? echo G5_THEME_IMG_URL  ?>/pc01.jpg" alt="1111"></li>
        <li><img src="<? echo G5_THEME_IMG_URL  ?>/pc02.jpg" alt="1111"></li>
        <li><img src="<? echo G5_THEME_IMG_URL  ?>/pc03.jpg" alt="1111"></li>
    </ul>
</div>
<div>
    <!-- 공지사항 { -->
    <?php
    // 이 함수가 바로 최신글을 추출하는 역할을 합니다.
    // 사용방법 : latest(스킨, 게시판아이디, 출력라인, 글자수);
    // 테마의 스킨을 사용하려면 theme/basic 과 같이 지정
    echo latest('theme/basic', 'bbs_notice', 2, 30);		// 최소설치시 자동생성되는 갤러리게시판
    ?>
    <!-- } 사진 최신글2 끝 -->
</div>

<?php
include_once(G5_THEME_PATH.'/tail.php');?>
