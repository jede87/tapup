<?php
/**
 * The template for displaying the front page.
 *
 * This is the template that displays on the front page only.
 *
 * @package _mbbasetheme
 */

get_header(); ?>

<div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
		<div class="section">
			<div class="row">
				<div class="col s12 m6 center">
					<h1 class="section-text header white-text">Vi i SVERIGE har<br> ett av världen<br> <b>bästa</b> kranvatten, <br>ändå...</h1>
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
						<h1 class="section-text header white-text">...köper vi över <br><b>240 000 000</b><br> liter flaskvatten per år, <br> och...</h1>
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
          				<h1 class="section-text header white-text">...betalar<br><b>2000 gånger mer</b><br>per liter än för vårt kranvatten</h1>
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
		<div class="parallax"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Bakgrund3_Pengar.jpg"></div>
	</div>

	<div class="section no-pad grey darken-4">
		<div class="container">
			<div class="section">
				<div class="row">
					<div class="col s12 center">
          				<h1 class="section-text header white-text">SAMTIDIGT skräpar VI ned natur och bidrar till onödig transport.</h1>
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
						<h1 class="extra-large section-text header white-text"><b>Korkat?</b></h1>
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
					<h1 class="section-text header white-text">Vi arbetar med en lösning för att ge dig Uppgraderat vatten, i din flaska, ingen frakt, inget skräp.</h1>
				</div>
			</div>
			<div class="row center">
			<?php 
			if (function_exists('newsletter_form')){
				echo '<div class="row">';
				echo '<div class="col s12">';
				newsletter_form();
				echo '</div>';
				echo '</div>';
			}  ?>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="section white">
			<div class="col s12 center">
				<h1 class="section-text header black-text">Team</h1>
			</div>
			<div class="row">
				<div class="col s12 m6 center team-container">
					<div class="team-image" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/images/OurTeam_Elias_circle.png');"></div>
					<div class="team-info">
						<h3>Elias Björneståhl</h3>
						<h4><i>Rainmaker</i></h4>
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
						<h4><i>Deal breaker</i></h4>
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
