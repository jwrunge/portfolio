<?php include('modules/data.php'); ?>

<!DOCTYPE html>

<html>

<head>
	<meta charset="UTF-8"/>
	<meta name="viewport" content="width=device-width" />
    <title>Jacob Runge</title>
	
	<link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style/main.css"/>
	<link rel="stylesheet" type="text/css" href="style/index.css"/>
	
	<!--JavaScript files-->
	<script src="js/jquery-min.js"></script>
	<script src="js/velocity.min.js"></script>
	<script src="js/velocity.ui.min.js"></script>
	<script src="js/switchmenu_velocity.min.js"></script>
	<script src="js/svg_path_animator.js"></script>
</head>

<body>
	<video id='bg' autoplay='autoplay' muted=''/>
		<?php 
			$video = rand(1, 7);
			
			if($video == 1)
				echo "<source src='media/Coffee.mp4' type='video/mp4'/>";
			else if($video == 2)
				echo "<source src='media/Cookie.mp4' type='video/mp4'/>";
			else if($video == 3)
				echo "<source src='media/Folio.mp4' type='video/mp4'/>";
			else if($video == 4)
				echo "<source src='media/Mouse.mp4' type='video/mp4'/>";
			else if($video == 5)
				echo "<source src='media/Pen.mp4' type='video/mp4'/>";
			else if($video == 6)
				echo "<source src='media/Coffee.mp4' type='video/mp4'/>";
			else if($video == 7)
				echo "<source src='media/Spill.mp4' type='video/mp4'/>";
		?>
	</video>

	<?php
		//include('modules/processing.php');
		include('modules/navigation.php');
	?>
	
	<div id='content_body'>
		<div id='splash_screen'></div>
		<div id='introduction' class='main_screen'>
			<div class='pad'>
				<h1>About Jake</h1>
				<div id='introduction_menu' class='submenu'>
					<a href='#personal_intro'>Introduction</a>
					<a href='#tools'>Design</a>
					<a href='#resume'>R&eacute;sum&eacute;</a>
				</div>
				<div class='white_bg' id='personal_intro'>
					<h2>Introduction</h2>
					<img src='media/j&m.png' class='left_img'/>
					<p>I'm a hobbyist web designer living in Illinois with my wife, Mary, and our three dogs, Max, Lucky, and Sadie. We lead pretty busy lives, so we mostly enjoy any opportunity we can get to just stay home and watch a movie, write strange stories, or play board games. A lot of our weekends are spent on our snail's-pace home renovation. A chunk of my weekend is also typically dedicated to web projects as well, whether that be tweaking the layout and design of a site, learning new JavaScript and CSS tricks, or fiddling with database code.</p>
					<img src='media/dogs.png' class='right_img'/>
					<p>Web design has provided me the opportunity to combine the activities I have enjoyed since childhood, from art to coding to writing. It has become something I really enjoy getting lost in--practical puzzles not just to be set aside when solved, but that always make me just a little better of a coder and a little more skillful of a designer; a little more efficient and a little more adventurous. I have discovered a passion for developing engaging, responsive, and accessible designs and interfaces, and for writing code that is useful, adaptable, and efficient.</p>
					<p>Web design isn't my day job (though I hope to soon make a career of it). I graduated from Knox College in 2010 with a double-major in Creative Writing and Secondary Educational Studies, and my experiences since then have mostly orbited higher education. Currently, I am Coordinator of Academic Support Services at Carl Sandburg College, where I manage the Tutoring Center and coordinate disability support services.</p>
					<p>I would love to talk with you more about my work. Please feel free to <a>contact me</a> to start a conversation. You should also check out my <a>portfolio</a>, which features examples of my site designs, code snippets in PHP and JavaScript, and graphic projects.</p>

				</div>
				<div class='white_bg' id='tools'>
					<h2>Design</h2>
					<h3>Goals</h3>
					<h3>Tools</h3>
				</div>
				<div class='white_bg' id='resume'>
					<h2>R&eacute;sum&eacute;</h2>
					<?php for($i=0; $i<100; $i++) echo "<br/>"; ?>
				</div>
			</div>
		</div>
		<div id='portfolio' class='main_screen'>
			<div class='pad'>
				<h1>Portfolio</h1>
				<div id='portfolio_menu' class='submenu'>
					<a href='#full_pages'>Webpages</a>
					<a href='#code'>Code</a>
					<a href='#graphics'>Graphic Art</a>
				</div>
				<div class='white_bg' id='full_pages'><p>YAY</p></div>
				<div class='white_bg' id='code'><p>YAY</p><p>YAY</p></div>
				<div class='white_bg' id='graphics'></div>
			</div>
		</div>
		<div id='contact' class='main_screen'>
			<div class='pad'>
				
				
			</div>
		</div>

	</div> <!--End 'content_body'-->
	
	<?php include('modules/footer.php'); ?>
</body>

