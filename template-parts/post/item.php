<li class="news-item">
    <a href="<?php the_permalink(); ?>" class="news-item__link">
        <div class="news-item__image">
            <?php 
                if( has_post_thumbnail()){ 
                    the_post_thumbnail('media_thumbnail');
                } else {; 
            ?>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/common/slide-common.png" alt="">
            <?php }; ?>		
        </div>
        <div class="news-item__desc">
            <p class="comment">
                <?php 
                    $post_type = get_post_type();
                    
                    if(strcmp($post_type, 'news') == 0){
                        $cat_name = get_post_type_object( 'news') -> labels -> singular_name;
                    } else if(strcmp($post_type, 'aadcblog') == 0) {
                        $cat_name = get_the_terms(get_the_ID(), AADCBLOG_CAT)[0]->name;
                    } else $cat_name = '未定';
                ?>
                <span class="badge"><?php echo '【'.$cat_name.'】'?></span>
                <?php
                    $days = 7;
                    $today = date('U');
                    $date = get_the_time('U');
                    $period = date('U', ($today - $date)) / 86400;
                    if ($days > $period){;?>
                    <span class="new">NEW</span>
                <?php ;}?>
            </p>
            <span class="date">
                <?php echo get_the_date('Y年n月j日'); ?>
            </span>
            <p class="title">
                <?php echo $post-> post_title; ?>
            </p>
        </div>
    </a>
</li>