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
				echo "<source src='media/Coffee.mp4' type='video/mp4'/>";
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
					<a href='#resume'>R&eacute;sum&eacute;</a>
				</div>
				<div class='white_bg' id='personal_intro'>
					<h2>Introduction</h2>
					<img src='media/j&m.png' class='left_img'/>
					<p>I'm a hobbyist web designer living in Illinois with my wife, Mary, and our three dogs, Max, Lucky, and Sadie. We lead pretty busy lives, so we mostly enjoy any opportunity we can get to just stay home and watch a movie, write strange stories, or play board games. A lot of our weekends are spent on our snail's-pace home renovation. A chunk of my weekend is also typically dedicated to web projects as well, whether that be tweaking the layout and design of a site, learning new JavaScript and CSS tricks, or fiddling with database code.</p>
					<img src='media/dogs.png' class='right_img'/>
					<p>Web design has provided me the opportunity to combine the activities I have enjoyed since childhood, from art to coding to writing. It has become something I love getting lost in--practical puzzles not just to be set aside when solved, but that always make me just a little better of a coder and a little more skillful of a designer; a little more efficient and a little more adventurous. I have discovered a passion for developing engaging, responsive, and accessible designs and interfaces, and for writing code that is useful, adaptable, and efficient.</p>
					<p>Web design isn't my day job (though I hope to make a career of it). I graduated from Knox College in 2010 with a double-major in Creative Writing and Secondary Educational Studies, and my experiences since then have mostly orbited higher education. Currently, I coordinate disability support services and the tutoring program at Carl Sandburg College.</p>
					<p>I would appreciate the opportunity to talk with you more about my work. Please feel free to <a>contact me</a> to start a conversation. You should also check out my portfolio, which features examples of my site designs, code snippets in PHP and JavaScript, and various graphic projects.</p>

				</div>

				<div class='white_bg' id='resume'>
					<h2>R&eacute;sum&eacute;</h2>
					<h3>Web Design Experience</h3>
					<h4>Languages and Tools</h4>
					<ul>
						<li>HTML5 and CSS3</li>
						<li>Client-side: JavaScript (with JQuery and Velocity.js) and AJAX</li>
						<li>Server-side: PHP 7 (PDO for SQL prepared statements); MySQL (and phpMyAdmin) for database management</li>
						<li>Composition in Notepad++, testing with Bitnami Wampstack (with Apache web server)</li>
						<li>Content management experience with CPanel, FileZilla FTP</li>
						<li>Graphics: GIMP and Inkscape (image editing); DaVinci Resolve (video editing)</li>
					</ul>
					
					<h4>Work Experience</h4>
					<h5>Coordinator of Academic Support Services</h5>
					<i>Carl Sandburg College, Galesburg, IL - December 2013 – present</i>
					<ul>
						<li>Ensured institutional compliance to ADA specifications for academic accessibility to students with disabilities, including the accessibility of online and electronic course content</li>
						<li>Evaluated and implemented accommodations for fair and equal academic access to students with disabilities by approving, implementing, and enforcing classroom disability accommodations</li>
						<li>Streamlined disability support processes by automating forms and intake systems</li>
						<li>Maintained currency and accessibility for various assistive technologies, including text-to-speech and voice-to-text applications, magnification devices, and technology loans</li>
						<li>Updated, configured, and maintained inventory on a laptop loan program of over 50 laptops</li>
						<li>Coordinated drop-in, arranged, and online tutoring in general, computer, and healthcare education</li>
						<li>Grew the college tutoring program, managing a staff of over 20 tutors and expanding our tutorial services into subject areas including accounting, radiologic technology, and dental hygiene</li>
						<li>Developed a tutor training regimen for College Reading and Learning Association (CRLA) certification</li>
						<li>Tracked and used data on disability support, tutoring, and equipment loans to make informed decisions on program policies and spending habits</li>
						<li>Collaborated on institutional compliance for a large, renewable grant</li>
						<li>Contributed to campus safety evaluation and policy as part of the Risk Management Committee</li>
						<li>Developed dynamic working relationships with all campus departments</li>
					</ul>
					<h5>Adjunct Instructor and Teaching Assistant, Composition</h5>
					<p>
						<i>Adjunct: Carl Sandburg College, Galesburg, IL - August 2011 – December 2013</i><br/>
						<i>TA: Western Illinois University, Macomb, IL	- August 2012 – December 2013</i><br/>
					</p>
					<h5>Peer and Professional Tutor / Writing Center Consultant</h5>
					<p>
						<i>Western Illinois University, Macomb, IL - August 2012 – May 2013</i><br/>
						<i>Carl Sandburg College, Galesburg, IL	January 2009 – January 2013</i><br/>
						<i>Knox College, Galesburg, IL	September 2007 – June 2010</i>
					</p>
					<h4>Education</h4>
					Associate in Applied Science, IT LAN and Security Specialist<br/>
					<i>Carl Sandburg College, Galesburg, IL—July 2017</i><br/><br/>
					Bachelor of Arts in Creative Writing and Educational Studies<br/>
					<i>Knox College, Galesburg, IL—June 2010</i>

				</div>
			</div>
		</div>
		<div id='portfolio' class='main_screen'>
			<div class='pad'>
				<h1>Portfolio</h1>
				<div id='portfolio_menu' class='submenu'>
					<a href='#full_pages'>Webpages</a>
					<a href='#code'>Code</a>
					<a href='#graphics'>Graphics</a>
				</div>
				<div class='white_bg' id='full_pages'>
					<div class='port_entry'>
					<div class='whitefade'></div>
						<img class='top_img' src='portfolio/websites/portfolio.png'/>
						<h2>Portfolio Site</h2>
						<p>This portfolio site emphasizes Velocity.js- and CSS3-based transitions, keeping server-side complexity to a minimum. Aside from the images and videos, the entirety of the site is structured from a single PHP file (index.php) and a single CSS stylesheet.</p>
						<div class='expander lessinfo'>
							<h3>Features</h3>
							<ul>
								<li>Single-page design</li>
								<li>Dynamic content display based on URL hash</li>
								<li>JavaScript History API used to define browser back/forward button behavior</li>
								<li>One of five random video backgrounds loaded on the splash screen</li>
							</ul>
						</div>
						<a class='moreinfo_button'>+ More info +</a>
					</div>
					
					<div class='port_entry'>
					<div class='whitefade'></div>
						<img class='top_img' src='portfolio/websites/FUMC.png'/>
						<h2>First United Methodist Church</h2>
						<p><a href='http://www.firstumcgalesburg.org' target='_blank'>View live site</a> (may contain client alterations)<br/>
							<a href='' target='_blank'>View preserved site</a></p>
						<p>The First United Methodist page design philosophy was to create a "digital poster. This stands in contrast to the previous page design (shown below), which offered a more traditional webpage structure and regular news and events updates. This current iteration eschews excessive information, instead focusing on prominently advertising the church's location and methods to contact the church and highlighting the church's mission statement.</p>
						<div class='expander lessinfo'>
							<p>Structurally, from the user perspective, the page consists of three PHP pages: an index, a content page (which dynamically loads content for various subpages from a SQL database), and a staff directory page. The content and staff directory pages also include PHP files containing functions for interfacing with database and displaying page content. Additional PHP files allow users to create accounts and log in, making up a custom content management system (demo featured below) that allows church staff to modify subpage content without altering the page structure.</p>
						</div>
						<a class='moreinfo_button'>+ More info +</a>
					</div>
					
					<div class='port_entry'>
					<div class='whitefade'></div>
						<img class='top_img' src='portfolio/websites/cms.png'/>
						<h2>Content Management Demo</h2>
						<p><a href='' target='_blank'>View demo</a></p>
						<p>The custom CMS for the First Methodist webpage includes a PHP-based user account request and approval process, secure login with password hashing and salting, administrative task and page editing permissions that can be set per user, rich text page editing, and image management.</p>
						<div class='expander lessinfo'>
							<p>This demo removes account creation and approval features, instead creating a random account tied to the user's session. Changes made via the CMS, while they do operate on a real database, are visible only to the user that made them, and the changes they make are erased after their session ends.</p>
						</div>
						<a class='moreinfo_button'>+ More info +</a>
					</div>
					
					<div class='port_entry'>
					<div class='whitefade'></div>
						<img class='top_img' src='portfolio/websites/cms.png'/>
						<h2>Sample Designs</h2>
						<p>Various sample designs with placeholder content.</p>
					</div>
					
					<div class='port_entry'>
					<div class='whitefade'></div>
						<img class='top_img' src='portfolio/websites/FUMC_old.png'/>
						<h2>First United Methodist Church (2013-2016)</h2>
						<p><a href='https://web.archive.org/web/20141217110954/http://firstumcgalesburg.org/' target='_blank'>View archived site</a></p>
						<p>First United Methodist's webpage was my first major webpage design project, started in 2013. In order to wrap my mind around the code already in place on the website, my goal was not to redesign, but to replicate what the original designer had created, and to build on it from there. The result was a page that had a similar appearance to the original designer's (archived <a href='https://web.archive.org/web/20110706181819/http://firstumcgalesburg.org' target='_blank'>here</a>), but that was built from scratch. Nearly all graphics were recreated (including the header image), and all code is original.</p>
					</div>
				</div>
				<div class='white_bg' id='code'>
				
				<div class='port_entry'>
					<h2>Code</h2>
					<p>Most all code for the websites I have created is available online at <a href='https://github.com/jwrunge' target='_blank'>my GitHub page</a>. Stand-alone code (such as JQuery or Velocity plugins) is demoed below.</p>
				</div>
				
					<div class='port_entry'>
						<h2>Screen Switch</h2>
						<p>Using Velocity.js or JQuery animations. Allows dynamic switching of menu screens tied to submenu links. Full code and documentation available <a href='https://github.com/jwrunge/switchmenu' target='_blank'>on GitHub</a>.</p>
						<script async src="//jsfiddle.net/jwrunge/4661n2qf/embed/result,js,html/"></script>
					</div>
					
					<div class='port_entry'>
						<h2>SVG Animator</h2>
						<p>Auto animates SVG images with options for fine-grain control. Good for <a href='https://jsfiddle.net/jwrunge/bqrykL52/' target='_blank'>animating signatures</a>. Full code and documentation <a href='https://github.com/jwrunge/SVG-Path-Animator' target='_blank'>on GitHub</a>.</p>
						<script async src="//jsfiddle.net/jwrunge/agywh09x/embed/result,js,html/"></script>
					</div>
					
					<div class='port_entry'>
						<h2>Form Validator</h2>
						<p>Front- and back-end form validation. Full code and documentation <a href='https://github.com/jwrunge/Form-Validation' target='_blank'>on GitHub</a>.</p>
					</div>
				</div>
				<div class='white_bg' id='graphics'>
					<div class='port_entry'>
						<h2>Carl Sandburg College promotions</h2>
						<p>A series of parody advertisements for the Carl Sandburg College Tutoring Center, sized at 22"x28", featuring tutors in classic posters and pop culture advertisements; and images related to Tutoring Center and Disability Support brochures.</p>
						<p>View the <a href='portfolio/graphics/TC_images/TC_brochure.pdf' target='_blank'> Tutoring Center</a> and <a href='portfolio/graphics/TC_images/DS_brochure.pdf' target='_blank'>Disability Support</a> brochures.</p>
						
						<div class='img_scroll'>
							<img src='portfolio/graphics/TC_images/Missy2.png' class='enlargeable'/>
							<img src='portfolio/graphics/TC_images/Mark2.png' class='enlargeable'/>
							<img src='portfolio/graphics/TC_images/Mark_BigBang2.png' class='enlargeable'/>
							<img src='portfolio/graphics/TC_images/Mark_tutoring.png' class='enlargeable'/>
						</div>
		
						<div class='expander lessinfo'>
							<h3>Originals:</h3>
							<p>Original images were taken by a Tutoring Center staff member against a solid-colored wall. Images of Mark Beckham and Missy Paris used with their permission.</p>
							<p>The image of Mark Beckham tutoring was altered to both remove the background (to make the image more versatile and remove distracting background activity) and to eliminate extraneous items in the foreground. For example, the pink bag was removed, requiring me to paint Mark's hand  and portions of the table and papers back into the scene.</p>
							<div class='img_scroll'>
								<img src='portfolio/graphics/TC_images/Missy.jpg' class='enlargeable'/>
								<img src='portfolio/graphics/TC_images/MARKK.jpg' class='enlargeable'/>
								<img src='portfolio/graphics/TC_images/Mark-Sheldon.jpg' class='enlargeable'/>
								<img src='portfolio/graphics/TC_images/IMG_8236.jpg' class='enlargeable'/>
							</div>

							<h3>Reference Images:</h3>
							<p>Reference images were incorporated to varying degrees into the final posters. For the Rosie the Riveter poster, I took the full background image of the original and filled in gaps where necessary; the Uncle Sam poster incorporated some of the original text art; the <i>Big Bang Theory</i> poster background was replicated from scratch, with no actual elements taken directly from the original.</p>							
							<div class='img_scroll'>
								<img src='portfolio/graphics/TC_images/rosie-the-riveter-poster-s.jpg' class='enlargeable'/>
								<img src='portfolio/graphics/TC_images/poster.jpg' class='enlargeable'/>
								<img src='portfolio/graphics/TC_images/bbt.jpg' class='enlargeable'/>
							</div>
						</div>
						<a class='moreinfo_button'>+ More info +</a>
					</div>
					
					<div class='port_entry'>
						<h2>Methodist Church "Just Us League"</h2>
						<p>"Just Us League" sermon series advertisement created 2017. View "Just Us League" promo cards <a href='portfolio/graphics/JLCards/cards.pdf' target='_blank'>here</a>.</p>
						
						<div class='img_scroll'>
							<img src='portfolio/graphics/JLCards/just_us_league_logo.png' class='enlargeable'/>
							<img src='portfolio/graphics/JLCards/just_us_league_logo_black.png' class='enlargeable'/>
							<img src='portfolio/graphics/JLCards/just_us_league_logo_hori.png' class='enlargeable'/>
							<img src='portfolio/graphics/JLCards/just_us_league_logo_hori_black.png' class='enlargeable'/>
						</div>
						
						<div class='expander lessinfo'>
							<h3>Reference Image:</h3>
							<p>The original "Justice League" logo, used as inspiration.</p>
							<img src='portfolio/graphics/JLCards/justice-league-logo.jpg' class='enlargeable'/>
						</div>
						<a class='moreinfo_button'>+ More info +</a>
						
					</div>
					
					<div class='port_entry'>
						<h2>Methodist Church promotions</h2>
						<p>Posters created between 2013 and 2015. Text design and layout are mine; photos and images are not.</p>
						<p>View the Crisis Care brochure <a href='portfolio/graphics/CC_Brochure/ccBrochure.pdf' target='_blank'>here</a>
						
						<div class='img_scroll'>
							<img src='portfolio/graphics/FUMC_Posters/Breakfast1.jpg' class='enlargeable'/>
							<img src='portfolio/graphics/FUMC_Posters/GreenPotluck.jpg' class='enlargeable'/>
							<img src='portfolio/graphics/FUMC_Posters/HealthyEating.jpg' class='enlargeable'/>
							<img src='portfolio/graphics/FUMC_Posters/IceCreamFun.jpg' class='enlargeable'/>
						</div>
					</div>
					
					<div class='port_entry'>
						<h2>Methodist Church movie ads</h2>
						<p>Posters created between 2013 and 2015 for Blockbuster Bible Study.</p>
						
						<div class='img_scroll'>
							<img src='portfolio/graphics/FUMC_Movies/DayAfterTomorrow.jpg' class='enlargeable'/>
							<img src='portfolio/graphics/FUMC_Movies/FlyAway.jpg' class='enlargeable'/>
							<img src='portfolio/graphics/FUMC_Movies/MarchDinnerDelight.jpg' class='enlargeable'/>
							<img src='portfolio/graphics/FUMC_Movies/MightyJoeYoung.jpg' class='enlargeable'/>
							<img src='portfolio/graphics/FUMC_Movies/PrincessDiariesPoster.jpg' class='enlargeable'/>
							<img src='portfolio/graphics/FUMC_Movies/SwingVote.jpg' class='enlargeable'/>
							<img src='portfolio/graphics/FUMC_Movies/TheVillage.jpg' class='enlargeable'/>
						</div>
					</div>
					
					<div class='port_entry'>
						<h2>Various Logos/Text Designs</h2>
						
						<div class='img_scroll'>
							<img src='portfolio/graphics/TC_images/DS.png' class='enlargeable'/><img src='portfolio/graphics/TC_images/TC_Logo_Large.png' class='enlargeable'/>
							<img src='portfolio/graphics/TC_images/TC_Logo_Large_Vert.png' class='enlargeable'/>
							<img src='portfolio/graphics/Logos/umcg_logo2.png' class='enlargeable'/>
							<img src='portfolio/graphics/Logos/umcg_logo_mobile2.png' class='enlargeable'/>
							<img src='portfolio/graphics/Logos/CrisisCareLogo.jpg' class='enlargeable'/>
						</div>
						
					</div>
					
				</div>
			</div>
		</div>
		<div id='contact' class='main_screen'>
			<div class='pad'>
				<h1>Contact Me</h1>
				<div class='submenu'></div>
				<div class='white_bg' id='personal_intro'>
					<h2>Need to get in touch?</h2>
					<p>Feel free to email me at <a href='mailto:jwrunge@gmail.com'>jwrunge@gmail.com</a>.</p>
					<h2>Want to see more?</h2>
					<p>To see the code for most of my projects, check out <a href='https://github.com/jwrunge' target='_blank'>my GitHub page</a>.</p>
					<p>Check out my JavaScript demos on <a href='https://jsfiddle.net/user/jwrunge/fiddles/' target='_blank'>my JSFiddle page</a>.</p>
				</div>
				
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
	var intro_menu = new SwitchMenu('#introduction_menu', ['#personal_intro', '#resume'], {scrollTarget: 'screen', startFunc: function(){$('#content_body').css('height', $('#content_body').height());}, endFunc: function(){$('#content_body').css('height', '');}});
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
	
	function bind_events()
	{
		$('a.moreinfo_button').off('click').on('click', function(e)
		{
			e.preventDefault();
			e.stopPropagation();
			
			var button = $(this);
			var expander = $(this).prev('div.expander');
			
			//expander.removeClass('lessinfo').addClass('moreinfo');
			expander.css('maxHeight', expander[0].scrollHeight + 'px');
			button.removeClass('moreinfo_button').addClass('lessinfo_button').html('- Less info -');
			
			expander.velocity('scroll', {delay: 500, duration: 500, easing: 'ease-in-out', offset: -100});
						
			bind_events();
		});
		
		$('a.lessinfo_button').off('click').on('click', function(e)
		{
			e.preventDefault();
			e.stopPropagation();
			
			var button = $(this);
			var expander = $(this).prev('div.expander');
			
			expander.css('maxHeight', '0px');
			button.removeClass('lessinfo_button').addClass('moreinfo_button').html('+ More info +');
			
			expander.velocity('scroll', {delay: 500, duration: 500, easing: 'ease-in-out', offset: -100});
						
			bind_events();
		});
	}
	
	bind_events();
	
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