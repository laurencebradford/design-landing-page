<?php
/*
Template Name: Landing Page
*/
?>

<head>

  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title>Build a Website</title>
  <meta name="description" content="">
  <meta name="author" content="Learn to Code With Me">

  <!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <!-- FONT
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,600' rel='stylesheet' type='text/css'>

  <!-- CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/landing/normalize.css">
	<link href="<?php echo get_template_directory_uri(); ?>/landing/main.css" rel="stylesheet" type="text/css">
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
</head>


<body>

  <!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <div class="container">
	    
	    <div class="row top">
	      	<div class="twelve columns" style="margin-top: 5%">
	        	<h1>Build a Website from Scratch</h1>
	        	<p>
	        		If you want to build your own website, from start to finish without hiring a designer or developer, <strong>then this series is for you.<strong>
	        	</p>
	    	</div>
	    </div>
	   
		<div class="form">
			<h5>I'm your guinea pig. Follow along as I redo my site and learn from my mistakes.</h5>
			<div class="row">
				<form method="post" accept-charset="iso-8859-1" action="http://www.aweber.com/scripts/addlead.pl"  >
					
					<input type="hidden" name="meta_web_form_id" value="##" />
					<input type="hidden" name="listname" value="##" />
					<input type="hidden" name="redirect" value="http://www.aweber.com/thankyou.htm?m=default" id="redirect_a1515f6aa1edcbb5aa2a8da6dbb804ae" />
					<input type="hidden" name="meta_adtracking" value="Inside_Guide_Web_Site_Design" />
					<input type="hidden" name="meta_message" value="1" />
					<input type="hidden" name="meta_required" value="email" />


					<input type="text" value="" placeholder="Enter Email" name="email" class="" id="awf_field-68595283">
				
					<input type="submit" value="Sign Up for free" name="submit" id="" class="button"> 
					

				</form>
			</div><!--end row-->

			

		</div><!-- end form -->
    	
    	<div class="row description">
	    	<p>
				Over the next several weeks, join me as I rebuild my website. Along the way I will be covering every aspect of the process including:
				<ul>
					<li>Pre-planning and goal setting</li>
					<li>Strategizing</li>
					<li>Creating a simple and memorable User Experience</li>
					<li>Optimizing a site for speed</li>
					<li>And much more</li>
				</ul>
			</p>
		</div>

    	<footer>
    		<div class="footer" style="margin-top: 5%">
    			<p class="small">
    				<span class="highlight">brought to you by <a href="<?php bloginfo('url'); ?>">Learn to Code With Me</a>.</span>
    			</p>
    		</div>
    		
    	</footer>
	</div> <!--end container -->

<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>

