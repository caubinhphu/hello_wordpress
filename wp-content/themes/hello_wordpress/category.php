<?php get_header(); ?>

<div class="page-banner">
  <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri("images/ocean.jpg") ?>);"></div>
  <div class="page-banner__content container container--narrow">
    <h1 class="page-banner__title"><?php single_cat_title(); ?></h1>
    <div class="page-banner__intro">
      <p>Learn how the school of your dreams got started.</p>
    </div>
  </div>  
</div>

<div style="padding: 20px;">
  <?php
    if (!have_posts(  )) { ?>
      <div>No <?php single_cat_title(); ?></div>
    <?php } else { 
      while(have_posts(  )) {
        the_post(  ); ?>
        <div class="event-summary">
          <a class="event-summary__date t-center" href="<?php the_permalink(); ?>">
            <span class="event-summary__month"><?php the_time('M') ?></span>
            <span class="event-summary__day"><?php the_time('j') ?></span>  
          </a>
          <div class="event-summary__content">
            <h5 class="event-summary__title headline headline--tiny">
              <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </h5>
            <?php the_excerpt(  ); ?>
            <a href="<?php the_permalink(); ?>" class="nu gray">Read more</a>
          </div>
        </div>
      <?php }}
  ?>
</div>
<?php get_footer(); ?>