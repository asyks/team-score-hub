//
// Counts the number of boxes checked on the Team Score Survey Page
// and appends the same number of google docs form iframes to the div#surveys
//
function countChecked() {
	$('#surveys2').empty();
	var iframetag = '<iframe src="https://docs.google.com/a/modea.com/spreadsheet/embeddedform?formkey=dGpYYXpUVjhCUzFlN0tKV2FOOUFhRkE6MQ">Loading...</iframe>';
	var n = $("input:checked").length;
	for(var x = 0; x < n; x++) { $("#surveys2").append(iframetag);}
	}
