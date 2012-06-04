//
// Counts the number of boxes checked on the Team Score Survey Page
// and appends the same number of google docs form iframes to the div#surveys
// appending the name of each project as a query string parameter to the survey embed iframe
//
function countChecked() {
	
	var form_values = $('input:checked').serializeArray();
	var regex = new RegExp('=on','g');
	var param_string = $.param(form_values).replace(regex, '');
	$('#surveys2').empty();
	var projects = param_string.split('&');
	var n = projects.length;
	for(var x = 0; x < n; x++) 
	{ 
		$('#surveys2').append('<iframe src="https://docs.google.com/a/modea.com/spreadsheet/embeddedform?formkey=dGpYYXpUVjhCUzFlN0tKV2FOOUFhRkE6MQ&entry_51=' + projects[x] + '" width="760" height="1122" frameborder="0" marginheight="0" marginwidth="0">Loading...</iframe>');
	}
}
