//
// Counts the number of boxes checked on the Team Score Survey Page
// and appends the same number of google docs form iframes to the div#surveys
//
function countChecked() {
	
	var form_values = $('input:checked').serializeArray();
	var regex = new RegExp('=on','g');
	var param_string = $.param(form_values).replace(regex, '');
	var projects = param_string.split('&');
	$('#surveys2').append(JSON.stringify(projects));

	$('#surveys2').empty();
	var n = $("input:checked").length;
	for(var x = 0; x < n; x++) { $('#surveys2').append('<iframe src="https://docs.google.com/a/modea.com/spreadsheet/embeddedform?formkey=dGpYYXpUVjhCUzFlN0tKV2FOOUFhRkE6MQ&entry_51=Chiquita" width="760" height="1122" frameborder="0" marginheight="0" marginwidth="0">Loading...</iframe>');}
	}
