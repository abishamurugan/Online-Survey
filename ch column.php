<html>
<?php
$servername="localhost";
$username="root";
$password="";
$dbname="database structures";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if (!$conn){
    die ("connection failed:".mysqli_connect_error());
}
$sql="SELECT * FROM Survey_tb2 WHERE Question_no=".$_GET['q'];
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    $row = mysqli_fetch_assoc($result);
    $qus=$row['Question_no'].$row['Question'];
    $q_ch1=$row['ch1'];
    $q_ch2=$row['ch2'];
    $q_ch3=$row['ch3'];
    $q_ch4=$row['ch4'];
    $a_ch1=$row['ans_ch1'];
    $a_ch2=$row['ans_ch2'];
    $a_ch3=$row['ans_ch3'];
    $a_ch4=$row['ans_ch4'];
?>
<head>
<meta http-equiv="Content-type"content="text/html;charset=utf-8">
<title>amcharts example</title>
<link rel="stylesheet"href="style.css"types="text/css">
<script src="/amcharts.js" type="text/javascript"></script>
<script src="/serial.js"type="text/javascript"></script>
<script src="/export.min.js"></script>
<link rel="stylesheet" href="/export.css" type="text/css" media="all" />
<script>
 var chart;
var legend;
var chartData=[
{
"country":'<?php echo $q_ch1?>',
"value":<?php echo $a_ch1?>
},

{
"country":'<?php echo $q_ch2?>',
"value":<?php echo $a_ch2?>
},

{
"country":'<?php echo $q_ch3?>',
"value":<?php echo $a_ch3?>
},

{
"country":'<?php echo $q_ch4?>',
"value":<?php echo $a_ch4?>
}
];


AmCharts.ready(function(){

var chart = AmCharts.makeChart("chartdiv", {
    "theme": "none",
    "type": "serial",
    "startDuration": 2,
    "dataProvider": chartData,
    "graphs": [{
        "balloonText": "[[title]]<br><span style='font-size:14px'><br>[[value]]</br>([[percents]]%)</span>",
        "fillAlphas": 1,
        "lineAlpha": 0.2,
        "title": "Income",
        "type": "column",
        "topRadius":1,
        "valueField": "value"
    }],
    "valueAxes": [{
        "position": "left",
        "axisAlpha":0,
        "gridAlpha":0
    }],
    "depth3D": 40,
  "angle": 30,
    "chartCursor": {
        "categoryBalloonEnabled": false,
        "cursorAlpha": 0,
        "zoomable": false
    },

    "categoryField": "country",
    "categoryAxis": {
        "gridPosition": "start",
        "axisAlpha":0,
        "gridAlpha":0
  },
    "export": {
    	"enabled": false
     }
});
});
</script>
</head>
</body>
<?php echo"<center><h2>$qus</h2></center>";?>
<div id="chartdiv" style="width:100%; height:400px;"></div>
<center>
<a href="/ch pie.php?q=<?php echo $_GET['q']?>">Pie Chart</a>
<a href="/ch bar.php?q=<?php echo $_GET['q']?>">bar Chart</a>
<a href="/ch funnel.php?q=<?php echo $_GET['q']?>">funnel Chart</a>
</center>

</body>
<?php
}
?></html>







