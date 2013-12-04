<?php get_header(); ?>



<div class="content">
	<?php if ( have_posts() ) : ?>

	<div class="post-list group">

		<?php $i = 1; echo '<div class="post-row">'; while ( have_posts() ): the_post(); ?>

		<?php get_template_part('content'); ?>

		<?php if($i % 2 == 0) { echo '</div><div class="post-row">'; } $i++; endwhile; echo '</div>'; ?>

	</div><!--/.post-list-->

	<?php endif; ?>

</div>

<?php get_footer(); ?>
