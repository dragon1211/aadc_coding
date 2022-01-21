<section class="sub-nav">
    <nav class="sub-nav__first">
        <div class="sub-nav__container">
            <a href="<?php echo home_url(); ?>/anti-aging">アンチエイジング</a>
        </div>
    </nav>
    <nav class="sub-nav__second-slide">
        <div class="sub-nav__container">
            <ul class="sub-nav__menu-slide">
                <li><a href="<?php echo home_url(); ?>/anti-aging/teeth-cleaning"  class = "<?php if(strcmp(get_page_uri(), "anti-aging/teeth-cleaning") == 0) echo "active"; ?>" >   クリーニング</a></li>
                <li><a href="<?php echo home_url(); ?>/anti-aging/gum-care"        class = "<?php if(strcmp(get_page_uri(), "anti-aging/gum-care") == 0) echo "active"; ?>">          歯周病治療<br>歯肉ケア</a></li>
                <li><a href="<?php echo home_url(); ?>/anti-aging/grinding"        class = "<?php if(strcmp(get_page_uri(), "anti-aging/grinding") == 0) echo "active"; ?>">          歯ぎしり<br>食いしばり治療</a></li>
                <li><a href="<?php echo home_url(); ?>/anti-aging/metal-free"      class = "<?php if(strcmp(get_page_uri(), "anti-aging/metal-free") == 0) echo "active"; ?>">        メタルフリープログラム</a></li>
                <li><a href="<?php echo home_url(); ?>/anti-aging/implant"         class = "<?php if(strcmp(get_page_uri(), "anti-aging/implant") == 0) echo "active"; ?>">           インプラント</a></li>
                <li><a href="<?php echo home_url(); ?>/anti-aging/anti-aging-dock" class = "<?php if(strcmp(get_page_uri(), "anti-aging/anti-aging-dock") == 0) echo "active"; ?>">   アンチエイジング検査</a></li>
                <li><a href="<?php echo home_url(); ?>/anti-aging/injection"       class = "<?php if(strcmp(get_page_uri(), "anti-aging/injection") == 0) echo "active"; ?>">         点滴療法・注射<br>サプリメント</a></li>
                <li><a href="<?php echo home_url(); ?>/anti-aging/esthetic"        class = "<?php if(strcmp(get_page_uri(), "anti-aging/esthetic") == 0) echo "active"; ?>">          デンタルエステ</a></li>
            </ul>
        </div>
    </nav>
</section>