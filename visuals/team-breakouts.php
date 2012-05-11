<!DOCTYPE html>
<html>

<head>
<title>Team Breakouts</title>
<link rel="shortcut icon" href="/images/modea_logo_m.ico"/>
<link rel="stylesheet" href="/styles/main.css"/>

 <script type='text/javascript' src='https://www.google.com/jsapi'></script>
    <script type='text/javascript'>
	google.load('visualization', '1', {packages:['gauge','table']});
     	 function drawCharts(){
      	  loadChart1();
	  loadTable1();
	  loadChart2();
	  loadTable2();
  	  loadChart3();
	  loadTable3();
	  loadChart4();
	  loadTable4();
	  loadChart5();
	  loadTable5();
	  loadChart6();
	  loadTable6();
	  loadChart7();
	  loadTable7();
	  loadChart8();
	  loadTable8();
	  loadChart9();
	  loadTable9();
	  loadChart10();
	  loadTable10();
  	  loadChart11();
	  loadTable11();
	  loadChart12();
	  loadTable12();
	  loadChart13();
	  loadTable13();
      	}
      google.setOnLoadCallback(drawCharts);
	
//1st Project Team: Visualization
      function loadChart1() {
	var query1 = new google.visualization.Query("https://docs.google.com/a/modea.com/spreadsheet/tq?range=A1%3AE2&key=0AoTNJnkeM_tBdC1aQ0E2RGlyMmlQaEZUMmhjOElzaUE&gid=3&headers=-1");
	query1.send(drawChart1);
      }
      
      function drawChart1(chartData1) {

        var options1 = {
          width: 1200, height: 600,
	  min: 0, max: 10,
	  greenFrom:7, greenTo:10,
	  yellowFrom:4, yellowTo: 7,
	  redFrom: 0, redTo: 4,
	  minorTicks: 5 
        };

        var chart1 = new google.visualization.Gauge(document.getElementById('visualization1'));
        chart1.draw(chartData1.getDataTable(), options1);
      }

      	function loadTable1() {
		var tquery1 = new google.visualization.Query("https://docs.google.com/a/modea.com/spreadsheet/tq?range=A2&key=0AoTNJnkeM_tBdC1aQ0E2RGlyMmlQaEZUMmhjOElzaUE&gid=3&headers=1");
		tquery1.send(drawTable1);
	}

	function drawTable1(chartData) {
		var table1 = new google.visualization.Table(document.getElementById('table1'));
		table1.draw(chartData.getDataTable(), {showRowNumber: false});	
	}
	
//2nd Project Team: Visualization
       function loadChart2() {
	var query = new google.visualization.Query("https://docs.google.com/a/modea.com/spreadsheet/tq?range=A3%3AE4&key=0AoTNJnkeM_tBdC1aQ0E2RGlyMmlQaEZUMmhjOElzaUE&gid=3&headers=-1");
	query.send(drawChart2);
      }
      
      function drawChart2(chartData2) {

        var options = {
          width: 1200, height: 600,
	  min: 0, max: 10,
	  greenFrom:7, greenTo:10,
	  yellowFrom:4, yellowTo: 7,
	  redFrom: 0, redTo: 4,
	  minorTicks: 5 
        };

        var chart2 = new google.visualization.Gauge(document.getElementById('visualization2'));
	chart2.draw(chartData2.getDataTable(), options);
      }
	function loadTable2() {
		var query = new google.visualization.Query("https://docs.google.com/a/modea.com/spreadsheet/tq?range=A4&key=0AoTNJnkeM_tBdC1aQ0E2RGlyMmlQaEZUMmhjOElzaUE&gid=3&headers=1");
		query.send(drawTable2);
	}

	function drawTable2(chartData) {
		var table2 = new google.visualization.Table(document.getElementById('table2'));
		table2.draw(chartData.getDataTable(), {showRowNumber: false});	
	}
       
