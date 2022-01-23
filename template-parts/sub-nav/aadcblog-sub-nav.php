<section class="sub-nav">
    <nav class="sub-nav__first">
        <div class="sub-nav__container">
            <a href="<?php echo home_url(); ?>/aadcblog">Dr.Ogawa Blog</a>
        </div>
    </nav>
    <nav class="sub-nav__second-slide">
        <div class="sub-nav__container">
            <ul class="sub-nav__menu-slide">
                <li><a href="<?php echo home_url(); ?>/aadcblog?category=審美歯科"  class = "<?php if(strcmp(get_page_uri(), "aadcblog/teeth-cleaning") == 0) echo "active"; ?>" >   審美歯科</a></li>
                <li><a href="<?php echo home_url(); ?>/aadcblog/矯正歯科"        class = "<?php if(strcmp(get_page_uri(), "aadcblog/gum-care") == 0) echo "active"; ?>">          矯正歯科</a></li>
                <li><a href="<?php echo home_url(); ?>/aadcblog/前歯部分矯正"        class = "<?php if(strcmp(get_page_uri(), "aadcblog/grinding") == 0) echo "active"; ?>">          前歯部分矯正</a></li>
                <li><a href="<?php echo home_url(); ?>/aadcblog/インビザライン"      class = "<?php if(strcmp(get_page_uri(), "aadcblog/metal-free") == 0) echo "active"; ?>">        インビザライン</a></li>
                <li><a href="<?php echo home_url(); ?>/aadcblog/アンチエイジング"         class = "<?php if(strcmp(get_page_uri(), "aadcblog/implant") == 0) echo "active"; ?>">           アンチエイジング</a></li>
                <li><a href="<?php echo home_url(); ?>/aadcblog/歯科" class = "<?php if(strcmp(get_page_uri(), "aadcblog/anti-aging-dock") == 0) echo "active"; ?>">                  歯科</a></li>
                <li><a href="<?php echo home_url(); ?>/aadcblog/クリニックのこと"       class = "<?php if(strcmp(get_page_uri(), "aadcblog/injection") == 0) echo "active"; ?>">         クリニックのこと</a></li>
                <li><a href="<?php echo home_url(); ?>/aadcblog/プライベート"        class = "<?php if(strcmp(get_page_uri(), "aadcblog/esthetic") == 0) echo "active"; ?>">          プライベート</a></li>
                <li><a href="<?php echo home_url(); ?>/aadcblog/その他"        class = "<?php if(strcmp(get_page_uri(), "aadcblog/esthetic") == 0) echo "active"; ?>">          その他</a></li>
            </ul>
        </div>
    </nav>
</section>