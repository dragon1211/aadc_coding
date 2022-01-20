<section class="anti-nav">
    <nav class="anti-nav__first">
        <div class="anti-nav__container">
            <a href="<?php echo home_url(); ?>/anti-aging">アンチエイジング</a>
        </div>
    </nav>
    <nav class="anti-nav__second">
        <div class="anti-nav__container">
            <div class="sp-only">
                <div class="sp-navBtn js-sp-sub-navBtn" style="z-index: 100">
                    <span></span>
                    <span></span>
                </div>
            </div>
            <ul class="sub-nav__menu js-sub-nav-menu">
                <li><a href="<?php echo home_url(); ?>/anti-aging/teeth-cleaning"  class = "<?php if(strcmp(get_the_title(), "teeth-cleaning") == 0) echo "active"; ?>" >   クリーニング</a></li>
                <li><a href="<?php echo home_url(); ?>/anti-aging/gum-care"        class = "<?php if(strcmp(get_the_title(), "gum-care") == 0) echo "active"; ?>">          歯周病治療<br><span class="sp-only-inline">・</span>歯肉ケア</a></li>
                <li><a href="<?php echo home_url(); ?>/anti-aging/grinding"        class = "<?php if(strcmp(get_the_title(), "grinding") == 0) echo "active"; ?>">          歯ぎしり<br><span class="sp-only-inline">・</span>食いしばり治療</a></li>
                <li><a href="<?php echo home_url(); ?>/anti-aging/metal-free"      class = "<?php if(strcmp(get_the_title(), "metal-free") == 0) echo "active"; ?>">        メタルフリープログラム</a></li>
                <li><a href="<?php echo home_url(); ?>/anti-aging/implant"         class = "<?php if(strcmp(get_the_title(), "implant") == 0) echo "active"; ?>">           インプラント</a></li>
                <li><a href="<?php echo home_url(); ?>/anti-aging/anti-aging-dock" class = "<?php if(strcmp(get_the_title(), "anti-aging-dock") == 0) echo "active"; ?>">   アンチエイジング検査</a></li>
                <li><a href="<?php echo home_url(); ?>/anti-aging/injection"       class = "<?php if(strcmp(get_the_title(), "injection") == 0) echo "active"; ?>">         点滴療法・注射<br><span class="sp-only-inline">・</span>サプリメント</a></li>
                <li><a href="<?php echo home_url(); ?>/anti-aging/esthetic"        class = "<?php if(strcmp(get_the_title(), "esthetic") == 0) echo "active"; ?>">          デンタルエステ</a></li>
            </ul>
        </div>
    </nav>
</section>