//3rd Project Team: Visualization
       function loadChart3() {
	var query = new google.visualization.Query("https://docs.google.com/a/modea.com/spreadsheet/tq?range=A5%3AE6&key=0AoTNJnkeM_tBdC1aQ0E2RGlyMmlQaEZUMmhjOElzaUE&gid=3&headers=-1");
	query.send(drawChart3);
      }

      function drawChart3(chartData3) {

        var options = {
          width: 1200, height: 600,
	  min: 0, max: 10,
	  greenFrom:7, greenTo:10,
	  yellowFrom:4, yellowTo: 7,
	  redFrom: 0, redTo: 4,
	  minorTicks: 5 
        };

        var chart3 = new google.visualization.Gauge(document.getElementById('visualization3'));
	chart3.draw(chartData3.getDataTable(), options);
      }
	function loadTable3() {
		var query = new google.visualization.Query("https://docs.google.com/a/modea.com/spreadsheet/tq?range=A6&key=0AoTNJnkeM_tBdC1aQ0E2RGlyMmlQaEZUMmhjOElzaUE&gid=3&headers=1");
		query.send(drawTable3);
	}

	function drawTable3(chartData) {
		var table3 = new google.visualization.Table(document.getElementById('table3'));
		table3.draw(chartData.getDataTable(), {showRowNumber: false});	
	}

//4th Project Team: Visualization
       function loadChart4() {
	var query = new google.visualization.Query("https://docs.google.com/a/modea.com/spreadsheet/tq?range=A7%3AE8&key=0AoTNJnkeM_tBdC1aQ0E2RGlyMmlQaEZUMmhjOElzaUE&gid=3&headers=-1");
	query.send(drawChart4);
      }

      function drawChart4(chartData4) {

        var options = {
          width: 1200, height: 600,
	  min: 0, max: 10,
	  greenFrom:7, greenTo:10,
	  yellowFrom:4, yellowTo: 7,
	  redFrom: 0, redTo: 4,
	  minorTicks: 5 
        };

        var chart4 = new google.visualization.Gauge(document.getElementById('visualization4'));
	chart4.draw(chartData4.getDataTable(), options);
      }
	function loadTable4() {
		var query = new google.visualization.Query("https://docs.google.com/a/modea.com/spreadsheet/tq?range=A8&key=0AoTNJnkeM_tBdC1aQ0E2RGlyMmlQaEZUMmhjOElzaUE&gid=3&headers=1");
		query.send(drawTable4);
	}

	function drawTable4(chartData) {
		var table4 = new google.visualization.Table(document.getElementById('table4'));
		table4.draw(chartData.getDataTable(), {showRowNumber: false});	
	}

//5th Project Team: Visualization
       function loadChart5() {
	var query = new google.visualization.Query("https://docs.google.com/a/modea.com/spreadsheet/tq?range=A9%3AE10&key=0AoTNJnkeM_tBdC1aQ0E2RGlyMmlQaEZUMmhjOElzaUE&gid=3&headers=-1");
	query.send(drawChart5);
      }

      function drawChart5(chartData5) {

        var options = {
          width: 1200, height: 600,
	  min: 0, max: 10,
	  greenFrom:7, greenTo:10,
	  yellowFrom:4, yellowTo: 7,
	  redFrom: 0, redTo: 4,
	  minorTicks: 5 
        };

        var chart5 = new google.visualization.Gauge(document.getElementById('visualization5'));
	chart5.draw(chartData5.getDataTable(), options);
      }
	function loadTable5() {
		var query = new google.visualization.Query("https://docs.google.com/a/modea.com/spreadsheet/tq?range=A10&key=0AoTNJnkeM_tBdC1aQ0E2RGlyMmlQaEZUMmhjOElzaUE&gid=3&headers=1");
		query.send(drawTable5);
	}

	function drawTable5(chartData) {
		var table5 = new google.visualization.Table(document.getElementById('table5'));
		table5.draw(chartData.getDataTable(), {showRowNumber: false});	
	}	

