<?php get_header(); ?>

<div class="page-banner">
  <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri("images/ocean.jpg") ?>);"></div>
  <div class="page-banner__content container container--narrow">
    <h1 class="page-banner__title"><?php the_title(); ?></h1>
    <div class="page-banner__intro">
      <p>Learn how the school of your dreams got started.</p>
    </div>
  </div>  
</div>


<div class="container container--narrow page-section">
  
<?php
  $parent_ID = wp_get_post_parent_id(get_the_ID());
  if ($parent_ID) { ?>
    <div class="metabox metabox--position-up metabox--with-home-link">
      <p>
        <a class="metabox__blog-home-link" href="<?php echo get_permalink($parent_ID); ?>">
          <i class="fa fa-home" aria-hidden="true"></i>
          <?php echo get_the_title($parent_ID); ?>
        </a>
        <span class="metabox__main"><?php the_title(); ?></span>
      </p>
    </div>
<?php } ?>

<?php
  $child_array = get_pages( array(
    'child-of' => get_the_ID()
  ) );

  if ($parent_ID || $child_array) { ?>
    <div class="page-links">
    <h2 class="page-links__title">
      <a href="<?php echo get_the_permalink($parent_ID) ?>">
        <?php echo get_the_title($parent_ID) ?>
      </a>
    </h2>
    <ul class="min-list">
      <?php
        if ($parent_ID) {
          $child_of_id = $parent_ID;
        } else {
          $child_of_id = get_the_ID();
        }
        wp_list_pages(
          array(
            'title_li' => NULL,
            'child_of' => $child_of_id
          )
        ); ?>
    </ul>
  </div>
  <?php }
?>


  <div class="generic-content">
    <?php the_content(); ?>
  </div>

</div>

<div class="page-section page-section--white"></div>

<?php get_footer(); ?>