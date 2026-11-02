<?php
/**
 * Page template for displaying standard pages and Gutenberg content.
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
  while ( have_posts() ) :
    the_post();
    ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      <div class="entry-content">
        <?php the_content(); ?>
      </div>
    </article>
    <?php
  endwhile;
  ?>
</div>

<?php
get_footer();
