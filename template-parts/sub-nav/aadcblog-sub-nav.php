<section class="sub-nav">
    <nav class="sub-nav__first">
        <div class="sub-nav__container">
            <a href="<?php echo home_url(); ?>/aadcblog">Dr.Ogawa Blog</a>
        </div>
    </nav>
    <nav class="sub-nav__second-slide">
        <div class="sub-nav__container">
            <ul class="sub-nav__menu-slide">
                <?php 
                    $post_type = get_post_type();

                    $cat_slug = '';
                    if(strcmp($post_type, 'aadcblog') == 0){
                        $cat_slug = get_the_terms(get_the_ID(), 'aadcblog_category')[0]->slug;
                    }

                    $categories = get_terms( [
                        'taxonomy'     => 'aadcblog_category',
                        'child_of'     => 0,
                        'orderBy'      => 'post_date',
                        'order'        => 'ASC',
                        'hierarchical' => 1,
                        'exclude'      => '',
                        'include'      => '',
                        'number'       => 0,
                        'pad_counts'   => false,
                        // полный список параметров смотрите в описании функции http://wp-kama.ru/function/get_terms
                    ] );

                    if(count($categories) > 0) {
                        foreach($categories as $cat){
                ?>
                    <li>
                        <a href="<?php echo home_url()."/aadcblog/".$cat->slug; ?>" 
                            class = "<?php 
                                if(strcmp($cat_slug, $cat->slug) == 0) echo "active"; ?>" >   <?php echo $cat->name ?> </a>
                    </li>

                <?php } } else ;?>
            </ul>
        </div>
    </nav>
</section>