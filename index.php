<?php get_header(); ?>
    <?php if(have_posts()){?>
        <?php while(have_posts()){ ?>
            <?php the_post();?>
            <h2>
                <a href="<?php the_permalink(); ?>" tittle="<?php the_title_attribute();?>">
                    <?php the_title(); ?>
                </a>
            </h2>
            <div>
             <?php firsttheme_post_meta(); ?>
            </div>
            <div>
                <?php the_excerpt();?>
            </div>
            <?php firsttheme_readmore_link(); ?>
        <?php }?>
        <?php the_posts_pagination();?>
    <?php } else{?>
        <p>
            <?php //echo __('Sorry, No posts matched your criteria','firsttheme');?>
            <?php echo esc_html_e('Sorry, No posts matched your criteria','firsttheme');?>
        </p>
    <?php }?>

    <?php
        $comments = 1;

        //echo _n('One Comment', 'Comments', $comments, 'firsttheme');
        printf (_n('One Comment', '%s Comments', $comments, 'firsttheme'),$comments);

        //printf('This post have %s comments',$comments);

        $city = 'london';

        echo esc_html__( 'Your city is ', 'firsttheme' ). $city;
        /*the above code will translate only the text "your city is"
        * it will not translate the city name which is  the variable $city
        * lets make the code more dynamic 
        */

        printf(
            /* translators: %s is the city name here */
            esc_html__( 'Your city is %s', 'firsttheme' ),
            $city
        );
    ?>
<?php get_footer(); ?>