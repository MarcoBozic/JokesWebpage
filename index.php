<html>
<head>

</head>

<body>
<h1>Jokes Page</h1>

<?php

include "db_connect.php";


//if there are any values in the table, display them one at a time
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}


echo $mysqli->host_info . "\n";

$sql = "SELECT JokeID, Joke_question, Joke_answer FROM Jokes_table";
$result = $mysqli->query($sql);

if ($result->num_rows > 0)
{
	//output data of each row
	echo "<br>";
	while($row = $result->fetch_assoc())
	{
		echo "id: " . $row["JokeId"] . " - Joke Question: " . $row["Joke_question"] . " " . $row["Joke_answer"] . "<br>";
	}
}

else
{
	echo "0 results";
}


// Search the database for the word chicken
echo "<h2>Show all jokes with the word chicken</h2>";

$sql = "SELECT JokeID, Joke_question, Joke_answer, FROM Jokes_table WHERE Joke_question LIKE '%chicken%'";
$result = $mysqli->query($sql);

if ($result->num_rows > 0)
{
	//output data of each row
	while($row = $result->fetch_assoc())
	{
		echo "id: " . $row["JokeID"] . " - Joke Question: " . $row["Joke_question"] . " " . $row["Joke_answer"] . "<br>";
	}
}

else
{
	echo "0 results";
}


$mysqli->close();

?>


</body>

</html>