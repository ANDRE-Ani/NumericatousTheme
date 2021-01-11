<?php get_header(); ?>

<div class="container-fluid">

<?php if ( is_front_page() ) { ?>
	<div class="row">
	
		<div class="col-sm-12">
		<div class="blog-post">
			
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

		<div class="col-sm marge_acc">
				<div class="widgetsB">
					<?php
					echo get_theme_mod("head1_code");
					?>
			</div>
		</div>

		

		<div class="col-sm marge_acc">
				<div class="widgetsB">
					<?php
					echo get_theme_mod("head2_code");
					?>
			</div>
		</div>
		

		<div class="col-sm marge_acc">
				<div class="widgetsB">
					<?php
					echo get_theme_mod("head3_code");
					?>
				</div>
		</div>

	</div>
	<?php } ?>



<!-- affichage des articles -->
	<div class="row">
		<div class="col-sm-12 page">

			<?php
			woocommerce_content();
			
			?>

		</div>
	</div>



<!-- recommandations -->
<?php if ( is_front_page() ) { ?>
	<div class="row">
		<div class="col-sm-12">

			<div class="blog-post">
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
