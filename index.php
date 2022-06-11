<?php get_header(); ?>
<?php if (have_posts()) { ?>
    <?php while (have_posts()) { ?>
        <?php the_post(); ?>
        <h2>
            <a href="<?php the_permalink(); ?>" tittle="<?php the_title_attribute(); ?>">
                <?php the_title(); ?>
            </a>
        </h2>
        <div>
            <?php _themename_post_meta(); ?>
        </div>
        <div>
            <?php the_excerpt(); ?>
        </div>
        <?php _themename_readmore_link(); ?>
    <?php } ?>
    <?php the_posts_pagination(); ?>
<?php } else { ?>
    <p>
        <?php //echo __('Sorry, No posts matched your criteria','_themename');
        ?>
        <?php echo esc_html_e('Sorry, No posts matched your criteria', '_themename'); ?>
    </p>
<?php } ?>

<?php
$comments = 1;

//echo _n('One Comment', 'Comments', $comments, '_themename');
printf(_n('One Comment', '%s Comments', $comments, '_themename'), $comments);

//printf('This post have %s comments',$comments);

$city = 'london';

echo esc_html__('Your city is ', '_themename') . $city;
/*the above code will translate only the text "your city is"
        * it will not translate the city name which is  the variable $city
        * lets make the code more dynamic 
        */

printf(
    /* translators: %s is the city name here */
    esc_html__('Your city is %s', '_themename'),
    $city
);
?>
<?php get_footer(); ?>