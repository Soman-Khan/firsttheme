<?php
    function firsttheme_post_meta(){

?>
<?php
    /* make the code translateable or international*/
    /* translators: %s: post date */
    printf(
        esc_html__( 'posted on %s', 'firsttheme' ),
        '<a href="'.esc_url(get_permalink()).'">'.
        '<time datetime="'.esc_attr(get_the_date('c')).' ">'.
           esc_html(get_the_date()).
        '</time>'.
    '</a>'
    );

    /* translators: %s: post author */
    printf(
        esc_html__( ' By %s', 'firsttheme' ),
        '<a href="'.esc_url( get_author_posts_url(get_the_author_meta('ID'))).'">'.
        '<time datetime="'.esc_attr(get_the_date('c')).' ">'.
        esc_html(get_the_author()).
        '</time>'.
    '</a>'
    );
?>
   <?php //echo "posted on"; ?>
    <!-- <a href="<?php //echo esc_url(get_permalink()); ?>">
        <time datetime="<?php //echo esc_attr(get_the_date('c')); ?>">
            <?php //echo esc_html(get_the_date());?>
        </time>
    </a>
    By
    <a href="<?php //echo esc_url( get_author_posts_url(get_the_author_meta('ID')) );?>">
        <?php //echo esc_html(get_the_author()); ?>
    </a> -->

<?php 
    }
?>
<?php
    function firsttheme_readmore_link(){
        echo '<a href="'. get_the_permalink(). '"tittle="'.the_title_attribute(['echo' => false]).'">';

        /* translators: %s: post title */
        printf(
            /* this will allow the span tag and escape all html tags*/
            wp_kses( 
                __( 'Read More <span class="u-screen-reader-text">About %s </span>', 'firsttheme'),
                [
                    'span' => [ 'class' => [] ]
                ]
            ),
            get_the_title()
        );
        //echo 'Read More<span class="u-screen-reader-text">About'.get_the_title(); '</span>';
        echo '</a>';
    }
?>