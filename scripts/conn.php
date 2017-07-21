<?php

class Conn {
	 /* Obviously root and no password isn't viable for production, but this is a local test. */
    //  
    public function connect() {
		$servername='127.0.0.1';
		$username='root';
		$password='';
		$dbname='gatehouse';

		$conn = new mysqli($servername,$username,$password,$dbname);

		if($conn->connect_error){
		  die($con->connect_server);
		  echo "Error.";
		} else {
			echo "Successful Connection.";
		}

		return $conn;
    }
    
    // This should accept args for more specific queries at some point.
    public function retrieve($connection) {
      $sql = "Select * from gamedata";
      $results = $connection->query($sql);
      if($results){
      	echo "Successful retrieval.";
      } else{
      	echo "Retrieval Failure.";
      }
      return $results;
    }

    public function insert($connection,$location,$value) {
       	
	    $sql = "INSERT INTO gamedata(location,value) VALUES ('$location','$value')";

		if($connection->query($sql)===TRUE){
		  echo"Insertion Success.";
		} else {
		  echo "Insertion Failed.";
		}
    }




	//echo $results->fetch_all();
}
?>