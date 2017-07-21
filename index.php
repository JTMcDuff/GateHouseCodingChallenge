<?php
  /* Obviously root and no password isn't viable for production, but this is a local test. */

  $link = mysqli_connect("127.0.0.1", "root","", "gatehouse");

if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

//echo "Success: A proper connection to MySQL was made! The my_db database is great." . PHP_EOL;
//echo "Host information: " . mysqli_get_host_info($link) . PHP_EOL;

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
      <!-- scripts.js contains all the on click scripts.
         startup.js contains the event listeners and initial events on page load
    -->
    <script src='scripts/scripts.js' type='text/javascript'></script>
    <script src='scripts/startup.js' type='text/javascript'></script>
</html>