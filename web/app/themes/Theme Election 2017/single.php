<?php
/*
Single Post Template: [Single blog]
*/
get_header(); // call header.php
?>

<main>
  <section class="single">
    <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
        <article class="single__article">
          <div class="cards__cover" style="background-image: url('<?php the_post_thumbnail_url(); ?>'); background-position: 0; background-size: 100%"></div>
          <div>
            <div class="cards__title"><?php (the_title());?></div>
            <div class="single__author">Par <?php (the_author());?></div>
            <div class="single__content"><?php the_content(); ?>
            </div>
          </article>
        <?php endwhile; ?>
      <?php endif; ?>

    </section>
  </main>
  <?php get_footer(); // call footer.php  ?>