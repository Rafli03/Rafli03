<!DOCTYPE html>
<html>
<?php
	include_once("config.php");
	$result= mysqli_query($con, " SELECT Kota, ODP, PDP, Positif FROM DataPantauan ORDER BY Kota DESC");

	$Kota="";
	$ODP="";
	$PDP="";
    $Positif="";
	while ($res = mysqli_fetch_array($result)) {
		$Kota=$Kota."'".$res['Kota']."',";
		$ODP=$ODP."".$res['ODP'].",";
		$PDP=$PDP."".$res['PDP'].",";
        $Positif=$Positif."".$res['Positif'].",";
	}
	echo "<script class='code-js' id='code-js'>
		var data = {
			categories: [$Kota],
			series: [
			    {
			        name: 'ODP',
			        data: [$ODP]
			    },
			    {
			        name: 'PDP',
			        data: [$PDP]
			    },
                {
                    name: 'Positif',
                    data: [$Positif]
                }
			]
		};
	</script>";
?>
<head lang="kr">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge"/>
    <title>Corona Sumbar</title>
    <link rel="stylesheet" type="text/css" href="./dist/tui-chart.css" />
    <link rel='stylesheet' type='text/css' href='https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.43.0/codemirror.css'/>
    <link rel='stylesheet' type='text/css' href='https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.43.0/addon/lint/lint.css'/>
    <link rel='stylesheet' type='text/css' href='https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.43.0/theme/neo.css'/>
    <link rel="stylesheet" type="text/css" href="./css/example.css" />
</head>
<body>
<div class='wrap'>
    <div class='code-html' id='code-html'>
        <div id='chart-area'></div>
    </div>
</div>
<script type='text/javascript' src='https://uicdn.toast.com/tui.chart/latest/raphael.js'></script>
<script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/core-js/2.5.7/core.js'></script>
<script src='./dist/tui-chart.js'></script>
<script class='code-js' id='code-js'>
var container = document.getElementById('chart-area');
var options = {
    chart: {
        width: 1160,
        height: 650,
        title: 'Grafik Sebaran Corona di Sumatera Barat',
        format: '1,000'
    },
    yAxis: {
        title: 'Orang'
    },
    xAxis: {
        title: 'Kota',
        min: 0,
        max: 250,
    },
     series: {
         showLabel: true
     }
};
var theme = {
    series: {
        colors: [
            '#83b14e', '#458a3f', '#295ba0', '#2a4175', '#289399',
            '#289399', '#617178', '#8a9a9a', '#516f7d', '#dddddd'
        ]
    }
};
tui.chart.columnChart(container, data, options);
</script>

<!--For tutorial page-->
<script src='https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.43.0/codemirror.js'></script>
<script src='//ajax.aspnetcdn.com/ajax/jshint/r07/jshint.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.43.0/addon/edit/matchbrackets.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.43.0/addon/selection/active-line.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.43.0/mode/javascript/javascript.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.43.0/addon/lint/lint.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.43.0/addon/lint/javascript-lint.js'></script>
<script src='./js/example.js'></script>
</body>
</html>