//6th Project Team: Visualization
       function loadChart6() {
	var query = new google.visualization.Query("https://docs.google.com/a/modea.com/spreadsheet/tq?range=A11%3AE12&key=0AoTNJnkeM_tBdC1aQ0E2RGlyMmlQaEZUMmhjOElzaUE&gid=3&headers=-1");
	query.send(drawChart6);
      }

      function drawChart6(chartData6) {

        var options = {
          width: 1200, height: 600,
	  min: 0, max: 10,
	  greenFrom:7, greenTo:10,
	  yellowFrom:4, yellowTo: 7,
	  redFrom: 0, redTo: 4,
	  minorTicks: 5 
        };

        var chart6 = new google.visualization.Gauge(document.getElementById('visualization6'));
	chart6.draw(chartData6.getDataTable(), options);
      }
	function loadTable6() {
		var query = new google.visualization.Query("https://docs.google.com/a/modea.com/spreadsheet/tq?range=A12&key=0AoTNJnkeM_tBdC1aQ0E2RGlyMmlQaEZUMmhjOElzaUE&gid=3&headers=1");
		query.send(drawTable6);
	}

	function drawTable6(chartData) {
		var table6 = new google.visualization.Table(document.getElementById('table6'));
		table6.draw(chartData.getDataTable(), {showRowNumber: false});	
	}

//7th Project Team: Visualization
       function loadChart7() {
	var query = new google.visualization.Query("https://docs.google.com/a/modea.com/spreadsheet/tq?range=A13%3AE14&key=0AoTNJnkeM_tBdC1aQ0E2RGlyMmlQaEZUMmhjOElzaUE&gid=3&headers=-1");
	query.send(drawChart7);
      }

      function drawChart7(chartData7) {

        var options = {
          width: 1200, height: 600,
	  min: 0, max: 10,
	  greenFrom:7, greenTo:10,
	  yellowFrom:4, yellowTo: 7,
	  redFrom: 0, redTo: 4,
	  minorTicks: 5 
        };

        var chart7 = new google.visualization.Gauge(document.getElementById('visualization7'));
	chart7.draw(chartData7.getDataTable(), options);
      }
	function loadTable7() {
		var query = new google.visualization.Query("https://docs.google.com/a/modea.com/spreadsheet/tq?range=A14&key=0AoTNJnkeM_tBdC1aQ0E2RGlyMmlQaEZUMmhjOElzaUE&gid=3&headers=1");
		query.send(drawTable7);
	}

	function drawTable7(chartData) {
		var table7 = new google.visualization.Table(document.getElementById('table7'));
		table7.draw(chartData.getDataTable(), {showRowNumber: false});	
	}

//8th Project Team: Visualization
       function loadChart8() {
	var query = new google.visualization.Query("https://docs.google.com/a/modea.com/spreadsheet/tq?range=A15%3AE16&key=0AoTNJnkeM_tBdC1aQ0E2RGlyMmlQaEZUMmhjOElzaUE&gid=3&headers=-1");
	query.send(drawChart8);
      }

      function drawChart8(chartData8) {

        var options = {
          width: 1200, height: 600,
	  min: 0, max: 10,
	  greenFrom:7, greenTo:10,
	  yellowFrom:4, yellowTo: 7,
	  redFrom: 0, redTo: 4,
	  minorTicks: 5 
        };

        var chart8 = new google.visualization.Gauge(document.getElementById('visualization8'));
	chart8.draw(chartData8.getDataTable(), options);
      }
	function loadTable8() {
		var query = new google.visualization.Query("https://docs.google.com/a/modea.com/spreadsheet/tq?range=A16&key=0AoTNJnkeM_tBdC1aQ0E2RGlyMmlQaEZUMmhjOElzaUE&gid=3&headers=1");
		query.send(drawTable8);
	}

	function drawTable8(chartData) {
		var table8 = new google.visualization.Table(document.getElementById('table8'));
		table8.draw(chartData.getDataTable(), {showRowNumber: false});	
	}

