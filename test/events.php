<!DOCTYPE html>

<html>

<head>
	<title>Events Test Page</title>
	<link rel="stylesheet" href="/styles/main.css"/>
	<link rel="shortcut icon" href="/images/modea_logo_m.ico"/>

	<script type="text/javascript">

	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-272061-9']);
	  _gaq.push(['_trackPageview']);

	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();

	</script>

	<script type="text/javascript"> 

		function getFormValues() { 
                        	productValue = document.form.product.value 
                        	zipValue = document.form.zip.value 
                        	radiusValue = document.form.radius.value 
                } 
	 */
	</script> 
	
</head>

<body bgcolor="#CCCCCC">

	<img id="logo" src="/images/modea_logo.png"/>

	<div id="content">
	Lorem Ipsum Dolor sedit Lorem Ipsum Dolor sedit Lorem Ipsum Dolor sedit Lorem Ipsum Dolor sedit Lorem Ipsum Dolor sedit Lorem Ipsum  
	Dolor sedit Lorem Ipsum Dolor sedit Lorem Ipsum Dolor sedit Lorem Ipsum Dolor sedit Lorem Ipsum Dolor sedit Lorem Ipsum Dolor sedit 
		<form name="chiquita">
		Product:<input type="text" name="product" onChange="getFormValues();"/>
		</br>
		Zip:<input type="text" name="zip" onChange="getFormValues();"/>
		</br>
		Radius:<input type="text" name="radius" onChange="getFormValues();"/>
		</br>
		<input type="submit" value="Submit" onClick="_gaq.push(['_trackEvent', 'chiquita', 'submit',this.form.submit.value])"/>
		</form>
	</div>
-->
	<div id="content">
	Lorem Ipsum Dolor sedit Lorem Ipsum Dolor sedit Lorem Ipsum Dolor sedit Lorem Ipsum Dolor sedit Lorem Ipsum Dolor sedit Lorem Ipsum 
	Dolor sedit Lorem Ipsum Dolor sedit Lorem Ipsum Dolor sedit Lorem Ipsum Dolor sedit Lorem Ipsum Dolor sedit Lorem Ipsum Dolor sedit 
		<form name="chiquita">
		Product:<input type="text" name="product" onChange="_gap.push(['_trackEvent','store-finder',this.form.product.value]);"/>
		</br>
		Zip:<input type="text" name="zip" onChange="_gap.push(['_trackEvent','store-finder',this.form.zip.value]);"/>
		</br>
		Radius:<input type="text" name="radius" onChange="_gap.push(['_trackEvent','store-finder',this.form.radius.value]);"/>
		</br>
		<input type="submit" value="Submit" onClick="_gaq.push(['_trackEvent', 'chiquita', 'submit',this.form.submit.value])"/>
		</form>
	</div

</body>

</html>
