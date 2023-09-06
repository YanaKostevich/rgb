<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package rgb-test
 */

?>

<footer id="colophon" class="site-footer">
	<div class="footer">

		<h1>front-end developer</h1>
		<aside class="coaches-and-bonus">
			<secstion class="coach">

				<?php
				$coach = get_field('coach');
				if ($coach) : ?>
					<div class="coach-avatar">
						<img src="<?php echo esc_url($coach['coach_avatar']['url']); ?>" alt="<?php echo esc_attr($coach['coach_avatar']['alt']); ?>" />
					</div>
					<div class="coach-info">
						<h5><?php echo $coach['coach_name']; ?></h5>
						<p><?php echo $coach['coach_info']; ?></p>
					</div>
				<?php endif; ?>

			</secstion>
			<section class="registration-bonus">

				<?php
				$bonus = get_field('bonus');
				if ($bonus) : ?>
					<div class="bonus-icon">
						<img src="<?php echo esc_url($bonus['bonus_icon']['url']); ?>" alt="<?php echo esc_attr($bonus['bonus_icon']['alt']); ?>" />
					</div>
					<div class="bonus-info">
						<h5><?php echo $bonus['bonus_txt']; ?></h5>
						<p><?php echo $bonus['bonus_info']; ?></p>
					</div>
				<?php endif; ?>

			</section>
		</aside>
	</div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>