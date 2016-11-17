<?php get_header(); // call header.php  ?>

<div class="carousel__slider js_slider js_simple">
    <?php wd_slider(1);?>
    <div class="carousel__text">
      <h2 class="carousel__title">POUR UNE<br>FRANCE PLUS <span style="color: #bfded9;">NEUTRE</span></h2>
      <div class="carousel__description">Le vote blanc consiste à déposer un bulletrin blanc, ou une enveloppe vide dans l’urne. Cela manifeste une envie de </div>
      <div class="button">SOUTENEZ LE <strong>VOTE BLANC</strong></div>
  </div>
</div>
<section class="description">
  <h2 class="description__title">Votre vote est <strong>important</strong></h2>
  <p class="description__content">Faites votre devoir de citoyen, et votez pour vos convictions. Même si en France, le droit de vote est un droit et n’est pas, juridiquement, une obligation.
    La question d’une éventuelle obligation du vote a souvent été débattue. Elle existe d’ailleurs dans certains pays, tels que la Belgique, la Suisse ou la Grèce. Néanmoins, elle n’a jamais été envisagée sérieusement en France. En revanche, le droit de vote est moralement un devoir pour les citoyens, comme le rappelle l’inscription figurant sur les cartes électorales : " Voter est un droit, c’est aussi un devoir civique ".
    Le vote n’est pas juridiquement un devoir d’abord par principe. Si le vote est un droit, on peut, comme tout autre droit (ex : liberté de réunion ou d’association), ne pas l’exercer. Il pourrait sembler paradoxal de transformer un droit aussi essentiel en contrainte.
    Ce n’est pas juridiquement un devoir également pour une question de pratique politique. En effet, obliger les citoyens à voter pose au moins deux problèmes : Vérifier que cette règle sera suivie. En clair, il faudrait mettre en oeuvre une sanction pénale efficace, à savoir une amende sévère. Faute de quoi l’obligation posée pourrait demeurer lettre morte ;
    forcer les citoyens à utiliser leur droit de vote peut avoir des effets déstabilisateurs sur les résultats : augmentation des votes blancs, nuls ou extrémistes, qui pourraient signifier l’opposition des citoyens à une telle procédure.</p>
</section>
<section class="supporters">
    <?php
$args = array(
    'post_type'      => 'soutien',
    'posts_per_page' => 16,
);
// The Query
$the_query = new WP_Query($args);
// The Loop
if ($the_query->have_posts()) {
    while ($the_query->have_posts()) {
        $the_query->the_post();
        ?>
            <div class="supporters__single">
                <div class="supporters__image" style="background-image:url('<?php the_field('photo');?>');"></div>
                <h5 class="supporters__name"><?php the_field('poste_actuel');?></h5>
                <div class="supporters__job"><?php the_field('nom_et_prenom');?></div>
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
$args = array(
    'post_type'      => 'soutien',
    'posts_per_page' => 3,
);
// The Query
$the_query = new WP_Query($args);
// The Loop
if ($the_query->have_posts()) {
    while ($the_query->have_posts()) {
        $the_query->the_post();
        ?>
            <div class="comments__single">
                <div class="comments__content"><?php the_field('pourquoi_votez-vous_blanc_');?></div>
                <div class="comments__profile-container">
                    <div class="comments__picture" style="background-image: url('<?php the_field('photo');?>')"></div>
                    <div class="comments__name"><?php the_field('nom_et_prenom');?></div>
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