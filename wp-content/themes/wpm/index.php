<?php get_header(); ?>
<div class="content-wrapper">
    <div class="content-main">

        <div class="content">

            <div id='slideshowHolder'>
                <?php $slider = new WP_Query(array('post_type' => 'slider')) ?>
                <?php if ($slider->have_posts()) : while ($slider->have_posts()) : $slider->the_post(); ?>
                    <?php the_post_thumbnail('full') ?>
                <?php endwhile; ?>
                <?php else: ?>
                    <p>место для слайлов</p>
                <?php endif; ?>
            </div>

            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="articles">

                <div class="articles-gen-img">
                    <a href="<?php the_permalink(); ?>">
                        <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail(); ?>
                            <?php else: ?>
                        <img src="<?php bloginfo('template_url') ?>/images/no_img.jpg" alt="Preview image"/>
                        <?php endif; ?>
                    </a>
                </div>
                <div class="articles-head">
                        <span class="articles-date">
                            <img src="<?php bloginfo('template_url') ?>/images/articles-autor.jpg" alt="admin"/>
                            <span><?php the_author(); ?></span> - <?php the_time('M jS, Y') ?>
                        </span>
                    <span class="articles-comments">
                            <img src="<?php bloginfo('template_url') ?>/images/articles-comment.jpg" alt="commets"/>
                            <a href="#"><?php comments_popup_link('коментариев нет', '1 коментарий', 'коминтариев') ?></a>
                        </span>
                </div>

                <h1><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h1>
                <p><?php the_excerpt(); ?></p>

                <p><a href="<?php the_permalink() ?>">Read More</a></p>

            </div>
            <?php endwhile; ?>
            <?php endif; ?>

            <div class="pager">
                <?php posts_nav_link('<span> - </span>', 'prev', 'next') ?>
            </div>

        </div>

        <?php get_sidebar(); ?>

    </div>

</div>
<?php get_footer() ?>
