<?php
include('connectiondb.php');
$q11 = "SELECT * FROM feedback WHERE question1='poor' ";
$q12 = "SELECT * FROM feedback WHERE question1='bad' ";
$q13 = "SELECT * FROM feedback WHERE question1='good' ";
$q14 = "SELECT * FROM feedback WHERE question1='Very good' ";
$result = mysqli_query($conn,$q11);
$rowq11 = mysqli_num_rows( $result );
$result = mysqli_query($conn,$q12);
$rowq12 = mysqli_num_rows( $result );
$result = mysqli_query($conn,$q13);
$rowq13 = mysqli_num_rows( $result );
$result = mysqli_query($conn,$q14);
$rowq14 = mysqli_num_rows( $result );

$q21 = "SELECT * FROM feedback WHERE question2='poor' ";
$q22 = "SELECT * FROM feedback WHERE question2='bad' ";
$q23 = "SELECT * FROM feedback WHERE question2='good' ";
$q24 = "SELECT * FROM feedback WHERE question2='Very good' ";
$result = mysqli_query($conn,$q21);
$rowq21 = mysqli_num_rows( $result );
$result = mysqli_query($conn,$q22);
$rowq22 = mysqli_num_rows( $result );
$result = mysqli_query($conn,$q23);
$rowq23 = mysqli_num_rows( $result );
$result = mysqli_query($conn,$q24);
$rowq24 = mysqli_num_rows( $result );


$q31 = "SELECT * FROM feedback WHERE question3='poor' ";
$q32 = "SELECT * FROM feedback WHERE question3='bad' ";
$q33 = "SELECT * FROM feedback WHERE question3='good' ";
$q34 = "SELECT * FROM feedback WHERE question3='Very good' ";
$result = mysqli_query($conn,$q31);
$rowq31 = mysqli_num_rows( $result );
$result = mysqli_query($conn,$q32);
$rowq32 = mysqli_num_rows( $result );
$result = mysqli_query($conn,$q33);
$rowq33 = mysqli_num_rows( $result );
$result = mysqli_query($conn,$q34);
$rowq34 = mysqli_num_rows( $result );

$q41 = "SELECT * FROM feedback WHERE question4='poor' ";
$q42 = "SELECT * FROM feedback WHERE question4='bad' ";
$q43 = "SELECT * FROM feedback WHERE question4='good' ";
$q44 = "SELECT * FROM feedback WHERE question4='Very good' ";
$result = mysqli_query($conn,$q41);
$rowq41 = mysqli_num_rows( $result );
$result = mysqli_query($conn,$q42);
$rowq42 = mysqli_num_rows( $result );
$result = mysqli_query($conn,$q43);
$rowq43 = mysqli_num_rows( $result );
$result = mysqli_query($conn,$q44);
$rowq44 = mysqli_num_rows( $result );


//$qu11=mysqli_fetch_assoc($result);
$poor = array(
	array("label"=> "Question 1", "y"=> $rowq11),
    array("label"=> "Question 2", "y"=> $rowq21),
    array("label"=> "Question 3", "y"=> $rowq31),
    array("label"=> "Question 4", "y"=> $rowq41),
);
 
$bad = array(
	array("label"=> "Question 1", "y"=> $rowq12),
    array("label"=> "Question 2", "y"=> $rowq22),
    array("label"=> "Question 3", "y"=> $rowq32),
    array("label"=> "Question 4", "y"=> $rowq42),
);
 
$good = array(
	array("label"=> "Question 1", "y"=> $rowq13),
    array("label"=> "Question 2", "y"=> $rowq23),
    array("label"=> "Question 3", "y"=> $rowq33),
    array("label"=> "Question 4", "y"=> $rowq43),
);

$verygood = array(
	array("label"=> "Question 1", "y"=> $rowq14),
    array("label"=> "Question 2", "y"=> $rowq24),
    array("label"=> "Question 3", "y"=> $rowq34),
    array("label"=> "Question 4", "y"=> $rowq44),
);
?>
<!DOCTYPE HTML>
<html>
<head>  
<title>Feedback Graph</title>
<link rel="stylesheet" href="css/style.css">

<script>
window.onload = function () {
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	theme: "dark1", // "light1", "light2", "dark1", "dark2"
	title:{
		text: "Feedback Form Graph"
	},
	axisX:{
		reversed: true
	},
	axisY:{
		includeZero: true
	},
	toolTip:{
		shared: true
	},
	data: [{
		type: "stackedBar",
		name: "Poor",
		dataPoints: <?php echo json_encode($poor, JSON_NUMERIC_CHECK); ?>
	},{
		type: "stackedBar",
		name: "Bad",
		dataPoints: <?php echo json_encode($bad, JSON_NUMERIC_CHECK); ?>
	},{
		type: "stackedBar",
		name: "Good",
		dataPoints: <?php echo json_encode($good, JSON_NUMERIC_CHECK); ?>
	},{
		type: "stackedBar",
		name: "Very_Good",
		dataPoints: <?php echo json_encode($verygood, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}
</script>
</head>
<body>
	
<header>
<div id="top-header">
        <nav>
		<div id="menu">
			<ul>
				<li><a href="feedback.php">Feedback Form</a></li>
				<li class="active"><a href="graph.php">Feedback Result</a></li>
			</ul>
		</div>
		</nav>
	</div>	
</header><br/><br/>


<h3>Blue=Poor, Red=Bad, Green=Good, Cyan=Very Good</h3>
<br/><br/>

<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>   