<?php 
get_header();
?>
    <section id="main-content">
        <?php
            if(have_posts()):
                while(have_posts()) : the_post();
                    get_template_part('content', get_post_format());
                endwhile;
//                pagination($query);
                else :
                    get_template_part('content', 'none');
            endif;
        ?>
    </section>
<?php
get_footer();
?>