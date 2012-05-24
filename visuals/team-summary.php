<!DOCTYPE html>
<html>
<head>
<title>Team Health Score Summary</title>
<link rel="shortcut icon" href="/images/modea_logo_m.ico"/>
<link rel="stylesheet" href="/styles/main.css"/>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="/js/ga-track.js"></script>

 <script type='text/javascript' src='https://www.google.com/jsapi'></script>
    <script type='text/javascript'>
      google.load('visualization', '1', {packages:['gauge']});
      google.setOnLoadCallback(loadChart);

      function loadChart() {
	      var query = new google.visualization.Query("https://docs.google.com/a/modea.com/spreadsheet/tq?range=A1%3AB100&gid=4&key=0AoTNJnkeM_tBdC1aQ0E2RGlyMmlQaEZUMmhjOElzaUE&headers=-1");

	      query.send(drawChart);
      }
      function drawChart(chartData) {

        var options = {
          width: 1200, height: 650,
	  min: 0, max: 10,
	  greenFrom:7, greenTo:10,
	  yellowFrom:4, yellowTo: 7,
	  redFrom: 0, redTo: 4,
	  minorTicks: 5 
        };

        var chart = new google.visualization.Gauge(document.getElementById('visualization'));
        chart.draw(chartData.getDataTable(), options);
      }
    </script>

</head>

<body>
<a href="/"><img src="/images/modea_logo.png"/></a>
<div id='visualization' align='center'></div>
</body

</html>

