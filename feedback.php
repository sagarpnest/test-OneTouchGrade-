<?php
    include('connectiondb.php');
    if(isset($_POST['submit']))
    {
        $q1=$_REQUEST['sel1'];
        $q2=$_REQUEST['sel2'];
        $q3=$_REQUEST['sel3'];
        $q4=$_REQUEST['sel4'];
        $sql="insert into feedback(question1,question2,question3,question4) VALUES ('$q1','$q2','$q3','$q4')";
        if(mysqli_query($conn, $sql)) {
            echo "<script>alert('Data insert Successfully')</script>";
            
         }
        else{
            echo "<script>alert('Some error occur, Try after some time')</script>";
        }
    }
?>


<!DOCTYPE html>
<head>
    <title>Feedback Form</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<header>
<div id="top-header">
        <nav>
		<div id="menu">
			<ul>
				<li class="active"><a href="feedback.php">Feedback Form</a></li>
				<li><a href="graph.php">Feedback Result</a></li>
			</ul>
		</div>
		</nav>
	</div>	
</header><br/>
<br/>
<br/>
<div class="card">
    <h1>Feedback</h1><br/><br/>
    <form method="post" action="#">
    <label>1)Question 1</label><br/>
    <select name="sel1" required>
        <option value="">option</option>
        <option value="poor">Very bad</option>
        <option value="bad">Bad</option>
        <option value="good">Good</option>
        <option value="Very good">Very Good</option>
    </select><br/><br/>
    <label>2)Question 2</label><br/>
    <select name="sel2" required>
        <option value="">option</option>
        <option value="poor">Very bad</option>
        <option value="bad">Bad</option>
        <option value="good">Good</option>
        <option value="Very good">Very Good</option>
    </select><br/><br/>
    <label>3)Question 3</label><br/>
    <select name="sel3" required>
        <option value="">option</option>
        <option value="poor">Very bad</option>
        <option value="bad">Bad</option>
        <option value="good">Good</option>
        <option value="Very good">Very Good</option>
    </select><br/><br/>
    <label>4)Question 4</label><br/>
    <select name="sel4" required>
        <option value="">option</option>
        <option value="poor">Very bad</option>
        <option value="bad">Bad</option>
        <option value="good">Good</option>
        <option value="Very good">Very Good</option>
    </select><br/><br/>
      <input type="submit" name="submit" value="Add">
      <input type="reset" name="clear" value="Clear">      
    </form>
</div>
</body>
</html>