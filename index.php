<?php
/**
 * Main index fallback template.
 *
 * @package Legal_Corporate
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>

<div class="container legal-page-container">
  <?php
  if ( have_posts() ) :
    while ( have_posts() ) : the_post();
      ?>
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <h1 class="title"><?php the_title(); ?></h1>
        <div class="entry-content">
          <?php the_content(); ?>
        </div>
      </article>
      <?php
    endwhile;
  endif;
  ?>
</div>

<?php
get_footer();
