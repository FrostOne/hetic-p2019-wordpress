<?php
/*
Template Name: Blog
 */

get_header(); // call header.php
?>
<div class="blog">
  <main>
    <section class="cards">
      <?php
      $recentPosts = new WP_Query();
      $recentPosts->query('showposts=5');
      ?>

      <?php while ($recentPosts->have_posts()): $recentPosts->the_post();?>
        <article class="cards__single">
          <div class="cards__cover" style="background-image: url('<?php the_post_thumbnail_url(); ?>'); background-position: 0; background-size: 100%"></div>
          <div class="cards__description-container">
            <div class="cards__title"><?php (the_title());?></div>
            <div class="cards__subtitle">Par <?php (the_author());?></div>
            <div class="cards__description"><?php the_excerpt();?>
              <a href="<?php the_permalink();?>" class="cards__cta">Lire la suite</a></div>
          </div>
      </article>
    <?php endwhile;?>

    </section>
    <section>
    <h3>Auteurs</h3>
    <div class="authors">
        <?php
        $args = array(
            'post_type'      => 'soutien',
            'posts_per_page' => 4,
            );
        // The Query
        $the_query = new WP_Query($args);
        // The Loop
        if ($the_query->have_posts()) {
            while ($the_query->have_posts()) {
                $the_query->the_post();
                ?>
                <div class="authors__single">
                    <div class="authors__image" style="background-image : url('<?php the_field('photo');?>')"></div>
                    <div>
                        <div class="authors__name"><?php the_field('nom_et_prenom');?></div>
                        <div class="authors__title"><?php the_field('poste_actuel');?></div>
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
</main>
</div>
<?php get_footer(); // call footer.php  ?>