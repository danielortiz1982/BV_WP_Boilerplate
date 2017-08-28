<?php get_header(); ?>
<?php if(have_posts() ) : while(have_posts() ) : the_post(); ?>
<main class="site-content">
	<div class="row">
		<div class="col-md-12">
			<div class="post-thumbnail"><a href="<?php the_permalink(); ?>"><img class="img-responsive" src="<?php the_post_thumbnail_url(); ?>" /></a>
		</div>
	</div>
	<div class="row">
		<div class="<?php post_class(); ?>">
			<div class="col-md-12">
				<h1 class="page-header"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
				<p><?php the_content(); ?></p>
			</div>

		</div>
	</div>
</main>
<?php endwhile ?>
<?php endif ?>
<?php get_footer(); ?>