<?php get_header(); ?>

<div class="page-banner">
  <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri("images/ocean.jpg") ?>);"></div>
  <div class="page-banner__content container container--narrow">
    <h1 class="page-banner__title"><?php echo get_post_type(); ?></h1>
    <div class="page-banner__intro">
      <p>Learn how the school of your dreams got started.</p>
    </div>
  </div>  
</div>

<div class="product-list">
  <?php
    $query = new WP_Query(array(           
      'post_type' => 'product',
      'posts_per_page' => -1,
    ));
    while ($query->have_posts(  )) {
      $query->the_post(  ); ?>
      <a href="<?php the_permalink(); ?>">
        <div class="product-cart">
          <div class="product-image" >
            <span class="helper"></span>
            <img src="<?php echo the_field('image') ?>" alt="<?php get_field('name') ?>">
          </div>
          <div class="product-name"><?php echo get_field('name') ?></div>
          <div class="product-price"><?php echo get_field('price') ?></div>
        </div>
      </a>
    <?php }
  ?>
</div>

<?php get_footer(); ?>