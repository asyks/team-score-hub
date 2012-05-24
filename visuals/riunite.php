<!DOCTYPE html>
<html>
<head>
<title>Riunite</title>

<meta property="og:url" content="http://seo.modeaondemand.com/chiquita"/>

<link rel="shortcut icon" href="/images/modea_logo_m.ico"/>
<link rel="stylesheet" href="/styles/main.css"/>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="/js/ga-track.js"></script>

 <script type='text/javascript' src='https://www.google.com/jsapi'></script>
    <script type='text/javascript'>
      google.load('visualization', '1', {packages:['corechart','gauge']});
      google.setOnLoadCallback(drawCharts);
	function drawCharts() {
		loadChart1();
		loadChart2();
		loadChart3();
		loadChart4();
		loadChart5();
	}	
      function loadChart1() {
	      var query = new google.visualization.Query("https://docs.google.com/a/modea.com/spreadsheet/tq?range=F1%3AG100&key=0AoTNJnkeM_tBdC1aQ0E2RGlyMmlQaEZUMmhjOElzaUE&gid=44&headers=-1");
	      query.send(drawChart1);
      }
      function drawChart1(chartData1) {
        var options = {
	        width: 900, height: 450,	
		curveType: "function",
		vAxis: {viewWindowMode: "pretty"},
		hAxis: {viewWindowMode: "pretty"},	
         	legend: {position: 'none'},
		chartArea:{width: '90%', height: '90%'}
	};
        var chart1 = new google.visualization.LineChart(document.getElementById('vis1'));
	chart1.draw(chartData1.getDataTable(), options);
      }
      function loadChart2() {
	      var query = new google.visualization.Query("https://docs.google.com/a/modea.com/spreadsheet/tq?range=F3%3AG4&key=0AoTNJnkeM_tBdC1aQ0E2RGlyMmlQaEZUMmhjOElzaUE&gid=45&headers=-1");
		query.send(drawChart2);
      }
      function drawChart2(chartData2) {
      	var options = {
	  width: 300, height: 300,
          min: 0, max: 10,
	  greenFrom:7, greenTo:10,
	  yellowFrom:4, yellowTo: 7,
	  redFrom: 0, redTo: 4,
	  minorTicks: 5
	};
	var chart2 = new google.visualization.Gauge(document.getElementById('vis2'));
	chart2.draw(chartData2.getDataTable(), options);
      }
      function loadChart3() {
	      var query = new google.visualization.Query("https://docs.google.com/a/modea.com/spreadsheet/tq?range=F1%3AG2&key=0AoTNJnkeM_tBdC1aQ0E2RGlyMmlQaEZUMmhjOElzaUE&gid=45&headers=-1");
		query.send(drawChart3);
      }
      function drawChart3(chartData3) {
      	var options = {
	  width: 300, height: 300,	
          min: 0, max: 10,
	  greenFrom:7, greenTo:10,
	  yellowFrom:4, yellowTo: 7,
	  redFrom: 0, redTo: 4,
	  minorTicks: 5
	};
	var chart3 = new google.visualization.Gauge(document.getElementById('vis3'));
	chart3.draw(chartData3.getDataTable(), options);
      }

      function loadChart4() {
	      var query = new google.visualization.Query("https://docs.google.com/a/modea.com/spreadsheet/tq?range=A1%3AE2&key=0AoTNJnkeM_tBdC1aQ0E2RGlyMmlQaEZUMmhjOElzaUE&gid=45&headers=-1");
		query.send(drawChart4);
      }
      function drawChart4(chartData4) {
      	var options = {
	  width: 350, height: 600,
          min: 0, max: 10,
	  greenFrom:7, greenTo:10,
	  yellowFrom:4, yellowTo: 7,
	  redFrom: 0, redTo: 4,
	  minorTicks: 5
	};
	var chart4 = new google.visualization.Gauge(document.getElementById('vis4'));
	chart4.draw(chartData4.getDataTable(), options);
      }

	function loadChart5() {
	      var query = new google.visualization.Query("https://docs.google.com/a/modea.com/spreadsheet/tq?range=A3%3AE4&key=0AoTNJnkeM_tBdC1aQ0E2RGlyMmlQaEZUMmhjOElzaUE&gid=45&headers=-1");
		query.send(drawChart5);
      }
      function drawChart5(chartData5) {
      	var options = {
	  width: 350, height: 600,
          min: 0, max: 10,
	  greenFrom:7, greenTo:10,
	  yellowFrom:4, yellowTo: 7,
	  redFrom: 0, redTo: 4,
	  minorTicks: 5
	};
	var chart5 = new google.visualization.Gauge(document.getElementById('vis5'));
	chart5.draw(chartData5.getDataTable(), options);
      }


    </script>

</head>

<body>

<div id="project_images" style="height:160px">

<img src="/images/modea_logo.png" style="position:relative;"/>

<img src="/images/riunite.jpg" style="position: relative; margin-left: 30px;">

</div>

	<div id='vis3'style="width:300px; height:300px; position:relative;"></div>
	
	<div id='vis2'style="width:300px; height:300px; position:relative; bottom:300px; left: 1350px;"></div>

	<div id='vis1'style="width:900px; height:450px; position:relative; left:380px; bottom:500px;"></div>
	
	<div id='vis4'style="width:350px; height:650px; position:relative; left:0px; bottom:765px;"></div>
	
	<div id='vis5'style="width:350px; height:650px; position:relative; left:1305px; bottom:1413px;"></div>

</body>

</html>

