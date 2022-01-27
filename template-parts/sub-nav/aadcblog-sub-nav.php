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

                    if(!isset($term)) $term = '';
                    
                    $categories = get_terms( [
                        'taxonomy'     => AADCBLOG_CATEGORY,
                        'orderBy'      => 'post_date',
                        'order'        => 'ASC',
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
                        <a href="<?php echo get_term_link($cat->term_id); ?>" 
                            class = "<?php 
                                if(strcmp($term, $cat->slug) == 0) echo "active"; ?>" >   <?php echo $cat->name ?> </a>
                    </li>

                <?php } } else ;?>
            </ul>
        </div>
    </nav>
</section>