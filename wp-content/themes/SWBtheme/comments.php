<?php
/*
The comments page for SWBtheme
*/

// don't load it if you can't comment
if ( post_password_required() ) {
  return;
}

?>

<?php // You can start editing here. ?>

  <?php if ( have_comments() ) : ?>

    <h3><?php comments_number( '<span>No</span> Comments', '<span>One</span> Comment', '<span>%</span> Comments' ); ?></h3>

    <section class="commentlist">
      <?php
        wp_list_comments( array(
          'style'             => 'div',
          'short_ping'        => true,
          'avatar_size'       => 40,
          'callback'          => '',
          'type'              => 'all',
          'reply_text'        => 'Reply to comment',
          'page'              => '',
          'per_page'          => '',
          'reverse_top_level' => null,
          'reverse_children'  => ''
        ) );
      ?>
    </section>

    <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
      <nav class="navigation comment-navigation" role="navigation">
        <div class="comment-nav-prev"><?php previous_comments_link( '&larr; Previous Comments' ); ?></div>
        <div class="comment-nav-next"><?php next_comments_link( 'More Comments &rarr;' ); ?></div>
      </nav>
    <?php endif; ?>

    <?php if ( ! comments_open() ) : ?>
      <p class="no-comments">Comments are closed.</p>
    <?php endif; ?>

  <?php endif; ?>

  <?php $args = array(

    'comment_notes_after'  => '<p>Thanks for the feedback!</p>',
    'title_reply'          => '<h3>What Did You Think?<br /> Leave a Comment</h3>',
    'comment_notes_before' => '<p class="comment-notes">' . __( 'Your email address will not be published.<br />Required Fields are marked with *.' ) . ( $req ? $required_text : '' ) . '</p>',
    'comment_field'        => '<p class="comment-form-comment"><label for="comment">' . _x( 'Comment', 'noun' ) . '</label><textarea id="comment" name="comment" cols="40" rows="4" aria-required="true">' . '</textarea></p>',
    );
  ?>

  <?php comment_form($args); ?>

