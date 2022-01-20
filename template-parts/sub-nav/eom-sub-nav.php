<section class="eom-nav">
    <nav class="eom-nav__first">
        <div class="eom-nav__container">
            <a href="<?php echo home_url(); ?>/eom">エステティックオルソメソッド</a>
        </div>
    </nav>
    <nav class="eom-nav__second">
        <div class="eom-nav__container">
            <div class="sp-only">
                <div class="sp-navBtn js-sp-sub-navBtn" style="z-index: 100">
                    <span></span>
                    <span></span>
                </div>
            </div>
            <ul class="sub-nav__menu js-sub-nav-menu">
                <li><a href="<?php echo home_url(); ?>/eom/shinbi"             class = "<?php if(strcmp(get_the_title(), "shinbi") == 0) echo "active"; ?>">            前歯審美歯科治療</a></li>
                <li><a href="<?php echo home_url(); ?>/eom/crown-bridge-inray" class = "<?php if(strcmp(get_the_title(), "crown-bridge-inray") == 0) echo "active"; ?>">セラミッククラウン<br><span class="sp-only-inline">・</span>ジルコニアクラウン</a></li>
                <li><a href="<?php echo home_url(); ?>/eom/lumineers"          class = "<?php if(strcmp(get_the_title(), "lumineers") == 0) echo "active"; ?>">         ルミネアーズ</a></li>
                <li><a href="<?php echo home_url(); ?>/eom/whitening"          class = "<?php if(strcmp(get_the_title(), "whitening") == 0) echo "active"; ?>">         ホワイトニング</a></li>
                <li><a href="<?php echo home_url(); ?>/eom/non-extraction"     class = "<?php if(strcmp(get_the_title(), "non-extraction") == 0) echo "active"; ?>">    歯を抜かない矯正治療</a></li>
                <li><a href="<?php echo home_url(); ?>/eom/orthodontic"        class = "<?php if(strcmp(get_the_title(), "orthodontic") == 0) echo "active"; ?>">       前歯部分矯正</a></li>
                <li><a href="<?php echo home_url(); ?>/eom/invisalign"         class = "<?php if(strcmp(get_the_title(), "invisalign") == 0) echo "active"; ?>">        インビザライン<br><span class="sp-only-inline">・</span>マウスピース矯正</a></li>
                <li><a href="<?php echo home_url(); ?>/eom/gap"                class = "<?php if(strcmp(get_the_title(), "gap") == 0) echo "active"; ?>">               すきっ歯専門治療</a></li>
            </ul>
        </div>
    </nav>
</section>