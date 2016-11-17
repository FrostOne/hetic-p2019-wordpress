<?php
/*
Template Name: Contact
*/

get_header(); // call header.php  

?>

<div class="catch" style="background-image: url(<?php bloginfo('template_directory'); ?>/images/image-30-1.png);">
    <div class="bottom">

    </div>
</div>
<div class="row">
    <div class="col-6 ma">
        <form class="contact">
            <?php echo do_shortcode("[contact-form-7 id='76' title='Contact form 1']"); ?>
        </form>
    </div>
</div>


<?php get_footer(); // call footer.php  ?>