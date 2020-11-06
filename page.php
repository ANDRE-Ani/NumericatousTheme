<?php get_header(); ?>

<div class="container-fluid">

<?php if ( is_front_page() ) { ?>
	<div class="row">

		<div class="col-sm-12">

			<div id="acc_box">
				<div class="widgetsB">
					<?php
					echo get_theme_mod("acc_code");
					?>
				</div>
			</div>
		
		</div>

	</div>
	<?php } ?>

	<?php if ( is_front_page() ) { ?>
	<div class="row">

		<div class="col-sm-4">
			<div id="head1_box">
				<div class="widgetsB">
					<?php
					echo get_theme_mod("head1_code");
					?>
				</div>
			</div>
		</div>

		<div class="col-sm-4">
			<div id="head2_box">
				<div class="widgetsB">
					<?php
					echo get_theme_mod("head2_code");
					?>
				</div>
			</div>
		</div>


		<div class="col-sm-4">
			<div id="head3_box">
				<div class="widgetsB">
					<?php
					echo get_theme_mod("head3_code");
					?>
				</div>
			</div>
		</div>

	</div>
	<?php } ?>

<!-- affichage des articles -->
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



<!-- recommandations -->
<?php if ( is_front_page() ) { ?>
	<div class="row">
		<div class="col-sm-12">

			<div id="reco_box">
				<div class="widgetsB">
					<?php
					echo get_theme_mod("reco_code");
					?>
				</div>
			</div>

		</div>
	</div>
	<?php } ?>
</div>


<?php get_footer(); ?>