//9th Project Team: Visualization
       function loadChart9() {
	var query = new google.visualization.Query("https://docs.google.com/a/modea.com/spreadsheet/tq?range=A17%3AE18&key=0AoTNJnkeM_tBdC1aQ0E2RGlyMmlQaEZUMmhjOElzaUE&gid=3&headers=-1");
	query.send(drawChart9);
      }

      function drawChart9(chartData9) {

        var options = {
          width: 1200, height: 600,
	  min: 0, max: 10,
	  greenFrom:7, greenTo:10,
	  yellowFrom:4, yellowTo: 7,
	  redFrom: 0, redTo: 4,
	  minorTicks: 5 
        };

        var chart9 = new google.visualization.Gauge(document.getElementById('visualization9'));
	chart9.draw(chartData9.getDataTable(), options);
      }
	function loadTable9() {
		var query = new google.visualization.Query("https://docs.google.com/a/modea.com/spreadsheet/tq?range=A18&key=0AoTNJnkeM_tBdC1aQ0E2RGlyMmlQaEZUMmhjOElzaUE&gid=3&headers=1");
		query.send(drawTable9);
	}

	function drawTable9(chartData) {
		var table9 = new google.visualization.Table(document.getElementById('table9'));
		table9.draw(chartData.getDataTable(), {showRowNumber: false});	
	}

//10th Project Team: Visualization
       function loadChart10() {
	var query = new google.visualization.Query("https://docs.google.com/a/modea.com/spreadsheet/tq?range=A19%3AE20&key=0AoTNJnkeM_tBdC1aQ0E2RGlyMmlQaEZUMmhjOElzaUE&gid=3&headers=-1");
	query.send(drawChart10);
      }

      function drawChart10(chartData10) {

        var options = {
          width: 1200, height: 600,
	  min: 0, max: 10,
	  greenFrom:7, greenTo:10,
	  yellowFrom:4, yellowTo: 7,
	  redFrom: 0, redTo: 4,
	  minorTicks: 5 
        };

        var chart10 = new google.visualization.Gauge(document.getElementById('visualization10'));
	chart10.draw(chartData10.getDataTable(), options);
      }
	function loadTable10() {
		var query = new google.visualization.Query("https://docs.google.com/a/modea.com/spreadsheet/tq?range=A20&key=0AoTNJnkeM_tBdC1aQ0E2RGlyMmlQaEZUMmhjOElzaUE&gid=3&headers=1");
		query.send(drawTable10);
	}

	function drawTable10(chartData) {
		var table10 = new google.visualization.Table(document.getElementById('table10'));
		table10.draw(chartData.getDataTable(), {showRowNumber: false});	
	}

//11th Project Team: Visualization
       function loadChart11() {
	var query = new google.visualization.Query("https://docs.google.com/a/modea.com/spreadsheet/tq?range=A21%3AE22&key=0AoTNJnkeM_tBdC1aQ0E2RGlyMmlQaEZUMmhjOElzaUE&gid=3&headers=-1");
	query.send(drawChart11);
      }

      function drawChart11(chartData11) {

        var options = {
          width: 1200, height: 600,
	  min: 0, max: 10,
	  greenFrom:7, greenTo:10,
	  yellowFrom:4, yellowTo: 7,
	  redFrom: 0, redTo: 4,
	  minorTicks: 5 
        };

        var chart11 = new google.visualization.Gauge(document.getElementById('visualization11'));
	chart11.draw(chartData11.getDataTable(), options);
      }
	function loadTable11() {
		var query = new google.visualization.Query("https://docs.google.com/a/modea.com/spreadsheet/tq?range=A22&key=0AoTNJnkeM_tBdC1aQ0E2RGlyMmlQaEZUMmhjOElzaUE&gid=3&headers=1");
		query.send(drawTable11);
	}

	function drawTable11(chartData) {
		var table11 = new google.visualization.Table(document.getElementById('table11'));
		table11.draw(chartData.getDataTable(), {showRowNumber: false});	
	}

