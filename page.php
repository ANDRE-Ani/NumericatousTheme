<?php get_header(); ?>

<div class="container-fluid">
	<div class="row">









		<div class="col-sm-12">
		<div id="accroche">
			<?php
			if (is_front_page()) {
				if (is_active_sidebar('sidebar-header-4')) {
					dynamic_sidebar('sidebar-header-4');
				}
			}
			?>
		</div>


		<div id="ads_box">
		<?php
			echo get_theme_mod("ads_code");
		?>
	</div>


	
		</div>
	</div>


	<div class="row">

		<div class="col-sm-4">
			<?php
			if (is_front_page()) {
				if (is_active_sidebar('sidebar-header-1')) {
					dynamic_sidebar('sidebar-header-1');
				}
			}
			?>
		</div>

		<div class="col-sm-4">
			<?php
			if (is_front_page()) {
				if (is_active_sidebar('sidebar-header-2')) {
					dynamic_sidebar('sidebar-header-2');
				}
			}
			?>
		</div>


		<div class="col-sm-4">
			<?php
			if (is_front_page()) {
				if (is_active_sidebar('sidebar-header-3')) {
					dynamic_sidebar('sidebar-header-3');
				}
			}
			?>
		</div>

	</div>



	<div class="row">
		<div class="col-sm-12 page">

			<?php
			if (have_posts()) : while (have_posts()) : the_post();
					get_template_part('page-single', get_post_format());
				endwhile;
			endif;
			?>

		</div>
	</div>




	<div class="row">
		<div class="col-sm-12">
			<?php
			if (is_front_page()) {
				get_template_part('inc/present');
			}
			?>
		</div>
	</div>
</div>





<?php get_footer(); ?>