<?php /* Template Name: Homepage Template */ ?>
<?php get_header(); ?>
<?php $args = array('post_type' => 'home_slider', 'post_status' => 'publish', 'posts_per_page' => -1, 'orderby' => 'title', 'order' => 'ASC'); $the_query = new WP_Query( $args ); ?>
<main class="site-content">
	<div class="row">
		<div class="col-md-12">
			<div id="homepage-carousel" class="carousel slide" data-ride="carousel">
			    <!-- Wrapper for slides -->
			    <div class="carousel-inner">
			      <?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
			      <div class="item <?php if( $the_query->current_post == 0 ): ?>active<?php endif; ?>">
			        <a href=""><?php echo  the_post_thumbnail(); ?></a>
			        <div class="carousel-caption"><h2><?php the_content(); ?></h2></div>
			      </div>
			      <?php endwhile; endif; ?>
			      <?php wp_reset_postdata(); ?>
			    </div>
		  </div><!-- End Carousel -->
		</div>
	</div>
	<?php if(have_posts() ) : while(have_posts() ) : the_post(); ?>
	<div class="row">
		<div class="col-md-7">
			<div class="post-thumbnail">
			<a href="<?php the_permalink(); ?>"><img class="img-responsive"" src="<?php the_post_thumbnail_url(); ?>" /></a>
			</div>
			<h1><?php the_title(); ?></h1>
			<p><?php the_content(); ?></p>
		</div>
		<div class="col-md-5">
			<div class="side-bar">
				<?php dynamic_sidebar('BV-Widget'); ?>
			</div>
		</div>
	</div>
	<?php endwhile ?>
	<?php endif ?>

	<div class="row">
		<div class="col-md-12">
			<ul class="nav nav-tabs">
			  <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
			  <li><a data-toggle="tab" href="#menu1">Menu 1</a></li>
			  <li><a data-toggle="tab" href="#menu2">Menu 2</a></li>
			</ul>

			<div class="tab-content">
			  <div id="home" class="tab-pane fade in active">
			    <h3>HOME</h3>
			    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc,</p>
			  </div>
			  <div id="menu1" class="tab-pane fade">
			    <h3>Menu 1</h3>
			    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc,</p>
			  </div>
			  <div id="menu2" class="tab-pane fade">
			    <h3>Menu 2</h3>
			    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc,</p>
			  </div>
			</div>
		</div>
	</div>
</main>
<?php get_footer(); ?>