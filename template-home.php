<?php
/**
 * Template Name: Home Page Template
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  
	<div class="row home-banner">
		<div class="container">
			<div class="col-md-6">
				<img src="<?= get_template_directory_uri() . '/dist/images/agent.png'; ?>" class="img-responsive">
			</div>
			<div class="col-md-6">
				<h1>You're In Great Hands With Cindi Leonard</h1>				
			</div>
		</div>
	</div>  
	
	<nav class="row banner navbar navbar-default">
	<div class="container"><form class="form-inline">
		<div class="form-group col-md-5">
					<input type="text" class="form-control" id="exampleInputName2" placeholder="City, Neighborhood, Address, Zip or MLS® #">
				</div>
		<div class="form-group col-md-2">
					<select class="form-control"><option># Baths</option><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option></select>
				</div>
		<div class="form-group col-md-2">
					<select class="form-control"><option># Bedrooms</option><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option></select>
				</div>
		<div class="col-md-3">
		<p class="pull-right">
					<button type="submit" class="btn btn-default ">Search</button>
					</p>
		</div>
	</form></div>
	</nav>
	
	<div class="row jumbotron">
		<div class="col-md-12">
		<h2 class="pull-left">Featured Communities</h2>
		<a href="#" class="btn btn-warning pull-right">View All Communities</a>	
		</div>
		
		<div class="col-md-3 col-sm-6">
			<img src="<?= get_template_directory_uri() . '/dist/images/appartment.jpg'; ?>" class="img-responsive thumbnail">
		</div>
		<div class="col-md-3 col-sm-6">
			<img src="<?= get_template_directory_uri() . '/dist/images/downtown.jpg'; ?>" class="img-responsive thumbnail">
		</div>
		<div class="col-md-3 col-sm-6">
			<img src="<?= get_template_directory_uri() . '/dist/images/metro.jpg'; ?>" class="img-responsive thumbnail">
		</div>
		<div class="col-md-3 col-sm-6">
			<img src="<?= get_template_directory_uri() . '/dist/images/suburb.jpg'; ?>" class="img-responsive thumbnail">
		</div>
	</div>
	
	<div class="row section">
		<div class="col-md-7 row">
			<img class="img-responsive" src="<?= get_template_directory_uri() . '/dist/images/Happy-Couple.png'; ?>" alt="">			
		</div>
		<div class="col-md-5">
			<h2>What My Clients Are Saying</h2>
			<blockquote>
			"Random Realtor is the best realtor I've ever worked with. She got our house sold so quickly and for way over asking. She is superwoman blah blah blah blah blah." -  <footer><i>Mary Jones, 8/4/2015</i></footer>
			</blockquote>
			<blockquote>
			"Random Realtor found us our dream home so quickly!!! The process was painless and she always kept us in the loop, would definitely recommend her to all of my friends &amp; acquaintances!! Would use her again if we ever were looking, but since this is our DREAM HOME we may never have to look again! blah blah blah" -  <footer><i>Lynn Wood, 8/1/2015</i></footer>
			</blockquote>
		</div>
	</div><!-- .row -->
	
	<div class="row jumbotron dark">
		<header class="col-md-6 text-center col-md-offset-3">
			<h2>We're here to help YOU!</h2>
			<h3 class="small-caps">Find out how</h3>
			<hr>
			<a href="#" class="btn btn-warning">Contact Us</a>
		</header>

	</div><!-- .row -->
	<div class="row">
		<div class="col-md-12">
			<p class="lead text-center">
				Need Content Here!!
			</p>
		</div>
	</div><!-- .row -->
	<div class="row jumbotron light">
		<div class="text-center">
			<header>
				<h2 class="fn">REMAX</h2>
				<h3 class="small">New Beginings Realty</h3>
				<hr>
			</header>
			<div class="body">
				<p class="site-header-social">
								<a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook-square"></i></a> <a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter-square"></i></a> <a href="https://plus.google.com/" rel="publisher" target="_blank"><i class="fa fa-google-plus-square"></i></a>
							</p>
				<p class="adr"><span class="street-address">509 Main St.</span> <span class="locality">Toms River</span>, <span class="region">NJ</span>, <span class="country-name">USA</span> <span class="postal-code">08721</span></p>
				<a href="#" class="btn btn-warning">Contact Us</a>
			</div>
		</div>
	</div>
	
  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>
