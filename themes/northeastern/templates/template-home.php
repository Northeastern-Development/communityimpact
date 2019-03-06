<?php /* Template Name: Home Page Template */ get_header(); ?>

<main>
	<!-- section -->
	<section class="hero">
		<!-- hero -->
		<?php include(locate_template('includes/section-hero.php')); ?>
		<!-- hero -->
	</section>

	<section id="nu__main-nav" class="js-nav">
		<!-- main nav -->
		<?php include(locate_template('includes/navigation.php')); ?>
		<!-- /main nav -->
	</section>

	<section class="investing">
		<?php include(locate_template('includes/section-investing.php')); ?>
	</section>

	<section id="1" class="js-sections transforming">
		<?php include(locate_template('includes/section-transforming.php')); ?>
	</section>

	<section id="2" class="js-sections scholarships">
		<?php include(locate_template('includes/section-scholarships.php')); ?>
	</section>

	<section id="3" class="js-sections community">
		<?php include(locate_template('includes/section-community.php')); ?>
	</section>

	<section id="4" class="js-sections development">
		<?php include(locate_template('includes/section-development.php')); ?>
	</section>

	<section id="5" class="js-sections preparation">
		<?php include(locate_template('includes/section-preparation.php')); ?>
	</section>

	<section id="6" class="js-sections municipal">
		<?php include(locate_template('includes/section-municipal.php')); ?>
	</section>

	<section id="7" class="js-sections contributions">
		<?php include(locate_template('includes/section-contributions.php')); ?>
	</section>

	<section id="8" class="js-sections economic">
		<?php include(locate_template('includes/section-economic.php')); ?>
	</section>

	<section id="9" class="js-sections partnership">
		<?php include(locate_template('includes/section-partnership.php')); ?>
	</section>

</main>

<?php get_footer(); ?>