//12th Project Team: Visualization
       function loadChart12() {
	var query = new google.visualization.Query("https://docs.google.com/a/modea.com/spreadsheet/tq?range=A23%3AE24&key=0AoTNJnkeM_tBdC1aQ0E2RGlyMmlQaEZUMmhjOElzaUE&gid=3&headers=-1");
	query.send(drawChart12);
      }

      function drawChart12(chartData12) {

        var options = {
          width: 1200, height: 600,
	  min: 0, max: 10,
	  greenFrom:7, greenTo:10,
	  yellowFrom:4, yellowTo: 7,
	  redFrom: 0, redTo: 4,
	  minorTicks: 5 
        };

        var chart12 = new google.visualization.Gauge(document.getElementById('visualization12'));
	chart12.draw(chartData12.getDataTable(), options);
      }
	function loadTable12() {
		var query = new google.visualization.Query("https://docs.google.com/a/modea.com/spreadsheet/tq?range=A24&key=0AoTNJnkeM_tBdC1aQ0E2RGlyMmlQaEZUMmhjOElzaUE&gid=3&headers=1");
		query.send(drawTable12);
	}

	function drawTable12(chartData) {
		var table12 = new google.visualization.Table(document.getElementById('table12'));
		table12.draw(chartData.getDataTable(), {showRowNumber: false});	
	}

//13th Project Team: Visualization
       function loadChart13() {
	var query = new google.visualization.Query("https://docs.google.com/a/modea.com/spreadsheet/tq?range=A25%3AE26&key=0AoTNJnkeM_tBdC1aQ0E2RGlyMmlQaEZUMmhjOElzaUE&gid=3&headers=-1");
	query.send(drawChart13);
      }

      function drawChart13(chartData13) {

        var options = {
          width: 1200, height: 600,
	  min: 0, max: 10,
	  greenFrom:7, greenTo:10,
	  yellowFrom:4, yellowTo: 7,
	  redFrom: 0, redTo: 4,
	  minorTicks: 5 
        };

        var chart13 = new google.visualization.Gauge(document.getElementById('visualization13'));
	chart13.draw(chartData13.getDataTable(), options);
      }
	function loadTable13() {
		var query = new google.visualization.Query("https://docs.google.com/a/modea.com/spreadsheet/tq?range=A26&key=0AoTNJnkeM_tBdC1aQ0E2RGlyMmlQaEZUMmhjOElzaUE&gid=3&headers=1");
		query.send(drawTable13);
	}

	function drawTable13(chartData) {
		var table13 = new google.visualization.Table(document.getElementById('table13'));
		table13.draw(chartData.getDataTable(), {showRowNumber: false});	
	}



    </script>
</head>

<body>
<img src="/images/modea_logo.png"/>
<div class="container">
<div id='table1' class="title"></div>
<div id='visualization1'></div>
<div id='table2' class="title"></div>
<div id='visualization2'></div>
<div id='table3' class="title"></div>
<div id='visualization3'></div>
<div id='table4' class="title"></div>
<div id='visualization4'></div>
<div id='table5' class="title"></div>
<div id='visualization5'></div>
<div id='table6' class="title"></div>
<div id='visualization6'></div>
<div id='table7' class="title"></div>
<div id='visualization7'></div>
<div id='table8' class="title"></div>
<div id='visualization8'></div>
<div id='table9' class="title"></div>
<div id='visualization9'></div>
<div id='table10' class="title"></div>
<div id='visualization10'></div>
<div id='table11' class="title"></div>
<div id='visualization11'></div>
<div id='table12' class="title"></div>
<div id='visualization12'></div>
<div id='table13' class="title"></div>
<div id='visualization13'></div>
</div>
</body>

</html>
