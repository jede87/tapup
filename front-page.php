<?php
/**
 * The template for displaying the front page.
 *
 * This is the template that displays on the front page only.
 *
 * @package _mbbasetheme
 */

get_header(); ?>

<div id="home-container" class="parallax-container">
	<div class="section no-pad-bot">
		<div class="container">
			<div class="section">
				<div class="row">
					<div class="col s12 m8 center">
						<h1 class="section-text header white-text">I SVERIGE har vi <br> ett av världens <br> <b>bästa</b> <br> kranvatten</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="parallax"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Bakgrund1.jpg"></div>
</div>

	<div class="section no-pad grey darken-4">
		<div class="container">
			<div class="section">
				<div class="row">
					<div class="col s12 center">
						<h1 class="section-text header white-text">Ändå köper vi över<br><b>240 000 000</b><br>liter flaskvatten per år</h1>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="parallax-container valign-wrapper">
		<div class="section no-pad-bot">
			<div class="container">
				<div class="row center">
				</div>
			</div>
		</div>
		<div class="parallax"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Bakgrund2_Fulvatten.jpg"></div>
	</div>

	<div class="section no-pad grey darken-4">
		<div class="container">
			<div class="section">
				<div class="row">
					<div class="col s12 center">
          				<h1 class="section-text header white-text">Till ett pris som är<br><b>4000 gånger högre</b><br>per liter</h1>
					</div>
				</div>
			</div>
		</div>
	</div>


	<div class="parallax-container valign-wrapper">
		<div class="section no-pad-bot">
			<div class="container">
				<div class="row center">
				</div>
			</div>
		</div>
		<div class="parallax"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Bakgrund3_Pacman.png"></div>
	</div>

	<div class="section no-pad grey darken-4">
		<div class="container">
			<div class="section">
				<div class="row">
					<div class="col s12 center">
          				<h1 class="section-text header white-text">SAMTIDIGT bidrar vi till<br>nedskräpning och<br>onödig transport</h1>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="parallax-container valign-wrapper">
		<div class="section no-pad-bot">
			<div class="container">
				<div class="row">
					<div class="col s12 center">
						<h1 class="extra-large section-text header white-text"><b>Korkat.</b></h1>
					</div>
				</div>
			</div>
		</div>
		<div class="parallax"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Bakgrund4_waste.jpg"></div>
	</div>

	<div id="contactus" class="section no-pad-bot" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/images/Bakgrund5_BergVatten.jpg');">
		<div class="container">
			<div class="row center">
				<div class="col s12 center">
					<h1 class="section-text header white-text">Därför tar vi fram en lösning för Uppgraderat vatten direkt i din flaska. </h1>
				</div>
				<div class="col s12 center">
					<h1 class="section-text header white-text">Mindre frakt.<br>Mindre skräp.<br>Lägre pris.</h1>
				</div>
			</div>
			<div class="row center">
			<?php 
			if (function_exists('newsletter_form')){

				newsletter_form(1);

			}  ?>
			</div>
		</div>
	</div>

	<div id="team-container" class="container">
		<div class="section white">
			<div class="col s12 center">
				<h1 class="section-text header black-text">Team</h1>
			</div>
			<div class="row">
				<div class="col s12 m6 center team-container">
					<div class="team-image" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/images/OurTeam_Elias_circle.png');"></div>
					<div class="team-info">
						<h3>Elias Björnestål</h3>
						<h4><i>Operations Overlord</i></h4>
						<div class="team-links">
							<a href="https://se.linkedin.com/in/eliasbjornestal"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Linkedin_circle.png"/></a>
							<a href="mailto:elias@tapup.se"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Email_circle.png"/></a>
						</div>
					</div>
				</div>
				<div class="col s12 m6 center team-container">
				<div class="team-image" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/images/OurTeam_Palma_circle.png');"></div>
					<div class="team-info">
						<h3>Johan Palmqvist</h3>
						<h4><i>Commander of Concept</i></h4>
						<div class="team-links">
							<a href="https://se.linkedin.com/in/johan-palmqvist-13557928"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Linkedin_circle.png"/></a>
							<a href="mailto:johan@tapup.se"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Email_circle.png"/></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php get_footer(); ?>
