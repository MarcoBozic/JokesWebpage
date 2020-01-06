<head>

<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $(function() {
    $( "#accordion" ).accordion();
  } );
  </script>
</head>


<?php


/* the purpose of search_keyword.php is to display the jokes
that cointain a specific key word
*/


//includes functions from db_connect.php
include "db_connect.php";

//key word variable taken from form
$keywordfromform = $_GET["keyword"];
echo "<h1>Looking for jokes that only have the word <em>$keywordfromform</em> in the question<br></h1>";

// Search the database for word user requested and store it in variable
$sql = "SELECT JokeID, Joke_question, Joke_answer, FROM Jokes_table WHERE Joke_question LIKE '% . $keywordfromform . %'";
$result = $mysqli->query($sql);

echo "Select returned $result->num_rows rows of data<br>";

?>

<div id="accordion">

<?php

//if database is not empty, display all valid infromation
if ($result->num_rows > 0) {
	//output data of each row
	while($row = $result->fetch_assoc())
	{
		echo "<h3>$row[Joke_question]</h3>";
		echo "<div><p>$row[Joke_answer]</p></div>";
	}
}

//if database is empty display an error message 
else
{
	echo "0 results";
}

?>

</div>