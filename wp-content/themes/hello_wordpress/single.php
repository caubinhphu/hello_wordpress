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
  <div class="generic-content">
    <?php the_content(); ?>
  </div>

</div>

<div style="text-align: right; padding-right: 20px;">
  <em>View: <?php the_field('view') ?></em>
</div>


<div class="page-section page-section--white"></div>

<div class="comment-area">
  <?php
    $comments = get_comments(array(
      'post_id' => $post->ID,
      'status' => 'approve'
    ));
    $count = count($comments);
  ?>

  <div><?php echo $count === 1 ? "$count COMMENT" : "$count COMMENTS"; ?></div>

  <div class="comment-list">
    <?php
      foreach($comments as $comment) {
        ?>
        <div class="comment-item">
          <div class="comment-item-top">
            <img class="comment-avatar"
              src="<?php echo get_avatar_url($comment->comment_author_email); ?>"
              alt="<?php echo $comment->comment_author ?>"
            >
            <div>
              <div>
                <strong>
                  <?php echo $comment->comment_author ?>
                </strong>
              </div>
              <div>
                <?php echo $comment->comment_date ?>
              </div>
            </div>
          </div>
          <div class="comment-item-bottom">
            <div class="comment-content">
              <?php echo $comment->comment_content ?>
            </div>
          </div>
        </div>
    <?php } ?>
  </div>
  
  <?php comment_form(); ?>
</div>

<?php get_footer(); ?>