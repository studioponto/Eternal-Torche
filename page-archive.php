<?php
$args = array(
  'paged' => $paged,
  'post_type' => 'post',
  'posts_per_page' => -1,
);
query_posts($args);
?>
<div id="wrap_archive">
<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content','thumb'); ?>
<?php endwhile; ?>

<?php wp_reset_query(); ?>
</div>