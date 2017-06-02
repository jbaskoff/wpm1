<?php
/**
 *Загружаемые скрипты
 **/
function load_stiles_scripts()
{
    wp_enqueue_script('jquery-my', get_template_directory_uri() . "/js/jquery-1.10.1.min.js");
    wp_enqueue_script('jqFancyTransitions', get_template_directory_uri() . "/js/jqFancyTransitions.1.8.min.js");
    wp_enqueue_style('style', get_template_directory_uri() . "/style.css");
}

add_action('wp_enqueue_scripts', 'load_stiles_scripts');


register_sidebar($args = array(
    'name' => 'Меню',
    'id' => 'menu_header',
    'before_widget' => '',
    'after_widget' => '',
    'before_title' => '',
    'after_title' => ''));

add_theme_support('post-thumbnails');
set_post_thumbnail_size(180, 180);

$sidebar = array(
    'name' => 'Cайдбар',
    'id' => 'sidebar',
    'description' => '',
    'class' => '',
    'before_widget' => '<div class="sidebar-widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>');

register_sidebar($sidebar);

register_sidebar(array(
    'name' => 'Футер',
    'id' => 'footer',
    'description' => '',
    'class' => '',
    'before_widget' => '<div class="footer-info %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>'));


/**
 * комментарии
 */
if (!function_exists('twentyten_comment')) :
    /**
     * Template for comments and pingbacks.
     *
     * To override this walker in a child theme without modifying the comments template
     * simply create your own twentyten_comment(), and that function will be used instead.
     *
     * Used as a callback by wp_list_comments() for displaying the comments.
     *
     * @since Twenty Ten 1.0
     */
    function twentyten_comment($comment, $args, $depth)
    {
        $GLOBALS['comment'] = $comment;
        switch ($comment->comment_type) :
            case '' :
                ?>
                <li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
                <div id="comment-<?php comment_ID(); ?>">
                    <div class="comment-author vcard">
                        <?php echo get_avatar($comment, 40); ?>
                        <?php printf(__('%s<span class="says"></span>', 'twentyten'), sprintf('<cite class="fn">%s</cite>', get_comment_author_link())); ?>
                    </div><!-- .comment-author .vcard -->
                    <?php if ($comment->comment_approved == '0') : ?>
                        <em class="comment-awaiting-moderation"><?php _e('Your comment is awaiting moderation.', 'twentyten'); ?></em>
                        <br/>
                    <?php endif; ?>

                    <div class="comment-meta commentmetadata"><a
                                href="<?php echo esc_url(get_comment_link($comment->comment_ID)); ?>">
                            <?php
                            /* translators: 1: date, 2: time */
                            printf(__('%1$s в %2$s', 'twentyten'), get_comment_date(), get_comment_time()); ?></a><?php edit_comment_link(__('(Редактировать)', 'twentyten'), ' ');
                        ?>
                    </div><!-- .comment-meta .commentmetadata -->

                    <div class="comment-body"><?php comment_text(); ?></div>

                    <div class="reply">
                        <?php comment_reply_link(array_merge($args, array('depth' => $depth, 'max_depth' => $args['max_depth']))); ?>
                    </div><!-- .reply -->
                </div><!-- #comment-##  -->

                <?php
                break;
            case 'pingback'  :
            case 'trackback' :
                ?>
                <li class="post pingback">
                <p><?php _e('Pingback:', 'twentyten'); ?><?php comment_author_link(); ?><?php edit_comment_link(__('(Edit)', 'twentyten'), ' '); ?></p>
                <?php
                break;
        endswitch;
    }
endif;

add_action('init', 'banner_posts');
function banner_posts(){
    register_post_type('banner', array(
        'labels'             => array(
            'name'               => 'Баннеры', // Основное название типа записи
            'singular_name'      => 'Баннер', // отдельное название записи типа Book
            'add_new'            => 'Добавить новый',
            'add_new_item'       => 'Добавить новый баннер',
            'edit_item'          => 'Редактировать баннер',
            'new_item'           => 'Новый баннер',
            'view_item'          => 'Посмотреть баннер',
            'search_items'       => 'Найти баннер',
            'not_found'          => 'Баннер не найден',
            'not_found_in_trash' => 'В корзине баннеров не найдено',
            'parent_item_colon'  => '',
            'menu_name'          => 'Баннеры'
        ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => true,
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array('title','thumbnail' )
    ) );
}

add_action('init', 'slider_init');
function slider_init(){
    register_post_type('slider', array(
        'labels'             => array(
            'name'               => 'Слайдеры', // Основное название типа записи
            'singular_name'      => 'Слайдер', // отдельное название записи типа Book
            'add_new'            => 'Добавить новый',
            'add_new_item'       => 'Добавить новый слайдер',
            'edit_item'          => 'Редактировать слайдер',
            'new_item'           => 'Новый слайдер',
            'view_item'          => 'Посмотреть слайдер',
            'search_items'       => 'Найти слайдер',
            'not_found'          =>  'Слайдеров не найдено',
            'not_found_in_trash' => 'В корзине слайдеров не найдено',
            'parent_item_colon'  => '',
            'menu_name'          => 'Слайдеры'

        ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => true,
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array('title','thumbnail')
    ) );
}