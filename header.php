<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
	    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
        <div class="wrapper">
            <header class="header">
                <div class="row">
                    <div class="col-md-6">
                        <figure class="logo"><a href="/WP_Bolierplate"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/BV_Boilerplate_Logo.png"></a></figure>
                    </div>
                    <div class="col-md-6">
                        <div class="social-icons">
                            <span class="fa fa-facebook-square"></span>
                            <span class="fa fa-twitter-square"></span>
                            <span class="fa  fa-instagram"></span>
                            <span class="fa fa-linkedin-square"></span>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <nav class="navbar navbar-default">
                          <div class="container-fluid">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                              </button>
                            </div>
                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                              <?php 
                                    $args = array(    'menu_class' => 'nav navbar-nav', 'menu'       => 'header-menu');
                                    wp_nav_menu($args); 
                                ?>
                            </div><!-- /.navbar-collapse -->
                          </div><!-- /.container-fluid -->
                        </nav>
                    </div>
                </div>
            </header>
            <!--end of .header-->