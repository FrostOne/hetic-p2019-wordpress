<?php get_header(); // call header.php  ?>

<div class="carousel__slider js_slider js_simple">
<?php wd_slider(1); ?>
</div>
<section class="description">
  <h2 class="description__title">Votre vote est <strong>important</strong></h2>
  <p class="description__content">You’re disgusting. You could see there was text coming out of her eyes, text coming out of her wherever. Be careful, or I will spill the beans on your placeholder text.I write the best placeholder text, and I'm the biggest developer on the web by far... While that's mock-ups and this is politics, are they really so different?I have a 10 year old son. He has words. He is so good with these words it's unbelievable. That other text? Sadly, it’s no longer a 10.Lorem Ipsum is the single greatest threat. We are not - we are not keeping up with other websites. have to do better... and certainly ipsum is one of them. I write the best placeholder text, and I'm the biggest developer on the web by far... While that's mock-ups and this is politics, are they really so different? Trump Ipsum is calling for a total and complete shutdown of Muslim text entering your website. Trump Ipsum is calling for a total and complete shutdown of Muslim text entering your website. Lorem Ipsum is unattractive, both inside and out. I fully understand why it’s former users left it for something else. They made a good decision.I write the best placeholder text, and I'm the biggest developer on the web by far... While that's mock-ups and this is politics, are they really so different? Lorem Ipsum's father was with Lee Harvey Oswald prior to Oswald's being, you know, shot. Lorem Ispum is a choke artist. It chokes!This placeholder text is gonna be HUGE. Lorem Ipsum is unattractive, both inside and out. I fully understand why it’s former users left it for something else. They made a good decision. The other thing with Lorem Ipsum is that you have to take out its family. You could see there was text coming out of her eyes, text coming out of her wherever.I think the only card she has is the Lorem card. I don't think anybody knows it was Russia that wrote Lorem Ipsum, but I don't know, maybe it was. It could be Russia, but it could also be China. It could also be lots of other people. It also could be some wordsmith sitting on their bed that weights 400 pounds. Ok? I think the only difference between me and the other placeholder text is that I’m more honest and my words are more beautiful. My text is long and beautiful, as, it has been well documented, are various other parts of my website.</p>
</section>
<section class="supporters">
    <?php
    $args=array(
        'post_type' => 'soutien',
        'posts_per_page' => 16
        );
    // The Query
    $the_query = new WP_Query( $args );
    // The Loop
    if ( $the_query->have_posts() ) {
        while ( $the_query->have_posts() ) {
            $the_query->the_post();
            ?>
            <div class="supporters__single">
                <div class="supporters__image" style="background-image:url('<?php the_field('photo'); ?>');"></div>
                <h5 class="supporters__name"><?php the_field('poste_actuel'); ?></h5>
                <div class="supporters__job"><?php the_field('nom_et_prenom'); ?></div>
            </div>
            <?php      
        }
        /* Restore original Post Data */
        wp_reset_postdata();
    }
    ?>
</section>
<section class="cta">
  <div class="cta__text">Vous avez le pouvoir de changer les choses, votez blanc</div>
  <div class="button">SOUTENEZ LE VOTE <strong>BLANC</strong></div>
</section>
<section style="background-color : black;">
  <div class="comments">
      <?php
      $args=array(
        'post_type' => 'soutien',
        'posts_per_page' => 3
        );
    // The Query
      $the_query = new WP_Query( $args );
    // The Loop
      if ( $the_query->have_posts() ) {
        while ( $the_query->have_posts() ) {
            $the_query->the_post();
            ?>
            <div class="comments__single">
                <div class="comments__content"><?php the_field('pourquoi_votez-vous_blanc_'); ?></div>
                <div class="comments__profile-container">
                    <div class="comments__picture" style="background-image: url('<?php the_field('photo'); ?>')"></div>
                    <div class="comments__name"><?php the_field('nom_et_prenom'); ?></div>
                </div>
            </div>
            <?php      
        }
        /* Restore original Post Data */
        wp_reset_postdata();
    }
    ?>
</div>
</section>
<?php get_footer(); // call footer.php  ?>