<script>

	//References
	var nav_bar = $('#nav_bar');
	var pulldown = $('#nav_mouseover');
	var mobile_threshold = 560;
	
	//Avoid loading video if on mobile
	if($(window).width() <= mobile_threshold)
		$('#bg').remove();
	
	//Set up switch menus
	var header_menu = new SwitchMenu('#nav_bar', ['#splash_screen', '#introduction', '#portfolio', '#contact'], {scrollTarget: 'body', startFunc: function(){$('#content_body').css('height', $('#content_body').height());}, endFunc: function(){$('#content_body').css('height', '');}});
	var intro_menu = new SwitchMenu('#introduction_menu', ['#personal_intro', '#tools', '#resume'], {scrollTarget: 'screen', startFunc: function(){$('#content_body').css('height', $('#content_body').height());}, endFunc: function(){$('#content_body').css('height', '');}});
	var portfolio_menu = new SwitchMenu('#portfolio_menu', ['#full_pages', '#code', '#graphics'], {scrollTarget: 'screen', startFunc: function(){$('#content_body').css('height', $('#content_body').height());}, endFunc: function(){$('#content_body').css('height', '');}});
	
	$(window).on('resize', function(){
		if($(window).width() > mobile_threshold)
			$('div.main_screen').css('margin-top', nav_bar.height() * 1.25 + 'px');
		else
			$('div.main_screen').css('margin-top', '.5em');
	});
	
	$(window).resize();
	
	//Function for setting the current in-view screen when first opening the page
	function initialize_screens()
	{	
		if($(window).width() < mobile_threshold)
		{
			nav_bar.addClass('invisible');
			pulldown.removeClass('invisible');
		}
		
		//Set initial splash screen (or other screen) depending on URL
		var hash = window.location.hash;

		if(hash == '#introduction' || hash == '#portfolio' || hash == '#contact')
			set_state([hash, null, null]);
		else if(hash == '#personal_intro' || hash == '#tools' || hash == '#resume')
			set_state(['#introduction', hash, null]);
		else if(hash == '#full_pages' || hash == '#code' || hash == '#graphics')
			set_state(['#portfolio', null, hash]);
		else
		{
			if($(window).width() < mobile_threshold)
			{
				nav_bar.removeClass('invisible');
				pulldown.addClass('invisible');
			}
			
			nav_bar.addClass('enlarged');
			
			//Signature
			var sig = new AniPath('#signature_svg', '.sigs');
			sig.init();
			sig.animate();
		
			$('#top_links a').css('visibility', 'hidden').velocity('transition.slideLeftIn', {delay:  5000, stagger: 250, visibility: 'visible', display: null});
		}
		
		//Alter history (ensures current page status is logged)
		var pages = [];
		$('.switch_menu').each(function()
		{
			pages.push($(this).prop('data-curScreen'));
		});

		history.pushState(pages, null, null);
	};
	
	initialize_screens();
	
	$(window).on('hashchange', function(){
		var hash = window.location.hash;
		if(hash != '#splash_screen' && hash != '')
			nav_bar.removeClass('enlarged');
		else
			nav_bar.addClass('enlarged');
	});
			
	$('#top_links a').on('click', function(e) {
		e.preventDefault();
		e.stopPropagation();

		nav_bar.removeClass('enlarged');
		if($(window).width() <= mobile_threshold)
		{
			nav_bar.addClass('invisible');
			pulldown.removeClass('invisible');
		}
			
		if($('#introduction').css('display') == 'none')
			intro_menu.reset();
		else if($('#portfolio').css('display') == 'none')
			portfolio_menu.reset();
	});
	
	$('#nav_logo').on('click', function(e) {
		e.preventDefault();
		e.stopPropagation();
		
		if(!nav_bar.hasClass('enlarged')) nav_bar.addClass('enlarged');

	});
	
	$(document).ready(function()
	{
		nav_bar.removeClass('preload');
	});
	
	$(window).on('scroll', function() {
	
		//Menubar only appears at top of the page
		if((($(window).width() > mobile_threshold && $(window).scrollTop() > 10) || $(window).width() < mobile_threshold) && $('#splash_screen').css('display') == 'none')
		{	
			if(!currently_switching)
			{
				nav_bar.addClass('invisible');
				pulldown.removeClass('invisible');
			}
		}
		else
		{
			nav_bar.removeClass('invisible');
			pulldown.addClass('invisible');
		}
	});
	
	$(pulldown).on('mouseenter', function()
	{
		nav_bar.removeClass('invisible');
		pulldown.addClass('invisible');
	});
	
	$(pulldown).on('click', function()
	{
		nav_bar.removeClass('invisible');
		pulldown.addClass('invisible');
	});
	
	$(nav_bar).on('mouseleave', function()
	{
		if($(window).scrollTop() > 10 && $('#splash_screen').css('display') == 'none')
		{
			nav_bar.addClass('invisible');
			pulldown.removeClass('invisible');
		}
	});
		
</script>

</html>