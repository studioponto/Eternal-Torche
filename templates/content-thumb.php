<a href="<?php the_permalink() ?>" class="thumb col-sx-4 col-sm-2 col-md-1">
<div class="image_wrap">
<?php if (has_post_thumbnail()) {
	the_post_thumbnail('thumbnail');
}?>
</div>

<div class="date"><?php the_time('jS F, Y'); ?></div>
</a>