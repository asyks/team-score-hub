<!DOCTYPE html>

<html>
<head>
	<title>Team Health Score</title>
	<link rel="stylesheet" href="/styles/main.css"/>
	<link rel="shortcut icon" href="/images/modea_logo_m.ico"/>
	<!-- Google Analytics Base Code -->
	<script type="text/javascript">
		var _gaq = _gaq || [];
			_gaq.push(['_setAccount', 'UA-272061-2']);
			_gaq.push(['_trackPageview']);
			_gaq.push(['_trackPageLoadTime']);

		(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
			})();
	</script>

	<!-- Google Analytics Social Button Tracking -->
	<script type="text/javascript" src="https://s3.amazonaws.com/ha_js/ga_social_tracking.js"></script>

	<!-- Load Twitter JS-API asynchronously -->
	<script>
		(function(){
			var twitterWidgets = document.createElement('script');
			twitterWidgets.type = 'text/javascript';
			twitterWidgets.async = true;
			twitterWidgets.src = 'http://platform.twitter.com/widgets.js';
			// Setup a callback to track once the script loads.
			twitterWidgets.onload = _ga.trackTwitter;
			document.getElementsByTagName('head')[0].appendChild(twitterWidgets);
		})();
	</script>

	<!-- External links and mailto: -->
	<script type="text/javascript">
		$(document).ready(function(){
			var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
			$.getScript(gaJsHost + "google-analytics.com/ga.js", 
				function(){
					try { var pageTracker = _gat._getTracker("UA-272061-2");
        				pageTracker._trackPageview();
					} catch(err) {}
					var filetypes = /\.(zip|exe|pdf|doc*|xls*|ppt*|mp3)$/i;
					$('a').each(function(){
    							var href = $(this).attr('href');
							if ((href.match(/^https?\:/i)) && (!href.match(document.domain)))
								{$(this).click(function() {
										var extLink = href.replace(/^https?\:\/\//i, '');
										pageTracker._trackEvent('External', 'Click', extLink);
								});}
							else if (href.match(/^mailto\:/i))
								{$(this).click(function() {
        									var mailLink = href.replace(/^mailto\:/i, '');
										pageTracker._trackEvent('Email', 'Click', mailLink);
								});}
        				});
				});
		});
	</script>

</head>

<body bgcolor="#CCCCCC">

	<div id="index_header" class="header">
	<img id="logo" src="/images/modea_logo.png"/>
	<div id="index_title">Team Health Score</div>
	</div>
	<!--Text links to Team Health Survey Test Pages-->
	<div id="content">
	Team Health Score:
		</br>
		<a href=/survey.html>Take the Survey</a>
		</br>
		</br>
		View the Results:
		</br>
		<a href=/visuals/team-summary.php>Team Summary</a>
		</br>
		<a href=/visuals/team-breakouts.php>Team Breakouts</a>
		</br>
		<a href=/visuals/chiquita.php>Chiquita</a>
		</br>
		<a href=/visuals/vitrue.php>Vitrue</a>
		</br>
		<a href=/visuals/bumble.php>Bumble & Bumble</a>
		</br>
		<a href=/visuals/lenox.php>LENOX</a>
		</br>
		<a href=/visuals/5he.php>5 Hour Energy</a>
		</br>
		<a href=/visuals/rackspace.php>Rackspace</a>
		</br>
		<a href=/visuals/htc.php>HTC</a>
		</br>
		<a href=/visuals/disney.php>Disney</a>
		</br>
		<a href=/visuals/levolor.php>Levolor</a>
		</br>
		<a href=/visuals/modeacare.php>ModeaCare</a>
		</br>
		<a href=/visuals/modea.php>Modea (internal projects)</a>
	
		<!--Social buttons: Facebook, Twitter, Google+-->
		<div id="social" class="social">
	
			<!-- Twitter follow us button -->
			<a href="https://twitter.com/Modea" class="twitter-follow-button" data-show-count="false">Follow @Modea</a>
			<script src="//platform.twitter.com/widgets.js" type="text/javascript"></script>
	
			<!-- Google +1 button  -->
			<g:plusone href="http://seo.modeaondemand.com/"></g:plusone>
			<script type="text/javascript">
  				(function() {
    					var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    					po.src = 'https://apis.google.com/js/plusone.js';
    					var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  				})();
			</script>

			<!-- Google Analytics Facebook like/send button code -->
			<script src="http://connect.facebook.net/en_US/all.js#xfbml=1"></script>
			<script type="text/javascript">_ga.trackFacebook();</script>
			<fb:like href="www.modea.com" send="true" width="450" show_faces="false" font=""></fb:like>
		</div>


</div>

</body>
</html>
