//
// Base GA tracking code
//
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-272061-9']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

//
//JQuery for GA event tracking
//
$('#score-form').submit(function (e){
	var search_form = $(this);
	var form_values = search_form.serializeObject();
	
	var form_values_google = {
		zip_entry    : form_values.zip,
		radius_entry : form_values.radius,
		product_entry: form_values.product_group
	};
	
	var form_values_string = JSON.stringify(form_values_google);

	_gaq.push(['_trackEvent', 'store-finder', 'submit', form_values_string]);
	return true;
});

