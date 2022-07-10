<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

	<script src="https://kit.fontawesome.com/a28b4dec18.js" crossorigin="anonymous"></script>

	<title>Banco de recursos</title>
	<?php wp_head(); ?>

	<script>


	</script>

</head>

<body>

	<nav class="navbar navigation navigation-menu">
		<div class="container-fluid ">
			<a class="navbar-brand" href="/kinderRecursos">
				<img src="<?php header_image(); ?>" height="67" width="118" alt="" />
			</a>


			<div class="nav justify-content-end">


				<?php

				if (is_user_logged_in()) {
					if (is_page( array( 'recursos') ) || is_category(  ) ) {
						wp_nav_menu(
							array(
								'theme_location'    => 'tertiary',
								'depth'             => 2,
								'container'         => 'div',
								'container_class'   => 'container-fluid',
								'container_id'      => 'nav justify-content-end',
								'menu_class'        => 'nav navbar-nav',
								'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
								'walker'            => new WP_Bootstrap_Navwalker(),



							)
						);
					} else {
						wp_nav_menu(
							array(
								'theme_location'    => 'primary',
								'depth'             => 2,
								'container'         => 'div',
								'container_class'   => 'container-fluid',
								'container_id'      => 'nav justify-content-end',
								'menu_class'        => 'nav navbar-nav',
								'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
								'walker'            => new WP_Bootstrap_Navwalker(),
							)
						);
					}

				} else{
					if (is_page( array( 'recursos') ) || is_category(  ) ) {
					wp_nav_menu(
						array(
							'theme_location'    => 'fourty',
							'depth'             => 2,
							'container'         => 'div',
							'container_class'   => 'container-fluid',
							'container_id'      => 'nav justify-content-end',
							'menu_class'        => 'nav navbar-nav',
							'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
							'walker'            => new WP_Bootstrap_Navwalker(),
						)
					);

				} else{
					wp_nav_menu(
						array(
							'theme_location'    => 'secondary',
							'depth'             => 2,
							'container'         => 'div',
							'container_class'   => 'container-fluid',
							'container_id'      => 'nav justify-content-end',
							'menu_class'        => 'nav navbar-nav',
							'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
							'walker'            => new WP_Bootstrap_Navwalker(),
						)
					);
				}
				}






					?>



				</div>
			</div>
		</div>
	</nav>
