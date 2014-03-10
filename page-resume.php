<?php /* Template Name: Resume */ ?>

<!html> 
<!DOCTYPE html>
<html lang="en-us">
	<head>
		<title><?php bloginfo('name'); ?> | <?php wp_title(); ?> </title>
		<link rel="stylesheet" href="<?php print TEMPPATH; ?>/resume-style.css" />
		<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700' rel='stylesheet' type='text/css'>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	
		<!--[if lt IE 9]> <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script> <![endif]-->
		<!--[if lt IE 9]> <script src="<?php print TEMPPATH; ?>/js/respond.min.js"></script> <![endif]-->
	</head>
	
	<body>
		<div id="wrapper">
			
			<div id="content">
				<header class="group">
				<h1>Joe Casabona</h1>
				<p>Contact Me <span class="hide">using <a href="/contact/">this form</a> or</span> at joe [at] casabona.org
			</header>
			
				<section>
					<h2>Experience</h2>
					
					<dl>
						<dt class="group">
							<span class="title">System Integrator, University of Scranton</span>
							October 2011 - Present
						</dt>
						
						<dd> Develop and support a wide range of applications written in PHP, ASP, Java, PL/SQL, and on platforms such as Luminis and Cascade CMS</dd>
						<dd> Modernize and update web applications to use recent and best practices</dd>
						<dd> Work with the Marketing Department on web-based projects, including converting Scranton.edu to be fully responsive</dd>
						<dd> Introduced and now support WordPress based projects on campus</dd>
						
						
						<dt class="group">
							<span class="title">Web Developer/Owner, Manifest Development</span>
							January 2004 – Present
						</dt>
						
						<dd> Develop modern, clean, useable websites and web applications for a wide range of clients and businesses, primarily using WordPress</dd>
						<dd> Work directly with clients to elicit requirements, develop, and test web-based software systems</dd>
						<dd> Advise clients on new, emerging, and important technologies including Mobile, Responsive Web Design, and Security</dd>
						
						
						<dt class="group">
							<span class="title">Adjunct Faculty, University of Scranton</span>
							 August 2007 – Present
						</dt>
						
						<dd> Teach courses in Computer Literacy, E-Commerce, and Programming in PHP</dd>
						<dd> Develop lesson plans that educate students on current computer trends and history of computing</dd>
						<dd> Create assignments that supplement lesson plans and give students practical knowledge of computer use</dd>
						
					</dl>
				</section>
				
				<section class="page-break">
					<h2>Education</h2>
					<dl>
						<dt>
							<span class="title">Master's of Science in Software Engineering</span>
							 August 2007 – May 2009
						</dt>
						<dd>The University of Scranton</dd>
						<dd>Master's Thesis: <em>Automatic congestion detection and visualization using an Android-enabled phone and PHP</em></dd>
						
						<dt>
							<span class="title">Bachelor's of Science in Media and Information Technology</span> 
							August 2003 – May 2007
						</dt>
						<dd>The University of Scranton</dd>
						<dd>Minor in Computer Science</dd>
					</dl>
				</section>
				
				
				<section>
					<h2>Skills</h2>
					
					<ul>
						<li><strong>Coding:</strong> HTML, CSS, Sass, Javascript, JQuery, PHP, MySQL, WordPress, Velocity, Oracle.</li>
						<li><strong>Teaching:</strong> Web Development, Database Management, E-Commerce, Computer Literacy, WordPress Development</li>
					</ul>				
				</section>
				
				
				<section>
					<h2>Books &amp; Publications</h2>
					<ul>
						<li>J. Casabona, <strong><a href="http://click.linksynergy.com/link?id=Pt0nqcHUWAg&offerid=163295.2168359&type=2&murl=http%3A%2F%2Fwww.peachpit.com%2Ftitle%2F9780133845020">The Web Designer's Guide to Google Glass</a></strong>, PeachPit/, March 2014</li>
						<li>J. Casabona, <strong><a href="http://www.rwdwp.com">Responsive Web Design with WordPress</a></strong>, PeachPit/New Riders. Dec 2013</li>
						<li>J. Casabona, <strong><a href="http://wpthemesfromscratch.com">Building WordPress Themes from Scratch</a></strong>, Rockable Press. May 2012</li>
						<li>B. Bishop, J. Casabona, <strong><a href="http://dl.acm.org/citation.cfm?id=1566550">Automatic congestion detection and visualization using networked GPS unit data</a></strong>, ACM Southeast Conference, Clemson, SC, 2009, Electronic Proceedings.</li>		
					</ul>	
				</section>
				
				<section>
					<h2>Awards, Honors, &amp; Designations</h2>
					
					<ul>
						<li><strong>Founding Member</strong>, The Goodhouse Foundation, 2014<br/>
							<em>Founded and run a non-profit organization for Multiple Sclerosis and Cerebral Palsy</em></li>
						<li><strong>Mobile Coordinator</strong>, PABUG. March 2013 – Present<br/>
							<em>Responsible for Mobile app development, consulting, and organizing the Mobile Track for the annual conference</em></li>
						<li><strong>Member</strong>, Upsilon Pi Epsilon. May 2006</li>
						<li><strong>Member</strong>, Association for Computing Machinery Scranton Chapter. August 2003</li>
					</ul>
				</section>
					
			</div>
				
				
			<?php get_sidebar('resume'); ?>
					
				
	<footer class="print-show">
		<p><a href="http://casabona.org/resume/">View online at casabona.org/resume/</a></p>
	</footer>
	
		</div>
	</body>

</html>

