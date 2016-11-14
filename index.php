<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--<meta http-equiv="refresh" content="2; URL=http://localhost:80/indigo/index.php">-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="index.css">
    <script src="ajax.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
	
	</head>
<body>

<div class="row">

	<div class="col-sm-2">
	</div>

	<div class="col-sm-8">
	<h1>Flaming Indigo : TGIF</h1>
	<br/>

     

	<?php
		

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "indigo";

	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);

	// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
        echo "<script>
                alert(\"Connection Error to db\");
              </script>";

	}



    function test() {
    $bs ="SELECT * FROM requests where tableName='Table A'";
    $result = $conn->query($bs);
    if ($result->num_rows > 0) {
		 echo "found the fucker";
	} else {
		      echo "0 results";
	       }
    }



	$sql = "SELECT * FROM requests where status=0";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
		//	echo "id: " . $row["name"]. " - Name: " . $row["code"]. " " . $row["status"]. "<br>";
		echo "<div class=\"container-fluid\" id=\"display_content\"><div class=\"row\"><div class=\"col-sm-9\"><br><h5>";
		echo  $row["tableName"]; //to be edited
		echo "<br><h5>";
		echo $row["time"];	//to be edited
		echo "<br><br></div><div class=\"col-sm-3\" >";
		echo "<br><button type=\"button\" class=\"btn btn-primary btn-lg active\" id=\"attended\" ><span class=\"glyphicon glyphicon-ok\"></span></button>";	// image
		echo "</div></div></div><br>";
		echo "";
		echo "";
		}
	} else {
		echo "0 results";
	}
	$conn->close();

	/*for  ($i =0; $i<10; $i++ ){
		echo "<div class=\"container-fluid\" id=\"display_content\"><div class=\"row\"><div class=\"col-sm-9\"><br>";
		echo "{{table}}"; //to be edited
		echo "<br>";
		echo "{{time}}<br>";	//to be edited
		echo "<br></div><div class=\"col-sm-3\" >";
		echo "<br>Button goes here";	// image
		echo "</div></div></div><br>";
		echo "";
		echo "";
	}*/
		



	?>
	
		
			


 	
	



	<div class="col-sm-2">
	</div>
</div>

    <!--<script>
        $("button").click(function() {
            alert( "Handler for .click() called." );
        });
    </script>-->


<script>
var app = angular.module('myApp', []);
app.controller('myCtrl', function($scope) {
    $scope.table= "Table AB";
    $scope.time= "200";
});
</script> 

</body>
</html>
