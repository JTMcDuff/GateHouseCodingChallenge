<?php
  /* Obviously root and no password isn't viable for production, but this is a local test. */

$servername='127.0.0.1';
$username='root';
$password='';
$dbname='gatehouse';

$conn = new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
  die($con->connect_server);
  echo "Error.";
}

$sql = "INSERT INTO gamedata(location,value) VALUES ('1','TEST')";

if($conn->query($sql)===TRUE){
  echo"Success.";
} else {
  echo "failed.";
}

?>

<!DOCTYPE html>
<html>
  <head>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title> Take Home Test Page -- Gatehouse Media </title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
     <link rel="stylesheet" type="text/css" href="resources/styles.css">
     <link rel="stylesheet" type="text/css" href="resources/queries.css">
  </head>

  <body>
  		<div class="container">

		    <div class="titlebox">
				<h1 class="desktop"> GATEHOUSE MEDIA PRESENTS... </h1>
				<h1 class="mobile"> GHM PRESENTS </h1>
		    </div>

		    <br>

		    <div class="thankyou endedGame">
		      <h2> Thank you for playing! </h2>
		    <div>

		</div>
    

    <script>
      // Dummy array with data.
      let dataArr = ['one','two','three','four','five','six','seven','eight'];

    </script>

  </body>
    <!--
      scripts.js contains all the on click scripts.
      startup.js contains the event listeners and initial events on page load
    -->
    <script src='scripts/scripts.js' type='text/javascript'></script>
    <script src='scripts/startup.js' type='text/javascript'></script>
</html>