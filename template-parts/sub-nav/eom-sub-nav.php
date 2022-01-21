<section class="sub-nav">
    <nav class="sub-nav__first">
        <div class="sub-nav__container">
            <a href="<?php echo home_url(); ?>/eom">エステティックオルソメソッド</a>
        </div>
    </nav>
    <nav class="sub-nav__second-slide">
        <div class="sub-nav__container">
            <ul class="sub-nav__menu-slide">
                <li><a href="<?php echo home_url(); ?>/eom/shinbi"             class = "<?php if(strcmp(get_page_uri(), "eom/shinbi") == 0) echo "active"; ?>">            前歯審美歯科治療</a></li>
                <li><a href="<?php echo home_url(); ?>/eom/crown-bridge-inray" class = "<?php if(strcmp(get_page_uri(), "eom/crown-bridge-inray") == 0) echo "active"; ?>">セラミッククラウン<br>ジルコニアクラウン</a></li>
                <li><a href="<?php echo home_url(); ?>/eom/lumineers"          class = "<?php if(strcmp(get_page_uri(), "eom/lumineers") == 0) echo "active"; ?>">         ルミネアーズ</a></li>
                <li><a href="<?php echo home_url(); ?>/eom/whitening"          class = "<?php if(strcmp(get_page_uri(), "eom/whitening") == 0) echo "active"; ?>">         ホワイトニング</a></li>
                <li><a href="<?php echo home_url(); ?>/eom/non-extraction"     class = "<?php if(strcmp(get_page_uri(), "eom/non-extraction") == 0) echo "active"; ?>">    歯を抜かない矯正治療</a></li>
                <li><a href="<?php echo home_url(); ?>/eom/orthodontic"        class = "<?php if(strcmp(get_page_uri(), "eom/orthodontic") == 0) echo "active"; ?>">       前歯部分矯正</a></li>
                <li><a href="<?php echo home_url(); ?>/eom/invisalign"         class = "<?php if(strcmp(get_page_uri(), "eom/invisalign") == 0) echo "active"; ?>">        インビザライン<br>マウスピース矯正</a></li>
                <li><a href="<?php echo home_url(); ?>/eom/gap"                class = "<?php if(strcmp(get_page_uri(), "eom/gap") == 0) echo "active"; ?>">               すきっ歯専門治療</a></li>
            </ul>
        </div>
    </nav>
</section>